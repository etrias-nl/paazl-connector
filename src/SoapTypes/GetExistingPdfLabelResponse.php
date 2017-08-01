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

class GetExistingPdfLabelResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $label = null;

    /**
     * @var labelMetaDataType
     */
    protected $metaData = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var base64Binary      $label
     * @var labelMetaDataType $metaData
     *
     * @param mixed $error
     * @param mixed $label
     * @param mixed $metaData
     */
    public function __construct($error, $label, $metaData)
    {
        $this->error = $error;
        $this->label = $label;
        $this->metaData = $metaData;
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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param base64Binary $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return labelMetaDataType
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * @param labelMetaDataType $metaData
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;

        return $this;
    }
}
