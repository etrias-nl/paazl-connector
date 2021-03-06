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

class DeleteStoresRequest implements RequestInterface
{
    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var deleteStoreType
     */
    protected $store = null;

    /**
     * Constructor.
     *
     * @var int
     * @var int               $targetWebshop
     * @var deleteStoreType[] $store
     *
     * @param mixed $webshop
     * @param mixed $targetWebshop
     */
    public function __construct($webshop, $targetWebshop, array $stores)
    {
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->store = $stores;
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
     * @return deleteStoreType[]
     */
    public function getStores()
    {
        return $this->store;
    }

    /**
     * @param deleteStoreType[] $store
     *
     * @return $this
     */
    public function setStores(array $store)
    {
        $this->store = $store;

        return $this;
    }
}
