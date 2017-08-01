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

class GeneratePdfCustomsDocumentsResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $documents = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var base64Binary $documents
     *
     * @param mixed $error
     * @param mixed $documents
     */
    public function __construct($error, $documents)
    {
        $this->error = $error;
        $this->documents = $documents;
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
     * @return base64Binary
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param base64Binary $documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }
}
