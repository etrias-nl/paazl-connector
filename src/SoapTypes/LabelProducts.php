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

class LabelProducts
{
    /**
     * @var labelProduct
     */
    protected $labelProduct = null;

    /**
     * @var labelProductsModeType
     */
    protected $mode = null;

    /**
     * Constructor.
     *
     * @var labelProduct
     * @var labelProductsModeType $mode
     *
     * @param mixed $labelProduct
     * @param mixed $mode
     */
    public function __construct($labelProduct, $mode)
    {
        $this->labelProduct = $labelProduct;
        $this->mode = $mode;
    }

    /**
     * @return labelProduct
     */
    public function getLabelProduct()
    {
        return $this->labelProduct;
    }

    /**
     * @param labelProduct $labelProduct
     *
     * @return $this
     */
    public function setLabelProduct($labelProduct)
    {
        $this->labelProduct = $labelProduct;

        return $this;
    }

    /**
     * @return labelProductsModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param labelProductsModeType $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }
}
