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

class TimeRangeType
{
    /**
     * @var time
     */
    protected $lowerBound = null;

    /**
     * @var time
     */
    protected $upperBound = null;

    /**
     * Constructor.
     *
     * @var time
     * @var time $upperBound
     *
     * @param mixed $lowerBound
     * @param mixed $upperBound
     */
    public function __construct($lowerBound, $upperBound)
    {
        $this->lowerBound = $lowerBound;
        $this->upperBound = $upperBound;
    }

    /**
     * @return time
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }

    /**
     * @param time $lowerBound
     *
     * @return $this
     */
    public function setLowerBound($lowerBound)
    {
        $this->lowerBound = $lowerBound;

        return $this;
    }

    /**
     * @return time
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }

    /**
     * @param time $upperBound
     *
     * @return $this
     */
    public function setUpperBound($upperBound)
    {
        $this->upperBound = $upperBound;

        return $this;
    }
}
