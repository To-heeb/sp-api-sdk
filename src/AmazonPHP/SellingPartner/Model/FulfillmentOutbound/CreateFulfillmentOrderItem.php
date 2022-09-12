<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateFulfillmentOrderItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateFulfillmentOrderItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => 'int',
        'gift_message' => 'string',
        'displayable_comment' => 'string',
        'fulfillment_network_sku' => 'string',
        'per_unit_declared_value' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'per_unit_price' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'per_unit_tax' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
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
        'seller_sku' => null,
        'seller_fulfillment_order_item_id' => null,
        'quantity' => 'int32',
        'gift_message' => null,
        'displayable_comment' => null,
        'fulfillment_network_sku' => null,
        'per_unit_declared_value' => null,
        'per_unit_price' => null,
        'per_unit_tax' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'displayable_comment' => 'displayableComment',
        'fulfillment_network_sku' => 'fulfillmentNetworkSku',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'per_unit_price' => 'perUnitPrice',
        'per_unit_tax' => 'perUnitTax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'displayable_comment' => 'setDisplayableComment',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'per_unit_price' => 'setPerUnitPrice',
        'per_unit_tax' => 'setPerUnitTax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'displayable_comment' => 'getDisplayableComment',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'per_unit_price' => 'getPerUnitPrice',
        'per_unit_tax' => 'getPerUnitTax',
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['gift_message'] = $data['gift_message'] ?? null;
        $this->container['displayable_comment'] = $data['displayable_comment'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['per_unit_declared_value'] = $data['per_unit_declared_value'] ?? null;
        $this->container['per_unit_price'] = $data['per_unit_price'] ?? null;
        $this->container['per_unit_tax'] = $data['per_unit_tax'] ?? null;
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
        if ($this->container['seller_sku'] === null) {
            throw new AssertionException("'seller_sku' can't be null");
        }

        if ((\mb_strlen($this->container['seller_sku']) > 50)) {
            throw new AssertionException("invalid value for 'seller_sku', the character length must be smaller than or equal to 50.");
        }

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            throw new AssertionException("'seller_fulfillment_order_item_id' can't be null");
        }

        if ((\mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50)) {
            throw new AssertionException("invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.");
        }

        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if (null !== $this->container['gift_message'] && (\mb_strlen($this->container['gift_message']) > 512)) {
            throw new AssertionException("invalid value for 'gift_message', the character length must be smaller than or equal to 512.");
        }

        if (null !== $this->container['displayable_comment'] && (\mb_strlen($this->container['displayable_comment']) > 250)) {
            throw new AssertionException("invalid value for 'displayable_comment', the character length must be smaller than or equal to 250.");
        }

        if ($this->container['per_unit_declared_value'] !== null) {
            $this->container['per_unit_declared_value']->validate();
        }

        if ($this->container['per_unit_price'] !== null) {
            $this->container['per_unit_price']->validate();
        }

        if ($this->container['per_unit_tax'] !== null) {
            $this->container['per_unit_tax']->validate();
        }
    }

    /**
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku() : string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return self
     */
    public function setSellerSku(string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId() : string
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id A fulfillment order item identifier that the seller creates to track fulfillment order items. Used to disambiguate multiple fulfillment items that have the same SellerSKU. For example, the seller might assign different SellerFulfillmentOrderItemId values to two items in a fulfillment order that share the same SellerSKU but have different GiftMessage values.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId(string $seller_fulfillment_order_item_id) : self
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity the item quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets gift_message.
     *
     * @return null|string
     */
    public function getGiftMessage() : ?string
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message.
     *
     * @param null|string $gift_message a message to the gift recipient, if applicable
     *
     * @return self
     */
    public function setGiftMessage(?string $gift_message) : self
    {
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets displayable_comment.
     *
     * @return null|string
     */
    public function getDisplayableComment() : ?string
    {
        return $this->container['displayable_comment'];
    }

    /**
     * Sets displayable_comment.
     *
     * @param null|string $displayable_comment item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip
     *
     * @return self
     */
    public function setDisplayableComment(?string $displayable_comment) : self
    {
        $this->container['displayable_comment'] = $displayable_comment;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku.
     *
     * @return null|string
     */
    public function getFulfillmentNetworkSku() : ?string
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku.
     *
     * @param null|string $fulfillment_network_sku amazon's fulfillment network SKU of the item
     *
     * @return self
     */
    public function setFulfillmentNetworkSku(?string $fulfillment_network_sku) : self
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets per_unit_declared_value.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getPerUnitDeclaredValue() : ?Money
    {
        return $this->container['per_unit_declared_value'];
    }

    /**
     * Sets per_unit_declared_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $per_unit_declared_value per_unit_declared_value
     *
     * @return self
     */
    public function setPerUnitDeclaredValue(?Money $per_unit_declared_value) : self
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }

    /**
     * Gets per_unit_price.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getPerUnitPrice() : ?Money
    {
        return $this->container['per_unit_price'];
    }

    /**
     * Sets per_unit_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $per_unit_price per_unit_price
     *
     * @return self
     */
    public function setPerUnitPrice(?Money $per_unit_price) : self
    {
        $this->container['per_unit_price'] = $per_unit_price;

        return $this;
    }

    /**
     * Gets per_unit_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getPerUnitTax() : ?Money
    {
        return $this->container['per_unit_tax'];
    }

    /**
     * Sets per_unit_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $per_unit_tax per_unit_tax
     *
     * @return self
     */
    public function setPerUnitTax(?Money $per_unit_tax) : self
    {
        $this->container['per_unit_tax'] = $per_unit_tax;

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
