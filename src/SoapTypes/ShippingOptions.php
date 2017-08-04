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
     * @var shippingOption[]
     */
    protected $shippingOption = [];

    /**
     * Constructor.
     *
     * @var shippingOption
     *
     * @param mixed $shippingOption[]
     */
    public function __construct(array $shippingOptions = [])
    {
        $this->shippingOption = $shippingOptions;
    }

    /**
     * @return shippingOption[]
     */
    public function getShippingOptions()
    {
        return $this->shippingOption;
    }

    /**
     * @param shippingOption[] $shippingOptions
     *
     * @return $this
     */
    public function setShippingOptions($shippingOptions)
    {
        $this->shippingOption = $shippingOptions;

        return $this;
    }
}
