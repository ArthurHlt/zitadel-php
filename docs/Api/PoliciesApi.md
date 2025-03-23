# ArthurHlt\Zitadel\PoliciesApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyLabelPolicy()**](PoliciesApi.md#authServiceGetMyLabelPolicy) | **GET** /policies/label | Get Label Policy
[**authServiceGetMyLoginPolicy()**](PoliciesApi.md#authServiceGetMyLoginPolicy) | **GET** /policies/login | Get Login Policy
[**authServiceGetMyPasswordComplexityPolicy()**](PoliciesApi.md#authServiceGetMyPasswordComplexityPolicy) | **GET** /policies/passwords/complexity | Get Passwordcomplexity Policy
[**authServiceGetMyPrivacyPolicy()**](PoliciesApi.md#authServiceGetMyPrivacyPolicy) | **GET** /policies/privacy | Get Privacy Policy


## `authServiceGetMyLabelPolicy()`

```php
authServiceGetMyLabelPolicy(): \ArthurHlt\Zitadel\Model\V1GetMyLabelPolicyResponse
```

Get Label Policy

Returns the label settings that should be used for the authenticated user. It is set either on an instance or organization level. This policy defines the branding, colors, fonts, images, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyLabelPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->authServiceGetMyLabelPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyLabelPolicyResponse**](../Model/V1GetMyLabelPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceGetMyLoginPolicy()`

```php
authServiceGetMyLoginPolicy(): \ArthurHlt\Zitadel\Model\V1GetMyLoginPolicyResponse
```

Get Login Policy

Returns the login settings that should be used for the authenticated user. It is set either on an instance or organization level. This policy defines what possibilities the user has to authenticate and to use in the login, e.g social logins, MFA, passkey, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyLoginPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->authServiceGetMyLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyLoginPolicyResponse**](../Model/V1GetMyLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyPasswordComplexityPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->authServiceGetMyPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
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

## `authServiceGetMyPrivacyPolicy()`

```php
authServiceGetMyPrivacyPolicy(): \ArthurHlt\Zitadel\Model\V1GetMyPrivacyPolicyResponse
```

Get Privacy Policy

Returns the privacy settings that should be used for the authenticated user. It is set either on an instance or organization level. This policy defines the TOS and terms of service links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PoliciesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyPrivacyPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->authServiceGetMyPrivacyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyPrivacyPolicyResponse**](../Model/V1GetMyPrivacyPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
