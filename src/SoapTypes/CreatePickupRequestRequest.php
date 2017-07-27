<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class CreatePickupRequestRequest implements RequestInterface
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
    protected $internalReference = null;

    /**
     * @var string
     */
    protected $contract = null;

    /**
     * @var string
     */
    protected $pickupRequestOption = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var int
     */
    protected $pieceCount = null;

    /**
     * @var \DateTime
     */
    protected $pickupDate = null;

    /**
     * @var time
     */
    protected $pickupWindowStart = null;

    /**
     * @var time
     */
    protected $pickupWindowEnd = null;

    /**
     * @var string
     */
    protected $pickupCompanyName = null;

    /**
     * @var string
     */
    protected $pickupContactName = null;

    /**
     * @var string
     */
    protected $pickupName = null;

    /**
     * @var addressType
     */
    protected $pickupAddress = null;

    /**
     * @var string
     */
    protected $pickupPhoneNumber = null;

    /**
     * @var string
     */
    protected $pickupEmailAddress = null;

    /**
     * @var addressType
     */
    protected $deliveryAddress = null;

    /**
     * @var string
     */
    protected $deliveryEmailAddress = null;

    /**
     * @var string
     */
    protected $additionalInstruction = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $internalReference
     * @var string $contract
     * @var string $pickupRequestOption
     * @var string $orderReference
     * @var int $pieceCount
     * @var \DateTime $pickupDate
     * @var time $pickupWindowStart
     * @var time $pickupWindowEnd
     * @var string $pickupCompanyName
     * @var string $pickupContactName
     * @var string $pickupName
     * @var addressType $pickupAddress
     * @var string $pickupPhoneNumber
     * @var string $pickupEmailAddress
     * @var addressType $deliveryAddress
     * @var string $deliveryEmailAddress
     * @var string $additionalInstruction
     */
    public function __construct($hash, $webshop, $targetWebshop, $internalReference, $contract, $pickupRequestOption, $orderReference, $pieceCount, $pickupDate, $pickupWindowStart, $pickupWindowEnd, $pickupCompanyName, $pickupContactName, $pickupName, $pickupAddress, $pickupPhoneNumber, $pickupEmailAddress, $deliveryAddress, $deliveryEmailAddress, $additionalInstruction)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->internalReference = $internalReference;
        $this->contract = $contract;
        $this->pickupRequestOption = $pickupRequestOption;
        $this->orderReference = $orderReference;
        $this->pieceCount = $pieceCount;
        $this->pickupDate = $pickupDate;
        $this->pickupWindowStart = $pickupWindowStart;
        $this->pickupWindowEnd = $pickupWindowEnd;
        $this->pickupCompanyName = $pickupCompanyName;
        $this->pickupContactName = $pickupContactName;
        $this->pickupName = $pickupName;
        $this->pickupAddress = $pickupAddress;
        $this->pickupPhoneNumber = $pickupPhoneNumber;
        $this->pickupEmailAddress = $pickupEmailAddress;
        $this->deliveryAddress = $deliveryAddress;
        $this->deliveryEmailAddress = $deliveryEmailAddress;
        $this->additionalInstruction = $additionalInstruction;
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
    public function getInternalReference()
    {
        return $this->internalReference;
    }

    /**
     * @param string $internalReference
     * @return $this
     */
    public function setInternalReference($internalReference)
    {
        $this->internalReference = $internalReference;
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
    public function getPickupRequestOption()
    {
        return $this->pickupRequestOption;
    }

    /**
     * @param string $pickupRequestOption
     * @return $this
     */
    public function setPickupRequestOption($pickupRequestOption)
    {
        $this->pickupRequestOption = $pickupRequestOption;
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
     * @return int
     */
    public function getPieceCount()
    {
        return $this->pieceCount;
    }

    /**
     * @param int $pieceCount
     * @return $this
     */
    public function setPieceCount($pieceCount)
    {
        $this->pieceCount = $pieceCount;
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
     * @return $this
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return time
     */
    public function getPickupWindowStart()
    {
        return $this->pickupWindowStart;
    }

    /**
     * @param time $pickupWindowStart
     * @return $this
     */
    public function setPickupWindowStart($pickupWindowStart)
    {
        $this->pickupWindowStart = $pickupWindowStart;
        return $this;
    }

    /**
     * @return time
     */
    public function getPickupWindowEnd()
    {
        return $this->pickupWindowEnd;
    }

    /**
     * @param time $pickupWindowEnd
     * @return $this
     */
    public function setPickupWindowEnd($pickupWindowEnd)
    {
        $this->pickupWindowEnd = $pickupWindowEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupCompanyName()
    {
        return $this->pickupCompanyName;
    }

    /**
     * @param string $pickupCompanyName
     * @return $this
     */
    public function setPickupCompanyName($pickupCompanyName)
    {
        $this->pickupCompanyName = $pickupCompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupContactName()
    {
        return $this->pickupContactName;
    }

    /**
     * @param string $pickupContactName
     * @return $this
     */
    public function setPickupContactName($pickupContactName)
    {
        $this->pickupContactName = $pickupContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupName()
    {
        return $this->pickupName;
    }

    /**
     * @param string $pickupName
     * @return $this
     */
    public function setPickupName($pickupName)
    {
        $this->pickupName = $pickupName;
        return $this;
    }

    /**
     * @return addressType
     */
    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    /**
     * @param addressType $pickupAddress
     * @return $this
     */
    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress = $pickupAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupPhoneNumber()
    {
        return $this->pickupPhoneNumber;
    }

    /**
     * @param string $pickupPhoneNumber
     * @return $this
     */
    public function setPickupPhoneNumber($pickupPhoneNumber)
    {
        $this->pickupPhoneNumber = $pickupPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupEmailAddress()
    {
        return $this->pickupEmailAddress;
    }

    /**
     * @param string $pickupEmailAddress
     * @return $this
     */
    public function setPickupEmailAddress($pickupEmailAddress)
    {
        $this->pickupEmailAddress = $pickupEmailAddress;
        return $this;
    }

    /**
     * @return addressType
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param addressType $deliveryAddress
     * @return $this
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryEmailAddress()
    {
        return $this->deliveryEmailAddress;
    }

    /**
     * @param string $deliveryEmailAddress
     * @return $this
     */
    public function setDeliveryEmailAddress($deliveryEmailAddress)
    {
        $this->deliveryEmailAddress = $deliveryEmailAddress;
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
     * @return $this
     */
    public function setAdditionalInstruction($additionalInstruction)
    {
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }


}

