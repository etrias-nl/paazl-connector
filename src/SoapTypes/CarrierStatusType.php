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

class CarrierStatusType
{
    /**
     * @var string
     */
    protected $info = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $postalcode = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var string
     */
    protected $proofOfDelivery = null;

    /**
     * @var \DateTime
     */
    protected $date = null;

    /**
     * @var time
     */
    protected $time = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string    $type
     * @var string    $code
     * @var string    $description
     * @var string    $city
     * @var string    $postalcode
     * @var string    $country
     * @var string    $proofOfDelivery
     * @var \DateTime $date
     * @var time      $time
     *
     * @param mixed $info
     * @param mixed $type
     * @param mixed $code
     * @param mixed $description
     * @param mixed $city
     * @param mixed $postalcode
     * @param mixed $country
     * @param mixed $proofOfDelivery
     * @param mixed $date
     * @param mixed $time
     */
    public function __construct($info, $type, $code, $description, $city, $postalcode, $country, $proofOfDelivery, $date, $time)
    {
        $this->info = $info;
        $this->type = $type;
        $this->code = $code;
        $this->description = $description;
        $this->city = $city;
        $this->postalcode = $postalcode;
        $this->country = $country;
        $this->proofOfDelivery = $proofOfDelivery;
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param string $info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * @param string $postalcode
     *
     * @return $this
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getProofOfDelivery()
    {
        return $this->proofOfDelivery;
    }

    /**
     * @param string $proofOfDelivery
     *
     * @return $this
     */
    public function setProofOfDelivery($proofOfDelivery)
    {
        $this->proofOfDelivery = $proofOfDelivery;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
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
