<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PutTransportDetailsRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PutTransportDetailsRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'is_partnered' => 'bool',
        'shipment_type' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType',
        'transport_details' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportDetailInput',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'is_partnered' => null,
        'shipment_type' => null,
        'transport_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'is_partnered' => 'IsPartnered',
        'shipment_type' => 'ShipmentType',
        'transport_details' => 'TransportDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'is_partnered' => 'setIsPartnered',
        'shipment_type' => 'setShipmentType',
        'transport_details' => 'setTransportDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'is_partnered' => 'getIsPartnered',
        'shipment_type' => 'getShipmentType',
        'transport_details' => 'getTransportDetails',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_partnered'] = $data['is_partnered'] ?? null;
        $this->container['shipment_type'] = $data['shipment_type'] ?? null;
        $this->container['transport_details'] = $data['transport_details'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['is_partnered'] === null) {
            throw new AssertionException("'is_partnered' can't be null");
        }

        if ($this->container['shipment_type'] === null) {
            throw new AssertionException("'shipment_type' can't be null");
        }

        if ($this->container['transport_details'] === null) {
            throw new AssertionException("'transport_details' can't be null");
        }

        $this->container['transport_details']->validate();
    }

    /**
     * Gets is_partnered.
     *
     * @return bool
     */
    public function getIsPartnered() : bool
    {
        return $this->container['is_partnered'];
    }

    /**
     * Sets is_partnered.
     *
     * @param bool $is_partnered indicates whether a putTransportDetails request is for an Amazon-partnered carrier
     *
     * @return self
     */
    public function setIsPartnered(bool $is_partnered) : self
    {
        $this->container['is_partnered'] = $is_partnered;

        return $this;
    }

    /**
     * Gets shipment_type.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType
     */
    public function getShipmentType() : ShipmentType
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType $shipment_type shipment_type
     *
     * @return self
     */
    public function setShipmentType(ShipmentType $shipment_type) : self
    {
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets transport_details.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportDetailInput
     */
    public function getTransportDetails() : TransportDetailInput
    {
        return $this->container['transport_details'];
    }

    /**
     * Sets transport_details.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportDetailInput $transport_details transport_details
     *
     * @return self
     */
    public function setTransportDetails(TransportDetailInput $transport_details) : self
    {
        $this->container['transport_details'] = $transport_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
