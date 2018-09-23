<!doctype html>
<?php session_start(); 
if(empty($_SESSION["idistall"])) header("location:login/index.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" type="text/css" media="all" href="css/filedrag.css" />
        <link rel = "stylesheet" href="plugin/datatables/datatables.min.css">
        <title>Welcome!</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="css/animate.min.css" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
        <link href="css/paper-dashboard.css" rel="stylesheet"/>

        <!--  Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="css/themify-icons.css" rel="stylesheet">

    </head>
    <body>

        <div class="wrapper">
            <?php include("dashboard/sidebar.php");?>
            <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <p class="navbar-brand">WELCOME TO ISTALL - ENJOY OUR SERVICES!</p>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href = "login/functionSignOut.php">SIGN OUT</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            <div class="content">
                <div class="container-fluid">
                    <?php include("dashboard/formEditProfile.php"); ?>
                </div>
            </div>
            <?php include("dashboard/footer.php"); ?>
        </div>
    </div>


</body>

    <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

	<script type="text/javascript">
    	//$(document).ready(function(){

        //	demo.initChartist();

        //	$.notify({
        //    	message: "Welcome to <b>Joshua Natan</b> - You have a lot of job to do !"

        //    },{
        //        type: 'success',
         //       timer: 4000
        //    });

        // });
	</script>
    <script src = "plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#project-table').DataTable();
        } );
    </script>
    <script src="js/filedrag.js"></script>
</html>
