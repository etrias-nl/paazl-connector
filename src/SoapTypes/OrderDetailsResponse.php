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

use Etrias\PaazlConnector\Result\PaazlResultInterface;

class OrderDetailsResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $webshopId = null;

    /**
     * @var string
     */
    protected $matrixCode = null;

    /**
     * @var \DateTime
     */
    protected $createDate = null;

    /**
     * @var string
     */
    protected $companyName = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $nameOther = null;

    /**
     * @var addressType
     */
    protected $shipToAddress = null;

    /**
     * @var string
     */
    protected $emailAddress = null;

    /**
     * @var string
     */
    protected $phoneNumber = null;

    /**
     * @var string
     */
    protected $senderName = null;

    /**
     * @var addressType
     */
    protected $senderAddress = null;

    /**
     * @var string
     */
    protected $returnName = null;

    /**
     * @var addressType
     */
    protected $returnAddress = null;

    /**
     * @var shippingOptionDetailsType
     */
    protected $shippingOption = null;

    /**
     * @var servicePointDetailsType
     */
    protected $servicePointDetails = null;

    /**
     * @var int
     */
    protected $numberOfArticles = null;

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
     * @var float
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
     * @var float
     */
    protected $orderWeight = null;

    /**
     * @var int
     */
    protected $maxLabels = null;

    /**
     * @var bool
     */
    protected $collo = null;

    /**
     * @var float
     */
    protected $codValue = null;

    /**
     * @var currencyCode
     */
    protected $codValueCurrency = null;

    /**
     * @var int
     */
    protected $insuredValue = null;

    /**
     * @var currencyCode
     */
    protected $insuredValueCurrency = null;

    /**
     * @var packagingTypeType
     */
    protected $packagingType = null;

    /**
     * @var \DateTime
     */
    protected $pickupDate = null;

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
     * @var string
     */
    protected $additionalInstruction = null;

    /**
     * @var shipperNotificationTypeType
     */
    protected $shipperNotificationType = null;

    /**
     * @var string
     */
    protected $shipperNotificationTarget = null;

    /**
     * @var shipperNotificationTypeType
     */
    protected $additionalShipperNotificationType = null;

    /**
     * @var string
     */
    protected $additionalShipperNotificationTarget = null;

    /**
     * @var time
     */
    protected $deliveryWindowStart = null;

    /**
     * @var time
     */
    protected $deliveryWindowEnd = null;

    /**
     * @var products
     */
    protected $products = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var string                      $webshopId
     * @var string                      $matrixCode
     * @var \DateTime                   $createDate
     * @var string                      $companyName
     * @var string                      $name
     * @var string                      $nameOther
     * @var addressType                 $shipToAddress
     * @var string                      $emailAddress
     * @var string                      $phoneNumber
     * @var string                      $senderName
     * @var addressType                 $senderAddress
     * @var string                      $returnName
     * @var addressType                 $returnAddress
     * @var shippingOptionDetailsType   $shippingOption
     * @var servicePointDetailsType     $servicePointDetails
     * @var int                         $numberOfArticles
     * @var shippingPaymentType         $shippingPaymentType
     * @var string                      $billingAccountNumber
     * @var string                      $invoiceNumber
     * @var nonNegativeDecimal          $packagingWeight
     * @var float                       $customsValue
     * @var currencyCode                $customsValueCurrency
     * @var dutiesPaymentType           $dutiesPaymentType
     * @var string                      $dutiesAccountNumber
     * @var float                       $orderWeight
     * @var int                         $maxLabels
     * @var bool                        $collo
     * @var float                       $codValue
     * @var currencyCode                $codValueCurrency
     * @var int                         $insuredValue
     * @var currencyCode                $insuredValueCurrency
     * @var packagingTypeType           $packagingType
     * @var \DateTime                   $pickupDate
     * @var \DateTime                   $preferredDeliveryDate
     * @var bool                        $preferredDateChosen
     * @var string                      $description
     * @var string                      $additionalInstruction
     * @var shipperNotificationTypeType $shipperNotificationType
     * @var string                      $shipperNotificationTarget
     * @var shipperNotificationTypeType $additionalShipperNotificationType
     * @var string                      $additionalShipperNotificationTarget
     * @var time                        $deliveryWindowStart
     * @var time                        $deliveryWindowEnd
     * @var products                    $products
     *
     * @param mixed $error
     * @param mixed $webshopId
     * @param mixed $matrixCode
     * @param mixed $createDate
     * @param mixed $companyName
     * @param mixed $name
     * @param mixed $nameOther
     * @param mixed $shipToAddress
     * @param mixed $emailAddress
     * @param mixed $phoneNumber
     * @param mixed $senderName
     * @param mixed $senderAddress
     * @param mixed $returnName
     * @param mixed $returnAddress
     * @param mixed $shippingOption
     * @param mixed $servicePointDetails
     * @param mixed $numberOfArticles
     * @param mixed $shippingPaymentType
     * @param mixed $billingAccountNumber
     * @param mixed $invoiceNumber
     * @param mixed $packagingWeight
     * @param mixed $customsValue
     * @param mixed $customsValueCurrency
     * @param mixed $dutiesPaymentType
     * @param mixed $dutiesAccountNumber
     * @param mixed $orderWeight
     * @param mixed $maxLabels
     * @param mixed $collo
     * @param mixed $codValue
     * @param mixed $codValueCurrency
     * @param mixed $insuredValue
     * @param mixed $insuredValueCurrency
     * @param mixed $packagingType
     * @param mixed $pickupDate
     * @param mixed $preferredDeliveryDate
     * @param mixed $preferredDateChosen
     * @param mixed $description
     * @param mixed $additionalInstruction
     * @param mixed $shipperNotificationType
     * @param mixed $shipperNotificationTarget
     * @param mixed $additionalShipperNotificationType
     * @param mixed $additionalShipperNotificationTarget
     * @param mixed $deliveryWindowStart
     * @param mixed $deliveryWindowEnd
     * @param mixed $products
     */
    public function __construct($error, $webshopId, $matrixCode, $createDate, $companyName, $name, $nameOther, $shipToAddress, $emailAddress, $phoneNumber, $senderName, $senderAddress, $returnName, $returnAddress, $shippingOption, $servicePointDetails, $numberOfArticles, $shippingPaymentType, $billingAccountNumber, $invoiceNumber, $packagingWeight, $customsValue, $customsValueCurrency, $dutiesPaymentType, $dutiesAccountNumber, $orderWeight, $maxLabels, $collo, $codValue, $codValueCurrency, $insuredValue, $insuredValueCurrency, $packagingType, $pickupDate, $preferredDeliveryDate, $preferredDateChosen, $description, $additionalInstruction, $shipperNotificationType, $shipperNotificationTarget, $additionalShipperNotificationType, $additionalShipperNotificationTarget, $deliveryWindowStart, $deliveryWindowEnd, $products)
    {
        $this->error = $error;
        $this->webshopId = $webshopId;
        $this->matrixCode = $matrixCode;
        $this->createDate = $createDate;
        $this->companyName = $companyName;
        $this->name = $name;
        $this->nameOther = $nameOther;
        $this->shipToAddress = $shipToAddress;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->senderName = $senderName;
        $this->senderAddress = $senderAddress;
        $this->returnName = $returnName;
        $this->returnAddress = $returnAddress;
        $this->shippingOption = $shippingOption;
        $this->servicePointDetails = $servicePointDetails;
        $this->numberOfArticles = $numberOfArticles;
        $this->shippingPaymentType = $shippingPaymentType;
        $this->billingAccountNumber = $billingAccountNumber;
        $this->invoiceNumber = $invoiceNumber;
        $this->packagingWeight = $packagingWeight;
        $this->customsValue = $customsValue;
        $this->customsValueCurrency = $customsValueCurrency;
        $this->dutiesPaymentType = $dutiesPaymentType;
        $this->dutiesAccountNumber = $dutiesAccountNumber;
        $this->orderWeight = $orderWeight;
        $this->maxLabels = $maxLabels;
        $this->collo = $collo;
        $this->codValue = $codValue;
        $this->codValueCurrency = $codValueCurrency;
        $this->insuredValue = $insuredValue;
        $this->insuredValueCurrency = $insuredValueCurrency;
        $this->packagingType = $packagingType;
        $this->pickupDate = $pickupDate;
        $this->preferredDeliveryDate = $preferredDeliveryDate;
        $this->preferredDateChosen = $preferredDateChosen;
        $this->description = $description;
        $this->additionalInstruction = $additionalInstruction;
        $this->shipperNotificationType = $shipperNotificationType;
        $this->shipperNotificationTarget = $shipperNotificationTarget;
        $this->additionalShipperNotificationType = $additionalShipperNotificationType;
        $this->additionalShipperNotificationTarget = $additionalShipperNotificationTarget;
        $this->deliveryWindowStart = $deliveryWindowStart;
        $this->deliveryWindowEnd = $deliveryWindowEnd;
        $this->products = $products;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param errorType $error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebshopId()
    {
        return $this->webshopId;
    }

    /**
     * @param string $webshopId
     *
     * @return $this
     */
    public function setWebshopId($webshopId)
    {
        $this->webshopId = $webshopId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatrixCode()
    {
        return $this->matrixCode;
    }

    /**
     * @param string $matrixCode
     *
     * @return $this
     */
    public function setMatrixCode($matrixCode)
    {
        $this->matrixCode = $matrixCode;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime $createDate
     *
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameOther()
    {
        return $this->nameOther;
    }

    /**
     * @param string $nameOther
     *
     * @return $this
     */
    public function setNameOther($nameOther)
    {
        $this->nameOther = $nameOther;

        return $this;
    }

    /**
     * @return addressType
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param addressType $shipToAddress
     *
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     *
     * @return $this
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * @return addressType
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @param addressType $senderAddress
     *
     * @return $this
     */
    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnName()
    {
        return $this->returnName;
    }

    /**
     * @param string $returnName
     *
     * @return $this
     */
    public function setReturnName($returnName)
    {
        $this->returnName = $returnName;

        return $this;
    }

    /**
     * @return addressType
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * @param addressType $returnAddress
     *
     * @return $this
     */
    public function setReturnAddress($returnAddress)
    {
        $this->returnAddress = $returnAddress;

        return $this;
    }

    /**
     * @return shippingOptionDetailsType
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param shippingOptionDetailsType $shippingOption
     *
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;

        return $this;
    }

    /**
     * @return servicePointDetailsType
     */
    public function getServicePointDetails()
    {
        return $this->servicePointDetails;
    }

    /**
     * @param servicePointDetailsType $servicePointDetails
     *
     * @return $this
     */
    public function setServicePointDetails($servicePointDetails)
    {
        $this->servicePointDetails = $servicePointDetails;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfArticles()
    {
        return $this->numberOfArticles;
    }

    /**
     * @param int $numberOfArticles
     *
     * @return $this
     */
    public function setNumberOfArticles($numberOfArticles)
    {
        $this->numberOfArticles = $numberOfArticles;

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
     * @return float
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }

    /**
     * @param float $customsValue
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
     * @return float
     */
    public function getOrderWeight()
    {
        return $this->orderWeight;
    }

    /**
     * @param float $orderWeight
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
     * @return bool
     */
    public function getCollo()
    {
        return $this->collo;
    }

    /**
     * @param bool $collo
     *
     * @return $this
     */
    public function setCollo($collo)
    {
        $this->collo = $collo;

        return $this;
    }

    /**
     * @return float
     */
    public function getCodValue()
    {
        return $this->codValue;
    }

    /**
     * @param float $codValue
     *
     * @return $this
     */
    public function setCodValue($codValue)
    {
        $this->codValue = $codValue;

        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getCodValueCurrency()
    {
        return $this->codValueCurrency;
    }

    /**
     * @param currencyCode $codValueCurrency
     *
     * @return $this
     */
    public function setCodValueCurrency($codValueCurrency)
    {
        $this->codValueCurrency = $codValueCurrency;

        return $this;
    }

    /**
     * @return int
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    /**
     * @param int $insuredValue
     *
     * @return $this
     */
    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;

        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getInsuredValueCurrency()
    {
        return $this->insuredValueCurrency;
    }

    /**
     * @param currencyCode $insuredValueCurrency
     *
     * @return $this
     */
    public function setInsuredValueCurrency($insuredValueCurrency)
    {
        $this->insuredValueCurrency = $insuredValueCurrency;

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
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param \DateTime $pickupDate
     *
     * @return $this
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;

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

    /**
     * @return string
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }

    /**
     * @param string $additionalInstruction
     *
     * @return $this
     */
    public function setAdditionalInstruction($additionalInstruction)
    {
        $this->additionalInstruction = $additionalInstruction;

        return $this;
    }

    /**
     * @return shipperNotificationTypeType
     */
    public function getShipperNotificationType()
    {
        return $this->shipperNotificationType;
    }

    /**
     * @param shipperNotificationTypeType $shipperNotificationType
     *
     * @return $this
     */
    public function setShipperNotificationType($shipperNotificationType)
    {
        $this->shipperNotificationType = $shipperNotificationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperNotificationTarget()
    {
        return $this->shipperNotificationTarget;
    }

    /**
     * @param string $shipperNotificationTarget
     *
     * @return $this
     */
    public function setShipperNotificationTarget($shipperNotificationTarget)
    {
        $this->shipperNotificationTarget = $shipperNotificationTarget;

        return $this;
    }

    /**
     * @return shipperNotificationTypeType
     */
    public function getAdditionalShipperNotificationType()
    {
        return $this->additionalShipperNotificationType;
    }

    /**
     * @param shipperNotificationTypeType $additionalShipperNotificationType
     *
     * @return $this
     */
    public function setAdditionalShipperNotificationType($additionalShipperNotificationType)
    {
        $this->additionalShipperNotificationType = $additionalShipperNotificationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalShipperNotificationTarget()
    {
        return $this->additionalShipperNotificationTarget;
    }

    /**
     * @param string $additionalShipperNotificationTarget
     *
     * @return $this
     */
    public function setAdditionalShipperNotificationTarget($additionalShipperNotificationTarget)
    {
        $this->additionalShipperNotificationTarget = $additionalShipperNotificationTarget;

        return $this;
    }

    /**
     * @return time
     */
    public function getDeliveryWindowStart()
    {
        return $this->deliveryWindowStart;
    }

    /**
     * @param time $deliveryWindowStart
     *
     * @return $this
     */
    public function setDeliveryWindowStart($deliveryWindowStart)
    {
        $this->deliveryWindowStart = $deliveryWindowStart;

        return $this;
    }

    /**
     * @return time
     */
    public function getDeliveryWindowEnd()
    {
        return $this->deliveryWindowEnd;
    }

    /**
     * @param time $deliveryWindowEnd
     *
     * @return $this
     */
    public function setDeliveryWindowEnd($deliveryWindowEnd)
    {
        $this->deliveryWindowEnd = $deliveryWindowEnd;

        return $this;
    }

    /**
     * @return products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param products $products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }
}
