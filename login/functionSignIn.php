<?php
session_start();
include("../connection.php");
echo "lolos";
$sql = "select * from member where email = ? and pass = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $email, $pass); //fail disini
$email = $_POST["email"];
$pass = $_POST["pass"];
echo $email;
echo $pass; 
if($stmt->execute()){

}

$result = $stmt->get_result();
if($row = $result->fetch_assoc()){
    $_SESSION["idistall"] = $row["nama"];
    echo $_SESSION["idistall"];
    echo $row["nama"];
    header("location:../index.php");
    die();
    exit();
}
else{
    header("location:index.php");
    echo "Wrong Username / Password";
    die();
    exit();
}
?>