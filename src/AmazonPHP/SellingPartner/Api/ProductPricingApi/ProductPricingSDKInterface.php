<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ProductPricingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ProductPricingSDKInterface
{
    public const API_NAME = 'ProductPricing';

    public const OPERATION_GETCOMPETITIVEPRICING = 'getCompetitivePricing';

    public const OPERATION_GETCOMPETITIVEPRICING_PATH = '/products/pricing/v0/competitivePrice';

    public const OPERATION_GETITEMOFFERS = 'getItemOffers';

    public const OPERATION_GETITEMOFFERS_PATH = '/products/pricing/v0/items/{Asin}/offers';

    public const OPERATION_GETITEMOFFERSBATCH = 'getItemOffersBatch';

    public const OPERATION_GETITEMOFFERSBATCH_PATH = '/batches/products/pricing/v0/itemOffers';

    public const OPERATION_GETLISTINGOFFERS = 'getListingOffers';

    public const OPERATION_GETLISTINGOFFERS_PATH = '/products/pricing/v0/listings/{SellerSKU}/offers';

    public const OPERATION_GETLISTINGOFFERSBATCH = 'getListingOffersBatch';

    public const OPERATION_GETLISTINGOFFERSBATCH_PATH = '/batches/products/pricing/v0/listingOffers';

    public const OPERATION_GETPRICING = 'getPricing';

    public const OPERATION_GETPRICING_PATH = '/products/pricing/v0/price';

    /**
     * Operation getCompetitivePricing.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param null|string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param null|string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param null|string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\GetPricingResponse
     */
    public function getCompetitivePricing(AccessToken $accessToken, string $region, string $marketplace_id, string $item_type, ?array $asins = null, ?array $skus = null, ?string $customer_type = null) : \AmazonPHP\SellingPartner\Model\ProductPricing\GetPricingResponse;

    /**
     * Operation getItemOffers.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param null|string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResponse
     */
    public function getItemOffers(AccessToken $accessToken, string $region, string $marketplace_id, string $item_condition, string $asin, ?string $customer_type = null) : \AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResponse;

    /**
     * Operation getItemOffersBatch.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\GetItemOffersBatchRequest $get_item_offers_batch_request_body get_item_offers_batch_request_body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\GetItemOffersBatchResponse
     */
    public function getItemOffersBatch(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ProductPricing\GetItemOffersBatchRequest $get_item_offers_batch_request_body) : \AmazonPHP\SellingPartner\Model\ProductPricing\GetItemOffersBatchResponse;

    /**
     * Operation getListingOffers.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param null|string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResponse
     */
    public function getListingOffers(AccessToken $accessToken, string $region, string $marketplace_id, string $item_condition, string $seller_sku, ?string $customer_type = null) : \AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResponse;

    /**
     * Operation getListingOffersBatch.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\GetListingOffersBatchRequest $get_listing_offers_batch_request_body get_listing_offers_batch_request_body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\GetListingOffersBatchResponse
     */
    public function getListingOffersBatch(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ProductPricing\GetListingOffersBatchRequest $get_listing_offers_batch_request_body) : \AmazonPHP\SellingPartner\Model\ProductPricing\GetListingOffersBatchResponse;

    /**
     * Operation getPricing.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param null|string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param null|string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param null|string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param null|string $offer_type Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\GetPricingResponse
     */
    public function getPricing(AccessToken $accessToken, string $region, string $marketplace_id, string $item_type, ?array $asins = null, ?array $skus = null, ?string $item_condition = null, ?string $offer_type = null) : \AmazonPHP\SellingPartner\Model\ProductPricing\GetPricingResponse;
}
