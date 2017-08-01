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

class ProofOfDeliveryDocumentType
{
    /**
     * @var documentType
     */
    protected $documentType = null;

    /**
     * @var base64Binary
     */
    protected $document = null;

    /**
     * Constructor.
     *
     * @var documentType
     * @var base64Binary $document
     *
     * @param mixed $documentType
     * @param mixed $document
     */
    public function __construct($documentType, $document)
    {
        $this->documentType = $documentType;
        $this->document = $document;
    }

    /**
     * @return documentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param documentType $documentType
     *
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param base64Binary $document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }
}
