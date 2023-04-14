<?php
include_once 'functn.php';
$pdo = pdo_connect_mysql();

?>


<?=template_header('users')?>



  <div class="section7-container">
		<div class="sec7" style="background-image: url(img/g7.jpg);" >
		 <div class="sec7-content "   >
			 <!-- <h6>welcome to GIGGYTECH
				  </h6> -->
			 <h3>Enquiry Recieved!</h3>
			 <h6>Thank you for contacting giggytech. 
				We've received your enquiry and look forward to learning more
				 about your digital ambition soon !</h6>
				   <a href="register.html" class="btn">
					 <button>make a new enquiry</button>
				   </a>  
			
		 </div>
		</div>
		 
	  </div>

    

<?=template_footer()?>
