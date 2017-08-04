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

class ShippingOptionResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $deliveryMatrix = null;

    /**
     * @var shippingOptions
     */
    protected $shippingOptions = null;

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
     * @return string
     */
    public function getDeliveryMatrix()
    {
        return $this->deliveryMatrix;
    }

    /**
     * @param string $deliveryMatrix
     *
     * @return $this
     */
    public function setDeliveryMatrix($deliveryMatrix)
    {
        $this->deliveryMatrix = $deliveryMatrix;

        return $this;
    }

    /**
     * @return shippingOptions
     */
    public function getShippingOptions()
    {
        return $this->shippingOptions;
    }

    /**
     * @param shippingOptions $shippingOptions
     *
     * @return $this
     */
    public function setShippingOptions($shippingOptions)
    {
        $this->shippingOptions = $shippingOptions;

        return $this;
    }
}
