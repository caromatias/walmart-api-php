<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class OrderLines extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'OrderLines';

    protected static array $openAPITypes = [
        'orderLine' => '\Walmart\Models\MP\CL\Orders\OrderLine[]'
    ];

    protected static array $openAPIFormats = [
        'orderLine' => null
    ];

    protected static array $openAPINullables = [
        'orderLine' => false
    ];

    protected static array $attributeMap = [
        'orderLine' => 'orderLine'
    ];

    protected static array $setters = [
        'orderLine' => 'setOrderLine'
    ];

    protected static array $getters = [
        'orderLine' => 'getOrderLine'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('orderLine', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getOrderLine()
    {
        return $this->container['orderLine'];
    }

    public function setOrderLine($orderLine)
    {
        if (is_null($orderLine)) {
            throw new \InvalidArgumentException('non-nullable orderLine cannot be null');
        }
        $this->container['orderLine'] = $orderLine;
        return $this;
    }
} 