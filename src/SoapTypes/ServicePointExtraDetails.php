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

class ServicePointExtraDetails
{
    /**
     * @var string
     */
    protected $pictureUrl = null;

    /**
     * @var string
     */
    protected $locationHints = null;

    /**
     * @var string
     */
    protected $remarks = null;

    /**
     * @var servicePointExtraDetailsStatus
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string                         $locationHints
     * @var string                         $remarks
     * @var servicePointExtraDetailsStatus $status
     *
     * @param mixed $pictureUrl
     * @param mixed $locationHints
     * @param mixed $remarks
     * @param mixed $status
     */
    public function __construct($pictureUrl, $locationHints, $remarks, $status)
    {
        $this->pictureUrl = $pictureUrl;
        $this->locationHints = $locationHints;
        $this->remarks = $remarks;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * @param string $pictureUrl
     *
     * @return $this
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationHints()
    {
        return $this->locationHints;
    }

    /**
     * @param string $locationHints
     *
     * @return $this
     */
    public function setLocationHints($locationHints)
    {
        $this->locationHints = $locationHints;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * @return servicePointExtraDetailsStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param servicePointExtraDetailsStatus $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
