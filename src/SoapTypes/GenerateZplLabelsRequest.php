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

class GenerateZplLabelsRequest implements RequestInterface
{
    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var string
     */
    protected $printer = null;

    /**
     * @var orderType[]
     */
    protected $order = null;

    /**
     * @var bool
     */
    protected $includeMetaData = null;

    /**
     * Constructor.
     *
     * @var int
     * @var printerType $printer
     * @var orderType[] $order
     * @var bool        $includeMetaData
     *
     * @param mixed $webshop
     * @param mixed $printer
     * @param mixed $includeMetaData
     */
    public function __construct($webshop, $printer, array $orders, $includeMetaData)
    {
        $this->webshop = $webshop;
        $this->printer = $printer;
        $this->order = $orders;
        $this->includeMetaData = $includeMetaData;
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
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * @param string $printer
     *
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;

        return $this;
    }

    /**
     * @return orderType[]
     */
    public function getOrders()
    {
        return $this->order;
    }

    /**
     * @param orderType[] $orders
     *
     * @return $this
     */
    public function setOrders(array $orders)
    {
        $this->order = $orders;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->includeMetaData;
    }

    /**
     * @param bool $includeMetaData
     *
     * @return $this
     */
    public function setIncludeMetaData($includeMetaData)
    {
        $this->includeMetaData = $includeMetaData;

        return $this;
    }
}
