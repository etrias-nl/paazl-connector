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

class ListStoresResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var storeDetailsType
     */
    protected $store = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var storeDetailsType $store
     *
     * @param mixed $error
     * @param mixed $store
     */
    public function __construct($error, $store)
    {
        $this->error = $error;
        $this->store = $store;
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
     * @return storeDetailsType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param storeDetailsType $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;

        return $this;
    }
}
