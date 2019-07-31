<?php

namespace VendorName\ModuleName\Model\ResourceModel\Somemodel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init(
            'VendorName\ModuleName\Model\Somemodel',
            'VendorName\ModuleName\Model\ResourceModel\Somemodel'
        );
    }
}