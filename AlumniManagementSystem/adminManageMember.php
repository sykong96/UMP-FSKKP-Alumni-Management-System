<html>
<head>
	<title>Manage Membership</title>
	<link rel="stylesheet" type="text/css" href="adminPage.css"/>
</head>

<body>

	<a href="index.html">Logout</a>
	<a href="adminAddNewAdmin_parse.php">Add New Admin</a>
	<div id="container">
		<div id="header">
			<h1>FSKKP-Alumni Management System</h1>
		
		</div>
		<div id="content">
		
			<div id="nav">
				<h2>Navigation</h2>
				
				<ul>
					<li><a href="adminMain.php">MAIN PAGE</li>
					<li><a href="">MANAGE MEMBERSHIP*</a></li>
					<li><a href="adminManageFinance.php">MANAGE FINANCIAL</a></li>
					<li><a href="adminA&E.php">ANNOUNCEMENT/EVENT</a></li>
					<li><a href="adminEforum.php">E-FORUM</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			
				<h2>Manage Membership</h2><br>
				<h5>Payment fee: Yearly: RM300, Life membership: RM600</h5>
				<br>
			<form action="adminManageMemberConnect.php" method="POST">
				Date of Payment <br><input type ="text" placeholder="eg:08/05/2018" name="dateofpayment"><br><br>
				Number of years <br><input type = "text" placeholder="eg:2" name="years"><br><br>
				Total Payment <br><input type = "text" placeholder="eg:24.50" name="payment"><br><br>
				Proof of Payment <br><input type = "text" placeholder="" name="proof"><br><br>
				<br><br>
				<button type="submit" name="submit">Submit</button>
				<input type="reset" name="reset" value="Reset">
				<br><br>
				<a href="adminManageMemberReport.php">Click here to view report
			
			</form>
			
				
				<table>
					
				</table>
			

			</div>
			
			
		
		</div>
		
		<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
		</div>
		
	</div>

</body>



</html>