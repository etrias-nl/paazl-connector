<?php

namespace Etrias\PaazlConnector\SoapTypes;

class GetExistingLabelsType
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
     * @var bool
     */
    protected $includeMetaData = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var existingLabelType $label
     * @var bool $includeMetaData
     */
    public function __construct($webshop, $label, $includeMetaData)
    {
        $this->webshop = $webshop;
        $this->label = $label;
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

    /**
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->includeMetaData;
    }

    /**
     * @param bool $includeMetaData
     * @return $this
     */
    public function setIncludeMetaData($includeMetaData)
    {
        $this->includeMetaData = $includeMetaData;
        return $this;
    }


}

