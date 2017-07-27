<?php

namespace Etrias\PaazlConnector\SoapTypes;

class DeleteStoreType
{

    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var string $code
     */
    public function __construct($hash, $code)
    {
        $this->hash = $hash;
        $this->code = $code;
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

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}

