<?php
	session_start();
	require_once 'login.php';
	$db = new mysqli($db_hostname,$db_username,$db_password, $db_database);
	if ($db->connect_error)
	{
	  echo "<script>alert('Failed to connect to MySQL: " . $db->connect_error."')</script>";
	}
	$userid=$_SESSION['userid'];


	$itemid=$_GET['item'];
	$status=$_GET['s'];

	$change="";
	if($status==1)	$change=("DELETE FROM likelist WHERE user='$userid' AND item='$itemid'");
	elseif($status==2) $change=("INSERT INTO likelist (user, item) VALUES ('$userid','$itemid')");
	if(!$db->query($change)){
		echo "error".$change;
		exit();
	}

	$result = $db->query("SELECT * FROM likelist WHERE user = '$userid' AND item = '$itemid'");
	if($result->num_rows==0) $status="add to likelist";
	else $status= "my likeitem";
	echo $status;
	
?> 
