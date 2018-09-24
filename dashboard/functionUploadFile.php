<?php
session_start();
include("../connection.php");error_reporting(E_ALL);
if(isset($_REQUEST['submit'])){ //buat ngecek apakah request method uda ada blom di btn insert
    try{
        $description = $_REQUEST['description']; //semacam get atau post, tapi biar ga ada error kalau method di front end d ganti
        $name= $_FILES['file']['name'];
        $tmp_name= $_FILES['file']['tmp_name'];

        $tgldl = $_POST["dateline"];
        $jam = $_POST["jam"];

        if(empty($description)){
            $errorMsg="Please Enter Description";
        }
        else if(empty($name)){
            $errorMsg="Please Select File";
        }   
        if(move_uploaded_file($tmp_name, "../".$_SESSION["uploadpath"]."/$name")) echo "sukses"; //filenya gabole ada spasi
        if(!isset($errorMsg)){
            
            $sql = "insert into project values (null,?,curdate(),?,?,?,?,1)";
            
            $stmt = $conn->prepare($sql);
            
            $stmt->bind_param('sssss',$_SESSION["idistall"],$tgldl,$jam,$name,$description);
            
            if($stmt->execute()){
                echo "sukses";
                header("location:../index.php"); 
            }
        }
        else echo "fail";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

?>
