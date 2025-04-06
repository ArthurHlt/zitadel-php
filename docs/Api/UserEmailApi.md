# ArthurHlt\Zitadel\UserEmailApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyEmail()**](UserEmailApi.md#authServiceGetMyEmail) | **GET** /users/me/email | Get My Email
[**authServiceResendMyEmailVerification()**](UserEmailApi.md#authServiceResendMyEmailVerification) | **POST** /users/me/email/_resend_verification | Resend Email Verification
[**authServiceSetMyEmail()**](UserEmailApi.md#authServiceSetMyEmail) | **PUT** /users/me/email | Update My Email
[**authServiceVerifyMyEmail()**](UserEmailApi.md#authServiceVerifyMyEmail) | **POST** /users/me/email/_verify | Verify My Email


## `authServiceGetMyEmail()`

```php
authServiceGetMyEmail(): \ArthurHlt\Zitadel\Model\V1GetMyEmailResponse
```

Get My Email

Returns the email address and the verified flag of the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserEmailApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyEmail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailApi->authServiceGetMyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyEmailResponse**](../Model/V1GetMyEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceResendMyEmailVerification()`

```php
authServiceResendMyEmailVerification($body): \ArthurHlt\Zitadel\Model\V1ResendMyEmailVerificationResponse
```

Resend Email Verification

A new email will be sent to the last set email address of the authenticated user, the last set email address will be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserEmailApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceResendMyEmailVerification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailApi->authServiceResendMyEmailVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResendMyEmailVerificationResponse**](../Model/V1ResendMyEmailVerificationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceSetMyEmail()`

```php
authServiceSetMyEmail($body): \ArthurHlt\Zitadel\Model\V1SetMyEmailResponse
```

Update My Email

Change the email address of the authenticated user. A verification email will be sent to the given email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserEmailApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1SetMyEmailRequest(); // \ArthurHlt\Zitadel\Model\V1SetMyEmailRequest

try {
    $result = $apiInstance->authServiceSetMyEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailApi->authServiceSetMyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1SetMyEmailRequest**](../Model/V1SetMyEmailRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetMyEmailResponse**](../Model/V1SetMyEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceVerifyMyEmail()`

```php
authServiceVerifyMyEmail($body): \ArthurHlt\Zitadel\Model\V1VerifyMyEmailResponse
```

Verify My Email

Verify the email address of the authenticated user with the code that has been sent. State of the email address is verified after.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserEmailApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1VerifyMyEmailRequest(); // \ArthurHlt\Zitadel\Model\V1VerifyMyEmailRequest

try {
    $result = $apiInstance->authServiceVerifyMyEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEmailApi->authServiceVerifyMyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1VerifyMyEmailRequest**](../Model/V1VerifyMyEmailRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1VerifyMyEmailResponse**](../Model/V1VerifyMyEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
