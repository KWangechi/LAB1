<?php

include "crud.php";

class User implements Crud{
    private $userid;
    private $firstname;
    private $lastname;
    private $cityname;




    function __construct($firstname,$lastname,$cityname){
        
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->cityname = $cityname;

        

}

    public function setUserid($userid){
        $this->userid = $userid;
    }

    public function getUserid(){
        return $this->userid;
    }

    public function save(){

        $db = mysqli_connect("localhost", "root", "", "btc3205");

    $fn = $this->firstname;
    $ln = $this->lastname;
    $city = $this->cityname;
    $temp = mysqli_query($db,"INSERT INTO user(first_name,last_name,user_city)VALUES('$fn', '$ln', '$city')") or die("Error:" . mysqli_error());

    return $temp;

    }

    
public function readAll(){
    return null;

}

public function readUnique(){
    return null;
}

public function search(){
    return null;
}

public function update(){
    return null;
}

public function removeOne(){
    return null;
}


public function removeAll(){
    return null;
}

}



?>
