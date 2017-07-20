<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateExtraPdfLabelRequest StructType
 * @subpackage Structs
 */
class GenerateExtraPdfLabelRequest extends AbstractStructBase
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
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The labelProducts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelProducts
     */
    public $labelProducts;
    /**
     * The printer
     * Meta informations extracted from the WSDL
     * - default: zebra
     * - minOccurs: 0
     * @var string
     */
    public $printer;
    /**
     * The batch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $batch;
    /**
     * The includeMetaData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $includeMetaData;
    /**
     * Constructor method for generateExtraPdfLabelRequest
     * @uses GenerateExtraPdfLabelRequest::setHash()
     * @uses GenerateExtraPdfLabelRequest::setWebshop()
     * @uses GenerateExtraPdfLabelRequest::setTargetWebshop()
     * @uses GenerateExtraPdfLabelRequest::setOrderReference()
     * @uses GenerateExtraPdfLabelRequest::setLabelProducts()
     * @uses GenerateExtraPdfLabelRequest::setPrinter()
     * @uses GenerateExtraPdfLabelRequest::setBatch()
     * @uses GenerateExtraPdfLabelRequest::setIncludeMetaData()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param \Etrias\PaazlConnector\StructType\LabelProducts $labelProducts
     * @param string $printer
     * @param string $batch
     * @param bool $includeMetaData
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, \Etrias\PaazlConnector\StructType\LabelProducts $labelProducts = null, $printer = 'zebra', $batch = null, $includeMetaData = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setLabelProducts($labelProducts)
            ->setPrinter($printer)
            ->setBatch($batch)
            ->setIncludeMetaData($includeMetaData);
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
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
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
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
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
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
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
     * Get orderReference value
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }
    /**
     * Set orderReference value
     * @param string $orderReference
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderReference)), __LINE__);
        }
        $this->orderReference = $orderReference;
        return $this;
    }
    /**
     * Get labelProducts value
     * @return \Etrias\PaazlConnector\StructType\LabelProducts|null
     */
    public function getLabelProducts()
    {
        return $this->labelProducts;
    }
    /**
     * Set labelProducts value
     * @param \Etrias\PaazlConnector\StructType\LabelProducts $labelProducts
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
     */
    public function setLabelProducts(\Etrias\PaazlConnector\StructType\LabelProducts $labelProducts = null)
    {
        $this->labelProducts = $labelProducts;
        return $this;
    }
    /**
     * Get printer value
     * @return string|null
     */
    public function getPrinter()
    {
        return $this->printer;
    }
    /**
     * Set printer value
     * @uses \Etrias\PaazlConnector\EnumType\PrinterType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PrinterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printer
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
     */
    public function setPrinter($printer = 'zebra')
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PrinterType::valueIsValid($printer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printer, implode(', ', \Etrias\PaazlConnector\EnumType\PrinterType::getValidValues())), __LINE__);
        }
        $this->printer = $printer;
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
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
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
     * Get includeMetaData value
     * @return bool|null
     */
    public function getIncludeMetaData()
    {
        return $this->includeMetaData;
    }
    /**
     * Set includeMetaData value
     * @param bool $includeMetaData
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
     */
    public function setIncludeMetaData($includeMetaData = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeMetaData) && !is_bool($includeMetaData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeMetaData)), __LINE__);
        }
        $this->includeMetaData = $includeMetaData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest
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
