<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class GenerateExtraPdfReturnLabelResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $label = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var base64Binary $label
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
     * @return base64Binary
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param base64Binary $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }


}

