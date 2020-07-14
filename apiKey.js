$(document).ready(function(){


$('#api_key_btn').click(function (event){
var confirmKey = confirm("Creating a new Api Key")

if(!confirmKey){
    return;
}
$ajax({
url:"apiKey.php",
type:"post",
success: function(){
    if(data["success"] == 1){
        $('#api_key').val(data['message'])
    }
    else{
        alert("Something went wrong. Please try again")
    }
}

})
})
})

