<?php


namespace Stan\Helloworld\Model;

use Magento\Framework\Model\AbstractModel;

class Example extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Stan\Helloworld\Model\Resource\Example');
    }
}
