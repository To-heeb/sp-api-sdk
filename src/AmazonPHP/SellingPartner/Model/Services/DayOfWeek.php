<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class DayOfWeek
{
    /**
     * Possible values of this enum.
     */
    public const MONDAY = 'MONDAY';

    public const TUESDAY = 'TUESDAY';

    public const WEDNESDAY = 'WEDNESDAY';

    public const THURSDAY = 'THURSDAY';

    public const FRIDAY = 'FRIDAY';

    public const SATURDAY = 'SATURDAY';

    public const SUNDAY = 'SUNDAY';

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
            self::MONDAY,
            self::TUESDAY,
            self::WEDNESDAY,
            self::THURSDAY,
            self::FRIDAY,
            self::SATURDAY,
            self::SUNDAY,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
