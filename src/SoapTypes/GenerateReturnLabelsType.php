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

class GenerateReturnLabelsType
{
    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var returnLabelsOrderType[]
     */
    protected $order = null;

    /**
     * Constructor.
     *
     * @var int
     * @var returnLabelsOrderType[] $order
     *
     * @param mixed $webshop
     * @param mixed $order
     */
    public function __construct($webshop, $order)
    {
        $this->webshop = $webshop;
        $this->order = $order;
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
     * @return returnLabelsOrderType[]
     */
    public function getOrders()
    {
        return $this->order;
    }

    /**
     * @param returnLabelsOrderType[] $order
     *
     * @return $this
     */
    public function setOrders($order)
    {
        $this->order = $order;

        return $this;
    }
}
