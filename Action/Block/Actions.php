<?php

namespace Stan\Action\Block;

use Magento\Framework\View\Element\Template;

class Actions extends Template
{
    public function getWelcomeText()
    {
        return 'Hello World !!!!';
    }
}