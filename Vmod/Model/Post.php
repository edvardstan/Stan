<?php
namespace Stan\Vmod\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'stan_vmod_post';

    protected $_cacheTag = 'stan_vmod_post';

    protected $_eventPrefix = 'stan_vmod_post';

    protected function _construct()
    {
        $this->_init('Stan\Vmod\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}