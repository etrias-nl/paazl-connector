<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for label StructType
 * @subpackage Structs
 */
class Label extends AbstractStructBase
{
    /**
     * The createDate
     * @var string
     */
    public $createDate;
    /**
     * The deliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryDate;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The barcode
     * @var string
     */
    public $barcode;
    /**
     * The trackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trackingNumber;
    /**
     * The expectedDeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expectedDeliveryDate;
    /**
     * The expectedDeliveryTimeFrame
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\TimeRangeType
     */
    public $expectedDeliveryTimeFrame;
    /**
     * The carrierStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType
     */
    public $carrierStatus;
    /**
     * The deliveryInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryInformation;
    /**
     * Constructor method for label
     * @uses Label::setCreateDate()
     * @uses Label::setDeliveryDate()
     * @uses Label::setStatus()
     * @uses Label::setBarcode()
     * @uses Label::setTrackingNumber()
     * @uses Label::setExpectedDeliveryDate()
     * @uses Label::setExpectedDeliveryTimeFrame()
     * @uses Label::setCarrierStatus()
     * @uses Label::setDeliveryInformation()
     * @param string $createDate
     * @param string $deliveryDate
     * @param string $status
     * @param string $barcode
     * @param string $trackingNumber
     * @param string $expectedDeliveryDate
     * @param \Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus
     * @param string $deliveryInformation
     */
    public function __construct($createDate = null, $deliveryDate = null, $status = null, $barcode = null, $trackingNumber = null, $expectedDeliveryDate = null, \Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame = null, \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus = null, $deliveryInformation = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setDeliveryDate($deliveryDate)
            ->setStatus($status)
            ->setBarcode($barcode)
            ->setTrackingNumber($trackingNumber)
            ->setExpectedDeliveryDate($expectedDeliveryDate)
            ->setExpectedDeliveryTimeFrame($expectedDeliveryTimeFrame)
            ->setCarrierStatus($carrierStatus)
            ->setDeliveryInformation($deliveryInformation);
    }
    /**
     * Get createDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
    /**
     * Set createDate value
     * @param string $createDate
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->createDate = $createDate;
        return $this;
    }
    /**
     * Get deliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
    /**
     * Set deliveryDate value
     * @param string $deliveryDate
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->deliveryDate = $deliveryDate;
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
     * @uses \Etrias\PaazlConnector\EnumType\LabelStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\LabelStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\LabelStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\LabelStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set barcode value
     * @param string $barcode
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * Get trackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
    /**
     * Set trackingNumber value
     * @param string $trackingNumber
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get expectedDeliveryDate value
     * @return string|null
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * Set expectedDeliveryDate value
     * @param string $expectedDeliveryDate
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedDeliveryDate) && !is_string($expectedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedDeliveryDate)), __LINE__);
        }
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * Get expectedDeliveryTimeFrame value
     * @return \Etrias\PaazlConnector\StructType\TimeRangeType|null
     */
    public function getExpectedDeliveryTimeFrame()
    {
        return $this->expectedDeliveryTimeFrame;
    }
    /**
     * Set expectedDeliveryTimeFrame value
     * @param \Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setExpectedDeliveryTimeFrame(\Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame = null)
    {
        $this->expectedDeliveryTimeFrame = $expectedDeliveryTimeFrame;
        return $this;
    }
    /**
     * Get carrierStatus value
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType|null
     */
    public function getCarrierStatus()
    {
        return $this->carrierStatus;
    }
    /**
     * Set carrierStatus value
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setCarrierStatus(\Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus = null)
    {
        $this->carrierStatus = $carrierStatus;
        return $this;
    }
    /**
     * Get deliveryInformation value
     * @return string|null
     */
    public function getDeliveryInformation()
    {
        return $this->deliveryInformation;
    }
    /**
     * Set deliveryInformation value
     * @param string $deliveryInformation
     * @return \Etrias\PaazlConnector\StructType\Label
     */
    public function setDeliveryInformation($deliveryInformation = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryInformation) && !is_string($deliveryInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryInformation)), __LINE__);
        }
        $this->deliveryInformation = $deliveryInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Label
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
