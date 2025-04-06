<?php
/**
 * AdminServiceApi
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
 * AdminServiceApi Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdminServiceApi
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
     * Operation adminServiceActivateFeatureLoginDefaultOrg
     *
     * Activates the \&quot;LoginDefaultOrg\&quot; feature by setting the flag to \&quot;true\&quot; This is irreversible! Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set
     *
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\RpcStatus
     */
    public function adminServiceActivateFeatureLoginDefaultOrg()
    {
        list($response) = $this->adminServiceActivateFeatureLoginDefaultOrgWithHttpInfo();
        return $response;
    }

    /**
     * Operation adminServiceActivateFeatureLoginDefaultOrgWithHttpInfo
     *
     * Activates the \&quot;LoginDefaultOrg\&quot; feature by setting the flag to \&quot;true\&quot; This is irreversible! Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set
     *
     *
     * @throws \ArthurHlt\Zitadel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse|\ArthurHlt\Zitadel\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminServiceActivateFeatureLoginDefaultOrgWithHttpInfo()
    {
        $request = $this->adminServiceActivateFeatureLoginDefaultOrgRequest();

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
                    if ('\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 201:
                    if ('\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 202:
                    if ('\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 203:
                    if ('\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse', []),
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

            $returnType = '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse';
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
                        '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 203:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse',
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
     * Operation adminServiceActivateFeatureLoginDefaultOrgAsync
     *
     * Activates the \&quot;LoginDefaultOrg\&quot; feature by setting the flag to \&quot;true\&quot; This is irreversible! Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set
     *
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function adminServiceActivateFeatureLoginDefaultOrgAsync()
    {
        return $this->adminServiceActivateFeatureLoginDefaultOrgAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminServiceActivateFeatureLoginDefaultOrgAsyncWithHttpInfo
     *
     * Activates the \&quot;LoginDefaultOrg\&quot; feature by setting the flag to \&quot;true\&quot; This is irreversible! Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set
     *
     *
     * @throws \InvalidArgumentException
     * @return Promise
     */
    public function adminServiceActivateFeatureLoginDefaultOrgAsyncWithHttpInfo()
    {
        $returnType = '\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse';
        $request = $this->adminServiceActivateFeatureLoginDefaultOrgRequest();

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
     * Create request for operation 'adminServiceActivateFeatureLoginDefaultOrg'
     *
     *
     * @throws \InvalidArgumentException
     * @return RequestInterface
     */
    public function adminServiceActivateFeatureLoginDefaultOrgRequest()
    {

        $resourcePath = '/features/login_default_org';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = null;
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
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
