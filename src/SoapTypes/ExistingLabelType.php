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

class ExistingLabelType
{
    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * Constructor.
     *
     * @var string
     * @var int    $targetWebshop
     * @var string $orderReference
     * @var string $barcode
     *
     * @param mixed $hash
     * @param mixed $targetWebshop
     * @param mixed $orderReference
     * @param mixed $barcode
     */
    public function __construct($hash, $targetWebshop, $orderReference, $barcode)
    {
        $this->hash = $hash;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->barcode = $barcode;
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
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }

    /**
     * @param int $targetWebshop
     *
     * @return $this
     */
    public function setTargetWebshop($targetWebshop)
    {
        $this->targetWebshop = $targetWebshop;

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
}
