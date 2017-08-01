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

class AvailableStores
{
    /**
     * @var store
     */
    protected $store = null;

    /**
     * Constructor.
     *
     * @var store
     *
     * @param mixed $store
     */
    public function __construct($store)
    {
        $this->store = $store;
    }

    /**
     * @return store
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param store $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;

        return $this;
    }
}
