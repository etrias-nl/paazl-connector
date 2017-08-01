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

class OpeningTimes
{
    /**
     * @var time
     */
    protected $time = null;

    /**
     * Constructor.
     *
     * @var time
     *
     * @param mixed $time
     */
    public function __construct($time)
    {
        $this->time = $time;
    }

    /**
     * @return time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param time $time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }
}
