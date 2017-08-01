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

class PickupRequestStatusHistoryType
{
    /**
     * @var pickupRequestStatusEntryType
     */
    protected $statusEntry = null;

    /**
     * Constructor.
     *
     * @var pickupRequestStatusEntryType
     *
     * @param mixed $statusEntry
     */
    public function __construct($statusEntry)
    {
        $this->statusEntry = $statusEntry;
    }

    /**
     * @return pickupRequestStatusEntryType
     */
    public function getStatusEntry()
    {
        return $this->statusEntry;
    }

    /**
     * @param pickupRequestStatusEntryType $statusEntry
     *
     * @return $this
     */
    public function setStatusEntry($statusEntry)
    {
        $this->statusEntry = $statusEntry;

        return $this;
    }
}
