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

class ShippingOptions
{
    /**
     * @var shippingOption
     */
    protected $shippingOption = null;

    /**
     * Constructor.
     *
     * @var shippingOption
     *
     * @param mixed $shippingOption
     */
    public function __construct($shippingOption)
    {
        $this->shippingOption = $shippingOption;
    }

    /**
     * @return shippingOption
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param shippingOption $shippingOption
     *
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;

        return $this;
    }
}
