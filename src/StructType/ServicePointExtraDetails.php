<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointExtraDetails StructType
 * @subpackage Structs
 */
class ServicePointExtraDetails extends AbstractStructBase
{
    /**
     * The pictureUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pictureUrl;
    /**
     * The locationHints
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $locationHints;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $remarks;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus
     */
    public $status;
    /**
     * Constructor method for servicePointExtraDetails
     * @uses ServicePointExtraDetails::setPictureUrl()
     * @uses ServicePointExtraDetails::setLocationHints()
     * @uses ServicePointExtraDetails::setRemarks()
     * @uses ServicePointExtraDetails::setStatus()
     * @param string $pictureUrl
     * @param string[] $locationHints
     * @param string[] $remarks
     * @param \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus $status
     */
    public function __construct($pictureUrl = null, array $locationHints = array(), array $remarks = array(), \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus $status = null)
    {
        $this
            ->setPictureUrl($pictureUrl)
            ->setLocationHints($locationHints)
            ->setRemarks($remarks)
            ->setStatus($status);
    }
    /**
     * Get pictureUrl value
     * @return string|null
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }
    /**
     * Set pictureUrl value
     * @param string $pictureUrl
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public function setPictureUrl($pictureUrl = null)
    {
        // validation for constraint: string
        if (!is_null($pictureUrl) && !is_string($pictureUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureUrl)), __LINE__);
        }
        $this->pictureUrl = $pictureUrl;
        return $this;
    }
    /**
     * Get locationHints value
     * @return string[]|null
     */
    public function getLocationHints()
    {
        return $this->locationHints;
    }
    /**
     * Set locationHints value
     * @throws \InvalidArgumentException
     * @param string[] $locationHints
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public function setLocationHints(array $locationHints = array())
    {
        foreach ($locationHints as $servicePointExtraDetailsLocationHintsItem) {
            // validation for constraint: itemType
            if (!is_string($servicePointExtraDetailsLocationHintsItem)) {
                throw new \InvalidArgumentException(sprintf('The locationHints property can only contain items of string, "%s" given', is_object($servicePointExtraDetailsLocationHintsItem) ? get_class($servicePointExtraDetailsLocationHintsItem) : gettype($servicePointExtraDetailsLocationHintsItem)), __LINE__);
            }
        }
        $this->locationHints = $locationHints;
        return $this;
    }
    /**
     * Add item to locationHints value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public function addToLocationHints($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The locationHints property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->locationHints[] = $item;
        return $this;
    }
    /**
     * Get remarks value
     * @return string[]|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @throws \InvalidArgumentException
     * @param string[] $remarks
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public function setRemarks(array $remarks = array())
    {
        foreach ($remarks as $servicePointExtraDetailsRemarksItem) {
            // validation for constraint: itemType
            if (!is_string($servicePointExtraDetailsRemarksItem)) {
                throw new \InvalidArgumentException(sprintf('The remarks property can only contain items of string, "%s" given', is_object($servicePointExtraDetailsRemarksItem) ? get_class($servicePointExtraDetailsRemarksItem) : gettype($servicePointExtraDetailsRemarksItem)), __LINE__);
            }
        }
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Add item to remarks value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public function addToRemarks($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The remarks property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->remarks[] = $item;
        return $this;
    }
    /**
     * Get status value
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus $status
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public function setStatus(\Etrias\PaazlConnector\StructType\ServicePointExtraDetailsStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
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
