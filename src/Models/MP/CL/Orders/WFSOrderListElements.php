<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class WFSOrderListElements extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'WFSOrderListElements';

    protected static array $openAPITypes = [
        'meta' => '\Walmart\Models\MP\CL\Orders\MetaWithoutCursor',
        'elements' => '\Walmart\Models\MP\CL\Orders\WFSOrderElements'
    ];

    protected static array $openAPIFormats = [
        'meta' => null,
        'elements' => null
    ];

    protected static array $openAPINullables = [
        'meta' => false,
        'elements' => false
    ];

    protected static array $attributeMap = [
        'meta' => 'meta',
        'elements' => 'elements'
    ];

    protected static array $setters = [
        'meta' => 'setMeta',
        'elements' => 'setElements'
    ];

    protected static array $getters = [
        'meta' => 'getMeta',
        'elements' => 'getElements'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('elements', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getMeta()
    {
        return $this->container['meta'];
    }

    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;
        return $this;
    }

    public function getElements()
    {
        return $this->container['elements'];
    }

    public function setElements($elements)
    {
        if (is_null($elements)) {
            throw new \InvalidArgumentException('non-nullable elements cannot be null');
        }
        $this->container['elements'] = $elements;
        return $this;
    }
} 