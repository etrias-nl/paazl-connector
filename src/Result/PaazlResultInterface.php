<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 1-8-17
 * Time: 9:47
 */

namespace Etrias\PaazlConnector\Result;


use Etrias\PaazlConnector\SoapTypes\ErrorType;
use Phpro\SoapClient\Type\ResultInterface;

interface PaazlResultInterface extends ResultInterface
{
    /**
     * @return ErrorType
     */
    public function getError();
}
