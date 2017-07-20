<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestOptionType StructType
 * @subpackage Structs
 */
class PickupRequestOptionType extends AbstractStructBase
{
    /**
     * The identifier
     * @var string
     */
    public $identifier;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The option
     * @var string
     */
    public $option;
    /**
     * Constructor method for pickupRequestOptionType
     * @uses PickupRequestOptionType::setIdentifier()
     * @uses PickupRequestOptionType::setDescription()
     * @uses PickupRequestOptionType::setDistributor()
     * @uses PickupRequestOptionType::setOption()
     * @param string $identifier
     * @param string $description
     * @param string $distributor
     * @param string $option
     */
    public function __construct($identifier = null, $description = null, $distributor = null, $option = null)
    {
        $this
            ->setIdentifier($identifier)
            ->setDescription($description)
            ->setDistributor($distributor)
            ->setOption($option);
    }
    /**
     * Get identifier value
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionType
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionType
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionType
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
     * Get option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->option;
    }
    /**
     * Set option value
     * @param string $option
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionType
     */
    public function setOption($option = null)
    {
        // validation for constraint: string
        if (!is_null($option) && !is_string($option)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option)), __LINE__);
        }
        $this->option = $option;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionType
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
