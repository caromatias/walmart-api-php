<?php

/**
 * FeedRecord
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
 * Feed Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CL\Feeds;

use Walmart\Models\BaseModel;

/**
 * FeedRecord Class Doc Comment
 *
 * @category Class

 * @description Information about the individual feed

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedRecord extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FeedRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'feedId' => 'string',
        'feedSource' => 'string',
        'feedType' => 'string',
        'partnerId' => 'string',
        'itemsReceived' => 'int',
        'itemsSucceeded' => 'int',
        'itemsFailed' => 'int',
        'itemsProcessing' => 'int',
        'feedStatus' => 'string',
        'feedDate' => 'int',
        'batchId' => 'string',
        'modifiedDtm' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'feedId' => null,
        'feedSource' => null,
        'feedType' => null,
        'partnerId' => null,
        'itemsReceived' => 'int64',
        'itemsSucceeded' => 'int64',
        'itemsFailed' => 'int64',
        'itemsProcessing' => 'int64',
        'feedStatus' => null,
        'feedDate' => 'int64',
        'batchId' => null,
        'modifiedDtm' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feedId' => false,
        'feedSource' => false,
        'feedType' => false,
        'partnerId' => false,
        'itemsReceived' => false,
        'itemsSucceeded' => false,
        'itemsFailed' => false,
        'itemsProcessing' => false,
        'feedStatus' => false,
        'feedDate' => false,
        'batchId' => false,
        'modifiedDtm' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feedId' => 'feedId',
        'feedSource' => 'feedSource',
        'feedType' => 'feedType',
        'partnerId' => 'partnerId',
        'itemsReceived' => 'itemsReceived',
        'itemsSucceeded' => 'itemsSucceeded',
        'itemsFailed' => 'itemsFailed',
        'itemsProcessing' => 'itemsProcessing',
        'feedStatus' => 'feedStatus',
        'feedDate' => 'feedDate',
        'batchId' => 'batchId',
        'modifiedDtm' => 'modifiedDtm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'feedId' => 'setFeedId',
        'feedSource' => 'setFeedSource',
        'feedType' => 'setFeedType',
        'partnerId' => 'setPartnerId',
        'itemsReceived' => 'setItemsReceived',
        'itemsSucceeded' => 'setItemsSucceeded',
        'itemsFailed' => 'setItemsFailed',
        'itemsProcessing' => 'setItemsProcessing',
        'feedStatus' => 'setFeedStatus',
        'feedDate' => 'setFeedDate',
        'batchId' => 'setBatchId',
        'modifiedDtm' => 'setModifiedDtm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'feedId' => 'getFeedId',
        'feedSource' => 'getFeedSource',
        'feedType' => 'getFeedType',
        'partnerId' => 'getPartnerId',
        'itemsReceived' => 'getItemsReceived',
        'itemsSucceeded' => 'getItemsSucceeded',
        'itemsFailed' => 'getItemsFailed',
        'itemsProcessing' => 'getItemsProcessing',
        'feedStatus' => 'getFeedStatus',
        'feedDate' => 'getFeedDate',
        'batchId' => 'getBatchId',
        'modifiedDtm' => 'getModifiedDtm'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('feedId', $data ?? [], null);
        $this->setIfExists('feedSource', $data ?? [], null);
        $this->setIfExists('feedType', $data ?? [], null);
        $this->setIfExists('partnerId', $data ?? [], null);
        $this->setIfExists('itemsReceived', $data ?? [], null);
        $this->setIfExists('itemsSucceeded', $data ?? [], null);
        $this->setIfExists('itemsFailed', $data ?? [], null);
        $this->setIfExists('itemsProcessing', $data ?? [], null);
        $this->setIfExists('feedStatus', $data ?? [], null);
        $this->setIfExists('feedDate', $data ?? [], null);
        $this->setIfExists('batchId', $data ?? [], null);
        $this->setIfExists('modifiedDtm', $data ?? [], null);
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
     * Gets feedId
     *
     * @return string|null
    
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param string|null $feedId A unique ID used for tracking the Feed File
     *
     * @return self
    
     */
    public function setFeedId($feedId)
    {
        if (is_null($feedId)) {
            throw new \InvalidArgumentException('non-nullable feedId cannot be null');
        }

        $this->container['feedId'] = $feedId;
        return $this;
    }

    /**
     * Gets feedSource
     *
     * @return string|null
    
     */
    public function getFeedSource()
    {
        return $this->container['feedSource'];
    }

    /**
     * Sets feedSource
     *
     * @param string|null $feedSource The source of the feed
     *
     * @return self
    
     */
    public function setFeedSource($feedSource)
    {
        if (is_null($feedSource)) {
            throw new \InvalidArgumentException('non-nullable feedSource cannot be null');
        }

        $this->container['feedSource'] = $feedSource;
        return $this;
    }

    /**
     * Gets feedType
     *
     * @return string|null
    
     */
    public function getFeedType()
    {
        return $this->container['feedType'];
    }

    /**
     * Sets feedType
     *
     * @param string|null $feedType The feed type
     *
     * @return self
    
     */
    public function setFeedType($feedType)
    {
        if (is_null($feedType)) {
            throw new \InvalidArgumentException('non-nullable feedType cannot be null');
        }

        $this->container['feedType'] = $feedType;
        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
    
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId The seller ID
     *
     * @return self
    
     */
    public function setPartnerId($partnerId)
    {
        if (is_null($partnerId)) {
            throw new \InvalidArgumentException('non-nullable partnerId cannot be null');
        }

        $this->container['partnerId'] = $partnerId;
        return $this;
    }

    /**
     * Gets itemsReceived
     *
     * @return int|null
    
     */
    public function getItemsReceived()
    {
        return $this->container['itemsReceived'];
    }

    /**
     * Sets itemsReceived
     *
     * @param int|null $itemsReceived The number of items received
     *
     * @return self
    
     */
    public function setItemsReceived($itemsReceived)
    {
        if (is_null($itemsReceived)) {
            throw new \InvalidArgumentException('non-nullable itemsReceived cannot be null');
        }

        $this->container['itemsReceived'] = $itemsReceived;
        return $this;
    }

    /**
     * Gets itemsSucceeded
     *
     * @return int|null
    
     */
    public function getItemsSucceeded()
    {
        return $this->container['itemsSucceeded'];
    }

    /**
     * Sets itemsSucceeded
     *
     * @param int|null $itemsSucceeded The number of items in the feed that have successfully processed
     *
     * @return self
    
     */
    public function setItemsSucceeded($itemsSucceeded)
    {
        if (is_null($itemsSucceeded)) {
            throw new \InvalidArgumentException('non-nullable itemsSucceeded cannot be null');
        }

        $this->container['itemsSucceeded'] = $itemsSucceeded;
        return $this;
    }

    /**
     * Gets itemsFailed
     *
     * @return int|null
    
     */
    public function getItemsFailed()
    {
        return $this->container['itemsFailed'];
    }

    /**
     * Sets itemsFailed
     *
     * @param int|null $itemsFailed The number of items in the feed that failed due to a data or system error
     *
     * @return self
    
     */
    public function setItemsFailed($itemsFailed)
    {
        if (is_null($itemsFailed)) {
            throw new \InvalidArgumentException('non-nullable itemsFailed cannot be null');
        }

        $this->container['itemsFailed'] = $itemsFailed;
        return $this;
    }

    /**
     * Gets itemsProcessing
     *
     * @return int|null
    
     */
    public function getItemsProcessing()
    {
        return $this->container['itemsProcessing'];
    }

    /**
     * Sets itemsProcessing
     *
     * @param int|null $itemsProcessing The number of items in the feed that are still in progress
     *
     * @return self
    
     */
    public function setItemsProcessing($itemsProcessing)
    {
        if (is_null($itemsProcessing)) {
            throw new \InvalidArgumentException('non-nullable itemsProcessing cannot be null');
        }

        $this->container['itemsProcessing'] = $itemsProcessing;
        return $this;
    }

    /**
     * Gets feedStatus
     *
     * @return string|null
    
     */
    public function getFeedStatus()
    {
        return $this->container['feedStatus'];
    }

    /**
     * Sets feedStatus
     *
     * @param string|null $feedStatus Can be one of the following: RECEIVED, INPROGRESS, PROCESSED, or ERROR. For details, see the definitions listed under 'Feed Statuses' at the beginning of this section.
     *
     * @return self
    
     */
    public function setFeedStatus($feedStatus)
    {
        if (is_null($feedStatus)) {
            throw new \InvalidArgumentException('non-nullable feedStatus cannot be null');
        }

        $this->container['feedStatus'] = $feedStatus;
        return $this;
    }

    /**
     * Gets feedDate
     *
     * @return int|null
    
     */
    public function getFeedDate()
    {
        return $this->container['feedDate'];
    }

    /**
     * Sets feedDate
     *
     * @param int|null $feedDate The date and time the feed was submitted. Format: yyyymmddThh:mm:ss.xxxz
     *
     * @return self
    
     */
    public function setFeedDate($feedDate)
    {
        if (is_null($feedDate)) {
            throw new \InvalidArgumentException('non-nullable feedDate cannot be null');
        }

        $this->container['feedDate'] = $feedDate;
        return $this;
    }

    /**
     * Gets batchId
     *
     * @return string|null
    
     */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
     * Sets batchId
     *
     * @param string|null $batchId The batch ID for the feed, if provided
     *
     * @return self
    
     */
    public function setBatchId($batchId)
    {
        if (is_null($batchId)) {
            throw new \InvalidArgumentException('non-nullable batchId cannot be null');
        }

        $this->container['batchId'] = $batchId;
        return $this;
    }

    /**
     * Gets modifiedDtm
     *
     * @return int|null
    
     */
    public function getModifiedDtm()
    {
        return $this->container['modifiedDtm'];
    }

    /**
     * Sets modifiedDtm
     *
     * @param int|null $modifiedDtm The most recent time the feed was modified. Format: yyyymmddThh:mm:ss.xxxz
     *
     * @return self
    
     */
    public function setModifiedDtm($modifiedDtm)
    {
        if (is_null($modifiedDtm)) {
            throw new \InvalidArgumentException('non-nullable modifiedDtm cannot be null');
        }

        $this->container['modifiedDtm'] = $modifiedDtm;
        return $this;
    }
}
