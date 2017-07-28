<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Time
{

    /**
     * @var dayType
     */
    protected $day = null;

    /**
     * @var bool
     */
    protected $alwaysOpen = null;

    /**
     * @var string
     */
    protected $openFromAfternoon = null;

    /**
     * @var string
     */
    protected $openFromMorning = null;

    /**
     * @var string
     */
    protected $openTillAfternoon = null;

    /**
     * @var string
     */
    protected $openTillMorning = null;

    /**
     * Constructor
     *
     * @var dayType $day
     * @var bool $alwaysOpen
     * @var string $openFromAfternoon
     * @var string $openFromMorning
     * @var string $openTillAfternoon
     * @var string $openTillMorning
     */
    public function __construct($day = null, $alwaysOpen = null, $openFromAfternoon = null, $openFromMorning = null, $openTillAfternoon = null, $openTillMorning = null)
    {
        $this->day = $day;
        $this->alwaysOpen = $alwaysOpen;
        $this->openFromAfternoon = $openFromAfternoon;
        $this->openFromMorning = $openFromMorning;
        $this->openTillAfternoon = $openTillAfternoon;
        $this->openTillMorning = $openTillMorning;
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
     * @return bool
     */
    public function getAlwaysOpen()
    {
        return $this->alwaysOpen;
    }

    /**
     * @param bool $alwaysOpen
     * @return $this
     */
    public function setAlwaysOpen($alwaysOpen)
    {
        $this->alwaysOpen = $alwaysOpen;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenFromAfternoon()
    {
        return $this->openFromAfternoon;
    }

    /**
     * @param string $openFromAfternoon
     * @return $this
     */
    public function setOpenFromAfternoon($openFromAfternoon)
    {
        $this->openFromAfternoon = $openFromAfternoon;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenFromMorning()
    {
        return $this->openFromMorning;
    }

    /**
     * @param string $openFromMorning
     * @return $this
     */
    public function setOpenFromMorning($openFromMorning)
    {
        $this->openFromMorning = $openFromMorning;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenTillAfternoon()
    {
        return $this->openTillAfternoon;
    }

    /**
     * @param string $openTillAfternoon
     * @return $this
     */
    public function setOpenTillAfternoon($openTillAfternoon)
    {
        $this->openTillAfternoon = $openTillAfternoon;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenTillMorning()
    {
        return $this->openTillMorning;
    }

    /**
     * @param string $openTillMorning
     * @return $this
     */
    public function setOpenTillMorning($openTillMorning)
    {
        $this->openTillMorning = $openTillMorning;
        return $this;
    }


}

