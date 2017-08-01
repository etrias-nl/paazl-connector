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

class OrderToShipType
{
    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var \DateTime
     */
    protected $deliveryDate = null;

    /**
     * Constructor.
     *
     * @var int
     * @var string    $orderReference
     * @var string    $distributor
     * @var \DateTime $deliveryDate
     *
     * @param mixed $webshop
     * @param mixed $orderReference
     * @param mixed $distributor
     * @param mixed $deliveryDate
     */
    public function __construct($webshop, $orderReference, $distributor, $deliveryDate)
    {
        $this->webshop = $webshop;
        $this->orderReference = $orderReference;
        $this->distributor = $distributor;
        $this->deliveryDate = $deliveryDate;
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
     * @return string
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     *
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }
}
