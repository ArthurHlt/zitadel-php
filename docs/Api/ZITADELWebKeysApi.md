# ArthurHlt\Zitadel\ZITADELWebKeysApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zITADELWebKeysActivateWebKey()**](ZITADELWebKeysApi.md#zITADELWebKeysActivateWebKey) | **POST** /resources/v3alpha/web_keys/{id}/_activate | Activate a signing key for the instance
[**zITADELWebKeysCreateWebKey()**](ZITADELWebKeysApi.md#zITADELWebKeysCreateWebKey) | **POST** /resources/v3alpha/web_keys | Generate a web key pair for the instance
[**zITADELWebKeysDeleteWebKey()**](ZITADELWebKeysApi.md#zITADELWebKeysDeleteWebKey) | **DELETE** /resources/v3alpha/web_keys/{id} | Delete a web key pair for the instance
[**zITADELWebKeysListWebKeys()**](ZITADELWebKeysApi.md#zITADELWebKeysListWebKeys) | **GET** /resources/v3alpha/web_keys | List web key details for the instance


## `zITADELWebKeysActivateWebKey()`

```php
zITADELWebKeysActivateWebKey($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaActivateWebKeyResponse
```

Activate a signing key for the instance

Switch the active signing web key. The previously active key will be deactivated. Note that the JWKs OIDC endpoint returns a cacheable response. Therefore it is not advised to activate a key that has been created within the cache duration (default is 5min), as the public key may not have been propagated to caches and clients yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELWebKeysApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELWebKeysActivateWebKey($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELWebKeysApi->zITADELWebKeysActivateWebKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaActivateWebKeyResponse**](../Model/V3alphaActivateWebKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELWebKeysCreateWebKey()`

```php
zITADELWebKeysCreateWebKey($key, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaCreateWebKeyResponse
```

Generate a web key pair for the instance

Generate a private and public key pair. The private key can be used to sign OIDC tokens after activation. The public key can be used to valite OIDC tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELWebKeysApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key = new \ArthurHlt\Zitadel\Model\V3alphaWebKey(); // \ArthurHlt\Zitadel\Model\V3alphaWebKey
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELWebKeysCreateWebKey($key, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELWebKeysApi->zITADELWebKeysCreateWebKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | [**\ArthurHlt\Zitadel\Model\V3alphaWebKey**](../Model/V3alphaWebKey.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaCreateWebKeyResponse**](../Model/V3alphaCreateWebKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELWebKeysDeleteWebKey()`

```php
zITADELWebKeysDeleteWebKey($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaDeleteWebKeyResponse
```

Delete a web key pair for the instance

Delete a web key pair. Only inactive keys can be deleted. Once a key is deleted, any tokens signed by this key will be invalid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELWebKeysApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELWebKeysDeleteWebKey($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELWebKeysApi->zITADELWebKeysDeleteWebKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaDeleteWebKeyResponse**](../Model/V3alphaDeleteWebKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELWebKeysListWebKeys()`

```php
zITADELWebKeysListWebKeys($instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaListWebKeysResponse
```

List web key details for the instance

List web key details for the instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELWebKeysApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELWebKeysListWebKeys($instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELWebKeysApi->zITADELWebKeysListWebKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaListWebKeysResponse**](../Model/V3alphaListWebKeysResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
