<?php

namespace DimasCorporation\FavoritProducts\Observer;

use Magento\Framework\Event\Observer;

class ChangeProductNameText implements \Magento\Framework\Event\ObserverInterface
{
public function execute(Observer $observer)
{
    // TODO: Implement execute() method.
    $collections =$observer->getData('collection');
    foreach ($collections as $product)
    {
        $name = $product->getName();
        $newName = 'PRODUCT: ' . $name;
        $product->setName($newName);
    }
    return $collections;
}
}
