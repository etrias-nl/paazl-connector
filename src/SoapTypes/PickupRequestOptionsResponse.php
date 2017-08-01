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

class PickupRequestOptionsResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var pickupRequestOptionType
     */
    protected $pickupRequestOption = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var pickupRequestOptionType $pickupRequestOption
     *
     * @param mixed $error
     * @param mixed $pickupRequestOption
     */
    public function __construct($error, $pickupRequestOption)
    {
        $this->error = $error;
        $this->pickupRequestOption = $pickupRequestOption;
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
     * @return pickupRequestOptionType
     */
    public function getPickupRequestOption()
    {
        return $this->pickupRequestOption;
    }

    /**
     * @param pickupRequestOptionType $pickupRequestOption
     *
     * @return $this
     */
    public function setPickupRequestOption($pickupRequestOption)
    {
        $this->pickupRequestOption = $pickupRequestOption;

        return $this;
    }
}
