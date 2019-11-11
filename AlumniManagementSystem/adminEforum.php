<html>
<head>
	<title>E-Forum</title>
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
					<li><a href="adminMain.php">MAIN PAGE</a></li>
					<li><a href="adminManageMember.php">MANAGE MEMBERSHIP</a></li>
					<li><a href="adminManageFinance.php">MANAGE FINANCIAL</a></li>
					<li><a href="adminA&E.php">ANNOUNCEMENT/EVENT</a></li>
					<li><a href="">E-FORUM*</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			<h2>Manage e-forum</h2>
			<br>
			<form action="adminEforumConnect.php" method="POST">
				Forum Title <br><input type ="text" placeholder="Title" name="ftitle"><br><br>
				Forum Description <br><input type = "text" placeholder="Optional*" name="fdescription"><br><br>
				Forum Content <br><textarea  name="fcontent"></textarea><br><br>
				Release Date <br><input type ="text" placeholder="eg:02/08/2017" name="releasedate">
				<br><br>
				<button type="submit" name="submit">Submit</button>
				<input type="reset" name="reset" value="Reset">
			
			</form>

			</div>
			
			
		
		</div>
		
		<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
		</div>
		
	</div>

</body>



</html>