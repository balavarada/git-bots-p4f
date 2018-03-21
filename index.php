<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$action     = $_POST['result']['action'];
$parameters = $_POST['result']['parameters'];


if ($action == "getCategory") {
    switch ($parameters['facts-category']) {
        case "Account":
            $_return = "Link your core system account from here"; break;

        case "Casino":
            $_return = "Get the updates from Hotel, Clubs, Bar, restaurents from here"; break;
        case "Play":
            $_return = "Play your Slots and Table games from here"; break;
        default:
            $_return = "Default Response from Bot-Web-Hook";
            break;
    }


    print_r(

'{
	"speech": "' . $_return . '",
	"displayText": "' . $_return . '",
	"data": {},
	"contextOut": [],
	"source": "webhook"
}'


);

}
?>
