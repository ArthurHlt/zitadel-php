<?php
/**
 * QuotasApi
 * PHP version 7.2
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Management API
 *
 * The management API is as the name states the interface where systems can mutate IAM objects like organizations, projects, clients, users and so on if they have the necessary access rights.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hi@zitadel.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ArthurHlt\Zitadel\Api;

use GuzzleHttp\Psr7\MultipartStream;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\Common\PluginClientFactory;
use Http\Client\Exception\HttpException;
use Http\Client\HttpAsyncClient;
use Http\Discovery\HttpAsyncClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\RequestFactory;
use Http\Promise\Promise;
use ArthurHlt\Zitadel\ApiException;
use ArthurHlt\Zitadel\Configuration;
use ArthurHlt\Zitadel\DebugPlugin;
use ArthurHlt\Zitadel\HeaderSelector;
use ArthurHlt\Zitadel\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use function sprintf;

/**
 * QuotasApi Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QuotasApi
{
    /**
     * @var PluginClient
     */
    protected $httpClient;

    /**
     * @var PluginClient
     */
    protected $httpAsyncClient;

    /**
     * @var UriFactoryInterface
     */
    protected $uriFactory;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var RequestFactoryInterface
     */
    protected $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    public function __construct(
        ?ClientInterface $httpClient = null,
        ?Configuration $config = null,
        ?HttpAsyncClient $httpAsyncClient = null,
        ?UriFactoryInterface $uriFactory = null,
        ?RequestFactoryInterface $requestFactory = null,
        ?StreamFactoryInterface $streamFactory = null,
        ?HeaderSelector $selector = null,
        ?array $plugins = null,
        $hostIndex = 0
    ) {
        $this->config = $config ?? (new Configuration())->setHost('https://zitadel.cloud/management/v1');
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = $streamFactory ?? Psr17FactoryDiscovery::findStreamFactory();

        $plugins = $plugins ?? [
            new RedirectPlugin(['strict' => true]),
            new ErrorPlugin(),
        ];

        if ($this->config->getDebug()) {
            $plugins[] = new DebugPlugin(fopen($this->config->getDebugFile(), 'ab'));
        }

        $this->httpClient = (new PluginClientFactory())->createClient(
            $httpClient ?? Psr18ClientDiscovery::find(),
            $plugins
        );

        $this->httpAsyncClient = (new PluginClientFactory())->createClient(
            $httpAsyncClient ?? HttpAsyncClientDiscovery::find(),
            $plugins
        );

        $this->uriFactory = $uriFactory ?? Psr17FactoryDiscovery::findUriFactory();

        $this->headerSelector = $selector ?? new HeaderSelector();

        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation systemServiceAddQuota
     *
     * Creates a new quota Returns an error if the quota already exists for the specified unit Deprecated: use SetQuota instead
     *
     * @param  string $instanceId instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody $body body (required)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V1AddQuotaResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function systemServiceAddQuota($instanceId, $body)
    {
        list($response) = $this->systemServiceAddQuotaWithHttpInfo($instanceId, $body);
        return $response;
    }

    /**
     * Operation systemServiceAddQuotaWithHttpInfo
     *
     * Creates a new quota Returns an error if the quota already exists for the specified unit Deprecated: use SetQuota instead
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody $body (required)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V1AddQuotaResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemServiceAddQuotaWithHttpInfo($instanceId, $body)
    {
        $request = $this->systemServiceAddQuotaRequest($instanceId, $body);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\ArthurHlt\Zitadel\Model\V1AddQuotaResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1AddQuotaResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\ArthurHlt\Zitadel\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ArthurHlt\Zitadel\Model\V1AddQuotaResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\V1AddQuotaResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation systemServiceAddQuotaAsync
     *
     * Creates a new quota Returns an error if the quota already exists for the specified unit Deprecated: use SetQuota instead
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function systemServiceAddQuotaAsync($instanceId, $body)
    {
        return $this->systemServiceAddQuotaAsyncWithHttpInfo($instanceId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation systemServiceAddQuotaAsyncWithHttpInfo
     *
     * Creates a new quota Returns an error if the quota already exists for the specified unit Deprecated: use SetQuota instead
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function systemServiceAddQuotaAsyncWithHttpInfo($instanceId, $body)
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V1AddQuotaResponse';
        $request = $this->systemServiceAddQuotaRequest($instanceId, $body);

        return $this->httpAsyncClient->sendAsyncRequest($request)
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'systemServiceAddQuota'
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function systemServiceAddQuotaRequest($instanceId, $body)
    {
        // verify the required parameter 'instanceId' is set
        if ($instanceId === null || (is_array($instanceId) && count($instanceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $instanceId when calling systemServiceAddQuota'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling systemServiceAddQuota'
            );
        }

        $resourcePath = '/instances/{instanceId}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($instanceId !== null) {
            $resourcePath = str_replace(
                '{' . 'instanceId' . '}',
                ObjectSerializer::toPathValue($instanceId),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/grpc', 'application/grpc-web+proto'],
            'application/jsonapplication/grpcapplication/grpc-web+proto',
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('POST', $uri, $headers, $httpBody);
    }

    /**
     * Operation systemServiceRemoveQuota
     *
     * Removes a quota
     *
     * @param  string $instanceId instanceId (required)
     * @param  string $unit unit (required)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function systemServiceRemoveQuota($instanceId, $unit)
    {
        list($response) = $this->systemServiceRemoveQuotaWithHttpInfo($instanceId, $unit);
        return $response;
    }

    /**
     * Operation systemServiceRemoveQuotaWithHttpInfo
     *
     * Removes a quota
     *
     * @param  string $instanceId (required)
     * @param  string $unit (required)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemServiceRemoveQuotaWithHttpInfo($instanceId, $unit)
    {
        $request = $this->systemServiceRemoveQuotaRequest($instanceId, $unit);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\ArthurHlt\Zitadel\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation systemServiceRemoveQuotaAsync
     *
     * Removes a quota
     *
     * @param  string $instanceId (required)
     * @param  string $unit (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function systemServiceRemoveQuotaAsync($instanceId, $unit)
    {
        return $this->systemServiceRemoveQuotaAsyncWithHttpInfo($instanceId, $unit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation systemServiceRemoveQuotaAsyncWithHttpInfo
     *
     * Removes a quota
     *
     * @param  string $instanceId (required)
     * @param  string $unit (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function systemServiceRemoveQuotaAsyncWithHttpInfo($instanceId, $unit)
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse';
        $request = $this->systemServiceRemoveQuotaRequest($instanceId, $unit);

        return $this->httpAsyncClient->sendAsyncRequest($request)
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'systemServiceRemoveQuota'
     *
     * @param  string $instanceId (required)
     * @param  string $unit (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function systemServiceRemoveQuotaRequest($instanceId, $unit)
    {
        // verify the required parameter 'instanceId' is set
        if ($instanceId === null || (is_array($instanceId) && count($instanceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $instanceId when calling systemServiceRemoveQuota'
            );
        }
        // verify the required parameter 'unit' is set
        if ($unit === null || (is_array($unit) && count($unit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $unit when calling systemServiceRemoveQuota'
            );
        }

        $resourcePath = '/instances/{instanceId}/quotas/{unit}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($instanceId !== null) {
            $resourcePath = str_replace(
                '{' . 'instanceId' . '}',
                ObjectSerializer::toPathValue($instanceId),
                $resourcePath
            );
        }
        // path params
        if ($unit !== null) {
            $resourcePath = str_replace(
                '{' . 'unit' . '}',
                ObjectSerializer::toPathValue($unit),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/grpc', 'application/grpc-web+proto'],
            '',
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('DELETE', $uri, $headers, $httpBody);
    }

    /**
     * Operation systemServiceSetQuota
     *
     * Sets quota configuration properties Creates a new quota if it doesn&#39;t exist for the specified unit
     *
     * @param  string $instanceId instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody $body body (required)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V1SetQuotaResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function systemServiceSetQuota($instanceId, $body)
    {
        list($response) = $this->systemServiceSetQuotaWithHttpInfo($instanceId, $body);
        return $response;
    }

    /**
     * Operation systemServiceSetQuotaWithHttpInfo
     *
     * Sets quota configuration properties Creates a new quota if it doesn&#39;t exist for the specified unit
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody $body (required)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V1SetQuotaResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemServiceSetQuotaWithHttpInfo($instanceId, $body)
    {
        $request = $this->systemServiceSetQuotaRequest($instanceId, $body);

        try {
            try {
                $response = $this->httpClient->sendRequest($request);
            } catch (HttpException $e) {
                $response = $e->getResponse();
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $response->getStatusCode(),
                        (string) $request->getUri()
                    ),
                    $request,
                    $response,
                    $e
                );
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $request,
                    null,
                    $e
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    if ('\ArthurHlt\Zitadel\Model\V1SetQuotaResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1SetQuotaResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\ArthurHlt\Zitadel\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ArthurHlt\Zitadel\Model\V1SetQuotaResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\V1SetQuotaResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation systemServiceSetQuotaAsync
     *
     * Sets quota configuration properties Creates a new quota if it doesn&#39;t exist for the specified unit
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function systemServiceSetQuotaAsync($instanceId, $body)
    {
        return $this->systemServiceSetQuotaAsyncWithHttpInfo($instanceId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation systemServiceSetQuotaAsyncWithHttpInfo
     *
     * Sets quota configuration properties Creates a new quota if it doesn&#39;t exist for the specified unit
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function systemServiceSetQuotaAsyncWithHttpInfo($instanceId, $body)
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V1SetQuotaResponse';
        $request = $this->systemServiceSetQuotaRequest($instanceId, $body);

        return $this->httpAsyncClient->sendAsyncRequest($request)
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function (HttpException $exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $exception->getRequest(),
                        $exception->getResponse(),
                        $exception
                    );
                }
            );
    }

    /**
     * Create request for operation 'systemServiceSetQuota'
     *
     * @param  string $instanceId (required)
     * @param  \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function systemServiceSetQuotaRequest($instanceId, $body)
    {
        // verify the required parameter 'instanceId' is set
        if ($instanceId === null || (is_array($instanceId) && count($instanceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $instanceId when calling systemServiceSetQuota'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling systemServiceSetQuota'
            );
        }

        $resourcePath = '/instances/{instanceId}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;



        // path params
        if ($instanceId !== null) {
            $resourcePath = str_replace(
                '{' . 'instanceId' . '}',
                ObjectSerializer::toPathValue($instanceId),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/grpc', 'application/grpc-web+proto'],
            'application/jsonapplication/grpcapplication/grpc-web+proto',
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();

        $uri = $this->createUri($operationHost, $resourcePath, $queryParams);

        return $this->createRequest('PUT', $uri, $headers, $httpBody);
    }


    /**
     * @param string $method
     * @param string|UriInterface $uri
     * @param array $headers
     * @param string|StreamInterface|null $body
     *
     * @return RequestInterface
     */
    protected function createRequest(string $method, $uri, array $headers = [], $body = null): RequestInterface
    {
        if ($this->requestFactory instanceof RequestFactory) {
            return $this->requestFactory->createRequest(
                $method,
                $uri,
                $headers,
                $body
            );
        }

        if (is_string($body) && '' !== $body && null === $this->streamFactory) {
            throw new \RuntimeException('Cannot create request: A stream factory is required to create a request with a non-empty string body.');
        }

        $request = $this->requestFactory->createRequest($method, $uri);

        foreach ($headers as $key => $value) {
            $request = $request->withHeader($key, $value);
        }

        if (null !== $body && '' !== $body) {
            $request = $request->withBody(
                is_string($body) ? $this->streamFactory->createStream($body) : $body
            );
        }

        return $request;
    }

    private function createUri(
        string $operationHost,
        string $resourcePath,
        array $queryParams
    ): UriInterface {
        $parsedUrl = parse_url($operationHost);

        $host = $parsedUrl['host'] ?? null;
        $scheme = $parsedUrl['scheme'] ?? null;
        $basePath = $parsedUrl['path'] ?? null;
        $port = $parsedUrl['port'] ?? null;
        $user = $parsedUrl['user'] ?? null;
        $password = $parsedUrl['pass'] ?? null;

        $uri = $this->uriFactory->createUri($basePath . $resourcePath)
            ->withHost($host)
            ->withScheme($scheme)
            ->withPort($port)
            ->withQuery(ObjectSerializer::buildQuery($queryParams));

        if ($user) {
            $uri = $uri->withUserInfo($user, $password);
        }

        return $uri;
    }
}
