<?php

session_start();

require_once("functions.php");
$conn = getConnection();

//$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['number'], $_POST['email'], $_POST['category'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['number']) || empty($_POST['email'] ) || empty($_POST['category'] )  ) {
	// One or more values are empty.
	exit('Please complete the registration form');
}


// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT id, number FROM gtech WHERE email = ?')) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Email is not valid!');
    }
    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
        exit('Username is not valid!');
    }

	
    
	// Bind parameters (s = string, i = int, b = blob, etc), hash the number using the PHP number_hash function.
	// $stmt->bind_param('s', $_POST['email']);
	// $stmt->execute();
	// $stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'email exists, please choose another!';
	} else {
		// Username doesnt exists, insert new customer account
        if ($stmt = $conn->prepare('INSERT INTO gtech (username, number, email, category, comment ) VALUES (?, ?, ?, ?, ?)')) {
	// We do not want to expose numbers in our database, so hash the number and use number_verify when a user logs in.
	$number = $_POST['number'];
	$uniqid = uniqid();
    $stmt->bind_param('sssss', $_POST['username'], $_POST['number'], $_POST['email'],  $_POST['category'], $_POST['comment']);

	$stmt->execute();
	//echo 'You have successfully registered, you can now login!';




//mail($_POST['email'], $subject, $message, $headers);
header("Location: profile.php");
} else {
	// Something is wrong with the sql statement, check to make sure customers table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure customers table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$conn->close();
?>