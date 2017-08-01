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

namespace Etrias\PaazlConnector\Services;

use Etrias\PaazlConnector\Client\PaazlClientInterface;

class SecurityService implements SecurityServiceInterface
{
    /**
     * @var PaazlClientInterface
     */
    protected $client;

    /**
     * SecurityService constructor.
     *
     * @param PaazlClientInterface $client
     */
    public function __construct(PaazlClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function getHash($input)
    {
        return sha1($this->client->getWebShopId().$this->client->getPassword().$input);
    }
}
