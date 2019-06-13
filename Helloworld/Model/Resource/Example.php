<?php


namespace Stan\Helloworld\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Example extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('1111_table', 'id');
    }
}
