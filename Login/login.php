<?php include("server.php"); ?>			
<!DOCTYPE html>
<html>
<head>
	<title>LoginForm</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username:</label><br>
		<input type="text" name="username"><br>
		</div>
		<div class="input-group">
			<label>Password:</label><br>
		<input type="password" name="password"><br>
		</div>
		<div class="user-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>Not a member yet? <a href="register.php">Sign up</a></p>
	</form>

</body>
</html>

