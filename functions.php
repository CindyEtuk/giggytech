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


// function getConnection() {
// 	define('DB_NAME', 'unn_w21058580');
// 	define('DB_USER', 'unn_w21058580');
// 	define('DB_PASSWORD','homegirl');
//  	define('DB_HOST', 'localhost');
// 	$conn = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME) 
// 	or die("Can not connect to DB");
// 	return $conn;
//  }

function makePageStart() {
	$pageStartContent = <<<PAGESTART
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>tour.com</title>
		<link href="main.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
		<body>
PAGESTART;
	$pageStartContent ;
	return $pageStartContent;
	
		
}

function makeNavMenu() {
	$navMenuContent = <<<NAVMENU
	
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
          <!-- <li> <a href="login.html">
            Login</a></li>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg> -->
        
          

      </ul>
      
  </div>

  <a href="register.html" class="box">
    <button>GET STARTED</button>
  </a> 
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
        <li> <a href="register.html">
          get started</a></li>
      
        
  
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
	<div id="contact" class="sec9-container">
  <div class="sec9-grid">
      <div class="sec9">
          
        <img src="img/dp 1.jpg">
          <p>In the world of Internet Customer Service, 
            it’s important to remember your competitor is only one mouse click away</p>
          
      </div>
      <div class="sec9">
    
          <h1>contact info</h1>
          <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg> new site estate, FHA Airport Road Abuja </p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg> +2347036149535</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
          </svg> info@giggytech.com</p>
         
      </div>
      <div class="sec9">
          
          <h1>links</h1>
           <a href="index.html"> About company </a> <br>
           <a href="distress-sale.html" style="color: red;"> Our services</a><br> 
          <a href="about.html">portfolio</a><br>
          <a href="https://www.instagram.com/giggytech/?igshid=YmMyMTA2M2Y%3D"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg></a><br>

      </div>
      <div class="sec9">
          
          <h1> </h1>
           <a href="register.html">team</a><br>
           <a href="" >contact</a>
           <P>© copyright2022 giggytech technology ltd</P>
        
      </div>
    </div>
</div>
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













































































































