<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changeStoresResponseType StructType
 * @subpackage Structs
 */
class ChangeStoresResponseType extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $code;
    /**
     * Constructor method for changeStoresResponseType
     * @uses ChangeStoresResponseType::setError()
     * @uses ChangeStoresResponseType::setCode()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string[] $code
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $code = array())
    {
        $this
            ->setError($error)
            ->setCode($code);
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
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get code value
     * @return string[]|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @throws \InvalidArgumentException
     * @param string[] $code
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType
     */
    public function setCode(array $code = array())
    {
        foreach ($code as $changeStoresResponseTypeCodeItem) {
            // validation for constraint: itemType
            if (!is_string($changeStoresResponseTypeCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The code property can only contain items of string, "%s" given', is_object($changeStoresResponseTypeCodeItem) ? get_class($changeStoresResponseTypeCodeItem) : gettype($changeStoresResponseTypeCodeItem)), __LINE__);
            }
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Add item to code value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType
     */
    public function addToCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The code property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->code[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType
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
