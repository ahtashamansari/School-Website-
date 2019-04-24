<?php
  session_start();
  $username="";
  $email="";
  $errors=array();

  $db=mysqli_connect('localhost','root','','registr');

  if(isset($_POST['register'])){
  	$username=mysql_real_escape_string($_POST['username']);
  	$email=mysql_real_escape_string($_POST['email']);
  	$password_1=mysql_real_escape_string($_POST['password_1']);
  	$password_2=mysql_real_escape_string($_POST['password_2']);

  	if(empty($username)){
  		array_push($errors,"Username is required");
  	}
  	if(empty($email)){
  		array_push($errors,"Email is required");
  	}
  	if(empty($password_1)){
  		array_push($errors,"Password is required");
  	}

    if($password_1!=$password_2){
      array_push($errors,"The two Passwords should match");
    }

  	// if no errors,save to db
  	if(count($errors)==0){
  		$password=md5($password_1);
  		$sql="INSERT INTO loginform(username,email,password) VALUES('$username','$email','$password')";
  		mysqli_query($db,$sql);
      $_SESSION['username']=$username;
      $_SESSION['success']="You are now logged in";
      header('location: index.php'); //redirect to homepage
  	}
  }
 
  //log user in from login page
  if (isset($_POST['login']));{
     $username=mysql_real_escape_string($_POST['username']);
     $password=mysql_real_escape_string($_POST['password']);
     if(empty($username)){
       array_push($errors,"Username is required");
    }
     if(empty($password)){
       array_push($errors,"Password is required");
    }
     if (count($errors)==0){
       $password=md5($password);
       $query="SELECT * FROM loginform WHERE username='$username' AND password='$password'";
       $result=mysqli_query($db, $query);
       if (mysqli_num_rows($result) == 1){ 
         //log user in
         $_SESSION['username']=$username;
         $_SESSION['success']="You are now logged in";
         header('location: Rishabh_Academy(Main Page).php'); //redirect to homepage
      }else{
        array_push($errors, "Wrong Username or Password");
        
      }
    }
  }


  //logout
  if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }
?>