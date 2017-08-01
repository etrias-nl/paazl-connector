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

class ChangeStoreDetailsType extends StoreDetailsType
{
    /**
     * @var string
     */
    protected $hash = null;

    /**
     * Constructor.
     *
     * @param string                 $hash
     * @param string                 $code
     * @param string                 $name
     * @param AddressType            $address
     * @param coordinatesType|null   $coordinates
     * @param businessHoursType|null $businessHours
     */
    public function __construct($hash, $code, $name, AddressType $address, coordinatesType $coordinates = null, businessHoursType $businessHours = null)
    {
        parent::__construct($code, $name, $address, $coordinates = null, $businessHours = null);
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }
}
