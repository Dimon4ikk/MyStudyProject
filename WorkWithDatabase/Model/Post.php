<?php

namespace DimasCorporation\WorkWithDatabase\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'dimascorporation_workwithdatabase_post';

    protected $_cacheTag = 'dimascorporation_workwithdatabase_post';

    protected $_eventPrefix = 'dimascorporation_workwithdatabase_post';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('DimasCorporation\WorkWithDatabase\Model\ResourceModel\Post');
    }

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
