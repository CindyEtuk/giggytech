<?php

require_once("functions.php");
$conn = getConnection();

//$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['name'], $_POST['email'], $_POST['number'] , $_POST['comment'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['comment']) ) {
	// One or more values are empty.
	exit('Please complete the registration form');
}

// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT id, email FROM gtech WHERE name = ?')) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Email is not valid!');
    }
    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['name']) == 0) {
        exit('name is not valid!');
    }
    if (strlen($_POST['number']) > 20 || strlen($_POST['number']) < 5) {
        exit('Password must be between 5 and 20 characters long!');
    }
	
	

    
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['name']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'name exists, please choose another!';
	} else {
		// Username doesnt exists, insert new customer account
        if ($stmt = $conn->prepare('INSERT INTO gtech (name, email, number, comment ) VALUES (?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//$uniqid = uniqid();
    $stmt->bind_param('ssss', $_POST['name'], $_POST['email'], $_POST['number'], $_POST['comment']);

	$stmt->execute();
	//echo 'You have successfully registered, you can now login!';


//mail($_POST['email'], $subject, $message, $headers);
header("Location: home.php");
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
$con->close();
?>