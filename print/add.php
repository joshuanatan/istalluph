<!doctype html>
<?php session_start(); 
//if(empty($_SESSION["idistall"])) header("location:login/index.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" type="text/css" media="all" href="../css/filedrag.css" />
        <link rel = "stylesheet" href="../plugin/datatables/datatables.min.css">
        <title>Welcome!</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        
        <!-- Bootstrap core CSS     -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        
        <!-- Animation library for notifications   -->
        <link href="../css/animate.min.css" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
        <link href="../css/paper-dashboard.css" rel="stylesheet"/>

        <!--  Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="css/themify-icons.css" rel="stylesheet">

    </head>
    
    
    <body>
        <?php include("../connection.php");?>

        <form method="post" class="form-horizontal" enctype="multipart/form-data">
     
            <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
    
            <div class="form-group">
                <label class="col-sm-3 control-label">File</label>
                <div class="col-sm-6">
                    <input type="file" name="file" class="form-control" />
                    <div id="filedrag">or drop files here</div>
                </div>
            </div>
    
            <div class="form-group">
                <label class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" class="form-control" placeholder="enter name" />
                </div>
            </div>
         
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
     
        </form>
    </body>
    
    <!--   Core JS Files   -->
    <script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
    	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src = "../plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#project-table').DataTable();
        } );
    </script>
    <script src="../js/filedrag.js"></script>
</html>

