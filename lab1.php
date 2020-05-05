<?php
include_once('User/user.php');
include_once('DBConnector/DBConnector.php');


$con = new DBConnector;

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cityname = $_POST['cityname'];
    $username = $_POST['username'];
    $password = $_POST['password'];



$user  = new User();

//firstname
$user->setFirstname($firstname);
$firstname = $user->getFirstname();
   


   //last name
$user->setLastname($lastname);
$lastname = $user->getLastname();



//cityname
$user->setCityname($cityname);
$cityname = $user->getCityname();
 


//username
$user->setUsername($username);
$username = $user->getUsername();
 

//password
$user->setPassword($password);
$password = $user->getPassword();
 


if(!$user->validateForm()){
    $user->createFormErrorSessions();
    header("Refresh:0");
    die();

}
$temp = $user->save();

if($temp){
    echo "Saving was done successfully!!";
}
else{
    echo "There was an error";
}

//$con->closeDatabase();
}




?>

<html>
	<head>
	
	
	
	<title>Sign up Page</title>
    <script type = "text/javascript" src = "validation.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "validate.css">

		</head>
		
			
	<h2 align = "center">Sign Up here</h2>
    <br>

			<body>
			
				<form method="POST" id="user_details" name="user_details" onsubmit="return validateForm()" action="<?=$_SERVER['PHP_SELF']?>">
				
				
				<table align = "center">
                <tr><td>
                <div id="form_errors">

                <?php 

                session_start();

                if(!empty($_SESSION['form_errors'])){
                    echo "". $_SESSION['form_errors'];
                    unset($_SESSION['form_errors']);

                }
                
                ?>

                </div>
                
                
                
                
                
                </td>
                </tr>


                <tr><td><input type="text" name="firstname" placeholder="First name..." required></td></tr>
                <tr><td><input type="text" name="lastname" placeholder="Last name..." required></td></tr>
                <tr><td><input type="text" name="cityname" placeholder="City name..." required></td></tr>

                <tr><td><input type="text" name="username" placeholder="Enter username..." required></td></tr>
                <tr><td><input type="password" name="password" placeholder="Enter password..." required></td></tr>
                
                <tr><td><button type="submit" name = "submit"> <strong>SAVE</strong> </button></td></tr>
                <tr><td><a href = "login.php"> <strong>Login</strong> </a></td></tr>
                
                
                </table>
                </form>
            </body>
					
</html>

