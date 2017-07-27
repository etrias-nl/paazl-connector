<?php

namespace Etrias\PaazlConnector\SoapTypes;

class BatchStatusOrderType
{

    /**
     * @var batchStatusLabelType
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $reference = null;

    /**
     * Constructor
     *
     * @var batchStatusLabelType $label
     * @var string $reference
     */
    public function __construct($label, $reference)
    {
        $this->label = $label;
        $this->reference = $reference;
    }

    /**
     * @return batchStatusLabelType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param batchStatusLabelType $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

