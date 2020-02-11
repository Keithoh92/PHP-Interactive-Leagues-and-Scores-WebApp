<?php

namespace Tudublin;

class Result
{
    private $id;
    private $date;
    private $scoreHome;
    private $scoreAway;
    private $bookings;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getScoreHome()
    {
        return $this->scoreHome;
    }

    /**
     * @param mixed $scoreHome
     */
    public function setScoreHome($scoreHome)
    {
        $this->scoreHome = $scoreHome;
    }

    /**
     * @return mixed
     */
    public function getScoreAway()
    {
        return $this->scoreAway;
    }

    /**
     * @param mixed $scoreAway
     */
    public function setScoreAway($scoreAway)
    {
        $this->scoreAway = $scoreAway;
    }

    /**
     * @return mixed
     */
    public function getBookings()
    {
        return $this->bookings;
    }

    /**
     * @param mixed $bookings
     */
    public function setBookings($bookings)
    {
        $this->bookings = $bookings;
    }
}