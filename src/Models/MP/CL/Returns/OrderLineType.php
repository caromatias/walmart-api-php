<?php

/**
 * OrderLineType
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
 * OrderLineType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OrderLineType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderLineType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lineNumber' => 'string',
        'orderLineStatuses' => '\Walmart\Models\MP\CL\Returns\OrderLineStatusesType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lineNumber' => null,
        'orderLineStatuses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'orderLineStatuses' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lineNumber' => 'lineNumber',
        'orderLineStatuses' => 'orderLineStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lineNumber' => 'setLineNumber',
        'orderLineStatuses' => 'setOrderLineStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lineNumber' => 'getLineNumber',
        'orderLineStatuses' => 'getOrderLineStatuses'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('orderLineStatuses', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lineNumber'] === null) {
            $invalidProperties[] = "'lineNumber' can't be null";
        }
        if ($this->container['orderLineStatuses'] === null) {
            $invalidProperties[] = "'orderLineStatuses' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets lineNumber
     *
     * @return string
    
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param string $lineNumber lineNumber
     *
     * @return self
    
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }

        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Gets orderLineStatuses
     *
     * @return \Walmart\Models\MP\CL\Returns\OrderLineStatusesType
    
     */
    public function getOrderLineStatuses()
    {
        return $this->container['orderLineStatuses'];
    }

    /**
     * Sets orderLineStatuses
     *
     * @param \Walmart\Models\MP\CL\Returns\OrderLineStatusesType $orderLineStatuses orderLineStatuses
     *
     * @return self
    
     */
    public function setOrderLineStatuses($orderLineStatuses)
    {
        if (is_null($orderLineStatuses)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatuses cannot be null');
        }

        $this->container['orderLineStatuses'] = $orderLineStatuses;
        return $this;
    }
}
