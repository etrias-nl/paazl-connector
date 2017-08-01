<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\SoapTypes;

use Etrias\PaazlConnector\Result\PaazlResultInterface;

class CheckoutStatusResponse implements PaazlResultInterface
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
     * Constructor.
     *
     * @var errorType
     * @var language     $locale
     * @var anyURI       $callbackUrl
     * @var consignee    $consignee
     * @var delivery     $delivery
     * @var notification $notification
     *
     * @param mixed $error
     * @param mixed $locale
     * @param mixed $callbackUrl
     * @param mixed $consignee
     * @param mixed $delivery
     * @param mixed $notification
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }
}
