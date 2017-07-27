<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class CancelShipmentsRequest implements RequestInterface
{

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var existingLabelType
     */
    protected $label = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var existingLabelType $label
     */
    public function __construct($webshop, $label)
    {
        $this->webshop = $webshop;
        $this->label = $label;
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
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;
        return $this;
    }

    /**
     * @return existingLabelType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param existingLabelType $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }


}

