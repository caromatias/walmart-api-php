<?php

/**
 * Tax
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
 * Tax Class Doc Comment
 *
 * @category Class

 * @description Taxes for each charge

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Tax extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Tax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'taxName' => 'string',
        'taxAmount' => '\Walmart\Models\MP\CL\Returns\TaxAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'taxName' => null,
        'taxAmount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'taxName' => false,
        'taxAmount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'taxName' => 'taxName',
        'taxAmount' => 'taxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'taxName' => 'setTaxName',
        'taxAmount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'taxName' => 'getTaxName',
        'taxAmount' => 'getTaxAmount'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('taxName', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
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
     * Gets taxName
     *
     * @return string|null
    
     */
    public function getTaxName()
    {
        return $this->container['taxName'];
    }

    /**
     * Sets taxName
     *
     * @param string|null $taxName Name of the tax
     *
     * @return self
    
     */
    public function setTaxName($taxName)
    {
        if (is_null($taxName)) {
            throw new \InvalidArgumentException('non-nullable taxName cannot be null');
        }

        $this->container['taxName'] = $taxName;
        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \Walmart\Models\MP\CL\Returns\TaxAmount|null
    
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \Walmart\Models\MP\CL\Returns\TaxAmount|null $taxAmount taxAmount
     *
     * @return self
    
     */
    public function setTaxAmount($taxAmount)
    {
        if (is_null($taxAmount)) {
            throw new \InvalidArgumentException('non-nullable taxAmount cannot be null');
        }

        $this->container['taxAmount'] = $taxAmount;
        return $this;
    }
}
