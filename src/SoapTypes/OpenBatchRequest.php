<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class OpenBatchRequest implements RequestInterface
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
    protected $distributor = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $distributor
     * @var string $shippingOption
     * @var string $country
     */
    public function __construct($hash, $webshop, $targetWebshop, $distributor, $shippingOption, $country)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->distributor = $distributor;
        $this->shippingOption = $shippingOption;
        $this->country = $country;
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
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param string $shippingOption
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

