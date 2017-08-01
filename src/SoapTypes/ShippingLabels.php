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

class ShippingLabels
{
    /**
     * @var triggerBarcodeResponseType
     */
    protected $shippingLabel = null;

    /**
     * Constructor.
     *
     * @var triggerBarcodeResponseType
     *
     * @param mixed $shippingLabel
     */
    public function __construct($shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;
    }

    /**
     * @return triggerBarcodeResponseType
     */
    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }

    /**
     * @param triggerBarcodeResponseType $shippingLabel
     *
     * @return $this
     */
    public function setShippingLabel($shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;

        return $this;
    }
}
