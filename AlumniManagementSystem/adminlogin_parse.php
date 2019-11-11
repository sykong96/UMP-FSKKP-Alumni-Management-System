<?php
		include_once 'connectDB.php';
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		
		
		
		
		
		$sql = "SELECT * FROM  users WHERE username= '$username' and userpwd = '$password' and usertype = 'admin'";
	
		$res=mysqli_query($conn,$sql) or die ("Failed to query database ");
		
		

		$row = mysqli_fetch_array($res);
		
		if ($row['username'] == $username && $row['userpwd'] == $password && $row['usertype']){
			echo "Login successful!!! Welcome ".$row['username'];
			echo "<script type='text/javascript'> window.location='adminMain.php' </script>";
		}else{
			echo "Failed To Login!";
		}
	
	
?>