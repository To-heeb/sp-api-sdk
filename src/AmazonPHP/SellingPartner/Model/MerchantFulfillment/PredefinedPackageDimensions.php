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
class PredefinedPackageDimensions
{
    /**
     * Possible values of this enum.
     */
    public const FED_EX_BOX_10KG = 'FedEx_Box_10kg';

    public const FED_EX_BOX_25KG = 'FedEx_Box_25kg';

    public const FED_EX_BOX_EXTRA_LARGE_1 = 'FedEx_Box_Extra_Large_1';

    public const FED_EX_BOX_EXTRA_LARGE_2 = 'FedEx_Box_Extra_Large_2';

    public const FED_EX_BOX_LARGE_1 = 'FedEx_Box_Large_1';

    public const FED_EX_BOX_LARGE_2 = 'FedEx_Box_Large_2';

    public const FED_EX_BOX_MEDIUM_1 = 'FedEx_Box_Medium_1';

    public const FED_EX_BOX_MEDIUM_2 = 'FedEx_Box_Medium_2';

    public const FED_EX_BOX_SMALL_1 = 'FedEx_Box_Small_1';

    public const FED_EX_BOX_SMALL_2 = 'FedEx_Box_Small_2';

    public const FED_EX_ENVELOPE = 'FedEx_Envelope';

    public const FED_EX_PADDED_PAK = 'FedEx_Padded_Pak';

    public const FED_EX_PAK_1 = 'FedEx_Pak_1';

    public const FED_EX_PAK_2 = 'FedEx_Pak_2';

    public const FED_EX_TUBE = 'FedEx_Tube';

    public const FED_EX_XL_PAK = 'FedEx_XL_Pak';

    public const UPS_BOX_10KG = 'UPS_Box_10kg';

    public const UPS_BOX_25KG = 'UPS_Box_25kg';

    public const UPS_EXPRESS_BOX = 'UPS_Express_Box';

    public const UPS_EXPRESS_BOX_LARGE = 'UPS_Express_Box_Large';

    public const UPS_EXPRESS_BOX_MEDIUM = 'UPS_Express_Box_Medium';

    public const UPS_EXPRESS_BOX_SMALL = 'UPS_Express_Box_Small';

    public const UPS_EXPRESS_ENVELOPE = 'UPS_Express_Envelope';

    public const UPS_EXPRESS_HARD_PAK = 'UPS_Express_Hard_Pak';

    public const UPS_EXPRESS_LEGAL_ENVELOPE = 'UPS_Express_Legal_Envelope';

    public const UPS_EXPRESS_PAK = 'UPS_Express_Pak';

    public const UPS_EXPRESS_TUBE = 'UPS_Express_Tube';

    public const UPS_LABORATORY_PAK = 'UPS_Laboratory_Pak';

    public const UPS_PAD_PAK = 'UPS_Pad_Pak';

    public const UPS_PALLET = 'UPS_Pallet';

    public const USPS_CARD = 'USPS_Card';

    public const USPS_FLAT = 'USPS_Flat';

    public const USPS_FLAT_RATE_CARDBOARD_ENVELOPE = 'USPS_FlatRateCardboardEnvelope';

    public const USPS_FLAT_RATE_ENVELOPE = 'USPS_FlatRateEnvelope';

    public const USPS_FLAT_RATE_GIFT_CARD_ENVELOPE = 'USPS_FlatRateGiftCardEnvelope';

    public const USPS_FLAT_RATE_LEGAL_ENVELOPE = 'USPS_FlatRateLegalEnvelope';

    public const USPS_FLAT_RATE_PADDED_ENVELOPE = 'USPS_FlatRatePaddedEnvelope';

    public const USPS_FLAT_RATE_WINDOW_ENVELOPE = 'USPS_FlatRateWindowEnvelope';

    public const USPS_LARGE_FLAT_RATE_BOARD_GAME_BOX = 'USPS_LargeFlatRateBoardGameBox';

    public const USPS_LARGE_FLAT_RATE_BOX = 'USPS_LargeFlatRateBox';

