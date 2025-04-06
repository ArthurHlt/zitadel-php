# ArthurHlt\Zitadel\OIDCServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**oIDCServiceAuthorizeOrDenyDeviceAuthorization()**](OIDCServiceApi.md#oIDCServiceAuthorizeOrDenyDeviceAuthorization) | **POST** /v2/oidc/device_authorization/{deviceAuthorizationId} | Authorize or deny device authorization
[**oIDCServiceCreateCallback()**](OIDCServiceApi.md#oIDCServiceCreateCallback) | **POST** /v2/oidc/auth_requests/{authRequestId} | Finalize an Auth Request and get the callback URL.
[**oIDCServiceCreateCallback_0()**](OIDCServiceApi.md#oIDCServiceCreateCallback_0) | **POST** /v2beta/oidc/auth_requests/{authRequestId} | Finalize an Auth Request and get the callback URL.
[**oIDCServiceGetAuthRequest()**](OIDCServiceApi.md#oIDCServiceGetAuthRequest) | **GET** /v2/oidc/auth_requests/{authRequestId} | Get OIDC Auth Request details
[**oIDCServiceGetAuthRequest_0()**](OIDCServiceApi.md#oIDCServiceGetAuthRequest_0) | **GET** /v2beta/oidc/auth_requests/{authRequestId} | Get OIDC Auth Request details
[**oIDCServiceGetDeviceAuthorizationRequest()**](OIDCServiceApi.md#oIDCServiceGetDeviceAuthorizationRequest) | **GET** /v2/oidc/device_authorization/{userCode} | Get device authorization request


## `oIDCServiceAuthorizeOrDenyDeviceAuthorization()`

```php
oIDCServiceAuthorizeOrDenyDeviceAuthorization($deviceAuthorizationId, $body): object
```

Authorize or deny device authorization

Authorize or deny the device authorization request based on the provided device authorization id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OIDCServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$deviceAuthorizationId = 'deviceAuthorizationId_example'; // string | The device authorization id returned when submitting the user code.
$body = new \ArthurHlt\Zitadel\Model\OIDCServiceAuthorizeOrDenyDeviceAuthorizationBody(); // \ArthurHlt\Zitadel\Model\OIDCServiceAuthorizeOrDenyDeviceAuthorizationBody

try {
    $result = $apiInstance->oIDCServiceAuthorizeOrDenyDeviceAuthorization($deviceAuthorizationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OIDCServiceApi->oIDCServiceAuthorizeOrDenyDeviceAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceAuthorizationId** | **string**| The device authorization id returned when submitting the user code. |
 **body** | [**\ArthurHlt\Zitadel\Model\OIDCServiceAuthorizeOrDenyDeviceAuthorizationBody**](../Model/OIDCServiceAuthorizeOrDenyDeviceAuthorizationBody.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oIDCServiceCreateCallback()`

```php
oIDCServiceCreateCallback($authRequestId, $body): \ArthurHlt\Zitadel\Model\Oidcv2CreateCallbackResponse
```

Finalize an Auth Request and get the callback URL.

Finalize an Auth Request and get the callback URL for success or failure. The user must be redirected to the URL in order to inform the application about the success or failure. On success, the URL contains details for the application to obtain the tokens. This method can only be called once for an Auth request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OIDCServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$authRequestId = 'authRequestId_example'; // string | ID of the Auth Request.
$body = new \ArthurHlt\Zitadel\Model\Oidcv2OIDCServiceCreateCallbackBody(); // \ArthurHlt\Zitadel\Model\Oidcv2OIDCServiceCreateCallbackBody

try {
    $result = $apiInstance->oIDCServiceCreateCallback($authRequestId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OIDCServiceApi->oIDCServiceCreateCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authRequestId** | **string**| ID of the Auth Request. |
 **body** | [**\ArthurHlt\Zitadel\Model\Oidcv2OIDCServiceCreateCallbackBody**](../Model/Oidcv2OIDCServiceCreateCallbackBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Oidcv2CreateCallbackResponse**](../Model/Oidcv2CreateCallbackResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oIDCServiceCreateCallback_0()`

```php
oIDCServiceCreateCallback_0($authRequestId, $body): \ArthurHlt\Zitadel\Model\Oidcv2betaCreateCallbackResponse
```

Finalize an Auth Request and get the callback URL.

Finalize an Auth Request and get the callback URL for success or failure. The user must be redirected to the URL in order to inform the application about the success or failure. On success, the URL contains details for the application to obtain the tokens. This method can only be called once for an Auth request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OIDCServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$authRequestId = 'authRequestId_example'; // string | Set this field when the authorization flow failed. It creates a callback URL to the application, with the error details set.
$body = new \ArthurHlt\Zitadel\Model\Oidcv2betaOIDCServiceCreateCallbackBody(); // \ArthurHlt\Zitadel\Model\Oidcv2betaOIDCServiceCreateCallbackBody

try {
    $result = $apiInstance->oIDCServiceCreateCallback_0($authRequestId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OIDCServiceApi->oIDCServiceCreateCallback_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authRequestId** | **string**| Set this field when the authorization flow failed. It creates a callback URL to the application, with the error details set. |
 **body** | [**\ArthurHlt\Zitadel\Model\Oidcv2betaOIDCServiceCreateCallbackBody**](../Model/Oidcv2betaOIDCServiceCreateCallbackBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Oidcv2betaCreateCallbackResponse**](../Model/Oidcv2betaCreateCallbackResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oIDCServiceGetAuthRequest()`

```php
oIDCServiceGetAuthRequest($authRequestId): \ArthurHlt\Zitadel\Model\Oidcv2GetAuthRequestResponse
```

Get OIDC Auth Request details

Get OIDC Auth Request details by ID, obtained from the redirect URL. Returns details that are parsed from the application's Auth Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OIDCServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$authRequestId = 'authRequestId_example'; // string | ID of the Auth Request, as obtained from the redirect URL.

try {
    $result = $apiInstance->oIDCServiceGetAuthRequest($authRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OIDCServiceApi->oIDCServiceGetAuthRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authRequestId** | **string**| ID of the Auth Request, as obtained from the redirect URL. |

### Return type

[**\ArthurHlt\Zitadel\Model\Oidcv2GetAuthRequestResponse**](../Model/Oidcv2GetAuthRequestResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oIDCServiceGetAuthRequest_0()`

```php
oIDCServiceGetAuthRequest_0($authRequestId): \ArthurHlt\Zitadel\Model\Oidcv2betaGetAuthRequestResponse
```

Get OIDC Auth Request details

Get OIDC Auth Request details by ID, obtained from the redirect URL. Returns details that are parsed from the application's Auth Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OIDCServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$authRequestId = 'authRequestId_example'; // string | ID of the Auth Request, as obtained from the redirect URL.

try {
    $result = $apiInstance->oIDCServiceGetAuthRequest_0($authRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OIDCServiceApi->oIDCServiceGetAuthRequest_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authRequestId** | **string**| ID of the Auth Request, as obtained from the redirect URL. |

### Return type

[**\ArthurHlt\Zitadel\Model\Oidcv2betaGetAuthRequestResponse**](../Model/Oidcv2betaGetAuthRequestResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oIDCServiceGetDeviceAuthorizationRequest()`

```php
oIDCServiceGetDeviceAuthorizationRequest($userCode): \ArthurHlt\Zitadel\Model\V2GetDeviceAuthorizationRequestResponse
```

Get device authorization request

Get the device authorization based on the provided \"user code\". This will return the device authorization request, which contains the device authorization id that is required to authorize the request once the user signed in or to deny it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OIDCServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userCode = 'userCode_example'; // string | The user_code returned by the device authorization request and provided to the user by the device.

try {
    $result = $apiInstance->oIDCServiceGetDeviceAuthorizationRequest($userCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OIDCServiceApi->oIDCServiceGetDeviceAuthorizationRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userCode** | **string**| The user_code returned by the device authorization request and provided to the user by the device. |

### Return type

[**\ArthurHlt\Zitadel\Model\V2GetDeviceAuthorizationRequestResponse**](../Model/V2GetDeviceAuthorizationRequestResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
