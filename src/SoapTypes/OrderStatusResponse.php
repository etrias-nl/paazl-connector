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

class OrderStatusResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var orderStatusContainerType
     */
    protected $orderStatus = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var orderStatusContainerType $orderStatus
     *
     * @param mixed $error
     * @param mixed $orderStatus
     */
    public function __construct($error, $orderStatus)
    {
        $this->error = $error;
        $this->orderStatus = $orderStatus;
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
     * @return orderStatusContainerType
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param orderStatusContainerType $orderStatus
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }
}
