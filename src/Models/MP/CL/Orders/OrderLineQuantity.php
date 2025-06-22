<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class OrderLineQuantity extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'OrderLineQuantity';

    protected static array $openAPITypes = [
        'unitOfMeasurement' => 'string',
        'amount' => 'string'
    ];

    protected static array $openAPIFormats = [
        'unitOfMeasurement' => null,
        'amount' => null
    ];

    protected static array $openAPINullables = [
        'unitOfMeasurement' => false,
        'amount' => false
    ];

    protected static array $attributeMap = [
        'unitOfMeasurement' => 'unitOfMeasurement',
        'amount' => 'amount'
    ];

    protected static array $setters = [
        'unitOfMeasurement' => 'setUnitOfMeasurement',
        'amount' => 'setAmount'
    ];

    protected static array $getters = [
        'unitOfMeasurement' => 'getUnitOfMeasurement',
        'amount' => 'getAmount'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('unitOfMeasurement', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getUnitOfMeasurement()
    {
        return $this->container['unitOfMeasurement'];
    }

    public function setUnitOfMeasurement($unitOfMeasurement)
    {
        if (is_null($unitOfMeasurement)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasurement cannot be null');
        }
        $this->container['unitOfMeasurement'] = $unitOfMeasurement;
        return $this;
    }

    public function getAmount()
    {
        return $this->container['amount'];
    }

    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;
        return $this;
    }
} 