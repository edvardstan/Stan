<?php

namespace Stan\Vmod\Model;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'stan_vmod_post';

    protected $_cacheTag = 'stan_vmod_post';

    protected $_eventPrefix = 'stan_vmod_post';

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }

    protected function _construct()
    {
        $this->_init('Stan\Vmod\Model\ResourceModel\Post');
    }
}