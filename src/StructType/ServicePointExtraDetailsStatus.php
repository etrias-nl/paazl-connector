<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointExtraDetailsStatus StructType
 * @subpackage Structs
 */
class ServicePointExtraDetailsStatus extends AbstractStructBase
{
    /**
     * The available
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $available;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $code;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $value;
    /**
     * The referenceDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $referenceDate;
    /**
     * The referenceStartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $referenceStartDate;
    /**
     * The referenceEndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $referenceEndDate;
    /**
     * Constructor method for servicePointExtraDetailsStatus
     * @uses ServicePointExtraDetailsStatus::setAvailable()
     * @uses ServicePointExtraDetailsStatus::setCode()
     * @uses ServicePointExtraDetailsStatus::setValue()
     * @uses ServicePointExtraDetailsStatus::setReferenceDate()
     * @uses ServicePointExtraDetailsStatus::setReferenceStartDate()
     * @uses ServicePointExtraDetailsStatus::setReferenceEndDate()
     * @param bool $available
     * @param string $code
     * @param string $value
     * @param string $referenceDate
     * @param string $referenceStartDate
     * @param string $referenceEndDate
     */
    public function __construct($available = null, $code = null, $value = null, $referenceDate = null, $referenceStartDate = null, $referenceEndDate = null)
    {
        $this
            ->setAvailable($available)
            ->setCode($code)
            ->setValue($value)
            ->setReferenceDate($referenceDate)
            ->setReferenceStartDate($referenceStartDate)
            ->setReferenceEndDate($referenceEndDate);
    }
    /**
     * Get available value
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * Set available value
     * @param bool $available
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
     */
    public function setAvailable($available = null)
    {
        // validation for constraint: boolean
        if (!is_null($available) && !is_bool($available)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($available)), __LINE__);
        }
        $this->available = $available;
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
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
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get referenceDate value
     * @return string|null
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }
    /**
     * Set referenceDate value
     * @param string $referenceDate
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
     */
    public function setReferenceDate($referenceDate = null)
    {
        // validation for constraint: string
        if (!is_null($referenceDate) && !is_string($referenceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceDate)), __LINE__);
        }
        $this->referenceDate = $referenceDate;
        return $this;
    }
    /**
     * Get referenceStartDate value
     * @return string|null
     */
    public function getReferenceStartDate()
    {
        return $this->referenceStartDate;
    }
    /**
     * Set referenceStartDate value
     * @param string $referenceStartDate
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
     */
    public function setReferenceStartDate($referenceStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($referenceStartDate) && !is_string($referenceStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceStartDate)), __LINE__);
        }
        $this->referenceStartDate = $referenceStartDate;
        return $this;
    }
    /**
     * Get referenceEndDate value
     * @return string|null
     */
    public function getReferenceEndDate()
    {
        return $this->referenceEndDate;
    }
    /**
     * Set referenceEndDate value
     * @param string $referenceEndDate
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
     */
    public function setReferenceEndDate($referenceEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($referenceEndDate) && !is_string($referenceEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceEndDate)), __LINE__);
        }
        $this->referenceEndDate = $referenceEndDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
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
