<?php

namespace Training\TestRoutes\App;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterListInterface
     */
    protected $_routerList;
    /**
     * @var \Magento\Framework\App\ResponseInterface
     */
    protected $response;
    /**
     * @var \Magento\Framework\App\Request\ValidatorInterface
     */
    private $requestValidator;
    /**
     * @var \Magento\Framework\Message\ManagerInterface
     */
    private $messages;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * FrontController constructor.
     * @param \Magento\Framework\App\RouterListInterface $routerList
     * @param \Magento\Framework\App\ResponseInterface $response
     * @param \Magento\Framework\App\Request\ValidatorInterface $requestValidator
     * @param \Magento\Framework\Message\ManagerInterface $messageManager
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterListInterface $routerList,
        \Magento\Framework\App\ResponseInterface $response,
        \Magento\Framework\App\Request\ValidatorInterface $requestValidator,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->requestValidator = $requestValidator;
        $this->messages = $messageManager;
        $this->logger = $logger;

       parent::__construct($routerList, $response, $requestValidator, $messageManager, $logger);
    }
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }

        return parent::dispatch($request);
    }
}
