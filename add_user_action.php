<?php
	include("config.php");
    session_start();
  
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$fullname = $_POST['fullname'];

    $sql = "INSERT INTO dms_users (username,password,fullname) VALUES ( '$username','$password','$fullname' )";
    $result = mysqli_query($db,$sql);

    echo "<script>alert('User added successfully.'); location.href=\"admin_home.php\"; </script>";

?>