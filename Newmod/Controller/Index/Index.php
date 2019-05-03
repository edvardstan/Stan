<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Stan\Newmod\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action implements HttpGetActionInterface
{

    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        echo('asdasd');
    }
}
