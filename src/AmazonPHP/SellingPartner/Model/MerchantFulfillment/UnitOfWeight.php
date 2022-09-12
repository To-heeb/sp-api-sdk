<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class UnitOfWeight
{
    /**
     * Possible values of this enum.
     */
    public const OZ = 'oz';

    public const G = 'g';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::OZ,
            self::G,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
