# ArthurHlt\Zitadel\FailedEventsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceRemoveFailedEvent()**](FailedEventsApi.md#adminServiceRemoveFailedEvent) | **DELETE** /failedevents/{database}/{viewName}/{failedSequence} | Remove Failed Events
[**systemServiceListFailedEvents()**](FailedEventsApi.md#systemServiceListFailedEvents) | **POST** /failedevents/_search | Returns event descriptions which cannot be processed. It&#39;s possible that some events need some retries. For example if the SMTP-API wasn&#39;t able to send an email at the first time
[**systemServiceRemoveFailedEvent()**](FailedEventsApi.md#systemServiceRemoveFailedEvent) | **DELETE** /failedevents/{database_1}/{viewName}/{failedSequence} | Deletes the event from failed events view. the event is not removed from the change stream This call is usefull if the system was able to process the event later. e.g. if the second try of sending an email was successful. the first try produced a failed event. You can find out if it worked on the &#x60;failure_count&#x60;


## `adminServiceRemoveFailedEvent()`

```php
adminServiceRemoveFailedEvent($database, $viewName, $failedSequence): object
```

Remove Failed Events

Removes the event from the failed evens view, but not from the change stream. This call is useful if the system was able to process the event after some retries. e.g. if the second try of sending an email was successful. the first try produced a failed event. You can find out if it worked on the `failure_count`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FailedEventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string
$viewName = 'viewName_example'; // string
$failedSequence = 'failedSequence_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveFailedEvent($database, $viewName, $failedSequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FailedEventsApi->adminServiceRemoveFailedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **viewName** | **string**|  |
 **failedSequence** | **string**|  |

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

## `systemServiceListFailedEvents()`

```php
systemServiceListFailedEvents($body): \ArthurHlt\Zitadel\Model\Zitadelsystemv1ListFailedEventsResponse
```

Returns event descriptions which cannot be processed. It's possible that some events need some retries. For example if the SMTP-API wasn't able to send an email at the first time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FailedEventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->systemServiceListFailedEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FailedEventsApi->systemServiceListFailedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelsystemv1ListFailedEventsResponse**](../Model/Zitadelsystemv1ListFailedEventsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceRemoveFailedEvent()`

```php
systemServiceRemoveFailedEvent($database1, $viewName, $failedSequence, $instanceId): object
```

Deletes the event from failed events view. the event is not removed from the change stream This call is usefull if the system was able to process the event later. e.g. if the second try of sending an email was successful. the first try produced a failed event. You can find out if it worked on the `failure_count`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FailedEventsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$database1 = 'database1_example'; // string
$viewName = 'viewName_example'; // string
$failedSequence = 'failedSequence_example'; // string
$instanceId = 'instanceId_example'; // string

try {
    $result = $apiInstance->systemServiceRemoveFailedEvent($database1, $viewName, $failedSequence, $instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FailedEventsApi->systemServiceRemoveFailedEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database1** | **string**|  |
 **viewName** | **string**|  |
 **failedSequence** | **string**|  |
 **instanceId** | **string**|  | [optional]

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
