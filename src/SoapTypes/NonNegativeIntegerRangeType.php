<?php

namespace Etrias\PaazlConnector\SoapTypes;

class NonNegativeIntegerRangeType
{

    /**
     * @var nonNegativeInteger
     */
    protected $lowerBound = null;

    /**
     * @var nonNegativeInteger
     */
    protected $upperBound = null;

    /**
     * Constructor
     *
     * @var nonNegativeInteger $lowerBound
     * @var nonNegativeInteger $upperBound
     */
    public function __construct($lowerBound, $upperBound)
    {
        $this->lowerBound = $lowerBound;
        $this->upperBound = $upperBound;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }

    /**
     * @param nonNegativeInteger $lowerBound
     * @return $this
     */
    public function setLowerBound($lowerBound)
    {
        $this->lowerBound = $lowerBound;
        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }

    /**
     * @param nonNegativeInteger $upperBound
     * @return $this
     */
    public function setUpperBound($upperBound)
    {
        $this->upperBound = $upperBound;
        return $this;
    }


}

