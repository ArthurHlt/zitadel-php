# ArthurHlt\Zitadel\QuotasApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemServiceAddQuota()**](QuotasApi.md#systemServiceAddQuota) | **POST** /instances/{instanceId}/quotas | Creates a new quota Returns an error if the quota already exists for the specified unit Deprecated: use SetQuota instead
[**systemServiceRemoveQuota()**](QuotasApi.md#systemServiceRemoveQuota) | **DELETE** /instances/{instanceId}/quotas/{unit} | Removes a quota
[**systemServiceSetQuota()**](QuotasApi.md#systemServiceSetQuota) | **PUT** /instances/{instanceId}/quotas | Sets quota configuration properties Creates a new quota if it doesn&#39;t exist for the specified unit


## `systemServiceAddQuota()`

```php
systemServiceAddQuota($instanceId, $body): \ArthurHlt\Zitadel\Model\V1AddQuotaResponse
```

Creates a new quota Returns an error if the quota already exists for the specified unit Deprecated: use SetQuota instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\QuotasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody(); // \ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody

try {
    $result = $apiInstance->systemServiceAddQuota($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotasApi->systemServiceAddQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceAddQuotaBody**](../Model/SystemServiceAddQuotaBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddQuotaResponse**](../Model/V1AddQuotaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceRemoveQuota()`

```php
systemServiceRemoveQuota($instanceId, $unit): \ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse
```

Removes a quota

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\QuotasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$unit = 'unit_example'; // string

try {
    $result = $apiInstance->systemServiceRemoveQuota($instanceId, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotasApi->systemServiceRemoveQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **unit** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveQuotaResponse**](../Model/V1RemoveQuotaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceSetQuota()`

```php
systemServiceSetQuota($instanceId, $body): \ArthurHlt\Zitadel\Model\V1SetQuotaResponse
```

Sets quota configuration properties Creates a new quota if it doesn't exist for the specified unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\QuotasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody(); // \ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody

try {
    $result = $apiInstance->systemServiceSetQuota($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotasApi->systemServiceSetQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceSetQuotaBody**](../Model/SystemServiceSetQuotaBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetQuotaResponse**](../Model/V1SetQuotaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
