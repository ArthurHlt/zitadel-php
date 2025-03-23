# ArthurHlt\Zitadel\NotificationProvidersApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetFileSystemNotificationProvider()**](NotificationProvidersApi.md#adminServiceGetFileSystemNotificationProvider) | **GET** /notification/provider/file | Get Notification Provider Filesystem
[**adminServiceGetLogNotificationProvider()**](NotificationProvidersApi.md#adminServiceGetLogNotificationProvider) | **GET** /notification/provider/log | Get Notification Provider Log


## `adminServiceGetFileSystemNotificationProvider()`

```php
adminServiceGetFileSystemNotificationProvider(): \ArthurHlt\Zitadel\Model\V1GetFileSystemNotificationProviderResponse
```

Get Notification Provider Filesystem

Returns a filesystem notification provider if configured. This provider is only used for testing purposes. The notifications will be written to the filesystem.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetFileSystemNotificationProvider();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationProvidersApi->adminServiceGetFileSystemNotificationProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetFileSystemNotificationProviderResponse**](../Model/V1GetFileSystemNotificationProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetLogNotificationProvider()`

```php
adminServiceGetLogNotificationProvider(): \ArthurHlt\Zitadel\Model\V1GetLogNotificationProviderResponse
```

Get Notification Provider Log

Returns a log notification provider if configured. This provider is only used for testing purposes. The notifications will be written to the logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetLogNotificationProvider();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationProvidersApi->adminServiceGetLogNotificationProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetLogNotificationProviderResponse**](../Model/V1GetLogNotificationProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
