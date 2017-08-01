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

class GenerateShippingManifestResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $shippingManifest = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var base64Binary $shippingManifest
     *
     * @param mixed $error
     * @param mixed $shippingManifest
     */
    public function __construct($error, $shippingManifest)
    {
        $this->error = $error;
        $this->shippingManifest = $shippingManifest;
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
    public function getShippingManifest()
    {
        return $this->shippingManifest;
    }

    /**
     * @param base64Binary $shippingManifest
     *
     * @return $this
     */
    public function setShippingManifest($shippingManifest)
    {
        $this->shippingManifest = $shippingManifest;

        return $this;
    }
}
