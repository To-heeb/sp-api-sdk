<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorOrders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AcknowledgementStatusDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AcknowledgementStatusDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'acknowledgement_date' => '\DateTimeInterface',
        'accepted_quantity' => '\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity',
        'rejected_quantity' => '\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity',
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
        'acknowledgement_date' => 'date-time',
        'accepted_quantity' => null,
        'rejected_quantity' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'acknowledgement_date' => 'acknowledgementDate',
        'accepted_quantity' => 'acceptedQuantity',
        'rejected_quantity' => 'rejectedQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'acknowledgement_date' => 'setAcknowledgementDate',
        'accepted_quantity' => 'setAcceptedQuantity',
        'rejected_quantity' => 'setRejectedQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'acknowledgement_date' => 'getAcknowledgementDate',
        'accepted_quantity' => 'getAcceptedQuantity',
        'rejected_quantity' => 'getRejectedQuantity',
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
        $this->container['acknowledgement_date'] = $data['acknowledgement_date'] ?? null;
        $this->container['accepted_quantity'] = $data['accepted_quantity'] ?? null;
        $this->container['rejected_quantity'] = $data['rejected_quantity'] ?? null;
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
        if ($this->container['accepted_quantity'] !== null) {
            $this->container['accepted_quantity']->validate();
        }

        if ($this->container['rejected_quantity'] !== null) {
            $this->container['rejected_quantity']->validate();
        }
    }

    /**
     * Gets acknowledgement_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getAcknowledgementDate() : ?\DateTimeInterface
    {
        return $this->container['acknowledgement_date'];
    }

    /**
     * Sets acknowledgement_date.
     *
     * @param null|\DateTimeInterface $acknowledgement_date The date when the line item was confirmed by vendor. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setAcknowledgementDate(?\DateTimeInterface $acknowledgement_date) : self
    {
        $this->container['acknowledgement_date'] = $acknowledgement_date;

        return $this;
    }

    /**
     * Gets accepted_quantity.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity
     */
    public function getAcceptedQuantity() : ?ItemQuantity
    {
        return $this->container['accepted_quantity'];
    }

    /**
     * Sets accepted_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity $accepted_quantity accepted_quantity
     *
     * @return self
     */
    public function setAcceptedQuantity(?ItemQuantity $accepted_quantity) : self
    {
        $this->container['accepted_quantity'] = $accepted_quantity;

        return $this;
    }

    /**
     * Gets rejected_quantity.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity
     */
    public function getRejectedQuantity() : ?ItemQuantity
    {
        return $this->container['rejected_quantity'];
    }

    /**
     * Sets rejected_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity $rejected_quantity rejected_quantity
     *
     * @return self
     */
    public function setRejectedQuantity(?ItemQuantity $rejected_quantity) : self
    {
        $this->container['rejected_quantity'] = $rejected_quantity;

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
