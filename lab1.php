<?php
include_once('User/user.php');
include_once('DBConnector/DBConnector.php');

$con = new DBConnector;

if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cityname = $_POST['cityname'];


$user  = new User($firstname, $lastname, $cityname);

$temp = $user->save();

if($temp){
    echo "Saving was done successfully!!";
}
else{
    echo "There was an error";
}
}


?>

<html>
	<head>
	
	<link rel="stylesheet" type="text/css" href="signup3.css">
	
	
	<title>
		Sign up Page
	
	</title>
		</head>
		
			
	<h2 align = "center">Sign Up here</h2>
    <br>

			<body>
			
				<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
				
				
				<table align = "center">
                <tr><td><input type="text" name="firstname" placeholder="First name..." required></td></tr>
                <tr><td><input type="text" name="lastname" placeholder="Last name..." required></td></tr>
                <tr><td><input type="text" name="cityname" placeholder="City name..." required></td></tr>
                <tr><td><button type="submit" name = "submit"> <strong>SAVE</strong> </button></td></tr>

                
                </table>
                </form>
            </body>
					
</html>

