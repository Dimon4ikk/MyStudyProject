<?php

namespace DimasCorporation\PrintOnSweater\ViewModel;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\RequestInterface;

class GetCustomAttribute implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $productRepository;

    protected $request;

    public function __construct(
        RequestInterface           $request,
        ProductRepositoryInterface $productRepository,
    )
    {
        $this->request = $request;
        $this->productRepository = $productRepository;
    }

    public function getProductId()
    {
        $productId = $this->request->getParam('id');

        return $productId;
    }

    public function getProduct()
    {
        $product = $this->productRepository->getById($this->getProductId());
        return $product;
    }

}
