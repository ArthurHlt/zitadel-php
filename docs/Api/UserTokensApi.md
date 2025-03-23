# ArthurHlt\Zitadel\UserTokensApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceListMyRefreshTokens()**](UserTokensApi.md#authServiceListMyRefreshTokens) | **POST** /users/me/tokens/refresh/_search | Get Refresh Tokens
[**authServiceRevokeAllMyRefreshTokens()**](UserTokensApi.md#authServiceRevokeAllMyRefreshTokens) | **POST** /users/me/tokens/refresh/_revoke_all | Revoke All Refresh Tokens
[**authServiceRevokeMyRefreshToken()**](UserTokensApi.md#authServiceRevokeMyRefreshToken) | **DELETE** /users/me/tokens/refresh/{id} | Revoke Refresh Tokens


## `authServiceListMyRefreshTokens()`

```php
authServiceListMyRefreshTokens($body): \ArthurHlt\Zitadel\Model\V1ListMyRefreshTokensResponse
```

Get Refresh Tokens

Returns the list of refresh tokens of the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserTokensApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceListMyRefreshTokens($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokensApi->authServiceListMyRefreshTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyRefreshTokensResponse**](../Model/V1ListMyRefreshTokensResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRevokeAllMyRefreshTokens()`

```php
authServiceRevokeAllMyRefreshTokens($body): object
```

Revoke All Refresh Tokens

Revokes all refresh tokens of the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserTokensApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceRevokeAllMyRefreshTokens($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokensApi->authServiceRevokeAllMyRefreshTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRevokeMyRefreshToken()`

```php
authServiceRevokeMyRefreshToken($id): \ArthurHlt\Zitadel\Model\V1RevokeMyRefreshTokenResponse
```

Revoke Refresh Tokens

Revokes a single refresh token of the authorized user by its (token) id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserTokensApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->authServiceRevokeMyRefreshToken($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokensApi->authServiceRevokeMyRefreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RevokeMyRefreshTokenResponse**](../Model/V1RevokeMyRefreshTokenResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
