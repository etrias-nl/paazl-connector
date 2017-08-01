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

class TriggerCarrierRegistrationResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var shippingLabels
     */
    protected $shippingLabels = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var shippingLabels $shippingLabels
     *
     * @param mixed $error
     * @param mixed $shippingLabels
     */
    public function __construct($error, $shippingLabels)
    {
        $this->error = $error;
        $this->shippingLabels = $shippingLabels;
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
