<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class ListOrdersRequest implements RequestInterface
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
     * @var \DateTime
     */
    protected $changedSince = null;

    /**
     * @var nonNegativeInteger
     */
    protected $page = null;

    /**
     * @var bool
     */
    protected $carrierStatus = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var \DateTime $changedSince
     * @var nonNegativeInteger $page
     * @var bool $carrierStatus
     */
    public function __construct($hash, $webshop, $targetWebshop, $changedSince, $page, $carrierStatus)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->changedSince = $changedSince;
        $this->page = $page;
        $this->carrierStatus = $carrierStatus;
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
     * @return \DateTime
     */
    public function getChangedSince()
    {
        return $this->changedSince;
    }

    /**
     * @param \DateTime $changedSince
     * @return $this
     */
    public function setChangedSince($changedSince)
    {
        $this->changedSince = $changedSince;
        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param nonNegativeInteger $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCarrierStatus()
    {
        return $this->carrierStatus;
    }

    /**
     * @param bool $carrierStatus
     * @return $this
     */
    public function setCarrierStatus($carrierStatus)
    {
        $this->carrierStatus = $carrierStatus;
        return $this;
    }


}

