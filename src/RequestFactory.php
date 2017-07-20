<?php

namespace Etrias\PaazlConnector;


use Etrias\PaazlConnector\StructType\OrderDetailsRequest;

class RequestFactory
{

    /**
     * Constructor method for orderDetailsRequest
     * @param string $orderReference
     * @param int $targetWebshop
     * @param bool $extendedDetails
     *
     * @return OrderDetailsRequest
     */
    static public function createOrderDetailsRequest($orderReference, $targetWebshop = null, $extendedDetails = null) {
        return new OrderDetailsRequest(null, null, $orderReference, $targetWebshop = null, $extendedDetails = null);
    }
}
