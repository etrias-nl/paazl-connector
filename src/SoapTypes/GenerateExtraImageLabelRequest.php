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

use Phpro\SoapClient\Type\RequestInterface;

class GenerateExtraImageLabelRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var labelProducts
     */
    protected $labelProducts = null;

    /**
     * @var string
     */
    protected $batch = null;

    /**
     * @var bool
     */
    protected $includeMetaData = null;

    /**
     * Constructor.
     *
     * @var string
     * @var int           $webshop
     * @var int           $targetWebshop
     * @var string        $orderReference
     * @var labelProducts $labelProducts
     * @var string        $batch
     * @var bool          $includeMetaData
     *
     * @param mixed $hash
     * @param mixed $webshop
     * @param mixed $targetWebshop
     * @param mixed $orderReference
     * @param mixed $labelProducts
     * @param mixed $batch
     * @param mixed $includeMetaData
     */
    public function __construct($hash, $webshop, $targetWebshop, $orderReference, $labelProducts, $batch, $includeMetaData)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->labelProducts = $labelProducts;
        $this->batch = $batch;
        $this->includeMetaData = $includeMetaData;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
        return $this->webshop;
    }

    /**
     * @param int $webshop
     *
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;

        return $this;
    }

    /**
     * @return int
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }

    /**
     * @param int $targetWebshop
     *
     * @return $this
     */
    public function setTargetWebshop($targetWebshop)
    {
        $this->targetWebshop = $targetWebshop;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * @return labelProducts
     */
    public function getLabelProducts()
    {
        return $this->labelProducts;
    }

    /**
     * @param labelProducts $labelProducts
     *
     * @return $this
     */
    public function setLabelProducts($labelProducts)
    {
        $this->labelProducts = $labelProducts;

        return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $batch
     *
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->includeMetaData;
    }

    /**
     * @param bool $includeMetaData
     *
     * @return $this
     */
    public function setIncludeMetaData($includeMetaData)
    {
        $this->includeMetaData = $includeMetaData;

        return $this;
    }
}
