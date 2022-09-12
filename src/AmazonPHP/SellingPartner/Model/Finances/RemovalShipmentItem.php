<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
class RemovalShipmentItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RemovalShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'removal_shipment_item_id' => 'string',
        'tax_collection_model' => 'string',
        'fulfillment_network_sku' => 'string',
        'quantity' => 'int',
        'revenue' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'fee_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_withheld' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
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
        'removal_shipment_item_id' => null,
        'tax_collection_model' => null,
        'fulfillment_network_sku' => null,
        'quantity' => 'int32',
        'revenue' => null,
        'fee_amount' => null,
        'tax_amount' => null,
        'tax_withheld' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'removal_shipment_item_id' => 'RemovalShipmentItemId',
        'tax_collection_model' => 'TaxCollectionModel',
        'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
        'quantity' => 'Quantity',
        'revenue' => 'Revenue',
        'fee_amount' => 'FeeAmount',
        'tax_amount' => 'TaxAmount',
        'tax_withheld' => 'TaxWithheld',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'removal_shipment_item_id' => 'setRemovalShipmentItemId',
        'tax_collection_model' => 'setTaxCollectionModel',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'quantity' => 'setQuantity',
        'revenue' => 'setRevenue',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'tax_withheld' => 'setTaxWithheld',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'removal_shipment_item_id' => 'getRemovalShipmentItemId',
        'tax_collection_model' => 'getTaxCollectionModel',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'quantity' => 'getQuantity',
        'revenue' => 'getRevenue',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'tax_withheld' => 'getTaxWithheld',
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
        $this->container['removal_shipment_item_id'] = $data['removal_shipment_item_id'] ?? null;
        $this->container['tax_collection_model'] = $data['tax_collection_model'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['revenue'] = $data['revenue'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['tax_withheld'] = $data['tax_withheld'] ?? null;
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
        if ($this->container['revenue'] !== null) {
            $this->container['revenue']->validate();
        }

        if ($this->container['fee_amount'] !== null) {
            $this->container['fee_amount']->validate();
        }

        if ($this->container['tax_amount'] !== null) {
            $this->container['tax_amount']->validate();
        }

        if ($this->container['tax_withheld'] !== null) {
            $this->container['tax_withheld']->validate();
        }
    }

    /**
     * Gets removal_shipment_item_id.
     *
     * @return null|string
     */
    public function getRemovalShipmentItemId() : ?string
    {
        return $this->container['removal_shipment_item_id'];
    }

    /**
     * Sets removal_shipment_item_id.
     *
     * @param null|string $removal_shipment_item_id an identifier for an item in a removal shipment
     *
     * @return self
     */
    public function setRemovalShipmentItemId(?string $removal_shipment_item_id) : self
    {
        $this->container['removal_shipment_item_id'] = $removal_shipment_item_id;

        return $this;
    }

    /**
     * Gets tax_collection_model.
     *
     * @return null|string
     */
    public function getTaxCollectionModel() : ?string
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model.
     *
     * @param null|string $tax_collection_model The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return self
     */
    public function setTaxCollectionModel(?string $tax_collection_model) : self
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

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
     * @param null|string $fulfillment_network_sku the Amazon fulfillment network SKU for the item
     *
     * @return self
     */
    public function setFulfillmentNetworkSku(?string $fulfillment_network_sku) : self
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return null|int
     */
    public function getQuantity() : ?int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param null|int $quantity the quantity of the item
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets revenue.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getRevenue() : ?Currency
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $revenue revenue
     *
     * @return self
     */
    public function setRevenue(?Currency $revenue) : self
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets fee_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getFeeAmount() : ?Currency
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount(?Currency $fee_amount) : self
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets tax_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxAmount() : ?Currency
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount(?Currency $tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_withheld.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxWithheld() : ?Currency
    {
        return $this->container['tax_withheld'];
    }

    /**
     * Sets tax_withheld.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_withheld tax_withheld
     *
     * @return self
     */
    public function setTaxWithheld(?Currency $tax_withheld) : self
    {
        $this->container['tax_withheld'] = $tax_withheld;

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
