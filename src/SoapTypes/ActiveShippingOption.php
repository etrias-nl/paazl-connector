<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ActiveShippingOption
{

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $distributorDescription = null;

    /**
     * @var countriesType
     */
    protected $countries = null;

    /**
     * Constructor
     *
     * @var string $type
     * @var string $description
     * @var string $distributor
     * @var string $distributorDescription
     * @var countriesType $countries
     */
    public function __construct($type, $description, $distributor, $distributorDescription, $countries)
    {
        $this->type = $type;
        $this->description = $description;
        $this->distributor = $distributor;
        $this->distributorDescription = $distributorDescription;
        $this->countries = $countries;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistributorDescription()
    {
        return $this->distributorDescription;
    }

    /**
     * @param string $distributorDescription
     * @return $this
     */
    public function setDistributorDescription($distributorDescription)
    {
        $this->distributorDescription = $distributorDescription;
        return $this;
    }

    /**
     * @return countriesType
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param countriesType $countries
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
        return $this;
    }


}

