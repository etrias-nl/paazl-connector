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

class TriggerBarcodeResponseType
{
    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var triggerResponseStatus
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $identifier = null;

    /**
     * Constructor.
     *
     * @var string
     * @var triggerResponseStatus $status
     * @var string                $identifier
     *
     * @param mixed $barcode
     * @param mixed $status
     * @param mixed $identifier
     */
    public function __construct($barcode, $status, $identifier)
    {
        $this->barcode = $barcode;
        $this->status = $status;
        $this->identifier = $identifier;
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
     * @return triggerResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param triggerResponseStatus $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }
}
