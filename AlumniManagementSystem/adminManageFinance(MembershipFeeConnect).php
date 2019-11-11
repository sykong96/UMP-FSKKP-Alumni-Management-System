<----!insert into database--->
<html>

<?php
	
	include_once 'connectDB.php';
	
	$membershipfee = $_POST['membershipfee'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	
	$sql = "INSERT INTO financial(total, year, month) VALUES ('$membershipfee','$year','$month')";
	
	$res=mysqli_query($conn, $sql);
	
	if($res){
		echo "Successfully Created New Membership Fee!!!";
	}else{
		echo "Creating New Membership Fee Failed!!!";
		echo "Error : ".mysqli_error();
	}
?>
</html>

