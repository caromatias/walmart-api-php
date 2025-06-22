<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class OrderLineStatuses extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'OrderLineStatuses';

    protected static array $openAPITypes = [
        'orderLineStatus' => '\Walmart\Models\MP\CL\Orders\OrderLineStatus[]'
    ];

    protected static array $openAPIFormats = [
        'orderLineStatus' => null
    ];

    protected static array $openAPINullables = [
        'orderLineStatus' => false
    ];

    protected static array $attributeMap = [
        'orderLineStatus' => 'orderLineStatus'
    ];

    protected static array $setters = [
        'orderLineStatus' => 'setOrderLineStatus'
    ];

    protected static array $getters = [
        'orderLineStatus' => 'getOrderLineStatus'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('orderLineStatus', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getOrderLineStatus()
    {
        return $this->container['orderLineStatus'];
    }

    public function setOrderLineStatus($orderLineStatus)
    {
        if (is_null($orderLineStatus)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatus cannot be null');
        }
        $this->container['orderLineStatus'] = $orderLineStatus;
        return $this;
    }
} 