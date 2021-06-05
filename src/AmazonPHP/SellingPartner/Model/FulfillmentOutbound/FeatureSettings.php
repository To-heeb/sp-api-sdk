<?php declare(strict_types=1);
/**
 * FeatureSettings.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class FeatureSettings implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const FEATURE_FULFILLMENT_POLICY_REQUIRED = 'Required';

    public const FEATURE_FULFILLMENT_POLICY_NOT_REQUIRED = 'NotRequired';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FeatureSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'feature_name' => 'string',
        'feature_fulfillment_policy' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'feature_name' => null,
        'feature_fulfillment_policy' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feature_name' => 'featureName',
        'feature_fulfillment_policy' => 'featureFulfillmentPolicy',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'feature_name' => 'setFeatureName',
        'feature_fulfillment_policy' => 'setFeatureFulfillmentPolicy',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'feature_name' => 'getFeatureName',
        'feature_fulfillment_policy' => 'getFeatureFulfillmentPolicy',
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
        $this->container['feature_name'] = $data['feature_name'] ?? null;
        $this->container['feature_fulfillment_policy'] = $data['feature_fulfillment_policy'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFeatureFulfillmentPolicyAllowableValues() : array
    {
        return [
            self::FEATURE_FULFILLMENT_POLICY_REQUIRED,
            self::FEATURE_FULFILLMENT_POLICY_NOT_REQUIRED,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        $allowedValues = $this->getFeatureFulfillmentPolicyAllowableValues();

        if (null !== $this->container['feature_fulfillment_policy'] && !\in_array($this->container['feature_fulfillment_policy'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'feature_fulfillment_policy', must be one of '%s'",
                $this->container['feature_fulfillment_policy'],
                \implode("', '", $allowedValues)
            );
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
     * Gets feature_name.
     */
    public function getFeatureName() : ?string
    {
        return $this->container['feature_name'];
    }

    /**
     * Sets feature_name.
     *
     * @param null|string $feature_name the name of the feature
     */
    public function setFeatureName(?string $feature_name) : self
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }

    /**
     * Gets feature_fulfillment_policy.
     */
    public function getFeatureFulfillmentPolicy() : ?string
    {
        return $this->container['feature_fulfillment_policy'];
    }

    /**
     * Sets feature_fulfillment_policy.
     *
     * @param null|string $feature_fulfillment_policy specifies the policy to use when fulfilling an order
     */
    public function setFeatureFulfillmentPolicy(?string $feature_fulfillment_policy) : self
    {
        $allowedValues = $this->getFeatureFulfillmentPolicyAllowableValues();

        if (null !== $feature_fulfillment_policy && !\in_array($feature_fulfillment_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'feature_fulfillment_policy', must be one of '%s'",
                    $feature_fulfillment_policy,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['feature_fulfillment_policy'] = $feature_fulfillment_policy;

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