<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ReturnContractType
{

    /**
     * @var returnContractTypeType
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $contract = null;

    /**
     * Constructor
     *
     * @var returnContractTypeType $type
     * @var string $contract
     */
    public function __construct($type, $contract)
    {
        $this->type = $type;
        $this->contract = $contract;
    }

    /**
     * @return returnContractTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param returnContractTypeType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
        return $this;
    }


}

