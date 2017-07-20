<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changeShippingMethod StructType
 * @subpackage Structs
 */
class ChangeShippingMethod extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contract;
    /**
     * The identifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identifier;
    /**
     * The option
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $option;
    /**
     * The servicepointAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $servicepointAccountNumber;
    /**
     * The servicepointNotificationEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $servicepointNotificationEmail;
    /**
     * The servicepointNotificationMobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $servicepointNotificationMobile;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $price;
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
     * - fractionDigits: 2
     * - minInclusive: 0
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
     * - minInclusive: 0
     * @var float
     */
    public $orderWeight;
    /**
     * The assuredAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $assuredAmount;
    /**
     * The assuredAmountCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $assuredAmountCurrency;
    /**
     * The collo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $collo;
    /**
     * The packageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $packageCount;
    /**
     * The maxLabels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maxLabels;
    /**
     * The packagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $packagingType;
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
     * Constructor method for changeShippingMethod
     * @uses ChangeShippingMethod::setType()
     * @uses ChangeShippingMethod::setContract()
     * @uses ChangeShippingMethod::setIdentifier()
     * @uses ChangeShippingMethod::setOption()
     * @uses ChangeShippingMethod::setServicepointAccountNumber()
     * @uses ChangeShippingMethod::setServicepointNotificationEmail()
     * @uses ChangeShippingMethod::setServicepointNotificationMobile()
     * @uses ChangeShippingMethod::setPrice()
     * @uses ChangeShippingMethod::setShippingPaymentType()
     * @uses ChangeShippingMethod::setBillingAccountNumber()
     * @uses ChangeShippingMethod::setInvoiceNumber()
     * @uses ChangeShippingMethod::setPackagingWeight()
     * @uses ChangeShippingMethod::setCustomsValue()
     * @uses ChangeShippingMethod::setCustomsValueCurrency()
     * @uses ChangeShippingMethod::setDutiesPaymentType()
     * @uses ChangeShippingMethod::setDutiesAccountNumber()
     * @uses ChangeShippingMethod::setOrderWeight()
     * @uses ChangeShippingMethod::setAssuredAmount()
     * @uses ChangeShippingMethod::setAssuredAmountCurrency()
     * @uses ChangeShippingMethod::setCollo()
     * @uses ChangeShippingMethod::setPackageCount()
     * @uses ChangeShippingMethod::setMaxLabels()
     * @uses ChangeShippingMethod::setPackagingType()
     * @uses ChangeShippingMethod::setPreferredDeliveryDate()
     * @uses ChangeShippingMethod::setPreferredDateChosen()
     * @uses ChangeShippingMethod::setDescription()
     * @param string $type
     * @param string $contract
     * @param string $identifier
     * @param string $option
     * @param string $servicepointAccountNumber
     * @param string $servicepointNotificationEmail
     * @param string $servicepointNotificationMobile
     * @param float $price
     * @param string $shippingPaymentType
     * @param string $billingAccountNumber
     * @param string $invoiceNumber
     * @param float $packagingWeight
     * @param float $customsValue
     * @param string $customsValueCurrency
     * @param string $dutiesPaymentType
     * @param string $dutiesAccountNumber
     * @param float $orderWeight
     * @param int $assuredAmount
     * @param string $assuredAmountCurrency
     * @param int $collo
     * @param int $packageCount
     * @param int $maxLabels
     * @param string $packagingType
     * @param string $preferredDeliveryDate
     * @param bool $preferredDateChosen
     * @param string $description
     */
    public function __construct($type = null, $contract = null, $identifier = null, $option = null, $servicepointAccountNumber = null, $servicepointNotificationEmail = null, $servicepointNotificationMobile = null, $price = null, $shippingPaymentType = null, $billingAccountNumber = null, $invoiceNumber = null, $packagingWeight = null, $customsValue = null, $customsValueCurrency = 'EUR', $dutiesPaymentType = null, $dutiesAccountNumber = null, $orderWeight = null, $assuredAmount = null, $assuredAmountCurrency = 'EUR', $collo = null, $packageCount = null, $maxLabels = null, $packagingType = null, $preferredDeliveryDate = null, $preferredDateChosen = false, $description = null)
    {
        $this
            ->setType($type)
            ->setContract($contract)
            ->setIdentifier($identifier)
            ->setOption($option)
            ->setServicepointAccountNumber($servicepointAccountNumber)
            ->setServicepointNotificationEmail($servicepointNotificationEmail)
            ->setServicepointNotificationMobile($servicepointNotificationMobile)
            ->setPrice($price)
            ->setShippingPaymentType($shippingPaymentType)
            ->setBillingAccountNumber($billingAccountNumber)
            ->setInvoiceNumber($invoiceNumber)
            ->setPackagingWeight($packagingWeight)
            ->setCustomsValue($customsValue)
            ->setCustomsValueCurrency($customsValueCurrency)
            ->setDutiesPaymentType($dutiesPaymentType)
            ->setDutiesAccountNumber($dutiesAccountNumber)
            ->setOrderWeight($orderWeight)
            ->setAssuredAmount($assuredAmount)
            ->setAssuredAmountCurrency($assuredAmountCurrency)
            ->setCollo($collo)
            ->setPackageCount($packageCount)
            ->setMaxLabels($maxLabels)
            ->setPackagingType($packagingType)
            ->setPreferredDeliveryDate($preferredDeliveryDate)
            ->setPreferredDateChosen($preferredDateChosen)
            ->setDescription($description);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Etrias\PaazlConnector\EnumType\DeliveryTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DeliveryTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DeliveryTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Etrias\PaazlConnector\EnumType\DeliveryTypeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get contract value
     * @return string|null
     */
    public function getContract()
    {
        return $this->contract;
    }
    /**
     * Set contract value
     * @param string $contract
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setContract($contract = null)
    {
        // validation for constraint: string
        if (!is_null($contract) && !is_string($contract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contract)), __LINE__);
        }
        $this->contract = $contract;
        return $this;
    }
    /**
     * Get identifier value
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Get option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->option;
    }
    /**
     * Set option value
     * @param string $option
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setOption($option = null)
    {
        // validation for constraint: string
        if (!is_null($option) && !is_string($option)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option)), __LINE__);
        }
        $this->option = $option;
        return $this;
    }
    /**
     * Get servicepointAccountNumber value
     * @return string|null
     */
    public function getServicepointAccountNumber()
    {
        return $this->servicepointAccountNumber;
    }
    /**
     * Set servicepointAccountNumber value
     * @param string $servicepointAccountNumber
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setServicepointAccountNumber($servicepointAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($servicepointAccountNumber) && !is_string($servicepointAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicepointAccountNumber)), __LINE__);
        }
        $this->servicepointAccountNumber = $servicepointAccountNumber;
        return $this;
    }
    /**
     * Get servicepointNotificationEmail value
     * @return string|null
     */
    public function getServicepointNotificationEmail()
    {
        return $this->servicepointNotificationEmail;
    }
    /**
     * Set servicepointNotificationEmail value
     * @param string $servicepointNotificationEmail
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setServicepointNotificationEmail($servicepointNotificationEmail = null)
    {
        // validation for constraint: string
        if (!is_null($servicepointNotificationEmail) && !is_string($servicepointNotificationEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicepointNotificationEmail)), __LINE__);
        }
        $this->servicepointNotificationEmail = $servicepointNotificationEmail;
        return $this;
    }
    /**
     * Get servicepointNotificationMobile value
     * @return string|null
     */
    public function getServicepointNotificationMobile()
    {
        return $this->servicepointNotificationMobile;
    }
    /**
     * Set servicepointNotificationMobile value
     * @param string $servicepointNotificationMobile
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setServicepointNotificationMobile($servicepointNotificationMobile = null)
    {
        // validation for constraint: string
        if (!is_null($servicepointNotificationMobile) && !is_string($servicepointNotificationMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicepointNotificationMobile)), __LINE__);
        }
        $this->servicepointNotificationMobile = $servicepointNotificationMobile;
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setPrice($price = null)
    {
        $this->price = $price;
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setCustomsValue($customsValue = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($customsValue) && strlen(substr($customsValue, strpos($customsValue, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($customsValue, strpos($customsValue, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($customsValue < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $customsValue), __LINE__);
        }
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setOrderWeight($orderWeight = null)
    {
        // validation for constraint: minInclusive
        if ($orderWeight < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $orderWeight), __LINE__);
        }
        $this->orderWeight = $orderWeight;
        return $this;
    }
    /**
     * Get assuredAmount value
     * @return int|null
     */
    public function getAssuredAmount()
    {
        return $this->assuredAmount;
    }
    /**
     * Set assuredAmount value
     * @param int $assuredAmount
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setAssuredAmount($assuredAmount = null)
    {
        // validation for constraint: int
        if (!is_null($assuredAmount) && !is_numeric($assuredAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($assuredAmount)), __LINE__);
        }
        $this->assuredAmount = $assuredAmount;
        return $this;
    }
    /**
     * Get assuredAmountCurrency value
     * @return string|null
     */
    public function getAssuredAmountCurrency()
    {
        return $this->assuredAmountCurrency;
    }
    /**
     * Set assuredAmountCurrency value
     * @param string $assuredAmountCurrency
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setAssuredAmountCurrency($assuredAmountCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($assuredAmountCurrency) && strlen($assuredAmountCurrency) !== 3) || (is_array($assuredAmountCurrency) && count($assuredAmountCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($assuredAmountCurrency) && !preg_match('/[A-Z]{3}/', $assuredAmountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($assuredAmountCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($assuredAmountCurrency) && !is_string($assuredAmountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($assuredAmountCurrency)), __LINE__);
        }
        $this->assuredAmountCurrency = $assuredAmountCurrency;
        return $this;
    }
    /**
     * Get collo value
     * @return int|null
     */
    public function getCollo()
    {
        return $this->collo;
    }
    /**
     * Set collo value
     * @param int $collo
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setCollo($collo = null)
    {
        // validation for constraint: int
        if (!is_null($collo) && !is_numeric($collo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($collo)), __LINE__);
        }
        $this->collo = $collo;
        return $this;
    }
    /**
     * Get packageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->packageCount;
    }
    /**
     * Set packageCount value
     * @param int $packageCount
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->packageCount = $packageCount;
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingMethod
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
