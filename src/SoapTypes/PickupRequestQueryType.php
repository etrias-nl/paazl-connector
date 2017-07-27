<?php

namespace Etrias\PaazlConnector\SoapTypes;

class PickupRequestQueryType
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
    protected $distributor = null;

    /**
     * @var string
     */
    protected $externalReference = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $internalReference
     * @var string $distributor
     * @var string $externalReference
     */
    public function __construct($hash, $webshop, $targetWebshop, $internalReference, $distributor, $externalReference)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->internalReference = $internalReference;
        $this->distributor = $distributor;
        $this->externalReference = $externalReference;
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


}

