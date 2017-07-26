<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 20:05
 */

namespace Etrias\PaazlConnector\Service;


interface SecurityServiceInterface
{

    /**
     * @param string $input
     *
     * @return string
     */
    public function getHash($input);
}