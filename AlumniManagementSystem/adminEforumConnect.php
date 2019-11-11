<----!insert into database--->
<html>

<?php
	
	include_once 'connectDB.php';
	
	$ftitle = $_POST['ftitle'];
	$fdescription = $_POST['fdescription'];
	$fcontent = $_POST['fcontent'];
	$releasedate = $_POST['releasedate'];
	
	$sql = "INSERT INTO forum(forum_title, forum_description, forum_content, release_date) VALUES ('$ftitle','$fdescription','$fcontent','$releasedate')";
	
	$res=mysqli_query($conn, $sql);
	
	if($res){
		echo "Successfully Created New e-forum!!!";
	}else{
		echo "Creating New e-forum Failed!!!";
		echo "Error : ".mysqli_error();
	}
?>
</html>

