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

class GetExistingPdfLabelsRequest extends GetExistingLabelsType implements RequestInterface
{
    /**
     * @var printerType
     */
    protected $printer = null;

    /**
     * Constructor.
     *
     * @param int                 $webshop
     * @param existingLabelType[] $label
     * @param bool                $includeMetaData
     * @param mixed               $printer
     *
     * @var string $printer
     */
    public function __construct($webshop, array $label, $includeMetaData, $printer)
    {
        parent::__construct($webshop, $label, $includeMetaData);
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
