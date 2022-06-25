<?php

declare(strict_types=1);

namespace Training\TestPlugin\Plugin\Block;
class Template
{
    public function afterToHtml(
        \Magento\Framework\View\Element\Template $subject,
        $result
    ) {
        $result = '<div>';
        $result .= '<p>' . $subject->getTemplate() . '</p>';
        $result .= '<p>' . get_class($subject) . '</p>';
        $result .= '</div>';


        return $result;
    }
}
