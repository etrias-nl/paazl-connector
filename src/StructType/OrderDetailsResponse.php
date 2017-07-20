<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderDetailsResponse StructType
 * @subpackage Structs
 */
class OrderDetailsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The webshopId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $webshopId;
    /**
     * The matrixCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $matrixCode;
    /**
     * The createDate
     * @var string
     */
    public $createDate;
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $companyName;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The nameOther
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nameOther;
    /**
     * The shipToAddress
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $shipToAddress;
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $emailAddress;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * The senderName
     * @var string
     */
    public $senderName;
    /**
     * The senderAddress
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $senderAddress;
    /**
     * The returnName
     * @var string
     */
    public $returnName;
    /**
     * The returnAddress
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $returnAddress;
    /**
     * The shippingOption
     * @var \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType
     */
    public $shippingOption;
    /**
     * The servicePointDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointDetailsType
     */
    public $servicePointDetails;
    /**
     * The numberOfArticles
     * @var int
     */
    public $numberOfArticles;
    /**
     * The shippingPaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingPaymentType;
    /**
     * The billingAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $billingAccountNumber;
    /**
     * The invoiceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $invoiceNumber;
    /**
     * The packagingWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var float
     */
    public $packagingWeight;
    /**
     * The customsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $customsValue;
    /**
     * The customsValueCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $customsValueCurrency;
    /**
     * The dutiesPaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dutiesPaymentType;
    /**
     * The dutiesAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dutiesAccountNumber;
    /**
     * The orderWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $orderWeight;
    /**
     * The maxLabels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maxLabels;
    /**
     * The collo
     * @var bool
     */
    public $collo;
    /**
     * The codValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $codValue;
    /**
     * The codValueCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $codValueCurrency;
    /**
     * The insuredValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $insuredValue;
    /**
     * The insuredValueCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $insuredValueCurrency;
    /**
     * The packagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $packagingType;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupDate;
    /**
     * The preferredDeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $preferredDeliveryDate;
    /**
     * The preferredDateChosen
     * Meta informations extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool
     */
    public $preferredDateChosen;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The additionalInstruction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $additionalInstruction;
    /**
     * The shipperNotificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperNotificationType;
    /**
     * The shipperNotificationTarget
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperNotificationTarget;
    /**
     * The additionalShipperNotificationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $additionalShipperNotificationType;
    /**
     * The additionalShipperNotificationTarget
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $additionalShipperNotificationTarget;
    /**
     * The deliveryWindowStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $deliveryWindowStart;
    /**
     * The deliveryWindowEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $deliveryWindowEnd;
    /**
     * The products
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Products
     */
    public $products;
    /**
     * Constructor method for orderDetailsResponse
     * @uses OrderDetailsResponse::setError()
     * @uses OrderDetailsResponse::setWebshopId()
     * @uses OrderDetailsResponse::setMatrixCode()
     * @uses OrderDetailsResponse::setCreateDate()
     * @uses OrderDetailsResponse::setCompanyName()
     * @uses OrderDetailsResponse::setName()
     * @uses OrderDetailsResponse::setNameOther()
     * @uses OrderDetailsResponse::setShipToAddress()
     * @uses OrderDetailsResponse::setEmailAddress()
     * @uses OrderDetailsResponse::setPhoneNumber()
     * @uses OrderDetailsResponse::setSenderName()
     * @uses OrderDetailsResponse::setSenderAddress()
     * @uses OrderDetailsResponse::setReturnName()
     * @uses OrderDetailsResponse::setReturnAddress()
     * @uses OrderDetailsResponse::setShippingOption()
     * @uses OrderDetailsResponse::setServicePointDetails()
     * @uses OrderDetailsResponse::setNumberOfArticles()
     * @uses OrderDetailsResponse::setShippingPaymentType()
     * @uses OrderDetailsResponse::setBillingAccountNumber()
     * @uses OrderDetailsResponse::setInvoiceNumber()
     * @uses OrderDetailsResponse::setPackagingWeight()
     * @uses OrderDetailsResponse::setCustomsValue()
     * @uses OrderDetailsResponse::setCustomsValueCurrency()
     * @uses OrderDetailsResponse::setDutiesPaymentType()
     * @uses OrderDetailsResponse::setDutiesAccountNumber()
     * @uses OrderDetailsResponse::setOrderWeight()
     * @uses OrderDetailsResponse::setMaxLabels()
     * @uses OrderDetailsResponse::setCollo()
     * @uses OrderDetailsResponse::setCodValue()
     * @uses OrderDetailsResponse::setCodValueCurrency()
     * @uses OrderDetailsResponse::setInsuredValue()
     * @uses OrderDetailsResponse::setInsuredValueCurrency()
     * @uses OrderDetailsResponse::setPackagingType()
     * @uses OrderDetailsResponse::setPickupDate()
     * @uses OrderDetailsResponse::setPreferredDeliveryDate()
     * @uses OrderDetailsResponse::setPreferredDateChosen()
     * @uses OrderDetailsResponse::setDescription()
     * @uses OrderDetailsResponse::setAdditionalInstruction()
     * @uses OrderDetailsResponse::setShipperNotificationType()
     * @uses OrderDetailsResponse::setShipperNotificationTarget()
     * @uses OrderDetailsResponse::setAdditionalShipperNotificationType()
     * @uses OrderDetailsResponse::setAdditionalShipperNotificationTarget()
     * @uses OrderDetailsResponse::setDeliveryWindowStart()
     * @uses OrderDetailsResponse::setDeliveryWindowEnd()
     * @uses OrderDetailsResponse::setProducts()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $webshopId
     * @param string $matrixCode
     * @param string $createDate
     * @param string $companyName
     * @param string $name
     * @param string $nameOther
     * @param \Etrias\PaazlConnector\StructType\AddressType $shipToAddress
     * @param string $emailAddress
     * @param string $phoneNumber
     * @param string $senderName
     * @param \Etrias\PaazlConnector\StructType\AddressType $senderAddress
     * @param string $returnName
     * @param \Etrias\PaazlConnector\StructType\AddressType $returnAddress
     * @param \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType $shippingOption
     * @param \Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails
     * @param int $numberOfArticles
     * @param string $shippingPaymentType
     * @param string $billingAccountNumber
     * @param string $invoiceNumber
     * @param float $packagingWeight
     * @param float $customsValue
     * @param string $customsValueCurrency
     * @param string $dutiesPaymentType
     * @param string $dutiesAccountNumber
     * @param float $orderWeight
     * @param int $maxLabels
     * @param bool $collo
     * @param float $codValue
     * @param string $codValueCurrency
     * @param int $insuredValue
     * @param string $insuredValueCurrency
     * @param string $packagingType
     * @param string $pickupDate
     * @param string $preferredDeliveryDate
     * @param bool $preferredDateChosen
     * @param string $description
     * @param string $additionalInstruction
     * @param string $shipperNotificationType
     * @param string $shipperNotificationTarget
     * @param string $additionalShipperNotificationType
     * @param string $additionalShipperNotificationTarget
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowStart
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd
     * @param \Etrias\PaazlConnector\StructType\Products $products
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $webshopId = null, $matrixCode = null, $createDate = null, $companyName = null, $name = null, $nameOther = null, \Etrias\PaazlConnector\StructType\AddressType $shipToAddress = null, $emailAddress = null, $phoneNumber = null, $senderName = null, \Etrias\PaazlConnector\StructType\AddressType $senderAddress = null, $returnName = null, \Etrias\PaazlConnector\StructType\AddressType $returnAddress = null, \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType $shippingOption = null, \Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails = null, $numberOfArticles = null, $shippingPaymentType = null, $billingAccountNumber = null, $invoiceNumber = null, $packagingWeight = null, $customsValue = null, $customsValueCurrency = 'EUR', $dutiesPaymentType = null, $dutiesAccountNumber = null, $orderWeight = null, $maxLabels = null, $collo = null, $codValue = null, $codValueCurrency = 'EUR', $insuredValue = null, $insuredValueCurrency = 'EUR', $packagingType = null, $pickupDate = null, $preferredDeliveryDate = null, $preferredDateChosen = false, $description = null, $additionalInstruction = null, $shipperNotificationType = null, $shipperNotificationTarget = null, $additionalShipperNotificationType = null, $additionalShipperNotificationTarget = null, \Etrias\PaazlConnector\StructType\Time $deliveryWindowStart = null, \Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd = null, \Etrias\PaazlConnector\StructType\Products $products = null)
    {
        $this
            ->setError($error)
            ->setWebshopId($webshopId)
            ->setMatrixCode($matrixCode)
            ->setCreateDate($createDate)
            ->setCompanyName($companyName)
            ->setName($name)
            ->setNameOther($nameOther)
            ->setShipToAddress($shipToAddress)
            ->setEmailAddress($emailAddress)
            ->setPhoneNumber($phoneNumber)
            ->setSenderName($senderName)
            ->setSenderAddress($senderAddress)
            ->setReturnName($returnName)
            ->setReturnAddress($returnAddress)
            ->setShippingOption($shippingOption)
            ->setServicePointDetails($servicePointDetails)
            ->setNumberOfArticles($numberOfArticles)
            ->setShippingPaymentType($shippingPaymentType)
            ->setBillingAccountNumber($billingAccountNumber)
            ->setInvoiceNumber($invoiceNumber)
            ->setPackagingWeight($packagingWeight)
            ->setCustomsValue($customsValue)
            ->setCustomsValueCurrency($customsValueCurrency)
            ->setDutiesPaymentType($dutiesPaymentType)
            ->setDutiesAccountNumber($dutiesAccountNumber)
            ->setOrderWeight($orderWeight)
            ->setMaxLabels($maxLabels)
            ->setCollo($collo)
            ->setCodValue($codValue)
            ->setCodValueCurrency($codValueCurrency)
            ->setInsuredValue($insuredValue)
            ->setInsuredValueCurrency($insuredValueCurrency)
            ->setPackagingType($packagingType)
            ->setPickupDate($pickupDate)
            ->setPreferredDeliveryDate($preferredDeliveryDate)
            ->setPreferredDateChosen($preferredDateChosen)
            ->setDescription($description)
            ->setAdditionalInstruction($additionalInstruction)
            ->setShipperNotificationType($shipperNotificationType)
            ->setShipperNotificationTarget($shipperNotificationTarget)
            ->setAdditionalShipperNotificationType($additionalShipperNotificationType)
            ->setAdditionalShipperNotificationTarget($additionalShipperNotificationTarget)
            ->setDeliveryWindowStart($deliveryWindowStart)
            ->setDeliveryWindowEnd($deliveryWindowEnd)
            ->setProducts($products);
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
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get webshopId value
     * @return string|null
     */
    public function getWebshopId()
    {
        return $this->webshopId;
    }
    /**
     * Set webshopId value
     * @param string $webshopId
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setWebshopId($webshopId = null)
    {
        // validation for constraint: string
        if (!is_null($webshopId) && !is_string($webshopId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webshopId)), __LINE__);
        }
        $this->webshopId = $webshopId;
        return $this;
    }
    /**
     * Get matrixCode value
     * @return string|null
     */
    public function getMatrixCode()
    {
        return $this->matrixCode;
    }
    /**
     * Set matrixCode value
     * @param string $matrixCode
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setMatrixCode($matrixCode = null)
    {
        // validation for constraint: string
        if (!is_null($matrixCode) && !is_string($matrixCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matrixCode)), __LINE__);
        }
        $this->matrixCode = $matrixCode;
        return $this;
    }
    /**
     * Get createDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
    /**
     * Set createDate value
     * @param string $createDate
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->createDate = $createDate;
        return $this;
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get nameOther value
     * @return string|null
     */
    public function getNameOther()
    {
        return $this->nameOther;
    }
    /**
     * Set nameOther value
     * @param string $nameOther
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setNameOther($nameOther = null)
    {
        // validation for constraint: string
        if (!is_null($nameOther) && !is_string($nameOther)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameOther)), __LINE__);
        }
        $this->nameOther = $nameOther;
        return $this;
    }
    /**
     * Get shipToAddress value
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }
    /**
     * Set shipToAddress value
     * @param \Etrias\PaazlConnector\StructType\AddressType $shipToAddress
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setShipToAddress(\Etrias\PaazlConnector\StructType\AddressType $shipToAddress = null)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $emailAddress
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get senderName value
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->senderName;
    }
    /**
     * Set senderName value
     * @param string $senderName
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setSenderName($senderName = null)
    {
        // validation for constraint: string
        if (!is_null($senderName) && !is_string($senderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderName)), __LINE__);
        }
        $this->senderName = $senderName;
        return $this;
    }
    /**
     * Get senderAddress value
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }
    /**
     * Set senderAddress value
     * @param \Etrias\PaazlConnector\StructType\AddressType $senderAddress
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setSenderAddress(\Etrias\PaazlConnector\StructType\AddressType $senderAddress = null)
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }
    /**
     * Get returnName value
     * @return string|null
     */
    public function getReturnName()
    {
        return $this->returnName;
    }
    /**
     * Set returnName value
     * @param string $returnName
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setReturnName($returnName = null)
    {
        // validation for constraint: string
        if (!is_null($returnName) && !is_string($returnName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnName)), __LINE__);
        }
        $this->returnName = $returnName;
        return $this;
    }
    /**
     * Get returnAddress value
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }
    /**
     * Set returnAddress value
     * @param \Etrias\PaazlConnector\StructType\AddressType $returnAddress
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setReturnAddress(\Etrias\PaazlConnector\StructType\AddressType $returnAddress = null)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }
    /**
     * Get shippingOption value
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @param \Etrias\PaazlConnector\StructType\ShippingOptionDetailsType $shippingOption
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setShippingOption(\Etrias\PaazlConnector\StructType\ShippingOptionDetailsType $shippingOption = null)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Get servicePointDetails value
     * @return \Etrias\PaazlConnector\StructType\ServicePointDetailsType|null
     */
    public function getServicePointDetails()
    {
        return $this->servicePointDetails;
    }
    /**
     * Set servicePointDetails value
     * @param \Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setServicePointDetails(\Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails = null)
    {
        $this->servicePointDetails = $servicePointDetails;
        return $this;
    }
    /**
     * Get numberOfArticles value
     * @return int|null
     */
    public function getNumberOfArticles()
    {
        return $this->numberOfArticles;
    }
    /**
     * Set numberOfArticles value
     * @param int $numberOfArticles
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setNumberOfArticles($numberOfArticles = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfArticles) && !is_numeric($numberOfArticles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfArticles)), __LINE__);
        }
        $this->numberOfArticles = $numberOfArticles;
        return $this;
    }
    /**
     * Get shippingPaymentType value
     * @return string|null
     */
    public function getShippingPaymentType()
    {
        return $this->shippingPaymentType;
    }
    /**
     * Set shippingPaymentType value
     * @uses \Etrias\PaazlConnector\EnumType\ShippingPaymentType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\ShippingPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingPaymentType
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setShippingPaymentType($shippingPaymentType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\ShippingPaymentType::valueIsValid($shippingPaymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingPaymentType, implode(', ', \Etrias\PaazlConnector\EnumType\ShippingPaymentType::getValidValues())), __LINE__);
        }
        $this->shippingPaymentType = $shippingPaymentType;
        return $this;
    }
    /**
     * Get billingAccountNumber value
     * @return string|null
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }
    /**
     * Set billingAccountNumber value
     * @param string $billingAccountNumber
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setBillingAccountNumber($billingAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccountNumber) && !is_string($billingAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccountNumber)), __LINE__);
        }
        $this->billingAccountNumber = $billingAccountNumber;
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param string $invoiceNumber
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get packagingWeight value
     * @return float|null
     */
    public function getPackagingWeight()
    {
        return $this->packagingWeight;
    }
    /**
     * Set packagingWeight value
     * @param float $packagingWeight
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setPackagingWeight($packagingWeight = null)
    {
        // validation for constraint: minInclusive
        if ($packagingWeight < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $packagingWeight), __LINE__);
        }
        $this->packagingWeight = $packagingWeight;
        return $this;
    }
    /**
     * Get customsValue value
     * @return float|null
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param float $customsValue
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCustomsValue($customsValue = null)
    {
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * Get customsValueCurrency value
     * @return string|null
     */
    public function getCustomsValueCurrency()
    {
        return $this->customsValueCurrency;
    }
    /**
     * Set customsValueCurrency value
     * @param string $customsValueCurrency
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCustomsValueCurrency($customsValueCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($customsValueCurrency) && strlen($customsValueCurrency) !== 3) || (is_array($customsValueCurrency) && count($customsValueCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($customsValueCurrency) && !preg_match('/[A-Z]{3}/', $customsValueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($customsValueCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($customsValueCurrency) && !is_string($customsValueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customsValueCurrency)), __LINE__);
        }
        $this->customsValueCurrency = $customsValueCurrency;
        return $this;
    }
    /**
     * Get dutiesPaymentType value
     * @return string|null
     */
    public function getDutiesPaymentType()
    {
        return $this->dutiesPaymentType;
    }
    /**
     * Set dutiesPaymentType value
     * @uses \Etrias\PaazlConnector\EnumType\DutiesPaymentType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DutiesPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dutiesPaymentType
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setDutiesPaymentType($dutiesPaymentType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DutiesPaymentType::valueIsValid($dutiesPaymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dutiesPaymentType, implode(', ', \Etrias\PaazlConnector\EnumType\DutiesPaymentType::getValidValues())), __LINE__);
        }
        $this->dutiesPaymentType = $dutiesPaymentType;
        return $this;
    }
    /**
     * Get dutiesAccountNumber value
     * @return string|null
     */
    public function getDutiesAccountNumber()
    {
        return $this->dutiesAccountNumber;
    }
    /**
     * Set dutiesAccountNumber value
     * @param string $dutiesAccountNumber
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setDutiesAccountNumber($dutiesAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($dutiesAccountNumber) && !is_string($dutiesAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dutiesAccountNumber)), __LINE__);
        }
        $this->dutiesAccountNumber = $dutiesAccountNumber;
        return $this;
    }
    /**
     * Get orderWeight value
     * @return float|null
     */
    public function getOrderWeight()
    {
        return $this->orderWeight;
    }
    /**
     * Set orderWeight value
     * @param float $orderWeight
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setOrderWeight($orderWeight = null)
    {
        $this->orderWeight = $orderWeight;
        return $this;
    }
    /**
     * Get maxLabels value
     * @return int|null
     */
    public function getMaxLabels()
    {
        return $this->maxLabels;
    }
    /**
     * Set maxLabels value
     * @param int $maxLabels
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setMaxLabels($maxLabels = null)
    {
        // validation for constraint: int
        if (!is_null($maxLabels) && !is_numeric($maxLabels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxLabels)), __LINE__);
        }
        $this->maxLabels = $maxLabels;
        return $this;
    }
    /**
     * Get collo value
     * @return bool|null
     */
    public function getCollo()
    {
        return $this->collo;
    }
    /**
     * Set collo value
     * @param bool $collo
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCollo($collo = null)
    {
        // validation for constraint: boolean
        if (!is_null($collo) && !is_bool($collo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($collo)), __LINE__);
        }
        $this->collo = $collo;
        return $this;
    }
    /**
     * Get codValue value
     * @return float|null
     */
    public function getCodValue()
    {
        return $this->codValue;
    }
    /**
     * Set codValue value
     * @param float $codValue
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCodValue($codValue = null)
    {
        $this->codValue = $codValue;
        return $this;
    }
    /**
     * Get codValueCurrency value
     * @return string|null
     */
    public function getCodValueCurrency()
    {
        return $this->codValueCurrency;
    }
    /**
     * Set codValueCurrency value
     * @param string $codValueCurrency
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setCodValueCurrency($codValueCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($codValueCurrency) && strlen($codValueCurrency) !== 3) || (is_array($codValueCurrency) && count($codValueCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($codValueCurrency) && !preg_match('/[A-Z]{3}/', $codValueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($codValueCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($codValueCurrency) && !is_string($codValueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codValueCurrency)), __LINE__);
        }
        $this->codValueCurrency = $codValueCurrency;
        return $this;
    }
    /**
     * Get insuredValue value
     * @return int|null
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }
    /**
     * Set insuredValue value
     * @param int $insuredValue
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setInsuredValue($insuredValue = null)
    {
        // validation for constraint: int
        if (!is_null($insuredValue) && !is_numeric($insuredValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuredValue)), __LINE__);
        }
        $this->insuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get insuredValueCurrency value
     * @return string|null
     */
    public function getInsuredValueCurrency()
    {
        return $this->insuredValueCurrency;
    }
    /**
     * Set insuredValueCurrency value
     * @param string $insuredValueCurrency
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setInsuredValueCurrency($insuredValueCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($insuredValueCurrency) && strlen($insuredValueCurrency) !== 3) || (is_array($insuredValueCurrency) && count($insuredValueCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($insuredValueCurrency) && !preg_match('/[A-Z]{3}/', $insuredValueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($insuredValueCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($insuredValueCurrency) && !is_string($insuredValueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuredValueCurrency)), __LINE__);
        }
        $this->insuredValueCurrency = $insuredValueCurrency;
        return $this;
    }
    /**
     * Get packagingType value
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->packagingType;
    }
    /**
     * Set packagingType value
     * @uses \Etrias\PaazlConnector\EnumType\PackagingTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PackagingTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packagingType
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PackagingTypeType::valueIsValid($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packagingType, implode(', ', \Etrias\PaazlConnector\EnumType\PackagingTypeType::getValidValues())), __LINE__);
        }
        $this->packagingType = $packagingType;
        return $this;
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Get preferredDeliveryDate value
     * @return string|null
     */
    public function getPreferredDeliveryDate()
    {
        return $this->preferredDeliveryDate;
    }
    /**
     * Set preferredDeliveryDate value
     * @param string $preferredDeliveryDate
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setPreferredDeliveryDate($preferredDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($preferredDeliveryDate) && !is_string($preferredDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredDeliveryDate)), __LINE__);
        }
        $this->preferredDeliveryDate = $preferredDeliveryDate;
        return $this;
    }
    /**
     * Get preferredDateChosen value
     * @return bool|null
     */
    public function getPreferredDateChosen()
    {
        return $this->preferredDateChosen;
    }
    /**
     * Set preferredDateChosen value
     * @param bool $preferredDateChosen
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setPreferredDateChosen($preferredDateChosen = false)
    {
        // validation for constraint: boolean
        if (!is_null($preferredDateChosen) && !is_bool($preferredDateChosen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($preferredDateChosen)), __LINE__);
        }
        $this->preferredDateChosen = $preferredDateChosen;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get additionalInstruction value
     * @return string|null
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }
    /**
     * Set additionalInstruction value
     * @param string $additionalInstruction
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setAdditionalInstruction($additionalInstruction = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInstruction) && !is_string($additionalInstruction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalInstruction)), __LINE__);
        }
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }
    /**
     * Get shipperNotificationType value
     * @return string|null
     */
    public function getShipperNotificationType()
    {
        return $this->shipperNotificationType;
    }
    /**
     * Set shipperNotificationType value
     * @uses \Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipperNotificationType
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setShipperNotificationType($shipperNotificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::valueIsValid($shipperNotificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipperNotificationType, implode(', ', \Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::getValidValues())), __LINE__);
        }
        $this->shipperNotificationType = $shipperNotificationType;
        return $this;
    }
    /**
     * Get shipperNotificationTarget value
     * @return string|null
     */
    public function getShipperNotificationTarget()
    {
        return $this->shipperNotificationTarget;
    }
    /**
     * Set shipperNotificationTarget value
     * @param string $shipperNotificationTarget
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setShipperNotificationTarget($shipperNotificationTarget = null)
    {
        // validation for constraint: string
        if (!is_null($shipperNotificationTarget) && !is_string($shipperNotificationTarget)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipperNotificationTarget)), __LINE__);
        }
        $this->shipperNotificationTarget = $shipperNotificationTarget;
        return $this;
    }
    /**
     * Get additionalShipperNotificationType value
     * @return string|null
     */
    public function getAdditionalShipperNotificationType()
    {
        return $this->additionalShipperNotificationType;
    }
    /**
     * Set additionalShipperNotificationType value
     * @uses \Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $additionalShipperNotificationType
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setAdditionalShipperNotificationType($additionalShipperNotificationType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::valueIsValid($additionalShipperNotificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $additionalShipperNotificationType, implode(', ', \Etrias\PaazlConnector\EnumType\ShipperNotificationTypeType::getValidValues())), __LINE__);
        }
        $this->additionalShipperNotificationType = $additionalShipperNotificationType;
        return $this;
    }
    /**
     * Get additionalShipperNotificationTarget value
     * @return string|null
     */
    public function getAdditionalShipperNotificationTarget()
    {
        return $this->additionalShipperNotificationTarget;
    }
    /**
     * Set additionalShipperNotificationTarget value
     * @param string $additionalShipperNotificationTarget
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setAdditionalShipperNotificationTarget($additionalShipperNotificationTarget = null)
    {
        // validation for constraint: string
        if (!is_null($additionalShipperNotificationTarget) && !is_string($additionalShipperNotificationTarget)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalShipperNotificationTarget)), __LINE__);
        }
        $this->additionalShipperNotificationTarget = $additionalShipperNotificationTarget;
        return $this;
    }
    /**
     * Get deliveryWindowStart value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getDeliveryWindowStart()
    {
        return $this->deliveryWindowStart;
    }
    /**
     * Set deliveryWindowStart value
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowStart
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setDeliveryWindowStart(\Etrias\PaazlConnector\StructType\Time $deliveryWindowStart = null)
    {
        $this->deliveryWindowStart = $deliveryWindowStart;
        return $this;
    }
    /**
     * Get deliveryWindowEnd value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getDeliveryWindowEnd()
    {
        return $this->deliveryWindowEnd;
    }
    /**
     * Set deliveryWindowEnd value
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setDeliveryWindowEnd(\Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd = null)
    {
        $this->deliveryWindowEnd = $deliveryWindowEnd;
        return $this;
    }
    /**
     * Get products value
     * @return \Etrias\PaazlConnector\StructType\Products|null
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * Set products value
     * @param \Etrias\PaazlConnector\StructType\Products $products
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
     */
    public function setProducts(\Etrias\PaazlConnector\StructType\Products $products = null)
    {
        $this->products = $products;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse
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
