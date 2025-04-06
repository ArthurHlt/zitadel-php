# ArthurHlt\Zitadel\FeatureRestrictionsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetRestrictions()**](FeatureRestrictionsApi.md#adminServiceGetRestrictions) | **GET** /restrictions | Get the current feature restrictions for the instance
[**adminServiceSetRestrictions()**](FeatureRestrictionsApi.md#adminServiceSetRestrictions) | **PUT** /restrictions | Restrict the instances features


## `adminServiceGetRestrictions()`

```php
adminServiceGetRestrictions(): \ArthurHlt\Zitadel\Model\V1GetRestrictionsResponse
```

Get the current feature restrictions for the instance

Undefined values mean that the feature is not restricted. If restrictions were never set, the instances features are not restricted, all properties are undefined and the details object is empty.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureRestrictionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetRestrictions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureRestrictionsApi->adminServiceGetRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetRestrictionsResponse**](../Model/V1GetRestrictionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceSetRestrictions()`

```php
adminServiceSetRestrictions($body): \ArthurHlt\Zitadel\Model\V1SetRestrictionsResponse
```

Restrict the instances features

Undefined values don't change the current restriction. Zero values remove the current restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureRestrictionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1SetRestrictionsRequest(); // \ArthurHlt\Zitadel\Model\V1SetRestrictionsRequest

try {
    $result = $apiInstance->adminServiceSetRestrictions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureRestrictionsApi->adminServiceSetRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1SetRestrictionsRequest**](../Model/V1SetRestrictionsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetRestrictionsResponse**](../Model/V1SetRestrictionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
