<?php

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_GET['action'])) 
	{
	//	$date1 = $_GET['group_id'];
		
		$username = $_GET['username'];
//		$interested = $_GET['interested'];
		$password = $_GET['password'];
		
//		 $date1 = date("d/m/Y");
		
		//$pass = $_GET['pass'];
	}
	
//	$sql = "INSERT INTO vnnaik_interested_event(event_name,interested,name,reached) VALUES ('$event_name','$interested','$name','No')"; 
//$result = mysql_query($sql);


$sql=mysql_query("SELECT * FROM shruti_main where username = '$username' and password = '$password' order by id limit 1");
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));// this will print the output in json
mysql_close();


?> 
