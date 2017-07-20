<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestStatusResponse StructType
 * @subpackage Structs
 */
class PickupRequestStatusResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The internalReference
     * @var string
     */
    public $internalReference;
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The statusHistory
     * @var \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType
     */
    public $statusHistory;
    /**
     * Constructor method for pickupRequestStatusResponse
     * @uses PickupRequestStatusResponse::setError()
     * @uses PickupRequestStatusResponse::setInternalReference()
     * @uses PickupRequestStatusResponse::setWebshop()
     * @uses PickupRequestStatusResponse::setStatus()
     * @uses PickupRequestStatusResponse::setDate()
     * @uses PickupRequestStatusResponse::setStatusHistory()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $internalReference
     * @param int $webshop
     * @param string $status
     * @param string $date
     * @param \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType $statusHistory
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $internalReference = null, $webshop = null, $status = null, $date = null, \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType $statusHistory = null)
    {
        $this
            ->setError($error)
            ->setInternalReference($internalReference)
            ->setWebshop($webshop)
            ->setStatus($status)
            ->setDate($date)
            ->setStatusHistory($statusHistory);
    }
    /**
     * Get error value
     * @return \Etrias\PaazlConnector\StructType\ErrorType|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get internalReference value
     * @return string|null
     */
    public function getInternalReference()
    {
        return $this->internalReference;
    }
    /**
     * Set internalReference value
     * @param string $internalReference
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
     */
    public function setInternalReference($internalReference = null)
    {
        // validation for constraint: string
        if (!is_null($internalReference) && !is_string($internalReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internalReference)), __LINE__);
        }
        $this->internalReference = $internalReference;
        return $this;
    }
    /**
     * Get webshop value
     * @return int|null
     */
    public function getWebshop()
    {
        return $this->webshop;
    }
    /**
     * Set webshop value
     * @param int $webshop
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
     */
    public function setWebshop($webshop = null)
    {
        // validation for constraint: int
        if (!is_null($webshop) && !is_numeric($webshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webshop)), __LINE__);
        }
        $this->webshop = $webshop;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PickupRequestStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
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
     * Get statusHistory value
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType|null
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }
    /**
     * Set statusHistory value
     * @param \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType $statusHistory
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
     */
    public function setStatusHistory(\Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType $statusHistory = null)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
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
