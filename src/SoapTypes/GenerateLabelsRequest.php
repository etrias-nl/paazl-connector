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

class GenerateLabelsRequest implements RequestInterface
{
    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var labelFormatType
     */
    protected $labelFormat = null;

    /**
     * @var printerType
     */
    protected $printer = null;

    /**
     * @var orderType
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
     * @var labelFormatType $labelFormat
     * @var printerType     $printer
     * @var orderType       $order
     * @var bool            $includeMetaData
     *
     * @param mixed $webshop
     * @param mixed $labelFormat
     * @param mixed $printer
     * @param mixed $order
     * @param mixed $includeMetaData
     */
    public function __construct($webshop, $labelFormat, $printer, $order, $includeMetaData)
    {
        $this->webshop = $webshop;
        $this->labelFormat = $labelFormat;
        $this->printer = $printer;
        $this->order = $order;
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
     * @return labelFormatType
     */
    public function getLabelFormat()
    {
        return $this->labelFormat;
    }

    /**
     * @param labelFormatType $labelFormat
     *
     * @return $this
     */
    public function setLabelFormat($labelFormat)
    {
        $this->labelFormat = $labelFormat;

        return $this;
    }

    /**
     * @return printerType
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * @param printerType $printer
     *
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;

        return $this;
    }

    /**
     * @return orderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param orderType $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

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
