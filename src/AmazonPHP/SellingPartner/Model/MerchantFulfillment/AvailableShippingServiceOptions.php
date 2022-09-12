<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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
class AvailableShippingServiceOptions implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AvailableShippingServiceOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'available_carrier_will_pick_up_options' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableCarrierWillPickUpOption[]',
        'available_delivery_experience_options' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableDeliveryExperienceOption[]',
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
        'available_carrier_will_pick_up_options' => null,
        'available_delivery_experience_options' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'available_carrier_will_pick_up_options' => 'AvailableCarrierWillPickUpOptions',
        'available_delivery_experience_options' => 'AvailableDeliveryExperienceOptions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'available_carrier_will_pick_up_options' => 'setAvailableCarrierWillPickUpOptions',
        'available_delivery_experience_options' => 'setAvailableDeliveryExperienceOptions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'available_carrier_will_pick_up_options' => 'getAvailableCarrierWillPickUpOptions',
        'available_delivery_experience_options' => 'getAvailableDeliveryExperienceOptions',
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
        $this->container['available_carrier_will_pick_up_options'] = $data['available_carrier_will_pick_up_options'] ?? null;
        $this->container['available_delivery_experience_options'] = $data['available_delivery_experience_options'] ?? null;
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
        if ($this->container['available_carrier_will_pick_up_options'] === null) {
            throw new AssertionException("'available_carrier_will_pick_up_options' can't be null");
        }

        if ($this->container['available_delivery_experience_options'] === null) {
            throw new AssertionException("'available_delivery_experience_options' can't be null");
        }
    }

    /**
     * Gets available_carrier_will_pick_up_options.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableCarrierWillPickUpOption[]
     */
    public function getAvailableCarrierWillPickUpOptions() : array
    {
        return $this->container['available_carrier_will_pick_up_options'];
    }

    /**
     * Sets available_carrier_will_pick_up_options.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableCarrierWillPickUpOption[] $available_carrier_will_pick_up_options list of available carrier pickup options
     *
     * @return self
     */
    public function setAvailableCarrierWillPickUpOptions(array $available_carrier_will_pick_up_options) : self
    {
        $this->container['available_carrier_will_pick_up_options'] = $available_carrier_will_pick_up_options;

        return $this;
    }

    /**
     * Gets available_delivery_experience_options.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableDeliveryExperienceOption[]
     */
    public function getAvailableDeliveryExperienceOptions() : array
    {
        return $this->container['available_delivery_experience_options'];
    }

    /**
     * Sets available_delivery_experience_options.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AvailableDeliveryExperienceOption[] $available_delivery_experience_options list of available delivery experience options
     *
     * @return self
     */
    public function setAvailableDeliveryExperienceOptions(array $available_delivery_experience_options) : self
    {
        $this->container['available_delivery_experience_options'] = $available_delivery_experience_options;

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
