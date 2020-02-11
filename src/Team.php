<?php

namespace Tudublin;

class Team
{
    private $id;
    private $teamName;
    private $pos;
    private $played;
    private $goalsFor;
    private $goalsAgainst;
    private $goalDifference;
    private $points;

    /**
     * @return mixed
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * @param mixed $pos
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
    }

    /**
     * @return mixed
     */
    public function getPlayed()
    {
        return $this->played;
    }

    /**
     * @param mixed $played
     */
    public function setPlayed($played)
    {
        $this->played = $played;
    }

    /**
     * @return mixed
     */
    public function getGoalsFor()
    {
        return $this->goalsFor;
    }

    /**
     * @param mixed $goalsFor
     */
    public function setGoalsFor($goalsFor)
    {
        $this->goalsFor = $goalsFor;
    }

    /**
     * @return mixed
     */
    public function getGoalsAgainst()
    {
        return $this->goalsAgainst;
    }

    /**
     * @param mixed $goalsAgainst
     */
    public function setGoalsAgainst($goalsAgainst)
    {
        $this->goalsAgainst = $goalsAgainst;
    }

    /**
     * @return mixed
     */
    public function getGoalDifference()
    {
        return $this->goalDifference;
    }

    /**
     * @param mixed $goalDifference
     */
    public function setGoalDifference($goalDifference)
    {
        $this->goalDifference = $goalDifference;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param mixed $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }
}