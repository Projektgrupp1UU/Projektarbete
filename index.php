hejjhejj

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
    <title>Uppsala studentguide</title>
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <script src="assets/js/java.js"></script>
</head>

<body>
	<h2>Welcome to Uppsala Studentguide!</h2> 
		<div class="container">
			<h2>Login</h2>
				<form id="login" name="login" action="#" method="POST">
					Username:<br> <input type= "text" name="userName" id="username"><br><br>
					Password:<br> <input type= "password" name="passWord" id="password"><br><br>
					<input type= "submit" value="Login" id="login"> 
				</form>
		</div>

		<div class="container">
			<div class="login">
			<h1>Register</h1>
				<form id="registerForm" name="register" action="savemember.php" method="POST">
					Username:<br> <input type= "text" name="uname" id="regusername"><br><br>
					Password:<br> <input type= "password" name="pword" id="regpassword"><br><br>
					Confirm passoword:<br> <input type= "password" name="cpword" id="regconfirmpassword"><br><br>
					<input type= "submit" value="Register" id="login"> 
				</form>
		</div>
		</div>
</body>	
