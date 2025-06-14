<?php

/**
 * ItemResponses
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CL\Items;

use Walmart\Models\BaseModel;

/**
 * ItemResponses Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemResponses extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'errors' => '\Walmart\Models\MP\CL\Items\GatewayError[]',
        'itemResponse' => '\Walmart\Models\MP\CL\Items\ItemResponse[]',
        'totalItems' => 'int',
        'nextCursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'errors' => null,
        'itemResponse' => null,
        'totalItems' => 'int64',
        'nextCursor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'errors' => false,
        'itemResponse' => true,
        'totalItems' => false,
        'nextCursor' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'errors' => 'errors',
        'itemResponse' => 'ItemResponse',
        'totalItems' => 'totalItems',
        'nextCursor' => 'nextCursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'errors' => 'setErrors',
        'itemResponse' => 'setItemResponse',
        'totalItems' => 'setTotalItems',
        'nextCursor' => 'setNextCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'errors' => 'getErrors',
        'itemResponse' => 'getItemResponse',
        'totalItems' => 'getTotalItems',
        'nextCursor' => 'getNextCursor'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('itemResponse', $data ?? [], null);
        $this->setIfExists('totalItems', $data ?? [], null);
        $this->setIfExists('nextCursor', $data ?? [], null);
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
     * Gets errors
     *
     * @return \Walmart\Models\MP\CL\Items\GatewayError[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\CL\Items\GatewayError[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }

    /**
     * Gets itemResponse
     *
     * @return \Walmart\Models\MP\CL\Items\ItemResponse[]|null
    
     */
    public function getItemResponse()
    {
        return $this->container['itemResponse'];
    }

    /**
     * Sets itemResponse
     *
     * @param \Walmart\Models\MP\CL\Items\ItemResponse[]|null $itemResponse Items included in the response list
     *
     * @return self
    
     */
    public function setItemResponse($itemResponse)
    {
        $this->container['itemResponse'] = $itemResponse;
        return $this;
    }

    /**
     * Gets totalItems
     *
     * @return int|null
    
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems
     *
     * @param int|null $totalItems Total Items for the query
     *
     * @return self
    
     */
    public function setTotalItems($totalItems)
    {
        if (is_null($totalItems)) {
            throw new \InvalidArgumentException('non-nullable totalItems cannot be null');
        }

        $this->container['totalItems'] = $totalItems;
        return $this;
    }

    /**
     * Gets nextCursor
     *
     * @return string|null
    
     */
    public function getNextCursor()
    {
        return $this->container['nextCursor'];
    }

    /**
     * Sets nextCursor
     *
     * @param string|null $nextCursor Used for pagination when more than 200 items are retrieved. The nextCursor value of the response includes a link to another GET call which retrieves the next page of results.
     *
     * @return self
    
     */
    public function setNextCursor($nextCursor)
    {
        if (is_null($nextCursor)) {
            throw new \InvalidArgumentException('non-nullable nextCursor cannot be null');
        }

        $this->container['nextCursor'] = $nextCursor;
        return $this;
    }
}
