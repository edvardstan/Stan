<?php

namespace Stan\Action\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\HttpGetActionInterface;
use \Magento\Framework\Controller\ResultFactory;

class Actions extends Action implements HttpGetActionInterface
{

    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);



    }
}
