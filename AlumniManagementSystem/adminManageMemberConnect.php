<----!insert into database--->
<html>

<?php
	
	include_once 'connectDB.php';
	
	$dateofpayment = $_POST['dateofpayment'];
	$years = $_POST['years'];
	$payment = $_POST['payment'];
	$proof = $_POST['proof'];
	
	$sql = "INSERT INTO membershipfee(payment_date, years, totalPayment, ProofPayment) VALUES ('$dateofpayment','$years','$payment','$proof')";
	
	$res=mysqli_query($conn, $sql);
	
	if($res){
		echo "Successfully Created New Membership Fee!!!";
	}else{
		echo "Creating New Membership Fee Failed!!!";
		echo "Error : ".mysqli_error();
	}
?>
</html>


