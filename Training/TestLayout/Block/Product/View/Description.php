<?php

declare(strict_types=1);

namespace Training\TestLayout\Block\Product\View;

class Description
{
    public function beforeToHtml(
        \Magento\Catalog\Block\Product\View\Description $subject
    ) {
        if ($subject->getNameInLayout() == 'product.info.sku') {
            $subject->setTemplate('Training_TestLayout::description.phtml');
        }
    }
}
