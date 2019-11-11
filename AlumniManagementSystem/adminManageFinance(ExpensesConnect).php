<----!insert into database--->
<html>

<?php
	
	include_once 'connectDB.php';
	
	$expensesname = $_POST['expensesname'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	
	$sql = "INSERT INTO expenses(expenses_name, expenses_amount, date) VALUES ('$expensesname','$amount','$date')";
	
	$res=mysqli_query($conn, $sql);
	
	if($res){
		echo "Successfully Created New Expenses!!!";
	}else{
		echo "Creating New Expenses Failed!!!";
		echo "Error : ".mysqli_error();
	}
?>
</html>

