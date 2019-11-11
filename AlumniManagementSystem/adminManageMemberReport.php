<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Financial report</title>
</head>

<body>

<br><br>
<?php
include_once"connectDB.php";
?>


<?php
//Retrieve data from membershipfee
$sql = "SELECT fee_id, payment_date, years, totalPayment, ProofPayment FROM membershipfee ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>Membership Fee ID</th><th>Payment Date</th><th>Years</th><th>Total Payment</th><th>Proof of Payment</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["fee_id"]."</td><td>".$row["payment_date"]."</td><td>".$row["years"]."</td><td>".$row["totalPayment"]."</td><td>".$row["ProofPayment"]."</td><td>";
    }
    echo "</table>";
} 
else 
{
    echo "0 results";
}
?><br><br>


 


</body>
</html>