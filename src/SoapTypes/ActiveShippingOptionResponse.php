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

class ActiveShippingOptionResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var activeShippingOptions
     */
    protected $activeShippingOptions = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var activeShippingOptions $activeShippingOptions
     *
     * @param mixed $error
     * @param mixed $activeShippingOptions
     */
    public function __construct($error, $activeShippingOptions)
    {
        $this->error = $error;
        $this->activeShippingOptions = $activeShippingOptions;
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
     * @return activeShippingOptions
     */
    public function getActiveShippingOptions()
    {
        return $this->activeShippingOptions;
    }

    /**
     * @param activeShippingOptions $activeShippingOptions
     *
     * @return $this
     */
    public function setActiveShippingOptions($activeShippingOptions)
    {
        $this->activeShippingOptions = $activeShippingOptions;

        return $this;
    }
}
