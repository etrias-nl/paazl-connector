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
     * @var ShippingLabel[]
     */
    protected $shippingLabel = [];

    /**
     * Constructor.
     *
     * @var ShippingLabel[]
     *
     * @param mixed $shippingLabel
     */
    public function __construct(array $shippingLabels)
    {
        $this->shippingLabel = $shippingLabels;
    }

    /**
     * @return ShippingLabel[]
     */
    public function getShippingLabels()
    {
        return $this->shippingLabel;
    }

    /**
     * @param ShippingLabel[] $shippingLabel
     * @param mixed           $shippingLabels
     *
     * @return $this
     */
    public function setShippingLabels($shippingLabels)
    {
        $this->shippingLabel = $shippingLabels;

        return $this;
    }
}
