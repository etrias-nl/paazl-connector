<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingOptionDetailsType StructType
 * @subpackage Structs
 */
class ShippingOptionDetailsType extends AbstractStructBase
{
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contract;
    /**
     * The option
     * @var string
     */
    public $option;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for shippingOptionDetailsType
     * @uses ShippingOptionDetailsType::setDistributor()
     * @uses ShippingOptionDetailsType::setContract()
     * @uses ShippingOptionDetailsType::setOption()
     * @uses ShippingOptionDetailsType::setDescription()
     * @param string $distributor
     * @param string $contract
     * @param string $option
     * @param string $description
     */
    public function __construct($distributor = null, $contract = null, $option = null, $description = null)
    {
        $this
            ->setDistributor($distributor)
            ->setContract($contract)
            ->setOption($option)
            ->setDescription($description);
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType
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
     * Get contract value
     * @return string|null
     */
    public function getContract()
    {
        return $this->contract;
    }
    /**
     * Set contract value
     * @param string $contract
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType
     */
    public function setContract($contract = null)
    {
        // validation for constraint: string
        if (!is_null($contract) && !is_string($contract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contract)), __LINE__);
        }
        $this->contract = $contract;
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType
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
