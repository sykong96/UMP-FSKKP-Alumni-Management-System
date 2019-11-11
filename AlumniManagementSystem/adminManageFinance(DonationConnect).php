<----!insert into database--->
<html>

<?php
	
	include_once 'connectDB.php';
	
	$Type = $_POST['Type'];
	$donationname = $_POST['donationname'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	
	$sql = "INSERT INTO donation(Donation_type, donation_name, amount, donation_date) VALUES ('$Type','$donationname','$amount','$date')";
	
	$res=mysqli_query($conn, $sql);
	
	if($res){
		echo "Successfully Created New Donation!!!";
	}else{
		echo "Creating New Donation/Event Failed!!!";
		echo "Error : ".mysqli_error();
	}
?>
</html>

