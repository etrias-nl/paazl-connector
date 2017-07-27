<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class ChangeOrderRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $newOrderReference = null;

    /**
     * @var int
     */
    protected $totalAmount = null;

    /**
     * @var currencyCode
     */
    protected $totalAmountCurrency = null;

    /**
     * @var language
     */
    protected $language = null;

    /**
     * @var string
     */
    protected $customerEmail = null;

    /**
     * @var customerPhoneNumber
     */
    protected $customerPhoneNumber = null;

    /**
     * @var changeShippingMethod
     */
    protected $shippingMethod = null;

    /**
     * @var changeSenderAddress
     */
    protected $shipperAddress = null;

    /**
     * @var changeSenderAddress
     */
    protected $returnAddress = null;

    /**
     * @var changeShippingAddress
     */
    protected $shippingAddress = null;

    /**
     * @var changeProducts
     */
    protected $products = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $orderReference
     * @var string $newOrderReference
     * @var int $totalAmount
     * @var currencyCode $totalAmountCurrency
     * @var language $language
     * @var string $customerEmail
     * @var customerPhoneNumber $customerPhoneNumber
     * @var changeShippingMethod $shippingMethod
     * @var changeSenderAddress $shipperAddress
     * @var changeSenderAddress $returnAddress
     * @var changeShippingAddress $shippingAddress
     * @var changeProducts $products
     */
    public function __construct($hash, $webshop, $targetWebshop, $orderReference, $newOrderReference, $totalAmount, $totalAmountCurrency, $language, $customerEmail, $customerPhoneNumber, $shippingMethod, $shipperAddress, $returnAddress, $shippingAddress, $products)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->newOrderReference = $newOrderReference;
        $this->totalAmount = $totalAmount;
        $this->totalAmountCurrency = $totalAmountCurrency;
        $this->language = $language;
        $this->customerEmail = $customerEmail;
        $this->customerPhoneNumber = $customerPhoneNumber;
        $this->shippingMethod = $shippingMethod;
        $this->shipperAddress = $shipperAddress;
        $this->returnAddress = $returnAddress;
        $this->shippingAddress = $shippingAddress;
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
        return $this->webshop;
    }

    /**
     * @param int $webshop
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }

    /**
     * @param int $targetWebshop
     * @return $this
     */
    public function setTargetWebshop($targetWebshop)
    {
        $this->targetWebshop = $targetWebshop;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewOrderReference()
    {
        return $this->newOrderReference;
    }

    /**
     * @param string $newOrderReference
     * @return $this
     */
    public function setNewOrderReference($newOrderReference)
    {
        $this->newOrderReference = $newOrderReference;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getTotalAmountCurrency()
    {
        return $this->totalAmountCurrency;
    }

    /**
     * @param currencyCode $totalAmountCurrency
     * @return $this
     */
    public function setTotalAmountCurrency($totalAmountCurrency)
    {
        $this->totalAmountCurrency = $totalAmountCurrency;
        return $this;
    }

    /**
     * @return language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param language $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    /**
     * @return customerPhoneNumber
     */
    public function getCustomerPhoneNumber()
    {
        return $this->customerPhoneNumber;
    }

    /**
     * @param customerPhoneNumber $customerPhoneNumber
     * @return $this
     */
    public function setCustomerPhoneNumber($customerPhoneNumber)
    {
        $this->customerPhoneNumber = $customerPhoneNumber;
        return $this;
    }

    /**
     * @return changeShippingMethod
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param changeShippingMethod $shippingMethod
     * @return $this
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * @return changeSenderAddress
     */
    public function getShipperAddress()
    {
        return $this->shipperAddress;
    }

    /**
     * @param changeSenderAddress $shipperAddress
     * @return $this
     */
    public function setShipperAddress($shipperAddress)
    {
        $this->shipperAddress = $shipperAddress;
        return $this;
    }

    /**
     * @return changeSenderAddress
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * @param changeSenderAddress $returnAddress
     * @return $this
     */
    public function setReturnAddress($returnAddress)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * @return changeShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param changeShippingAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return changeProducts
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param changeProducts $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }


}

