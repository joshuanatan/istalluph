<?php
session_start();
include("../connection.php");
$sql = "INSERT INTO `member` VALUES (NULL, ?, ?, ?, ?, ?, ?, curdate(), '1', '1');";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssi',$nama, $email, $pass, $line, $nohp, $jurusan);
$nama = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$line = $_POST["line"];
$nohp = $_POST["nohp"];
$jurusan = $_POST["jurusan"];

if($stmt->execute()) {
    echo "<br>";
    echo $email." </br>";
    $sql = "select id from member where email = '$email' order by id asc LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "oke 1<br>";
    $result = $stmt->get_result();
    echo "oke 2<br>";
    if($result->num_rows === 0) echo "No rows";
    while($row = $result->fetch_assoc()) {
        //$ids[] = $row['id'];
        $id = $row['id'];
        //echo "id = ";
        //var_export($ids);
        //echo $row["id"];
        //echo $id;  
        
        $path = "../upload";
        mkdir($path."/".$id);
        if(file_exists($path."/".$id)){
            //error_reporting(0);
            //ini_set("display_errors",0);
            echo "File tersedia";
            
        }else{
            echo "File yang di cari tidak ada !";
        }
        //echo "<br>".$path."/".$id;
    }
    $_SESSION["idistall"] = $nama;
    header("location:../index.php");
    die();
    exit();
}
else{
    header("location:index.php");
    echo "Fail to Sign Up";
    die();
    exit();
}
?>