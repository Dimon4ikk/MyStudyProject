<?php

namespace DimasCorporation\WorkWithDatabase\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'dimascorporation_workwithdatabase_post';

    protected $_cacheTag = 'dimascorporation_workwithdatabase_post';

    protected $_eventPrefix = 'dimascorporation_workwithdatabase_post';

    protected function _construct()
    {
        $this->_init('DimasCorporation\WorkWithDatabase\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
