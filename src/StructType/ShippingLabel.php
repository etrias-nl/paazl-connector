<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingLabel StructType
 * @subpackage Structs
 */
class ShippingLabel extends AbstractStructBase
{
    /**
     * The createdDate
     * @var string
     */
    public $createdDate;
    /**
     * The scannedDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $scannedDate;
    /**
     * The deliveredDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveredDate;
    /**
     * The deliveredbbDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveredbbDate;
    /**
     * The currentStatus
     * @var string
     */
    public $currentStatus;
    /**
     * The labelCode
     * @var string
     */
    public $labelCode;
    /**
     * The trackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trackingNumber;
    /**
     * The trackTraceUrl
     * @var string
     */
    public $trackTraceUrl;
    /**
     * The batch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $batch;
    /**
     * The carrierStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType
     */
    public $carrierStatus;
    /**
     * Constructor method for shippingLabel
     * @uses ShippingLabel::setCreatedDate()
     * @uses ShippingLabel::setScannedDate()
     * @uses ShippingLabel::setDeliveredDate()
     * @uses ShippingLabel::setDeliveredbbDate()
     * @uses ShippingLabel::setCurrentStatus()
     * @uses ShippingLabel::setLabelCode()
     * @uses ShippingLabel::setTrackingNumber()
     * @uses ShippingLabel::setTrackTraceUrl()
     * @uses ShippingLabel::setBatch()
     * @uses ShippingLabel::setCarrierStatus()
     * @param string $createdDate
     * @param string $scannedDate
     * @param string $deliveredDate
     * @param string $deliveredbbDate
     * @param string $currentStatus
     * @param string $labelCode
     * @param string $trackingNumber
     * @param string $trackTraceUrl
     * @param string $batch
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus
     */
    public function __construct($createdDate = null, $scannedDate = null, $deliveredDate = null, $deliveredbbDate = null, $currentStatus = null, $labelCode = null, $trackingNumber = null, $trackTraceUrl = null, $batch = null, \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus = null)
    {
        $this
            ->setCreatedDate($createdDate)
            ->setScannedDate($scannedDate)
            ->setDeliveredDate($deliveredDate)
            ->setDeliveredbbDate($deliveredbbDate)
            ->setCurrentStatus($currentStatus)
            ->setLabelCode($labelCode)
            ->setTrackingNumber($trackingNumber)
            ->setTrackTraceUrl($trackTraceUrl)
            ->setBatch($batch)
            ->setCarrierStatus($carrierStatus);
    }
    /**
     * Get createdDate value
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param string $createdDate
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdDate)), __LINE__);
        }
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * Get scannedDate value
     * @return string|null
     */
    public function getScannedDate()
    {
        return $this->scannedDate;
    }
    /**
     * Set scannedDate value
     * @param string $scannedDate
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setScannedDate($scannedDate = null)
    {
        // validation for constraint: string
        if (!is_null($scannedDate) && !is_string($scannedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scannedDate)), __LINE__);
        }
        $this->scannedDate = $scannedDate;
        return $this;
    }
    /**
     * Get deliveredDate value
     * @return string|null
     */
    public function getDeliveredDate()
    {
        return $this->deliveredDate;
    }
    /**
     * Set deliveredDate value
     * @param string $deliveredDate
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setDeliveredDate($deliveredDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveredDate) && !is_string($deliveredDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveredDate)), __LINE__);
        }
        $this->deliveredDate = $deliveredDate;
        return $this;
    }
    /**
     * Get deliveredbbDate value
     * @return string|null
     */
    public function getDeliveredbbDate()
    {
        return $this->deliveredbbDate;
    }
    /**
     * Set deliveredbbDate value
     * @param string $deliveredbbDate
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setDeliveredbbDate($deliveredbbDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveredbbDate) && !is_string($deliveredbbDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveredbbDate)), __LINE__);
        }
        $this->deliveredbbDate = $deliveredbbDate;
        return $this;
    }
    /**
     * Get currentStatus value
     * @return string|null
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }
    /**
     * Set currentStatus value
     * @uses \Etrias\PaazlConnector\EnumType\LabelStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\LabelStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currentStatus
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setCurrentStatus($currentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\LabelStatusType::valueIsValid($currentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currentStatus, implode(', ', \Etrias\PaazlConnector\EnumType\LabelStatusType::getValidValues())), __LINE__);
        }
        $this->currentStatus = $currentStatus;
        return $this;
    }
    /**
     * Get labelCode value
     * @return string|null
     */
    public function getLabelCode()
    {
        return $this->labelCode;
    }
    /**
     * Set labelCode value
     * @param string $labelCode
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setLabelCode($labelCode = null)
    {
        // validation for constraint: string
        if (!is_null($labelCode) && !is_string($labelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelCode)), __LINE__);
        }
        $this->labelCode = $labelCode;
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
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
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
     * Get trackTraceUrl value
     * @return string|null
     */
    public function getTrackTraceUrl()
    {
        return $this->trackTraceUrl;
    }
    /**
     * Set trackTraceUrl value
     * @param string $trackTraceUrl
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setTrackTraceUrl($trackTraceUrl = null)
    {
        // validation for constraint: string
        if (!is_null($trackTraceUrl) && !is_string($trackTraceUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackTraceUrl)), __LINE__);
        }
        $this->trackTraceUrl = $trackTraceUrl;
        return $this;
    }
    /**
     * Get batch value
     * @return string|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @param string $batch
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setBatch($batch = null)
    {
        // validation for constraint: string
        if (!is_null($batch) && !is_string($batch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($batch)), __LINE__);
        }
        $this->batch = $batch;
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
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
     */
    public function setCarrierStatus(\Etrias\PaazlConnector\StructType\CarrierStatusHistoryType $carrierStatus = null)
    {
        $this->carrierStatus = $carrierStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel
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
