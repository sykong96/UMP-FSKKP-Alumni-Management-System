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
//Retrieve data from financial
$sql = "SELECT financial_id, total, year, month FROM financial ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>Financial ID</th><th>Total Payment Received</th><th>Year</th><th>Month</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["financial_id"]."</td><td>".$row["total"]."</td><td>".$row["year"]."</td><td>".$row["month"]."</td><td>";
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