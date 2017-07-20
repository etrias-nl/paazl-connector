<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carrierStatusType StructType
 * @subpackage Structs
 */
class CarrierStatusType extends AbstractStructBase
{
    /**
     * The info
     * @var string
     */
    public $info;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The postalcode
     * @var string
     */
    public $postalcode;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The proofOfDelivery
     * @var string
     */
    public $proofOfDelivery;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The time
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $time;
    /**
     * Constructor method for carrierStatusType
     * @uses CarrierStatusType::setInfo()
     * @uses CarrierStatusType::setType()
     * @uses CarrierStatusType::setCode()
     * @uses CarrierStatusType::setDescription()
     * @uses CarrierStatusType::setCity()
     * @uses CarrierStatusType::setPostalcode()
     * @uses CarrierStatusType::setCountry()
     * @uses CarrierStatusType::setProofOfDelivery()
     * @uses CarrierStatusType::setDate()
     * @uses CarrierStatusType::setTime()
     * @param string $info
     * @param string $type
     * @param string $code
     * @param string $description
     * @param string $city
     * @param string $postalcode
     * @param string $country
     * @param string $proofOfDelivery
     * @param string $date
     * @param \Etrias\PaazlConnector\StructType\Time $time
     */
    public function __construct($info = null, $type = null, $code = null, $description = null, $city = null, $postalcode = null, $country = null, $proofOfDelivery = null, $date = null, \Etrias\PaazlConnector\StructType\Time $time = null)
    {
        $this
            ->setInfo($info)
            ->setType($type)
            ->setCode($code)
            ->setDescription($description)
            ->setCity($city)
            ->setPostalcode($postalcode)
            ->setCountry($country)
            ->setProofOfDelivery($proofOfDelivery)
            ->setDate($date)
            ->setTime($time);
    }
    /**
     * Get info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param string $info
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($info)), __LINE__);
        }
        $this->info = $info;
        return $this;
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
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
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
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
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
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
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
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get postalcode value
     * @return string|null
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }
    /**
     * Set postalcode value
     * @param string $postalcode
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setPostalcode($postalcode = null)
    {
        // validation for constraint: string
        if (!is_null($postalcode) && !is_string($postalcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalcode)), __LINE__);
        }
        $this->postalcode = $postalcode;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get proofOfDelivery value
     * @return string|null
     */
    public function getProofOfDelivery()
    {
        return $this->proofOfDelivery;
    }
    /**
     * Set proofOfDelivery value
     * @param string $proofOfDelivery
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setProofOfDelivery($proofOfDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($proofOfDelivery) && !is_string($proofOfDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proofOfDelivery)), __LINE__);
        }
        $this->proofOfDelivery = $proofOfDelivery;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get time value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param \Etrias\PaazlConnector\StructType\Time $time
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public function setTime(\Etrias\PaazlConnector\StructType\Time $time = null)
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType
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
