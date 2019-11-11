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
//Retrieve data from donation
$sql = "SELECT donation_id, Donation_type, donation_name, amount, donation_date FROM donation ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>Donation ID</th><th>Donation Type</th><th>Donation Name</th><th>Amount</th><th>Donation Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["donation_id"]."</td><td>".$row["Donation_type"]."</td><td>".$row["donation_name"]."</td><td>".$row["amount"]."</td><td>".$row["donation_date"]."</td><tr>";
    }
    echo "</table>";
} 
else 
{
    echo "0 results";
}
?>
<br><br>


</body>
</html>