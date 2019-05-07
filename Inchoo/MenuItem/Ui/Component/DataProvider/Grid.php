<?php

namespace Inchoo\MenuItem\Ui\Component\DataProvider;

use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;

class Grid
    extends DataProvider
{
    public function __construct(
        $name,
        ReportingInterface $reporting,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        RequestInterface $request,
        FilterBuilder $filterBuilder,
        UrlInterface $url
    )
    {
        $primaryFieldName = 'id';
        $requestFieldName = 'id';
        $meta = [];
        $updateUrl = $url->getUrl('mui/index/render');
        $data = [
            'config' => [
                'component' => 'Magento_Ui/js/grid/provider',
                'update_url' => $updateUrl
            ]
        ];
        parent::__construct($name, $primaryFieldName, $requestFieldName, $reporting, $searchCriteriaBuilder, $request,
            $filterBuilder, $meta, $data);
    }

    public function getData()
    {
        $result = [
            'items' => [
                ['code2' => 'AU', 'code3' => 'AUS', 'code_num' => '036'],
                ['code2' => 'AT', 'code3' => 'AUT', 'code_num' => '040'],
                ['code2' => 'AZ', 'code3' => 'AZE', 'code_num' => '031']
            ],
            'totalRecords' => 3
        ];
        return $result;
    }

}