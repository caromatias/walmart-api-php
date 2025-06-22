<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class WFSOrderElements extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'WFSOrderElements';

    protected static array $openAPITypes = [
        'order' => '\Walmart\Models\MP\CL\Orders\WFSOrder[]'
    ];

    protected static array $openAPIFormats = [
        'order' => null
    ];

    protected static array $openAPINullables = [
        'order' => false
    ];

    protected static array $attributeMap = [
        'order' => 'order'
    ];

    protected static array $setters = [
        'order' => 'setOrder'
    ];

    protected static array $getters = [
        'order' => 'getOrder'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('order', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getOrder()
    {
        return $this->container['order'];
    }

    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;
        return $this;
    }
} 