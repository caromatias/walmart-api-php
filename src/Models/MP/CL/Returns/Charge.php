<?php

/**
 * Charge
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
 * Charge Class Doc Comment
 *
 * @category Class

 * @description Information relating to the charge for the orderLine

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Charge extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Charge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'chargeType' => 'string',
        'chargeName' => 'string',
        'chargeAmount' => '\Walmart\Models\MP\CL\Returns\ChargeAmount',
        'tax' => '\Walmart\Models\MP\CL\Returns\Tax[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'chargeType' => null,
        'chargeName' => null,
        'chargeAmount' => null,
        'tax' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'chargeType' => false,
        'chargeName' => false,
        'chargeAmount' => false,
        'tax' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'chargeType' => 'chargeType',
        'chargeName' => 'chargeName',
        'chargeAmount' => 'chargeAmount',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'chargeType' => 'setChargeType',
        'chargeName' => 'setChargeName',
        'chargeAmount' => 'setChargeAmount',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'chargeType' => 'getChargeType',
        'chargeName' => 'getChargeName',
        'chargeAmount' => 'getChargeAmount',
        'tax' => 'getTax'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('chargeType', $data ?? [], null);
        $this->setIfExists('chargeName', $data ?? [], null);
        $this->setIfExists('chargeAmount', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
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
     * Gets chargeType
     *
     * @return string|null
    
     */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
     * Sets chargeType
     *
     * @param string|null $chargeType The category type. (e.g., 'PRODUCT' or 'FEE')
     *
     * @return self
    
     */
    public function setChargeType($chargeType)
    {
        if (is_null($chargeType)) {
            throw new \InvalidArgumentException('non-nullable chargeType cannot be null');
        }

        $this->container['chargeType'] = $chargeType;
        return $this;
    }

    /**
     * Gets chargeName
     *
     * @return string|null
    
     */
    public function getChargeName()
    {
        return $this->container['chargeName'];
    }

    /**
     * Sets chargeName
     *
     * @param string|null $chargeName If chargeType is PRODUCT, chargeName is Item Price. If chargeType is SHIPPING, chargeName is Shipping
     *
     * @return self
    
     */
    public function setChargeName($chargeName)
    {
        if (is_null($chargeName)) {
            throw new \InvalidArgumentException('non-nullable chargeName cannot be null');
        }

        $this->container['chargeName'] = $chargeName;
        return $this;
    }

    /**
     * Gets chargeAmount
     *
     * @return \Walmart\Models\MP\CL\Returns\ChargeAmount|null
    
     */
    public function getChargeAmount()
    {
        return $this->container['chargeAmount'];
    }

    /**
     * Sets chargeAmount
     *
     * @param \Walmart\Models\MP\CL\Returns\ChargeAmount|null $chargeAmount chargeAmount
     *
     * @return self
    
     */
    public function setChargeAmount($chargeAmount)
    {
        if (is_null($chargeAmount)) {
            throw new \InvalidArgumentException('non-nullable chargeAmount cannot be null');
        }

        $this->container['chargeAmount'] = $chargeAmount;
        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Walmart\Models\MP\CL\Returns\Tax[]|null
    
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Walmart\Models\MP\CL\Returns\Tax[]|null $tax Taxes for each charge
     *
     * @return self
    
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }

        $this->container['tax'] = $tax;
        return $this;
    }
}
