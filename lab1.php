<?php
include_once('User/user.php');
include_once('DBConnector/DBConnector.php');
include_once('FileUpload/fileUpload.php');


$con = new DBConnector;

$uploader = new fileUpload;




if(isset($_POST['submit'])){

    /*
    echo "<pre>", print_r($_POST), "</pre>";
    echo "<pre>", print_r($_FILES), "</pre>";
    echo "<pre>", print_r($_FILES['filetoUpload']['name']), "</pre>";
    die();
*/



    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cityname = $_POST['cityname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $time_stamp = $_POST['utc_timestamp'];
    $offset = $_POST['time_offset'];


    $file = $_FILES['filetoUpload']['name'];
    $filename = $_FILES['filetoUpload']['tmp_name'];
    $filetype = $_FILES['filetoUpload']['name'];
    $filesize = $_FILES['filetoUpload']['size'];

   
    


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

//timeoffset
$user->setTimeOffset($offset);
$offset = $user->getTimeOffset();


//timestamp
$user->setTimeStamp($time_stamp);
$time_stamp = $user->getTimeStamp();



//object for uploading the file
$uploader = new fileUpload;


//setting and getting the name of the file
$uploader->setOriginalFileName($file);
$file = $uploader->getOriginalFileName();

//method for the file size
$uploader->setFileSize($filesize);
$filesize = $uploader->getFileSize();

//methods for the temporary name
$uploader->setFinalFileName($filename);
$filename = $uploader->getFinalFileName();

/*
echo "<pre>", print_r($file), "</pre>";
echo "<pre>", print_r($filesize), "</pre>";
echo "<pre>", print_r($filename), "</pre>";
*/



if(!$user->validateForm()){
    $user->createFormErrorSessions();
    header("Refresh:0");
    die();

}
$temp = $user->save();

//object for uploading the file

$file_upload_reponse = $uploader->upLoadFile();


if($temp & $file_upload_reponse){
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

    <!--
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    -->
    <script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2"></script>

    <script type = "text/javascript" src = "timezone.js"></script>

		</head>
		
			
	<h2 align = "center">Sign Up here</h2>
    <br>

			<body>
			
				<form method="POST" id="user_details" name="user_details" onsubmit="return validateForm()" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
				
				
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

                <tr><td>Profile Image: <input type="file" name="filetoUpload" id="filetoUpload" ></td></tr>
            
                <tr><td><input type="hidden" name="utc_timestamp" id="utc_timestamp" ></td></tr>
                <tr><td><input type="hidden" name="time_offset" id="time_offset" ></td></tr>
                
                <tr><td><button type="submit" name = "submit"> <strong>SAVE</strong> </button></td></tr>

                <tr><td><a href = "login.php"> <strong>Login</strong> </a></td></tr>
                
                
                </table>
                </form>
            </body>
					
</html>


        