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

class ShippingOptionDetailsType
{
    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $contract = null;

    /**
     * @var string
     */
    protected $option = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $contract
     * @var string $option
     * @var string $description
     *
     * @param mixed $distributor
     * @param mixed $contract
     * @param mixed $option
     * @param mixed $description
     */
    public function __construct($distributor, $contract, $option, $description)
    {
        $this->distributor = $distributor;
        $this->contract = $contract;
        $this->option = $option;
        $this->description = $description;
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
     *
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

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;

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
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
