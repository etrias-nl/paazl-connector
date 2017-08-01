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

class Rate
{
    /**
     * @var deliveryTypeType
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var float
     */
    protected $rate = null;

    /**
     * @var float
     */
    protected $rateDiscount = null;

    /**
     * @var nonNegativeIntegerRangeType
     */
    protected $transitDaysRange = null;

    /**
     * Constructor.
     *
     * @var deliveryTypeType
     * @var string                      $distributor
     * @var string                      $shippingOption
     * @var string                      $description
     * @var float                       $rate
     * @var float                       $rateDiscount
     * @var nonNegativeIntegerRangeType $transitDaysRange
     *
     * @param mixed $type
     * @param mixed $distributor
     * @param mixed $shippingOption
     * @param mixed $description
     * @param mixed $rate
     * @param mixed $rateDiscount
     * @param mixed $transitDaysRange
     */
    public function __construct($type, $distributor, $shippingOption, $description, $rate, $rateDiscount, $transitDaysRange)
    {
        $this->type = $type;
        $this->distributor = $distributor;
        $this->shippingOption = $shippingOption;
        $this->description = $description;
        $this->rate = $rate;
        $this->rateDiscount = $rateDiscount;
        $this->transitDaysRange = $transitDaysRange;
    }

    /**
     * @return deliveryTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param deliveryTypeType $type
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
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param string $shippingOption
     *
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;

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

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return float
     */
    public function getRateDiscount()
    {
        return $this->rateDiscount;
    }

    /**
     * @param float $rateDiscount
     *
     * @return $this
     */
    public function setRateDiscount($rateDiscount)
    {
        $this->rateDiscount = $rateDiscount;

        return $this;
    }

    /**
     * @return nonNegativeIntegerRangeType
     */
    public function getTransitDaysRange()
    {
        return $this->transitDaysRange;
    }

    /**
     * @param nonNegativeIntegerRangeType $transitDaysRange
     *
     * @return $this
     */
    public function setTransitDaysRange($transitDaysRange)
    {
        $this->transitDaysRange = $transitDaysRange;

        return $this;
    }
}
