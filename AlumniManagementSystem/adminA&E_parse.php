<----!insert into database--->
<html>

<?php
	
	include_once 'connectDB.php';
	
	$ptit = $_POST['ptitle'];
	$pdes = $_POST['pdescription'];
	$pcont = $_POST['pcontent'];
	$ptyp = $_POST['pType'];
	
	$sql = "INSERT INTO announcement(postTitle, postDescription, postContent, postType) VALUES ('$ptit','$pdes','$pcont','$ptyp')";
	
	$res=mysqli_query($conn, $sql);
	
	if($res){
		echo "Successfully Created New Annoucement/Event!!!";
	}else{
		echo "Creating New Annoucement/Event Failed!!!";
		echo "Error : ".mysqli_error();
	}
?>
</html>

