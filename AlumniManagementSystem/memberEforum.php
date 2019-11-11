<html>
<head>
	<title>E-Forum</title>
	<link rel="stylesheet" type="text/css" href="adminPage.css"/>
</head>

<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		padding:10px;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>

<body>
	<a href="index.html" color="red">Logout</a>
	<div id="container">
		<div id="header">
		</div>
		<center><h1>Welcome to UMP-FSKKP Alumni Management System</h1></center>
		<div id="content">
		
			<div id="nav">
				<h2>Navigation</h2>
				
				<ul>
					<li><a href="memberMain.php">MAIN PAGE</li>
					<li><a href="memberA&E.php">ANNOUNCEMENT/EVENT</a></li>
					<li><a href="memberMyAccount.php">MY ACCOUNT</a></li>
					<li><a href="">E-FORUM*</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			
				<h2>E-Forum</h2>
				<br><br>
				<?php
					include_once"connectDB.php";
				?>

				<?php
					//Retrieve data from forum
					$sql = "SELECT release_date, forum_title FROM forum ";
					
					
					$result = $conn->query($sql);

					if ($result->num_rows > 0) 
					{
						echo "<table>";
						
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							echo "<tr><td>".$row["release_date"]."</td><td>".$row["forum_title"]."</td></tr>";
						}
						echo "</table>";
					} 
					else 
					{
						echo "0 results";
					}
				?>
				
			</div>
			
			
		
		</div>
		
		<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
		</div>
		
	</div>

</body>



</html>