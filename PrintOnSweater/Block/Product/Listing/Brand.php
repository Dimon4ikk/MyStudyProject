<?php declare(strict_types=1);

namespace DimasCorporation\PrintOnSweater\Block\Product\Listing;

use Magento\Catalog\Model\Product;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Template;

class Brand extends Template
{

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->getParentBlock()->getProduct();
    }
}
