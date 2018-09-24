<?php
session_start();
include("../connection.php");

$sql = "INSERT INTO `member` VALUES (NULL, ?, ?, ?, ?, ?, ?, curdate(), '1', '1');";
if($stmt = $conn->prepare($sql)) {
    $stmt->bind_param('sssssi',$nama, $email, $pass, $line, $nohp, $jurusan);
    $nama = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $line = $_POST["line"];
    $nohp = $_POST["nohp"];
    $jurusan = $_POST["jurusan"];
    $stmt->execute();

    $sql = "select max(id) as 'id' from member;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $path = "../upload";
    mkdir($path."/".$row["id"]);
    if(file_exists($path."/".$row["id"])){
        error_reporting(0);
        ini_set("display_errors",0);
        echo "File tersedia";
        
    }
    else{
        echo "File yang di cari tidak ada !";
    }

    $_SESSION["idistall"] = $row["id"];
    $_SESSION["namaistall"] = $nama;
    $_SESION["uploadpath"] = $_SERVER["SERVER_NAME"]."/upload/".$row["id"]."/";
    header("location:../index.php");
    die();
    exit();
}
else{
    //header("location:index.php");
    echo "Fail to Sign Up";
    die();
    exit();
}
?>