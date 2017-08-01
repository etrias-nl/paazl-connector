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

class ServicePointsResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var shippingOption
     */
    protected $shippingOption = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var shippingOption $shippingOption
     *
     * @param mixed $error
     * @param mixed $shippingOption
     */
    public function __construct($error, $shippingOption)
    {
        $this->error = $error;
        $this->shippingOption = $shippingOption;
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
