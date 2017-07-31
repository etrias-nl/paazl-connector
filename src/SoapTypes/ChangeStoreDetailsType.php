<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ChangeStoreDetailsType extends StoreDetailsType
{

    /**
     * @var string
     */
    protected $hash = null;

    /**
     * Constructor
     *
     * @param string $hash
     * @param string $code
     * @param string $name
     * @param AddressType $address
     * @param coordinatesType|null $coordinates
     * @param businessHoursType|null $businessHours
     */
    public function __construct($hash, $code, $name, AddressType $address, coordinatesType $coordinates = null, businessHoursType $businessHours = null)
    {
        parent::__construct($code, $name, $address, $coordinates = null, $businessHours = null);
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }


}

