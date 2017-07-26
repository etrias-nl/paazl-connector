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

namespace Etrias\PaazlConnector;

use Etrias\PaazlConnector\Exceptions\AmbiguousDeliveryEstimateRequestException;
use Etrias\PaazlConnector\Exceptions\CannotCancelPickupException;
use Etrias\PaazlConnector\Exceptions\DeliveryDateModuleInactiveException;
use Etrias\PaazlConnector\Exceptions\DistributorException;
use Etrias\PaazlConnector\Exceptions\IncorrectAssuredAmountException;
use Etrias\PaazlConnector\Exceptions\IncorrectHashException;
use Etrias\PaazlConnector\Exceptions\IncorrectMaximumLabelAmountException;
use Etrias\PaazlConnector\Exceptions\IncorrectNotificationServiceException;
use Etrias\PaazlConnector\Exceptions\IncorrectZipCodeHouseNumberException;
use Etrias\PaazlConnector\Exceptions\InvalidCustomsValueException;
use Etrias\PaazlConnector\Exceptions\InvalidDateException;
use Etrias\PaazlConnector\Exceptions\InvalidDateRangeException;
use Etrias\PaazlConnector\Exceptions\InvalidDestinationException;
use Etrias\PaazlConnector\Exceptions\InvalidDistributorException;
use Etrias\PaazlConnector\Exceptions\InvalidLicenseKeyException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingChangedSinceDateException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingPickupWindowException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingServicePointAccountNumberException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingServicePointCodeException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingShippingOptionException;
use Etrias\PaazlConnector\Exceptions\InvalidProductDefinitionException;
use Etrias\PaazlConnector\Exceptions\LabelAlreadyGeneratedException;
use Etrias\PaazlConnector\Exceptions\MissingAssuredAmountException;
use Etrias\PaazlConnector\Exceptions\MissingBarcodeException;
use Etrias\PaazlConnector\Exceptions\MissingDescriptionException;
use Etrias\PaazlConnector\Exceptions\MissingEmailException;
use Etrias\PaazlConnector\Exceptions\MissingParameterException;
use Etrias\PaazlConnector\Exceptions\MissingPermissionException;
use Etrias\PaazlConnector\Exceptions\MissingTelephoneNumberDPDException;
use Etrias\PaazlConnector\Exceptions\NoCheckoutSessionAvailableException;
use Etrias\PaazlConnector\Exceptions\NoCompatibleOpenShipmentBatchAvailableException;
use Etrias\PaazlConnector\Exceptions\NoDeliveryEstimatesAvailableException;
use Etrias\PaazlConnector\Exceptions\NoPackageCountForPackageContentException;
use Etrias\PaazlConnector\Exceptions\NoPickupRequestOptionsAvailableException;
use Etrias\PaazlConnector\Exceptions\NoShippingOptionsAvailableAfterFilterException;
use Etrias\PaazlConnector\Exceptions\NoShippingOptionsAvailableException;
use Etrias\PaazlConnector\Exceptions\NoSuchBarcodeException;
use Etrias\PaazlConnector\Exceptions\NoSuchDistributorException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestOptionException;
use Etrias\PaazlConnector\Exceptions\NoSuchShipmentBatchException;
use Etrias\PaazlConnector\Exceptions\NotAvailableProofOfDeliveryDocumentException;
use Etrias\PaazlConnector\Exceptions\NoTotalAmountException;
use Etrias\PaazlConnector\Exceptions\OrderCannotBeChangedException;
use Etrias\PaazlConnector\Exceptions\OrderChangedByConcurrentRequestException;
use Etrias\PaazlConnector\Exceptions\OrderContainsErrorsException;
use Etrias\PaazlConnector\Exceptions\PaazlException;
use Etrias\PaazlConnector\Exceptions\PickupContainsErrorsException;
use Etrias\PaazlConnector\Exceptions\ReferenceAlreadyExistsException;
use Etrias\PaazlConnector\Exceptions\ShipmentBatchAlreadyClosedException;
use Etrias\PaazlConnector\Exceptions\TotalAmountWrongFormatException;
use Etrias\PaazlConnector\Exceptions\UnknownCountryCodeException;
use Etrias\PaazlConnector\Exceptions\UnknownReferenceException;
use Etrias\PaazlConnector\Exceptions\UnknownStatusException;
use Etrias\PaazlConnector\Exceptions\UnknownWebShopIdException;
use Etrias\PaazlConnector\Exceptions\UnsupportedDatePreferenceException;
use Etrias\PaazlConnector\Exceptions\UnsupportedOperationException;
use Etrias\PaazlConnector\Exceptions\UpstreamServerException;
use Etrias\PaazlConnector\Exceptions\WeightIsZeroException;

