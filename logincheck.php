 
<?php


	require_once 'login.php';
	$conn=new mysqli ($db_hostname,$db_username, $db_password, $db_database);
	if ($conn->connect_error){
		echo "Failed to connect: " . $conn->connect_error;
	}

	$loginname=$_GET['loginname'];
	$loginpin=$_GET['loginpass'];
	$query="SELECT * FROM userlist WHERE email = '$loginname' AND `password` = '$loginpin'";
	echo "<script>console.log('".$query."')</script>";
	$result=$conn->query($query);

	if($name=$_GET['username']){
		if ($result->num_rows>0) {
			echo "<script type='text/javascript'>alert('User email has been registered. Please try another one.'); window.location.href='index.html';</script>";
		}else{
			$rtmp = $conn->query("SELECT MAX(id) FROM userlist;");
			$userid=1;
			if($rtmp->num_rows!=0){
				$r=$rtmp->fetch_assoc();
				$userid=$r['MAX(id)'];
				$userid++;
			}
			$query="INSERT INTO userlist (id,name,email, password) VALUES ('$userid','$name','$loginname', '$loginpin')";
			$conn->query($query);
			
			echo "<script type='text/javascript'>alert('Thank you for registering. Please login to view the website.'); window.location.href='index.html';</script>";
		}
	

	}else{
		if ($result->num_rows ==0) {
			echo "<script type='text/javascript'>alert('Username and Password do not match our records.');	window.location.href='index.html';</script>";
		} else {
			$r=$result->fetch_assoc();
			$userid=$r['id'];
			echo "<script type='text/javascript'>alert('You are logged in.')</script>";
			  session_start();
			  $_SESSION['userid']=$userid;

			 // include 'Homepage.php';
			echo "<script>window.location.href='Homepage.php';</script>";
			
		}
	}
	$conn->close();
	


?>

