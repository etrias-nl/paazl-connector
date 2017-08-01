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

use Etrias\PaazlConnector\Result\PaazlResultInterface;

class DeliveryEstimateResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var disambiguationCandi\DateTimeType
     */
    protected $disambiguationCandidate = null;

    /**
     * @var deliveryEstimateType
     */
    protected $deliveryEstimate = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var disambiguationCandi\DateTimeType $disambiguationCandidate
     * @var deliveryEstimateType             $deliveryEstimate
     *
     * @param mixed $error
     * @param mixed $disambiguationCandidate
     * @param mixed $deliveryEstimate
     */
    public function __construct($error, $disambiguationCandidate, $deliveryEstimate)
    {
        $this->error = $error;
        $this->disambiguationCandidate = $disambiguationCandidate;
        $this->deliveryEstimate = $deliveryEstimate;
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
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return disambiguationCandi\DateTimeType
     */
    public function getDisambiguationCandidate()
    {
        return $this->disambiguationCandidate;
    }

    /**
     * @param disambiguationCandi\DateTimeType $disambiguationCandidate
     *
     * @return $this
     */
    public function setDisambiguationCandidate($disambiguationCandidate)
    {
        $this->disambiguationCandidate = $disambiguationCandidate;

        return $this;
    }

    /**
     * @return deliveryEstimateType
     */
    public function getDeliveryEstimate()
    {
        return $this->deliveryEstimate;
    }

    /**
     * @param deliveryEstimateType $deliveryEstimate
     *
     * @return $this
     */
    public function setDeliveryEstimate($deliveryEstimate)
    {
        $this->deliveryEstimate = $deliveryEstimate;

        return $this;
    }
}
