<?php

namespace Stan\Vmod\Model\ResourceModel\Post;

use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'stan_vmod_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return Redirect
     */


    /**
     * @inheritdoc
     */

    /**
     * Object Manager instance
     *
     * @var ObjectManagerInterface
     */
    protected $objectManager;
    /**
     * Instance name to create
     *
     * @var string
     */
    protected $instanceName;

    /**
     * @api
     */


    public function create(array $data = [])
    {
        return $this->objectManager->create($this->$_eventPrefix, $data);
    }

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Stan\Vmod\Model\Post', 'Stan\Vmod\Model\ResourceModel\Post');

    }
}