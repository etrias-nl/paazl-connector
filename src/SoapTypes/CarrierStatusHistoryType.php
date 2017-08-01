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

class CarrierStatusHistoryType
{
    /**
     * @var carrierStatusType
     */
    protected $current = null;

    /**
     * @var history
     */
    protected $history = null;

    /**
     * Constructor.
     *
     * @var carrierStatusType
     * @var history           $history
     *
     * @param mixed $current
     * @param mixed $history
     */
    public function __construct($current, $history)
    {
        $this->current = $current;
        $this->history = $history;
    }

    /**
     * @return carrierStatusType
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param carrierStatusType $current
     *
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * @return history
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param history $history
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }
}
