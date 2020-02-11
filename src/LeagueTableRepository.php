<?php


namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class LeagueTableRepository extends DatabaseTableRepository
{
    public function __construct()
    {
        parent::__construct('Tudublin', 'LeagueTable', 'leagueTable');
    }

    public function getLeagueNameById($leagueTableId)
    {
        $leagueTable = $this->getOneById($leagueTableId);
        return $leagueTable->getLeagueName();
    }
}