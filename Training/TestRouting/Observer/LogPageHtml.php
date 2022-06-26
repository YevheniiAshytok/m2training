<?php

declare(strict_types=1);

namespace Training\TestRouting\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LogPageHtml implements ObserverInterface
{

    private $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getResponse();
        $this->logger->debug($response);
    }
}
