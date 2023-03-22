<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="../assests/stylesheet/style.css" rel="stylesheet" type="text/css">
	<link href="../assests/stylesheet/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php



function getConnection() {
	define('DB_NAME', 'unn_w21058580');
	define('DB_USER', 'root');
	define('DB_PASSWORD','');
 	define('DB_HOST', 'localhost');
	$conn = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME) 
	or die("Can not connect to DB");
	return $conn;
 }


function makePageStart() {
	$pageStartContent = <<<PAGESTART
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>giggytech.com</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@200&family=Shrikhand&family=Tangerine&display=swap" rel="stylesheet">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrapmincss"rel="stylesheet"integrity="sha384-EVSTQN3azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  <link rel="stylesheet" href="css/skippr.css">
			<link rel="stylesheet" href="main.css">
			<link rel="stylesheet" href="mediaQuery.css">
			<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
		<body>
PAGESTART;
	$pageStartContent ;
	return $pageStartContent;
	
		
}

function makeNavMenu() {
	$navMenuContent = <<<NAVMENU

	<!-- navigation-start -->
    
	<div class="navigation">
	  <div class="nothing"></div>
	  
	  <div class="logo1">
		<a href="index.html" >
		  <img src="img/logo 1-1.png" >
			</a>
	  </div> 
		<div class="nav-section1">
	
		<ul>
		   
			<li> <a href="index.html"> Home </a></li>
			<li> <a href="#about">about</a></li> 
			<li> <a href="#services">services</a></li> 
			<li> <a href="#portfolio">portfolio</a></li>
			<li> <a href="#blog">blog</a></li>
			<li> <a href="#contact" >contact</a></li>
			<a href="login.html"><i class="fas fa-user-circle"></i>Login</a>
		  
			
  
		</ul>
		
	</div>
  
	<div class="box">
	  
	  <input type="text" placeholder="Search here"  name=""  >
	  <svg width="16" height="16" class="_35lll _3FpBp _24pSQ" 
	  viewBox="0 0 32 32" version="1.1" aria-hidden="false">
	  <path d="M22 20c1.2-1.6 2-3.7 2-6 0-5.5-4.5-10-10-10S4 8.5 4 14s4.5
	   10 10 10c2.3 0 4.3-.7 6-2l6.1 6 1.9-2-6-6zm-8 1.3c-4 0-7.3-3.3-7.3-7.3S10 6.7 14 6.7s7.3 3.3 7.3 7.3-3.3 7.3-7.3 7.3z">
	  </path></svg>
	  
  </div>
	 </div>
	
  <!-- Top Navigation Menu -->
  <div class="topnav-container">
	<div class="topnav">
	  <div class="logo">
		<a href="index.html" >
		  <img src="img/logo 1-1.png" >
			</a>
	  </div>
	  <!-- Navigation links (hidden by default) -->
	  <div id="myLinks" class="nav2">
		<ul>
			 
		  <li> <a href="index.html"> Home </a></li>
		  <li> <a href="#about">about</a></li> 
		  <li> <a href="#services">services</a></li> 
		  <li> <a href="#portfolio">portfolio</a></li>
		  <li> <a href="#blog">blog</a></li>
		  <li> <a href="#contact" >contact</a></li>
		  <a href="login.html"><i class="fas fa-user-circle"></i>Login</a>
		
		  
	
	  </ul>
	  </div>
	  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
		</svg>
	  </a>
	</div>
  </div>
	
	

NAVMENU;
	$navMenuContent;
	return $navMenuContent;
}

function MakeBannerSection() {
		$bannerContent = <<<Banner

		<div class="navBanner" >
	<div class="banner-content" >
		<h1>Explore Dubai with all your senses.
			<br> We'll motivate you to begin creating your own tale.</h1>
			  <a href="#">
				<button>Explore
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
					  </svg>
				</button>
			  </a>  
			  <!-- <a href="#" class="btn-l">
			   <button >Bookings</button>
			 </a> -->
	</div>
	</div>

Banner;
	$bannerContent;
	return $bannerContent;

}

function makeFooter() {
	$footContent = <<<FOOT
	</main>
	<footer>
	
	<div class="footerGridTwo">
	<p>&copy; 2023, CityTourDubai</p> 
	<p>privacy policy</p>
	<a href="securityReport.pdf"> Security Report</a>

	<div class="footerIcons" >
	  <p>follow us </p>
	  <div class="icons">
		<a href="">
		  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
			<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
		  </svg></a>
  
		 <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
		  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
		</svg> </a>
  
		 <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
		  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
		</svg></a>
	  </div>
  </div>

	
</footer>
</body>
FOOT;
	$footContent .="\n";
	return $footContent;
}

function makePageEnd() {
	return "</body>\n</html>";
}
?>


</body>
</html>













































































































