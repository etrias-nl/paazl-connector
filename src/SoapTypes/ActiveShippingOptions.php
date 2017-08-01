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

class ActiveShippingOptions
{
    /**
     * @var activeShippingOption
     */
    protected $activeShippingOption = null;

    /**
     * Constructor.
     *
     * @var activeShippingOption
     *
     * @param mixed $activeShippingOption
     */
    public function __construct($activeShippingOption)
    {
        $this->activeShippingOption = $activeShippingOption;
    }

    /**
     * @return activeShippingOption
     */
    public function getActiveShippingOption()
    {
        return $this->activeShippingOption;
    }

    /**
     * @param activeShippingOption $activeShippingOption
     *
     * @return $this
     */
    public function setActiveShippingOption($activeShippingOption)
    {
        $this->activeShippingOption = $activeShippingOption;

        return $this;
    }
}
