<?php

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

class Fulfillment extends BaseModel
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Fulfillment';

    protected static array $openAPITypes = [
        'fulfillmentOption' => 'string',
        'shipMethod' => 'string',
        'pickUpDateTime' => 'string',
        'shippingProgramType' => 'string',
        'fulfillmentType' => 'string',
        'pickUpBy' => 'string'
    ];

    protected static array $openAPIFormats = [
        'fulfillmentOption' => null,
        'shipMethod' => null,
        'pickUpDateTime' => null,
        'shippingProgramType' => null,
        'fulfillmentType' => null,
        'pickUpBy' => null
    ];

    protected static array $openAPINullables = [
        'fulfillmentOption' => false,
        'shipMethod' => false,
        'pickUpDateTime' => false,
        'shippingProgramType' => false,
        'fulfillmentType' => false,
        'pickUpBy' => false
    ];

    protected static array $attributeMap = [
        'fulfillmentOption' => 'fulfillmentOption',
        'shipMethod' => 'shipMethod',
        'pickUpDateTime' => 'pickUpDateTime',
        'shippingProgramType' => 'shippingProgramType',
        'fulfillmentType' => 'fulfillmentType',
        'pickUpBy' => 'pickUpBy'
    ];

    protected static array $setters = [
        'fulfillmentOption' => 'setFulfillmentOption',
        'shipMethod' => 'setShipMethod',
        'pickUpDateTime' => 'setPickUpDateTime',
        'shippingProgramType' => 'setShippingProgramType',
        'fulfillmentType' => 'setFulfillmentType',
        'pickUpBy' => 'setPickUpBy'
    ];

    protected static array $getters = [
        'fulfillmentOption' => 'getFulfillmentOption',
        'shipMethod' => 'getShipMethod',
        'pickUpDateTime' => 'getPickUpDateTime',
        'shippingProgramType' => 'getShippingProgramType',
        'fulfillmentType' => 'getFulfillmentType',
        'pickUpBy' => 'getPickUpBy'
    ];

    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentOption', $data ?? [], null);
        $this->setIfExists('shipMethod', $data ?? [], null);
        $this->setIfExists('pickUpDateTime', $data ?? [], null);
        $this->setIfExists('shippingProgramType', $data ?? [], null);
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('pickUpBy', $data ?? [], null);
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function getFulfillmentOption()
    {
        return $this->container['fulfillmentOption'];
    }

    public function setFulfillmentOption($fulfillmentOption)
    {
        if (is_null($fulfillmentOption)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentOption cannot be null');
        }
        $this->container['fulfillmentOption'] = $fulfillmentOption;
        return $this;
    }

    public function getShipMethod()
    {
        return $this->container['shipMethod'];
    }

    public function setShipMethod($shipMethod)
    {
        if (is_null($shipMethod)) {
            throw new \InvalidArgumentException('non-nullable shipMethod cannot be null');
        }
        $this->container['shipMethod'] = $shipMethod;
        return $this;
    }

    public function getPickUpDateTime()
    {
        return $this->container['pickUpDateTime'];
    }

    public function setPickUpDateTime($pickUpDateTime)
    {
        if (is_null($pickUpDateTime)) {
            throw new \InvalidArgumentException('non-nullable pickUpDateTime cannot be null');
        }
        $this->container['pickUpDateTime'] = $pickUpDateTime;
        return $this;
    }

    public function getShippingProgramType()
    {
        return $this->container['shippingProgramType'];
    }

    public function setShippingProgramType($shippingProgramType)
    {
        if (is_null($shippingProgramType)) {
            throw new \InvalidArgumentException('non-nullable shippingProgramType cannot be null');
        }
        $this->container['shippingProgramType'] = $shippingProgramType;
        return $this;
    }

    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }
        $this->container['fulfillmentType'] = $fulfillmentType;
        return $this;
    }

    public function getPickUpBy()
    {
        return $this->container['pickUpBy'];
    }

    public function setPickUpBy($pickUpBy)
    {
        if (is_null($pickUpBy)) {
            throw new \InvalidArgumentException('non-nullable pickUpBy cannot be null');
        }
        $this->container['pickUpBy'] = $pickUpBy;
        return $this;
    }
} 