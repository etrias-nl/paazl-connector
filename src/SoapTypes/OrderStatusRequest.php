<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\SoapTypes;

use Phpro\SoapClient\Type\RequestInterface;

class OrderStatusRequest implements RequestInterface
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
     * @var bool
     */
    protected $includeLabels = null;

    /**
     * @var bool
     */
    protected $carrierStatus = null;

    /**
     * Constructor.
     *
     * @var string
     * @var int    $webshop
     * @var int    $targetWebshop
     * @var string $orderReference
     * @var bool   $includeLabels
     * @var bool   $carrierStatus
     *
     * @param mixed $hash
     * @param mixed $webshop
     * @param mixed $targetWebshop
     * @param mixed $orderReference
     * @param mixed $includeLabels
     * @param mixed $carrierStatus
     */
    public function __construct($hash, $webshop, $targetWebshop, $orderReference, $includeLabels, $carrierStatus)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->includeLabels = $includeLabels;
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
     *
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
     *
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
     *
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
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeLabels()
    {
        return $this->includeLabels;
    }

    /**
     * @param bool $includeLabels
     *
     * @return $this
     */
    public function setIncludeLabels($includeLabels)
    {
        $this->includeLabels = $includeLabels;

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
     *
     * @return $this
     */
    public function setCarrierStatus($carrierStatus)
    {
        $this->carrierStatus = $carrierStatus;

        return $this;
    }
}
