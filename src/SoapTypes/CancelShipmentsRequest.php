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
     * @var existingLabelType[] $label
     */
    public function __construct($webshop, array $labels)
    {
        $this->webshop = $webshop;
        $this->label = $labels;
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
     * @return existingLabelType[]
     */
    public function getLabels()
    {
        return $this->label;
    }

    /**
     * @param existingLabelType[] $labels
     * @return $this
     */
    public function setLabels(array $labels)
    {
        $this->label = $labels;
        return $this;
    }


}

