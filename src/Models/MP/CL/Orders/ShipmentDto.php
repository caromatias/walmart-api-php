<?php

/**
 * ShipmentDto
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CL\Orders;

use Walmart\Models\BaseModel;

/**
 * ShipmentDto Class Doc Comment
 *
 * @category Class

 * @description List of shipments associated with the order

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipmentDto extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentLines' => '\Walmart\Models\MP\CL\Orders\ShipmentLine[]',
        'carrier' => 'string',
        'trackingNumber' => 'string',
        'trackingURL' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentLines' => null,
        'carrier' => null,
        'trackingNumber' => null,
        'trackingURL' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentLines' => false,
        'carrier' => false,
        'trackingNumber' => false,
        'trackingURL' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentLines' => 'shipmentLines',
        'carrier' => 'carrier',
        'trackingNumber' => 'trackingNumber',
        'trackingURL' => 'trackingURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentLines' => 'setShipmentLines',
        'carrier' => 'setCarrier',
        'trackingNumber' => 'setTrackingNumber',
        'trackingURL' => 'setTrackingURL'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentLines' => 'getShipmentLines',
        'carrier' => 'getCarrier',
        'trackingNumber' => 'getTrackingNumber',
        'trackingURL' => 'getTrackingURL'
    ];


    public const CARRIER_MX_FEDX = 'MX-FEDX';

    public const CARRIER_MX_DHL = 'MX-DHL';

    public const CARRIER_ESTAFETA = 'Estafeta';

    public const CARRIER_SFC = 'SFC';

    public const CARRIER_OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_MX_FEDX,
            self::CARRIER_MX_DHL,
            self::CARRIER_ESTAFETA,
            self::CARRIER_SFC,
            self::CARRIER_OTHER,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentLines', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('trackingNumber', $data ?? [], null);
        $this->setIfExists('trackingURL', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($this->container['carrier']) && !in_array($this->container['carrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carrier', must be one of '%s'",
                $this->container['carrier'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets shipmentLines
     *
     * @return \Walmart\Models\MP\CL\Orders\ShipmentLine[]|null
    
     */
    public function getShipmentLines()
    {
        return $this->container['shipmentLines'];
    }

    /**
     * Sets shipmentLines
     *
     * @param \Walmart\Models\MP\CL\Orders\ShipmentLine[]|null $shipmentLines shipmentLines
     *
     * @return self
    
     */
    public function setShipmentLines($shipmentLines)
    {
        if (is_null($shipmentLines)) {
            throw new \InvalidArgumentException('non-nullable shipmentLines cannot be null');
        }

        $this->container['shipmentLines'] = $shipmentLines;
        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
    
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier The package shipment carrier. Valid entries are: MX-FEDX, MX-DHL, Estafeta, SFC, Other.<br />if carrier is (MX-FEDX or MX-DHL or Estafeta or SFC)<br />&nbsp;&nbsp;&nbsp;&nbsp;then trackingNumber is Mandatory<br />if carrier is Other<br />&nbsp;&nbsp;&nbsp;&nbsp;then both trackingNumber & trackingURL is Mandatory<br />
     *
     * @return self
    
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $allowedValues = $this->getCarrierAllowableValues();
        if (!in_array($carrier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carrier', must be one of '%s'",
                    $carrier,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['carrier'] = $carrier;
        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string|null
    
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string|null $trackingNumber Tracking number of the order
     *
     * @return self
    
     */
    public function setTrackingNumber($trackingNumber)
    {
        if (is_null($trackingNumber)) {
            throw new \InvalidArgumentException('non-nullable trackingNumber cannot be null');
        }

        $this->container['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Gets trackingURL
     *
     * @return string|null
    
     */
    public function getTrackingURL()
    {
        return $this->container['trackingURL'];
    }

    /**
     * Sets trackingURL
     *
     * @param string|null $trackingURL Tracking Url of the order
     *
     * @return self
    
     */
    public function setTrackingURL($trackingURL)
    {
        if (is_null($trackingURL)) {
            throw new \InvalidArgumentException('non-nullable trackingURL cannot be null');
        }

        $this->container['trackingURL'] = $trackingURL;
        return $this;
    }
}
