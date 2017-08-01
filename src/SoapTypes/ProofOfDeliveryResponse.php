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

class ProofOfDeliveryResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $signedBy = null;

    /**
     * @var proofOfDeliveryDocumentType
     */
    protected $proofOfDeliveryDocument = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var string                      $signedBy
     * @var proofOfDeliveryDocumentType $proofOfDeliveryDocument
     *
     * @param mixed $error
     * @param mixed $signedBy
     * @param mixed $proofOfDeliveryDocument
     */
    public function __construct($error, $signedBy, $proofOfDeliveryDocument)
    {
        $this->error = $error;
        $this->signedBy = $signedBy;
        $this->proofOfDeliveryDocument = $proofOfDeliveryDocument;
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
    public function getSignedBy()
    {
        return $this->signedBy;
    }

    /**
     * @param string $signedBy
     *
     * @return $this
     */
    public function setSignedBy($signedBy)
    {
        $this->signedBy = $signedBy;

        return $this;
    }

    /**
     * @return proofOfDeliveryDocumentType
     */
    public function getProofOfDeliveryDocument()
    {
        return $this->proofOfDeliveryDocument;
    }

    /**
     * @param proofOfDeliveryDocumentType $proofOfDeliveryDocument
     *
     * @return $this
     */
    public function setProofOfDeliveryDocument($proofOfDeliveryDocument)
    {
        $this->proofOfDeliveryDocument = $proofOfDeliveryDocument;

        return $this;
    }
}
