<?php

/**
 * ShipmentLine
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CL\Returns;

use Walmart\Models\BaseModel;

/**
 * ShipmentLine Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipmentLine extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'primeLineNo' => 'string',
        'shipmentLineNo' => 'string',
        'quantity' => '\Walmart\Models\MP\CL\Returns\QuantityType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'primeLineNo' => null,
        'shipmentLineNo' => null,
        'quantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'primeLineNo' => false,
        'shipmentLineNo' => false,
        'quantity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'primeLineNo' => 'primeLineNo',
        'shipmentLineNo' => 'shipmentLineNo',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'primeLineNo' => 'setPrimeLineNo',
        'shipmentLineNo' => 'setShipmentLineNo',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'primeLineNo' => 'getPrimeLineNo',
        'shipmentLineNo' => 'getShipmentLineNo',
        'quantity' => 'getQuantity'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('primeLineNo', $data ?? [], null);
        $this->setIfExists('shipmentLineNo', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Gets primeLineNo
     *
     * @return string|null
    
     */
    public function getPrimeLineNo()
    {
        return $this->container['primeLineNo'];
    }

    /**
     * Sets primeLineNo
     *
     * @param string|null $primeLineNo The number to identify the associated order line for the shipment line. Example: 'primeLineNo=1 means the shipment line is associated with orderLine having primeLineNumber=1'
     *
     * @return self
    
     */
    public function setPrimeLineNo($primeLineNo)
    {
        if (is_null($primeLineNo)) {
            throw new \InvalidArgumentException('non-nullable primeLineNo cannot be null');
        }

        $this->container['primeLineNo'] = $primeLineNo;
        return $this;
    }

    /**
     * Gets shipmentLineNo
     *
     * @return string|null
    
     */
    public function getShipmentLineNo()
    {
        return $this->container['shipmentLineNo'];
    }

    /**
     * Sets shipmentLineNo
     *
     * @param string|null $shipmentLineNo The unique number for the shipment line in a given shipment
     *
     * @return self
    
     */
    public function setShipmentLineNo($shipmentLineNo)
    {
        if (is_null($shipmentLineNo)) {
            throw new \InvalidArgumentException('non-nullable shipmentLineNo cannot be null');
        }

        $this->container['shipmentLineNo'] = $shipmentLineNo;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Walmart\Models\MP\CL\Returns\QuantityType|null
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Walmart\Models\MP\CL\Returns\QuantityType|null $quantity quantity
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;
        return $this;
    }
}
