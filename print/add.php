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

<?php

if(isset($_REQUEST['btn_insert']))
{
    try
    {
        $description = $_REQUEST['description'];
        $name= $_FILES['file']['name'];
        $tmp_name= $_FILES['file']['tmp_name'];
      //  $position= strpos($name, "."); 
    ///    $fileextension= substr($name, $position + 1);
    //    $fileextension= strtolower($fileextension);
        $tgl = date('Y-m-d');
        $jam = date('h:i:sa');
        $path = '../upload';
        $directory="../upload"; //set upload folder path for update time previous file remove and new file upload for next use
        
        $id = "asdsad";
        mkdir($path."/".$id);
        $path2 = $path."/".$id."/";
        echo $path2;
        
        /*
        echo $path2;
        if (!mkdir($path, 0, true)) {
            die('Gagal membuat folder...');
        }
        */
       // $path="upload/".$image_file; //set upload folder path
//Notice: Undefined variable: path2 in C:\xampp\htdocs\istall\print\add.php on line 116
        if(empty($description)){
            $errorMsg="Please Enter Description";
        }
        else if(empty($name)){
            $errorMsg="Please Select File";
        }

        //if(!isset($errorMsg)&&move_uploaded_file($tmp_name, $path."/".$id."/".$name))
        if(!isset($errorMsg)&&move_uploaded_file($tmp_name, $path."/".$id."/".$name))
        {
          //  $query = "insert into fileupload values ('2','1',:ftgl,:fjam,:fname,:fdescription,'','','','0')";

    //        $stmt = $conn->prepare($sql); //sql insert query
      //      $stmt->bindParam(':ftgl',$tgl); 
        //    $stmt->bindParam(':fjam',$jam); 
          //  $stmt->bindParam(':fname',$name); 
            //$stmt->bindParam(':fdescription',$description);   //bind all parameter 

            $sql = "insert into fileupload values (2,1,?,?,?,?,'','','','')";
            echo $tgl."  ";
            echo $jam."  ";
            echo $name."  ";
            echo $description;
            $stmt = $conn->prepare($sql);
            
            $stmt->bind_param('ssss',$tgl,$jam,$name,$description);
            
            echo "yup";
            if($stmt->execute())
            {
                echo "sukses";
                $insertMsg="File Upload Successfully........"; //execute query success message
                header("refresh:3;../index.php"); //refresh 3 second and   redirect to index.php page
            }
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

?>
