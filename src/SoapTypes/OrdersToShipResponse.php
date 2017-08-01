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

class OrdersToShipResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var orderToShipType
     */
    protected $order = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var orderToShipType $order
     *
     * @param mixed $error
     * @param mixed $order
     */
    public function __construct($error, $order)
    {
        $this->error = $error;
        $this->order = $order;
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
     * @return orderToShipType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param orderToShipType $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
