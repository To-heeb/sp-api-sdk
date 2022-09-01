<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\CatalogApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, see the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2020-12-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-12-01
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
final class CatalogItemSDK implements CatalogItemSDKInterface
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getCatalogItem.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param null|string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param null|string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getCatalogItem(AccessToken $accessToken, string $region, string $asin, array $marketplace_ids, ?array $included_data = null, ?string $locale = null) : \AmazonPHP\SellingPartner\Model\CatalogItem\Item
    {
        $request = $this->getCatalogItemRequest($accessToken, $region, $asin, $marketplace_ids, $included_data, $locale);

        $this->configuration->extensions()->preRequest('CatalogItem', 'getCatalogItem', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('CatalogItem', 'getCatalogItem')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('CatalogItem', 'getCatalogItem'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'CatalogItem',
                        'operation' => 'getCatalogItem',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('CatalogItem', 'getCatalogItem', $request, $response);

            if ($this->configuration->loggingEnabled('CatalogItem', 'getCatalogItem')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('CatalogItem', 'getCatalogItem'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'CatalogItem',
                        'operation' => 'getCatalogItem',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\CatalogItem\Item',
            []
        );
    }

    /**
     * Create request for operation 'getCatalogItem'.
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param null|string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param null|string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function getCatalogItemRequest(AccessToken $accessToken, string $region, string $asin, array $marketplace_ids, ?array $included_data = null, ?string $locale = null) : RequestInterface
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (\is_array($asin) && \count($asin) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $asin when calling getCatalogItem'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getCatalogItem'
            );
        }

        $resourcePath = '/catalog/2020-12-01/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
        }
        // query params
        if (\is_array($included_data)) {
            $included_data = ObjectSerializer::serializeCollection($included_data, 'form', true);
        }

        if ($included_data !== null) {
            $queryParams['includedData'] = ObjectSerializer::toString($included_data);
        }
        // query params
        if (\is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }

        if ($locale !== null) {
            $queryParams['locale'] = ObjectSerializer::toString($locale);
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($asin !== null) {
            $resourcePath = \str_replace(
                '{' . 'asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation searchCatalogItems.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param null|string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param null|string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param null|string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param null|string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param null|string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function searchCatalogItems(AccessToken $accessToken, string $region, array $keywords, array $marketplace_ids, ?array $included_data = null, ?array $brand_names = null, ?array $classification_ids = null, int $page_size = 10, ?string $page_token = null, ?string $keywords_locale = null, ?string $locale = null) : \AmazonPHP\SellingPartner\Model\CatalogItem\ItemSearchResults
    {
        $request = $this->searchCatalogItemsRequest($accessToken, $region, $keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);

        $this->configuration->extensions()->preRequest('CatalogItem', 'searchCatalogItems', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('CatalogItem', 'searchCatalogItems')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('CatalogItem', 'searchCatalogItems'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'CatalogItem',
                        'operation' => 'searchCatalogItems',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('CatalogItem', 'searchCatalogItems', $request, $response);

            if ($this->configuration->loggingEnabled('CatalogItem', 'searchCatalogItems')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('CatalogItem', 'searchCatalogItems'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'CatalogItem',
                        'operation' => 'searchCatalogItems',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSearchResults',
            []
        );
    }

    /**
     * Create request for operation 'searchCatalogItems'.
     *
     * @param string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param null|string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param null|string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param null|string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param null|string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param null|string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function searchCatalogItemsRequest(AccessToken $accessToken, string $region, array $keywords, array $marketplace_ids, ?array $included_data = null, ?array $brand_names = null, ?array $classification_ids = null, int $page_size = 10, ?string $page_token = null, ?string $keywords_locale = null, ?string $locale = null) : RequestInterface
    {
        // verify the required parameter 'keywords' is set
        if ($keywords === null || (\is_array($keywords) && \count($keywords) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $keywords when calling searchCatalogItems'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling searchCatalogItems'
            );
        }

        if (\count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling CatalogApi.searchCatalogItems, number of items must be less than or equal to 1.');
        }

        if ($page_size !== null && $page_size > 20) {
            throw new InvalidArgumentException('invalid value for "$page_size" when calling CatalogApi.searchCatalogItems, must be smaller than or equal to 20.');
        }

        $resourcePath = '/catalog/2020-12-01/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($keywords)) {
            $keywords = ObjectSerializer::serializeCollection($keywords, 'form', true);
        }

        if ($keywords !== null) {
            $queryParams['keywords'] = ObjectSerializer::toString($keywords);
        }
        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
        }
        // query params
        if (\is_array($included_data)) {
            $included_data = ObjectSerializer::serializeCollection($included_data, 'form', true);
        }

        if ($included_data !== null) {
            $queryParams['includedData'] = ObjectSerializer::toString($included_data);
        }
        // query params
        if (\is_array($brand_names)) {
            $brand_names = ObjectSerializer::serializeCollection($brand_names, 'form', true);
        }

        if ($brand_names !== null) {
            $queryParams['brandNames'] = ObjectSerializer::toString($brand_names);
        }
        // query params
        if (\is_array($classification_ids)) {
            $classification_ids = ObjectSerializer::serializeCollection($classification_ids, 'form', true);
        }

        if ($classification_ids !== null) {
            $queryParams['classificationIds'] = ObjectSerializer::toString($classification_ids);
        }
        // query params
        if (\is_array($page_size)) {
            $page_size = ObjectSerializer::serializeCollection($page_size, '', true);
        }

        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toString($page_size);
        }
        // query params
        if (\is_array($page_token)) {
            $page_token = ObjectSerializer::serializeCollection($page_token, '', true);
        }

        if ($page_token !== null) {
            $queryParams['pageToken'] = ObjectSerializer::toString($page_token);
        }
        // query params
        if (\is_array($keywords_locale)) {
            $keywords_locale = ObjectSerializer::serializeCollection($keywords_locale, '', true);
        }

        if ($keywords_locale !== null) {
            $queryParams['keywordsLocale'] = ObjectSerializer::toString($keywords_locale);
        }
        // query params
        if (\is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }

        if ($locale !== null) {
            $queryParams['locale'] = ObjectSerializer::toString($locale);
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