    public const USPS_LETTER = 'USPS_Letter';

    public const USPS_MEDIUM_FLAT_RATE_BOX1 = 'USPS_MediumFlatRateBox1';

    public const USPS_MEDIUM_FLAT_RATE_BOX2 = 'USPS_MediumFlatRateBox2';

    public const USPS_REGIONAL_RATE_BOX_A1 = 'USPS_RegionalRateBoxA1';

    public const USPS_REGIONAL_RATE_BOX_A2 = 'USPS_RegionalRateBoxA2';

    public const USPS_REGIONAL_RATE_BOX_B1 = 'USPS_RegionalRateBoxB1';

    public const USPS_REGIONAL_RATE_BOX_B2 = 'USPS_RegionalRateBoxB2';

    public const USPS_REGIONAL_RATE_BOX_C = 'USPS_RegionalRateBoxC';

    public const USPS_SMALL_FLAT_RATE_BOX = 'USPS_SmallFlatRateBox';

    public const USPS_SMALL_FLAT_RATE_ENVELOPE = 'USPS_SmallFlatRateEnvelope';

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
            self::FED_EX_BOX_10KG,
            self::FED_EX_BOX_25KG,
            self::FED_EX_BOX_EXTRA_LARGE_1,
            self::FED_EX_BOX_EXTRA_LARGE_2,
            self::FED_EX_BOX_LARGE_1,
            self::FED_EX_BOX_LARGE_2,
            self::FED_EX_BOX_MEDIUM_1,
            self::FED_EX_BOX_MEDIUM_2,
            self::FED_EX_BOX_SMALL_1,
            self::FED_EX_BOX_SMALL_2,
            self::FED_EX_ENVELOPE,
            self::FED_EX_PADDED_PAK,
            self::FED_EX_PAK_1,
            self::FED_EX_PAK_2,
            self::FED_EX_TUBE,
            self::FED_EX_XL_PAK,
            self::UPS_BOX_10KG,
            self::UPS_BOX_25KG,
            self::UPS_EXPRESS_BOX,
            self::UPS_EXPRESS_BOX_LARGE,
            self::UPS_EXPRESS_BOX_MEDIUM,
            self::UPS_EXPRESS_BOX_SMALL,
            self::UPS_EXPRESS_ENVELOPE,
            self::UPS_EXPRESS_HARD_PAK,
            self::UPS_EXPRESS_LEGAL_ENVELOPE,
            self::UPS_EXPRESS_PAK,
            self::UPS_EXPRESS_TUBE,
            self::UPS_LABORATORY_PAK,
            self::UPS_PAD_PAK,
            self::UPS_PALLET,
            self::USPS_CARD,
            self::USPS_FLAT,
            self::USPS_FLAT_RATE_CARDBOARD_ENVELOPE,
            self::USPS_FLAT_RATE_ENVELOPE,
            self::USPS_FLAT_RATE_GIFT_CARD_ENVELOPE,
            self::USPS_FLAT_RATE_LEGAL_ENVELOPE,
            self::USPS_FLAT_RATE_PADDED_ENVELOPE,
            self::USPS_FLAT_RATE_WINDOW_ENVELOPE,
            self::USPS_LARGE_FLAT_RATE_BOARD_GAME_BOX,
            self::USPS_LARGE_FLAT_RATE_BOX,
            self::USPS_LETTER,
            self::USPS_MEDIUM_FLAT_RATE_BOX1,
            self::USPS_MEDIUM_FLAT_RATE_BOX2,
            self::USPS_REGIONAL_RATE_BOX_A1,
            self::USPS_REGIONAL_RATE_BOX_A2,
            self::USPS_REGIONAL_RATE_BOX_B1,
            self::USPS_REGIONAL_RATE_BOX_B2,
            self::USPS_REGIONAL_RATE_BOX_C,
            self::USPS_SMALL_FLAT_RATE_BOX,
            self::USPS_SMALL_FLAT_RATE_ENVELOPE,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
