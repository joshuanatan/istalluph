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
    $sql = "select id from member where email = '.$email.'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
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