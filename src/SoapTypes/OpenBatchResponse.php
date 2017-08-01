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

class OpenBatchResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $batch = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var string    $batch
     *
     * @param mixed $error
     * @param mixed $batch
     */
    public function __construct($error, $batch)
    {
        $this->error = $error;
        $this->batch = $batch;
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
}
