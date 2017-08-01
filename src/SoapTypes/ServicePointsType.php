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
    protected $servicePoint = null;

    /**
     * Constructor.
     *
     * @var servicePoint
     *
     * @param mixed $servicePoint
     */
    public function __construct($servicePoint)
    {
        $this->servicePoint = $servicePoint;
    }

    /**
     * @return servicePoint
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }

    /**
     * @param servicePoint $servicePoint
     *
     * @return $this
     */
    public function setServicePoint($servicePoint)
    {
        $this->servicePoint = $servicePoint;

        return $this;
    }
}
