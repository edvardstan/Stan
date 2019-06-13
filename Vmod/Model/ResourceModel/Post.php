<?php
namespace Stan\Vmod\Model\ResourceModel;


class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('stan_vmod_post', 'post_id');
    }

}