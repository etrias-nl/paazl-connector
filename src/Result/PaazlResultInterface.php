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

namespace Etrias\PaazlConnector\Result;

use Etrias\PaazlConnector\SoapTypes\ErrorType;
use Phpro\SoapClient\Type\ResultInterface;

interface PaazlResultInterface extends ResultInterface
{
    /**
     * @return ErrorType
     */
    public function getError();
}
