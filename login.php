<?php
include_once('User/user.php');
include_once('DBConnector/DBConnector.php');

$con = new DBConnector;

if(isset($_POST['btn_login'])){

    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];
    
    $instance = User::create();
    
    $instance->setPassword($pass_word);
    $instance->setUsername($user_name);
   


    if($instance->isPasswordCorrect()){
        $instance->login();

        //closes the database connection
        //$con->closeDatabase();

        //next, create a user session
        $instance->createUserSession();

        echo "You have successfully logged in";
        
    }
    
    else{
        //$con->closeDatabase();
        header("Location:login.php");

       //echo "This password is not correct... Enter the correct password";
    }
}



?>



<html>
<head>


<title>Login Page</title>

<script type = "text/javascript" src = "validation.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "validate.css">

<body>

<table align = "center">
	
        <br>
        
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" name="login" id="login">

			<h1 align = center>Client Login</h1>
			
                <tr><td><input type="text" name="username" placeholder="Enter username..." required></td></tr>
           
                <tr><td><input type="password" name="password" placeholder="Enter password..." required></td></tr>
                
                <tr><td><button type="submit" name = "btn_login"> <strong>LOGIN</strong> </button></td></tr>
	</div>