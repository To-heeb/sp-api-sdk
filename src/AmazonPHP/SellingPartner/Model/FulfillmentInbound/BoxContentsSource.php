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
class BoxContentsSource
{
    /**
     * Possible values of this enum.
     */
    public const NONE = 'NONE';

    public const FEED = 'FEED';

    public const _2_D_BARCODE = '2D_BARCODE';

    public const INTERACTIVE = 'INTERACTIVE';

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
            self::NONE,
            self::FEED,
            self::_2_D_BARCODE,
            self::INTERACTIVE,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
