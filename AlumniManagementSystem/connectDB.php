<!---Test Database Connection--->

<?php

	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="weproject";
	
	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );
	
	
	if($conn){
		
	}else{
		echo "Connect to database: ".$dbName."failed<br/>";
		echo "Error : ".mysqli_error();
	}
?>


