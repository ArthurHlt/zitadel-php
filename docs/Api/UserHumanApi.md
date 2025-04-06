# ArthurHlt\Zitadel\UserHumanApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceAddPasswordlessRegistration()**](UserHumanApi.md#managementServiceAddPasswordlessRegistration) | **POST** /users/{userId}/passwordless/_link | Add Passwordless/Passkey Registration Link
[**managementServiceGetHumanEmail()**](UserHumanApi.md#managementServiceGetHumanEmail) | **GET** /users/{userId}/email | Get User Email (Human)
[**managementServiceGetHumanPhone()**](UserHumanApi.md#managementServiceGetHumanPhone) | **GET** /users/{userId}/phone | Get User Phone (Human)
[**managementServiceGetHumanProfile()**](UserHumanApi.md#managementServiceGetHumanProfile) | **GET** /users/{userId}/profile | Get User Profile (Human)
[**managementServiceImportHumanUser()**](UserHumanApi.md#managementServiceImportHumanUser) | **POST** /users/human/_import | Create/Import User (Human)
[**managementServiceListHumanAuthFactors()**](UserHumanApi.md#managementServiceListHumanAuthFactors) | **POST** /users/{userId}/auth_factors/_search | Get User Authentication Factors (2FA/MFA)
[**managementServiceListHumanPasswordless()**](UserHumanApi.md#managementServiceListHumanPasswordless) | **POST** /users/{userId}/passwordless/_search | Search Passwordless/Passkey authentication
[**managementServiceRemoveHumanAuthFactorOTP()**](UserHumanApi.md#managementServiceRemoveHumanAuthFactorOTP) | **DELETE** /users/{userId}/auth_factors/otp | Remove Multi-Factor OTP
[**managementServiceRemoveHumanAuthFactorOTPEmail()**](UserHumanApi.md#managementServiceRemoveHumanAuthFactorOTPEmail) | **DELETE** /users/{userId}/auth_factors/otp_email | Remove Multi-Factor OTP SMS
[**managementServiceRemoveHumanAuthFactorOTPSMS()**](UserHumanApi.md#managementServiceRemoveHumanAuthFactorOTPSMS) | **DELETE** /users/{userId}/auth_factors/otp_sms | Remove Multi-Factor OTP SMS
[**managementServiceRemoveHumanAuthFactorU2F()**](UserHumanApi.md#managementServiceRemoveHumanAuthFactorU2F) | **DELETE** /users/{userId}/auth_factors/u2f/{tokenId} | Remove Multi-Factor U2F
[**managementServiceRemoveHumanAvatar()**](UserHumanApi.md#managementServiceRemoveHumanAvatar) | **DELETE** /users/{userId}/avatar | Delete User Avatar (Human)
[**managementServiceRemoveHumanPasswordless()**](UserHumanApi.md#managementServiceRemoveHumanPasswordless) | **DELETE** /users/{userId}/passwordless/{tokenId} | Delete Passwordless/Passkey
[**managementServiceRemoveHumanPhone()**](UserHumanApi.md#managementServiceRemoveHumanPhone) | **DELETE** /users/{userId}/phone | Remove User Phone (Human)
[**managementServiceResendHumanEmailVerification()**](UserHumanApi.md#managementServiceResendHumanEmailVerification) | **POST** /users/{userId}/email/_resend_verification | Resend User Email Verification
[**managementServiceResendHumanInitialization()**](UserHumanApi.md#managementServiceResendHumanInitialization) | **POST** /users/{userId}/_resend_initialization | Resend User Initialization Email
[**managementServiceResendHumanPhoneVerification()**](UserHumanApi.md#managementServiceResendHumanPhoneVerification) | **POST** /users/{userId}/phone/_resend_verification | Resend User Phone Verification
[**managementServiceSendHumanResetPasswordNotification()**](UserHumanApi.md#managementServiceSendHumanResetPasswordNotification) | **POST** /users/{userId}/password/_reset | Send Reset Password Notification
[**managementServiceSendPasswordlessRegistration()**](UserHumanApi.md#managementServiceSendPasswordlessRegistration) | **POST** /users/{userId}/passwordless/_send_link | Send Passwordless/Passkey Registration Link
[**managementServiceSetHumanInitialPassword()**](UserHumanApi.md#managementServiceSetHumanInitialPassword) | **POST** /users/{userId}/password/_initialize | Set Human Initial Password  Deprecated: please use user service v2 SetPassword
[**managementServiceSetHumanPassword()**](UserHumanApi.md#managementServiceSetHumanPassword) | **POST** /users/{userId}/password | Set User Password
[**managementServiceUpdateHumanEmail()**](UserHumanApi.md#managementServiceUpdateHumanEmail) | **PUT** /users/{userId}/email | Update User Email (Human)
[**managementServiceUpdateHumanPhone()**](UserHumanApi.md#managementServiceUpdateHumanPhone) | **PUT** /users/{userId}/phone | Update User Phone (Human)
[**managementServiceUpdateHumanProfile()**](UserHumanApi.md#managementServiceUpdateHumanProfile) | **PUT** /users/{userId}/profile | Update User Profile (Human)


## `managementServiceAddPasswordlessRegistration()`

```php
managementServiceAddPasswordlessRegistration($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddPasswordlessRegistrationResponse
```

Add Passwordless/Passkey Registration Link

Adds a new passwordless/passkey authenticator link to the user and returns it in the response. The link enables the user to register a new device if current passwordless/passkey devices are all platform authenticators. e.g. User has already registered Windows Hello and wants to register FaceID on the iPhone  Deprecated: please use user service v2 RegisterPasskey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceAddPasswordlessRegistration($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceAddPasswordlessRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddPasswordlessRegistrationResponse**](../Model/V1AddPasswordlessRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetHumanEmail()`

```php
managementServiceGetHumanEmail($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetHumanEmailResponse
```

Get User Email (Human)

Get the email address and the verification state of the address.  Deprecated: please use user service v2 GetUserByID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceGetHumanEmail($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceGetHumanEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetHumanEmailResponse**](../Model/V1GetHumanEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetHumanPhone()`

```php
managementServiceGetHumanPhone($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetHumanPhoneResponse
```

Get User Phone (Human)

Get the phone number and the verification state of the number. The phone number is only for informational purposes and to send messages, not for Authentication (2FA).  Deprecated: please use user service v2 GetUserByID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceGetHumanPhone($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceGetHumanPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetHumanPhoneResponse**](../Model/V1GetHumanPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetHumanProfile()`

```php
managementServiceGetHumanProfile($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetHumanProfileResponse
```

Get User Profile (Human)

Get basic information like first_name and last_name of a user.  Deprecated: please use user service v2 GetUserByID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceGetHumanProfile($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceGetHumanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetHumanProfileResponse**](../Model/V1GetHumanProfileResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceImportHumanUser()`

```php
managementServiceImportHumanUser($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ImportHumanUserResponse
```

Create/Import User (Human)

Create/import a new user with the type human. The newly created user will get an initialization email if either the email address is not marked as verified or no password is set. If a password is set the user will not be requested to set a new one on the first login.  Deprecated: please use user service v2 [AddHumanUser](apis/resources/user_service_v2/user-service-add-human-user.api.mdx)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ImportHumanUserRequest(); // \ArthurHlt\Zitadel\Model\V1ImportHumanUserRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to add users to another organization include the header. Make sure the user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceImportHumanUser($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceImportHumanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ImportHumanUserRequest**](../Model/V1ImportHumanUserRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to add users to another organization include the header. Make sure the user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ImportHumanUserResponse**](../Model/V1ImportHumanUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListHumanAuthFactors()`

```php
managementServiceListHumanAuthFactors($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListHumanAuthFactorsResponse
```

Get User Authentication Factors (2FA/MFA)

Get a list of authentication factors the user has set. Including Second Factors (2FA) and Multi-Factors (MFA).  Deprecated: please use user service v2 ListAuthenticationMethodTypes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceListHumanAuthFactors($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceListHumanAuthFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListHumanAuthFactorsResponse**](../Model/V1ListHumanAuthFactorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListHumanPasswordless()`

```php
managementServiceListHumanPasswordless($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListHumanPasswordlessResponse
```

Search Passwordless/Passkey authentication

Get a list of configured passwordless/passkey authentication methods from the user. Passwordless/passkey is a device-dependent authentication like FingerScan, WindowsHello or a Hardware Token.  Deprecated: please use user service v2 ListPasskeys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceListHumanPasswordless($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceListHumanPasswordless: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListHumanPasswordlessResponse**](../Model/V1ListHumanPasswordlessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanAuthFactorOTP()`

```php
managementServiceRemoveHumanAuthFactorOTP($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorOTPResponse
```

Remove Multi-Factor OTP

Remove the configured One-Time Password (OTP) as a factor from the user. OTP is an authentication app, like Authy or Google/Microsoft Authenticator.  Deprecated: please use user service v2 RemoveTOTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanAuthFactorOTP($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanAuthFactorOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorOTPResponse**](../Model/V1RemoveHumanAuthFactorOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanAuthFactorOTPEmail()`

```php
managementServiceRemoveHumanAuthFactorOTPEmail($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorOTPEmailResponse
```

Remove Multi-Factor OTP SMS

Remove the configured One-Time Password (OTP) Email as a factor from the user. As only one OTP Email per user is allowed, the user will not have OTP Email as a second factor afterward.  Deprecated: please use user service v2 RemoveOTPEmail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanAuthFactorOTPEmail($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanAuthFactorOTPEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorOTPEmailResponse**](../Model/V1RemoveHumanAuthFactorOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanAuthFactorOTPSMS()`

```php
managementServiceRemoveHumanAuthFactorOTPSMS($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorOTPSMSResponse
```

Remove Multi-Factor OTP SMS

Remove the configured One-Time Password (OTP) SMS as a factor from the user. As only one OTP SMS per user is allowed, the user will not have OTP SMS as a second factor afterward.  Deprecated: please use user service v2 RemoveOTPSMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanAuthFactorOTPSMS($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanAuthFactorOTPSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorOTPSMSResponse**](../Model/V1RemoveHumanAuthFactorOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanAuthFactorU2F()`

```php
managementServiceRemoveHumanAuthFactorU2F($userId, $tokenId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorU2FResponse
```

Remove Multi-Factor U2F

Remove the configured Universal Second Factor (U2F) as a factor from the user. U2F is a device-dependent factor like FingerPrint, Windows-Hello, etc.  Deprecated: please use user service v2 RemoveU2F

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$tokenId = 'tokenId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanAuthFactorU2F($userId, $tokenId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanAuthFactorU2F: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **tokenId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanAuthFactorU2FResponse**](../Model/V1RemoveHumanAuthFactorU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanAvatar()`

```php
managementServiceRemoveHumanAvatar($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanAvatarResponse
```

Delete User Avatar (Human)

Removes the avatar that is currently set on the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanAvatar($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanAvatarResponse**](../Model/V1RemoveHumanAvatarResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanPasswordless()`

```php
managementServiceRemoveHumanPasswordless($userId, $tokenId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanPasswordlessResponse
```

Delete Passwordless/Passkey

Remove a configured passwordless/passkey authentication method from the user. (e.g FaceID, FingerScane, WindowsHello, etc.).  Deprecated: please use user service v2 RemovePasskey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$tokenId = 'tokenId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanPasswordless($userId, $tokenId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanPasswordless: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **tokenId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanPasswordlessResponse**](../Model/V1RemoveHumanPasswordlessResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanPhone()`

```php
managementServiceRemoveHumanPhone($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanPhoneResponse
```

Remove User Phone (Human)

Remove the configured phone number of a user.  Deprecated: please use user service v2 SetPhone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveHumanPhone($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceRemoveHumanPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanPhoneResponse**](../Model/V1RemoveHumanPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResendHumanEmailVerification()`

```php
managementServiceResendHumanEmailVerification($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResendHumanEmailVerificationResponse
```

Resend User Email Verification

Resend the email verification notification to the given email address of the user.  Deprecated: please use user service v2 ResendEmailCode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceResendHumanEmailVerification($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceResendHumanEmailVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResendHumanEmailVerificationResponse**](../Model/V1ResendHumanEmailVerificationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResendHumanInitialization()`

```php
managementServiceResendHumanInitialization($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResendHumanInitializationResponse
```

Resend User Initialization Email

A newly created user will get an initialization email to verify the email address and set a password. Resend the email with this request to the user's email address, or a newly added address.  Deprecated: not used anymore in user state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceResendHumanInitializationBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceResendHumanInitializationBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceResendHumanInitialization($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceResendHumanInitialization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceResendHumanInitializationBody**](../Model/ManagementServiceResendHumanInitializationBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResendHumanInitializationResponse**](../Model/V1ResendHumanInitializationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResendHumanPhoneVerification()`

```php
managementServiceResendHumanPhoneVerification($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResendHumanPhoneVerificationResponse
```

Resend User Phone Verification

Resend the notification for the verification of the phone number, to the number stored on the user.  Deprecated: please use user service v2 ResendPhoneCode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceResendHumanPhoneVerification($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceResendHumanPhoneVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResendHumanPhoneVerificationResponse**](../Model/V1ResendHumanPhoneVerificationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSendHumanResetPasswordNotification()`

```php
managementServiceSendHumanResetPasswordNotification($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SendHumanResetPasswordNotificationResponse
```

Send Reset Password Notification

The user will receive an email with a link to change the password.  Deprecated: please use user service v2 PasswordReset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceSendHumanResetPasswordNotificationBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceSendHumanResetPasswordNotificationBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceSendHumanResetPasswordNotification($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceSendHumanResetPasswordNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceSendHumanResetPasswordNotificationBody**](../Model/ManagementServiceSendHumanResetPasswordNotificationBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SendHumanResetPasswordNotificationResponse**](../Model/V1SendHumanResetPasswordNotificationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSendPasswordlessRegistration()`

```php
managementServiceSendPasswordlessRegistration($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SendPasswordlessRegistrationResponse
```

Send Passwordless/Passkey Registration Link

Adds a new passwordless/passkey authenticator link to the user and sends it to the user per email. The link enables the user to register a new device if current passwordless/passkey devices are all platform authenticators. e.g. User has already registered Windows Hello and wants to register FaceID on the iPhone.  Deprecated: please use user service v2 RegisterPasskey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceSendPasswordlessRegistration($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceSendPasswordlessRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SendPasswordlessRegistrationResponse**](../Model/V1SendPasswordlessRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSetHumanInitialPassword()`

```php
managementServiceSetHumanInitialPassword($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SetHumanInitialPasswordResponse
```

Set Human Initial Password  Deprecated: please use user service v2 SetPassword

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceSetHumanInitialPasswordBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceSetHumanInitialPasswordBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceSetHumanInitialPassword($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceSetHumanInitialPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceSetHumanInitialPasswordBody**](../Model/ManagementServiceSetHumanInitialPasswordBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetHumanInitialPasswordResponse**](../Model/V1SetHumanInitialPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSetHumanPassword()`

```php
managementServiceSetHumanPassword($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SetHumanPasswordResponse
```

Set User Password

Set a new password for a user. Per default, the user has to change the password on the next login. You can set no_change_required to true, to avoid the change on the next login.  Deprecated: please use user service v2 SetPassword

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceSetHumanPasswordBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceSetHumanPasswordBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceSetHumanPassword($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceSetHumanPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceSetHumanPasswordBody**](../Model/ManagementServiceSetHumanPasswordBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetHumanPasswordResponse**](../Model/V1SetHumanPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateHumanEmail()`

```php
managementServiceUpdateHumanEmail($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateHumanEmailResponse
```

Update User Email (Human)

Change the email address of a user. If the state is set to not verified, the user will get a verification email.  Deprecated: please use user service v2 SetEmail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanEmailBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanEmailBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceUpdateHumanEmail($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceUpdateHumanEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanEmailBody**](../Model/ManagementServiceUpdateHumanEmailBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateHumanEmailResponse**](../Model/V1UpdateHumanEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateHumanPhone()`

```php
managementServiceUpdateHumanPhone($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateHumanPhoneResponse
```

Update User Phone (Human)

Change the phone number of a user. If the state is set to not verified, the user will get an SMS to verify (if a notification provider is configured). The phone number is only for informational purposes and to send messages, not for Authentication (2FA).  Deprecated: please use user service v2 SetPhone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanPhoneBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanPhoneBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceUpdateHumanPhone($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceUpdateHumanPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanPhoneBody**](../Model/ManagementServiceUpdateHumanPhoneBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateHumanPhoneResponse**](../Model/V1UpdateHumanPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateHumanProfile()`

```php
managementServiceUpdateHumanProfile($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateHumanProfileResponse
```

Update User Profile (Human)

Update the profile information from a user. The profile includes basic information like first_name and last_name.  Deprecated: please use user service v2 UpdateHumanUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserHumanApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanProfileBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanProfileBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceUpdateHumanProfile($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserHumanApi->managementServiceUpdateHumanProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateHumanProfileBody**](../Model/ManagementServiceUpdateHumanProfileBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateHumanProfileResponse**](../Model/V1UpdateHumanProfileResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
