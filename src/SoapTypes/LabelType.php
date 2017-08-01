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

class LabelType
{
    /**
     * @var base64Binary
     */
    protected $_ = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var string
     */
    protected $trackingNumber = null;

    /**
     * @var string
     */
    protected $batch = null;

    /**
     * Constructor.
     *
     * @var base64Binary
     * @var string       $orderReference
     * @var string       $barcode
     * @var string       $trackingNumber
     * @var string       $batch
     *
     * @param mixed $_
     * @param mixed $orderReference
     * @param mixed $barcode
     * @param mixed $trackingNumber
     * @param mixed $batch
     */
    public function __construct($_, $orderReference, $barcode, $trackingNumber, $batch)
    {
        $this->_ = $_;
        $this->orderReference = $orderReference;
        $this->barcode = $barcode;
        $this->trackingNumber = $trackingNumber;
        $this->batch = $batch;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param base64Binary $_
     *
     * @return $this
     */
    public function set_($_)
    {
        $this->_ = $_;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $batch
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }
}
