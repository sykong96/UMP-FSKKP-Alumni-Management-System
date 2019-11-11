<html>
<head>
	<title>My Account</title>
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
					<li><a href="">MY ACCOUNT*</a></li>
					<li><a href="memberEforum.php">E-FORUM</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			
				<h2>My Profile</h2>
				
				<?php
					include_once"connectDB.php";
				?>

				<?php
					//Retrieve data from users
					$sql = "SELECT name, gradyear, batch,program FROM users WHERE username='kong96'";
					
					
					$result = $conn->query($sql);

					if ($result->num_rows > 0) 
					{
						echo "<table>";
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							echo "<tr><th>Name</th><td>".$row["name"]."</td><tr>";
							echo "<tr><th>Birthday</th><td></td><tr>";
							echo "<tr><th>Job</th><td></td><tr>";
							echo "<tr><th>Hobby</th><td></td><tr>";
							echo "<tr><th>Address</th><td></td><tr>";
							echo "<tr><th>Year Of Graduation</th><td>".$row["gradyear"]."</td><tr>";
							echo "<tr><th>Batch</th><td>".$row["batch"]."</td><tr>";
							echo "<tr><th>Program</th><td>".$row["program"]."</td><tr>";
						}
						echo "</table>";
					} 
					else 
					{
						echo "0 results";
					}
				?>
				
				
				<br><br>
				
				<button type="submit" name="Update">Update My Profile</button>
				
				
			</div>
			
			
		
		</div>
		
		<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
		</div>
		
	</div>

</body>



</html>