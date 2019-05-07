<?php

namespace Stan\Newmod\Block;

use Magento\Framework\View\Element\Template;

class Block extends Template
{
    public function getWelcomeText()
    {
        return 'Hello World';
    }
}