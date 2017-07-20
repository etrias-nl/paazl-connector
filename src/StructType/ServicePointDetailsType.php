<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointDetailsType StructType
 * @subpackage Structs
 */
class ServicePointDetailsType extends AbstractStructBase
{
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The notificationEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $notificationEmail;
    /**
     * The notificationMobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $notificationMobile;
    /**
     * The address
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $address;
    /**
     * Constructor method for servicePointDetailsType
     * @uses ServicePointDetailsType::setCode()
     * @uses ServicePointDetailsType::setName()
     * @uses ServicePointDetailsType::setNotificationEmail()
     * @uses ServicePointDetailsType::setNotificationMobile()
     * @uses ServicePointDetailsType::setAddress()
     * @param string $code
     * @param string $name
     * @param string $notificationEmail
     * @param string $notificationMobile
     * @param \Etrias\PaazlConnector\StructType\AddressType $address
     */
    public function __construct($code = null, $name = null, $notificationEmail = null, $notificationMobile = null, \Etrias\PaazlConnector\StructType\AddressType $address = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setNotificationEmail($notificationEmail)
            ->setNotificationMobile($notificationMobile)
            ->setAddress($address);
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get notificationEmail value
     * @return string|null
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }
    /**
     * Set notificationEmail value
     * @param string $notificationEmail
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType
     */
    public function setNotificationEmail($notificationEmail = null)
    {
        // validation for constraint: string
        if (!is_null($notificationEmail) && !is_string($notificationEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationEmail)), __LINE__);
        }
        $this->notificationEmail = $notificationEmail;
        return $this;
    }
    /**
     * Get notificationMobile value
     * @return string|null
     */
    public function getNotificationMobile()
    {
        return $this->notificationMobile;
    }
    /**
     * Set notificationMobile value
     * @param string $notificationMobile
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType
     */
    public function setNotificationMobile($notificationMobile = null)
    {
        // validation for constraint: string
        if (!is_null($notificationMobile) && !is_string($notificationMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationMobile)), __LINE__);
        }
        $this->notificationMobile = $notificationMobile;
        return $this;
    }
    /**
     * Get address value
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Etrias\PaazlConnector\StructType\AddressType $address
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType
     */
    public function setAddress(\Etrias\PaazlConnector\StructType\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType
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
