# ArthurHlt\Zitadel\UserPhoneApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyPhone()**](UserPhoneApi.md#authServiceGetMyPhone) | **GET** /users/me/phone | Get My Phone
[**authServiceRemoveMyPhone()**](UserPhoneApi.md#authServiceRemoveMyPhone) | **DELETE** /users/me/phone | Remove Phone Number
[**authServiceResendMyPhoneVerification()**](UserPhoneApi.md#authServiceResendMyPhoneVerification) | **POST** /users/me/phone/_resend_verification | Resend Phone verification
[**authServiceSetMyPhone()**](UserPhoneApi.md#authServiceSetMyPhone) | **PUT** /users/me/phone | Set My Phone
[**authServiceVerifyMyPhone()**](UserPhoneApi.md#authServiceVerifyMyPhone) | **POST** /users/me/phone/_verify | Verify Phone


## `authServiceGetMyPhone()`

```php
authServiceGetMyPhone(): \ArthurHlt\Zitadel\Model\V1GetMyPhoneResponse
```

Get My Phone

Returns the phone number of the authenticated user and if the state is verified or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPhoneApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyPhone();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPhoneApi->authServiceGetMyPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyPhoneResponse**](../Model/V1GetMyPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyPhone()`

```php
authServiceRemoveMyPhone(): \ArthurHlt\Zitadel\Model\V1RemoveMyPhoneResponse
```

Remove Phone Number

The phone number of the authenticated user will be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPhoneApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRemoveMyPhone();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPhoneApi->authServiceRemoveMyPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyPhoneResponse**](../Model/V1RemoveMyPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceResendMyPhoneVerification()`

```php
authServiceResendMyPhoneVerification($body): \ArthurHlt\Zitadel\Model\V1ResendMyPhoneVerificationResponse
```

Resend Phone verification

Resends the verification notification to the last given phone number of the authenticated user. The notification provider has to be configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPhoneApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceResendMyPhoneVerification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPhoneApi->authServiceResendMyPhoneVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResendMyPhoneVerificationResponse**](../Model/V1ResendMyPhoneVerificationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceSetMyPhone()`

```php
authServiceSetMyPhone($body): \ArthurHlt\Zitadel\Model\V1SetMyPhoneResponse
```

Set My Phone

Sets a new phone number to the authenticated user. If a notification provider is configured the user will receive an sms with a code to authenticate the number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPhoneApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1SetMyPhoneRequest(); // \ArthurHlt\Zitadel\Model\V1SetMyPhoneRequest

try {
    $result = $apiInstance->authServiceSetMyPhone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPhoneApi->authServiceSetMyPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1SetMyPhoneRequest**](../Model/V1SetMyPhoneRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetMyPhoneResponse**](../Model/V1SetMyPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceVerifyMyPhone()`

```php
authServiceVerifyMyPhone($body): \ArthurHlt\Zitadel\Model\V1VerifyMyPhoneResponse
```

Verify Phone

Verify the phone number of the authenticated user, with the code that has been sent to the number. State of the phone number is verified after.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserPhoneApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1VerifyMyPhoneRequest(); // \ArthurHlt\Zitadel\Model\V1VerifyMyPhoneRequest

try {
    $result = $apiInstance->authServiceVerifyMyPhone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPhoneApi->authServiceVerifyMyPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1VerifyMyPhoneRequest**](../Model/V1VerifyMyPhoneRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1VerifyMyPhoneResponse**](../Model/V1VerifyMyPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
