# ArthurHlt\Zitadel\ViewsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemServiceClearView()**](ViewsApi.md#systemServiceClearView) | **POST** /views/{database}/{viewName} | Truncates the delta of the change stream be carefull with this function because ZITADEL has to recompute the deltas after they got cleared. Search requests will return wrong results until all deltas are recomputed
[**systemServiceListViews()**](ViewsApi.md#systemServiceListViews) | **POST** /views/_search | Returns all stored read models of ZITADEL views are used for search optimisation and optimise request latencies they represent the delta of the event happend on the objects


## `systemServiceClearView()`

```php
systemServiceClearView($database, $viewName): object
```

Truncates the delta of the change stream be carefull with this function because ZITADEL has to recompute the deltas after they got cleared. Search requests will return wrong results until all deltas are recomputed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string
$viewName = 'viewName_example'; // string

try {
    $result = $apiInstance->systemServiceClearView($database, $viewName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->systemServiceClearView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **viewName** | **string**|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceListViews()`

```php
systemServiceListViews($body): \ArthurHlt\Zitadel\Model\Zitadelsystemv1ListViewsResponse
```

Returns all stored read models of ZITADEL views are used for search optimisation and optimise request latencies they represent the delta of the event happend on the objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->systemServiceListViews($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->systemServiceListViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelsystemv1ListViewsResponse**](../Model/Zitadelsystemv1ListViewsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
