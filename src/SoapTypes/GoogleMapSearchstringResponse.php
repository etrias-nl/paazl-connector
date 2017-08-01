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

class GoogleMapSearchstringResponse implements PaazlResultInterface
{
    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $searchstring = null;

    /**
     * Constructor.
     *
     * @var errorType
     * @var string    $searchstring
     *
     * @param mixed $error
     * @param mixed $searchstring
     */
    public function __construct($error, $searchstring)
    {
        $this->error = $error;
        $this->searchstring = $searchstring;
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
    public function getSearchstring()
    {
        return $this->searchstring;
    }

    /**
     * @param string $searchstring
     *
     * @return $this
     */
    public function setSearchstring($searchstring)
    {
        $this->searchstring = $searchstring;

        return $this;
    }
}
