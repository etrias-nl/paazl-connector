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

class GenerateZplLabelsResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $labels = null;

    /**
     * @var labelMetaDataType
     */
    protected $metaData = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var base64Binary      $labels
     * @var labelMetaDataType $metaData
     *
     * @param mixed $error
     * @param mixed $labels
     * @param mixed $metaData
     */
    public function __construct($error, $labels, $metaData)
    {
        $this->error = $error;
        $this->labels = $labels;
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
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param base64Binary $labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

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
