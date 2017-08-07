<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\SoapTypes;

class ChangeShippingMethod
{
    /**
     * @var deliveryTypeType
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $contract = null;

    /**
     * @var string
     */
    protected $identifier = null;

    /**
     * @var string
     */
    protected $option = null;

    /**
     * @var string
     */
    protected $servicepointAccountNumber = null;

    /**
     * @var string
     */
    protected $servicepointNotificationEmail = null;

    /**
     * @var string
     */
    protected $servicepointNotificationMobile = null;

    /**
     * @var float
     */
    protected $price = null;

    /**
     * @var shippingPaymentType
     */
    protected $shippingPaymentType = null;

    /**
     * @var string
     */
    protected $billingAccountNumber = null;

    /**
     * @var string
     */
    protected $invoiceNumber = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $packagingWeight = null;

    /**
     * @var customsValue
     */
    protected $customsValue = null;

    /**
     * @var currencyCode
     */
    protected $customsValueCurrency = null;

    /**
     * @var dutiesPaymentType
     */
    protected $dutiesPaymentType = null;

    /**
     * @var string
     */
    protected $dutiesAccountNumber = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $orderWeight = null;

    /**
     * @var int
     */
    protected $assuredAmount = null;

    /**
     * @var currencyCode
     */
    protected $assuredAmountCurrency = null;

    /**
     * @var int
     */
    protected $collo = null;

    /**
     * @var positiveInteger
     */
    protected $packageCount = null;

    /**
     * @var int
     */
    protected $maxLabels = null;

    /**
     * @var packagingTypeType
     */
    protected $packagingType = null;

    /**
     * @var \DateTime
     */
    protected $preferredDeliveryDate = null;

    /**
     * @var bool
     */
    protected $preferredDateChosen = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @var deliveryTypeType
     * @var string              $contract
     * @var string              $identifier
     * @var string              $option
     * @var string              $servicepointAccountNumber
     * @var string              $servicepointNotificationEmail
     * @var string              $servicepointNotificationMobile
     * @var float               $price
     * @var shippingPaymentType $shippingPaymentType
     * @var string              $billingAccountNumber
     * @var string              $invoiceNumber
     * @var nonNegativeDecimal  $packagingWeight
     * @var customsValue        $customsValue
     * @var currencyCode        $customsValueCurrency
     * @var dutiesPaymentType   $dutiesPaymentType
     * @var string              $dutiesAccountNumber
     * @var nonNegativeDecimal  $orderWeight
     * @var int                 $assuredAmount
     * @var currencyCode        $assuredAmountCurrency
     * @var int                 $collo
     * @var positiveInteger     $packageCount
     * @var int                 $maxLabels
     * @var packagingTypeType   $packagingType
     * @var \DateTime           $preferredDeliveryDate
     * @var bool                $preferredDateChosen
     * @var string              $description
     *
     * @param mixed $type
     * @param mixed $contract
     * @param mixed $identifier
     * @param mixed $option
     * @param mixed $servicepointAccountNumber
     * @param mixed $servicepointNotificationEmail
     * @param mixed $servicepointNotificationMobile
     * @param mixed $price
     * @param mixed $shippingPaymentType
     * @param mixed $billingAccountNumber
     * @param mixed $invoiceNumber
     * @param mixed $packagingWeight
     * @param mixed $customsValue
     * @param mixed $customsValueCurrency
     * @param mixed $dutiesPaymentType
     * @param mixed $dutiesAccountNumber
     * @param mixed $orderWeight
     * @param mixed $assuredAmount
     * @param mixed $assuredAmountCurrency
     * @param mixed $collo
     * @param mixed $packageCount
     * @param mixed $maxLabels
     * @param mixed $packagingType
     * @param mixed $preferredDeliveryDate
     * @param mixed $preferredDateChosen
     * @param mixed $description
     */
    public function __construct(
        $type = null,
        $contract = null,
        $identifier = null,
        $option = null,
        $servicepointAccountNumber = null,
        $servicepointNotificationEmail = null,
        $servicepointNotificationMobile = null,
        $price = null,
        $shippingPaymentType = null,
        $billingAccountNumber = null,
        $invoiceNumber = null,
        $packagingWeight = null,
        $customsValue = null,
        $customsValueCurrency = null,
        $dutiesPaymentType = null,
        $dutiesAccountNumber = null,
        $orderWeight = null,
        $assuredAmount = null,
        $assuredAmountCurrency = null,
        $collo = null,
        $packageCount = null,
        $maxLabels = null,
        $packagingType = null,
        $preferredDeliveryDate = null,
        $preferredDateChosen = null,
        $description = null
    ) {
        $this->type = $type;
        $this->contract = $contract;
        $this->identifier = $identifier;
        $this->option = $option;
        $this->servicepointAccountNumber = $servicepointAccountNumber;
        $this->servicepointNotificationEmail = $servicepointNotificationEmail;
        $this->servicepointNotificationMobile = $servicepointNotificationMobile;
        $this->price = $price;
        $this->shippingPaymentType = $shippingPaymentType;
        $this->billingAccountNumber = $billingAccountNumber;
        $this->invoiceNumber = $invoiceNumber;
        $this->packagingWeight = $packagingWeight;
        $this->customsValue = $customsValue;
        $this->customsValueCurrency = $customsValueCurrency;
        $this->dutiesPaymentType = $dutiesPaymentType;
        $this->dutiesAccountNumber = $dutiesAccountNumber;
        $this->orderWeight = $orderWeight;
        $this->assuredAmount = $assuredAmount;
        $this->assuredAmountCurrency = $assuredAmountCurrency;
        $this->collo = $collo;
        $this->packageCount = $packageCount;
        $this->maxLabels = $maxLabels;
        $this->packagingType = $packagingType;
        $this->preferredDeliveryDate = $preferredDeliveryDate;
        $this->preferredDateChosen = $preferredDateChosen;
        $this->description = $description;
    }

