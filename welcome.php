
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .button-basic{
        margin-top:80%;
      }
      #fixedbutton {
    position: fixed;
    bottom: 0px;
    right: 0px; 
}
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
         
          <li>
            <a href="#"><span class="fa fa-gift mr-3"></span> Transaction</a>
          </li>
          <li>
            <a href="Profile.php"><span class="fa fa-gift mr-3"></span> Profile</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> BusAvailable</a>
          </li>
          <li>
            <a href="resetpassword.php"><span class="fa fa-cog mr-3"></span> Resetpassword</a>
          </li>
          <li>
            <a href="logout.php"><span class="fa fa-support mr-3"></span> Signout</a>
          </li>
          <li>
          <a href="logout.php"><span class="fa fa-support mr-3"></span> Signout</a>
          </li>
           
        </ul>

    	</nav>

     
</div>


		<button id="fixedbutton">Next</button>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>