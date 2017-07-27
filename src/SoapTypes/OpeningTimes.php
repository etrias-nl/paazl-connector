<?php

namespace Etrias\PaazlConnector\SoapTypes;

class OpeningTimes
{

    /**
     * @var time
     */
    protected $time = null;

    /**
     * Constructor
     *
     * @var time $time
     */
    public function __construct($time)
    {
        $this->time = $time;
    }

    /**
     * @return time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param time $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }


}

