# ArthurHlt\Zitadel\UserServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userServiceAddHumanUser()**](UserServiceApi.md#userServiceAddHumanUser) | **POST** /v2/users/human | Create a new human user
[**userServiceAddHumanUser_0()**](UserServiceApi.md#userServiceAddHumanUser_0) | **POST** /v2beta/users/human | Create a new human user
[**userServiceAddIDPLink()**](UserServiceApi.md#userServiceAddIDPLink) | **POST** /v2/users/{userId}/links | Add link to an identity provider to an user
[**userServiceAddIDPLink_0()**](UserServiceApi.md#userServiceAddIDPLink_0) | **POST** /v2beta/users/{userId}/links | Add link to an identity provider to an user
[**userServiceAddOTPEmail()**](UserServiceApi.md#userServiceAddOTPEmail) | **POST** /v2/users/{userId}/otp_email | Add OTP Email for a user
[**userServiceAddOTPEmail_0()**](UserServiceApi.md#userServiceAddOTPEmail_0) | **POST** /v2beta/users/{userId}/otp_email | Add OTP Email for a user
[**userServiceAddOTPSMS()**](UserServiceApi.md#userServiceAddOTPSMS) | **POST** /v2/users/{userId}/otp_sms | Add OTP SMS for a user
[**userServiceAddOTPSMS_0()**](UserServiceApi.md#userServiceAddOTPSMS_0) | **POST** /v2beta/users/{userId}/otp_sms | Add OTP SMS for a user
[**userServiceCreateInviteCode()**](UserServiceApi.md#userServiceCreateInviteCode) | **POST** /v2/users/{userId}/invite_code | Create an invite code for a user
[**userServiceCreatePasskeyRegistrationLink()**](UserServiceApi.md#userServiceCreatePasskeyRegistrationLink) | **POST** /v2/users/{userId}/passkeys/registration_link | Create a passkey registration link for a user
[**userServiceCreatePasskeyRegistrationLink_0()**](UserServiceApi.md#userServiceCreatePasskeyRegistrationLink_0) | **POST** /v2beta/users/{userId}/passkeys/registration_link | Create a passkey registration link for a user
[**userServiceDeactivateUser()**](UserServiceApi.md#userServiceDeactivateUser) | **POST** /v2/users/{userId}/deactivate | Deactivate user
[**userServiceDeactivateUser_0()**](UserServiceApi.md#userServiceDeactivateUser_0) | **POST** /v2beta/users/{userId}/deactivate | Deactivate user
[**userServiceDeleteUser()**](UserServiceApi.md#userServiceDeleteUser) | **DELETE** /v2/users/{userId} | Delete user
[**userServiceDeleteUser_0()**](UserServiceApi.md#userServiceDeleteUser_0) | **DELETE** /v2beta/users/{userId} | Delete user
[**userServiceGetUserByID()**](UserServiceApi.md#userServiceGetUserByID) | **GET** /v2/users/{userId} | User by ID
[**userServiceGetUserByID_0()**](UserServiceApi.md#userServiceGetUserByID_0) | **GET** /v2beta/users/{userId} | User by ID
[**userServiceHumanMFAInitSkipped()**](UserServiceApi.md#userServiceHumanMFAInitSkipped) | **POST** /v2/users/{userId}/mfa_init_skipped | MFA Init Skipped
[**userServiceListAuthenticationFactors()**](UserServiceApi.md#userServiceListAuthenticationFactors) | **POST** /v2/users/{userId}/authentication_factors/_search | 
[**userServiceListAuthenticationMethodTypes()**](UserServiceApi.md#userServiceListAuthenticationMethodTypes) | **GET** /v2/users/{userId}/authentication_methods | List all possible authentication methods of a user
[**userServiceListAuthenticationMethodTypes_0()**](UserServiceApi.md#userServiceListAuthenticationMethodTypes_0) | **GET** /v2beta/users/{userId}/authentication_methods | List all possible authentication methods of a user
[**userServiceListIDPLinks()**](UserServiceApi.md#userServiceListIDPLinks) | **POST** /v2/users/{userId}/links/_search | List links to an identity provider of an user
[**userServiceListPasskeys()**](UserServiceApi.md#userServiceListPasskeys) | **POST** /v2/users/{userId}/passkeys/_search | List passkeys of an user
[**userServiceListUsers()**](UserServiceApi.md#userServiceListUsers) | **POST** /v2/users | Search Users
[**userServiceListUsers_0()**](UserServiceApi.md#userServiceListUsers_0) | **POST** /v2beta/users | Search Users
[**userServiceLockUser()**](UserServiceApi.md#userServiceLockUser) | **POST** /v2/users/{userId}/lock | Lock user
[**userServiceLockUser_0()**](UserServiceApi.md#userServiceLockUser_0) | **POST** /v2beta/users/{userId}/lock | Lock user
[**userServicePasswordReset()**](UserServiceApi.md#userServicePasswordReset) | **POST** /v2/users/{userId}/password_reset | Request a code to reset a password
[**userServicePasswordReset_0()**](UserServiceApi.md#userServicePasswordReset_0) | **POST** /v2beta/users/{userId}/password_reset | Request a code to reset a password
[**userServiceReactivateUser()**](UserServiceApi.md#userServiceReactivateUser) | **POST** /v2/users/{userId}/reactivate | Reactivate user
[**userServiceReactivateUser_0()**](UserServiceApi.md#userServiceReactivateUser_0) | **POST** /v2beta/users/{userId}/reactivate | Reactivate user
[**userServiceRegisterPasskey()**](UserServiceApi.md#userServiceRegisterPasskey) | **POST** /v2/users/{userId}/passkeys | Start the registration of passkey for a user
[**userServiceRegisterPasskey_0()**](UserServiceApi.md#userServiceRegisterPasskey_0) | **POST** /v2beta/users/{userId}/passkeys | Start the registration of passkey for a user
[**userServiceRegisterTOTP()**](UserServiceApi.md#userServiceRegisterTOTP) | **POST** /v2/users/{userId}/totp | Start the registration of a TOTP generator for a user
[**userServiceRegisterTOTP_0()**](UserServiceApi.md#userServiceRegisterTOTP_0) | **POST** /v2beta/users/{userId}/totp | Start the registration of a TOTP generator for a user
[**userServiceRegisterU2F()**](UserServiceApi.md#userServiceRegisterU2F) | **POST** /v2/users/{userId}/u2f | Start the registration of a u2f token for a user
[**userServiceRegisterU2F_0()**](UserServiceApi.md#userServiceRegisterU2F_0) | **POST** /v2beta/users/{userId}/u2f | Start the registration of a u2f token for a user
[**userServiceRemoveIDPLink()**](UserServiceApi.md#userServiceRemoveIDPLink) | **DELETE** /v2/users/{userId}/links/{idpId}/{linkedUserId} | Remove link of an identity provider to an user
[**userServiceRemoveOTPEmail()**](UserServiceApi.md#userServiceRemoveOTPEmail) | **DELETE** /v2/users/{userId}/otp_email | Remove One-Time Password (OTP) Email from a user
[**userServiceRemoveOTPEmail_0()**](UserServiceApi.md#userServiceRemoveOTPEmail_0) | **DELETE** /v2beta/users/{userId}/otp_email | Remove One-Time Password (OTP) Email from a user
[**userServiceRemoveOTPSMS()**](UserServiceApi.md#userServiceRemoveOTPSMS) | **DELETE** /v2/users/{userId}/otp_sms | Remove One-Time Password (OTP) SMS from a user
[**userServiceRemoveOTPSMS_0()**](UserServiceApi.md#userServiceRemoveOTPSMS_0) | **DELETE** /v2beta/users/{userId}/otp_sms | Remove One-Time Password (OTP) SMS from a user
[**userServiceRemovePasskey()**](UserServiceApi.md#userServiceRemovePasskey) | **DELETE** /v2/users/{userId}/passkeys/{passkeyId} | Remove passkey from a user
[**userServiceRemovePhone()**](UserServiceApi.md#userServiceRemovePhone) | **DELETE** /v2/users/{userId}/phone | Delete the user phone
[**userServiceRemovePhone_0()**](UserServiceApi.md#userServiceRemovePhone_0) | **DELETE** /v2beta/users/{userId}/phone | Delete the user phone
[**userServiceRemoveTOTP()**](UserServiceApi.md#userServiceRemoveTOTP) | **DELETE** /v2/users/{userId}/totp | Remove TOTP generator from a user
[**userServiceRemoveTOTP_0()**](UserServiceApi.md#userServiceRemoveTOTP_0) | **DELETE** /v2beta/users/{userId}/totp | Remove TOTP generator from a user
[**userServiceRemoveU2F()**](UserServiceApi.md#userServiceRemoveU2F) | **DELETE** /v2/users/{userId}/u2f/{u2fId} | Remove u2f token from a user
[**userServiceResendEmailCode()**](UserServiceApi.md#userServiceResendEmailCode) | **POST** /v2/users/{userId}/email/resend | Resend code to verify user email
[**userServiceResendEmailCode_0()**](UserServiceApi.md#userServiceResendEmailCode_0) | **POST** /v2beta/users/{userId}/email/resend | Resend code to verify user email
[**userServiceResendInviteCode()**](UserServiceApi.md#userServiceResendInviteCode) | **POST** /v2/users/{userId}/invite_code/resend | Resend an invite code for a user
[**userServiceResendPhoneCode()**](UserServiceApi.md#userServiceResendPhoneCode) | **POST** /v2/users/{userId}/phone/resend | Resend code to verify user phone
[**userServiceResendPhoneCode_0()**](UserServiceApi.md#userServiceResendPhoneCode_0) | **POST** /v2beta/users/{userId}/phone/resend | Resend code to verify user phone
[**userServiceRetrieveIdentityProviderIntent()**](UserServiceApi.md#userServiceRetrieveIdentityProviderIntent) | **POST** /v2/idp_intents/{idpIntentId} | Retrieve the information returned by the identity provider
[**userServiceRetrieveIdentityProviderIntent_0()**](UserServiceApi.md#userServiceRetrieveIdentityProviderIntent_0) | **POST** /v2beta/idp_intents/{idpIntentId} | Retrieve the information returned by the identity provider
[**userServiceSendEmailCode()**](UserServiceApi.md#userServiceSendEmailCode) | **POST** /v2/users/{userId}/email/send | Send code to verify user email
[**userServiceSetEmail()**](UserServiceApi.md#userServiceSetEmail) | **POST** /v2/users/{userId}/email | Change the user email
[**userServiceSetEmail_0()**](UserServiceApi.md#userServiceSetEmail_0) | **POST** /v2beta/users/{userId}/email | Change the user email
[**userServiceSetPassword()**](UserServiceApi.md#userServiceSetPassword) | **POST** /v2/users/{userId}/password | Change password
[**userServiceSetPassword_0()**](UserServiceApi.md#userServiceSetPassword_0) | **POST** /v2beta/users/{userId}/password | Change password
[**userServiceSetPhone()**](UserServiceApi.md#userServiceSetPhone) | **POST** /v2/users/{userId}/phone | Set the user phone
[**userServiceSetPhone_0()**](UserServiceApi.md#userServiceSetPhone_0) | **POST** /v2beta/users/{userId}/phone | Set the user phone
[**userServiceStartIdentityProviderIntent()**](UserServiceApi.md#userServiceStartIdentityProviderIntent) | **POST** /v2/idp_intents | Start flow with an identity provider
[**userServiceStartIdentityProviderIntent_0()**](UserServiceApi.md#userServiceStartIdentityProviderIntent_0) | **POST** /v2beta/idp_intents | Start flow with an identity provider
[**userServiceUnlockUser()**](UserServiceApi.md#userServiceUnlockUser) | **POST** /v2/users/{userId}/unlock | Unlock user
[**userServiceUnlockUser_0()**](UserServiceApi.md#userServiceUnlockUser_0) | **POST** /v2beta/users/{userId}/unlock | Unlock user
[**userServiceUpdateHumanUser()**](UserServiceApi.md#userServiceUpdateHumanUser) | **PUT** /v2/users/human/{userId} | Update User
[**userServiceUpdateHumanUser_0()**](UserServiceApi.md#userServiceUpdateHumanUser_0) | **PUT** /v2beta/users/{userId} | Update User
[**userServiceVerifyEmail()**](UserServiceApi.md#userServiceVerifyEmail) | **POST** /v2/users/{userId}/email/verify | Verify the email
[**userServiceVerifyEmail_0()**](UserServiceApi.md#userServiceVerifyEmail_0) | **POST** /v2beta/users/{userId}/email/verify | Verify the email
[**userServiceVerifyInviteCode()**](UserServiceApi.md#userServiceVerifyInviteCode) | **POST** /v2/users/{userId}/invite_code/verify | Verify an invite code for a user
[**userServiceVerifyPasskeyRegistration()**](UserServiceApi.md#userServiceVerifyPasskeyRegistration) | **POST** /v2/users/{userId}/passkeys/{passkeyId} | Verify a passkey for a user
[**userServiceVerifyPasskeyRegistration_0()**](UserServiceApi.md#userServiceVerifyPasskeyRegistration_0) | **POST** /v2beta/users/{userId}/passkeys/{passkeyId} | Verify a passkey for a user
[**userServiceVerifyPhone()**](UserServiceApi.md#userServiceVerifyPhone) | **POST** /v2/users/{userId}/phone/verify | Verify the phone
[**userServiceVerifyPhone_0()**](UserServiceApi.md#userServiceVerifyPhone_0) | **POST** /v2beta/users/{userId}/phone/verify | Verify the phone
[**userServiceVerifyTOTPRegistration()**](UserServiceApi.md#userServiceVerifyTOTPRegistration) | **POST** /v2/users/{userId}/totp/verify | Verify a TOTP generator for a user
[**userServiceVerifyTOTPRegistration_0()**](UserServiceApi.md#userServiceVerifyTOTPRegistration_0) | **POST** /v2beta/users/{userId}/totp/verify | Verify a TOTP generator for a user
[**userServiceVerifyU2FRegistration()**](UserServiceApi.md#userServiceVerifyU2FRegistration) | **POST** /v2/users/{userId}/u2f/{u2fId} | Verify a u2f token for a user
[**userServiceVerifyU2FRegistration_0()**](UserServiceApi.md#userServiceVerifyU2FRegistration_0) | **POST** /v2beta/users/{userId}/u2f/{u2fId} | Verify a u2f token for a user


## `userServiceAddHumanUser()`

```php
userServiceAddHumanUser($body): \ArthurHlt\Zitadel\Model\Userv2AddHumanUserResponse
```

Create a new human user

Create/import a new user with the type human. The newly created user will get a verification email if either the email address is not marked as verified and you did not request the verification to be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv2AddHumanUserRequest(); // \ArthurHlt\Zitadel\Model\Userv2AddHumanUserRequest

try {
    $result = $apiInstance->userServiceAddHumanUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddHumanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2AddHumanUserRequest**](../Model/Userv2AddHumanUserRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2AddHumanUserResponse**](../Model/Userv2AddHumanUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddHumanUser_0()`

```php
userServiceAddHumanUser_0($body): \ArthurHlt\Zitadel\Model\Userv2betaAddHumanUserResponse
```

Create a new human user

Create/import a new user with the type human. The newly created user will get a verification email if either the email address is not marked as verified and you did not request the verification to be returned.  Deprecated: please move to the corresponding endpoint under user service v2 (GA)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv2betaAddHumanUserRequest(); // \ArthurHlt\Zitadel\Model\Userv2betaAddHumanUserRequest

try {
    $result = $apiInstance->userServiceAddHumanUser_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddHumanUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaAddHumanUserRequest**](../Model/Userv2betaAddHumanUserRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaAddHumanUserResponse**](../Model/Userv2betaAddHumanUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddIDPLink()`

```php
userServiceAddIDPLink($userId, $body): \ArthurHlt\Zitadel\Model\Userv2AddIDPLinkResponse
```

Add link to an identity provider to an user

Add link to an identity provider to an user..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceAddIDPLinkBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceAddIDPLinkBody

try {
    $result = $apiInstance->userServiceAddIDPLink($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddIDPLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceAddIDPLinkBody**](../Model/Userv2UserServiceAddIDPLinkBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2AddIDPLinkResponse**](../Model/Userv2AddIDPLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddIDPLink_0()`

```php
userServiceAddIDPLink_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaAddIDPLinkResponse
```

Add link to an identity provider to an user

Add link to an identity provider to an user.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceAddIDPLinkBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceAddIDPLinkBody

try {
    $result = $apiInstance->userServiceAddIDPLink_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddIDPLink_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceAddIDPLinkBody**](../Model/Userv2betaUserServiceAddIDPLinkBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaAddIDPLinkResponse**](../Model/Userv2betaAddIDPLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddOTPEmail()`

```php
userServiceAddOTPEmail($userId, $body): \ArthurHlt\Zitadel\Model\Userv2AddOTPEmailResponse
```

Add OTP Email for a user

Add a new One-Time Password (OTP) Email factor to the authenticated user. OTP Email will enable the user to verify a OTP with the latest verified email. The email has to be verified to add the second factor..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceAddOTPEmail($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddOTPEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2AddOTPEmailResponse**](../Model/Userv2AddOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddOTPEmail_0()`

```php
userServiceAddOTPEmail_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaAddOTPEmailResponse
```

Add OTP Email for a user

Add a new One-Time Password (OTP) Email factor to the authenticated user. OTP Email will enable the user to verify a OTP with the latest verified email. The email has to be verified to add the second factor.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceAddOTPEmail_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddOTPEmail_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaAddOTPEmailResponse**](../Model/Userv2betaAddOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddOTPSMS()`

```php
userServiceAddOTPSMS($userId, $body): \ArthurHlt\Zitadel\Model\Userv2AddOTPSMSResponse
```

Add OTP SMS for a user

Add a new One-Time Password (OTP) SMS factor to the authenticated user. OTP SMS will enable the user to verify a OTP with the latest verified phone number. The phone number has to be verified to add the second factor..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceAddOTPSMS($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddOTPSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2AddOTPSMSResponse**](../Model/Userv2AddOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceAddOTPSMS_0()`

```php
userServiceAddOTPSMS_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaAddOTPSMSResponse
```

Add OTP SMS for a user

Add a new One-Time Password (OTP) SMS factor to the authenticated user. OTP SMS will enable the user to verify a OTP with the latest verified phone number. The phone number has to be verified to add the second factor.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceAddOTPSMS_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceAddOTPSMS_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaAddOTPSMSResponse**](../Model/Userv2betaAddOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceCreateInviteCode()`

```php
userServiceCreateInviteCode($userId, $body): \ArthurHlt\Zitadel\Model\V2CreateInviteCodeResponse
```

Create an invite code for a user

Create an invite code for a user to initialize their first authentication method (password, passkeys, IdP) depending on the organization's available methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\UserServiceCreateInviteCodeBody(); // \ArthurHlt\Zitadel\Model\UserServiceCreateInviteCodeBody

try {
    $result = $apiInstance->userServiceCreateInviteCode($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceCreateInviteCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\UserServiceCreateInviteCodeBody**](../Model/UserServiceCreateInviteCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2CreateInviteCodeResponse**](../Model/V2CreateInviteCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceCreatePasskeyRegistrationLink()`

```php
userServiceCreatePasskeyRegistrationLink($userId, $body): \ArthurHlt\Zitadel\Model\Userv2CreatePasskeyRegistrationLinkResponse
```

Create a passkey registration link for a user

Create a passkey registration link which includes a code and either return it or send it to the user..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceCreatePasskeyRegistrationLinkBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceCreatePasskeyRegistrationLinkBody

try {
    $result = $apiInstance->userServiceCreatePasskeyRegistrationLink($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceCreatePasskeyRegistrationLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceCreatePasskeyRegistrationLinkBody**](../Model/Userv2UserServiceCreatePasskeyRegistrationLinkBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2CreatePasskeyRegistrationLinkResponse**](../Model/Userv2CreatePasskeyRegistrationLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceCreatePasskeyRegistrationLink_0()`

```php
userServiceCreatePasskeyRegistrationLink_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaCreatePasskeyRegistrationLinkResponse
```

Create a passkey registration link for a user

Create a passkey registration link which includes a code and either return it or send it to the user.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceCreatePasskeyRegistrationLinkBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceCreatePasskeyRegistrationLinkBody

try {
    $result = $apiInstance->userServiceCreatePasskeyRegistrationLink_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceCreatePasskeyRegistrationLink_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceCreatePasskeyRegistrationLinkBody**](../Model/Userv2betaUserServiceCreatePasskeyRegistrationLinkBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaCreatePasskeyRegistrationLinkResponse**](../Model/Userv2betaCreatePasskeyRegistrationLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceDeactivateUser()`

```php
userServiceDeactivateUser($userId, $body): \ArthurHlt\Zitadel\Model\Userv2DeactivateUserResponse
```

Deactivate user

The state of the user will be changed to 'deactivated'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'deactivated'. Use deactivate user when the user should not be able to use the account anymore, but you still need access to the user data..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceDeactivateUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceDeactivateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2DeactivateUserResponse**](../Model/Userv2DeactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceDeactivateUser_0()`

```php
userServiceDeactivateUser_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaDeactivateUserResponse
```

Deactivate user

The state of the user will be changed to 'deactivated'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'deactivated'. Use deactivate user when the user should not be able to use the account anymore, but you still need access to the user data.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceDeactivateUser_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceDeactivateUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaDeactivateUserResponse**](../Model/Userv2betaDeactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceDeleteUser()`

```php
userServiceDeleteUser($userId): \ArthurHlt\Zitadel\Model\Userv2DeleteUserResponse
```

Delete user

The state of the user will be changed to 'deleted'. The user will not be able to log in anymore. Endpoints requesting this user will return an error 'User not found..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceDeleteUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceDeleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2DeleteUserResponse**](../Model/Userv2DeleteUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceDeleteUser_0()`

```php
userServiceDeleteUser_0($userId): \ArthurHlt\Zitadel\Model\Userv2betaDeleteUserResponse
```

Delete user

The state of the user will be changed to 'deleted'. The user will not be able to log in anymore. Endpoints requesting this user will return an error 'User not found.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceDeleteUser_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceDeleteUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaDeleteUserResponse**](../Model/Userv2betaDeleteUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceGetUserByID()`

```php
userServiceGetUserByID($userId): \ArthurHlt\Zitadel\Model\Userv2GetUserByIDResponse
```

User by ID

Returns the full user object (human or machine) including the profile, email, etc..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string | User ID of the user you like to get.

try {
    $result = $apiInstance->userServiceGetUserByID($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceGetUserByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID of the user you like to get. |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2GetUserByIDResponse**](../Model/Userv2GetUserByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceGetUserByID_0()`

```php
userServiceGetUserByID_0($userId): \ArthurHlt\Zitadel\Model\Userv2betaGetUserByIDResponse
```

User by ID

Returns the full user object (human or machine) including the profile, email, etc.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string | User ID of the user you like to get.

try {
    $result = $apiInstance->userServiceGetUserByID_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceGetUserByID_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID of the user you like to get. |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaGetUserByIDResponse**](../Model/Userv2betaGetUserByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceHumanMFAInitSkipped()`

```php
userServiceHumanMFAInitSkipped($userId, $body): \ArthurHlt\Zitadel\Model\V2HumanMFAInitSkippedResponse
```

MFA Init Skipped

Update the last time the user has skipped MFA initialization. The server timestamp is used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceHumanMFAInitSkipped($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceHumanMFAInitSkipped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2HumanMFAInitSkippedResponse**](../Model/V2HumanMFAInitSkippedResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListAuthenticationFactors()`

```php
userServiceListAuthenticationFactors($userId, $authFactors, $states): \ArthurHlt\Zitadel\Model\V2ListAuthenticationFactorsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$authFactors = array('authFactors_example'); // string[] | Specify the Auth Factors you are interested in
$states = array('states_example'); // string[] | Specify the state of the Auth Factors

try {
    $result = $apiInstance->userServiceListAuthenticationFactors($userId, $authFactors, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListAuthenticationFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **authFactors** | [**string[]**](../Model/string.md)| Specify the Auth Factors you are interested in | [optional]
 **states** | [**string[]**](../Model/string.md)| Specify the state of the Auth Factors | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V2ListAuthenticationFactorsResponse**](../Model/V2ListAuthenticationFactorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListAuthenticationMethodTypes()`

```php
userServiceListAuthenticationMethodTypes($userId, $domainQueryIncludeWithoutDomain, $domainQueryDomain): \ArthurHlt\Zitadel\Model\Userv2ListAuthenticationMethodTypesResponse
```

List all possible authentication methods of a user

List all possible authentication methods of a user like password, passwordless, (T)OTP and more..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$domainQueryIncludeWithoutDomain = True; // bool | List also auth method types without domain information like passkey and U2F added through V1 APIs / Login UI.
$domainQueryDomain = 'domainQueryDomain_example'; // string | List only auth methods with specific domain.

try {
    $result = $apiInstance->userServiceListAuthenticationMethodTypes($userId, $domainQueryIncludeWithoutDomain, $domainQueryDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListAuthenticationMethodTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **domainQueryIncludeWithoutDomain** | **bool**| List also auth method types without domain information like passkey and U2F added through V1 APIs / Login UI. | [optional]
 **domainQueryDomain** | **string**| List only auth methods with specific domain. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2ListAuthenticationMethodTypesResponse**](../Model/Userv2ListAuthenticationMethodTypesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListAuthenticationMethodTypes_0()`

```php
userServiceListAuthenticationMethodTypes_0($userId): \ArthurHlt\Zitadel\Model\Userv2betaListAuthenticationMethodTypesResponse
```

List all possible authentication methods of a user

List all possible authentication methods of a user like password, passwordless, (T)OTP and more.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceListAuthenticationMethodTypes_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListAuthenticationMethodTypes_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaListAuthenticationMethodTypesResponse**](../Model/Userv2betaListAuthenticationMethodTypesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListIDPLinks()`

```php
userServiceListIDPLinks($userId, $body): \ArthurHlt\Zitadel\Model\V2ListIDPLinksResponse
```

List links to an identity provider of an user

List links to an identity provider of an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\UserServiceListIDPLinksBody(); // \ArthurHlt\Zitadel\Model\UserServiceListIDPLinksBody

try {
    $result = $apiInstance->userServiceListIDPLinks($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListIDPLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\UserServiceListIDPLinksBody**](../Model/UserServiceListIDPLinksBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2ListIDPLinksResponse**](../Model/V2ListIDPLinksResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListPasskeys()`

```php
userServiceListPasskeys($userId, $body): \ArthurHlt\Zitadel\Model\V2ListPasskeysResponse
```

List passkeys of an user

List passkeys of an user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceListPasskeys($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListPasskeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2ListPasskeysResponse**](../Model/V2ListPasskeysResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListUsers()`

```php
userServiceListUsers($body): \ArthurHlt\Zitadel\Model\Userv2ListUsersResponse
```

Search Users

Search for users. By default, we will return all users of your instance that you have permission to read. Make sure to include a limit and sorting for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv2ListUsersRequest(); // \ArthurHlt\Zitadel\Model\Userv2ListUsersRequest

try {
    $result = $apiInstance->userServiceListUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2ListUsersRequest**](../Model/Userv2ListUsersRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2ListUsersResponse**](../Model/Userv2ListUsersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceListUsers_0()`

```php
userServiceListUsers_0($body): \ArthurHlt\Zitadel\Model\Userv2betaListUsersResponse
```

Search Users

Search for users. By default, we will return all users of your instance that you have permission to read. Make sure to include a limit and sorting for pagination.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv2betaListUsersRequest(); // \ArthurHlt\Zitadel\Model\Userv2betaListUsersRequest

try {
    $result = $apiInstance->userServiceListUsers_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceListUsers_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaListUsersRequest**](../Model/Userv2betaListUsersRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaListUsersResponse**](../Model/Userv2betaListUsersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceLockUser()`

```php
userServiceLockUser($userId, $body): \ArthurHlt\Zitadel\Model\Userv2LockUserResponse
```

Lock user

The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.)..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceLockUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceLockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2LockUserResponse**](../Model/Userv2LockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceLockUser_0()`

```php
userServiceLockUser_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaLockUserResponse
```

Lock user

The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.).  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceLockUser_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceLockUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaLockUserResponse**](../Model/Userv2betaLockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServicePasswordReset()`

```php
userServicePasswordReset($userId, $body): \ArthurHlt\Zitadel\Model\Userv2PasswordResetResponse
```

Request a code to reset a password

Request a code to reset a password..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServicePasswordResetBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServicePasswordResetBody

try {
    $result = $apiInstance->userServicePasswordReset($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServicePasswordReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServicePasswordResetBody**](../Model/Userv2UserServicePasswordResetBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2PasswordResetResponse**](../Model/Userv2PasswordResetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServicePasswordReset_0()`

```php
userServicePasswordReset_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaPasswordResetResponse
```

Request a code to reset a password

Request a code to reset a password.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServicePasswordResetBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServicePasswordResetBody

try {
    $result = $apiInstance->userServicePasswordReset_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServicePasswordReset_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServicePasswordResetBody**](../Model/Userv2betaUserServicePasswordResetBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaPasswordResetResponse**](../Model/Userv2betaPasswordResetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceReactivateUser()`

```php
userServiceReactivateUser($userId, $body): \ArthurHlt\Zitadel\Model\Userv2ReactivateUserResponse
```

Reactivate user

Reactivate a user with the state 'deactivated'. The user will be able to log in again afterward. The endpoint returns an error if the user is not in the state 'deactivated'..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceReactivateUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceReactivateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2ReactivateUserResponse**](../Model/Userv2ReactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceReactivateUser_0()`

```php
userServiceReactivateUser_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaReactivateUserResponse
```

Reactivate user

Reactivate a user with the state 'deactivated'. The user will be able to log in again afterward. The endpoint returns an error if the user is not in the state 'deactivated'.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceReactivateUser_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceReactivateUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaReactivateUserResponse**](../Model/Userv2betaReactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRegisterPasskey()`

```php
userServiceRegisterPasskey($userId, $body): \ArthurHlt\Zitadel\Model\Userv2RegisterPasskeyResponse
```

Start the registration of passkey for a user

Start the registration of a passkey for a user, as a response the public key credential creation options are returned, which are used to verify the passkey..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceRegisterPasskeyBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceRegisterPasskeyBody

try {
    $result = $apiInstance->userServiceRegisterPasskey($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRegisterPasskey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceRegisterPasskeyBody**](../Model/Userv2UserServiceRegisterPasskeyBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RegisterPasskeyResponse**](../Model/Userv2RegisterPasskeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRegisterPasskey_0()`

```php
userServiceRegisterPasskey_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaRegisterPasskeyResponse
```

Start the registration of passkey for a user

Start the registration of a passkey for a user, as a response the public key credential creation options are returned, which are used to verify the passkey.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceRegisterPasskeyBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceRegisterPasskeyBody

try {
    $result = $apiInstance->userServiceRegisterPasskey_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRegisterPasskey_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceRegisterPasskeyBody**](../Model/Userv2betaUserServiceRegisterPasskeyBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRegisterPasskeyResponse**](../Model/Userv2betaRegisterPasskeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRegisterTOTP()`

```php
userServiceRegisterTOTP($userId, $body): \ArthurHlt\Zitadel\Model\Userv2RegisterTOTPResponse
```

Start the registration of a TOTP generator for a user

Start the registration of a TOTP generator for a user, as a response a secret returned, which is used to initialize a TOTP app or device..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceRegisterTOTP($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRegisterTOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RegisterTOTPResponse**](../Model/Userv2RegisterTOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRegisterTOTP_0()`

```php
userServiceRegisterTOTP_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaRegisterTOTPResponse
```

Start the registration of a TOTP generator for a user

Start the registration of a TOTP generator for a user, as a response a secret returned, which is used to initialize a TOTP app or device.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceRegisterTOTP_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRegisterTOTP_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRegisterTOTPResponse**](../Model/Userv2betaRegisterTOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRegisterU2F()`

```php
userServiceRegisterU2F($userId, $body): \ArthurHlt\Zitadel\Model\Userv2RegisterU2FResponse
```

Start the registration of a u2f token for a user

Start the registration of a u2f token for a user, as a response the public key credential creation options are returned, which are used to verify the u2f token..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceRegisterU2FBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceRegisterU2FBody

try {
    $result = $apiInstance->userServiceRegisterU2F($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRegisterU2F: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceRegisterU2FBody**](../Model/Userv2UserServiceRegisterU2FBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RegisterU2FResponse**](../Model/Userv2RegisterU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRegisterU2F_0()`

```php
userServiceRegisterU2F_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaRegisterU2FResponse
```

Start the registration of a u2f token for a user

Start the registration of a u2f token for a user, as a response the public key credential creation options are returned, which are used to verify the u2f token.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceRegisterU2FBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceRegisterU2FBody

try {
    $result = $apiInstance->userServiceRegisterU2F_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRegisterU2F_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceRegisterU2FBody**](../Model/Userv2betaUserServiceRegisterU2FBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRegisterU2FResponse**](../Model/Userv2betaRegisterU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveIDPLink()`

```php
userServiceRemoveIDPLink($userId, $idpId, $linkedUserId, $body): \ArthurHlt\Zitadel\Model\V2RemoveIDPLinkResponse
```

Remove link of an identity provider to an user

Remove link of an identity provider to an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$idpId = 'idpId_example'; // string
$linkedUserId = 'linkedUserId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceRemoveIDPLink($userId, $idpId, $linkedUserId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveIDPLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **idpId** | **string**|  |
 **linkedUserId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2RemoveIDPLinkResponse**](../Model/V2RemoveIDPLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveOTPEmail()`

```php
userServiceRemoveOTPEmail($userId): \ArthurHlt\Zitadel\Model\Userv2RemoveOTPEmailResponse
```

Remove One-Time Password (OTP) Email from a user

Remove the configured One-Time Password (OTP) Email factor of a user. As only one OTP Email per user is allowed, the user will not have OTP Email as a second factor afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveOTPEmail($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveOTPEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RemoveOTPEmailResponse**](../Model/Userv2RemoveOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveOTPEmail_0()`

```php
userServiceRemoveOTPEmail_0($userId): \ArthurHlt\Zitadel\Model\Userv2betaRemoveOTPEmailResponse
```

Remove One-Time Password (OTP) Email from a user

Remove the configured One-Time Password (OTP) Email factor of a user. As only one OTP Email per user is allowed, the user will not have OTP Email as a second factor afterward.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveOTPEmail_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveOTPEmail_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRemoveOTPEmailResponse**](../Model/Userv2betaRemoveOTPEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveOTPSMS()`

```php
userServiceRemoveOTPSMS($userId): \ArthurHlt\Zitadel\Model\Userv2RemoveOTPSMSResponse
```

Remove One-Time Password (OTP) SMS from a user

Remove the configured One-Time Password (OTP) SMS factor of a user. As only one OTP SMS per user is allowed, the user will not have OTP SMS as a second factor afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveOTPSMS($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveOTPSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RemoveOTPSMSResponse**](../Model/Userv2RemoveOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveOTPSMS_0()`

```php
userServiceRemoveOTPSMS_0($userId): \ArthurHlt\Zitadel\Model\Userv2betaRemoveOTPSMSResponse
```

Remove One-Time Password (OTP) SMS from a user

Remove the configured One-Time Password (OTP) SMS factor of a user. As only one OTP SMS per user is allowed, the user will not have OTP SMS as a second factor afterward.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveOTPSMS_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveOTPSMS_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRemoveOTPSMSResponse**](../Model/Userv2betaRemoveOTPSMSResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemovePasskey()`

```php
userServiceRemovePasskey($userId, $passkeyId): \ArthurHlt\Zitadel\Model\V2RemovePasskeyResponse
```

Remove passkey from a user

Remove passkey from a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$passkeyId = 'passkeyId_example'; // string

try {
    $result = $apiInstance->userServiceRemovePasskey($userId, $passkeyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemovePasskey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **passkeyId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2RemovePasskeyResponse**](../Model/V2RemovePasskeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemovePhone()`

```php
userServiceRemovePhone($userId, $body): \ArthurHlt\Zitadel\Model\Userv2RemovePhoneResponse
```

Delete the user phone

Delete the phone number of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceRemovePhone($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemovePhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RemovePhoneResponse**](../Model/Userv2RemovePhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemovePhone_0()`

```php
userServiceRemovePhone_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaRemovePhoneResponse
```

Delete the user phone

Delete the phone number of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceRemovePhone_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemovePhone_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRemovePhoneResponse**](../Model/Userv2betaRemovePhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveTOTP()`

```php
userServiceRemoveTOTP($userId): \ArthurHlt\Zitadel\Model\Userv2RemoveTOTPResponse
```

Remove TOTP generator from a user

Remove the configured TOTP generator of a user. As only one TOTP generator per user is allowed, the user will not have TOTP as a second factor afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveTOTP($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveTOTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RemoveTOTPResponse**](../Model/Userv2RemoveTOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveTOTP_0()`

```php
userServiceRemoveTOTP_0($userId): \ArthurHlt\Zitadel\Model\Userv2betaRemoveTOTPResponse
```

Remove TOTP generator from a user

Remove the configured TOTP generator of a user. As only one TOTP generator per user is allowed, the user will not have TOTP as a second factor afterward.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveTOTP_0($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveTOTP_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRemoveTOTPResponse**](../Model/Userv2betaRemoveTOTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRemoveU2F()`

```php
userServiceRemoveU2F($userId, $u2fId): \ArthurHlt\Zitadel\Model\V2RemoveU2FResponse
```

Remove u2f token from a user

Remove u2f token from a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$u2fId = 'u2fId_example'; // string

try {
    $result = $apiInstance->userServiceRemoveU2F($userId, $u2fId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRemoveU2F: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **u2fId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2RemoveU2FResponse**](../Model/V2RemoveU2FResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceResendEmailCode()`

```php
userServiceResendEmailCode($userId, $body): \ArthurHlt\Zitadel\Model\Userv2ResendEmailCodeResponse
```

Resend code to verify user email

Resend code to verify user email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceResendEmailCodeBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceResendEmailCodeBody

try {
    $result = $apiInstance->userServiceResendEmailCode($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceResendEmailCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceResendEmailCodeBody**](../Model/Userv2UserServiceResendEmailCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2ResendEmailCodeResponse**](../Model/Userv2ResendEmailCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceResendEmailCode_0()`

```php
userServiceResendEmailCode_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaResendEmailCodeResponse
```

Resend code to verify user email

Resend code to verify user email  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceResendEmailCodeBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceResendEmailCodeBody

try {
    $result = $apiInstance->userServiceResendEmailCode_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceResendEmailCode_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceResendEmailCodeBody**](../Model/Userv2betaUserServiceResendEmailCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaResendEmailCodeResponse**](../Model/Userv2betaResendEmailCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceResendInviteCode()`

```php
userServiceResendInviteCode($userId): \ArthurHlt\Zitadel\Model\V2ResendInviteCodeResponse
```

Resend an invite code for a user

Resend an invite code for a user to initialize their first authentication method (password, passkeys, IdP) depending on the organization's available methods. A resend is only possible if a code has been created previously and sent to the user. If there is no code or it was directly returned, an error will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userServiceResendInviteCode($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceResendInviteCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2ResendInviteCodeResponse**](../Model/V2ResendInviteCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceResendPhoneCode()`

```php
userServiceResendPhoneCode($userId, $body): \ArthurHlt\Zitadel\Model\Userv2ResendPhoneCodeResponse
```

Resend code to verify user phone

Resend code to verify user phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceResendPhoneCodeBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceResendPhoneCodeBody

try {
    $result = $apiInstance->userServiceResendPhoneCode($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceResendPhoneCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceResendPhoneCodeBody**](../Model/Userv2UserServiceResendPhoneCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2ResendPhoneCodeResponse**](../Model/Userv2ResendPhoneCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceResendPhoneCode_0()`

```php
userServiceResendPhoneCode_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaResendPhoneCodeResponse
```

Resend code to verify user phone

Resend code to verify user phone  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceResendPhoneCodeBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceResendPhoneCodeBody

try {
    $result = $apiInstance->userServiceResendPhoneCode_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceResendPhoneCode_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceResendPhoneCodeBody**](../Model/Userv2betaUserServiceResendPhoneCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaResendPhoneCodeResponse**](../Model/Userv2betaResendPhoneCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRetrieveIdentityProviderIntent()`

```php
userServiceRetrieveIdentityProviderIntent($idpIntentId, $body): \ArthurHlt\Zitadel\Model\Userv2RetrieveIdentityProviderIntentResponse
```

Retrieve the information returned by the identity provider

Retrieve the information returned by the identity provider for registration or updating an existing user with new information..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpIntentId = 'idpIntentId_example'; // string | ID of the idp intent, previously returned on the success response of the IDP callback
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceRetrieveIdentityProviderIntentBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceRetrieveIdentityProviderIntentBody

try {
    $result = $apiInstance->userServiceRetrieveIdentityProviderIntent($idpIntentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRetrieveIdentityProviderIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpIntentId** | **string**| ID of the idp intent, previously returned on the success response of the IDP callback |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceRetrieveIdentityProviderIntentBody**](../Model/Userv2UserServiceRetrieveIdentityProviderIntentBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2RetrieveIdentityProviderIntentResponse**](../Model/Userv2RetrieveIdentityProviderIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceRetrieveIdentityProviderIntent_0()`

```php
userServiceRetrieveIdentityProviderIntent_0($idpIntentId, $body): \ArthurHlt\Zitadel\Model\Userv2betaRetrieveIdentityProviderIntentResponse
```

Retrieve the information returned by the identity provider

Retrieve the information returned by the identity provider for registration or updating an existing user with new information.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpIntentId = 'idpIntentId_example'; // string | ID of the idp intent, previously returned on the success response of the IDP callback
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceRetrieveIdentityProviderIntentBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceRetrieveIdentityProviderIntentBody

try {
    $result = $apiInstance->userServiceRetrieveIdentityProviderIntent_0($idpIntentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceRetrieveIdentityProviderIntent_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpIntentId** | **string**| ID of the idp intent, previously returned on the success response of the IDP callback |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceRetrieveIdentityProviderIntentBody**](../Model/Userv2betaUserServiceRetrieveIdentityProviderIntentBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaRetrieveIdentityProviderIntentResponse**](../Model/Userv2betaRetrieveIdentityProviderIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSendEmailCode()`

```php
userServiceSendEmailCode($userId, $body): \ArthurHlt\Zitadel\Model\V2SendEmailCodeResponse
```

Send code to verify user email

Send code to verify user email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\UserServiceSendEmailCodeBody(); // \ArthurHlt\Zitadel\Model\UserServiceSendEmailCodeBody

try {
    $result = $apiInstance->userServiceSendEmailCode($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSendEmailCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\UserServiceSendEmailCodeBody**](../Model/UserServiceSendEmailCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2SendEmailCodeResponse**](../Model/V2SendEmailCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSetEmail()`

```php
userServiceSetEmail($userId, $body): \ArthurHlt\Zitadel\Model\Userv2SetEmailResponse
```

Change the user email

Change the email address of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by email..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceSetEmailBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceSetEmailBody

try {
    $result = $apiInstance->userServiceSetEmail($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSetEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceSetEmailBody**](../Model/Userv2UserServiceSetEmailBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2SetEmailResponse**](../Model/Userv2SetEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSetEmail_0()`

```php
userServiceSetEmail_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaSetEmailResponse
```

Change the user email

Change the email address of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by email.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetEmailBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetEmailBody

try {
    $result = $apiInstance->userServiceSetEmail_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSetEmail_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetEmailBody**](../Model/Userv2betaUserServiceSetEmailBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaSetEmailResponse**](../Model/Userv2betaSetEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSetPassword()`

```php
userServiceSetPassword($userId, $body): \ArthurHlt\Zitadel\Model\Userv2SetPasswordResponse
```

Change password

Change the password of a user with either a verification code or the current password..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceSetPasswordBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceSetPasswordBody

try {
    $result = $apiInstance->userServiceSetPassword($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceSetPasswordBody**](../Model/Userv2UserServiceSetPasswordBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2SetPasswordResponse**](../Model/Userv2SetPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSetPassword_0()`

```php
userServiceSetPassword_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaSetPasswordResponse
```

Change password

Change the password of a user with either a verification code or the current password.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetPasswordBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetPasswordBody

try {
    $result = $apiInstance->userServiceSetPassword_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSetPassword_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetPasswordBody**](../Model/Userv2betaUserServiceSetPasswordBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaSetPasswordResponse**](../Model/Userv2betaSetPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSetPhone()`

```php
userServiceSetPhone($userId, $body): \ArthurHlt\Zitadel\Model\Userv2SetPhoneResponse
```

Set the user phone

Set the phone number of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by sms..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceSetPhoneBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceSetPhoneBody

try {
    $result = $apiInstance->userServiceSetPhone($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSetPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceSetPhoneBody**](../Model/Userv2UserServiceSetPhoneBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2SetPhoneResponse**](../Model/Userv2SetPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceSetPhone_0()`

```php
userServiceSetPhone_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaSetPhoneResponse
```

Set the user phone

Set the phone number of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by sms.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetPhoneBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetPhoneBody

try {
    $result = $apiInstance->userServiceSetPhone_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceSetPhone_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceSetPhoneBody**](../Model/Userv2betaUserServiceSetPhoneBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaSetPhoneResponse**](../Model/Userv2betaSetPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceStartIdentityProviderIntent()`

```php
userServiceStartIdentityProviderIntent($body): \ArthurHlt\Zitadel\Model\Userv2StartIdentityProviderIntentResponse
```

Start flow with an identity provider

Start a flow with an identity provider, for external login, registration or linking..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv2StartIdentityProviderIntentRequest(); // \ArthurHlt\Zitadel\Model\Userv2StartIdentityProviderIntentRequest

try {
    $result = $apiInstance->userServiceStartIdentityProviderIntent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceStartIdentityProviderIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2StartIdentityProviderIntentRequest**](../Model/Userv2StartIdentityProviderIntentRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2StartIdentityProviderIntentResponse**](../Model/Userv2StartIdentityProviderIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceStartIdentityProviderIntent_0()`

```php
userServiceStartIdentityProviderIntent_0($body): \ArthurHlt\Zitadel\Model\Userv2betaStartIdentityProviderIntentResponse
```

Start flow with an identity provider

Start a flow with an identity provider, for external login, registration or linking.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv2betaStartIdentityProviderIntentRequest(); // \ArthurHlt\Zitadel\Model\Userv2betaStartIdentityProviderIntentRequest

try {
    $result = $apiInstance->userServiceStartIdentityProviderIntent_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceStartIdentityProviderIntent_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaStartIdentityProviderIntentRequest**](../Model/Userv2betaStartIdentityProviderIntentRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaStartIdentityProviderIntentResponse**](../Model/Userv2betaStartIdentityProviderIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceUnlockUser()`

```php
userServiceUnlockUser($userId, $body): \ArthurHlt\Zitadel\Model\Userv2UnlockUserResponse
```

Unlock user

The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.)..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceUnlockUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceUnlockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2UnlockUserResponse**](../Model/Userv2UnlockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceUnlockUser_0()`

```php
userServiceUnlockUser_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaUnlockUserResponse
```

Unlock user

The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.).  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->userServiceUnlockUser_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceUnlockUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaUnlockUserResponse**](../Model/Userv2betaUnlockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceUpdateHumanUser()`

```php
userServiceUpdateHumanUser($userId, $body): \ArthurHlt\Zitadel\Model\Userv2UpdateHumanUserResponse
```

Update User

Update all information from a user..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceUpdateHumanUserBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceUpdateHumanUserBody

try {
    $result = $apiInstance->userServiceUpdateHumanUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceUpdateHumanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceUpdateHumanUserBody**](../Model/Userv2UserServiceUpdateHumanUserBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2UpdateHumanUserResponse**](../Model/Userv2UpdateHumanUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceUpdateHumanUser_0()`

```php
userServiceUpdateHumanUser_0($userId, $profileGivenName, $profileFamilyName, $emailEmail, $passwordPasswordPassword, $passwordHashedPasswordHash, $passwordCurrentPassword, $passwordVerificationCode, $username, $profileNickName, $profileDisplayName, $profilePreferredLanguage, $profileGender, $emailSendCodeUrlTemplate, $emailIsVerified, $phonePhone, $phoneIsVerified, $passwordPasswordChangeRequired, $passwordHashedPasswordChangeRequired): \ArthurHlt\Zitadel\Model\Userv2betaUpdateHumanUserResponse
```

Update User

Update all information from a user.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$profileGivenName = 'profileGivenName_example'; // string
$profileFamilyName = 'profileFamilyName_example'; // string
$emailEmail = 'emailEmail_example'; // string
$passwordPasswordPassword = 'passwordPasswordPassword_example'; // string
$passwordHashedPasswordHash = 'passwordHashedPasswordHash_example'; // string | \"Encoded hash of a password in Modular Crypt Format: https://zitadel.com/docs/concepts/architecture/secrets#hashed-secrets\"
$passwordCurrentPassword = 'passwordCurrentPassword_example'; // string
$passwordVerificationCode = 'passwordVerificationCode_example'; // string | \"the verification code generated during password reset request\"
$username = 'username_example'; // string
$profileNickName = 'profileNickName_example'; // string
$profileDisplayName = 'profileDisplayName_example'; // string
$profilePreferredLanguage = 'profilePreferredLanguage_example'; // string
$profileGender = 'GENDER_UNSPECIFIED'; // string
$emailSendCodeUrlTemplate = 'emailSendCodeUrlTemplate_example'; // string | \"Optionally set a url_template, which will be used in the verification mail sent by ZITADEL to guide the user to your verification page. If no template is set, the default ZITADEL url will be used.\"
$emailIsVerified = True; // bool
$phonePhone = 'phonePhone_example'; // string
$phoneIsVerified = True; // bool
$passwordPasswordChangeRequired = True; // bool
$passwordHashedPasswordChangeRequired = True; // bool

try {
    $result = $apiInstance->userServiceUpdateHumanUser_0($userId, $profileGivenName, $profileFamilyName, $emailEmail, $passwordPasswordPassword, $passwordHashedPasswordHash, $passwordCurrentPassword, $passwordVerificationCode, $username, $profileNickName, $profileDisplayName, $profilePreferredLanguage, $profileGender, $emailSendCodeUrlTemplate, $emailIsVerified, $phonePhone, $phoneIsVerified, $passwordPasswordChangeRequired, $passwordHashedPasswordChangeRequired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceUpdateHumanUser_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **profileGivenName** | **string**|  |
 **profileFamilyName** | **string**|  |
 **emailEmail** | **string**|  |
 **passwordPasswordPassword** | **string**|  |
 **passwordHashedPasswordHash** | **string**| \&quot;Encoded hash of a password in Modular Crypt Format: https://zitadel.com/docs/concepts/architecture/secrets#hashed-secrets\&quot; |
 **passwordCurrentPassword** | **string**|  |
 **passwordVerificationCode** | **string**| \&quot;the verification code generated during password reset request\&quot; |
 **username** | **string**|  | [optional]
 **profileNickName** | **string**|  | [optional]
 **profileDisplayName** | **string**|  | [optional]
 **profilePreferredLanguage** | **string**|  | [optional]
 **profileGender** | **string**|  | [optional] [default to &#39;GENDER_UNSPECIFIED&#39;]
 **emailSendCodeUrlTemplate** | **string**| \&quot;Optionally set a url_template, which will be used in the verification mail sent by ZITADEL to guide the user to your verification page. If no template is set, the default ZITADEL url will be used.\&quot; | [optional]
 **emailIsVerified** | **bool**|  | [optional]
 **phonePhone** | **string**|  | [optional]
 **phoneIsVerified** | **bool**|  | [optional]
 **passwordPasswordChangeRequired** | **bool**|  | [optional]
 **passwordHashedPasswordChangeRequired** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaUpdateHumanUserResponse**](../Model/Userv2betaUpdateHumanUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyEmail()`

```php
userServiceVerifyEmail($userId, $body): \ArthurHlt\Zitadel\Model\Userv2VerifyEmailResponse
```

Verify the email

Verify the email with the generated code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyEmailBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyEmailBody

try {
    $result = $apiInstance->userServiceVerifyEmail($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyEmailBody**](../Model/Userv2UserServiceVerifyEmailBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2VerifyEmailResponse**](../Model/Userv2VerifyEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyEmail_0()`

```php
userServiceVerifyEmail_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaVerifyEmailResponse
```

Verify the email

Verify the email with the generated code.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyEmailBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyEmailBody

try {
    $result = $apiInstance->userServiceVerifyEmail_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyEmail_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyEmailBody**](../Model/Userv2betaUserServiceVerifyEmailBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaVerifyEmailResponse**](../Model/Userv2betaVerifyEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyInviteCode()`

```php
userServiceVerifyInviteCode($userId, $body): \ArthurHlt\Zitadel\Model\V2VerifyInviteCodeResponse
```

Verify an invite code for a user

Verify the invite code of a user previously issued. This will set their email to a verified state and allow the user to set up their first authentication method (password, passkeys, IdP) depending on the organization's available methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\UserServiceVerifyInviteCodeBody(); // \ArthurHlt\Zitadel\Model\UserServiceVerifyInviteCodeBody

try {
    $result = $apiInstance->userServiceVerifyInviteCode($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyInviteCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\UserServiceVerifyInviteCodeBody**](../Model/UserServiceVerifyInviteCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2VerifyInviteCodeResponse**](../Model/V2VerifyInviteCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyPasskeyRegistration()`

```php
userServiceVerifyPasskeyRegistration($userId, $passkeyId, $body): \ArthurHlt\Zitadel\Model\Userv2VerifyPasskeyRegistrationResponse
```

Verify a passkey for a user

Verify the passkey registration with the public key credential..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$passkeyId = 'passkeyId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyPasskeyRegistrationBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyPasskeyRegistrationBody

try {
    $result = $apiInstance->userServiceVerifyPasskeyRegistration($userId, $passkeyId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyPasskeyRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **passkeyId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyPasskeyRegistrationBody**](../Model/Userv2UserServiceVerifyPasskeyRegistrationBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2VerifyPasskeyRegistrationResponse**](../Model/Userv2VerifyPasskeyRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyPasskeyRegistration_0()`

```php
userServiceVerifyPasskeyRegistration_0($userId, $passkeyId, $body): \ArthurHlt\Zitadel\Model\Userv2betaVerifyPasskeyRegistrationResponse
```

Verify a passkey for a user

Verify the passkey registration with the public key credential.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$passkeyId = 'passkeyId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyPasskeyRegistrationBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyPasskeyRegistrationBody

try {
    $result = $apiInstance->userServiceVerifyPasskeyRegistration_0($userId, $passkeyId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyPasskeyRegistration_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **passkeyId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyPasskeyRegistrationBody**](../Model/Userv2betaUserServiceVerifyPasskeyRegistrationBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaVerifyPasskeyRegistrationResponse**](../Model/Userv2betaVerifyPasskeyRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyPhone()`

```php
userServiceVerifyPhone($userId, $body): \ArthurHlt\Zitadel\Model\Userv2VerifyPhoneResponse
```

Verify the phone

Verify the phone with the generated code..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyPhoneBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyPhoneBody

try {
    $result = $apiInstance->userServiceVerifyPhone($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyPhoneBody**](../Model/Userv2UserServiceVerifyPhoneBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2VerifyPhoneResponse**](../Model/Userv2VerifyPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyPhone_0()`

```php
userServiceVerifyPhone_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaVerifyPhoneResponse
```

Verify the phone

Verify the phone with the generated code.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyPhoneBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyPhoneBody

try {
    $result = $apiInstance->userServiceVerifyPhone_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyPhone_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyPhoneBody**](../Model/Userv2betaUserServiceVerifyPhoneBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaVerifyPhoneResponse**](../Model/Userv2betaVerifyPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyTOTPRegistration()`

```php
userServiceVerifyTOTPRegistration($userId, $body): \ArthurHlt\Zitadel\Model\Userv2VerifyTOTPRegistrationResponse
```

Verify a TOTP generator for a user

Verify the TOTP registration with a generated code..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyTOTPRegistrationBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyTOTPRegistrationBody

try {
    $result = $apiInstance->userServiceVerifyTOTPRegistration($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyTOTPRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyTOTPRegistrationBody**](../Model/Userv2UserServiceVerifyTOTPRegistrationBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2VerifyTOTPRegistrationResponse**](../Model/Userv2VerifyTOTPRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyTOTPRegistration_0()`

```php
userServiceVerifyTOTPRegistration_0($userId, $body): \ArthurHlt\Zitadel\Model\Userv2betaVerifyTOTPRegistrationResponse
```

Verify a TOTP generator for a user

Verify the TOTP registration with a generated code.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyTOTPRegistrationBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyTOTPRegistrationBody

try {
    $result = $apiInstance->userServiceVerifyTOTPRegistration_0($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyTOTPRegistration_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyTOTPRegistrationBody**](../Model/Userv2betaUserServiceVerifyTOTPRegistrationBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaVerifyTOTPRegistrationResponse**](../Model/Userv2betaVerifyTOTPRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyU2FRegistration()`

```php
userServiceVerifyU2FRegistration($userId, $u2fId, $body): \ArthurHlt\Zitadel\Model\Userv2VerifyU2FRegistrationResponse
```

Verify a u2f token for a user

Verify the u2f token registration with the public key credential..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$u2fId = 'u2fId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyU2FRegistrationBody(); // \ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyU2FRegistrationBody

try {
    $result = $apiInstance->userServiceVerifyU2FRegistration($userId, $u2fId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyU2FRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **u2fId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2UserServiceVerifyU2FRegistrationBody**](../Model/Userv2UserServiceVerifyU2FRegistrationBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2VerifyU2FRegistrationResponse**](../Model/Userv2VerifyU2FRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userServiceVerifyU2FRegistration_0()`

```php
userServiceVerifyU2FRegistration_0($userId, $u2fId, $body): \ArthurHlt\Zitadel\Model\Userv2betaVerifyU2FRegistrationResponse
```

Verify a u2f token for a user

Verify the u2f token registration with the public key credential.  Deprecated: please move to the corresponding endpoint under user service v2 (GA).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$u2fId = 'u2fId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyU2FRegistrationBody(); // \ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyU2FRegistrationBody

try {
    $result = $apiInstance->userServiceVerifyU2FRegistration_0($userId, $u2fId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userServiceVerifyU2FRegistration_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **u2fId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserServiceVerifyU2FRegistrationBody**](../Model/Userv2betaUserServiceVerifyU2FRegistrationBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv2betaVerifyU2FRegistrationResponse**](../Model/Userv2betaVerifyU2FRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
