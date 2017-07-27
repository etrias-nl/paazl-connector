<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ChangeStoreDetailsType
{

    /**
     * @var string
     */
    protected $hash = null;

    /**
     * Constructor
     *
     * @var string $hash
     */
    public function __construct($hash)
    {
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

