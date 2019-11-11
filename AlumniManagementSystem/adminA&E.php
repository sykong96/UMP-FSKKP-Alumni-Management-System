<html>
<head>
	<title>Announcement & Event</title>
	<link rel="stylesheet" type="text/css" href="adminPage.css"/>
	<style>
		form{
			padding-left:20px;
		
		}
	
	</style>
	
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
					<li><a href="adminManageMember.php">MANAGE MEMBERSHIP</a></li>
					<li><a href="adminManageFinance.php">MANAGE FINANCIAL</a></li>
					<li><a href="">ANNOUNCEMENT/EVENT*</a></li>
					<li><a href="adminEforum.php">E-FORUM</a></li>
				
				</ul>
			</div>
			
			<div id="main">
			<h2>Announcement/Event</h2>
			<br>
			<form action="adminA&E_parse.php" method="POST">
				Post Title <br><input type ="text" placeholder="Title" name="ptitle"><br><br>
				Post Description <br><input type = "text" placeholder="Optional*" name="pdescription"><br><br>
				Post Content <br><textarea  name="pcontent"></textarea><br><br>
				Type <select name="pType">
						<option value="announcement">Announcement</option>
						<option value="event">Event</option>
					</select>
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