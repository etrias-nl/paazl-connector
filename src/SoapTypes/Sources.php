<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Sources
{

    /**
     * @var source
     */
    protected $source = null;

    /**
     * Constructor
     *
     * @var source $source
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    /**
     * @return source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param source $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }


}

