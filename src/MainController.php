<?php

namespace Tudublin;

class MainController
{
    private $leagueTableRepository;
    private $searchController;
    private $teamRepository;

    public function __construct()
    {
        $this->leagueTableRepository = new LeagueTableRepository();
        $this->searchController = new SearchController();
        $this->teamRepository = new TeamRepository();
    }

    function homePage()
    {
        $pageTitle = 'home';
        $homePageStyle = " active";
        require_once __DIR__ . '/../template/homePage.php';

    }

    function leaguesPage()
    {
        $leagues = $this->leagueTableRepository->getAll();
        $teams = $this->teamRepository->getAll();

        $pageTitle = 'Leagues';
        $leaguesPageStyle = " active";
        require_once __DIR__ . '/../template/leagues.php';

    }
    function listLeagues($leagueTableId, $leagueName)
    {
        $criteria = $this->searchController->toArrayForLeagueSearch($leagueTableId, $leagueName);
        $leagueLoad = $this->searchController->searchLeagues($criteria);
        $leagues =$this->leagueTableRepository->getAll();
        $teams = $this->teamRepository->getAll();

        $pageTitle = 'Search Leagues';
        $leaguePageStyle = 'active';
        require_once __DIR__ .'/../template/leagueLoad.php';
    }


    function clubsPage()
    {

        $pageTitle = 'Clubs';
        $clubsPageStyle = " active";
        require_once __DIR__ . '/../template/clubs.php';
    }


    function resultsPage()
    {

        $pageTitle = 'Results';
        $resultsPageStyle = " active";
        require_once __DIR__ . '/../template/results.php';
    }

    function fixturesPage()
    {

        $pageTitle = 'Fixtures';
        $fixturesPageStyle = " active";
        require_once __DIR__ . '/../template/fixtures.php';
    }
    function loginPage()
    {

        $pageTitle = 'Login';
        $fixturesPageStyle = " active";
        require_once __DIR__ . '/../template/login.php';
    }
}