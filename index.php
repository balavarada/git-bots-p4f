<?php

//echo "Hello World - Hello bots";

//echo "<pre>";
//print_r($_POST); //getCategory

$_POST = json_decode(file_get_contents('php://input'), true);


print_r($_POST);
$action = $_POST['result']['action'];

if(action = "getCategory") {


}


?>
