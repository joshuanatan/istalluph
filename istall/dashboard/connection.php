<?php
//$servername = $_SERVER["SERVER_NAME"];
//$username = "istallup_jn";
//$password = "gI@ntm0use";
//$dbname = "istallup_istalluph";
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//else echo "Connected successfully";
?>

<?php
$servername = $_SERVER["SERVER_NAME"];
$username = "root";
$password = "";
$dbname = "istallup_istalluph";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else echo "Connected successfully";
?>