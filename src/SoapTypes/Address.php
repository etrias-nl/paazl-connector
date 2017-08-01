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

class Address
{
    /**
     * @var string
     */
    protected $zipcode = null;

    /**
     * @var string
     */
    protected $housenumber = null;

    /**
     * @var string
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $addition = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $housenumber
     * @var string $street
     * @var string $city
     * @var string $addition
     *
     * @param mixed $zipcode
     * @param mixed $housenumber
     * @param mixed $street
     * @param mixed $city
     * @param mixed $addition
     */
    public function __construct($zipcode, $housenumber, $street, $city, $addition)
    {
        $this->zipcode = $zipcode;
        $this->housenumber = $housenumber;
        $this->street = $street;
        $this->city = $city;
        $this->addition = $addition;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * @param string $housenumber
     *
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddition()
    {
        return $this->addition;
    }

    /**
     * @param string $addition
     *
     * @return $this
     */
    public function setAddition($addition)
    {
        $this->addition = $addition;

        return $this;
    }
}
