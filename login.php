<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from loginform where user='".$uname."' AND pass='".$password."' limit 1";
	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
	   echo "You have successfully logged in!!";
	   exit();
}
    else{
    echo "You have Entered Incorrrect Password";
}
}

?>  




<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="login-box"> 
		<img src="img/images.png" class="avatar">
		<h1>Login Here</h1>
		<form action="#" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<a href="http://www.google.com">Forgot Password </a>
		</form>
	</div>

</body>
</html>



