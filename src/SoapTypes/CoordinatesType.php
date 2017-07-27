<?php

namespace Etrias\PaazlConnector\SoapTypes;

class CoordinatesType
{

    /**
     * @var float
     */
    protected $latitude = null;

    /**
     * @var float
     */
    protected $longitude = null;

    /**
     * Constructor
     *
     * @var float $latitude
     * @var float $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }


}

