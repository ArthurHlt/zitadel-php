# ArthurHlt\Zitadel\SecretsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetSecretGenerator()**](SecretsApi.md#adminServiceGetSecretGenerator) | **GET** /secretgenerators/{generatorType} | Get Secret Generator
[**adminServiceListSecretGenerators()**](SecretsApi.md#adminServiceListSecretGenerators) | **POST** /secretgenerators/_search | List Secret Generators
[**adminServiceUpdateSecretGenerator()**](SecretsApi.md#adminServiceUpdateSecretGenerator) | **PUT** /secretgenerators/{generatorType} | Update Secret Generator


## `adminServiceGetSecretGenerator()`

```php
adminServiceGetSecretGenerator($generatorType): \ArthurHlt\Zitadel\Model\V1GetSecretGeneratorResponse
```

Get Secret Generator

Get a specific secret generator by its type (e.g PasswordResetCode). A generator defines how a secret should look when generating in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$generatorType = 'generatorType_example'; // string

try {
    $result = $apiInstance->adminServiceGetSecretGenerator($generatorType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->adminServiceGetSecretGenerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generatorType** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetSecretGeneratorResponse**](../Model/V1GetSecretGeneratorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListSecretGenerators()`

```php
adminServiceListSecretGenerators($body): \ArthurHlt\Zitadel\Model\V1ListSecretGeneratorsResponse
```

List Secret Generators

Lists all the configured secret generators. The generators define how a secret should look when generated in ZITADEL. E.g Email verification code, phone verification code, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListSecretGeneratorsRequest(); // \ArthurHlt\Zitadel\Model\V1ListSecretGeneratorsRequest

try {
    $result = $apiInstance->adminServiceListSecretGenerators($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->adminServiceListSecretGenerators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListSecretGeneratorsRequest**](../Model/V1ListSecretGeneratorsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListSecretGeneratorsResponse**](../Model/V1ListSecretGeneratorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSecretGenerator()`

```php
adminServiceUpdateSecretGenerator($generatorType, $body): \ArthurHlt\Zitadel\Model\V1UpdateSecretGeneratorResponse
```

Update Secret Generator

Change a specific secret generator configuration by its type (e.g PasswordResetCode). A generator defines how a secret should look when generating in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$generatorType = 'generatorType_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateSecretGeneratorBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateSecretGeneratorBody

try {
    $result = $apiInstance->adminServiceUpdateSecretGenerator($generatorType, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->adminServiceUpdateSecretGenerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generatorType** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateSecretGeneratorBody**](../Model/AdminServiceUpdateSecretGeneratorBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSecretGeneratorResponse**](../Model/V1UpdateSecretGeneratorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
