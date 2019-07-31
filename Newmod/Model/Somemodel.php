<?php

namespace VendorName\ModuleName\Model;

use Magento\Framework\Model\AbstractModel;

class Somemodel extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('VendorName\ModuleName\Model\ResourceModel\Somemodel');
    }
}