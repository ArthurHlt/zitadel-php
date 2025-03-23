<?php
/**
 * ZITADELDebugEventsApi
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
 * ZITADELDebugEventsApi Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ZITADELDebugEventsApi
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
     * Operation zITADELDebugEventsCreateDebugEvents
     *
     * Create a set of debug events.
     *
     * @param  string $aggregateId unique identifier for the aggregate we want to push events to. (required)
     * @param  \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[] $events events (required)
     * @param  string $instanceId instanceId (optional)
     * @param  string $instanceDomain instanceDomain (optional)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function zITADELDebugEventsCreateDebugEvents($aggregateId, $events, $instanceId = null, $instanceDomain = null)
    {
        list($response) = $this->zITADELDebugEventsCreateDebugEventsWithHttpInfo($aggregateId, $events, $instanceId, $instanceDomain);
        return $response;
    }

    /**
     * Operation zITADELDebugEventsCreateDebugEventsWithHttpInfo
     *
     * Create a set of debug events.
     *
     * @param  string $aggregateId unique identifier for the aggregate we want to push events to. (required)
     * @param  \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[] $events (required)
     * @param  string $instanceId (optional)
     * @param  string $instanceDomain (optional)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function zITADELDebugEventsCreateDebugEventsWithHttpInfo($aggregateId, $events, $instanceId = null, $instanceDomain = null)
    {
        $request = $this->zITADELDebugEventsCreateDebugEventsRequest($aggregateId, $events, $instanceId, $instanceDomain);

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
                    if ('\ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse', []),
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

            $returnType = '\ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse';
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
                        '\ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse',
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
     * Operation zITADELDebugEventsCreateDebugEventsAsync
     *
     * Create a set of debug events.
     *
     * @param  string $aggregateId unique identifier for the aggregate we want to push events to. (required)
     * @param  \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[] $events (required)
     * @param  string $instanceId (optional)
     * @param  string $instanceDomain (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function zITADELDebugEventsCreateDebugEventsAsync($aggregateId, $events, $instanceId = null, $instanceDomain = null)
    {
        return $this->zITADELDebugEventsCreateDebugEventsAsyncWithHttpInfo($aggregateId, $events, $instanceId, $instanceDomain)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation zITADELDebugEventsCreateDebugEventsAsyncWithHttpInfo
     *
     * Create a set of debug events.
     *
     * @param  string $aggregateId unique identifier for the aggregate we want to push events to. (required)
     * @param  \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[] $events (required)
     * @param  string $instanceId (optional)
     * @param  string $instanceDomain (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function zITADELDebugEventsCreateDebugEventsAsyncWithHttpInfo($aggregateId, $events, $instanceId = null, $instanceDomain = null)
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse';
        $request = $this->zITADELDebugEventsCreateDebugEventsRequest($aggregateId, $events, $instanceId, $instanceDomain);

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
     * Create request for operation 'zITADELDebugEventsCreateDebugEvents'
     *
     * @param  string $aggregateId unique identifier for the aggregate we want to push events to. (required)
     * @param  \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[] $events (required)
     * @param  string $instanceId (optional)
     * @param  string $instanceDomain (optional)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function zITADELDebugEventsCreateDebugEventsRequest($aggregateId, $events, $instanceId = null, $instanceDomain = null)
    {
        // verify the required parameter 'aggregateId' is set
        if ($aggregateId === null || (is_array($aggregateId) && count($aggregateId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $aggregateId when calling zITADELDebugEventsCreateDebugEvents'
            );
        }
        // verify the required parameter 'events' is set
        if ($events === null || (is_array($events) && count($events) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $events when calling zITADELDebugEventsCreateDebugEvents'
            );
        }

        $resourcePath = '/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if (is_array($instanceId)) {
            $instanceId = ObjectSerializer::serializeCollection($instanceId, '', true);
        }
        if ($instanceId !== null) {
            $queryParams['instance.id'] = $instanceId;
        }
        // query params
        if (is_array($instanceDomain)) {
            $instanceDomain = ObjectSerializer::serializeCollection($instanceDomain, '', true);
        }
        if ($instanceDomain !== null) {
            $queryParams['instance.domain'] = $instanceDomain;
        }
        // query params
        if (is_array($aggregateId)) {
            $aggregateId = ObjectSerializer::serializeCollection($aggregateId, '', true);
        }
        if ($aggregateId !== null) {
            $queryParams['aggregateId'] = $aggregateId;
        }




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/grpc', 'application/grpc-web+proto'],
            'application/jsonapplication/grpcapplication/grpc-web+proto',
            $multipart
        );

        // for model (json/xml)
        if (isset($events)) {
            if ($this->headerSelector->isJsonMime($headers['Content-Type'])) {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($events));
            } else {
                $httpBody = $events;
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
     * Operation zITADELDebugEventsGetDebugEventsStateById
     *
     * @param  string $id unique identifier of the aggregate. (required)
     * @param  bool $triggerBulk triggerBulk (optional)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function zITADELDebugEventsGetDebugEventsStateById($id, $triggerBulk = null)
    {
        list($response) = $this->zITADELDebugEventsGetDebugEventsStateByIdWithHttpInfo($id, $triggerBulk);
        return $response;
    }

    /**
     * Operation zITADELDebugEventsGetDebugEventsStateByIdWithHttpInfo
     *
     * @param  string $id unique identifier of the aggregate. (required)
     * @param  bool $triggerBulk (optional)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function zITADELDebugEventsGetDebugEventsStateByIdWithHttpInfo($id, $triggerBulk = null)
    {
        $request = $this->zITADELDebugEventsGetDebugEventsStateByIdRequest($id, $triggerBulk);

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
                    if ('\ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse', []),
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

            $returnType = '\ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse';
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
                        '\ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse',
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
     * Operation zITADELDebugEventsGetDebugEventsStateByIdAsync
     *
     * @param  string $id unique identifier of the aggregate. (required)
     * @param  bool $triggerBulk (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function zITADELDebugEventsGetDebugEventsStateByIdAsync($id, $triggerBulk = null)
    {
        return $this->zITADELDebugEventsGetDebugEventsStateByIdAsyncWithHttpInfo($id, $triggerBulk)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation zITADELDebugEventsGetDebugEventsStateByIdAsyncWithHttpInfo
     *
     * @param  string $id unique identifier of the aggregate. (required)
     * @param  bool $triggerBulk (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function zITADELDebugEventsGetDebugEventsStateByIdAsyncWithHttpInfo($id, $triggerBulk = null)
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse';
        $request = $this->zITADELDebugEventsGetDebugEventsStateByIdRequest($id, $triggerBulk);

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
     * Create request for operation 'zITADELDebugEventsGetDebugEventsStateById'
     *
     * @param  string $id unique identifier of the aggregate. (required)
     * @param  bool $triggerBulk (optional)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function zITADELDebugEventsGetDebugEventsStateByIdRequest($id, $triggerBulk = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling zITADELDebugEventsGetDebugEventsStateById'
            );
        }

        $resourcePath = '/v3alpha/debug_events/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if (is_array($triggerBulk)) {
            $triggerBulk = ObjectSerializer::serializeCollection($triggerBulk, '', true);
        }
        if ($triggerBulk !== null) {
            $queryParams['triggerBulk'] = $triggerBulk;
        }


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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

        return $this->createRequest('GET', $uri, $headers, $httpBody);
    }

    /**
     * Operation zITADELDebugEventsListDebugEventsStates
     *
     * @param  bool $triggerBulk triggerBulk (optional)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function zITADELDebugEventsListDebugEventsStates($triggerBulk = null)
    {
        list($response) = $this->zITADELDebugEventsListDebugEventsStatesWithHttpInfo($triggerBulk);
        return $response;
    }

    /**
     * Operation zITADELDebugEventsListDebugEventsStatesWithHttpInfo
     *
     * @param  bool $triggerBulk (optional)
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function zITADELDebugEventsListDebugEventsStatesWithHttpInfo($triggerBulk = null)
    {
        $request = $this->zITADELDebugEventsListDebugEventsStatesRequest($triggerBulk);

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
                    if ('\ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse', []),
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

            $returnType = '\ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse';
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
                        '\ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse',
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
     * Operation zITADELDebugEventsListDebugEventsStatesAsync
     *
     * @param  bool $triggerBulk (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function zITADELDebugEventsListDebugEventsStatesAsync($triggerBulk = null)
    {
        return $this->zITADELDebugEventsListDebugEventsStatesAsyncWithHttpInfo($triggerBulk)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation zITADELDebugEventsListDebugEventsStatesAsyncWithHttpInfo
     *
     * @param  bool $triggerBulk (optional)
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function zITADELDebugEventsListDebugEventsStatesAsyncWithHttpInfo($triggerBulk = null)
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse';
        $request = $this->zITADELDebugEventsListDebugEventsStatesRequest($triggerBulk);

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
     * Create request for operation 'zITADELDebugEventsListDebugEventsStates'
     *
     * @param  bool $triggerBulk (optional)
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function zITADELDebugEventsListDebugEventsStatesRequest($triggerBulk = null)
    {

        $resourcePath = '/v3alpha/debug_events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;

        // query params
        if (is_array($triggerBulk)) {
            $triggerBulk = ObjectSerializer::serializeCollection($triggerBulk, '', true);
        }
        if ($triggerBulk !== null) {
            $queryParams['triggerBulk'] = $triggerBulk;
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

        return $this->createRequest('GET', $uri, $headers, $httpBody);
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
