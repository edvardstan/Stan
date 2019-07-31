<?php

namespace Stan\Helloworld\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
class Data extends AbstractHelper {
    public function getModel($modelName){
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $model = $objectManager->create('\Stan\Helloworld\Model\\'.ucfirst($modelName));
        return $model;
    }
}
