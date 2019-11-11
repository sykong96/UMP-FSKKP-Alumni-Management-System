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
//Retrieve data from expenses
$sql = "SELECT expenses_id, expenses_name, expenses_amount, date FROM expenses ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>Expenses ID</th><th>Expenses Name</th><th>Expenses Amount</th><th>Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["expenses_id"]."</td><td>".$row["expenses_name"]."</td><td>".$row["expenses_amount"]."</td><td>".$row["date"]."</td><td>";
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