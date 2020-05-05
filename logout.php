<?php
include_once('User/user.php');

if(!isset($_POST['username'])){

    $instance = User::create();
    $instance->logout();
}


?>
