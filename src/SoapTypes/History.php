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

class History
{
    /**
     * @var carrierStatusType
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @var carrierStatusType
     *
     * @param mixed $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return carrierStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param carrierStatusType $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
