<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPickupRequestRequest StructType
 * @subpackage Structs
 */
class CreatePickupRequestRequest extends AbstractStructBase
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
     * The internalReference
     * @var string
     */
    public $internalReference;
    /**
     * The contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contract;
    /**
     * The pickupRequestOption
     * @var string
     */
    public $pickupRequestOption;
    /**
     * The orderReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderReference;
    /**
     * The pieceCount
     * @var int
     */
    public $pieceCount;
    /**
     * The pickupDate
     * @var string
     */
    public $pickupDate;
    /**
     * The pickupWindowStart
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $pickupWindowStart;
    /**
     * The pickupWindowEnd
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $pickupWindowEnd;
    /**
     * The pickupCompanyName
     * @var string
     */
    public $pickupCompanyName;
    /**
     * The pickupContactName
     * @var string
     */
    public $pickupContactName;
    /**
     * The pickupName
     * @var string
     */
    public $pickupName;
    /**
     * The pickupAddress
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $pickupAddress;
    /**
     * The pickupPhoneNumber
     * @var string
     */
    public $pickupPhoneNumber;
    /**
     * The pickupEmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupEmailAddress;
    /**
     * The deliveryAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $deliveryAddress;
    /**
     * The deliveryEmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryEmailAddress;
    /**
     * The additionalInstruction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $additionalInstruction;
    /**
     * Constructor method for createPickupRequestRequest
     * @uses CreatePickupRequestRequest::setHash()
     * @uses CreatePickupRequestRequest::setWebshop()
     * @uses CreatePickupRequestRequest::setTargetWebshop()
     * @uses CreatePickupRequestRequest::setInternalReference()
     * @uses CreatePickupRequestRequest::setContract()
     * @uses CreatePickupRequestRequest::setPickupRequestOption()
     * @uses CreatePickupRequestRequest::setOrderReference()
     * @uses CreatePickupRequestRequest::setPieceCount()
     * @uses CreatePickupRequestRequest::setPickupDate()
     * @uses CreatePickupRequestRequest::setPickupWindowStart()
     * @uses CreatePickupRequestRequest::setPickupWindowEnd()
     * @uses CreatePickupRequestRequest::setPickupCompanyName()
     * @uses CreatePickupRequestRequest::setPickupContactName()
     * @uses CreatePickupRequestRequest::setPickupName()
     * @uses CreatePickupRequestRequest::setPickupAddress()
     * @uses CreatePickupRequestRequest::setPickupPhoneNumber()
     * @uses CreatePickupRequestRequest::setPickupEmailAddress()
     * @uses CreatePickupRequestRequest::setDeliveryAddress()
     * @uses CreatePickupRequestRequest::setDeliveryEmailAddress()
     * @uses CreatePickupRequestRequest::setAdditionalInstruction()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $internalReference
     * @param string $contract
     * @param string $pickupRequestOption
     * @param string $orderReference
     * @param int $pieceCount
     * @param string $pickupDate
     * @param \Etrias\PaazlConnector\StructType\Time $pickupWindowStart
     * @param \Etrias\PaazlConnector\StructType\Time $pickupWindowEnd
     * @param string $pickupCompanyName
     * @param string $pickupContactName
     * @param string $pickupName
     * @param \Etrias\PaazlConnector\StructType\AddressType $pickupAddress
     * @param string $pickupPhoneNumber
     * @param string $pickupEmailAddress
     * @param \Etrias\PaazlConnector\StructType\AddressType $deliveryAddress
     * @param string $deliveryEmailAddress
     * @param string $additionalInstruction
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $internalReference = null, $contract = null, $pickupRequestOption = null, $orderReference = null, $pieceCount = null, $pickupDate = null, \Etrias\PaazlConnector\StructType\Time $pickupWindowStart = null, \Etrias\PaazlConnector\StructType\Time $pickupWindowEnd = null, $pickupCompanyName = null, $pickupContactName = null, $pickupName = null, \Etrias\PaazlConnector\StructType\AddressType $pickupAddress = null, $pickupPhoneNumber = null, $pickupEmailAddress = null, \Etrias\PaazlConnector\StructType\AddressType $deliveryAddress = null, $deliveryEmailAddress = null, $additionalInstruction = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setInternalReference($internalReference)
            ->setContract($contract)
            ->setPickupRequestOption($pickupRequestOption)
            ->setOrderReference($orderReference)
            ->setPieceCount($pieceCount)
            ->setPickupDate($pickupDate)
            ->setPickupWindowStart($pickupWindowStart)
            ->setPickupWindowEnd($pickupWindowEnd)
            ->setPickupCompanyName($pickupCompanyName)
            ->setPickupContactName($pickupContactName)
            ->setPickupName($pickupName)
            ->setPickupAddress($pickupAddress)
            ->setPickupPhoneNumber($pickupPhoneNumber)
            ->setPickupEmailAddress($pickupEmailAddress)
            ->setDeliveryAddress($deliveryAddress)
            ->setDeliveryEmailAddress($deliveryEmailAddress)
            ->setAdditionalInstruction($additionalInstruction);
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * Get internalReference value
     * @return string|null
     */
    public function getInternalReference()
    {
        return $this->internalReference;
    }
    /**
     * Set internalReference value
     * @param string $internalReference
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setInternalReference($internalReference = null)
    {
        // validation for constraint: string
        if (!is_null($internalReference) && !is_string($internalReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internalReference)), __LINE__);
        }
        $this->internalReference = $internalReference;
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * Get pickupRequestOption value
     * @return string|null
     */
    public function getPickupRequestOption()
    {
        return $this->pickupRequestOption;
    }
    /**
     * Set pickupRequestOption value
     * @param string $pickupRequestOption
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupRequestOption($pickupRequestOption = null)
    {
        // validation for constraint: string
        if (!is_null($pickupRequestOption) && !is_string($pickupRequestOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupRequestOption)), __LINE__);
        }
        $this->pickupRequestOption = $pickupRequestOption;
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * Get pieceCount value
     * @return int|null
     */
    public function getPieceCount()
    {
        return $this->pieceCount;
    }
    /**
     * Set pieceCount value
     * @param int $pieceCount
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPieceCount($pieceCount = null)
    {
        // validation for constraint: int
        if (!is_null($pieceCount) && !is_numeric($pieceCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieceCount)), __LINE__);
        }
        $this->pieceCount = $pieceCount;
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * Get pickupWindowStart value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getPickupWindowStart()
    {
        return $this->pickupWindowStart;
    }
    /**
     * Set pickupWindowStart value
     * @param \Etrias\PaazlConnector\StructType\Time $pickupWindowStart
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupWindowStart(\Etrias\PaazlConnector\StructType\Time $pickupWindowStart = null)
    {
        $this->pickupWindowStart = $pickupWindowStart;
        return $this;
    }
    /**
     * Get pickupWindowEnd value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getPickupWindowEnd()
    {
        return $this->pickupWindowEnd;
    }
    /**
     * Set pickupWindowEnd value
     * @param \Etrias\PaazlConnector\StructType\Time $pickupWindowEnd
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupWindowEnd(\Etrias\PaazlConnector\StructType\Time $pickupWindowEnd = null)
    {
        $this->pickupWindowEnd = $pickupWindowEnd;
        return $this;
    }
    /**
     * Get pickupCompanyName value
     * @return string|null
     */
    public function getPickupCompanyName()
    {
        return $this->pickupCompanyName;
    }
    /**
     * Set pickupCompanyName value
     * @param string $pickupCompanyName
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupCompanyName($pickupCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($pickupCompanyName) && !is_string($pickupCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupCompanyName)), __LINE__);
        }
        $this->pickupCompanyName = $pickupCompanyName;
        return $this;
    }
    /**
     * Get pickupContactName value
     * @return string|null
     */
    public function getPickupContactName()
    {
        return $this->pickupContactName;
    }
    /**
     * Set pickupContactName value
     * @param string $pickupContactName
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupContactName($pickupContactName = null)
    {
        // validation for constraint: string
        if (!is_null($pickupContactName) && !is_string($pickupContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupContactName)), __LINE__);
        }
        $this->pickupContactName = $pickupContactName;
        return $this;
    }
    /**
     * Get pickupName value
     * @return string|null
     */
    public function getPickupName()
    {
        return $this->pickupName;
    }
    /**
     * Set pickupName value
     * @param string $pickupName
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupName($pickupName = null)
    {
        // validation for constraint: string
        if (!is_null($pickupName) && !is_string($pickupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupName)), __LINE__);
        }
        $this->pickupName = $pickupName;
        return $this;
    }
    /**
     * Get pickupAddress value
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }
    /**
     * Set pickupAddress value
     * @param \Etrias\PaazlConnector\StructType\AddressType $pickupAddress
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupAddress(\Etrias\PaazlConnector\StructType\AddressType $pickupAddress = null)
    {
        $this->pickupAddress = $pickupAddress;
        return $this;
    }
    /**
     * Get pickupPhoneNumber value
     * @return string|null
     */
    public function getPickupPhoneNumber()
    {
        return $this->pickupPhoneNumber;
    }
    /**
     * Set pickupPhoneNumber value
     * @param string $pickupPhoneNumber
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupPhoneNumber($pickupPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pickupPhoneNumber) && !is_string($pickupPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupPhoneNumber)), __LINE__);
        }
        $this->pickupPhoneNumber = $pickupPhoneNumber;
        return $this;
    }
    /**
     * Get pickupEmailAddress value
     * @return string|null
     */
    public function getPickupEmailAddress()
    {
        return $this->pickupEmailAddress;
    }
    /**
     * Set pickupEmailAddress value
     * @param string $pickupEmailAddress
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setPickupEmailAddress($pickupEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($pickupEmailAddress) && !is_string($pickupEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupEmailAddress)), __LINE__);
        }
        $this->pickupEmailAddress = $pickupEmailAddress;
        return $this;
    }
    /**
     * Get deliveryAddress value
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }
    /**
     * Set deliveryAddress value
     * @param \Etrias\PaazlConnector\StructType\AddressType $deliveryAddress
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setDeliveryAddress(\Etrias\PaazlConnector\StructType\AddressType $deliveryAddress = null)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * Get deliveryEmailAddress value
     * @return string|null
     */
    public function getDeliveryEmailAddress()
    {
        return $this->deliveryEmailAddress;
    }
    /**
     * Set deliveryEmailAddress value
     * @param string $deliveryEmailAddress
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
     */
    public function setDeliveryEmailAddress($deliveryEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryEmailAddress) && !is_string($deliveryEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryEmailAddress)), __LINE__);
        }
        $this->deliveryEmailAddress = $deliveryEmailAddress;
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
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest
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
