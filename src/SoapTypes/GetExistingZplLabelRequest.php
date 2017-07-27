<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GetExistingZplLabelRequest implements RequestInterface
{

    /**
     * @var printerType
     */
    protected $printer = null;

    /**
     * Constructor
     *
     * @var printerType $printer
     */
    public function __construct($printer)
    {
        $this->printer = $printer;
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
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;
        return $this;
    }


}

