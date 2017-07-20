<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryEstimateResponse StructType
 * @subpackage Structs
 */
class DeliveryEstimateResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The disambiguationCandidate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\DisambiguationCandidateType[]
     */
    public $disambiguationCandidate;
    /**
     * The deliveryEstimate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\DeliveryEstimateType[]
     */
    public $deliveryEstimate;
    /**
     * Constructor method for deliveryEstimateResponse
     * @uses DeliveryEstimateResponse::setError()
     * @uses DeliveryEstimateResponse::setDisambiguationCandidate()
     * @uses DeliveryEstimateResponse::setDeliveryEstimate()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\DisambiguationCandidateType[] $disambiguationCandidate
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateType[] $deliveryEstimate
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $disambiguationCandidate = array(), array $deliveryEstimate = array())
    {
        $this
            ->setError($error)
            ->setDisambiguationCandidate($disambiguationCandidate)
            ->setDeliveryEstimate($deliveryEstimate);
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
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get disambiguationCandidate value
     * @return \Etrias\PaazlConnector\StructType\DisambiguationCandidateType[]|null
     */
    public function getDisambiguationCandidate()
    {
        return $this->disambiguationCandidate;
    }
    /**
     * Set disambiguationCandidate value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\DisambiguationCandidateType[] $disambiguationCandidate
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
     */
    public function setDisambiguationCandidate(array $disambiguationCandidate = array())
    {
        foreach ($disambiguationCandidate as $deliveryEstimateResponseDisambiguationCandidateItem) {
            // validation for constraint: itemType
            if (!$deliveryEstimateResponseDisambiguationCandidateItem instanceof \Etrias\PaazlConnector\StructType\DisambiguationCandidateType) {
                throw new \InvalidArgumentException(sprintf('The disambiguationCandidate property can only contain items of \Etrias\PaazlConnector\StructType\DisambiguationCandidateType, "%s" given', is_object($deliveryEstimateResponseDisambiguationCandidateItem) ? get_class($deliveryEstimateResponseDisambiguationCandidateItem) : gettype($deliveryEstimateResponseDisambiguationCandidateItem)), __LINE__);
            }
        }
        $this->disambiguationCandidate = $disambiguationCandidate;
        return $this;
    }
    /**
     * Add item to disambiguationCandidate value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\DisambiguationCandidateType $item
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
     */
    public function addToDisambiguationCandidate(\Etrias\PaazlConnector\StructType\DisambiguationCandidateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\DisambiguationCandidateType) {
            throw new \InvalidArgumentException(sprintf('The disambiguationCandidate property can only contain items of \Etrias\PaazlConnector\StructType\DisambiguationCandidateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->disambiguationCandidate[] = $item;
        return $this;
    }
    /**
     * Get deliveryEstimate value
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType[]|null
     */
    public function getDeliveryEstimate()
    {
        return $this->deliveryEstimate;
    }
    /**
     * Set deliveryEstimate value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateType[] $deliveryEstimate
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
     */
    public function setDeliveryEstimate(array $deliveryEstimate = array())
    {
        foreach ($deliveryEstimate as $deliveryEstimateResponseDeliveryEstimateItem) {
            // validation for constraint: itemType
            if (!$deliveryEstimateResponseDeliveryEstimateItem instanceof \Etrias\PaazlConnector\StructType\DeliveryEstimateType) {
                throw new \InvalidArgumentException(sprintf('The deliveryEstimate property can only contain items of \Etrias\PaazlConnector\StructType\DeliveryEstimateType, "%s" given', is_object($deliveryEstimateResponseDeliveryEstimateItem) ? get_class($deliveryEstimateResponseDeliveryEstimateItem) : gettype($deliveryEstimateResponseDeliveryEstimateItem)), __LINE__);
            }
        }
        $this->deliveryEstimate = $deliveryEstimate;
        return $this;
    }
    /**
     * Add item to deliveryEstimate value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateType $item
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
     */
    public function addToDeliveryEstimate(\Etrias\PaazlConnector\StructType\DeliveryEstimateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\DeliveryEstimateType) {
            throw new \InvalidArgumentException(sprintf('The deliveryEstimate property can only contain items of \Etrias\PaazlConnector\StructType\DeliveryEstimateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->deliveryEstimate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
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
