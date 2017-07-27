<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class DeleteOrderResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $success = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var string $success
     */
    public function __construct($error, $success)
    {
        $this->error = $error;
        $this->success = $success;
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
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param string $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }


}

