<?php

namespace DimasCorporation\PrintOnSweater\Model\Attribute\Sourse;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Position extends AbstractSource
{
    public function getAllOptions(): ?array
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Top'), 'value' => 'top'],
                ['label' => __('Bottom'), 'value' => 'bottom'],
                ['label' => __('Chest'), 'value' => 'chest'],
                ['label' => __('Stomach'), 'value' => 'stomach'],
            ];
        }
        return $this->_options;
    }
}
