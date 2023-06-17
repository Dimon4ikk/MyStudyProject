<?php

namespace DimasCorporation\WorkWithDatabase\ViewModel;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use DimasCorporation\WorkWithDatabase\Model\ResourceModel\Post\CollectionFactory;

class Post extends Template implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private $productCollectionFactory;

    public function __construct(
        Context $context, CollectionFactory $productCollectionFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->productCollectionFactory = $productCollectionFactory;
    }

    /**
     * @return \Magento\Framework\Data\Collection\AbstractDb|\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection|null
     */
    public function getProductCollection()
    {
        return $this->productCollectionFactory->create();
    }

    public function getFormAction()
    {
        return $this->getUrl('workwithdatabase/index/submit', ['_secure' => true]);
    }
    public function getDeleteAction()
    {
        return $this->getUrl('workwithdatabase/index/delete', ['_secure' => true]);
    }

}
