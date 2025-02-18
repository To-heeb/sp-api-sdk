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
class PrepInstruction
{
    /**
     * Possible values of this enum.
     */
    final public const POLYBAGGING = 'Polybagging';

    final public const BUBBLE_WRAPPING = 'BubbleWrapping';

    final public const TAPING = 'Taping';

    final public const BLACK_SHRINK_WRAPPING = 'BlackShrinkWrapping';

    final public const LABELING = 'Labeling';

    final public const HANG_GARMENT = 'HangGarment';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::POLYBAGGING,
            self::BUBBLE_WRAPPING,
            self::TAPING,
            self::BLACK_SHRINK_WRAPPING,
            self::LABELING,
            self::HANG_GARMENT,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
