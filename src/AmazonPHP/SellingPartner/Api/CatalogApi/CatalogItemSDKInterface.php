<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\CatalogApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface CatalogItemSDKInterface
{
    public const API_NAME = 'CatalogItem';

    public const OPERATION_GETCATALOGITEM = 'getCatalogItem';

    public const OPERATION_GETCATALOGITEM_PATH = '/catalog/2022-04-01/items/{asin}';

    public const OPERATION_SEARCHCATALOGITEMS = 'searchCatalogItems';

    public const OPERATION_SEARCHCATALOGITEMS_PATH = '/catalog/2022-04-01/items';

    /**
     * Operation getCatalogItem.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param null|string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param null|string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\CatalogItem\Item
     */
    public function getCatalogItem(AccessToken $accessToken, string $region, string $asin, array $marketplace_ids, ?array $included_data = null, ?string $locale = null) : \AmazonPHP\SellingPartner\Model\CatalogItem\Item;

    /**
     * Operation searchCatalogItems.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string[] $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. (optional)
     * @param null|string $identifiers_type Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. (optional)
     * @param null|string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param null|string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     * @param null|string $seller_id A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. (optional)
     * @param null|string[] $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param null|string[] $brand_names A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param null|string[] $classification_ids A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param null|string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param null|string $keywords_locale The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\CatalogItem\ItemSearchResults
     */
    public function searchCatalogItems(AccessToken $accessToken, string $region, array $marketplace_ids, ?array $identifiers = null, ?string $identifiers_type = null, ?array $included_data = null, ?string $locale = null, ?string $seller_id = null, ?array $keywords = null, ?array $brand_names = null, ?array $classification_ids = null, int $page_size = 10, ?string $page_token = null, ?string $keywords_locale = null) : \AmazonPHP\SellingPartner\Model\CatalogItem\ItemSearchResults;
}
