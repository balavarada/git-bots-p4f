<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$action     = $_POST['result']['action'];
$parameters = $_POST['result']['parameters'];
$_return = "";
$_anchTag = "";
$navigate = 0;
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
}

if ($action == "navigatetogame") {
    if(isset($parameters['game-name'])) {
        $game_name = strtolower($parameters['game-name']);
        $input = preg_quote($game_name, '~'); // don't forget to quote input string!        
        $result = preg_filter('~' . $input . '~', null, $games);

        
        if(sizeof($result) == 0) {
            // no match
            $_return = "Sorry " . $parameters['game-name'] . " is not added yet";
        } elseif(sizeof($result) == 1) {
            // exact match            
            $values = array_keys( $result);            
            $_return = $games[$values[0]];
            $navigate = 1;

            //$_anchTag = "<a href=\'https://localhost:8000/game/". $games[$values[0]] ."\' class='function\' rel=\'rdfs-seeAlso\'>".$games[$values[0]]."</a>";
            $_anchTag = "https://localhost:8000/game/". $games[$values[0]];
            
        } else {            
            // more than one match
            $values = array_values( $result);            
            $_return = implode($values, ",");
        }        
    }

    /* Pay load json 
    "game-name" : "romanchariots",
        "popular_game" : "open new games"
        "new_game" : "newly added game"
    */
    if(isset($parameters['new_game'])) {
        $_return = "zeus";
        $navigate = 1;
    }
    if (isset($parameters['popular_game'])) {
        $_return = "quickhitplatinum";
        $navigate = 1;
    }
    /*foreach ($games as $parameters['game-name']) {
        if (strpos($value, 'green') !== false) { $results[] = $value; }          
    }*/    
}

/*if( empty($results) ) { $_return = 'No matches found.'; }
else { $_return = "'green' was found in: "; }*/

// Send JSON Output to the BOT

function sendToBot() {
    /********************************** START ************************************ */
    if($navigate) {
        print_r(
            '{
                "speech": "' . $_return . '",
                "displayText": "' . $_anchTag . '",
                "data": {},
                "action" : "reload",
                "contextOut": [],
                "source": "webhook"
            }'
        );

    } else {
        print_r(
            '{
                "speech": "' . $_return . '",
                "displayText": "' . $_anchTag . '",
                "data": {},
                "contextOut": [],
                "source": "webhook"
            }'
        );
    }
    
    /********************************** END ************************************ */
}
?>