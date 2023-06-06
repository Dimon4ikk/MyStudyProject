<?php

namespace DimasCorporation\FavoritProducts\ViewModel;

class Test implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    private $productCollectionFactory;
    private $eventManager;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
    \Magento\Framework\Event\Manager $eventManager)
    {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->eventManager = $eventManager;
    }

    public function test()
    {
        return '12345test';

    }

    public function getProductCollectionByCategories()
    {

        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect('name');
        $collection->setPageSize(10);

        $this->eventManager->dispatch('my_module_event_test', ['collection' => $collection]);

        return $collection;
    }
}
