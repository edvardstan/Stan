<?php

namespace VendorName\ModuleName\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Somemodel extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('table_name_without_prefix', 'primary_column_name');
    }
}