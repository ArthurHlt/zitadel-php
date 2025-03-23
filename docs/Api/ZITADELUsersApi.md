# ArthurHlt\Zitadel\ZITADELUsersApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zITADELUsersActivateUser()**](ZITADELUsersApi.md#zITADELUsersActivateUser) | **POST** /resources/v3alpha/users/{id}/_activate | Activate a user
[**zITADELUsersAddIDPAuthenticator()**](ZITADELUsersApi.md#zITADELUsersAddIDPAuthenticator) | **POST** /resources/v3alpha/users/{id}/idps | Add an IDP authenticator to a user
[**zITADELUsersAddOTPEmailAuthenticator()**](ZITADELUsersApi.md#zITADELUsersAddOTPEmailAuthenticator) | **POST** /resources/v3alpha/users/{id}/otp_email | Add a OTP Email authenticator
[**zITADELUsersAddOTPSMSAuthenticator()**](ZITADELUsersApi.md#zITADELUsersAddOTPSMSAuthenticator) | **POST** /resources/v3alpha/users/{id}/otp_sms | Add a OTP SMS authenticator
[**zITADELUsersAddUsername()**](ZITADELUsersApi.md#zITADELUsersAddUsername) | **POST** /resources/v3alpha/users/{id}/username | Add a username
[**zITADELUsersCreateUser()**](ZITADELUsersApi.md#zITADELUsersCreateUser) | **POST** /resources/v3alpha/users | Create a user
[**zITADELUsersCreateWebAuthNRegistrationLink()**](ZITADELUsersApi.md#zITADELUsersCreateWebAuthNRegistrationLink) | **POST** /resources/v3alpha/users/{id}/webauthn/registration_link | Create a WebAuthN registration link
[**zITADELUsersDeactivateUser()**](ZITADELUsersApi.md#zITADELUsersDeactivateUser) | **POST** /resources/v3alpha/users/{id}/_deactivate | Deactivate a user
[**zITADELUsersDeleteUser()**](ZITADELUsersApi.md#zITADELUsersDeleteUser) | **DELETE** /resources/v3alpha/users/{id} | Delete a user
[**zITADELUsersGetIdentityProviderIntent()**](ZITADELUsersApi.md#zITADELUsersGetIdentityProviderIntent) | **GET** /resources/v3alpha/idp_intents/{idpIntentId} | Get the information of the IDP authentication intent
[**zITADELUsersGetUser()**](ZITADELUsersApi.md#zITADELUsersGetUser) | **GET** /resources/v3alpha/users/{id} | User by ID
[**zITADELUsersLockUser()**](ZITADELUsersApi.md#zITADELUsersLockUser) | **POST** /resources/v3alpha/users/{id}/_lock | Lock a user
[**zITADELUsersPatchUser()**](ZITADELUsersApi.md#zITADELUsersPatchUser) | **PATCH** /resources/v3alpha/users/{id} | Patch a user
[**zITADELUsersRemoveIDPAuthenticator()**](ZITADELUsersApi.md#zITADELUsersRemoveIDPAuthenticator) | **DELETE** /resources/v3alpha/users/{id}/idps/{idpId} | Remove an IDP authenticator
[**zITADELUsersRemoveOTPEmailAuthenticator()**](ZITADELUsersApi.md#zITADELUsersRemoveOTPEmailAuthenticator) | **DELETE** /resources/v3alpha/users/{id}/otp_email/{otpEmailId} | Remove a OTP Email authenticator
[**zITADELUsersRemoveOTPSMSAuthenticator()**](ZITADELUsersApi.md#zITADELUsersRemoveOTPSMSAuthenticator) | **DELETE** /resources/v3alpha/users/{id}/otp_sms/{otpSmsId} | Remove a OTP SMS authenticator
[**zITADELUsersRemoveTOTPAuthenticator()**](ZITADELUsersApi.md#zITADELUsersRemoveTOTPAuthenticator) | **DELETE** /resources/v3alpha/users/{id}/totp/{totpId} | Remove a TOTP authenticator
[**zITADELUsersRemoveUsername()**](ZITADELUsersApi.md#zITADELUsersRemoveUsername) | **DELETE** /resources/v3alpha/users/{id}/username/{usernameId} | Remove a username
[**zITADELUsersRemoveWebAuthNAuthenticator()**](ZITADELUsersApi.md#zITADELUsersRemoveWebAuthNAuthenticator) | **DELETE** /resources/v3alpha/users/{id}/webauthn/{webAuthNId} | Remove a WebAuthN authenticator
[**zITADELUsersRequestPasswordReset()**](ZITADELUsersApi.md#zITADELUsersRequestPasswordReset) | **POST** /resources/v3alpha/users/{id}/password/_reset | Request password reset
[**zITADELUsersResendContactEmailCode()**](ZITADELUsersApi.md#zITADELUsersResendContactEmailCode) | **POST** /resources/v3alpha/users/{id}/email/_resend | Resend the contact email code
[**zITADELUsersResendContactPhoneCode()**](ZITADELUsersApi.md#zITADELUsersResendContactPhoneCode) | **POST** /resources/v3alpha/users/{id}/phone/_resend | Resend the contact phone code
[**zITADELUsersSearchUsers()**](ZITADELUsersApi.md#zITADELUsersSearchUsers) | **POST** /resources/v3alpha/users/_search | Search users
[**zITADELUsersSetContactEmail()**](ZITADELUsersApi.md#zITADELUsersSetContactEmail) | **PUT** /resources/v3alpha/users/{id}/email | Set contact email
[**zITADELUsersSetContactPhone()**](ZITADELUsersApi.md#zITADELUsersSetContactPhone) | **PUT** /resources/v3alpha/users/{id}/phone | Set contact phone
[**zITADELUsersSetPassword()**](ZITADELUsersApi.md#zITADELUsersSetPassword) | **POST** /resources/v3alpha/users/{id}/password | Set a password
[**zITADELUsersStartIdentityProviderIntent()**](ZITADELUsersApi.md#zITADELUsersStartIdentityProviderIntent) | **POST** /resources/v3alpha/idp_intents | Start an IDP authentication intent
[**zITADELUsersStartTOTPRegistration()**](ZITADELUsersApi.md#zITADELUsersStartTOTPRegistration) | **POST** /resources/v3alpha/users/{id}/totp | Start a TOTP registration
[**zITADELUsersStartWebAuthNRegistration()**](ZITADELUsersApi.md#zITADELUsersStartWebAuthNRegistration) | **POST** /resources/v3alpha/users/{id}/webauthn | Start a WebAuthN registration
[**zITADELUsersUnlockUser()**](ZITADELUsersApi.md#zITADELUsersUnlockUser) | **POST** /resources/v3alpha/users/{id}/_unlock | Unlock a user
[**zITADELUsersVerifyContactEmail()**](ZITADELUsersApi.md#zITADELUsersVerifyContactEmail) | **POST** /resources/v3alpha/users/{id}/email/_verify | Verify the contact email
[**zITADELUsersVerifyContactPhone()**](ZITADELUsersApi.md#zITADELUsersVerifyContactPhone) | **POST** /resources/v3alpha/users/{id}/phone/_verify | Verify the contact phone
[**zITADELUsersVerifyOTPEmailRegistration()**](ZITADELUsersApi.md#zITADELUsersVerifyOTPEmailRegistration) | **POST** /resources/v3alpha/users/{id}/otp_email/{otpEmailId}/_verify | Verify OTP Email registration
[**zITADELUsersVerifyOTPSMSRegistration()**](ZITADELUsersApi.md#zITADELUsersVerifyOTPSMSRegistration) | **POST** /resources/v3alpha/users/{id}/otp_sms/{otpSmsId}/_verify | Verify OTP SMS registration
[**zITADELUsersVerifyTOTPRegistration()**](ZITADELUsersApi.md#zITADELUsersVerifyTOTPRegistration) | **POST** /resources/v3alpha/users/{id}/totp/{totpId}/_verify | Verify a TOTP registration
[**zITADELUsersVerifyWebAuthNRegistration()**](ZITADELUsersApi.md#zITADELUsersVerifyWebAuthNRegistration) | **POST** /resources/v3alpha/users/{id}/webauthn/{webAuthNId}/_verify | Verify a WebAuthN registration


## `zITADELUsersActivateUser()`

```php
zITADELUsersActivateUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaActivateUserResponse
```

Activate a user

Activate a previously deactivated user and change the state to 'active'. The user will be able to log in again.  The endpoint returns an error if the user is not in the state 'deactivated'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersActivateUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersActivateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaActivateUserResponse**](../Model/V3alphaActivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersAddIDPAuthenticator()`

```php
zITADELUsersAddIDPAuthenticator($id, $authenticator, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaAddIDPAuthenticatorResponse
```

Add an IDP authenticator to a user

Add a new identity provider (IDP) authenticator to an existing user. This will allow the user to authenticate with the provided IDP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$authenticator = new \ArthurHlt\Zitadel\Model\V3alphaIDPAuthenticator(); // \ArthurHlt\Zitadel\Model\V3alphaIDPAuthenticator
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersAddIDPAuthenticator($id, $authenticator, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersAddIDPAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **authenticator** | [**\ArthurHlt\Zitadel\Model\V3alphaIDPAuthenticator**](../Model/V3alphaIDPAuthenticator.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaAddIDPAuthenticatorResponse**](../Model/V3alphaAddIDPAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersAddOTPEmailAuthenticator()`

```php
zITADELUsersAddOTPEmailAuthenticator($id, $email, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaAddOTPEmailAuthenticatorResponse
```

Add a OTP Email authenticator

Add a new one-time password (OTP) Email authenticator to a user. If the email is not passed as verified, a verification code will be generated, which can be either returned or will be sent to the user by email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$email = new \ArthurHlt\Zitadel\Model\Userv3alphaSetEmail(); // \ArthurHlt\Zitadel\Model\Userv3alphaSetEmail | Set the user's email for the OTP Email authenticator and it's verification state.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersAddOTPEmailAuthenticator($id, $email, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersAddOTPEmailAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **email** | [**\ArthurHlt\Zitadel\Model\Userv3alphaSetEmail**](../Model/Userv3alphaSetEmail.md)| Set the user&#39;s email for the OTP Email authenticator and it&#39;s verification state. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaAddOTPEmailAuthenticatorResponse**](../Model/V3alphaAddOTPEmailAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersAddOTPSMSAuthenticator()`

```php
zITADELUsersAddOTPSMSAuthenticator($id, $phone, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaAddOTPSMSAuthenticatorResponse
```

Add a OTP SMS authenticator

Add a new one-time password (OTP) SMS authenticator to a user. If the phone is not passed as verified, a verification code will be generated, which can be either returned or will be sent to the user by SMS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$phone = new \ArthurHlt\Zitadel\Model\Userv3alphaSetPhone(); // \ArthurHlt\Zitadel\Model\Userv3alphaSetPhone | Set the user's phone for the OTP SMS authenticator and it's verification state.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersAddOTPSMSAuthenticator($id, $phone, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersAddOTPSMSAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **phone** | [**\ArthurHlt\Zitadel\Model\Userv3alphaSetPhone**](../Model/Userv3alphaSetPhone.md)| Set the user&#39;s phone for the OTP SMS authenticator and it&#39;s verification state. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaAddOTPSMSAuthenticatorResponse**](../Model/V3alphaAddOTPSMSAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersAddUsername()`

```php
zITADELUsersAddUsername($id, $username, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaAddUsernameResponse
```

Add a username

Add a new unique username to a user. The username will be used to identify the user on authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$username = new \ArthurHlt\Zitadel\Model\V3alphaSetUsername(); // \ArthurHlt\Zitadel\Model\V3alphaSetUsername | Set the user's new username.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersAddUsername($id, $username, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersAddUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **username** | [**\ArthurHlt\Zitadel\Model\V3alphaSetUsername**](../Model/V3alphaSetUsername.md)| Set the user&#39;s new username. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaAddUsernameResponse**](../Model/V3alphaAddUsernameResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersCreateUser()`

```php
zITADELUsersCreateUser($user, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaCreateUserResponse
```

Create a user

Create a new user with an optional data schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$user = new \ArthurHlt\Zitadel\Model\Userv3alphaCreateUser(); // \ArthurHlt\Zitadel\Model\Userv3alphaCreateUser
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersCreateUser($user, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersCreateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | [**\ArthurHlt\Zitadel\Model\Userv3alphaCreateUser**](../Model/Userv3alphaCreateUser.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaCreateUserResponse**](../Model/V3alphaCreateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersCreateWebAuthNRegistrationLink()`

```php
zITADELUsersCreateWebAuthNRegistrationLink($id, $body): \ArthurHlt\Zitadel\Model\V3alphaCreateWebAuthNRegistrationLinkResponse
```

Create a WebAuthN registration link

Create a link, which includes a code, that can either be returned or directly sent to the user. The code will allow the user to start a new WebAuthN registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$body = new \ArthurHlt\Zitadel\Model\ZITADELUsersCreateWebAuthNRegistrationLinkBody(); // \ArthurHlt\Zitadel\Model\ZITADELUsersCreateWebAuthNRegistrationLinkBody

try {
    $result = $apiInstance->zITADELUsersCreateWebAuthNRegistrationLink($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersCreateWebAuthNRegistrationLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **body** | [**\ArthurHlt\Zitadel\Model\ZITADELUsersCreateWebAuthNRegistrationLinkBody**](../Model/ZITADELUsersCreateWebAuthNRegistrationLinkBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaCreateWebAuthNRegistrationLinkResponse**](../Model/V3alphaCreateWebAuthNRegistrationLinkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersDeactivateUser()`

```php
zITADELUsersDeactivateUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\Userv3alphaDeactivateUserResponse
```

Deactivate a user

Deactivate an existing user and change the state 'deactivated'. The user will not be able to log in anymore. Use deactivate user when the user should not be able to use the account anymore, but you still need access to the user data.  The endpoint returns an error if the user is already in the state 'deactivated'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersDeactivateUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersDeactivateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaDeactivateUserResponse**](../Model/Userv3alphaDeactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersDeleteUser()`

```php
zITADELUsersDeleteUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\Userv3alphaDeleteUserResponse
```

Delete a user

Delete an existing user and change the state to 'deleted'. The user will be able to log in anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersDeleteUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersDeleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaDeleteUserResponse**](../Model/Userv3alphaDeleteUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersGetIdentityProviderIntent()`

```php
zITADELUsersGetIdentityProviderIntent($idpIntentId, $idpIntentToken, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaGetIdentityProviderIntentResponse
```

Get the information of the IDP authentication intent

Get the information returned by the identity provider (IDP) for registration or updating an existing user with new information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpIntentId = 'idpIntentId_example'; // string | ID of the identity provider (IDP) intent, previously returned on the success response of the start identity provider intent.
$idpIntentToken = 'idpIntentToken_example'; // string | Token of the identity provider (IDP) intent, previously returned on the success response of the start identity provider intent.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersGetIdentityProviderIntent($idpIntentId, $idpIntentToken, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersGetIdentityProviderIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpIntentId** | **string**| ID of the identity provider (IDP) intent, previously returned on the success response of the start identity provider intent. |
 **idpIntentToken** | **string**| Token of the identity provider (IDP) intent, previously returned on the success response of the start identity provider intent. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaGetIdentityProviderIntentResponse**](../Model/V3alphaGetIdentityProviderIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersGetUser()`

```php
zITADELUsersGetUser($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaGetUserResponse
```

User by ID

Returns the user identified by the requested ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersGetUser($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersGetUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaGetUserResponse**](../Model/V3alphaGetUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersLockUser()`

```php
zITADELUsersLockUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\Userv3alphaLockUserResponse
```

Lock a user

Lock an existing user and change the state 'locked'. The user will not be able to log in anymore. Use lock user when the user should temporarily not be able to log in because of an event that happened (wrong password, etc.)  The endpoint returns an error if the user is already in the state 'locked'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersLockUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersLockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaLockUserResponse**](../Model/Userv3alphaLockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersPatchUser()`

```php
zITADELUsersPatchUser($id, $user, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaPatchUserResponse
```

Patch a user

Patch an existing user with data based on a user schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$user = new \ArthurHlt\Zitadel\Model\Userv3alphaPatchUser(); // \ArthurHlt\Zitadel\Model\Userv3alphaPatchUser
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersPatchUser($id, $user, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersPatchUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **user** | [**\ArthurHlt\Zitadel\Model\Userv3alphaPatchUser**](../Model/Userv3alphaPatchUser.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaPatchUserResponse**](../Model/V3alphaPatchUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRemoveIDPAuthenticator()`

```php
zITADELUsersRemoveIDPAuthenticator($id, $idpId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaRemoveIDPAuthenticatorResponse
```

Remove an IDP authenticator

Remove an existing identity provider (IDP) authenticator from a user, so it cannot be used for authentication anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$idpId = 'idpId_example'; // string | unique identifier of the identity provider (IDP) authenticator.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersRemoveIDPAuthenticator($id, $idpId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRemoveIDPAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **idpId** | **string**| unique identifier of the identity provider (IDP) authenticator. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRemoveIDPAuthenticatorResponse**](../Model/V3alphaRemoveIDPAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRemoveOTPEmailAuthenticator()`

```php
zITADELUsersRemoveOTPEmailAuthenticator($id, $otpEmailId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaRemoveOTPEmailAuthenticatorResponse
```

Remove a OTP Email authenticator

Remove an existing one-time password (OTP) Email authenticator from a user, so it cannot be used for authentication anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$otpEmailId = 'otpEmailId_example'; // string | unique identifier of the OTP Email authenticator.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersRemoveOTPEmailAuthenticator($id, $otpEmailId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRemoveOTPEmailAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **otpEmailId** | **string**| unique identifier of the OTP Email authenticator. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRemoveOTPEmailAuthenticatorResponse**](../Model/V3alphaRemoveOTPEmailAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRemoveOTPSMSAuthenticator()`

```php
zITADELUsersRemoveOTPSMSAuthenticator($id, $otpSmsId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaRemoveOTPSMSAuthenticatorResponse
```

Remove a OTP SMS authenticator

Remove an existing one-time password (OTP) SMS authenticator from a user, so it cannot be used for authentication anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$otpSmsId = 'otpSmsId_example'; // string | unique identifier of the OTP SMS authenticator.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersRemoveOTPSMSAuthenticator($id, $otpSmsId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRemoveOTPSMSAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **otpSmsId** | **string**| unique identifier of the OTP SMS authenticator. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRemoveOTPSMSAuthenticatorResponse**](../Model/V3alphaRemoveOTPSMSAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRemoveTOTPAuthenticator()`

```php
zITADELUsersRemoveTOTPAuthenticator($id, $totpId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaRemoveTOTPAuthenticatorResponse
```

Remove a TOTP authenticator

Remove an existing time-based one-time password (TOTP) authenticator from a user, so it cannot be used for authentication anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$totpId = 'totpId_example'; // string | unique identifier of the TOTP authenticator.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersRemoveTOTPAuthenticator($id, $totpId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRemoveTOTPAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **totpId** | **string**| unique identifier of the TOTP authenticator. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRemoveTOTPAuthenticatorResponse**](../Model/V3alphaRemoveTOTPAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRemoveUsername()`

```php
zITADELUsersRemoveUsername($id, $usernameId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaRemoveUsernameResponse
```

Remove a username

Remove an existing username of a user, so it cannot be used for authentication anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$usernameId = 'usernameId_example'; // string | unique identifier of the username.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersRemoveUsername($id, $usernameId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRemoveUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **usernameId** | **string**| unique identifier of the username. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRemoveUsernameResponse**](../Model/V3alphaRemoveUsernameResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRemoveWebAuthNAuthenticator()`

```php
zITADELUsersRemoveWebAuthNAuthenticator($id, $webAuthNId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaRemoveWebAuthNAuthenticatorResponse
```

Remove a WebAuthN authenticator

Remove an existing WebAuthN authenticator from a user, so it cannot be used for authentication anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$webAuthNId = 'webAuthNId_example'; // string | unique identifier of the WebAuthN authenticator.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersRemoveWebAuthNAuthenticator($id, $webAuthNId, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRemoveWebAuthNAuthenticator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **webAuthNId** | **string**| unique identifier of the WebAuthN authenticator. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRemoveWebAuthNAuthenticatorResponse**](../Model/V3alphaRemoveWebAuthNAuthenticatorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersRequestPasswordReset()`

```php
zITADELUsersRequestPasswordReset($id, $body): \ArthurHlt\Zitadel\Model\V3alphaRequestPasswordResetResponse
```

Request password reset

Request a code to be able to set a new password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$body = new \ArthurHlt\Zitadel\Model\ZITADELUsersRequestPasswordResetBody(); // \ArthurHlt\Zitadel\Model\ZITADELUsersRequestPasswordResetBody

try {
    $result = $apiInstance->zITADELUsersRequestPasswordReset($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersRequestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **body** | [**\ArthurHlt\Zitadel\Model\ZITADELUsersRequestPasswordResetBody**](../Model/ZITADELUsersRequestPasswordResetBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaRequestPasswordResetResponse**](../Model/V3alphaRequestPasswordResetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersResendContactEmailCode()`

```php
zITADELUsersResendContactEmailCode($id, $body): \ArthurHlt\Zitadel\Model\V3alphaResendContactEmailCodeResponse
```

Resend the contact email code

Resend the email with the verification code for the contact email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$body = new \ArthurHlt\Zitadel\Model\ZITADELUsersResendContactEmailCodeBody(); // \ArthurHlt\Zitadel\Model\ZITADELUsersResendContactEmailCodeBody

try {
    $result = $apiInstance->zITADELUsersResendContactEmailCode($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersResendContactEmailCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **body** | [**\ArthurHlt\Zitadel\Model\ZITADELUsersResendContactEmailCodeBody**](../Model/ZITADELUsersResendContactEmailCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaResendContactEmailCodeResponse**](../Model/V3alphaResendContactEmailCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersResendContactPhoneCode()`

```php
zITADELUsersResendContactPhoneCode($id, $body): \ArthurHlt\Zitadel\Model\V3alphaResendContactPhoneCodeResponse
```

Resend the contact phone code

Resend the phone with the verification code for the contact phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$body = new \ArthurHlt\Zitadel\Model\ZITADELUsersResendContactPhoneCodeBody(); // \ArthurHlt\Zitadel\Model\ZITADELUsersResendContactPhoneCodeBody

try {
    $result = $apiInstance->zITADELUsersResendContactPhoneCode($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersResendContactPhoneCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **body** | [**\ArthurHlt\Zitadel\Model\ZITADELUsersResendContactPhoneCodeBody**](../Model/ZITADELUsersResendContactPhoneCodeBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaResendContactPhoneCodeResponse**](../Model/V3alphaResendContactPhoneCodeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersSearchUsers()`

```php
zITADELUsersSearchUsers($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn): \ArthurHlt\Zitadel\Model\V3alphaSearchUsersResponse
```

Search users

Search all matching users. By default, we will return all users of your instance. Make sure to include a limit and sorting for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filters = array(new \ArthurHlt\Zitadel\Model\Resourcesuserv3alphaSearchFilter()); // \ArthurHlt\Zitadel\Model\Resourcesuserv3alphaSearchFilter[] | Define the criteria to query for.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error.
$queryDesc = True; // bool | default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results.
$sortingColumn = 'FIELD_NAME_UNSPECIFIED'; // string | the field the result is sorted.

try {
    $result = $apiInstance->zITADELUsersSearchUsers($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersSearchUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | [**\ArthurHlt\Zitadel\Model\Resourcesuserv3alphaSearchFilter[]**](../Model/Resourcesuserv3alphaSearchFilter.md)| Define the criteria to query for. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error. | [optional]
 **queryDesc** | **bool**| default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results. | [optional]
 **sortingColumn** | **string**| the field the result is sorted. | [optional] [default to &#39;FIELD_NAME_UNSPECIFIED&#39;]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSearchUsersResponse**](../Model/V3alphaSearchUsersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersSetContactEmail()`

```php
zITADELUsersSetContactEmail($id, $email, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaSetContactEmailResponse
```

Set contact email

Add or update the contact email address of a user. If the email is not passed as verified, a verification code will be generated, which can be either returned or will be sent to the user by email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$email = new \ArthurHlt\Zitadel\Model\Userv3alphaSetEmail(); // \ArthurHlt\Zitadel\Model\Userv3alphaSetEmail | Set the user's contact email and it's verification state.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersSetContactEmail($id, $email, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersSetContactEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **email** | [**\ArthurHlt\Zitadel\Model\Userv3alphaSetEmail**](../Model/Userv3alphaSetEmail.md)| Set the user&#39;s contact email and it&#39;s verification state. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSetContactEmailResponse**](../Model/V3alphaSetContactEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersSetContactPhone()`

```php
zITADELUsersSetContactPhone($id, $phone, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaSetContactPhoneResponse
```

Set contact phone

Add or update the contact phone number of a user. If the phone is not passed as verified, a verification code will be generated, which can be either returned or will be sent to the user by SMS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$phone = new \ArthurHlt\Zitadel\Model\Userv3alphaSetPhone(); // \ArthurHlt\Zitadel\Model\Userv3alphaSetPhone | Set the user's contact phone and it's verification state.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersSetContactPhone($id, $phone, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersSetContactPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **phone** | [**\ArthurHlt\Zitadel\Model\Userv3alphaSetPhone**](../Model/Userv3alphaSetPhone.md)| Set the user&#39;s contact phone and it&#39;s verification state. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSetContactPhoneResponse**](../Model/V3alphaSetContactPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersSetPassword()`

```php
zITADELUsersSetPassword($id, $newPassword, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\Userv3alphaSetPasswordResponse
```

Set a password

Add, update or reset a user's password with either a verification code or the current password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$newPassword = new \ArthurHlt\Zitadel\Model\Userv3alphaSetPassword(); // \ArthurHlt\Zitadel\Model\Userv3alphaSetPassword | Provide the new password (in plain text or as hash).
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersSetPassword($id, $newPassword, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersSetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **newPassword** | [**\ArthurHlt\Zitadel\Model\Userv3alphaSetPassword**](../Model/Userv3alphaSetPassword.md)| Provide the new password (in plain text or as hash). |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaSetPasswordResponse**](../Model/Userv3alphaSetPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersStartIdentityProviderIntent()`

```php
zITADELUsersStartIdentityProviderIntent($body): \ArthurHlt\Zitadel\Model\Userv3alphaStartIdentityProviderIntentResponse
```

Start an IDP authentication intent

Start a new authentication intent on configured identity provider (IDP) for external login, registration or linking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Userv3alphaStartIdentityProviderIntentRequest(); // \ArthurHlt\Zitadel\Model\Userv3alphaStartIdentityProviderIntentRequest

try {
    $result = $apiInstance->zITADELUsersStartIdentityProviderIntent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersStartIdentityProviderIntent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Userv3alphaStartIdentityProviderIntentRequest**](../Model/Userv3alphaStartIdentityProviderIntentRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaStartIdentityProviderIntentResponse**](../Model/Userv3alphaStartIdentityProviderIntentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersStartTOTPRegistration()`

```php
zITADELUsersStartTOTPRegistration($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaStartTOTPRegistrationResponse
```

Start a TOTP registration

Start the registration of a new time-based one-time password (TOTP) generator for a user. As a response a secret is returned, which is used to initialize a TOTP app or device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersStartTOTPRegistration($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersStartTOTPRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaStartTOTPRegistrationResponse**](../Model/V3alphaStartTOTPRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersStartWebAuthNRegistration()`

```php
zITADELUsersStartWebAuthNRegistration($id, $registration, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaStartWebAuthNRegistrationResponse
```

Start a WebAuthN registration

Start the registration of a new WebAuthN device (e.g. Passkeys) for a user. As a response the public key credential creation options are returned, which are used to verify the device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$registration = new \ArthurHlt\Zitadel\Model\Userv3alphaStartWebAuthNRegistration(); // \ArthurHlt\Zitadel\Model\Userv3alphaStartWebAuthNRegistration
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersStartWebAuthNRegistration($id, $registration, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersStartWebAuthNRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **registration** | [**\ArthurHlt\Zitadel\Model\Userv3alphaStartWebAuthNRegistration**](../Model/Userv3alphaStartWebAuthNRegistration.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaStartWebAuthNRegistrationResponse**](../Model/V3alphaStartWebAuthNRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersUnlockUser()`

```php
zITADELUsersUnlockUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\Userv3alphaUnlockUserResponse
```

Unlock a user

Unlock a previously locked user and change the state to 'active'. The user will be able to log in again.  The endpoint returns an error if the user is not in the state 'locked'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersUnlockUser($id, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersUnlockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaUnlockUserResponse**](../Model/Userv3alphaUnlockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersVerifyContactEmail()`

```php
zITADELUsersVerifyContactEmail($id, $verificationCode, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaVerifyContactEmailResponse
```

Verify the contact email

Verify the contact email with the provided code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$verificationCode = 'verificationCode_example'; // string | Set the verification code generated during the set contact email request.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersVerifyContactEmail($id, $verificationCode, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersVerifyContactEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **verificationCode** | **string**| Set the verification code generated during the set contact email request. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaVerifyContactEmailResponse**](../Model/V3alphaVerifyContactEmailResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersVerifyContactPhone()`

```php
zITADELUsersVerifyContactPhone($id, $verificationCode, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaVerifyContactPhoneResponse
```

Verify the contact phone

Verify the contact phone with the provided code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$verificationCode = 'verificationCode_example'; // string | Set the verification code generated during the set contact phone request.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersVerifyContactPhone($id, $verificationCode, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersVerifyContactPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **verificationCode** | **string**| Set the verification code generated during the set contact phone request. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaVerifyContactPhoneResponse**](../Model/V3alphaVerifyContactPhoneResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersVerifyOTPEmailRegistration()`

```php
zITADELUsersVerifyOTPEmailRegistration($id, $otpEmailId, $code, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaVerifyOTPEmailRegistrationResponse
```

Verify OTP Email registration

Verify the OTP Email registration with the provided code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$otpEmailId = 'otpEmailId_example'; // string | unique identifier of the OTP Email registration, which was returned in the add OTP Email.
$code = 'code_example'; // string | Set the verification code generated during the add OTP Email request.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersVerifyOTPEmailRegistration($id, $otpEmailId, $code, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersVerifyOTPEmailRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **otpEmailId** | **string**| unique identifier of the OTP Email registration, which was returned in the add OTP Email. |
 **code** | **string**| Set the verification code generated during the add OTP Email request. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaVerifyOTPEmailRegistrationResponse**](../Model/V3alphaVerifyOTPEmailRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersVerifyOTPSMSRegistration()`

```php
zITADELUsersVerifyOTPSMSRegistration($id, $otpSmsId, $code, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaVerifyOTPSMSRegistrationResponse
```

Verify OTP SMS registration

Verify the OTP SMS registration with the provided code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$otpSmsId = 'otpSmsId_example'; // string | unique identifier of the OTP SMS registration, which was returned in the add OTP SMS.
$code = 'code_example'; // string | Set the verification code generated during the add OTP SMS request.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersVerifyOTPSMSRegistration($id, $otpSmsId, $code, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersVerifyOTPSMSRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **otpSmsId** | **string**| unique identifier of the OTP SMS registration, which was returned in the add OTP SMS. |
 **code** | **string**| Set the verification code generated during the add OTP SMS request. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaVerifyOTPSMSRegistrationResponse**](../Model/V3alphaVerifyOTPSMSRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersVerifyTOTPRegistration()`

```php
zITADELUsersVerifyTOTPRegistration($id, $totpId, $code, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\Userv3alphaVerifyTOTPRegistrationResponse
```

Verify a TOTP registration

Verify the time-based one-time password (TOTP) registration with the generated code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$totpId = 'totpId_example'; // string | unique identifier of the TOTP registration, which was returned in the start TOTP registration.
$code = 'code_example'; // string | Code generated by TOTP app or device.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersVerifyTOTPRegistration($id, $totpId, $code, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersVerifyTOTPRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **totpId** | **string**| unique identifier of the TOTP registration, which was returned in the start TOTP registration. |
 **code** | **string**| Code generated by TOTP app or device. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Userv3alphaVerifyTOTPRegistrationResponse**](../Model/Userv3alphaVerifyTOTPRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUsersVerifyWebAuthNRegistration()`

```php
zITADELUsersVerifyWebAuthNRegistration($id, $webAuthNId, $verify, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain): \ArthurHlt\Zitadel\Model\V3alphaVerifyWebAuthNRegistrationResponse
```

Verify a WebAuthN registration

Verify the WebAuthN registration started by StartWebAuthNRegistration with the public key credential.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the user.
$webAuthNId = 'webAuthNId_example'; // string | unique identifier of the WebAuthN registration, which was returned in the start webauthn registration.
$verify = new \ArthurHlt\Zitadel\Model\Userv3alphaVerifyWebAuthNRegistration(); // \ArthurHlt\Zitadel\Model\Userv3alphaVerifyWebAuthNRegistration
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$organizationOrgId = 'organizationOrgId_example'; // string
$organizationOrgDomain = 'organizationOrgDomain_example'; // string

try {
    $result = $apiInstance->zITADELUsersVerifyWebAuthNRegistration($id, $webAuthNId, $verify, $instanceId, $instanceDomain, $organizationOrgId, $organizationOrgDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUsersApi->zITADELUsersVerifyWebAuthNRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the user. |
 **webAuthNId** | **string**| unique identifier of the WebAuthN registration, which was returned in the start webauthn registration. |
 **verify** | [**\ArthurHlt\Zitadel\Model\Userv3alphaVerifyWebAuthNRegistration**](../Model/Userv3alphaVerifyWebAuthNRegistration.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **organizationOrgId** | **string**|  | [optional]
 **organizationOrgDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaVerifyWebAuthNRegistrationResponse**](../Model/V3alphaVerifyWebAuthNRegistrationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
