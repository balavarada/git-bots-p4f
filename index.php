<?php

//echo "Hello World - Hello bots";
//echo "<pre>";
//print_r($_POST); //getCategory

$_POST = json_decode(file_get_contents('php://input'), true);

print_r($_POST);


$action     = $_POST['result']['action'];
$parameters = $_POST['result']['parameters'];
$return     = "Default Response from Bot-Web-Hook";


echo $parameters['facts-category'];

if ($action == "getCategory") {
    
    if ($parameters['facts-category'] == 'Account') {
        $return = "Link your core system account from here";
        
    } else if ($parameters['facts-category'] == 'Casino') {
        
        $return = "Get the updates from Hotel, Clubs, Bar, restaurents from here";
    } else if ($parameters['facts-category'] == 'Play') {
        $return = "Play your Slots and Table games from here";
    }
}

?>
