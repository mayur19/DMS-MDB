<?php
include("config.php");

$name=$_POST["name"];
$age=$_POST["age"];
$username=$_POST["username"];
$password=$_POST["password"];

$statement = mysqli_prepare($db,"INSERT INTO register (name,age,username,password) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($statement,"siss",$name,$age,$username,$password);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);
?>