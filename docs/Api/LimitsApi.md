# ArthurHlt\Zitadel\LimitsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemServiceBulkSetLimits()**](LimitsApi.md#systemServiceBulkSetLimits) | **PUT** /instances/limits/_bulk | Sets many instance level limits
[**systemServiceResetLimits()**](LimitsApi.md#systemServiceResetLimits) | **DELETE** /instances/{instanceId}/limits | Resets instance level limits
[**systemServiceSetLimits()**](LimitsApi.md#systemServiceSetLimits) | **PUT** /instances/{instanceId}/limits | Sets instance level limits


## `systemServiceBulkSetLimits()`

```php
systemServiceBulkSetLimits($body): \ArthurHlt\Zitadel\Model\V1BulkSetLimitsResponse
```

Sets many instance level limits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LimitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1BulkSetLimitsRequest(); // \ArthurHlt\Zitadel\Model\V1BulkSetLimitsRequest

try {
    $result = $apiInstance->systemServiceBulkSetLimits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitsApi->systemServiceBulkSetLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1BulkSetLimitsRequest**](../Model/V1BulkSetLimitsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1BulkSetLimitsResponse**](../Model/V1BulkSetLimitsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceResetLimits()`

```php
systemServiceResetLimits($instanceId): \ArthurHlt\Zitadel\Model\V1ResetLimitsResponse
```

Resets instance level limits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LimitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string

try {
    $result = $apiInstance->systemServiceResetLimits($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitsApi->systemServiceResetLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetLimitsResponse**](../Model/V1ResetLimitsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceSetLimits()`

```php
systemServiceSetLimits($instanceId, $body): \ArthurHlt\Zitadel\Model\V1SetLimitsResponse
```

Sets instance level limits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LimitsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceSetLimitsBody(); // \ArthurHlt\Zitadel\Model\SystemServiceSetLimitsBody

try {
    $result = $apiInstance->systemServiceSetLimits($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LimitsApi->systemServiceSetLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceSetLimitsBody**](../Model/SystemServiceSetLimitsBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetLimitsResponse**](../Model/V1SetLimitsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
