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

class OrderSaveResponseType implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $succes = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var string    $succes
     *
     * @param mixed $error
     * @param mixed $succes
     */
    public function __construct($error, $succes)
    {
        $this->error = $error;
        $this->succes = $succes;
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
     * @return string
     */
    public function getSucces()
    {
        return $this->succes;
    }

    /**
     * @param string $succes
     *
     * @return $this
     */
    public function setSucces($succes)
    {
        $this->succes = $succes;

        return $this;
    }
}
