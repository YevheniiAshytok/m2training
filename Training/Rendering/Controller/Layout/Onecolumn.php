<?php

declare(strict_types=1);

namespace Training\Rendering\Controller\Layout;

class Onecolumn implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private $resultPageFactory;
    private $request;

    public function __construct(
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->request = $request;
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
