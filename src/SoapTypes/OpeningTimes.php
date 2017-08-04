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
     * @var Time
     */
    protected $time = [];

    /**
     * Constructor.
     *
     * @var Time
     *
     * @param Time[] $time
     */
    public function __construct(array $times = [])
    {
        $this->time = $times;
    }

    /**
     * @return Time[]
     */
    public function getTimes()
    {
        return $this->time;
    }

    /**
     * @param Time[] $times
     *
     * @return $this
     */
    public function setTimes($times)
    {
        $this->time = $times;

        return $this;
    }
}
