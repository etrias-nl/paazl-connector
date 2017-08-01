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

class BatchStatusOrderType
{
    /**
     * @var batchStatusLabelType
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $reference = null;

    /**
     * Constructor.
     *
     * @var batchStatusLabelType
     * @var string               $reference
     *
     * @param mixed $label
     * @param mixed $reference
     */
    public function __construct($label, $reference)
    {
        $this->label = $label;
        $this->reference = $reference;
    }

    /**
     * @return batchStatusLabelType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param batchStatusLabelType $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }
}
