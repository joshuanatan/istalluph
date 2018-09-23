<?php
session_start();
include ("connection.php");
echo "lulus";

try{
    $id     = $_SESSION["id"];
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];
    $line   = $_POST['line'];
    $hp     = $_POST['hp'];
    $major  = $_POST['major'];
    
    $sql = "update member set 
    nama    = :name,
    email   = :email,
    pass    = :pass,
    line    = :line,
    nohp    = :hp,
    jurusan = :major
    where id = :id ";
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_par  am(':id',$id, PDO::PARAM_INT);
    $stmt->bind_param(':name',$name, PDO::PARAM_STR);
    $stmt->bind_param(':email',$email, PDO::PARAM_STR);
    $stmt->bind_param(':pass',$pass, PDO::PARAM_STR);
    $stmt->bind_param(':line',$line, PDO::PARAM_STR);
    $stmt->bind_param(':hp',$hp, PDO::PARAM_STR);
    $stmt->bind_param(':major',$major, PDO::PARAM_INT);
    
    if($stmt->execute()){
        header("location:../index.php");
    }   
    else{
        die('Fail to Update');
    }
    
    
}
catch (PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>