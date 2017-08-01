<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class PickupRequestDetailsResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var \DateTime
     */
    protected $createDate = null;

    /**
     * @var string
     */
    protected $internalReference = null;

    /**
     * @var string
     */
    protected $externalReference = null;

    /**
     * @var int
     */
    protected $webshop = null;

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
    protected $distributor = null;

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
     * @var addressType
     */
    protected $pickupAddress = null;

    /**
     * @var bool
     */
    protected $residentialPickup = null;

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
     * @var pickupRequestStatusType
     */
    protected $status = null;

    /**
     * @var \DateTime
     */
    protected $statusDate = null;

    /**
     * @var string
     */
    protected $additionalInstruction = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var \DateTime $createDate
     * @var string $internalReference
     * @var string $externalReference
     * @var int $webshop
     * @var string $contract
     * @var string $pickupRequestOption
     * @var string $distributor
     * @var string $orderReference
     * @var int $pieceCount
     * @var \DateTime $pickupDate
     * @var time $pickupWindowStart
     * @var time $pickupWindowEnd
     * @var string $pickupCompanyName
     * @var string $pickupContactName
     * @var addressType $pickupAddress
     * @var bool $residentialPickup
     * @var string $pickupPhoneNumber
     * @var string $pickupEmailAddress
     * @var addressType $deliveryAddress
     * @var string $deliveryEmailAddress
     * @var pickupRequestStatusType $status
     * @var \DateTime $statusDate
     * @var string $additionalInstruction
     */
    public function __construct($error, $createDate, $internalReference, $externalReference, $webshop, $contract, $pickupRequestOption, $distributor, $orderReference, $pieceCount, $pickupDate, $pickupWindowStart, $pickupWindowEnd, $pickupCompanyName, $pickupContactName, $pickupAddress, $residentialPickup, $pickupPhoneNumber, $pickupEmailAddress, $deliveryAddress, $deliveryEmailAddress, $status, $statusDate, $additionalInstruction)
    {
        $this->error = $error;
        $this->createDate = $createDate;
        $this->internalReference = $internalReference;
        $this->externalReference = $externalReference;
        $this->webshop = $webshop;
        $this->contract = $contract;
        $this->pickupRequestOption = $pickupRequestOption;
        $this->distributor = $distributor;
        $this->orderReference = $orderReference;
        $this->pieceCount = $pieceCount;
        $this->pickupDate = $pickupDate;
        $this->pickupWindowStart = $pickupWindowStart;
        $this->pickupWindowEnd = $pickupWindowEnd;
        $this->pickupCompanyName = $pickupCompanyName;
        $this->pickupContactName = $pickupContactName;
        $this->pickupAddress = $pickupAddress;
        $this->residentialPickup = $residentialPickup;
        $this->pickupPhoneNumber = $pickupPhoneNumber;
        $this->pickupEmailAddress = $pickupEmailAddress;
        $this->deliveryAddress = $deliveryAddress;
        $this->deliveryEmailAddress = $deliveryEmailAddress;
        $this->status = $status;
        $this->statusDate = $statusDate;
        $this->additionalInstruction = $additionalInstruction;
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
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
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
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * @param string $externalReference
     * @return $this
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
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
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
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
     * @return bool
     */
    public function getResidentialPickup()
    {
        return $this->residentialPickup;
    }

    /**
     * @param bool $residentialPickup
     * @return $this
     */
    public function setResidentialPickup($residentialPickup)
    {
        $this->residentialPickup = $residentialPickup;
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
     * @return pickupRequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param pickupRequestStatusType $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * @param \DateTime $statusDate
     * @return $this
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;
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