    /**
     * @return deliveryTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param deliveryTypeType $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicepointAccountNumber()
    {
        return $this->servicepointAccountNumber;
    }

    /**
     * @param string $servicepointAccountNumber
     *
     * @return $this
     */
    public function setServicepointAccountNumber($servicepointAccountNumber)
    {
        $this->servicepointAccountNumber = $servicepointAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicepointNotificationEmail()
    {
        return $this->servicepointNotificationEmail;
    }

    /**
     * @param string $servicepointNotificationEmail
     *
     * @return $this
     */
    public function setServicepointNotificationEmail($servicepointNotificationEmail)
    {
        $this->servicepointNotificationEmail = $servicepointNotificationEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicepointNotificationMobile()
    {
        return $this->servicepointNotificationMobile;
    }

    /**
     * @param string $servicepointNotificationMobile
     *
     * @return $this
     */
    public function setServicepointNotificationMobile($servicepointNotificationMobile)
    {
        $this->servicepointNotificationMobile = $servicepointNotificationMobile;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return shippingPaymentType
     */
    public function getShippingPaymentType()
    {
        return $this->shippingPaymentType;
    }

    /**
     * @param shippingPaymentType $shippingPaymentType
     *
     * @return $this
     */
    public function setShippingPaymentType($shippingPaymentType)
    {
        $this->shippingPaymentType = $shippingPaymentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }

    /**
     * @param string $billingAccountNumber
     *
     * @return $this
     */
    public function setBillingAccountNumber($billingAccountNumber)
    {
        $this->billingAccountNumber = $billingAccountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * @return nonNegativeDecimal
     */
    public function getPackagingWeight()
    {
        return $this->packagingWeight;
    }

    /**
     * @param nonNegativeDecimal $packagingWeight
     *
     * @return $this
     */
    public function setPackagingWeight($packagingWeight)
    {
        $this->packagingWeight = $packagingWeight;

        return $this;
    }

    /**
     * @return customsValue
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }

    /**
     * @param customsValue $customsValue
     *
     * @return $this
     */
    public function setCustomsValue($customsValue)
    {
        $this->customsValue = $customsValue;

        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getCustomsValueCurrency()
    {
        return $this->customsValueCurrency;
    }

    /**
     * @param currencyCode $customsValueCurrency
     *
     * @return $this
     */
    public function setCustomsValueCurrency($customsValueCurrency)
    {
        $this->customsValueCurrency = $customsValueCurrency;

        return $this;
    }

    /**
     * @return dutiesPaymentType
     */
    public function getDutiesPaymentType()
    {
        return $this->dutiesPaymentType;
    }

    /**
     * @param dutiesPaymentType $dutiesPaymentType
     *
     * @return $this
     */
    public function setDutiesPaymentType($dutiesPaymentType)
    {
        $this->dutiesPaymentType = $dutiesPaymentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDutiesAccountNumber()
    {
        return $this->dutiesAccountNumber;
    }

    /**
     * @param string $dutiesAccountNumber
     *
     * @return $this
     */
    public function setDutiesAccountNumber($dutiesAccountNumber)
    {
        $this->dutiesAccountNumber = $dutiesAccountNumber;

        return $this;
    }

    /**
     * @return nonNegativeDecimal
     */
    public function getOrderWeight()
    {
        return $this->orderWeight;
    }

    /**
     * @param nonNegativeDecimal $orderWeight
     *
     * @return $this
     */
    public function setOrderWeight($orderWeight)
    {
        $this->orderWeight = $orderWeight;

        return $this;
    }

    /**
     * @return int
     */
    public function getAssuredAmount()
    {
        return $this->assuredAmount;
    }

    /**
     * @param int $assuredAmount
     *
     * @return $this
     */
    public function setAssuredAmount($assuredAmount)
    {
        $this->assuredAmount = $assuredAmount;

        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getAssuredAmountCurrency()
    {
        return $this->assuredAmountCurrency;
    }

    /**
     * @param currencyCode $assuredAmountCurrency
     *
     * @return $this
     */
    public function setAssuredAmountCurrency($assuredAmountCurrency)
    {
        $this->assuredAmountCurrency = $assuredAmountCurrency;

        return $this;
    }

    /**
     * @return int
     */
    public function getCollo()
    {
        return $this->collo;
    }

    /**
     * @param int $collo
     *
     * @return $this
     */
    public function setCollo($collo)
    {
        $this->collo = $collo;

        return $this;
    }

    /**
     * @return positiveInteger
     */
    public function getPackageCount()
    {
        return $this->packageCount;
    }

    /**
     * @param positiveInteger $packageCount
     *
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->packageCount = $packageCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLabels()
    {
        return $this->maxLabels;
    }

    /**
     * @param int $maxLabels
     *
     * @return $this
     */
    public function setMaxLabels($maxLabels)
    {
        $this->maxLabels = $maxLabels;

        return $this;
    }

    /**
     * @return packagingTypeType
     */
    public function getPackagingType()
    {
        return $this->packagingType;
    }

    /**
     * @param packagingTypeType $packagingType
     *
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->packagingType = $packagingType;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreferredDeliveryDate()
    {
        return $this->preferredDeliveryDate;
    }

    /**
     * @param \DateTime $preferredDeliveryDate
     *
     * @return $this
     */
    public function setPreferredDeliveryDate($preferredDeliveryDate)
    {
        $this->preferredDeliveryDate = $preferredDeliveryDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPreferredDateChosen()
    {
        return $this->preferredDateChosen;
    }

    /**
     * @param bool $preferredDateChosen
     *
     * @return $this
     */
    public function setPreferredDateChosen($preferredDateChosen)
    {
        $this->preferredDateChosen = $preferredDateChosen;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
