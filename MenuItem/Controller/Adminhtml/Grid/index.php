<?php

namespace Stan\MenuItem\Controller\Adminhtml\Grid;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;

class Index
    extends Action
{
    const ACL_RESOURCE = 'Inchoo_MenuItem::sample_grid';
    const MENU_ITEM = 'Inchoo_MenuItem::sample_grid';
    const TITLE = 'Sample Grid';

    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu(self::MENU_ITEM);
        $resultPage->getConfig()->getTitle()->prepend(__(self::TITLE));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        $result = parent::_isAllowed();
        $result = $result && $this->_authorization->isAllowed(self::ACL_RESOURCE);
        return $result;
    }
}