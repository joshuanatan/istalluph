<!DOCTYPE html>
<?php session_start(); if(!empty($_SESSION["idistall"]) or !empty($_SESSION["namaistall"])) header("location:functionSignOut.php");?>
<html lang="en">
<head>
	<title>Welcome </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php include("formsignin.php");?>
                <?php include("formsignup.php");?>
                <?php include("formuploadfile.php");?>
				<div class="login100-more" style="background-image: url('../img/cover%20istall.jpg');"> 
				</div>
			</div>
		</div>
	</div>
	
	

	
	<script>
    function goSignUp(){
        document.getElementById("signin-container").style.display = "none";
        document.getElementById("signup-container").style.display = "block";
        document.getElementById("directprint-container").style.display = "none";
    }
        
    function goSignIn(){
        document.getElementById("signup-container").style.display = "none";
        document.getElementById("signin-container").style.display = "block";
        document.getElementById("directprint-container").style.display = "none";
    }
        
    function goDirectPrint(){
        document.getElementById("signup-container").style.display = "none";
        document.getElementById("signin-container").style.display = "none";
        document.getElementById("directprint-container").style.display = "block";
    }
    </script>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>