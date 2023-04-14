<?php
include_once 'functn.php';
$pdo = pdo_connect_mysql();
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection

    $stmt = $pdo->prepare('SELECT * FROM gtech WHERE id = ?');
    $stmt->execute([$_GET['id']]);
     // Fetch the exc$excursions from the database and return the result as an Array
    $gtechs = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the exc$excursions exists (array is not empty)
    if (!$gtechs) {
        // Simple error to display if the id for the exc$excursions doesn't exists (array is empty)
        exit(' does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit(' does not exist!');
}
?>


<?=template_header('users')?>

<div class="excursion content-wrapper">
  <div>

  <div class="section7-container">
		<div class="sec7">
		 <div class="sec7-content" >
			 <!-- <h6>welcome to GIGGYTECH
				  </h6> -->
			 <h3>Profile Page</h3>
			 <h6>Thank you for contacting giggytech. 
				We've received your enquiry and look forward to learning more
				 about your digital ambition soon !</h6>
				   <a href="login.html" class="btn">
					 <button>make a new enquiry</button>
				   </a>  
				   <table>
					<tr>
						<td>Username:</td>
						<td><?=$gtechs['username']?></td>
					</tr>
					<tr>
						<td>Category:</td>
						<td><?=$gtechs['category']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$gtechs['email']?></td>
					</tr>
				</table>
			
				   
		 </div>
		</div>
		 
	  </div>


        <h1 class="name"><?=$gtechs['username']?></h1>
        <h3><?=$gtechs['category']?> </h3>
      
        <a href="booking.html" class="submit"><button>Proceed to Booking </button>
        
        
    </div>
    

</div>

<?=template_footer()?>