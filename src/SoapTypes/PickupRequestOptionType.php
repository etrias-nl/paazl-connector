<?php

namespace Etrias\PaazlConnector\SoapTypes;

class PickupRequestOptionType
{

    /**
     * @var string
     */
    protected $identifier = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $option = null;

    /**
     * Constructor
     *
     * @var string $identifier
     * @var string $description
     * @var string $distributor
     * @var string $option
     */
    public function __construct($identifier, $description, $distributor, $option)
    {
        $this->identifier = $identifier;
        $this->description = $description;
        $this->distributor = $distributor;
        $this->option = $option;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }


}

