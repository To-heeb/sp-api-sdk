<?php declare(strict_types=1);
/**
 * FeesEstimateRequest.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\ProductFees;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeesEstimateRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FeesEstimateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'is_amazon_fulfilled' => 'bool',
        'price_to_estimate_fees' => '\AmazonPHP\SellingPartner\Model\ProductFees\PriceToEstimateFees',
        'identifier' => 'string',
        'optional_fulfillment_program' => '\AmazonPHP\SellingPartner\Model\ProductFees\OptionalFulfillmentProgram',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'is_amazon_fulfilled' => null,
        'price_to_estimate_fees' => null,
        'identifier' => null,
        'optional_fulfillment_program' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'MarketplaceId',
        'is_amazon_fulfilled' => 'IsAmazonFulfilled',
        'price_to_estimate_fees' => 'PriceToEstimateFees',
        'identifier' => 'Identifier',
        'optional_fulfillment_program' => 'OptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'is_amazon_fulfilled' => 'setIsAmazonFulfilled',
        'price_to_estimate_fees' => 'setPriceToEstimateFees',
        'identifier' => 'setIdentifier',
        'optional_fulfillment_program' => 'setOptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'is_amazon_fulfilled' => 'getIsAmazonFulfilled',
        'price_to_estimate_fees' => 'getPriceToEstimateFees',
        'identifier' => 'getIdentifier',
        'optional_fulfillment_program' => 'getOptionalFulfillmentProgram',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['is_amazon_fulfilled'] = $data['is_amazon_fulfilled'] ?? null;
        $this->container['price_to_estimate_fees'] = $data['price_to_estimate_fees'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['optional_fulfillment_program'] = $data['optional_fulfillment_program'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
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
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }

        if ($this->container['price_to_estimate_fees'] === null) {
            $invalidProperties[] = "'price_to_estimate_fees' can't be null";
        }

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id a marketplace identifier
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets is_amazon_fulfilled.
     */
    public function getIsAmazonFulfilled() : ?bool
    {
        return $this->container['is_amazon_fulfilled'];
    }

    /**
     * Sets is_amazon_fulfilled.
     *
     * @param null|bool $is_amazon_fulfilled when true, the offer is fulfilled by Amazon
     */
    public function setIsAmazonFulfilled(?bool $is_amazon_fulfilled) : self
    {
        $this->container['is_amazon_fulfilled'] = $is_amazon_fulfilled;

        return $this;
    }

    /**
     * Gets price_to_estimate_fees.
     */
    public function getPriceToEstimateFees() : PriceToEstimateFees
    {
        return $this->container['price_to_estimate_fees'];
    }

    /**
     * Sets price_to_estimate_fees.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\PriceToEstimateFees $price_to_estimate_fees price_to_estimate_fees
     */
    public function setPriceToEstimateFees(PriceToEstimateFees $price_to_estimate_fees) : self
    {
        $this->container['price_to_estimate_fees'] = $price_to_estimate_fees;

        return $this;
    }

    /**
     * Gets identifier.
     */
    public function getIdentifier() : string
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier.
     *
     * @param string $identifier a unique identifier provided by the caller to track this request
     */
    public function setIdentifier(string $identifier) : self
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets optional_fulfillment_program.
     */
    public function getOptionalFulfillmentProgram() : ?OptionalFulfillmentProgram
    {
        return $this->container['optional_fulfillment_program'];
    }

    /**
     * Sets optional_fulfillment_program.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\OptionalFulfillmentProgram $optional_fulfillment_program optional_fulfillment_program
     */
    public function setOptionalFulfillmentProgram(?OptionalFulfillmentProgram $optional_fulfillment_program) : self
    {
        $this->container['optional_fulfillment_program'] = $optional_fulfillment_program;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
    public function jsonSerialize() : string
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}