<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$action     = $_POST['result']['action'];
$parameters = $_POST['result']['parameters'];
$_return     = "Default Response from Bot-Web-Hook";

if ($action == "getCategory") {
    
 /*   if ($parameters['facts-category'] == 'Account') {
        $_return = "Link your core system account from here";
        
    } else if ($parameters['facts-category'] == 'Casino') {
        
        $_return = "Get the updates from Hotel, Clubs, Bar, restaurents from here";
    } else if ($parameters['facts-category'] == 'Play') {
        $_return = "Play your Slots and Table games from here";
    }
    echo $_return;
*/
}
?>
