<?php

declare(strict_types=1);

namespace Training\TestRendering\Controller\Index;
class Index implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private $resultRawFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
    }

    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');

        return $resultRaw;
    }

}
