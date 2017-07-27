<?php

namespace Etrias\PaazlConnector\SoapTypes;

class CountriesType
{

    /**
     * @var string
     */
    protected $country = null;

    /**
     * Constructor
     *
     * @var string $country
     */
    public function __construct($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

