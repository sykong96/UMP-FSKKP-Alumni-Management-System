<html>
<head>
	<title>Manage Membership Fee</title>
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
					<li><a href="">MANAGE FINANCIAL*</a></li>
						<ul>
						<li><a href="adminManageFinance(MembershipFee).php">Manage Membership Fee.</a></li>
						<li><a href="adminManageFinance(Donation).php">Manage Donation.</a></li>
						<li><a href="adminManageFinance(Expenses).php">Manage Expenses.</a></li>
						</ul>
					<li><a href="adminA&E.php">ANNOUNCEMENT/EVENT</a></li>
					<li><a href="adminEforum.php">E-FORUM</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			<FORM ACTION="adminManageFinance(MembershipFeeConnect).php" METHOD="post" name="report">
			<h2>Manage Membership Fee</h2>
			<br>
			<form action="adminManageFinance(MembershipFee).php" method="POST">
				Total Membership Fee Received <br><input type ="text" placeholder="membershipfee" name="membershipfee"><br><br>
				Year <br><input type = "text" placeholder="eg:2018" name="year"><br><br>
				Month <br><input type = "text" placeholder="eg:08" name="month"><br><br>
				<br><br>
				<button type="submit" name="submit">Submit</button>
				<input type="reset" name="reset" value="Reset">
				<br><br>
				<a href="adminManageFinance(MembershipFeeReport).php">Click here to view membership fee report
			
			</form>
			
			
		
			

			</div>
			
			
		
		</div>
		
		<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
		</div>
		
	</div>

</body>



</html>