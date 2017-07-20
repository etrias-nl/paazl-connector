<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestDetailsResponse StructType
 * @subpackage Structs
 */
class PickupRequestDetailsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The createDate
     * @var string
     */
    public $createDate;
    /**
     * The internalReference
     * @var string
     */
    public $internalReference;
    /**
     * The externalReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $externalReference;
    /**
     * The webshop
     * @var int
     */
    public $webshop;
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
     * The distributor
     * @var string
     */
    public $distributor;
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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupCompanyName;
    /**
     * The pickupContactName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupContactName;
    /**
     * The pickupAddress
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $pickupAddress;
    /**
     * The residentialPickup
     * @var bool
     */
    public $residentialPickup;
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
     * The status
     * @var string
     */
    public $status;
    /**
     * The statusDate
     * @var string
     */
    public $statusDate;
    /**
     * The additionalInstruction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $additionalInstruction;
    /**
     * Constructor method for pickupRequestDetailsResponse
     * @uses PickupRequestDetailsResponse::setError()
     * @uses PickupRequestDetailsResponse::setCreateDate()
     * @uses PickupRequestDetailsResponse::setInternalReference()
     * @uses PickupRequestDetailsResponse::setExternalReference()
     * @uses PickupRequestDetailsResponse::setWebshop()
     * @uses PickupRequestDetailsResponse::setContract()
     * @uses PickupRequestDetailsResponse::setPickupRequestOption()
     * @uses PickupRequestDetailsResponse::setDistributor()
     * @uses PickupRequestDetailsResponse::setOrderReference()
     * @uses PickupRequestDetailsResponse::setPieceCount()
     * @uses PickupRequestDetailsResponse::setPickupDate()
     * @uses PickupRequestDetailsResponse::setPickupWindowStart()
     * @uses PickupRequestDetailsResponse::setPickupWindowEnd()
     * @uses PickupRequestDetailsResponse::setPickupCompanyName()
     * @uses PickupRequestDetailsResponse::setPickupContactName()
     * @uses PickupRequestDetailsResponse::setPickupAddress()
     * @uses PickupRequestDetailsResponse::setResidentialPickup()
     * @uses PickupRequestDetailsResponse::setPickupPhoneNumber()
     * @uses PickupRequestDetailsResponse::setPickupEmailAddress()
     * @uses PickupRequestDetailsResponse::setDeliveryAddress()
     * @uses PickupRequestDetailsResponse::setDeliveryEmailAddress()
     * @uses PickupRequestDetailsResponse::setStatus()
     * @uses PickupRequestDetailsResponse::setStatusDate()
     * @uses PickupRequestDetailsResponse::setAdditionalInstruction()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $createDate
     * @param string $internalReference
     * @param string $externalReference
     * @param int $webshop
     * @param string $contract
     * @param string $pickupRequestOption
     * @param string $distributor
     * @param string $orderReference
     * @param int $pieceCount
     * @param string $pickupDate
     * @param \Etrias\PaazlConnector\StructType\Time $pickupWindowStart
     * @param \Etrias\PaazlConnector\StructType\Time $pickupWindowEnd
     * @param string $pickupCompanyName
     * @param string $pickupContactName
     * @param \Etrias\PaazlConnector\StructType\AddressType $pickupAddress
     * @param bool $residentialPickup
     * @param string $pickupPhoneNumber
     * @param string $pickupEmailAddress
     * @param \Etrias\PaazlConnector\StructType\AddressType $deliveryAddress
     * @param string $deliveryEmailAddress
     * @param string $status
     * @param string $statusDate
     * @param string $additionalInstruction
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $createDate = null, $internalReference = null, $externalReference = null, $webshop = null, $contract = null, $pickupRequestOption = null, $distributor = null, $orderReference = null, $pieceCount = null, $pickupDate = null, \Etrias\PaazlConnector\StructType\Time $pickupWindowStart = null, \Etrias\PaazlConnector\StructType\Time $pickupWindowEnd = null, $pickupCompanyName = null, $pickupContactName = null, \Etrias\PaazlConnector\StructType\AddressType $pickupAddress = null, $residentialPickup = null, $pickupPhoneNumber = null, $pickupEmailAddress = null, \Etrias\PaazlConnector\StructType\AddressType $deliveryAddress = null, $deliveryEmailAddress = null, $status = null, $statusDate = null, $additionalInstruction = null)
    {
        $this
            ->setError($error)
            ->setCreateDate($createDate)
            ->setInternalReference($internalReference)
            ->setExternalReference($externalReference)
            ->setWebshop($webshop)
            ->setContract($contract)
            ->setPickupRequestOption($pickupRequestOption)
            ->setDistributor($distributor)
            ->setOrderReference($orderReference)
            ->setPieceCount($pieceCount)
            ->setPickupDate($pickupDate)
            ->setPickupWindowStart($pickupWindowStart)
            ->setPickupWindowEnd($pickupWindowEnd)
            ->setPickupCompanyName($pickupCompanyName)
            ->setPickupContactName($pickupContactName)
            ->setPickupAddress($pickupAddress)
            ->setResidentialPickup($residentialPickup)
            ->setPickupPhoneNumber($pickupPhoneNumber)
            ->setPickupEmailAddress($pickupEmailAddress)
            ->setDeliveryAddress($deliveryAddress)
            ->setDeliveryEmailAddress($deliveryEmailAddress)
            ->setStatus($status)
            ->setStatusDate($statusDate)
            ->setAdditionalInstruction($additionalInstruction);
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
     */
    public function setExternalReference($externalReference = null)
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
     */
    public function setPickupAddress(\Etrias\PaazlConnector\StructType\AddressType $pickupAddress = null)
    {
        $this->pickupAddress = $pickupAddress;
        return $this;
    }
    /**
     * Get residentialPickup value
     * @return bool|null
     */
    public function getResidentialPickup()
    {
        return $this->residentialPickup;
    }
    /**
     * Set residentialPickup value
     * @param bool $residentialPickup
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
     */
    public function setResidentialPickup($residentialPickup = null)
    {
        // validation for constraint: boolean
        if (!is_null($residentialPickup) && !is_bool($residentialPickup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($residentialPickup)), __LINE__);
        }
        $this->residentialPickup = $residentialPickup;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PickupRequestStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get statusDate value
     * @return string|null
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
    /**
     * Set statusDate value
     * @param string $statusDate
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
     */
    public function setStatusDate($statusDate = null)
    {
        // validation for constraint: string
        if (!is_null($statusDate) && !is_string($statusDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusDate)), __LINE__);
        }
        $this->statusDate = $statusDate;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse
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
