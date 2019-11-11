<html>
<head>
	<title>Member Login</title>
	<style>
		body{
			background-color:   #f0f1f3 
		}
		
		#header{
			text-align :center;
			background-color: #58545c ;
			height:40px;
			color: #ccc2d5 ;
			
		}
	
	
		#container{
			
			height:300px;
			border-style: solid;
			border-width: 3px;
			border-color: #425496 ;
			padding:20px;
			background-color: #c7e0e1 ;
			
		}
		
		form{
			
		
			font-family:arial,sans-serif;
			font-weight:bold;
			text-align:center;
			font-size:20px;
		}
		
		#footer{
			clear:both;
			padding:10px;
			color: #a9aad7 ;
			text-align: center;
		}
	
	</style>
	
</head>

<style>




</style>

<body>

	<div id="header">
		<h1>Member Login</h1>
	</div>
	
	<div id="container">
	
		<form action="login_parse.php" method="POST">
			
				Username<br><input type ="text" placeholder="username" name="username"><br><br>
				Password <br><input type = "password" placeholder="password" name="password"><br><br>
	
				<br>
				<button type="submit" name="submit" >Login</button>
				<br><br>[<a href="register.php">Register</a>]
				
				
			
		</form>
		
			
			
	
	</div>
	
	<div id="footer">
		
		<p> Copyright &copy; 2018 Chan Pui Fen & Kong Shin Yee</p>
		
	</div>
		

</body>



</html>