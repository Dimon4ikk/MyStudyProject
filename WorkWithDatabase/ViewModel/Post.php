<?php

namespace DimasCorporation\WorkWithDatabase\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use DimasCorporation\WorkWithDatabase\Model\PostFactory;

class Post implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private $productCollectionFactory;

    /**
     * @var PostFactory
     */
    protected $_postFactory;

    public function __construct(CollectionFactory $productCollectionFactory,
                                PostFactory       $postFactory)
    {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->_postFactory = $postFactory;
    }

    /**
     * @return \Magento\Framework\Data\Collection\AbstractDb|\Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection|null
     */
    public function getProductCollection()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }

}
