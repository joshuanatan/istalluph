<?php
session_start();
include("../connection.php");
echo "lolos";
$sql = "select * from member where email = ? and pass = ?";
if($stmt = $conn->prepare($sql)){
    $stmt->bind_param('ss', $email, $pass);
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $stmt->execute();
    $result = $stmt->get_result();
    if($row = $result->fetch_assoc()){
        $_SESSION["idistall"] = $row["id"];
        $_SESSION["namaistall"] = $row["nama"];
        $_SESSION["uploadpath"] = "upload/".$row["id"]."/"; //nanti /istallnya diapus
        echo $_SESSION["uploadpath"];
        header("location:../index.php");

    }
    else  header("location:index.php");
}
else header("location:index.php");



?>