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

class GenerateAdditionalPdfDocumentResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var additionalDocumentContainerType
     */
    protected $document = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var additionalDocumentContainerType $document
     *
     * @param mixed $error
     * @param mixed $document
     */
    public function __construct($error, $document)
    {
        $this->error = $error;
        $this->document = $document;
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
     * @return additionalDocumentContainerType
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param additionalDocumentContainerType $document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }
}
