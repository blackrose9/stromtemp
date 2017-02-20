<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StCS Admin Login</title>
	<link rel="stylesheet" href="css/font.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway|Roboto:400,700|Ubuntu+Mono|Shadows+Into+Light" />
	<style type="text/css">
		body{
			background-color: #F5FCFC;
		}
		.everything{
			border: 1px solid black;
			margin-left: 300px;
			margin-right: 300px;
			margin-top: 50px;
		}
		.title{
			font-size: 40px;
			font-weight: bold;
			text-align: center;
			font-family: "Shadows Into Light", Satisfy, Helvetica, Arial, Sans-serif;
			margin-bottom: 40px;
			margin-top: 60px;
		}

		#login{
			background-color: blue;
			color: white;
			border: 2px blue;
			width: 80px;
			height: 40px;
			cursor: pointer;
		}
		#forgot-password{
			cursor: pointer;
			font-size: 20px;
			font-family: Garamond, serif;
		}
	</style>
</head>
<body>
	<div class="everything">
		
		<h1 align = "center" class = "title">
			livefood.com Admin
		</h1>

		<form action ="process_login.php" method = "post" align ="center" style="font-size:18pt">
			Email: <br>
			<input type="email" name ="email" required><br><br>

			Password: <br>
			<input type="password" name="password" required><br><br>

			<input type="submit" value ="Log In" id="login"><br><br>

			<p id="forgot-password">
				<a href="#"> Forgot Password? </a>
			</p>
			<br><br>

		</form>

	</div>
</body>
</html>