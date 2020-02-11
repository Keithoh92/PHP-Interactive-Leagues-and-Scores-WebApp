<?php

namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseManager;
use PDO;


class SearchController
{
    private $dbm;
    private $connection;

    public function __construct()
    {
        $this->dbm = new DatabaseManager();
        $this->connection = $this->dbm->getDbh();
    }

    public function searchLeagues($criteria)
    {
        $conditions =$criteria[0];
        $parameters = $criteria[1];

        $sql = "SELECT * FROM leagueTable l INNER JOIN team t on l.id = t.leagueTableId";

        if($conditions){
            $sql .= "WHERE ".implode("AND ", $conditions);
        }
        $statement = $this->connection->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_BOTH);
        $statement->execute($parameters);
        $leagueLoad = $statement->fetchAll();
        return $leagueLoad;
    }

    public function toArrayForLeagueSearch($leagueName)
    {
        $conditions = [];
        $parameters = [];


        if(!empty($leagueName)){
            $conditions[] = 'leagueName = :leagueName';
            $parameters[":leagueName"] = $leagueName;
        }


        $criteria = [];
        $criteria[] = $conditions;
        $criteria[] = $parameters;

        return $criteria;
    }
}