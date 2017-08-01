<?php

namespace Etrias\PaazlConnector\SoapTypes;

use Etrias\PaazlConnector\Result\PaazlResultInterface;

class ChangeStoresResponseType implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var string $code
     */
    public function __construct($error, $code)
    {
        $this->error = $error;
        $this->code = $code;
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

