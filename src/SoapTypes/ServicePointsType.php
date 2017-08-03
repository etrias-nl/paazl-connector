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

class ServicePointsType
{
    /**
     * @var servicePoint
     */
    protected $servicePoint = [];

    /**
     * Constructor.
     *
     * @var servicePoint
     *
     * @param servicePoint[] $servicePoints
     */
    public function __construct(array $servicePoints)
    {
        $this->servicePoint = $servicePoints;
    }

    /**
     * @return servicePoint[]
     */
    public function getServicePoints()
    {
        return $this->servicePoint;
    }

    /**
     * @param servicePoint[] $servicePoints
     *
     * @return $this
     */
    public function setServicePoint($servicePoints)
    {
        $this->servicePoint = $servicePoints;

        return $this;
    }
}
