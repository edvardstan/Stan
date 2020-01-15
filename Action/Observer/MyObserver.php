<?php
namespace Stan\Action\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Data\Tree;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Event\Observer;

class MyObserver implements ObserverInterface
{
    public function __construct()
    {

    }

    public function execute(Observer $observer)
    {
        /** @var \Magento\Framework\Data\Tree\Node $menu */

        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $data = [
            'name'      => __('MenuItemObs'),
            'id'        => 'MenuItemObs',
            'url'       => '/stanaction'
        ];
        $node = new Node($data, 'id', $tree, $menu);
        $menu->addChild($node);
        return $this;
    }
}