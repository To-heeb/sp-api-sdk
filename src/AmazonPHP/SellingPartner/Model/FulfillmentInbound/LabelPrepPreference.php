<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class LabelPrepPreference
{
    /**
     * Possible values of this enum.
     */
    public const SELLER_LABEL = 'SELLER_LABEL';

    public const AMAZON_LABEL_ONLY = 'AMAZON_LABEL_ONLY';

    public const AMAZON_LABEL_PREFERRED = 'AMAZON_LABEL_PREFERRED';

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
            self::SELLER_LABEL,
            self::AMAZON_LABEL_ONLY,
            self::AMAZON_LABEL_PREFERRED,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
