<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class Charges extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Charges';

    protected static array $openAPITypes = [
        'charge' => '\Walmart\Models\MP\CL\Orders\Charge[]'
    ];

    protected static array $openAPIFormats = [
        'charge' => null
    ];

    protected static array $openAPINullables = [
        'charge' => false
    ];

    protected static array $attributeMap = [
        'charge' => 'charge'
    ];

    protected static array $setters = [
        'charge' => 'setCharge'
    ];

    protected static array $getters = [
        'charge' => 'getCharge'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('charge', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getCharge()
    {
        return $this->container['charge'];
    }

    public function setCharge($charge)
    {
        if (is_null($charge)) {
            throw new \InvalidArgumentException('non-nullable charge cannot be null');
        }
        $this->container['charge'] = $charge;
        return $this;
    }
} 