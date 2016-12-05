<?php
	include("config.php");
    session_start();
  
  	$event_name = $_POST['event_name'];
  	$description = $_POST['description'];

    $sql = "INSERT INTO dms_event (eventname,description) VALUES ( '$event_name','$description' )";
    $result = mysqli_query($db,$sql);

    echo "<script>alert('Event added successfully.'); location.href=\"admin_home.php\"; </script>";

?>