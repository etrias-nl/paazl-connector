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

class NonNegativeIntegerRangeType
{
    /**
     * @var nonNegativeInteger
     */
    protected $lowerBound = null;

    /**
     * @var nonNegativeInteger
     */
    protected $upperBound = null;

    /**
     * Constructor.
     *
     * @var nonNegativeInteger
     * @var nonNegativeInteger $upperBound
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
     * @return nonNegativeInteger
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }

    /**
     * @param nonNegativeInteger $lowerBound
     *
     * @return $this
     */
    public function setLowerBound($lowerBound)
    {
        $this->lowerBound = $lowerBound;

        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }

    /**
     * @param nonNegativeInteger $upperBound
     *
     * @return $this
     */
    public function setUpperBound($upperBound)
    {
        $this->upperBound = $upperBound;

        return $this;
    }
}
