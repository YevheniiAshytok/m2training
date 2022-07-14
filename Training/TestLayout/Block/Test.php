<?php

declare(strict_types=1);

namespace Training\TestLayout\Block;

class Test extends \Magento\Framework\View\Element\AbstractBlock
{
    public function _toHtml()
    {
        return "<b>Hello world from block!</b>";
    }
}
