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

class ReturnLabelType
{
    /**
     * @var labelType
     */
    protected $_ = null;

    /**
     * @var string
     */
    protected $returnOrderReference = null;

    /**
     * Constructor.
     *
     * @var labelType
     * @var string    $returnOrderReference
     *
     * @param mixed $_
     * @param mixed $returnOrderReference
     */
    public function __construct($_, $returnOrderReference)
    {
        $this->_ = $_;
        $this->returnOrderReference = $returnOrderReference;
    }

    /**
     * @return labelType
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param labelType $_
     *
     * @return $this
     */
    public function set_($_)
    {
        $this->_ = $_;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnOrderReference()
    {
        return $this->returnOrderReference;
    }

    /**
     * @param string $returnOrderReference
     *
     * @return $this
     */
    public function setReturnOrderReference($returnOrderReference)
    {
        $this->returnOrderReference = $returnOrderReference;

        return $this;
    }
}
