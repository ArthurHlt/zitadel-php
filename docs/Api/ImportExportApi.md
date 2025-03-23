# ArthurHlt\Zitadel\ImportExportApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceExportData()**](ImportExportApi.md#adminServiceExportData) | **POST** /export | Export Data
[**adminServiceImportData()**](ImportExportApi.md#adminServiceImportData) | **POST** /import | Import Data


## `adminServiceExportData()`

```php
adminServiceExportData($body): \ArthurHlt\Zitadel\Model\V1ExportDataResponse
```

Export Data

Export data on an instance level to ZITADEL. It can be either directly exported in the response or you can point to a file on an S3 storage, where the data should be written.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ExportDataRequest(); // \ArthurHlt\Zitadel\Model\V1ExportDataRequest

try {
    $result = $apiInstance->adminServiceExportData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->adminServiceExportData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ExportDataRequest**](../Model/V1ExportDataRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ExportDataResponse**](../Model/V1ExportDataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceImportData()`

```php
adminServiceImportData($body): \ArthurHlt\Zitadel\Model\V1ImportDataResponse
```

Import Data

Import data on an instance level to ZITADEL. It can be either directly in the request or you can point to a file on an S3 storage, from which the data should be loaded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ImportExportApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ImportDataRequest(); // \ArthurHlt\Zitadel\Model\V1ImportDataRequest

try {
    $result = $apiInstance->adminServiceImportData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportApi->adminServiceImportData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ImportDataRequest**](../Model/V1ImportDataRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ImportDataResponse**](../Model/V1ImportDataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
