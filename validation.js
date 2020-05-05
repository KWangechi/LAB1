function validateForm(){
    var fname = document.forms["user_details"]["firstname"].value;
    var lname = document.forms["user_details"]["lastname"].value;
    var city = document.forms["user_details"]["cityname"].value;

    //NOTE, "user_details" is the name of our form
    if(fname == null || lname == "" || city == ""){
        alert("The values are not iserted!!Please give values");

return false;
    }
return true;

}