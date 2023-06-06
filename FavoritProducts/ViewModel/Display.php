<?php
namespace DimasCorporation\FavoritProducts\ViewModel;

class Display implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public $name;

    public function showProducts()
    {
        /* $this->setName('Карл'); */
        return 'Hello ' . $this->name . ' ! I do it';
    }

    public function setName( $name)
    {
        echo __METHOD__ . "<br><br>" ;
        $this->name = $name;
    }

    public function getName()
    {
        echo __METHOD__ . "<br><br>";
        return $this->name;
    }
}
