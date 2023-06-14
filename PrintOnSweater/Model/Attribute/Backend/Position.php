<?php

namespace DimasCorporation\PrintOnSweater\Model\Attribute\Backend;

use Magento\Catalog\Model\Category\Product;
use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class Position extends AbstractBackend
{
    public function validate($object)
    {
      $value = $object->getData($this->getAttribute()->getAttributeCode());
   /*
    if (($object->getAttributeSetId() == 10) && ($value == 'fur')) {
          throw new LocalizedException(__('Bottom cannot be fur'));
      }
   */
    }
}
