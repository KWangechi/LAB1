<?php
session_start();

/* if(!isset($_POST['username'])){
header("Location:login.php");
 */


?>

<html>
    <head>
        <title>This is your private page</title>
        <script src = "jquery-3.1.1.min.js"></script>
        <script type = "text/javascript" src = "validation.js"></script>
        <script type = "text/javascript" src = "apikey.js"></script>

        <link rel = "stylesheet" type = "text/css" href = "validate.css">

        <script type = "text/javascript" src = "bootstrap/js/bootstrap.js"></script>
        <script type = "text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        
<!--css -->

<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap.css.map">
<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap.min.css.map">
<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap-theme.css.map">
<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="style.css" src = "bootstrap/css/bootstrap-theme.min.css.map">

    </head>
    <body>
        <p align="right"><a href= "logout.php">Logout</p>
        <hr>
        <h3>Here, we will create an API that will allow developers to order from external systems</h3>
        <hr>

        <h4>Now we create a feature for allowing generation of API keys. Click the button to generate the api key</h4>

        <button class="btn btn-primary" id="api-key-btn">Generate API key</button>
        <br>
        <br>
        <!-- API key placeholder-->

        <strong>Your API key: </strong>(Generation of a new api key while having a key in the 
        current running applications will fail.) <br>


        <textarea cols="100" row="2" id="api_key" name="api_key" readonly>
        <?php 
        echo fetchUserKey();

?>

</textarea>
<h3>Service description:</h3>
This application contains an API key that enables one to order food from external systems 
and also get all the order statuses.

</hr>


    </body>
</html>
<?php
function fetchUserKey(){
    
}



?>

