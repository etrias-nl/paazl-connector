<?php

namespace Etrias\PaazlConnector\SoapTypes;

class PickupRequestStatusHistoryType
{

    /**
     * @var pickupRequestStatusEntryType
     */
    protected $statusEntry = null;

    /**
     * Constructor
     *
     * @var pickupRequestStatusEntryType $statusEntry
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
     * @return $this
     */
    public function setStatusEntry($statusEntry)
    {
        $this->statusEntry = $statusEntry;
        return $this;
    }


}

