<?php

namespace DimasCorporation\WorkWithDatabase\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init('DimasCorporation\WorkWithDatabase\Model\ResourceModel\Post');
    }

}
