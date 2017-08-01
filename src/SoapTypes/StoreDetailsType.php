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

class StoreDetailsType
{
    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var addressType
     */
    protected $address = null;

    /**
     * @var coordinatesType
     */
    protected $coordinates = null;

    /**
     * @var businessHoursType
     */
    protected $businessHours = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string            $name
     * @var addressType       $address
     * @var coordinatesType   $coordinates
     * @var businessHoursType $businessHours
     *
     * @param mixed $code
     * @param mixed $name
     * @param mixed $address
     */
    public function __construct($code, $name, $address, coordinatesType $coordinates = null, businessHoursType $businessHours = null)
    {
        $this->code = $code;
        $this->name = $name;
        $this->address = $address;
        $this->coordinates = $coordinates;
        $this->businessHours = $businessHours;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return addressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param addressType $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return coordinatesType
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param coordinatesType $coordinates
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return businessHoursType
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * @param businessHoursType $businessHours
     *
     * @return $this
     */
    public function setBusinessHours($businessHours)
    {
        $this->businessHours = $businessHours;

        return $this;
    }
}
