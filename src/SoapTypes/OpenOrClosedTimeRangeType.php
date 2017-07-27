<?php

namespace Etrias\PaazlConnector\SoapTypes;

class OpenOrClosedTimeRangeType
{

    /**
     * @var time
     */
    protected $lowerBound = null;

    /**
     * @var time
     */
    protected $upperBound = null;

    /**
     * Constructor
     *
     * @var time $lowerBound
     * @var time $upperBound
     */
    public function __construct($lowerBound, $upperBound)
    {
        $this->lowerBound = $lowerBound;
        $this->upperBound = $upperBound;
    }

    /**
     * @return time
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }

    /**
     * @param time $lowerBound
     * @return $this
     */
    public function setLowerBound($lowerBound)
    {
        $this->lowerBound = $lowerBound;
        return $this;
    }

    /**
     * @return time
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }

    /**
     * @param time $upperBound
     * @return $this
     */
    public function setUpperBound($upperBound)
    {
        $this->upperBound = $upperBound;
        return $this;
    }


}

