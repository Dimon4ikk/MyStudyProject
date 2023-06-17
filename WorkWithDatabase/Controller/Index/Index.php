<?php

namespace DimasCorporation\WorkWithDatabase\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface
{
    /**
     * @var ResultFactory
     */
    protected $resultFactory;

    /**
     * @param Context $context
     */
    public function __construct(
        Context $context,
    )
    {
        $this->resultFactory = $context->getResultFactory();
    }

    /**
     * Show page
     *
     * @return ResultInterface
     */

    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}
