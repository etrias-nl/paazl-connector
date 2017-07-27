<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class AddressRequest implements RequestInterface
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
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $zipcode = null;

    /**
     * @var string
     */
    protected $housenumber = null;

    /**
     * @var string
     */
    protected $addition = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $orderReference
     * @var string $zipcode
     * @var string $housenumber
     * @var string $addition
     */
    public function __construct($hash, $webshop, $targetWebshop, $orderReference, $zipcode, $housenumber, $addition)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->zipcode = $zipcode;
        $this->housenumber = $housenumber;
        $this->addition = $addition;
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
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * @param string $housenumber
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddition()
    {
        return $this->addition;
    }

    /**
     * @param string $addition
     * @return $this
     */
    public function setAddition($addition)
    {
        $this->addition = $addition;
        return $this;
    }


}

