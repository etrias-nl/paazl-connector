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

use Phpro\SoapClient\Type\RequestInterface;

class TriggerCarrierRegistrationRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var triggerBarcodeRequestType
     */
    protected $barcodes = null;

    /**
     * Constructor.
     *
     * @var string
     * @var int                       $webshop
     * @var triggerBarcodeRequestType $barcodes
     *
     * @param mixed $hash
     * @param mixed $webshop
     * @param mixed $barcodes
     */
    public function __construct($hash, $webshop, $barcodes)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->barcodes = $barcodes;
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
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
        return $this->webshop;
    }

    /**
     * @param int $webshop
     *
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;

        return $this;
    }

    /**
     * @return triggerBarcodeRequestType
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * @param triggerBarcodeRequestType $barcodes
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->barcodes = $barcodes;

        return $this;
    }
}
