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

class OrderStatusContainerType
{
    /**
     * @var orderStatusType
     */
    protected $status = null;

    /**
     * @var shippingLabels
     */
    protected $shippingLabels = null;

    /**
     * Constructor.
     *
     * @var orderStatusType
     * @var shippingLabels  $shippingLabels
     *
     * @param mixed $status
     * @param mixed $shippingLabels
     */
    public function __construct($status, $shippingLabels)
    {
        $this->status = $status;
        $this->shippingLabels = $shippingLabels;
    }

    /**
     * @return orderStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param orderStatusType $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return shippingLabels
     */
    public function getShippingLabels()
    {
        return $this->shippingLabels;
    }

    /**
     * @param shippingLabels $shippingLabels
     *
     * @return $this
     */
    public function setShippingLabels($shippingLabels)
    {
        $this->shippingLabels = $shippingLabels;

        return $this;
    }
}
