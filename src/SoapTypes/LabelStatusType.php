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

class LabelStatusType
{
    const CREATED = 'CREATED';
    const DELETED = 'DELETED';
    const READY_TO_POST = 'READY_TO_POST';
    const SCANNED = 'SCANNED';
    const AVAILABLE_AT_PICKUP_POINT = 'AVAILABLE_AT_PICKUP_POINT';
    const DELIVERED = 'DELIVERED';
    const DELIVEREDBB = 'DELIVEREDBB';
    const RETOUR = 'RETOUR';
    const PICKEDUP = 'PICKEDUP';
    const UITLEVERING = 'UITLEVERING';
    const UNKNOWN = 'UNKNOWN';
    const MANCO = 'MANCO';
    const NOT_AT_HOME = 'NOT_AT_HOME';
}
