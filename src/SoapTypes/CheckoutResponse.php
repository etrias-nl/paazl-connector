<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class CheckoutResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var anyURI
     */
    protected $url = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var anyURI $url
     */
    public function __construct($error, $url)
    {
        $this->error = $error;
        $this->url = $url;
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
     * @return anyURI
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param anyURI $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

