<?php
	
		
		include_once 'connectDB.php';
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$program = $_POST['program'];
		$batch = $_POST['batch'];
		$grad_year = $_POST['grad_year'];
		
		
		$sql = "INSERT INTO users(username, userpwd, usertype, name, program, batch, gradyear) VALUES ('$username','$password','member','$name','$program','$batch','$grad_year')";
		
	
		$res=mysqli_query($conn, $sql);
	
		if($res){
			echo "Successfully Register !";
			echo "<script type='text/javascript'> window.location='login.php' </script>";
		}else{
			echo "Register Failed";
			echo "Error : ".mysqli_error();
		}


?>

