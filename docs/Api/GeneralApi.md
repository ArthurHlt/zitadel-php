# ArthurHlt\Zitadel\GeneralApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetDefaultLanguage()**](GeneralApi.md#adminServiceGetDefaultLanguage) | **GET** /languages/default | Get Default Languages
[**adminServiceSetDefaultLanguage()**](GeneralApi.md#adminServiceSetDefaultLanguage) | **PUT** /languages/default/{language} | Set Default Languages
[**authServiceGetSupportedLanguages()**](GeneralApi.md#authServiceGetSupportedLanguages) | **GET** /languages | Supported Languages
[**managementServiceGetIAM()**](GeneralApi.md#managementServiceGetIAM) | **GET** /iam | Instance information
[**managementServiceGetOIDCInformation()**](GeneralApi.md#managementServiceGetOIDCInformation) | **GET** /zitadel/docs | ZITADEL documentation
[**systemServiceHealthz()**](GeneralApi.md#systemServiceHealthz) | **GET** /healthz | Indicates if ZITADEL is running. It respondes as soon as ZITADEL started


## `adminServiceGetDefaultLanguage()`

```php
adminServiceGetDefaultLanguage(): \ArthurHlt\Zitadel\Model\V1GetDefaultLanguageResponse
```

Get Default Languages

Returns the language that is used as a fallback/default if the user has configured something that is not provided by ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetDefaultLanguage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->adminServiceGetDefaultLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultLanguageResponse**](../Model/V1GetDefaultLanguageResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceSetDefaultLanguage()`

```php
adminServiceSetDefaultLanguage($language): \ArthurHlt\Zitadel\Model\V1SetDefaultLanguageResponse
```

Set Default Languages

Set the language that is used as a fallback/default if the user has configured something that is not provided by ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string

try {
    $result = $apiInstance->adminServiceSetDefaultLanguage($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->adminServiceSetDefaultLanguage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetDefaultLanguageResponse**](../Model/V1SetDefaultLanguageResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceGetSupportedLanguages()`

```php
authServiceGetSupportedLanguages(): \ArthurHlt\Zitadel\Model\Zitadelauthv1GetSupportedLanguagesResponse
```

Supported Languages

Use GetSupportedLanguages on the admin service instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetSupportedLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->authServiceGetSupportedLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelauthv1GetSupportedLanguagesResponse**](../Model/Zitadelauthv1GetSupportedLanguagesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetIAM()`

```php
managementServiceGetIAM(): \ArthurHlt\Zitadel\Model\V1GetIAMResponse
```

Instance information

Some needed settings made in ZITADEL like the global organization id or ZITADEL project ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->managementServiceGetIAM();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->managementServiceGetIAM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetIAMResponse**](../Model/V1GetIAMResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetOIDCInformation()`

```php
managementServiceGetOIDCInformation(): \ArthurHlt\Zitadel\Model\V1GetOIDCInformationResponse
```

ZITADEL documentation

This endpoint returns some general needed (OIDC) information about ZITADEL like the issuer or discovery endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->managementServiceGetOIDCInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->managementServiceGetOIDCInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetOIDCInformationResponse**](../Model/V1GetOIDCInformationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceHealthz()`

```php
systemServiceHealthz(): object
```

Indicates if ZITADEL is running. It respondes as soon as ZITADEL started

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->systemServiceHealthz();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->systemServiceHealthz: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
