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

class GeneratePdfCustomsDocumentsRequest implements RequestInterface
{
    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var orderType
     */
    protected $order = null;

    /**
     * Constructor.
     *
     * @var int
     * @var orderType[] $orders
     *
     * @param mixed $webshop
     */
    public function __construct($webshop, array $orders)
    {
        $this->webshop = $webshop;
        $this->order = $orders;
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
     * @return orderType
     */
    public function getOrders()
    {
        return $this->order;
    }

    /**
     * @param orderType[] $orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->order = $orders;

        return $this;
    }
}
