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

class Store
{
    /**
     * @var string
     */
    protected $storeCode = null;

    /**
     * @var positiveInteger
     */
    protected $quantity = null;

    /**
     * Constructor.
     *
     * @var string
     * @var positiveInteger $quantity
     *
     * @param mixed $storeCode
     * @param mixed $quantity
     */
    public function __construct($storeCode, $quantity)
    {
        $this->storeCode = $storeCode;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * @param string $storeCode
     *
     * @return $this
     */
    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;

        return $this;
    }

    /**
     * @return positiveInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param positiveInteger $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
