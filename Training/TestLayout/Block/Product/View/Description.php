<?php

declare(strict_types=1);

namespace Training\TestLayout\Block\Product\View;

class Description
{
    public function beforeToHtml(
        \Magento\Catalog\Block\Product\View\Description $subject
    ) {
        $subject->setTemplate('Training_TestLayout::description.phtml');
    }
}
