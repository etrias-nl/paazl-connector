<?php

namespace Etrias\PaazlConnector\SoapTypes;

class PickupRequestStatusType
{
    const CREATED = 'created';
    const REGISTERED = 'registered';
    const TEMPORARY_FAILURE = 'temporaryFailure';
    const PERMANENT_FAILURE = 'permanentFailure';
    const PICKED_UP = 'pickedup';
    const CANCELED = 'canceled';
}

