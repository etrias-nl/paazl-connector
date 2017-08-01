<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class RateResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var rate
     */
    protected $rate = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var rate $rate
     */
    public function __construct($error, $rate)
    {
        $this->error = $error;
        $this->rate = $rate;
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
     * @return rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param rate $rate
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }


}