/**
 * Class which returns the class map definition.
 */
class ExceptionMap
{
    /**
     * Returns the mapping between the error codes and exception classes.
     *
     * @return string[]
     */
    public static function get()
    {
        return [
            '1000' => IncorrectHashException::class,
            '1001' => UnknownWebShopIdException::class,
            '1002' => UnknownReferenceException::class,
            '1003' => ReferenceAlreadyExistsException::class,
            '1004' => IncorrectZipCodeHouseNumberException::class,
            '1005' => UnknownStatusException::class,
            '1006' => NoTotalAmountException::class,
            '1007' => TotalAmountWrongFormatException::class,
            '1008' => UnknownCountryCodeException::class,
            '1009' => MissingAssuredAmountException::class,
            '1010' => IncorrectAssuredAmountException::class,
            '1011' => IncorrectMaximumLabelAmountException::class,
            '1012' => IncorrectNotificationServiceException::class,
            '1013' => NoShippingOptionsAvailableException::class,
            '1014' => MissingTelephoneNumberDPDException::class,
            '1015' => InvalidCustomsValueException::class,
            '1016' => DistributorException::class,
            '1017' => InvalidProductDefinitionException::class,
            '1018' => UnsupportedDatePreferenceException::class,
            '1019' => InvalidDateException::class,
            '1020' => LabelAlreadyGeneratedException::class,
            '1021' => WeightIsZeroException::class,
            '1022' => MissingDescriptionException::class,
            '1023' => InvalidLicenseKeyException::class,
            '1024' => OrderCannotBeChangedException::class,
            '1025' => OrderContainsErrorsException::class,
            '1026' => DeliveryDateModuleInactiveException::class,
            '1027' => MissingEmailException::class,
            '1028' => NoSuchBarcodeException::class,
            '1029' => LabelAlreadyGeneratedException::class,
            '1030' => InvalidOrMissingShippingOptionException::class,
            '1031' => NoPickupRequestOptionsAvailableException::class,
            '1032' => InvalidOrMissingPickupWindowException::class,
            '1033' => PickupContainsErrorsException::class,
            '1034' => NoSuchDistributorException::class,
            '1035' => NoSuchPickupRequestException::class,
            '1036' => NoSuchPickupRequestOptionException::class,
            '1037' => CannotCancelPickupException::class,
            '1038' => MissingParameterException::class,
            '1039' => NoDeliveryEstimatesAvailableException::class,
            '1040' => NoShippingOptionsAvailableAfterFilterException::class,
            '1041' => InvalidDistributorException::class,
            '1042' => NoCompatibleOpenShipmentBatchAvailableException::class,
            '1043' => NoSuchShipmentBatchException::class,
            '1044' => ShipmentBatchAlreadyClosedException::class,
            '1045' => AmbiguousDeliveryEstimateRequestException::class,
            '1046' => NoPackageCountForPackageContentException::class,
            '1047' => InvalidOrMissingChangedSinceDateException::class,
            '1048' => UpstreamServerException::class,
            '1049' => InvalidDestinationException::class,
            '1050' => InvalidOrMissingServicePointCodeException::class,
            '1051' => InvalidOrMissingServicePointAccountNumberException::class,
            '1052' => NoCheckoutSessionAvailableException::class,
            '1053' => MissingPermissionException::class,
            '1054' => MissingBarcodeException::class,
            '1055' => NotAvailableProofOfDeliveryDocumentException::class,
            '1056' => InvalidDateRangeException::class,
            '1057' => OrderChangedByConcurrentRequestException::class,
            '1058' => UnsupportedOperationException::class,
        ];
    }

    /**
     * @param $code
     *
     * @return PaazlException
     */
    public static function getException($code)
    {
        if (array_key_exists($code, self::get())) {
            $exceptionName = self::get()[$code];
        } else {
            $exceptionName = PaazlException::class;
        }

        return new $exceptionName();
    }
}
