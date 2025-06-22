<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class WFSOrderListResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'WFSOrderListResponse';

    protected static array $openAPITypes = [
        'list' => '\Walmart\Models\MP\CL\Orders\WFSOrderListElements'
    ];

    protected static array $openAPIFormats = [
        'list' => null
    ];

    protected static array $openAPINullables = [
        'list' => false
    ];

    protected static array $attributeMap = [
        'list' => 'list'
    ];

    protected static array $setters = [
        'list' => 'setList'
    ];

    protected static array $getters = [
        'list' => 'getList'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('list', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getList()
    {
        return $this->container['list'];
    }

    public function setList($list)
    {
        if (is_null($list)) {
            throw new \InvalidArgumentException('non-nullable list cannot be null');
        }
        $this->container['list'] = $list;
        return $this;
    }
} 