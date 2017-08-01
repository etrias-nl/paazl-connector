<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
     * Constructor.
     *
     * @var returnContractTypeType
     * @var string                 $contract
     *
     * @param mixed $type
     * @param mixed $contract
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
     *
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
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }
}
