<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class AddressResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var address
     */
    protected $address = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var address $address
     */
    public function __construct($error, $address)
    {
        $this->error = $error;
        $this->address = $address;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param errorType $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}

