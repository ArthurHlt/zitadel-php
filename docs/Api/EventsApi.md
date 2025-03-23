# ArthurHlt\Zitadel\EventsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceListAggregateTypes()**](EventsApi.md#adminServiceListAggregateTypes) | **POST** /aggregates/types/_search | List Aggregate Types
[**adminServiceListEventTypes()**](EventsApi.md#adminServiceListEventTypes) | **POST** /events/types/_search | Event types
[**adminServiceListEvents()**](EventsApi.md#adminServiceListEvents) | **POST** /events/_search | Search Events


## `adminServiceListAggregateTypes()`

```php
adminServiceListAggregateTypes($body): \ArthurHlt\Zitadel\Model\V1ListAggregateTypesResponse
```

List Aggregate Types

Returns a list of the possible aggregate types in ZITADEL. This is used to filter the aggregate types in the list events request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceListAggregateTypes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->adminServiceListAggregateTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListAggregateTypesResponse**](../Model/V1ListAggregateTypesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListEventTypes()`

```php
adminServiceListEventTypes($body): \ArthurHlt\Zitadel\Model\V1ListEventTypesResponse
```

Event types

Returns a list of the possible event types in ZITADEL. This is used to filter the event types in the list events request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceListEventTypes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->adminServiceListEventTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListEventTypesResponse**](../Model/V1ListEventTypesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListEvents()`

```php
adminServiceListEvents($body): \ArthurHlt\Zitadel\Model\V1ListEventsResponse
```

Search Events

Returns a list of the possible event types in ZITADEL. This is used to filter the event types in the list events request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListEventsRequest(); // \ArthurHlt\Zitadel\Model\V1ListEventsRequest

try {
    $result = $apiInstance->adminServiceListEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->adminServiceListEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListEventsRequest**](../Model/V1ListEventsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListEventsResponse**](../Model/V1ListEventsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
