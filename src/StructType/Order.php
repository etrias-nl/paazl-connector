<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for order StructType
 * @subpackage Structs
 */
class Order extends AbstractStructBase
{
    /**
     * The createDate
     * @var string
     */
    public $createDate;
    /**
     * The lastModificationDate
     * @var string
     */
    public $lastModificationDate;
    /**
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The shippingOption
     * @var string
     */
    public $shippingOption;
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
     * The servicePointDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointDetailsType
     */
    public $servicePointDetails;
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
     * The expectedDeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expectedDeliveryDate;
    /**
     * The expectedDeliveryTimeFrame
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\TimeRangeType
     */
    public $expectedDeliveryTimeFrame;
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
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Label[]
     */
    public $label;
    /**
     * Constructor method for order
     * @uses Order::setCreateDate()
     * @uses Order::setLastModificationDate()
     * @uses Order::setOrderReference()
     * @uses Order::setStatus()
     * @uses Order::setDistributor()
     * @uses Order::setShippingOption()
     * @uses Order::setCompanyName()
     * @uses Order::setName()
     * @uses Order::setNameOther()
     * @uses Order::setShipToAddress()
     * @uses Order::setServicePointDetails()
     * @uses Order::setEmailAddress()
     * @uses Order::setPhoneNumber()
     * @uses Order::setExpectedDeliveryDate()
     * @uses Order::setExpectedDeliveryTimeFrame()
     * @uses Order::setPreferredDeliveryDate()
     * @uses Order::setPreferredDateChosen()
     * @uses Order::setLabel()
     * @param string $createDate
     * @param string $lastModificationDate
     * @param string $orderReference
     * @param string $status
     * @param string $distributor
     * @param string $shippingOption
     * @param string $companyName
     * @param string $name
     * @param string $nameOther
     * @param \Etrias\PaazlConnector\StructType\AddressType $shipToAddress
     * @param \Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails
     * @param string $emailAddress
     * @param string $phoneNumber
     * @param string $expectedDeliveryDate
     * @param \Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame
     * @param string $preferredDeliveryDate
     * @param bool $preferredDateChosen
     * @param \Etrias\PaazlConnector\StructType\Label[] $label
     */
    public function __construct($createDate = null, $lastModificationDate = null, $orderReference = null, $status = null, $distributor = null, $shippingOption = null, $companyName = null, $name = null, $nameOther = null, \Etrias\PaazlConnector\StructType\AddressType $shipToAddress = null, \Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails = null, $emailAddress = null, $phoneNumber = null, $expectedDeliveryDate = null, \Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame = null, $preferredDeliveryDate = null, $preferredDateChosen = false, array $label = array())
    {
        $this
            ->setCreateDate($createDate)
            ->setLastModificationDate($lastModificationDate)
            ->setOrderReference($orderReference)
            ->setStatus($status)
            ->setDistributor($distributor)
            ->setShippingOption($shippingOption)
            ->setCompanyName($companyName)
            ->setName($name)
            ->setNameOther($nameOther)
            ->setShipToAddress($shipToAddress)
            ->setServicePointDetails($servicePointDetails)
            ->setEmailAddress($emailAddress)
            ->setPhoneNumber($phoneNumber)
            ->setExpectedDeliveryDate($expectedDeliveryDate)
            ->setExpectedDeliveryTimeFrame($expectedDeliveryTimeFrame)
            ->setPreferredDeliveryDate($preferredDeliveryDate)
            ->setPreferredDateChosen($preferredDateChosen)
            ->setLabel($label);
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * Get lastModificationDate value
     * @return string|null
     */
    public function getLastModificationDate()
    {
        return $this->lastModificationDate;
    }
    /**
     * Set lastModificationDate value
     * @param string $lastModificationDate
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setLastModificationDate($lastModificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastModificationDate) && !is_string($lastModificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModificationDate)), __LINE__);
        }
        $this->lastModificationDate = $lastModificationDate;
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Etrias\PaazlConnector\EnumType\OrderStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\OrderStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\OrderStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\OrderStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setShipToAddress(\Etrias\PaazlConnector\StructType\AddressType $shipToAddress = null)
    {
        $this->shipToAddress = $shipToAddress;
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
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setServicePointDetails(\Etrias\PaazlConnector\StructType\ServicePointDetailsType $servicePointDetails = null)
    {
        $this->servicePointDetails = $servicePointDetails;
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * Get expectedDeliveryDate value
     * @return string|null
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * Set expectedDeliveryDate value
     * @param string $expectedDeliveryDate
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedDeliveryDate) && !is_string($expectedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedDeliveryDate)), __LINE__);
        }
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * Get expectedDeliveryTimeFrame value
     * @return \Etrias\PaazlConnector\StructType\TimeRangeType|null
     */
    public function getExpectedDeliveryTimeFrame()
    {
        return $this->expectedDeliveryTimeFrame;
    }
    /**
     * Set expectedDeliveryTimeFrame value
     * @param \Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setExpectedDeliveryTimeFrame(\Etrias\PaazlConnector\StructType\TimeRangeType $expectedDeliveryTimeFrame = null)
    {
        $this->expectedDeliveryTimeFrame = $expectedDeliveryTimeFrame;
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * @return \Etrias\PaazlConnector\StructType\Order
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
     * Get label value
     * @return \Etrias\PaazlConnector\StructType\Label[]|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Label[] $label
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function setLabel(array $label = array())
    {
        foreach ($label as $orderLabelItem) {
            // validation for constraint: itemType
            if (!$orderLabelItem instanceof \Etrias\PaazlConnector\StructType\Label) {
                throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\Label, "%s" given', is_object($orderLabelItem) ? get_class($orderLabelItem) : gettype($orderLabelItem)), __LINE__);
            }
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Add item to label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Label $item
     * @return \Etrias\PaazlConnector\StructType\Order
     */
    public function addToLabel(\Etrias\PaazlConnector\StructType\Label $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Label) {
            throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\Label, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->label[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Order
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
