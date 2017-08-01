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

class OrderStatusType
{
    const LABELS_NOT_CREATED = 'LABELS_NOT_CREATED';
    const LABELS_CREATED = 'LABELS_CREATED';
    const PREREGISTERED = 'PREREGISTERED';
    const READY_TO_POST = 'READY_TO_POST';
    const SCANNED = 'SCANNED';
    const DELIVERED = 'DELIVERED';
    const DELIVEREDBB = 'DELIVEREDBB';
    const PICKEDUP = 'PICKEDUP';
}
