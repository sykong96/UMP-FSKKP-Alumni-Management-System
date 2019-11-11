<?php
	
		
		include_once 'connectDB.php';
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
	
		
		
		$sql = "INSERT INTO users(username, userpwd, usertype, name) VALUES ('$username','$password','admin','$name')";
		
	
		$res=mysqli_query($conn, $sql);
	
		if($res){
			echo "Successfully Register a new admin!";
		}else{
			echo "Register Failed";
			echo mysqli_error($conn);
		}


?>
