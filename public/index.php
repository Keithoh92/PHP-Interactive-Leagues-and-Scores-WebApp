<?php

require_once __DIR__ .'/../config/db.php';
require_once __DIR__ .'/../vendor/autoload.php';

use Tudublin\MainController;

$action = filter_input(INPUT_GET, 'action');
if(empty($action)){
    $action = filter_input(INPUT_POST, 'action');
}


$selectedLeagueName = filter_input(INPUT_GET, 'leagueName');


$mainController= new MainController();

switch ($action) {
    case 'leagues':
        $mainController->leaguesPage();
        break;

    case 'clubs':
        $mainController->clubsPage();
        break;

    case 'Search Leagues':
        $mainController->listLeagues($selectedLeagueName);
        break;

    case 'results':
        $mainController->resultsPage();
        break;

    case 'fixtures':
        $mainController->fixturesPage();
        break;

    case 'login':
        $mainController->loginPage();
        break;

    case 'home':
        default:
    $mainController->homePage();
}