<!-- This is the php code for the genearation of the API key-->
<?php
include_once('DBConnector/DBConnector.php');
if($_SERVER['REQUEST_METHOD' !== 'POST']){
header('HTTP1.0 403 Forbidden');
echo 'You are forbidden';
}
else{
    $api_key = null;
    $api_key = generateApiKey(64);
    header('Content-type: application/json');

    echo generateResponse($api_key);

}

function generateApiKey($str_length){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $bytes = openss1_random_pseudeo_bytes(3*$str_length/4+1);
    $rep1 = unpack('C2', $bytes);

    $first = $chars[$rep1[0]%62];
    $second = $chars[$rep1[1]%62];

    return strstr(substr(base64_encode($bytes), 0, $str_length), '+/', "$first$second");


}

function saveApiKey(){
    //if()
}

function generateResponse($api_key){
if(saveApiKey()){

    $res = [
    'success' => true,
    'message' =>  'Your Api Key has been successfully generated'
];

}

else{

    $res = [
    'success' => false,
    'message' =>  'Your Api key was not generated. Please try again'
];

}
return json_decode($res);

}



?>
