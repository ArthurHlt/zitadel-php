# ArthurHlt\Zitadel\UserPasswordApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyPasswordComplexityPolicy()**](UserPasswordApi.md#authServiceGetMyPasswordComplexityPolicy) | **GET** /policies/passwords/complexity | Get Passwordcomplexity Policy
[**authServiceUpdateMyPassword()**](UserPasswordApi.md#authServiceUpdateMyPassword) | **PUT** /users/me/password | Change Password


## `authServiceGetMyPasswordComplexityPolicy()`

```php
authServiceGetMyPasswordComplexityPolicy(): \ArthurHlt\Zitadel\Model\V1GetMyPasswordComplexityPolicyResponse
```

Get Passwordcomplexity Policy

Returns the password complexity settings that should be used for the authenticated user. It is set either on an instance or organization level. This policy defines how the password should look.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPasswordApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyPasswordComplexityPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPasswordApi->authServiceGetMyPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyPasswordComplexityPolicyResponse**](../Model/V1GetMyPasswordComplexityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceUpdateMyPassword()`

```php
authServiceUpdateMyPassword($body): \ArthurHlt\Zitadel\Model\V1UpdateMyPasswordResponse
```

Change Password

Changes the password of the authenticated user. Make sure the password follows the password complexity policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPasswordApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateMyPasswordRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateMyPasswordRequest

try {
    $result = $apiInstance->authServiceUpdateMyPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPasswordApi->authServiceUpdateMyPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateMyPasswordRequest**](../Model/V1UpdateMyPasswordRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateMyPasswordResponse**](../Model/V1UpdateMyPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
