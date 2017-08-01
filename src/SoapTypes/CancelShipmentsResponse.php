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

class CancelShipmentsResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var labelResponseType
     */
    protected $label = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var labelResponseType $label
     *
     * @param mixed $error
     * @param mixed $label
     */
    public function __construct($error, $label)
    {
        $this->error = $error;
        $this->label = $label;
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
     * @return labelResponseType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param labelResponseType $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}
