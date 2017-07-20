<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnContractType StructType
 * @subpackage Structs
 */
class ReturnContractType extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - default: unspecified
     * @var string
     */
    public $type;
    /**
     * The contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contract;
    /**
     * Constructor method for returnContractType
     * @uses ReturnContractType::setType()
     * @uses ReturnContractType::setContract()
     * @param string $type
     * @param string $contract
     */
    public function __construct($type = 'unspecified', $contract = null)
    {
        $this
            ->setType($type)
            ->setContract($contract);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Etrias\PaazlConnector\EnumType\ReturnContractTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\ReturnContractTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Etrias\PaazlConnector\StructType\ReturnContractType
     */
    public function setType($type = 'unspecified')
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\ReturnContractTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Etrias\PaazlConnector\EnumType\ReturnContractTypeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
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
     * @return \Etrias\PaazlConnector\StructType\ReturnContractType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ReturnContractType
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
