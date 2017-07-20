<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for notification StructType
 * @subpackage Structs
 */
class Notification extends AbstractStructBase
{
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emailAddress;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * Constructor method for notification
     * @uses Notification::setEmailAddress()
     * @uses Notification::setPhoneNumber()
     * @param string $emailAddress
     * @param string $phoneNumber
     */
    public function __construct($emailAddress = null, $phoneNumber = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $emailAddress
     * @return \Etrias\PaazlConnector\StructType\Notification
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \Etrias\PaazlConnector\StructType\Notification
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Notification
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
