<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestQueryType StructType
 * @subpackage Structs
 */
class PickupRequestQueryType extends AbstractStructBase
{
    /**
     * The hash
     * @var string
     */
    public $hash;
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The targetWebshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $targetWebshop;
    /**
     * The internalReference
     * @var string
     */
    public $internalReference;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The externalReference
     * @var string
     */
    public $externalReference;
    /**
     * Constructor method for pickupRequestQueryType
     * @uses PickupRequestQueryType::setHash()
     * @uses PickupRequestQueryType::setWebshop()
     * @uses PickupRequestQueryType::setTargetWebshop()
     * @uses PickupRequestQueryType::setInternalReference()
     * @uses PickupRequestQueryType::setDistributor()
     * @uses PickupRequestQueryType::setExternalReference()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $internalReference
     * @param string $distributor
     * @param string $externalReference
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $internalReference = null, $distributor = null, $externalReference = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setInternalReference($internalReference)
            ->setDistributor($distributor)
            ->setExternalReference($externalReference);
    }
    /**
     * Get hash value
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * Set hash value
     * @param string $hash
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
     */
    public function setHash($hash = null)
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hash)), __LINE__);
        }
        $this->hash = $hash;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
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
     * Get targetWebshop value
     * @return int|null
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }
    /**
     * Set targetWebshop value
     * @param int $targetWebshop
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
     */
    public function setTargetWebshop($targetWebshop = null)
    {
        // validation for constraint: int
        if (!is_null($targetWebshop) && !is_numeric($targetWebshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($targetWebshop)), __LINE__);
        }
        $this->targetWebshop = $targetWebshop;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
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
     * Get distributor value
     * @return string|null
     */
    public function getDistributor()
    {
        return $this->distributor;
    }
    /**
     * Set distributor value
     * @param string $distributor
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
     */
    public function setDistributor($distributor = null)
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributor)), __LINE__);
        }
        $this->distributor = $distributor;
        return $this;
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
     */
    public function setExternalReference($externalReference = null)
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestQueryType
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
