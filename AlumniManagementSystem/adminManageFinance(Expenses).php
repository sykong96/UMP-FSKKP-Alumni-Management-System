<html>
<head>
	<title>Manage Expenses</title>
	<link rel="stylesheet" type="text/css" href="adminPage.css"/>
	<style>
		form{
			padding-left:20px;
		
		}
	
	</style>
	
</head>

<body>

	<a href="index.html">Logout</a>
	<div id="container">
		<div id="header">
			<h1>FSKKP-Alumni Management System</h1>
		
		</div>
		<div id="content">
		
			<div id="nav">
				<h2>Navigation</h2>
				
				<ul>
					<li><a href="adminMain.php">MAIN PAGE</li>
					<li><a href="adminManageMember.php">MANAGE MEMBERSHIP</a></li>
					<li><a href="">MANAGE FINANCIAL</a></li>
						<ul>
						<li><a href="adminManageFinance(MembershipFee).php">Manage Membership Fee.</a></li>
						<li><a href="adminManageFinance(Donation).php">Manage Donation.</a></li>
						<li><a href="adminManageFinance(Expenses).php">Manage Expenses.*</a></li>
						</ul>
					<li><a href="adminA&E.php">ANNOUNCEMENT/EVENT</a></li>
					<li><a href="adminEforum.php">E-FORUM</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			<h2>Manage Expenses</h2>
			<br>
			<form action="adminManageFinance(ExpensesConnect).php" method="POST">
				Expense Name <br><input type ="text" placeholder="expensesname" name="expensesname"><br><br>
				Amount <br><input type = "text" placeholder="eg:121.80" name="amount"><br><br>
				Expense Date <br><input type = "text" placeholder="eg:08/05/2018" name="date"><br><br>
				<br><br>
				<button type="submit" name="submit">Submit</button>
				<input type="reset" name="reset" value="Reset">
				<br><br>
				<a href="adminManageFinance(ExpensesReport).php">Click here to view expenses report
			
			</form>
			
			
		
			

			</div>
			
			
		
		</div>
		
		<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
		</div>
		
	</div>

</body>
