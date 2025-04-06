# ArthurHlt\Zitadel\UserAuthenticationFactorApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceAddMyAuthFactorOTP()**](UserAuthenticationFactorApi.md#authServiceAddMyAuthFactorOTP) | **POST** /users/me/auth_factors/otp | Add One-Time Password (OTP)
[**authServiceAddMyAuthFactorOTPEmail()**](UserAuthenticationFactorApi.md#authServiceAddMyAuthFactorOTPEmail) | **POST** /users/me/auth_factors/otp_email | Add One-Time Password (OTP) Email
[**authServiceAddMyAuthFactorOTPSMS()**](UserAuthenticationFactorApi.md#authServiceAddMyAuthFactorOTPSMS) | **POST** /users/me/auth_factors/otp_sms | Add One-Time Password (OTP) SMS
[**authServiceAddMyAuthFactorU2F()**](UserAuthenticationFactorApi.md#authServiceAddMyAuthFactorU2F) | **POST** /users/me/auth_factors/u2f | Add Universal Second Factor (U2F)
[**authServiceAddMyPasswordless()**](UserAuthenticationFactorApi.md#authServiceAddMyPasswordless) | **POST** /users/me/passwordless | Add passkey
[**authServiceAddMyPasswordlessLink()**](UserAuthenticationFactorApi.md#authServiceAddMyPasswordlessLink) | **POST** /users/me/passwordless/_link | Add passkey link
[**authServiceListMyAuthFactors()**](UserAuthenticationFactorApi.md#authServiceListMyAuthFactors) | **POST** /users/me/auth_factors/_search | List Authentication Factors
[**authServiceListMyPasswordless()**](UserAuthenticationFactorApi.md#authServiceListMyPasswordless) | **POST** /users/me/passwordless/_search | List Passkey
[**authServiceRemoveMyAuthFactorOTP()**](UserAuthenticationFactorApi.md#authServiceRemoveMyAuthFactorOTP) | **DELETE** /users/me/auth_factors/otp | Remove One-Time Password (OTP)
[**authServiceRemoveMyAuthFactorOTPEmail()**](UserAuthenticationFactorApi.md#authServiceRemoveMyAuthFactorOTPEmail) | **DELETE** /users/me/auth_factors/otp_email | Remove One-Time Password (OTP) Email
[**authServiceRemoveMyAuthFactorOTPSMS()**](UserAuthenticationFactorApi.md#authServiceRemoveMyAuthFactorOTPSMS) | **DELETE** /users/me/auth_factors/otp_sms | Remove One-Time Password (OTP) SMS
[**authServiceRemoveMyAuthFactorU2F()**](UserAuthenticationFactorApi.md#authServiceRemoveMyAuthFactorU2F) | **DELETE** /users/me/auth_factors/u2f/{tokenId} | Remove Universal Second Factor (U2F)
[**authServiceRemoveMyPasswordless()**](UserAuthenticationFactorApi.md#authServiceRemoveMyPasswordless) | **DELETE** /users/me/passwordless/{tokenId} | Remove passkey
[**authServiceSendMyPasswordlessLink()**](UserAuthenticationFactorApi.md#authServiceSendMyPasswordlessLink) | **POST** /users/me/passwordless/_send_link | Send passkey link
[**authServiceVerifyMyAuthFactorOTP()**](UserAuthenticationFactorApi.md#authServiceVerifyMyAuthFactorOTP) | **POST** /users/me/auth_factors/otp/_verify | Verify One-Time Password (OTP)
[**authServiceVerifyMyAuthFactorU2F()**](UserAuthenticationFactorApi.md#authServiceVerifyMyAuthFactorU2F) | **POST** /users/me/auth_factors/u2f/_verify | Add Universal Second Factor (U2F)
[**authServiceVerifyMyPasswordless()**](UserAuthenticationFactorApi.md#authServiceVerifyMyPasswordless) | **POST** /users/me/passwordless/_verify | Verify passkey


## `authServiceAddMyAuthFactorOTP()`

```php
authServiceAddMyAuthFactorOTP($body): \ArthurHlt\Zitadel\Model\V1AddMyAuthFactorOTPResponse
```

Add One-Time Password (OTP)

Add a new One-Time Password (OTP) factor to the authenticated user. OTP is an authenticator app like Google/Microsoft Authenticator, Authy, etc. Only one OTP per user is allowed. After adding a new OTP it has to be verified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceAddMyAuthFactorOTP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceAddMyAuthFactorOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMyAuthFactorOTPResponse**](../Model/V1AddMyAuthFactorOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceAddMyAuthFactorOTPEmail()`

```php
authServiceAddMyAuthFactorOTPEmail($body): \ArthurHlt\Zitadel\Model\V1AddMyAuthFactorOTPEmailResponse
```

Add One-Time Password (OTP) Email

Add a new One-Time Password (OTP) Email factor to the authenticated user. OTP Email will enable the user to verify a OTP with the latest verified email. The email has to be verified to add the second factor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceAddMyAuthFactorOTPEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceAddMyAuthFactorOTPEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMyAuthFactorOTPEmailResponse**](../Model/V1AddMyAuthFactorOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceAddMyAuthFactorOTPSMS()`

```php
authServiceAddMyAuthFactorOTPSMS($body): \ArthurHlt\Zitadel\Model\V1AddMyAuthFactorOTPSMSResponse
```

Add One-Time Password (OTP) SMS

Add a new One-Time Password (OTP) SMS factor to the authenticated user. OTP SMS will enable the user to verify a OTP with the latest verified phone number. The phone number has to be verified to add the second factor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceAddMyAuthFactorOTPSMS($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceAddMyAuthFactorOTPSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMyAuthFactorOTPSMSResponse**](../Model/V1AddMyAuthFactorOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceAddMyAuthFactorU2F()`

```php
authServiceAddMyAuthFactorU2F($body): \ArthurHlt\Zitadel\Model\V1AddMyAuthFactorU2FResponse
```

Add Universal Second Factor (U2F)

Add a new Universal Second Factor (U2F) to the authenticated user. U2F is a device-dependent authentication like FingerScan, FaceID, WindowHello, etc. The factor has to be verified after adding. Multiple factors can be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceAddMyAuthFactorU2F($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceAddMyAuthFactorU2F: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMyAuthFactorU2FResponse**](../Model/V1AddMyAuthFactorU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceAddMyPasswordless()`

```php
authServiceAddMyPasswordless($body): \ArthurHlt\Zitadel\Model\V1AddMyPasswordlessResponse
```

Add passkey

Add a new passkey authentication method to the authenticated user. Like FingerPrint, FaceID, WindowsHello, HardwareToken, etc. Multiple passkeys can be configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceAddMyPasswordless($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceAddMyPasswordless: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMyPasswordlessResponse**](../Model/V1AddMyPasswordlessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceAddMyPasswordlessLink()`

```php
authServiceAddMyPasswordlessLink($body): \ArthurHlt\Zitadel\Model\V1AddMyPasswordlessLinkResponse
```

Add passkey link

Adds a new passkey authenticator link to the authenticated user and returns it in the response. This link enables the user to register a new device if current passkey devices are all platform authenticators. e.g. User has already registered Windows Hello and wants to register FaceID on the iPhone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceAddMyPasswordlessLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceAddMyPasswordlessLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMyPasswordlessLinkResponse**](../Model/V1AddMyPasswordlessLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyAuthFactors()`

```php
authServiceListMyAuthFactors(): \ArthurHlt\Zitadel\Model\V1ListMyAuthFactorsResponse
```

List Authentication Factors

Returns a list of possible authentication factors, multi-factor (MFA), second factor (2FA)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceListMyAuthFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceListMyAuthFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyAuthFactorsResponse**](../Model/V1ListMyAuthFactorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyPasswordless()`

```php
authServiceListMyPasswordless(): \ArthurHlt\Zitadel\Model\V1ListMyPasswordlessResponse
```

List Passkey

Get the list of configured passkey authentication methods. Like FingerPrint, FaceID, WindowsHello, HardwareToken, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceListMyPasswordless();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceListMyPasswordless: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyPasswordlessResponse**](../Model/V1ListMyPasswordlessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyAuthFactorOTP()`

```php
authServiceRemoveMyAuthFactorOTP(): \ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorOTPResponse
```

Remove One-Time Password (OTP)

Remove the configured One-Time Password (OTP) factor of the authenticated user. OTP is an authenticator app like Google/Microsoft Authenticator, Authy, etc. As only one OTP per user is allowed, the user will not have OTP as a second factor afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRemoveMyAuthFactorOTP();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceRemoveMyAuthFactorOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorOTPResponse**](../Model/V1RemoveMyAuthFactorOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyAuthFactorOTPEmail()`

```php
authServiceRemoveMyAuthFactorOTPEmail(): \ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorOTPEmailResponse
```

Remove One-Time Password (OTP) Email

Remove the configured One-Time Password (OTP) Email factor of the authenticated user. As only one OTP Email per user is allowed, the user will not have OTP Email as a second factor afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRemoveMyAuthFactorOTPEmail();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceRemoveMyAuthFactorOTPEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorOTPEmailResponse**](../Model/V1RemoveMyAuthFactorOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyAuthFactorOTPSMS()`

```php
authServiceRemoveMyAuthFactorOTPSMS(): \ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorOTPSMSResponse
```

Remove One-Time Password (OTP) SMS

Remove the configured One-Time Password (OTP) SMS factor of the authenticated user. As only one OTP SMS per user is allowed, the user will not have OTP SMS as a second factor afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRemoveMyAuthFactorOTPSMS();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceRemoveMyAuthFactorOTPSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorOTPSMSResponse**](../Model/V1RemoveMyAuthFactorOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyAuthFactorU2F()`

```php
authServiceRemoveMyAuthFactorU2F($tokenId): \ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorU2FResponse
```

Remove Universal Second Factor (U2F)

Remove a specific Universal Second Factor (U2F) from the authenticated user by sending the id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tokenId = 'tokenId_example'; // string

try {
    $result = $apiInstance->authServiceRemoveMyAuthFactorU2F($tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceRemoveMyAuthFactorU2F: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyAuthFactorU2FResponse**](../Model/V1RemoveMyAuthFactorU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyPasswordless()`

```php
authServiceRemoveMyPasswordless($tokenId): \ArthurHlt\Zitadel\Model\V1RemoveMyPasswordlessResponse
```

Remove passkey

Remove a passkey configuration from the authenticated user. The user will not be able to log in with that configuration afterward. Make sure the user has other possibilities to log in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$tokenId = 'tokenId_example'; // string

try {
    $result = $apiInstance->authServiceRemoveMyPasswordless($tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceRemoveMyPasswordless: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyPasswordlessResponse**](../Model/V1RemoveMyPasswordlessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceSendMyPasswordlessLink()`

```php
authServiceSendMyPasswordlessLink($body): \ArthurHlt\Zitadel\Model\V1SendMyPasswordlessLinkResponse
```

Send passkey link

Adds a new passkey authenticator link to the authenticated user and sends it to the registered email address. This link enables the user to register a new device if current passkey devices are all platform authenticators. e.g. User has already registered Windows Hello and wants to register FaceID on the iPhone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceSendMyPasswordlessLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceSendMyPasswordlessLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SendMyPasswordlessLinkResponse**](../Model/V1SendMyPasswordlessLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceVerifyMyAuthFactorOTP()`

```php
authServiceVerifyMyAuthFactorOTP($body): \ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorOTPResponse
```

Verify One-Time Password (OTP)

Verify the last added One-Time Password (OTP) factor of the authenticated user. OTP is an authenticator app like Google/Microsoft Authenticator, Authy, etc. Only one OTP per user is allowed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorOTPRequest(); // \ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorOTPRequest

try {
    $result = $apiInstance->authServiceVerifyMyAuthFactorOTP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceVerifyMyAuthFactorOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorOTPRequest**](../Model/V1VerifyMyAuthFactorOTPRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorOTPResponse**](../Model/V1VerifyMyAuthFactorOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceVerifyMyAuthFactorU2F()`

```php
authServiceVerifyMyAuthFactorU2F($body): \ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorU2FResponse
```

Add Universal Second Factor (U2F)

Verify the last added new Universal Second Factor (U2F) to the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorU2FRequest(); // \ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorU2FRequest

try {
    $result = $apiInstance->authServiceVerifyMyAuthFactorU2F($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceVerifyMyAuthFactorU2F: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorU2FRequest**](../Model/V1VerifyMyAuthFactorU2FRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1VerifyMyAuthFactorU2FResponse**](../Model/V1VerifyMyAuthFactorU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceVerifyMyPasswordless()`

```php
authServiceVerifyMyPasswordless($body): \ArthurHlt\Zitadel\Model\V1VerifyMyPasswordlessResponse
```

Verify passkey

Verifies the last added passkey configuration of the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthenticationFactorApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1VerifyMyPasswordlessRequest(); // \ArthurHlt\Zitadel\Model\V1VerifyMyPasswordlessRequest

try {
    $result = $apiInstance->authServiceVerifyMyPasswordless($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthenticationFactorApi->authServiceVerifyMyPasswordless: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1VerifyMyPasswordlessRequest**](../Model/V1VerifyMyPasswordlessRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1VerifyMyPasswordlessResponse**](../Model/V1VerifyMyPasswordlessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
