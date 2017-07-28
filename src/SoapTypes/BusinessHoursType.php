<?php

namespace Etrias\PaazlConnector\SoapTypes;

class BusinessHoursType
{

    /**
     * @var dayType
     */
    protected $day = null;

    /**
     * @var time
     */
    protected $from = null;

    /**
     * @var time
     */
    protected $until = null;

    /**
     * Constructor
     *
     * @var dayType $day
     * @var time $from
     * @var time $until
     */
    public function __construct($day = null, $from = null, $until = null)
    {
        $this->day = $day;
        $this->from = $from;
        $this->until = $until;
    }

    /**
     * @return dayType
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param dayType $day
     * @return $this
     */
    public function setDay($day)
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return time
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param time $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return time
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param time $until
     * @return $this
     */
    public function setUntil($until)
    {
        $this->until = $until;
        return $this;
    }


}

