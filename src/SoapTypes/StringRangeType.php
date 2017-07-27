<?php

namespace Etrias\PaazlConnector\SoapTypes;

class StringRangeType
{

    /**
     * @var string
     */
    protected $lowerBound = null;

    /**
     * @var string
     */
    protected $upperBound = null;

    /**
     * Constructor
     *
     * @var string $lowerBound
     * @var string $upperBound
     */
    public function __construct($lowerBound, $upperBound)
    {
        $this->lowerBound = $lowerBound;
        $this->upperBound = $upperBound;
    }

    /**
     * @return string
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }

    /**
     * @param string $lowerBound
     * @return $this
     */
    public function setLowerBound($lowerBound)
    {
        $this->lowerBound = $lowerBound;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }

    /**
     * @param string $upperBound
     * @return $this
     */
    public function setUpperBound($upperBound)
    {
        $this->upperBound = $upperBound;
        return $this;
    }


}

