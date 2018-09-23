<?php
include("../connection.php");
echo "lolos";
session_start();

try
{
    $description = $_POST["description"];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $path = "../upload";
    
    $ids = $_SESSION["id"];
    echo $ids;

    if(empty($description)){
        $errorMsg="Please Enter Description";
    }
    else if(empty($name)){
        $errorMsg="Please Select File";
    }

    if(move_uploaded_file($tmp_name,$path."/".$id."/".$name))
    {
        $sql = "insert into fileupload values(NULL,?,curdate(),curtime(),?,?,NULL,NULL,NULL,0)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iss', $id, $name, $description);
        if($stmt->execute()){
            $insertMsg="File Upload Successfully........";
            echo "sukses upload";
            //header("refresh:3;../index.php"); //refresh 3 second and   redirect to index.php page
        }
    }
}
catch(PDOException $e)
    {
        echo $e->getMessage();
    }
/*
$id = $_SESSION["id"];
echo $id;

if(isset($_REQUEST['btn_insert']))
{
    try
    {
        $description = $_REQUEST['description'];
        $name= $_FILES['file']['name'];
        $tmp_name= $_FILES['file']['tmp_name'];
        $tgl = date('Y-m-d');
        $jam = date('h:i:sa');
        $path = '../upload';
        $directory="../upload";
        $id = $_SESSION["id"];
        echo $id." ";
        echo $path;
        
        $id = "cobacoba";
        mkdir($path."/".$id);
        $path2 = $path."/".$id."/";
        echo $path2;
        

        if(empty($description)){
            $errorMsg="Please Enter Description";
        }
        else if(empty($name)){
            $errorMsg="Please Select File";
        }

        if(!isset($errorMsg)&&move_uploaded_file($tmp_name, $path."/".$id."/".$name))
        {
            $sql = "insert into fileupload values (2,1,?,?,?,?,'','','','')";
            $stmt = $conn->prepare($sql);   
            $stmt->bind_param('ssss',$tgl,$jam,$name,$description);
            if($stmt->execute())
            {
                echo "sukses";
                $insertMsg="File Upload Successfully........"; //execute query success message
               // header("refresh:3;../index.php"); //refresh 3 second and   redirect to index.php page
            }
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}


function hai(){
    echo "Folder berhasil dibuat";
}
*/
?>