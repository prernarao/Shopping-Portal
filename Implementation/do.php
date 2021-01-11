<?php
session_start();
$id=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$conn =mysqli_connect($servername,$username,$password,$dbname);
$table=$_SESSION["username"];
global $conn;
$loc = substr($_SESSION['curr'],9);
// echo $loc;
// $name=$_GET['name'];

// echo substr($_SESSION['curr'],9);
// echo "$name";
if(!isset($_POST['size']))
    $_POST['size']='';
$sql = "INSERT INTO $table (PRODUCTID,SIZE,COUNT) VALUES('".$id."','".$_POST['size']."',1)";

if (mysqli_query($conn, $sql)) {

    header("Location: $loc");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//
mysqli_close($conn);
?>
