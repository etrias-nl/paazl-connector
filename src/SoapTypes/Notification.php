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

class Notification
{
    /**
     * @var string
     */
    protected $emailAddress = null;

    /**
     * @var string
     */
    protected $phoneNumber = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $phoneNumber
     *
     * @param mixed $emailAddress
     * @param mixed $phoneNumber
     */
    public function __construct($emailAddress, $phoneNumber)
    {
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
