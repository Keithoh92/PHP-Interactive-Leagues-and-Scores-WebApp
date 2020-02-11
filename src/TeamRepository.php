<?php


namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class TeamRepository extends DatabaseTableRepository
{
    public function __construct()
    {
        parent::__construct('Tudublin', 'Team', 'team');
    }

    public function getTeamNameById($teamId)
    {
        $team = $this->getOneById($teamId);
        return $team->getTeamName();
    }
}