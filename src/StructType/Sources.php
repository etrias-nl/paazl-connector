<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sources StructType
 * Meta informations extracted from the WSDL
 * - documentation: Sources represent multiple sender addresses.
 * @subpackage Structs
 */
class Sources extends AbstractStructBase
{
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Source[]
     */
    public $source;
    /**
     * Constructor method for sources
     * @uses Sources::setSource()
     * @param \Etrias\PaazlConnector\StructType\Source[] $source
     */
    public function __construct(array $source = array())
    {
        $this
            ->setSource($source);
    }
    /**
     * Get source value
     * @return \Etrias\PaazlConnector\StructType\Source[]|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Source[] $source
     * @return \Etrias\PaazlConnector\StructType\Sources
     */
    public function setSource(array $source = array())
    {
        foreach ($source as $sourcesSourceItem) {
            // validation for constraint: itemType
            if (!$sourcesSourceItem instanceof \Etrias\PaazlConnector\StructType\Source) {
                throw new \InvalidArgumentException(sprintf('The source property can only contain items of \Etrias\PaazlConnector\StructType\Source, "%s" given', is_object($sourcesSourceItem) ? get_class($sourcesSourceItem) : gettype($sourcesSourceItem)), __LINE__);
            }
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Add item to source value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Source $item
     * @return \Etrias\PaazlConnector\StructType\Sources
     */
    public function addToSource(\Etrias\PaazlConnector\StructType\Source $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Source) {
            throw new \InvalidArgumentException(sprintf('The source property can only contain items of \Etrias\PaazlConnector\StructType\Source, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->source[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Sources
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
