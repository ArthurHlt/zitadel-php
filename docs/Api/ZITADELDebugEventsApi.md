# ArthurHlt\Zitadel\ZITADELDebugEventsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zITADELDebugEventsCreateDebugEvents()**](ZITADELDebugEventsApi.md#zITADELDebugEventsCreateDebugEvents) | **POST** / | Create a set of debug events.
[**zITADELDebugEventsGetDebugEventsStateById()**](ZITADELDebugEventsApi.md#zITADELDebugEventsGetDebugEventsStateById) | **GET** /v3alpha/debug_events/{id} | 
[**zITADELDebugEventsListDebugEventsStates()**](ZITADELDebugEventsApi.md#zITADELDebugEventsListDebugEventsStates) | **GET** /v3alpha/debug_events | 


## `zITADELDebugEventsCreateDebugEvents()`

```php
zITADELDebugEventsCreateDebugEvents($aggregateId, $events, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse
```

Create a set of debug events.

Create a set of debug events which will be pushed to the eventstore and reduced to the projection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELDebugEventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$aggregateId = 'aggregateId_example'; // string | unique identifier for the aggregate we want to push events to.
$events = array(new \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent()); // \ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[]
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELDebugEventsCreateDebugEvents($aggregateId, $events, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELDebugEventsApi->zITADELDebugEventsCreateDebugEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aggregateId** | **string**| unique identifier for the aggregate we want to push events to. |
 **events** | [**\ArthurHlt\Zitadel\Model\DebugEventsv3alphaEvent[]**](../Model/DebugEventsv3alphaEvent.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaCreateDebugEventsResponse**](../Model/V3alphaCreateDebugEventsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELDebugEventsGetDebugEventsStateById()`

```php
zITADELDebugEventsGetDebugEventsStateById($id, $triggerBulk): \ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELDebugEventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the aggregate.
$triggerBulk = True; // bool

try {
    $result = $apiInstance->zITADELDebugEventsGetDebugEventsStateById($id, $triggerBulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELDebugEventsApi->zITADELDebugEventsGetDebugEventsStateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the aggregate. |
 **triggerBulk** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaGetDebugEventsStateByIdResponse**](../Model/V3alphaGetDebugEventsStateByIdResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELDebugEventsListDebugEventsStates()`

```php
zITADELDebugEventsListDebugEventsStates($triggerBulk): \ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELDebugEventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$triggerBulk = True; // bool

try {
    $result = $apiInstance->zITADELDebugEventsListDebugEventsStates($triggerBulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELDebugEventsApi->zITADELDebugEventsListDebugEventsStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **triggerBulk** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaListDebugEventsStatesResponse**](../Model/V3alphaListDebugEventsStatesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
