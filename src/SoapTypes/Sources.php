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
     * @var source $sources
     */
    public function __construct(array $sources)
    {
        $this->source = $sources;
    }

    /**
     * @return source
     */
    public function getSources()
    {
        return $this->source;
    }

    /**
     * @param source $sources
     * @return $this
     */
    public function setSources($sources)
    {
        $this->source = $source;
        return $this;
    }


}

