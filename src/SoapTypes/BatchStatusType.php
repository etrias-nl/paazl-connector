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

class BatchStatusType
{
    /**
     * @var batchStatusOrderType
     */
    protected $order = null;

    /**
     * Constructor.
     *
     * @var batchStatusOrderType
     *
     * @param mixed $order
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * @return batchStatusOrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param batchStatusOrderType $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
