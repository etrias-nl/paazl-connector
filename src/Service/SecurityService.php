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

namespace Etrias\PaazlConnector\Service;

use Etrias\PaazlConnector\SoapClient;

class SecurityService implements SecurityServiceInterface
{
    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * SecurityService constructor.
     *
     * @param SoapClient $soapClient
     */
    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * {@inheritdoc}
     */
    public function getHash($input)
    {
        return sha1($this->soapClient->getWebShopId().$this->soapClient->getPassword().$input);
    }
}
