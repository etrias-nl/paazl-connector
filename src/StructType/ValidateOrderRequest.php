<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validateOrderRequest StructType
 * @subpackage Structs
 */
class ValidateOrderRequest extends AbstractStructBase
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
     * The pendingOrderReference
     * @var string
     */
    public $pendingOrderReference;
    /**
     * The totalAmount
     * @var int
     */
    public $totalAmount;
    /**
     * The totalAmountCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $totalAmountCurrency;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The customerEmail
     * @var string
     */
    public $customerEmail;
    /**
     * The customerPhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 15
     * @var string
     */
    public $customerPhoneNumber;
    /**
     * The shippingMethod
     * Meta informations extracted from the WSDL
     * - ref: matrix:shippingMethod
     * @var \Etrias\PaazlConnector\StructType\ShippingMethod
     */
    public $shippingMethod;
    /**
     * The shipperAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\SenderAddress
     */
    public $shipperAddress;
    /**
     * The returnAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\SenderAddress
     */
    public $returnAddress;
    /**
     * The shippingAddress
     * Meta informations extracted from the WSDL
     * - ref: matrix:shippingAddress
     * @var \Etrias\PaazlConnector\StructType\ShippingAddress
     */
    public $shippingAddress;
    /**
     * Constructor method for validateOrderRequest
     * @uses ValidateOrderRequest::setHash()
     * @uses ValidateOrderRequest::setWebshop()
     * @uses ValidateOrderRequest::setTargetWebshop()
     * @uses ValidateOrderRequest::setOrderReference()
     * @uses ValidateOrderRequest::setPendingOrderReference()
     * @uses ValidateOrderRequest::setTotalAmount()
     * @uses ValidateOrderRequest::setTotalAmountCurrency()
     * @uses ValidateOrderRequest::setLanguage()
     * @uses ValidateOrderRequest::setCustomerEmail()
     * @uses ValidateOrderRequest::setCustomerPhoneNumber()
     * @uses ValidateOrderRequest::setShippingMethod()
     * @uses ValidateOrderRequest::setShipperAddress()
     * @uses ValidateOrderRequest::setReturnAddress()
     * @uses ValidateOrderRequest::setShippingAddress()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $pendingOrderReference
     * @param int $totalAmount
     * @param string $totalAmountCurrency
     * @param string $language
     * @param string $customerEmail
     * @param string $customerPhoneNumber
     * @param \Etrias\PaazlConnector\StructType\ShippingMethod $shippingMethod
     * @param \Etrias\PaazlConnector\StructType\SenderAddress $shipperAddress
     * @param \Etrias\PaazlConnector\StructType\SenderAddress $returnAddress
     * @param \Etrias\PaazlConnector\StructType\ShippingAddress $shippingAddress
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $pendingOrderReference = null, $totalAmount = null, $totalAmountCurrency = 'EUR', $language = null, $customerEmail = null, $customerPhoneNumber = null, \Etrias\PaazlConnector\StructType\ShippingMethod $shippingMethod = null, \Etrias\PaazlConnector\StructType\SenderAddress $shipperAddress = null, \Etrias\PaazlConnector\StructType\SenderAddress $returnAddress = null, \Etrias\PaazlConnector\StructType\ShippingAddress $shippingAddress = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setPendingOrderReference($pendingOrderReference)
            ->setTotalAmount($totalAmount)
            ->setTotalAmountCurrency($totalAmountCurrency)
            ->setLanguage($language)
            ->setCustomerEmail($customerEmail)
            ->setCustomerPhoneNumber($customerPhoneNumber)
            ->setShippingMethod($shippingMethod)
            ->setShipperAddress($shipperAddress)
            ->setReturnAddress($returnAddress)
            ->setShippingAddress($shippingAddress);
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
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
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
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
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
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
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
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
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
     * Get pendingOrderReference value
     * @return string|null
     */
    public function getPendingOrderReference()
    {
        return $this->pendingOrderReference;
    }
    /**
     * Set pendingOrderReference value
     * @param string $pendingOrderReference
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setPendingOrderReference($pendingOrderReference = null)
    {
        // validation for constraint: string
        if (!is_null($pendingOrderReference) && !is_string($pendingOrderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pendingOrderReference)), __LINE__);
        }
        $this->pendingOrderReference = $pendingOrderReference;
        return $this;
    }
    /**
     * Get totalAmount value
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param int $totalAmount
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setTotalAmount($totalAmount = null)
    {
        // validation for constraint: int
        if (!is_null($totalAmount) && !is_numeric($totalAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * Get totalAmountCurrency value
     * @return string|null
     */
    public function getTotalAmountCurrency()
    {
        return $this->totalAmountCurrency;
    }
    /**
     * Set totalAmountCurrency value
     * @param string $totalAmountCurrency
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setTotalAmountCurrency($totalAmountCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($totalAmountCurrency) && strlen($totalAmountCurrency) !== 3) || (is_array($totalAmountCurrency) && count($totalAmountCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($totalAmountCurrency) && !preg_match('/[A-Z]{3}/', $totalAmountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($totalAmountCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($totalAmountCurrency) && !is_string($totalAmountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalAmountCurrency)), __LINE__);
        }
        $this->totalAmountCurrency = $totalAmountCurrency;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get customerEmail value
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }
    /**
     * Set customerEmail value
     * @param string $customerEmail
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setCustomerEmail($customerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerEmail)), __LINE__);
        }
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * Get customerPhoneNumber value
     * @return string|null
     */
    public function getCustomerPhoneNumber()
    {
        return $this->customerPhoneNumber;
    }
    /**
     * Set customerPhoneNumber value
     * @param string $customerPhoneNumber
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setCustomerPhoneNumber($customerPhoneNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($customerPhoneNumber) && strlen($customerPhoneNumber) > 15) || (is_array($customerPhoneNumber) && count($customerPhoneNumber) > 15)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 15 element(s) or a scalar of 15 character(s) at most, "%d" length given', is_scalar($customerPhoneNumber) ? strlen($customerPhoneNumber) : count($customerPhoneNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($customerPhoneNumber) && !is_string($customerPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerPhoneNumber)), __LINE__);
        }
        $this->customerPhoneNumber = $customerPhoneNumber;
        return $this;
    }
    /**
     * Get shippingMethod value
     * @return \Etrias\PaazlConnector\StructType\ShippingMethod|null
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }
    /**
     * Set shippingMethod value
     * @param \Etrias\PaazlConnector\StructType\ShippingMethod $shippingMethod
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setShippingMethod(\Etrias\PaazlConnector\StructType\ShippingMethod $shippingMethod = null)
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * Get shipperAddress value
     * @return \Etrias\PaazlConnector\StructType\SenderAddress|null
     */
    public function getShipperAddress()
    {
        return $this->shipperAddress;
    }
    /**
     * Set shipperAddress value
     * @param \Etrias\PaazlConnector\StructType\SenderAddress $shipperAddress
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setShipperAddress(\Etrias\PaazlConnector\StructType\SenderAddress $shipperAddress = null)
    {
        $this->shipperAddress = $shipperAddress;
        return $this;
    }
    /**
     * Get returnAddress value
     * @return \Etrias\PaazlConnector\StructType\SenderAddress|null
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }
    /**
     * Set returnAddress value
     * @param \Etrias\PaazlConnector\StructType\SenderAddress $returnAddress
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setReturnAddress(\Etrias\PaazlConnector\StructType\SenderAddress $returnAddress = null)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }
    /**
     * Get shippingAddress value
     * @return \Etrias\PaazlConnector\StructType\ShippingAddress|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
    /**
     * Set shippingAddress value
     * @param \Etrias\PaazlConnector\StructType\ShippingAddress $shippingAddress
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
     */
    public function setShippingAddress(\Etrias\PaazlConnector\StructType\ShippingAddress $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderRequest
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
