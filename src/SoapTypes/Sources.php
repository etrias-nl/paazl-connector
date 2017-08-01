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

class Sources
{
    /**
     * @var source
     */
    protected $source = null;

    /**
     * Constructor.
     *
     * @var source
     */
    public function __construct(array $sources)
    {
        $this->source = $sources;
    }

    /**
     * @return source
     */
    public function getSources()
    {
        return $this->source;
    }

    /**
     * @param source $sources
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->source = $source;

        return $this;
    }
}
