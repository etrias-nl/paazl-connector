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

use Phpro\SoapClient\Type\RequestInterface;

class GeneratePdfReturnLabelsRequest extends GenerateReturnLabelsType implements RequestInterface
{
    /**
     * @var string
     */
    protected $printer = null;

    /**
     * Constructor.
     *
     * @param int                     $webShop
     * @param returnLabelsOrderType[] $order
     * @param mixed                   $printer
     *
     * @var string $printer
     */
    public function __construct($webShop, $order, $printer)
    {
        parent::__construct($webShop, $order);
        $this->printer = $printer;
    }

    /**
     * @return string
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * @param string $printer
     *
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;

        return $this;
    }
}
