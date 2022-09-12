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
class RetrochargeEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RetrochargeEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'retrocharge_event_type' => 'string',
        'amazon_order_id' => 'string',
        'posted_date' => '\DateTimeInterface',
        'base_tax' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'shipping_tax' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'marketplace_name' => 'string',
        'retrocharge_tax_withheld_list' => '\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]',
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
        'retrocharge_event_type' => null,
        'amazon_order_id' => null,
        'posted_date' => 'date-time',
        'base_tax' => null,
        'shipping_tax' => null,
        'marketplace_name' => null,
        'retrocharge_tax_withheld_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'retrocharge_event_type' => 'RetrochargeEventType',
        'amazon_order_id' => 'AmazonOrderId',
        'posted_date' => 'PostedDate',
        'base_tax' => 'BaseTax',
        'shipping_tax' => 'ShippingTax',
        'marketplace_name' => 'MarketplaceName',
        'retrocharge_tax_withheld_list' => 'RetrochargeTaxWithheldList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'retrocharge_event_type' => 'setRetrochargeEventType',
        'amazon_order_id' => 'setAmazonOrderId',
        'posted_date' => 'setPostedDate',
        'base_tax' => 'setBaseTax',
        'shipping_tax' => 'setShippingTax',
        'marketplace_name' => 'setMarketplaceName',
        'retrocharge_tax_withheld_list' => 'setRetrochargeTaxWithheldList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'retrocharge_event_type' => 'getRetrochargeEventType',
        'amazon_order_id' => 'getAmazonOrderId',
        'posted_date' => 'getPostedDate',
        'base_tax' => 'getBaseTax',
        'shipping_tax' => 'getShippingTax',
        'marketplace_name' => 'getMarketplaceName',
        'retrocharge_tax_withheld_list' => 'getRetrochargeTaxWithheldList',
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
        $this->container['retrocharge_event_type'] = $data['retrocharge_event_type'] ?? null;
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['base_tax'] = $data['base_tax'] ?? null;
        $this->container['shipping_tax'] = $data['shipping_tax'] ?? null;
        $this->container['marketplace_name'] = $data['marketplace_name'] ?? null;
        $this->container['retrocharge_tax_withheld_list'] = $data['retrocharge_tax_withheld_list'] ?? null;
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
        if ($this->container['base_tax'] !== null) {
            $this->container['base_tax']->validate();
        }

        if ($this->container['shipping_tax'] !== null) {
            $this->container['shipping_tax']->validate();
        }
    }

    /**
     * Gets retrocharge_event_type.
     *
     * @return null|string
     */
    public function getRetrochargeEventType() : ?string
    {
        return $this->container['retrocharge_event_type'];
    }

    /**
     * Sets retrocharge_event_type.
     *
     * @param null|string $retrocharge_event_type The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal
     *
     * @return self
     */
    public function setRetrochargeEventType(?string $retrocharge_event_type) : self
    {
        $this->container['retrocharge_event_type'] = $retrocharge_event_type;

        return $this;
    }

    /**
     * Gets amazon_order_id.
     *
     * @return null|string
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param null|string $amazon_order_id an Amazon-defined identifier for an order
     *
     * @return self
     */
    public function setAmazonOrderId(?string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets posted_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets base_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getBaseTax() : ?Currency
    {
        return $this->container['base_tax'];
    }

    /**
     * Sets base_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $base_tax base_tax
     *
     * @return self
     */
    public function setBaseTax(?Currency $base_tax) : self
    {
        $this->container['base_tax'] = $base_tax;

        return $this;
    }

    /**
     * Gets shipping_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getShippingTax() : ?Currency
    {
        return $this->container['shipping_tax'];
    }

    /**
     * Sets shipping_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $shipping_tax shipping_tax
     *
     * @return self
     */
    public function setShippingTax(?Currency $shipping_tax) : self
    {
        $this->container['shipping_tax'] = $shipping_tax;

        return $this;
    }

    /**
     * Gets marketplace_name.
     *
     * @return null|string
     */
    public function getMarketplaceName() : ?string
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name.
     *
     * @param null|string $marketplace_name the name of the marketplace where the retrocharge event occurred
     *
     * @return self
     */
    public function setMarketplaceName(?string $marketplace_name) : self
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }

    /**
     * Gets retrocharge_tax_withheld_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]
     */
    public function getRetrochargeTaxWithheldList() : ?array
    {
        return $this->container['retrocharge_tax_withheld_list'];
    }

    /**
     * Sets retrocharge_tax_withheld_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[] $retrocharge_tax_withheld_list a list of information about taxes withheld
     *
     * @return self
     */
    public function setRetrochargeTaxWithheldList(?array $retrocharge_tax_withheld_list) : self
    {
        $this->container['retrocharge_tax_withheld_list'] = $retrocharge_tax_withheld_list;

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
