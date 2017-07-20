<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for googleMapSearchstringResponse StructType
 * @subpackage Structs
 */
class GoogleMapSearchstringResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The searchstring
     * @var string
     */
    public $searchstring;
    /**
     * Constructor method for googleMapSearchstringResponse
     * @uses GoogleMapSearchstringResponse::setError()
     * @uses GoogleMapSearchstringResponse::setSearchstring()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $searchstring
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $searchstring = null)
    {
        $this
            ->setError($error)
            ->setSearchstring($searchstring);
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get searchstring value
     * @return string|null
     */
    public function getSearchstring()
    {
        return $this->searchstring;
    }
    /**
     * Set searchstring value
     * @param string $searchstring
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse
     */
    public function setSearchstring($searchstring = null)
    {
        // validation for constraint: string
        if (!is_null($searchstring) && !is_string($searchstring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchstring)), __LINE__);
        }
        $this->searchstring = $searchstring;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse
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
