<?php

namespace Stan\Helloworld\Model\Resource\Example;

use Magento\Framework\Model\Resource\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Stan\Helloworld\Model\Example',
            'Stan\Helloworld\Model\Resource\Example'
        );
    }
}
