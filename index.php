<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$action     = $_POST['result']['action'];
$parameters = $_POST['result']['parameters'];
$games = array(
    'junglewild',
    'bierhaus200',
    'rocketreturns',
    'spiritguidepanda',
    'emeraldfalls',
    'tropicalfish',
    'monopolypartytrain-desktop',
    'quickhitbgfgf',
    'dragonsfire',
    'wickedbeauty',
    'kisshydra',
    'cashwizard',
    'epicmonopoly',
    'empire',
    'margaritaville',
    'bigredlantern',
    'ladyrobinhood',
    'giantsgold',
    'romeandegypt',
    'superjackpotparty',
    'junglewild2',
    'wildshootout',
    'superredphoenix',
    'rainbowriches',
    'zeus',
    'mysticalfortunes',
    'glitz',
    'lancelot',
    'pridenprey',
    'greatwall2',
    'romanchariots',
    'lockitlinkdiamonds'
);

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
    if ($parameters['game-name']) {
        foreach ($games as $parameters['game-name']) {
            if (strpos($value, 'green') !== false) { $results[] = $value; }          
        }
    }
    if( empty($results) ) { $_return = 'No matches found.'; }
    else { $_return = "'green' was found in: "; }

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
