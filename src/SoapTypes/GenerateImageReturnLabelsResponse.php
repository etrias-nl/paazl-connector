<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class GenerateImageReturnLabelsResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var returnLabelType
     */
    protected $label = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var returnLabelType $label
     */
    public function __construct($error, $label)
    {
        $this->error = $error;
        $this->label = $label;
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
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return returnLabelType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param returnLabelType $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }


}

