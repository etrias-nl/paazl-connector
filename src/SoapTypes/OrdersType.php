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

class OrdersType
{
    /**
     * @var nonNegativeInteger
     */
    protected $page = null;

    /**
     * @var bool
     */
    protected $hasNextPage = null;

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var string
     */
    protected $webshopName = null;

    /**
     * @var Order[]
     */
    protected $order = [];

    /**
     * Constructor.
     *
     * @var nonNegativeInteger
     * @var bool               $hasNextPage
     * @var int                $webshop
     * @var string             $webshopName
     * @var order              $order
     *
     * @param mixed      $page
     * @param mixed      $hasNextPage
     * @param mixed      $webshop
     * @param mixed      $webshopName
     * @param mixed      $order
     * @param null|mixed $orders
     */
    public function __construct(
        $page = null,
        $hasNextPage = null,
        $webshop = null,
        $webshopName = null,
        $orders = null)
    {
        $this->page = $page;
        $this->hasNextPage = $hasNextPage;
        $this->webshop = $webshop;
        $this->webshopName = $webshopName;
        $this->order = $orders;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param nonNegativeInteger $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasNextPage()
    {
        return $this->hasNextPage;
    }

    /**
     * @param bool $hasNextPage
     *
     * @return $this
     */
    public function setHasNextPage($hasNextPage)
    {
        $this->hasNextPage = $hasNextPage;

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
     * @return string
     */
    public function getWebshopName()
    {
        return $this->webshopName;
    }

    /**
     * @param string $webshopName
     *
     * @return $this
     */
    public function setWebshopName($webshopName)
    {
        $this->webshopName = $webshopName;

        return $this;
    }

    /**
     * @return Order[]
     */
    public function getOrders()
    {
        return $this->order;
    }

    /**
     * @param Order[] $order
     *
     * @return $this
     */
    public function setOrders(array $orders)
    {
        $this->order = $orders;

        return $this;
    }
}
