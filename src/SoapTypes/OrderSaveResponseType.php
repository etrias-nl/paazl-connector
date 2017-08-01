<?php

namespace Etrias\PaazlConnector\SoapTypes;

use Etrias\PaazlConnector\Result\PaazlResultInterface;

class OrderSaveResponseType implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $succes = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var string $succes
     */
    public function __construct($error, $succes)
    {
        $this->error = $error;
        $this->succes = $succes;
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
     * @return string
     */
    public function getSucces()
    {
        return $this->succes;
    }

    /**
     * @param string $succes
     * @return $this
     */
    public function setSucces($succes)
    {
        $this->succes = $succes;
        return $this;
    }


}

