<?php 
	include("config.php");
	session_start();
	session_destroy();
	mysql_close($db);
	header("location: index.html");
 ?>