<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for activeShippingOption StructType
 * @subpackage Structs
 */
class ActiveShippingOption extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The distributorDescription
     * @var string
     */
    public $distributorDescription;
    /**
     * The countries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\CountriesType
     */
    public $countries;
    /**
     * Constructor method for activeShippingOption
     * @uses ActiveShippingOption::setType()
     * @uses ActiveShippingOption::setDescription()
     * @uses ActiveShippingOption::setDistributor()
     * @uses ActiveShippingOption::setDistributorDescription()
     * @uses ActiveShippingOption::setCountries()
     * @param string $type
     * @param string $description
     * @param string $distributor
     * @param string $distributorDescription
     * @param \Etrias\PaazlConnector\StructType\CountriesType $countries
     */
    public function __construct($type = null, $description = null, $distributor = null, $distributorDescription = null, \Etrias\PaazlConnector\StructType\CountriesType $countries = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setDistributor($distributor)
            ->setDistributorDescription($distributorDescription)
            ->setCountries($countries);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get distributor value
     * @return string|null
     */
    public function getDistributor()
    {
        return $this->distributor;
    }
    /**
     * Set distributor value
     * @param string $distributor
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption
     */
    public function setDistributor($distributor = null)
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributor)), __LINE__);
        }
        $this->distributor = $distributor;
        return $this;
    }
    /**
     * Get distributorDescription value
     * @return string|null
     */
    public function getDistributorDescription()
    {
        return $this->distributorDescription;
    }
    /**
     * Set distributorDescription value
     * @param string $distributorDescription
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption
     */
    public function setDistributorDescription($distributorDescription = null)
    {
        // validation for constraint: string
        if (!is_null($distributorDescription) && !is_string($distributorDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributorDescription)), __LINE__);
        }
        $this->distributorDescription = $distributorDescription;
        return $this;
    }
    /**
     * Get countries value
     * @return \Etrias\PaazlConnector\StructType\CountriesType|null
     */
    public function getCountries()
    {
        return $this->countries;
    }
    /**
     * Set countries value
     * @param \Etrias\PaazlConnector\StructType\CountriesType $countries
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption
     */
    public function setCountries(\Etrias\PaazlConnector\StructType\CountriesType $countries = null)
    {
        $this->countries = $countries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
