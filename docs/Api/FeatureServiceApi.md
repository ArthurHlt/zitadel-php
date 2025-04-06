# ArthurHlt\Zitadel\FeatureServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**featureServiceGetInstanceFeatures()**](FeatureServiceApi.md#featureServiceGetInstanceFeatures) | **GET** /v2/features/instance | Get instance level features
[**featureServiceGetInstanceFeatures_0()**](FeatureServiceApi.md#featureServiceGetInstanceFeatures_0) | **GET** /v2beta/features/instance | Get instance level features
[**featureServiceGetOrganizationFeatures()**](FeatureServiceApi.md#featureServiceGetOrganizationFeatures) | **GET** /v2/features/organization/{organizationId} | Get organization level features
[**featureServiceGetOrganizationFeatures_0()**](FeatureServiceApi.md#featureServiceGetOrganizationFeatures_0) | **GET** /v2beta/features/organization/{organizationId} | Get organization level features
[**featureServiceGetSystemFeatures()**](FeatureServiceApi.md#featureServiceGetSystemFeatures) | **GET** /v2/features/system | Get system level features
[**featureServiceGetSystemFeatures_0()**](FeatureServiceApi.md#featureServiceGetSystemFeatures_0) | **GET** /v2beta/features/system | Get system level features
[**featureServiceGetUserFeatures()**](FeatureServiceApi.md#featureServiceGetUserFeatures) | **GET** /v2/features/user/{userId} | Get organization level features
[**featureServiceGetUserFeatures_0()**](FeatureServiceApi.md#featureServiceGetUserFeatures_0) | **GET** /v2beta/features/user/{userId} | Get organization level features
[**featureServiceResetInstanceFeatures()**](FeatureServiceApi.md#featureServiceResetInstanceFeatures) | **DELETE** /v2/features/instance | Reset instance level features
[**featureServiceResetInstanceFeatures_0()**](FeatureServiceApi.md#featureServiceResetInstanceFeatures_0) | **DELETE** /v2beta/features/instance | Reset instance level features
[**featureServiceResetOrganizationFeatures()**](FeatureServiceApi.md#featureServiceResetOrganizationFeatures) | **DELETE** /v2/features/organization/{organizationId} | Reset organization level features
[**featureServiceResetOrganizationFeatures_0()**](FeatureServiceApi.md#featureServiceResetOrganizationFeatures_0) | **DELETE** /v2beta/features/organization/{organizationId} | Reset organization level features
[**featureServiceResetSystemFeatures()**](FeatureServiceApi.md#featureServiceResetSystemFeatures) | **DELETE** /v2/features/system | Reset system level features
[**featureServiceResetSystemFeatures_0()**](FeatureServiceApi.md#featureServiceResetSystemFeatures_0) | **DELETE** /v2beta/features/system | Reset system level features
[**featureServiceResetUserFeatures()**](FeatureServiceApi.md#featureServiceResetUserFeatures) | **DELETE** /v2/features/user/{userId} | Reset user level features
[**featureServiceResetUserFeatures_0()**](FeatureServiceApi.md#featureServiceResetUserFeatures_0) | **DELETE** /v2beta/features/user/{userId} | Reset user level features
[**featureServiceSetInstanceFeatures()**](FeatureServiceApi.md#featureServiceSetInstanceFeatures) | **PUT** /v2/features/instance | Set instance level features
[**featureServiceSetInstanceFeatures_0()**](FeatureServiceApi.md#featureServiceSetInstanceFeatures_0) | **PUT** /v2beta/features/instance | Set instance level features
[**featureServiceSetOrganizationFeatures()**](FeatureServiceApi.md#featureServiceSetOrganizationFeatures) | **PUT** /v2/features/organization/{organizationId} | Set organization level features
[**featureServiceSetOrganizationFeatures_0()**](FeatureServiceApi.md#featureServiceSetOrganizationFeatures_0) | **PUT** /v2beta/features/organization/{organizationId} | Set organization level features
[**featureServiceSetSystemFeatures()**](FeatureServiceApi.md#featureServiceSetSystemFeatures) | **PUT** /v2/features/system | Set system level features
[**featureServiceSetSystemFeatures_0()**](FeatureServiceApi.md#featureServiceSetSystemFeatures_0) | **PUT** /v2beta/features/system | Set system level features
[**featureServiceSetUserFeatures()**](FeatureServiceApi.md#featureServiceSetUserFeatures) | **PUT** /v2/features/user/{userId} | Set user level features
[**featureServiceSetUserFeatures_0()**](FeatureServiceApi.md#featureServiceSetUserFeatures_0) | **PUT** /v2beta/features/user/{userId} | Set user level features


## `featureServiceGetInstanceFeatures()`

```php
featureServiceGetInstanceFeatures($inheritance): \ArthurHlt\Zitadel\Model\Featurev2GetInstanceFeaturesResponse
```

Get instance level features

Returns all configured features for an instance. Unset fields mean the feature is the current system default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$inheritance = True; // bool | Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the instance, it will be omitted from the response or Not Found is returned when the instance has no features flags at all.

try {
    $result = $apiInstance->featureServiceGetInstanceFeatures($inheritance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetInstanceFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inheritance** | **bool**| Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource&#39;s ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the instance, it will be omitted from the response or Not Found is returned when the instance has no features flags at all. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2GetInstanceFeaturesResponse**](../Model/Featurev2GetInstanceFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetInstanceFeatures_0()`

```php
featureServiceGetInstanceFeatures_0($inheritance): \ArthurHlt\Zitadel\Model\Featurev2betaGetInstanceFeaturesResponse
```

Get instance level features

Returns all configured features for an instance. Unset fields mean the feature is the current system default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$inheritance = True; // bool | Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the instance, it will be omitted from the response or Not Found is returned when the instance has no features flags at all.

try {
    $result = $apiInstance->featureServiceGetInstanceFeatures_0($inheritance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetInstanceFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inheritance** | **bool**| Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource&#39;s ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the instance, it will be omitted from the response or Not Found is returned when the instance has no features flags at all. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaGetInstanceFeaturesResponse**](../Model/Featurev2betaGetInstanceFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetOrganizationFeatures()`

```php
featureServiceGetOrganizationFeatures($organizationId, $inheritance): \ArthurHlt\Zitadel\Model\Featurev2GetOrganizationFeaturesResponse
```

Get organization level features

Returns all configured features for an organization. Unset fields mean the feature is the current instance default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 'organizationId_example'; // string
$inheritance = True; // bool | Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the organization, it will be omitted from the response or Not Found is returned when the organization has no features flags at all.

try {
    $result = $apiInstance->featureServiceGetOrganizationFeatures($organizationId, $inheritance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetOrganizationFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |
 **inheritance** | **bool**| Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource&#39;s ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the organization, it will be omitted from the response or Not Found is returned when the organization has no features flags at all. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2GetOrganizationFeaturesResponse**](../Model/Featurev2GetOrganizationFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetOrganizationFeatures_0()`

```php
featureServiceGetOrganizationFeatures_0($organizationId, $inheritance): \ArthurHlt\Zitadel\Model\Featurev2betaGetOrganizationFeaturesResponse
```

Get organization level features

Returns all configured features for an organization. Unset fields mean the feature is the current instance default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 'organizationId_example'; // string
$inheritance = True; // bool | Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the organization, it will be omitted from the response or Not Found is returned when the organization has no features flags at all.

try {
    $result = $apiInstance->featureServiceGetOrganizationFeatures_0($organizationId, $inheritance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetOrganizationFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |
 **inheritance** | **bool**| Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource&#39;s ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the organization, it will be omitted from the response or Not Found is returned when the organization has no features flags at all. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaGetOrganizationFeaturesResponse**](../Model/Featurev2betaGetOrganizationFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetSystemFeatures()`

```php
featureServiceGetSystemFeatures(): \ArthurHlt\Zitadel\Model\Featurev2GetSystemFeaturesResponse
```

Get system level features

Returns all configured features for the system. Unset fields mean the feature is the current system default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->featureServiceGetSystemFeatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetSystemFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2GetSystemFeaturesResponse**](../Model/Featurev2GetSystemFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetSystemFeatures_0()`

```php
featureServiceGetSystemFeatures_0(): \ArthurHlt\Zitadel\Model\Featurev2betaGetSystemFeaturesResponse
```

Get system level features

Returns all configured features for the system. Unset fields mean the feature is the current system default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->featureServiceGetSystemFeatures_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetSystemFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaGetSystemFeaturesResponse**](../Model/Featurev2betaGetSystemFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetUserFeatures()`

```php
featureServiceGetUserFeatures($userId, $inheritance): \ArthurHlt\Zitadel\Model\Featurev2GetUserFeaturesResponse
```

Get organization level features

Returns all configured features for an organization. Unset fields mean the feature is the current instance default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$inheritance = True; // bool | Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the user, it will be ommitted from the response or Not Found is returned when the user has no features flags at all.

try {
    $result = $apiInstance->featureServiceGetUserFeatures($userId, $inheritance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetUserFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **inheritance** | **bool**| Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource&#39;s ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the user, it will be ommitted from the response or Not Found is returned when the user has no features flags at all. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2GetUserFeaturesResponse**](../Model/Featurev2GetUserFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceGetUserFeatures_0()`

```php
featureServiceGetUserFeatures_0($userId, $inheritance): \ArthurHlt\Zitadel\Model\Featurev2betaGetUserFeaturesResponse
```

Get organization level features

Returns all configured features for an organization. Unset fields mean the feature is the current instance default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$inheritance = True; // bool | Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the user, it will be ommitted from the response or Not Found is returned when the user has no features flags at all.

try {
    $result = $apiInstance->featureServiceGetUserFeatures_0($userId, $inheritance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceGetUserFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **inheritance** | **bool**| Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource&#39;s ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the user, it will be ommitted from the response or Not Found is returned when the user has no features flags at all. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaGetUserFeaturesResponse**](../Model/Featurev2betaGetUserFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetInstanceFeatures()`

```php
featureServiceResetInstanceFeatures(): \ArthurHlt\Zitadel\Model\Featurev2ResetInstanceFeaturesResponse
```

Reset instance level features

Deletes ALL configured features for an instance, reverting the behaviors to system defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->featureServiceResetInstanceFeatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetInstanceFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2ResetInstanceFeaturesResponse**](../Model/Featurev2ResetInstanceFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetInstanceFeatures_0()`

```php
featureServiceResetInstanceFeatures_0(): \ArthurHlt\Zitadel\Model\Featurev2betaResetInstanceFeaturesResponse
```

Reset instance level features

Deletes ALL configured features for an instance, reverting the behaviors to system defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->featureServiceResetInstanceFeatures_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetInstanceFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaResetInstanceFeaturesResponse**](../Model/Featurev2betaResetInstanceFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetOrganizationFeatures()`

```php
featureServiceResetOrganizationFeatures($organizationId): \ArthurHlt\Zitadel\Model\Featurev2ResetOrganizationFeaturesResponse
```

Reset organization level features

Deletes ALL configured features for an organization, reverting the behaviors to instance defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 'organizationId_example'; // string

try {
    $result = $apiInstance->featureServiceResetOrganizationFeatures($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetOrganizationFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2ResetOrganizationFeaturesResponse**](../Model/Featurev2ResetOrganizationFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetOrganizationFeatures_0()`

```php
featureServiceResetOrganizationFeatures_0($organizationId): \ArthurHlt\Zitadel\Model\Featurev2betaResetOrganizationFeaturesResponse
```

Reset organization level features

Deletes ALL configured features for an organization, reverting the behaviors to instance defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 'organizationId_example'; // string

try {
    $result = $apiInstance->featureServiceResetOrganizationFeatures_0($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetOrganizationFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaResetOrganizationFeaturesResponse**](../Model/Featurev2betaResetOrganizationFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetSystemFeatures()`

```php
featureServiceResetSystemFeatures(): \ArthurHlt\Zitadel\Model\Featurev2ResetSystemFeaturesResponse
```

Reset system level features

Deletes ALL configured features for the system, reverting the behaviors to system defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->featureServiceResetSystemFeatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetSystemFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2ResetSystemFeaturesResponse**](../Model/Featurev2ResetSystemFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetSystemFeatures_0()`

```php
featureServiceResetSystemFeatures_0(): \ArthurHlt\Zitadel\Model\Featurev2betaResetSystemFeaturesResponse
```

Reset system level features

Deletes ALL configured features for the system, reverting the behaviors to system defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->featureServiceResetSystemFeatures_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetSystemFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaResetSystemFeaturesResponse**](../Model/Featurev2betaResetSystemFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetUserFeatures()`

```php
featureServiceResetUserFeatures($userId): \ArthurHlt\Zitadel\Model\Featurev2ResetUserFeaturesResponse
```

Reset user level features

Deletes ALL configured features for a user, reverting the behaviors to organization defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->featureServiceResetUserFeatures($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetUserFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2ResetUserFeaturesResponse**](../Model/Featurev2ResetUserFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceResetUserFeatures_0()`

```php
featureServiceResetUserFeatures_0($userId): \ArthurHlt\Zitadel\Model\Featurev2betaResetUserFeaturesResponse
```

Reset user level features

Deletes ALL configured features for a user, reverting the behaviors to organization defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->featureServiceResetUserFeatures_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceResetUserFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaResetUserFeaturesResponse**](../Model/Featurev2betaResetUserFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetInstanceFeatures()`

```php
featureServiceSetInstanceFeatures($body): \ArthurHlt\Zitadel\Model\Featurev2SetInstanceFeaturesResponse
```

Set instance level features

Configure and set features that apply to a complete instance. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Featurev2SetInstanceFeaturesRequest(); // \ArthurHlt\Zitadel\Model\Featurev2SetInstanceFeaturesRequest

try {
    $result = $apiInstance->featureServiceSetInstanceFeatures($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetInstanceFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Featurev2SetInstanceFeaturesRequest**](../Model/Featurev2SetInstanceFeaturesRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2SetInstanceFeaturesResponse**](../Model/Featurev2SetInstanceFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetInstanceFeatures_0()`

```php
featureServiceSetInstanceFeatures_0($body): \ArthurHlt\Zitadel\Model\Featurev2betaSetInstanceFeaturesResponse
```

Set instance level features

Configure and set features that apply to a complete instance. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Featurev2betaSetInstanceFeaturesRequest(); // \ArthurHlt\Zitadel\Model\Featurev2betaSetInstanceFeaturesRequest

try {
    $result = $apiInstance->featureServiceSetInstanceFeatures_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetInstanceFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Featurev2betaSetInstanceFeaturesRequest**](../Model/Featurev2betaSetInstanceFeaturesRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaSetInstanceFeaturesResponse**](../Model/Featurev2betaSetInstanceFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetOrganizationFeatures()`

```php
featureServiceSetOrganizationFeatures($organizationId, $body): \ArthurHlt\Zitadel\Model\Featurev2SetOrganizationFeaturesResponse
```

Set organization level features

Configure and set features that apply to a complete instance. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 'organizationId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->featureServiceSetOrganizationFeatures($organizationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetOrganizationFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2SetOrganizationFeaturesResponse**](../Model/Featurev2SetOrganizationFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetOrganizationFeatures_0()`

```php
featureServiceSetOrganizationFeatures_0($organizationId, $body): \ArthurHlt\Zitadel\Model\Featurev2betaSetOrganizationFeaturesResponse
```

Set organization level features

Configure and set features that apply to a complete instance. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$organizationId = 'organizationId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->featureServiceSetOrganizationFeatures_0($organizationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetOrganizationFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaSetOrganizationFeaturesResponse**](../Model/Featurev2betaSetOrganizationFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetSystemFeatures()`

```php
featureServiceSetSystemFeatures($body): \ArthurHlt\Zitadel\Model\Featurev2SetSystemFeaturesResponse
```

Set system level features

Configure and set features that apply to the complete system. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Featurev2SetSystemFeaturesRequest(); // \ArthurHlt\Zitadel\Model\Featurev2SetSystemFeaturesRequest

try {
    $result = $apiInstance->featureServiceSetSystemFeatures($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetSystemFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Featurev2SetSystemFeaturesRequest**](../Model/Featurev2SetSystemFeaturesRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2SetSystemFeaturesResponse**](../Model/Featurev2SetSystemFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetSystemFeatures_0()`

```php
featureServiceSetSystemFeatures_0($body): \ArthurHlt\Zitadel\Model\Featurev2betaSetSystemFeaturesResponse
```

Set system level features

Configure and set features that apply to the complete system. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Featurev2betaSetSystemFeaturesRequest(); // \ArthurHlt\Zitadel\Model\Featurev2betaSetSystemFeaturesRequest

try {
    $result = $apiInstance->featureServiceSetSystemFeatures_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetSystemFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Featurev2betaSetSystemFeaturesRequest**](../Model/Featurev2betaSetSystemFeaturesRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaSetSystemFeaturesResponse**](../Model/Featurev2betaSetSystemFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetUserFeatures()`

```php
featureServiceSetUserFeatures($userId, $body): \ArthurHlt\Zitadel\Model\Featurev2SetUserFeaturesResponse
```

Set user level features

Configure and set features that apply to an user. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->featureServiceSetUserFeatures($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetUserFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2SetUserFeaturesResponse**](../Model/Featurev2SetUserFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `featureServiceSetUserFeatures_0()`

```php
featureServiceSetUserFeatures_0($userId, $body): \ArthurHlt\Zitadel\Model\Featurev2betaSetUserFeaturesResponse
```

Set user level features

Configure and set features that apply to an user. Only fields present in the request are set or unset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\FeatureServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->featureServiceSetUserFeatures_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureServiceApi->featureServiceSetUserFeatures_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Featurev2betaSetUserFeaturesResponse**](../Model/Featurev2betaSetUserFeaturesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
