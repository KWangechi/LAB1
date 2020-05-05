<?php
session_start();

/* if(!isset($_POST['username'])){
header("Location:login.php");
 */


?>

<html>
    <head>
        <title>This is your private page</title>
        <script type = "text/javascript" src = "validation.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "validate.css">
    </head>

    <body>
        <p>We are trying to protect you from thieves</p>
        <p>A private page</p>
        <p><a href="logout.php">Logout</a></p>
    </body>
</html>