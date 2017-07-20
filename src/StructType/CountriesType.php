<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for countriesType StructType
 * @subpackage Structs
 */
class CountriesType extends AbstractStructBase
{
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $country;
    /**
     * Constructor method for countriesType
     * @uses CountriesType::setCountry()
     * @param string[] $country
     */
    public function __construct(array $country = array())
    {
        $this
            ->setCountry($country);
    }
    /**
     * Get country value
     * @return string[]|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @throws \InvalidArgumentException
     * @param string[] $country
     * @return \Etrias\PaazlConnector\StructType\CountriesType
     */
    public function setCountry(array $country = array())
    {
        foreach ($country as $countriesTypeCountryItem) {
            // validation for constraint: itemType
            if (!is_string($countriesTypeCountryItem)) {
                throw new \InvalidArgumentException(sprintf('The country property can only contain items of string, "%s" given', is_object($countriesTypeCountryItem) ? get_class($countriesTypeCountryItem) : gettype($countriesTypeCountryItem)), __LINE__);
            }
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Add item to country value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\CountriesType
     */
    public function addToCountry($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The country property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->country[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CountriesType
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
