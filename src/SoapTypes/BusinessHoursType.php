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

class BusinessHoursType
{
    /**
     * @var dayType
     */
    protected $day = null;

    /**
     * @var time
     */
    protected $from = null;

    /**
     * @var time
     */
    protected $until = null;

    /**
     * Constructor.
     *
     * @var dayType
     * @var time    $from
     * @var time    $until
     *
     * @param null|mixed $day
     * @param null|mixed $from
     * @param null|mixed $until
     */
    public function __construct($day = null, $from = null, $until = null)
    {
        $this->day = $day;
        $this->from = $from;
        $this->until = $until;
    }

    /**
     * @return dayType
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param dayType $day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return time
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param time $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return time
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param time $until
     *
     * @return $this
     */
    public function setUntil($until)
    {
        $this->until = $until;

        return $this;
    }
}
