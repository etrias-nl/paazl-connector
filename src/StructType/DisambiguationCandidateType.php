<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disambiguationCandidateType StructType
 * @subpackage Structs
 */
class DisambiguationCandidateType extends AbstractStructBase
{
    /**
     * The shippingOption
     * @var string
     */
    public $shippingOption;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The candidate
     * @var \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
     */
    public $candidate;
    /**
     * Constructor method for disambiguationCandidateType
     * @uses DisambiguationCandidateType::setShippingOption()
     * @uses DisambiguationCandidateType::setDistributor()
     * @uses DisambiguationCandidateType::setCandidate()
     * @param string $shippingOption
     * @param string $distributor
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $candidate
     */
    public function __construct($shippingOption = null, $distributor = null, \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $candidate = null)
    {
        $this
            ->setShippingOption($shippingOption)
            ->setDistributor($distributor)
            ->setCandidate($candidate);
    }
    /**
     * Get shippingOption value
     * @return string|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @param string $shippingOption
     * @return \Etrias\PaazlConnector\StructType\DisambiguationCandidateType
     */
    public function setShippingOption($shippingOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOption) && !is_string($shippingOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingOption)), __LINE__);
        }
        $this->shippingOption = $shippingOption;
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
     * @return \Etrias\PaazlConnector\StructType\DisambiguationCandidateType
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
     * Get candidate value
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination|null
     */
    public function getCandidate()
    {
        return $this->candidate;
    }
    /**
     * Set candidate value
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $candidate
     * @return \Etrias\PaazlConnector\StructType\DisambiguationCandidateType
     */
    public function setCandidate(\Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $candidate = null)
    {
        $this->candidate = $candidate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DisambiguationCandidateType
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
