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

use Etrias\PaazlConnector\Result\PaazlResultInterface;

class ListOrdersResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var ordersType
     */
    protected $orders = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var ordersType $orders
     *
     * @param mixed $error
     * @param mixed $orders
     */
    public function __construct($error, $orders)
    {
        $this->error = $error;
        $this->orders = $orders;
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
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return ordersType
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param ordersType $orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }
}
