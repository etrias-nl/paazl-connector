<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class CheckoutStatusResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var language
     */
    protected $locale = null;

    /**
     * @var anyURI
     */
    protected $callbackUrl = null;

    /**
     * @var consignee
     */
    protected $consignee = null;

    /**
     * @var delivery
     */
    protected $delivery = null;

    /**
     * @var notification
     */
    protected $notification = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var language $locale
     * @var anyURI $callbackUrl
     * @var consignee $consignee
     * @var delivery $delivery
     * @var notification $notification
     */
    public function __construct($error, $locale, $callbackUrl, $consignee, $delivery, $notification)
    {
        $this->error = $error;
        $this->locale = $locale;
        $this->callbackUrl = $callbackUrl;
        $this->consignee = $consignee;
        $this->delivery = $delivery;
        $this->notification = $notification;
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
     * @return language
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param language $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return anyURI
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param anyURI $callbackUrl
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @return consignee
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * @param consignee $consignee
     * @return $this
     */
    public function setConsignee($consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }

    /**
     * @return delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param delivery $delivery
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @return notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param notification $notification
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
        return $this;
    }


}

