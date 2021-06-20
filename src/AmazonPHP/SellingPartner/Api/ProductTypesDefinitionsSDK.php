<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api;

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
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class ProductTypesDefinitionsSDK
{
    public const API_NAME = 'ProductTypesDefinitions';

    public const OPERATION_GETDEFINITIONSPRODUCTTYPE = 'getDefinitionsProductType';

    public const OPERATION_SEARCHDEFINITIONSPRODUCTTYPES = 'searchDefinitionsProductTypes';

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
     * Operation getDefinitionsProductType.
     *
     * @param string $product_type The Amazon product type name. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string $seller_id A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner. (optional)
     * @param string $product_type_version The version of the Amazon product type to retrieve. Defaults to \&quot;LATEST\&quot;,. Prerelease versions of product type definitions may be retrieved with \&quot;RELEASE_CANDIDATE\&quot;. If no prerelease version is currently available, the \&quot;LATEST\&quot; live version will be provided. (optional, default to 'LATEST')
     * @param string $requirements The name of the requirements set to retrieve requirements for. (optional, default to 'LISTING')
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates). (optional, default to 'ENFORCED')
     * @param string $locale Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request. (optional, default to 'DEFAULT')
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getDefinitionsProductType(AccessToken $accessToken, string $region, string $product_type, array $marketplace_ids, string $seller_id = null, string $product_type_version = 'LATEST', string $requirements = 'LISTING', string $requirements_enforced = 'ENFORCED', string $locale = 'DEFAULT') : \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeDefinition
    {
        $request = $this->getDefinitionsProductTypeRequest($accessToken, $region, $product_type, $marketplace_ids, $seller_id, $product_type_version, $requirements, $requirements_enforced, $locale);

        $this->configuration->extensions()->preRequest('ProductTypesDefinitions', 'getDefinitionsProductType', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ProductTypesDefinitions', 'getDefinitionsProductType')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $request->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ProductTypesDefinitions', 'getDefinitionsProductType'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ProductTypesDefinitions',
                        'operation' => 'getDefinitionsProductType',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ProductTypesDefinitions', 'getDefinitionsProductType', $request, $response);

            if ($this->configuration->loggingEnabled('ProductTypesDefinitions', 'getDefinitionsProductType')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $response->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ProductTypesDefinitions', 'getDefinitionsProductType'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ProductTypesDefinitions',
                        'operation' => 'getDefinitionsProductType',
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
            \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeDefinition::class,
            []
        );
    }

    /**
     * Create request for operation 'getDefinitionsProductType'.
     *
     * @param string $product_type The Amazon product type name. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string $seller_id A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner. (optional)
     * @param string $product_type_version The version of the Amazon product type to retrieve. Defaults to \&quot;LATEST\&quot;,. Prerelease versions of product type definitions may be retrieved with \&quot;RELEASE_CANDIDATE\&quot;. If no prerelease version is currently available, the \&quot;LATEST\&quot; live version will be provided. (optional, default to 'LATEST')
     * @param string $requirements The name of the requirements set to retrieve requirements for. (optional, default to 'LISTING')
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates). (optional, default to 'ENFORCED')
     * @param string $locale Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request. (optional, default to 'DEFAULT')
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getDefinitionsProductTypeRequest(AccessToken $accessToken, string $region, string $product_type, array $marketplace_ids, string $seller_id = null, string $product_type_version = 'LATEST', string $requirements = 'LISTING', string $requirements_enforced = 'ENFORCED', string $locale = 'DEFAULT') : RequestInterface
    {
        // verify the required parameter 'product_type' is set
        if ($product_type === null || (\is_array($product_type) && \count($product_type) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $product_type when calling getDefinitionsProductType'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getDefinitionsProductType'
            );
        }

        $resourcePath = '/definitions/2020-09-01/productTypes/{productType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($seller_id)) {
            $seller_id = ObjectSerializer::serializeCollection($seller_id, '', true);
        }

        if ($seller_id !== null) {
            $queryParams['sellerId'] = $seller_id;
        }
        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if (\is_array($product_type_version)) {
            $product_type_version = ObjectSerializer::serializeCollection($product_type_version, '', true);
        }

        if ($product_type_version !== null) {
            $queryParams['productTypeVersion'] = $product_type_version;
        }
        // query params
        if (\is_array($requirements)) {
            $requirements = ObjectSerializer::serializeCollection($requirements, '', true);
        }

        if ($requirements !== null) {
            $queryParams['requirements'] = $requirements;
        }
        // query params
        if (\is_array($requirements_enforced)) {
            $requirements_enforced = ObjectSerializer::serializeCollection($requirements_enforced, '', true);
        }

        if ($requirements_enforced !== null) {
            $queryParams['requirementsEnforced'] = $requirements_enforced;
        }
        // query params
        if (\is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }

        if ($locale !== null) {
            $queryParams['locale'] = $locale;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($product_type !== null) {
            $resourcePath = \str_replace(
                '{' . 'productType' . '}',
                ObjectSerializer::toPathValue($product_type),
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
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation searchDefinitionsProductTypes.
     *
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param array<array-key, string>|null $keywords A comma-delimited list of keywords to search product types by. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function searchDefinitionsProductTypes(AccessToken $accessToken, string $region, array $marketplace_ids, array $keywords = null) : \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeList
    {
        $request = $this->searchDefinitionsProductTypesRequest($accessToken, $region, $marketplace_ids, $keywords);

        $this->configuration->extensions()->preRequest('ProductTypesDefinitions', 'searchDefinitionsProductTypes', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ProductTypesDefinitions', 'searchDefinitionsProductTypes')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $request->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ProductTypesDefinitions', 'searchDefinitionsProductTypes'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ProductTypesDefinitions',
                        'operation' => 'searchDefinitionsProductTypes',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ProductTypesDefinitions', 'searchDefinitionsProductTypes', $request, $response);

            if ($this->configuration->loggingEnabled('ProductTypesDefinitions', 'searchDefinitionsProductTypes')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $response->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ProductTypesDefinitions', 'searchDefinitionsProductTypes'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ProductTypesDefinitions',
                        'operation' => 'searchDefinitionsProductTypes',
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
            \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeList::class,
            []
        );
    }

    /**
     * Create request for operation 'searchDefinitionsProductTypes'.
     *
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param array<array-key, string>|null $keywords A comma-delimited list of keywords to search product types by. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function searchDefinitionsProductTypesRequest(AccessToken $accessToken, string $region, array $marketplace_ids, array $keywords = null) : RequestInterface
    {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling searchDefinitionsProductTypes'
            );
        }

        $resourcePath = '/definitions/2020-09-01/productTypes';
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
            $queryParams['keywords'] = $keywords;
        }
        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
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
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
