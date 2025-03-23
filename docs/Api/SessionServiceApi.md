# ArthurHlt\Zitadel\SessionServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionServiceCreateSession()**](SessionServiceApi.md#sessionServiceCreateSession) | **POST** /v2/sessions | Create a new session
[**sessionServiceCreateSession_0()**](SessionServiceApi.md#sessionServiceCreateSession_0) | **POST** /v2beta/sessions | Create a new session
[**sessionServiceDeleteSession()**](SessionServiceApi.md#sessionServiceDeleteSession) | **DELETE** /v2/sessions/{sessionId} | Terminate an existing session
[**sessionServiceDeleteSession_0()**](SessionServiceApi.md#sessionServiceDeleteSession_0) | **DELETE** /v2beta/sessions/{sessionId} | Terminate an existing session
[**sessionServiceGetSession()**](SessionServiceApi.md#sessionServiceGetSession) | **GET** /v2/sessions/{sessionId} | Get a session
[**sessionServiceGetSession_0()**](SessionServiceApi.md#sessionServiceGetSession_0) | **GET** /v2beta/sessions/{sessionId} | Get a session
[**sessionServiceListSessions()**](SessionServiceApi.md#sessionServiceListSessions) | **POST** /v2/sessions/search | Search sessions
[**sessionServiceListSessions_0()**](SessionServiceApi.md#sessionServiceListSessions_0) | **POST** /v2beta/sessions/search | Search sessions
[**sessionServiceSetSession()**](SessionServiceApi.md#sessionServiceSetSession) | **PATCH** /v2/sessions/{sessionId} | Update an existing session
[**sessionServiceSetSession_0()**](SessionServiceApi.md#sessionServiceSetSession_0) | **PATCH** /v2beta/sessions/{sessionId} | Update an existing session


## `sessionServiceCreateSession()`

```php
sessionServiceCreateSession($body): \ArthurHlt\Zitadel\Model\Sessionv2CreateSessionResponse
```

Create a new session

Create a new session. A token will be returned, which is required for further updates of the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Sessionv2CreateSessionRequest(); // \ArthurHlt\Zitadel\Model\Sessionv2CreateSessionRequest

try {
    $result = $apiInstance->sessionServiceCreateSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceCreateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2CreateSessionRequest**](../Model/Sessionv2CreateSessionRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2CreateSessionResponse**](../Model/Sessionv2CreateSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceCreateSession_0()`

```php
sessionServiceCreateSession_0($body): \ArthurHlt\Zitadel\Model\Sessionv2betaCreateSessionResponse
```

Create a new session

Create a new session. A token will be returned, which is required for further updates of the session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Sessionv2betaCreateSessionRequest(); // \ArthurHlt\Zitadel\Model\Sessionv2betaCreateSessionRequest

try {
    $result = $apiInstance->sessionServiceCreateSession_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceCreateSession_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2betaCreateSessionRequest**](../Model/Sessionv2betaCreateSessionRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2betaCreateSessionResponse**](../Model/Sessionv2betaCreateSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceDeleteSession()`

```php
sessionServiceDeleteSession($sessionId, $body): \ArthurHlt\Zitadel\Model\Sessionv2DeleteSessionResponse
```

Terminate an existing session

Terminate your own session or if granted any other session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sessionId = 'sessionId_example'; // string | \"id of the session to terminate\"
$body = new \ArthurHlt\Zitadel\Model\Sessionv2SessionServiceDeleteSessionBody(); // \ArthurHlt\Zitadel\Model\Sessionv2SessionServiceDeleteSessionBody

try {
    $result = $apiInstance->sessionServiceDeleteSession($sessionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceDeleteSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| \&quot;id of the session to terminate\&quot; |
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2SessionServiceDeleteSessionBody**](../Model/Sessionv2SessionServiceDeleteSessionBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2DeleteSessionResponse**](../Model/Sessionv2DeleteSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceDeleteSession_0()`

```php
sessionServiceDeleteSession_0($sessionId, $body): \ArthurHlt\Zitadel\Model\Sessionv2betaDeleteSessionResponse
```

Terminate an existing session

Terminate your own session or if granted any other session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sessionId = 'sessionId_example'; // string | \"id of the session to terminate\"
$body = new \ArthurHlt\Zitadel\Model\Sessionv2betaSessionServiceDeleteSessionBody(); // \ArthurHlt\Zitadel\Model\Sessionv2betaSessionServiceDeleteSessionBody

try {
    $result = $apiInstance->sessionServiceDeleteSession_0($sessionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceDeleteSession_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| \&quot;id of the session to terminate\&quot; |
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2betaSessionServiceDeleteSessionBody**](../Model/Sessionv2betaSessionServiceDeleteSessionBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2betaDeleteSessionResponse**](../Model/Sessionv2betaDeleteSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceGetSession()`

```php
sessionServiceGetSession($sessionId, $sessionToken): \ArthurHlt\Zitadel\Model\Sessionv2GetSessionResponse
```

Get a session

Get a session and all its information like the time of the user or password verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sessionId = 'sessionId_example'; // string
$sessionToken = 'sessionToken_example'; // string

try {
    $result = $apiInstance->sessionServiceGetSession($sessionId, $sessionToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceGetSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**|  |
 **sessionToken** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2GetSessionResponse**](../Model/Sessionv2GetSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceGetSession_0()`

```php
sessionServiceGetSession_0($sessionId, $sessionToken): \ArthurHlt\Zitadel\Model\Sessionv2betaGetSessionResponse
```

Get a session

Get a session and all its information like the time of the user or password verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sessionId = 'sessionId_example'; // string
$sessionToken = 'sessionToken_example'; // string

try {
    $result = $apiInstance->sessionServiceGetSession_0($sessionId, $sessionToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceGetSession_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**|  |
 **sessionToken** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2betaGetSessionResponse**](../Model/Sessionv2betaGetSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceListSessions()`

```php
sessionServiceListSessions($body): \ArthurHlt\Zitadel\Model\Sessionv2ListSessionsResponse
```

Search sessions

Search for sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Sessionv2ListSessionsRequest(); // \ArthurHlt\Zitadel\Model\Sessionv2ListSessionsRequest

try {
    $result = $apiInstance->sessionServiceListSessions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceListSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2ListSessionsRequest**](../Model/Sessionv2ListSessionsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2ListSessionsResponse**](../Model/Sessionv2ListSessionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceListSessions_0()`

```php
sessionServiceListSessions_0($body): \ArthurHlt\Zitadel\Model\Sessionv2betaListSessionsResponse
```

Search sessions

Search for sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Sessionv2betaListSessionsRequest(); // \ArthurHlt\Zitadel\Model\Sessionv2betaListSessionsRequest

try {
    $result = $apiInstance->sessionServiceListSessions_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceListSessions_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2betaListSessionsRequest**](../Model/Sessionv2betaListSessionsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2betaListSessionsResponse**](../Model/Sessionv2betaListSessionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceSetSession()`

```php
sessionServiceSetSession($sessionId, $body): \ArthurHlt\Zitadel\Model\Sessionv2SetSessionResponse
```

Update an existing session

Update an existing session with new information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sessionId = 'sessionId_example'; // string | \"id of the session to update\"
$body = new \ArthurHlt\Zitadel\Model\Sessionv2SessionServiceSetSessionBody(); // \ArthurHlt\Zitadel\Model\Sessionv2SessionServiceSetSessionBody

try {
    $result = $apiInstance->sessionServiceSetSession($sessionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceSetSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| \&quot;id of the session to update\&quot; |
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2SessionServiceSetSessionBody**](../Model/Sessionv2SessionServiceSetSessionBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2SetSessionResponse**](../Model/Sessionv2SetSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sessionServiceSetSession_0()`

```php
sessionServiceSetSession_0($sessionId, $body): \ArthurHlt\Zitadel\Model\Sessionv2betaSetSessionResponse
```

Update an existing session

Update an existing session with new information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SessionServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$sessionId = 'sessionId_example'; // string | \"id of the session to update\"
$body = new \ArthurHlt\Zitadel\Model\Sessionv2betaSessionServiceSetSessionBody(); // \ArthurHlt\Zitadel\Model\Sessionv2betaSessionServiceSetSessionBody

try {
    $result = $apiInstance->sessionServiceSetSession_0($sessionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionServiceApi->sessionServiceSetSession_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| \&quot;id of the session to update\&quot; |
 **body** | [**\ArthurHlt\Zitadel\Model\Sessionv2betaSessionServiceSetSessionBody**](../Model/Sessionv2betaSessionServiceSetSessionBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Sessionv2betaSetSessionResponse**](../Model/Sessionv2betaSetSessionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
