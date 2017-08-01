<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GeneratePdfReturnLabelsRequest extends GenerateReturnLabelsType implements RequestInterface
{

    /**
     * @var string
     */
    protected $printer = null;

    /**
     * Constructor
     *
     * @param int $webShop
     * @param returnLabelsOrderType[] $order
     * @var string $printer
     */
    public function __construct($webShop, $order, $printer)
    {
        parent::__construct($webShop, $order);
        $this->printer = $printer;
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
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;
        return $this;
    }


}

