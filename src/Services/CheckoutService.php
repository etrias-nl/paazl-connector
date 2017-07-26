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

use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\BaseCheckoutRequestType;
use Etrias\PaazlConnector\StructType\CheckoutResponse;
use Etrias\PaazlConnector\StructType\CheckoutStatusResponse;

class CheckoutService
{
    use Processor;

    /**
     * @var SecurityServiceInterface
     */
    protected $securityService;
    /**
     * @var GeneralServiceType
     */
    protected $generalServiceType;

    /**
     * DocumentService constructor.
     *
     * @param GeneralServiceType       $generalServiceType
     * @param SecurityServiceInterface $securityService
     */
    public function __construct(GeneralServiceType $generalServiceType, SecurityServiceInterface $securityService)
    {
        $this->securityService = $securityService;
        $this->generalServiceType = $generalServiceType;
    }

    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return CheckoutResponse
     */
    public function getCheckoutUrl($orderReference, $targetWebShop = null)
    {
        $request = new BaseCheckoutRequestType(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->generalServiceType->checkout($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return CheckoutStatusResponse
     */
    public function getCheckoutStatus($orderReference, $targetWebShop = null)
    {
        $request = new BaseCheckoutRequestType(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->generalServiceType->checkoutStatus($request);

        return $this->processResponse($response, $this->generalServiceType);
    }
}
