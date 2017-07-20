<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointsType StructType
 * @subpackage Structs
 */
class ServicePointsType extends AbstractStructBase
{
    /**
     * The servicePoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePoint[]
     */
    public $servicePoint;
    /**
     * Constructor method for servicePointsType
     * @uses ServicePointsType::setServicePoint()
     * @param \Etrias\PaazlConnector\StructType\ServicePoint[] $servicePoint
     */
    public function __construct(array $servicePoint = array())
    {
        $this
            ->setServicePoint($servicePoint);
    }
    /**
     * Get servicePoint value
     * @return \Etrias\PaazlConnector\StructType\ServicePoint[]|null
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }
    /**
     * Set servicePoint value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ServicePoint[] $servicePoint
     * @return \Etrias\PaazlConnector\StructType\ServicePointsType
     */
    public function setServicePoint(array $servicePoint = array())
    {
        foreach ($servicePoint as $servicePointsTypeServicePointItem) {
            // validation for constraint: itemType
            if (!$servicePointsTypeServicePointItem instanceof \Etrias\PaazlConnector\StructType\ServicePoint) {
                throw new \InvalidArgumentException(sprintf('The servicePoint property can only contain items of \Etrias\PaazlConnector\StructType\ServicePoint, "%s" given', is_object($servicePointsTypeServicePointItem) ? get_class($servicePointsTypeServicePointItem) : gettype($servicePointsTypeServicePointItem)), __LINE__);
            }
        }
        $this->servicePoint = $servicePoint;
        return $this;
    }
    /**
     * Add item to servicePoint value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ServicePoint $item
     * @return \Etrias\PaazlConnector\StructType\ServicePointsType
     */
    public function addToServicePoint(\Etrias\PaazlConnector\StructType\ServicePoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ServicePoint) {
            throw new \InvalidArgumentException(sprintf('The servicePoint property can only contain items of \Etrias\PaazlConnector\StructType\ServicePoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->servicePoint[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointsType
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
