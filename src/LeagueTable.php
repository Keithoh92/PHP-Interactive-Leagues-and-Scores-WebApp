<?php

namespace Tudublin;

class leagueTable
{
    private $leagueTableId;
    private $leagueName;
    /**
 * @return mixed
 */
public function getLeagueTableId()
{
    return $this->leagueTableId;
}/**
 * @param mixed $leagueTableId
 */
public function setLeagueTableId($leagueTableId)
{
    $this->leagueTableId = $leagueTableId;
}/**
 * @return mixed
 */
public function getLeagueName()
{
    return $this->leagueName;
}/**
 * @param mixed $leagueName
 */
public function setLeagueName($leagueName)
{
    $this->leagueName = $leagueName;
}

}