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

class DeliveryDatesBySourceType
{
    /**
     * @var source
     */
    protected $source = null;

    /**
     * @var deliveryDatesType
     */
    protected $deliveryDates = null;

    /**
     * Constructor.
     *
     * @var source
     * @var deliveryDatesType $deliveryDates
     *
     * @param mixed $source
     * @param mixed $deliveryDates
     */
    public function __construct($source, $deliveryDates)
    {
        $this->source = $source;
        $this->deliveryDates = $deliveryDates;
    }

    /**
     * @return source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param source $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return deliveryDatesType
     */
    public function getDeliveryDates()
    {
        return $this->deliveryDates;
    }

    /**
     * @param deliveryDatesType $deliveryDates
     *
     * @return $this
     */
    public function setDeliveryDates($deliveryDates)
    {
        $this->deliveryDates = $deliveryDates;

        return $this;
    }
}
