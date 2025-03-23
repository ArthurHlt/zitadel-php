# ArthurHlt\Zitadel\UsersApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceUpdateMyUserName()**](UsersApi.md#authServiceUpdateMyUserName) | **PUT** /users/me/username | Change My Username
[**managementServiceAddHumanUser()**](UsersApi.md#managementServiceAddHumanUser) | **POST** /users/human | Deprecated: Create User (Human)
[**managementServiceAddMachineKey()**](UsersApi.md#managementServiceAddMachineKey) | **POST** /users/{userId}/keys | Create Key for machine user
[**managementServiceAddMachineUser()**](UsersApi.md#managementServiceAddMachineUser) | **POST** /users/machine | Create User (Machine)
[**managementServiceAddPasswordlessRegistration()**](UsersApi.md#managementServiceAddPasswordlessRegistration) | **POST** /users/{userId}/passwordless/_link | Add Passwordless/Passkey Registration Link
[**managementServiceAddPersonalAccessToken()**](UsersApi.md#managementServiceAddPersonalAccessToken) | **POST** /users/{userId}/pats | Create a Personal-Access-Token (PAT)
[**managementServiceBulkRemoveUserMetadata()**](UsersApi.md#managementServiceBulkRemoveUserMetadata) | **DELETE** /users/{id}/metadata/_bulk | Bulk Delete Metadata
[**managementServiceBulkSetUserMetadata()**](UsersApi.md#managementServiceBulkSetUserMetadata) | **POST** /users/{id}/metadata/_bulk | Bulk Set User Metadata
[**managementServiceDeactivateUser()**](UsersApi.md#managementServiceDeactivateUser) | **POST** /users/{id}/_deactivate | Deactivate user
[**managementServiceGenerateMachineSecret()**](UsersApi.md#managementServiceGenerateMachineSecret) | **PUT** /users/{userId}/secret | Create Secret for Machine User
[**managementServiceGetHumanEmail()**](UsersApi.md#managementServiceGetHumanEmail) | **GET** /users/{userId}/email | Get User Email (Human)
[**managementServiceGetHumanPhone()**](UsersApi.md#managementServiceGetHumanPhone) | **GET** /users/{userId}/phone | Get User Phone (Human)
[**managementServiceGetHumanProfile()**](UsersApi.md#managementServiceGetHumanProfile) | **GET** /users/{userId}/profile | Get User Profile (Human)
[**managementServiceGetMachineKeyByIDs()**](UsersApi.md#managementServiceGetMachineKeyByIDs) | **GET** /users/{userId}/keys/{keyId} | Get Machine user Key By ID
[**managementServiceGetPersonalAccessTokenByIDs()**](UsersApi.md#managementServiceGetPersonalAccessTokenByIDs) | **GET** /users/{userId}/pats/{tokenId} | Get a Personal-Access-Token (PAT) by ID
[**managementServiceGetUserByID()**](UsersApi.md#managementServiceGetUserByID) | **GET** /users/{id} | User by ID
[**managementServiceGetUserByLoginNameGlobal()**](UsersApi.md#managementServiceGetUserByLoginNameGlobal) | **GET** /global/users/_by_login_name | Get User by login name (globally)
[**managementServiceGetUserMetadata()**](UsersApi.md#managementServiceGetUserMetadata) | **GET** /users/{id}/metadata/{key} | Get User Metadata By Key
[**managementServiceImportHumanUser()**](UsersApi.md#managementServiceImportHumanUser) | **POST** /users/human/_import | Create/Import User (Human)
[**managementServiceIsUserUnique()**](UsersApi.md#managementServiceIsUserUnique) | **GET** /users/_is_unique | Check for existing user
[**managementServiceListHumanAuthFactors()**](UsersApi.md#managementServiceListHumanAuthFactors) | **POST** /users/{userId}/auth_factors/_search | Get User Authentication Factors (2FA/MFA)
[**managementServiceListHumanLinkedIDPs()**](UsersApi.md#managementServiceListHumanLinkedIDPs) | **POST** /users/{userId}/idps/_search | List Social Logins
[**managementServiceListHumanPasswordless()**](UsersApi.md#managementServiceListHumanPasswordless) | **POST** /users/{userId}/passwordless/_search | Search Passwordless/Passkey authentication
[**managementServiceListMachineKeys()**](UsersApi.md#managementServiceListMachineKeys) | **POST** /users/{userId}/keys/_search | Get Machine user Key By ID
[**managementServiceListPersonalAccessTokens()**](UsersApi.md#managementServiceListPersonalAccessTokens) | **POST** /users/{userId}/pats/_search | Get a Personal-Access-Token (PAT) by ID
[**managementServiceListUserChanges()**](UsersApi.md#managementServiceListUserChanges) | **POST** /users/{userId}/changes/_search | Get User History
[**managementServiceListUserMemberships()**](UsersApi.md#managementServiceListUserMemberships) | **POST** /users/{userId}/memberships/_search | List ZITADEL Permissions
[**managementServiceListUserMetadata()**](UsersApi.md#managementServiceListUserMetadata) | **POST** /users/{id}/metadata/_search | Search User Metadata
[**managementServiceListUsers()**](UsersApi.md#managementServiceListUsers) | **POST** /users/_search | Search Users
[**managementServiceLockUser()**](UsersApi.md#managementServiceLockUser) | **POST** /users/{id}/_lock | Lock user
[**managementServiceReactivateUser()**](UsersApi.md#managementServiceReactivateUser) | **POST** /users/{id}/_reactivate | Reactivate user
[**managementServiceRemoveHumanAuthFactorOTP()**](UsersApi.md#managementServiceRemoveHumanAuthFactorOTP) | **DELETE** /users/{userId}/auth_factors/otp | Remove Multi-Factor OTP
[**managementServiceRemoveHumanAuthFactorOTPEmail()**](UsersApi.md#managementServiceRemoveHumanAuthFactorOTPEmail) | **DELETE** /users/{userId}/auth_factors/otp_email | Remove Multi-Factor OTP SMS
[**managementServiceRemoveHumanAuthFactorOTPSMS()**](UsersApi.md#managementServiceRemoveHumanAuthFactorOTPSMS) | **DELETE** /users/{userId}/auth_factors/otp_sms | Remove Multi-Factor OTP SMS
[**managementServiceRemoveHumanAuthFactorU2F()**](UsersApi.md#managementServiceRemoveHumanAuthFactorU2F) | **DELETE** /users/{userId}/auth_factors/u2f/{tokenId} | Remove Multi-Factor U2F
[**managementServiceRemoveHumanAvatar()**](UsersApi.md#managementServiceRemoveHumanAvatar) | **DELETE** /users/{userId}/avatar | Delete User Avatar (Human)
[**managementServiceRemoveHumanLinkedIDP()**](UsersApi.md#managementServiceRemoveHumanLinkedIDP) | **DELETE** /users/{userId}/idps/{idpId}/{linkedUserId} | Remove Social Login
[**managementServiceRemoveHumanPasswordless()**](UsersApi.md#managementServiceRemoveHumanPasswordless) | **DELETE** /users/{userId}/passwordless/{tokenId} | Delete Passwordless/Passkey
[**managementServiceRemoveHumanPhone()**](UsersApi.md#managementServiceRemoveHumanPhone) | **DELETE** /users/{userId}/phone | Remove User Phone (Human)
[**managementServiceRemoveMachineKey()**](UsersApi.md#managementServiceRemoveMachineKey) | **DELETE** /users/{userId}/keys/{keyId} | Delete Key for machine user
[**managementServiceRemoveMachineSecret()**](UsersApi.md#managementServiceRemoveMachineSecret) | **DELETE** /users/{userId}/secret | Delete Secret of Machine User
[**managementServiceRemovePersonalAccessToken()**](UsersApi.md#managementServiceRemovePersonalAccessToken) | **DELETE** /users/{userId}/pats/{tokenId} | Get a Personal-Access-Token (PAT) by ID
[**managementServiceRemoveUser()**](UsersApi.md#managementServiceRemoveUser) | **DELETE** /users/{id} | Delete user
[**managementServiceRemoveUserMetadata()**](UsersApi.md#managementServiceRemoveUserMetadata) | **DELETE** /users/{id}/metadata/{key} | Delete User Metadata By Key
[**managementServiceResendHumanEmailVerification()**](UsersApi.md#managementServiceResendHumanEmailVerification) | **POST** /users/{userId}/email/_resend_verification | Resend User Email Verification
[**managementServiceResendHumanInitialization()**](UsersApi.md#managementServiceResendHumanInitialization) | **POST** /users/{userId}/_resend_initialization | Resend User Initialization Email
[**managementServiceResendHumanPhoneVerification()**](UsersApi.md#managementServiceResendHumanPhoneVerification) | **POST** /users/{userId}/phone/_resend_verification | Resend User Phone Verification
[**managementServiceSendHumanResetPasswordNotification()**](UsersApi.md#managementServiceSendHumanResetPasswordNotification) | **POST** /users/{userId}/password/_reset | Send Reset Password Notification
[**managementServiceSendPasswordlessRegistration()**](UsersApi.md#managementServiceSendPasswordlessRegistration) | **POST** /users/{userId}/passwordless/_send_link | Send Passwordless/Passkey Registration Link
[**managementServiceSetHumanInitialPassword()**](UsersApi.md#managementServiceSetHumanInitialPassword) | **POST** /users/{userId}/password/_initialize | Set Human Initial Password  Deprecated: please use user service v2 SetPassword
[**managementServiceSetHumanPassword()**](UsersApi.md#managementServiceSetHumanPassword) | **POST** /users/{userId}/password | Set User Password
[**managementServiceSetUserMetadata()**](UsersApi.md#managementServiceSetUserMetadata) | **POST** /users/{id}/metadata/{key} | Set User Metadata
[**managementServiceUnlockUser()**](UsersApi.md#managementServiceUnlockUser) | **POST** /users/{id}/_unlock | Unlock user
[**managementServiceUpdateHumanEmail()**](UsersApi.md#managementServiceUpdateHumanEmail) | **PUT** /users/{userId}/email | Update User Email (Human)
[**managementServiceUpdateHumanPhone()**](UsersApi.md#managementServiceUpdateHumanPhone) | **PUT** /users/{userId}/phone | Update User Phone (Human)
[**managementServiceUpdateHumanProfile()**](UsersApi.md#managementServiceUpdateHumanProfile) | **PUT** /users/{userId}/profile | Update User Profile (Human)
[**managementServiceUpdateMachine()**](UsersApi.md#managementServiceUpdateMachine) | **PUT** /users/{userId}/machine | Update Machine User
[**managementServiceUpdateUserName()**](UsersApi.md#managementServiceUpdateUserName) | **PUT** /users/{userId}/username | Change user name


## `authServiceUpdateMyUserName()`

```php
authServiceUpdateMyUserName($body): \ArthurHlt\Zitadel\Model\V1UpdateMyUserNameResponse
```

Change My Username

Changes the username of the authenticated user. The user has to log in with the newly created username afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateMyUserNameRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateMyUserNameRequest

try {
    $result = $apiInstance->authServiceUpdateMyUserName($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->authServiceUpdateMyUserName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateMyUserNameRequest**](../Model/V1UpdateMyUserNameRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateMyUserNameResponse**](../Model/V1UpdateMyUserNameResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddHumanUser()`

```php
managementServiceAddHumanUser($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1AddHumanUserResponse
```

Deprecated: Create User (Human)

Create a new user with the type human. The newly created user will get an initialization email if either the email address is not marked as verified or no password is set. If a password is set the user will not be requested to set a new one on the first login.  Deprecated: use ImportHumanUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Managementv1AddHumanUserRequest(); // \ArthurHlt\Zitadel\Model\Managementv1AddHumanUserRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddHumanUser($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceAddHumanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Managementv1AddHumanUserRequest**](../Model/Managementv1AddHumanUserRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1AddHumanUserResponse**](../Model/Managementv1AddHumanUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddMachineKey()`

```php
managementServiceAddMachineKey($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddMachineKeyResponse
```

Create Key for machine user

If a public key is not supplied, a new key is generated and will be returned in the response. Make sure to store the returned key. If an RSA public key is supplied, the private key is omitted from the response. Machine keys are used to authenticate with jwt profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddMachineKeyBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddMachineKeyBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceAddMachineKey($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceAddMachineKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddMachineKeyBody**](../Model/ManagementServiceAddMachineKeyBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMachineKeyResponse**](../Model/V1AddMachineKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddMachineUser()`

```php
managementServiceAddMachineUser($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddMachineUserResponse
```

Create User (Machine)

Create a new user with the type machine for your API, service or device. These users are used for non-interactive authentication flows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddMachineUserRequest(); // \ArthurHlt\Zitadel\Model\V1AddMachineUserRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceAddMachineUser($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceAddMachineUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddMachineUserRequest**](../Model/V1AddMachineUserRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddMachineUserResponse**](../Model/V1AddMachineUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceAddPasswordlessRegistration: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddPersonalAccessToken()`

```php
managementServiceAddPersonalAccessToken($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddPersonalAccessTokenResponse
```

Create a Personal-Access-Token (PAT)

Generates a new PAT for the user. Currently only available for machine users. The token will be returned in the response, make sure to store it. PATs are ready-to-use tokens and can be sent directly in the authentication header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddPersonalAccessTokenBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddPersonalAccessTokenBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceAddPersonalAccessToken($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceAddPersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddPersonalAccessTokenBody**](../Model/ManagementServiceAddPersonalAccessTokenBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddPersonalAccessTokenResponse**](../Model/V1AddPersonalAccessTokenResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceBulkRemoveUserMetadata()`

```php
managementServiceBulkRemoveUserMetadata($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1BulkRemoveUserMetadataResponse
```

Bulk Delete Metadata

Remove a list of metadata objects from a user with a list of keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceBulkRemoveUserMetadataBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceBulkRemoveUserMetadataBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceBulkRemoveUserMetadata($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceBulkRemoveUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceBulkRemoveUserMetadataBody**](../Model/ManagementServiceBulkRemoveUserMetadataBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1BulkRemoveUserMetadataResponse**](../Model/V1BulkRemoveUserMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceBulkSetUserMetadata()`

```php
managementServiceBulkSetUserMetadata($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1BulkSetUserMetadataResponse
```

Bulk Set User Metadata

Add or update multiple metadata values for a user. Make sure the values are base64 encoded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceBulkSetUserMetadataBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceBulkSetUserMetadataBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceBulkSetUserMetadata($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceBulkSetUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceBulkSetUserMetadataBody**](../Model/ManagementServiceBulkSetUserMetadataBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1BulkSetUserMetadataResponse**](../Model/V1BulkSetUserMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeactivateUser()`

```php
managementServiceDeactivateUser($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1DeactivateUserResponse
```

Deactivate user

The state of the user will be changed to 'deactivated'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'deactivated'. Use deactivate user when the user should not be able to use the account anymore, but you still need access to the user data.  Deprecated: please use user service v2 DeactivateUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceDeactivateUser($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceDeactivateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1DeactivateUserResponse**](../Model/Managementv1DeactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGenerateMachineSecret()`

```php
managementServiceGenerateMachineSecret($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GenerateMachineSecretResponse
```

Create Secret for Machine User

Create a new secret for a machine user/service account. It is used to authenticate the user (client credential grant).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceGenerateMachineSecret($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceGenerateMachineSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GenerateMachineSecretResponse**](../Model/V1GenerateMachineSecretResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceGetHumanEmail: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceGetHumanPhone: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceGetHumanProfile: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetMachineKeyByIDs()`

```php
managementServiceGetMachineKeyByIDs($userId, $keyId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetMachineKeyByIDsResponse
```

Get Machine user Key By ID

Get a specific Key of a machine user by its id. Machine keys are used to authenticate with jwt profile authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$keyId = 'keyId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceGetMachineKeyByIDs($userId, $keyId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceGetMachineKeyByIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **keyId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMachineKeyByIDsResponse**](../Model/V1GetMachineKeyByIDsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetPersonalAccessTokenByIDs()`

```php
managementServiceGetPersonalAccessTokenByIDs($userId, $tokenId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetPersonalAccessTokenByIDsResponse
```

Get a Personal-Access-Token (PAT) by ID

Returns the PAT for a user, currently only available for machine users/service accounts. PATs are ready-to-use tokens and can be sent directly in the authentication header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$tokenId = 'tokenId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceGetPersonalAccessTokenByIDs($userId, $tokenId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceGetPersonalAccessTokenByIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **tokenId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetPersonalAccessTokenByIDsResponse**](../Model/V1GetPersonalAccessTokenByIDsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetUserByID()`

```php
managementServiceGetUserByID($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1GetUserByIDResponse
```

User by ID

Returns the full user object (human or machine) including the profile, email, etc.  Deprecated: please use user service v2 GetUserByID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User ID of the user you like to get.
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetUserByID($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceGetUserByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID of the user you like to get. |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1GetUserByIDResponse**](../Model/Managementv1GetUserByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetUserByLoginNameGlobal()`

```php
managementServiceGetUserByLoginNameGlobal($loginName): \ArthurHlt\Zitadel\Model\V1GetUserByLoginNameGlobalResponse
```

Get User by login name (globally)

Get a user by login name searched over all organizations. The request only returns data if the login name matches exactly.  Deprecated: please use user service v2 ListUsers, with LoginNameQuery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$loginName = 'loginName_example'; // string

try {
    $result = $apiInstance->managementServiceGetUserByLoginNameGlobal($loginName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceGetUserByLoginNameGlobal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loginName** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetUserByLoginNameGlobalResponse**](../Model/V1GetUserByLoginNameGlobalResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetUserMetadata()`

```php
managementServiceGetUserMetadata($id, $key, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetUserMetadataResponse
```

Get User Metadata By Key

Get a metadata object from a user by a specific key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$key = 'key_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetUserMetadata($id, $key, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceGetUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **key** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetUserMetadataResponse**](../Model/V1GetUserMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceImportHumanUser: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceIsUserUnique()`

```php
managementServiceIsUserUnique($userName, $email, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1IsUserUniqueResponse
```

Check for existing user

Returns if a user with the requested email or username is unique. So you can create the user.   Deprecated: please use user service v2 ListUsers, is unique when no user is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userName = 'userName_example'; // string
$email = 'email_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceIsUserUnique($userName, $email, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceIsUserUnique: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userName** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1IsUserUniqueResponse**](../Model/V1IsUserUniqueResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceListHumanAuthFactors: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListHumanLinkedIDPs()`

```php
managementServiceListHumanLinkedIDPs($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListHumanLinkedIDPsResponse
```

List Social Logins

Returns a list of all linked identity providers/social logins of the user. (e. Google, Microsoft, AzureAD, etc.).  Deprecated: please use user service v2 ListLinkedIDPs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListHumanLinkedIDPsBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListHumanLinkedIDPsBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get the result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListHumanLinkedIDPs($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListHumanLinkedIDPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListHumanLinkedIDPsBody**](../Model/ManagementServiceListHumanLinkedIDPsBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get the result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListHumanLinkedIDPsResponse**](../Model/V1ListHumanLinkedIDPsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceListHumanPasswordless: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListMachineKeys()`

```php
managementServiceListMachineKeys($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListMachineKeysResponse
```

Get Machine user Key By ID

Get the list of keys of a machine user. Machine keys are used to authenticate with jwt profile authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListMachineKeysBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListMachineKeysBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceListMachineKeys($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListMachineKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListMachineKeysBody**](../Model/ManagementServiceListMachineKeysBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMachineKeysResponse**](../Model/V1ListMachineKeysResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListPersonalAccessTokens()`

```php
managementServiceListPersonalAccessTokens($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListPersonalAccessTokensResponse
```

Get a Personal-Access-Token (PAT) by ID

Returns a list of PATs for a user, currently only available for machine users/service accounts. PATs are ready-to-use tokens and can be sent directly in the authentication header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListPersonalAccessTokensBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListPersonalAccessTokensBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceListPersonalAccessTokens($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListPersonalAccessTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListPersonalAccessTokensBody**](../Model/ManagementServiceListPersonalAccessTokensBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListPersonalAccessTokensResponse**](../Model/V1ListPersonalAccessTokensResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListUserChanges()`

```php
managementServiceListUserChanges($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListUserChangesResponse
```

Get User History

Returns a list of changes/events that have happened on the user. It's the history of the user. Make sure to send a limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListUserChangesBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListUserChangesBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListUserChanges($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListUserChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListUserChangesBody**](../Model/ManagementServiceListUserChangesBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListUserChangesResponse**](../Model/V1ListUserChangesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListUserMemberships()`

```php
managementServiceListUserMemberships($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListUserMembershipsResponse
```

List ZITADEL Permissions

Show all the permissions the user has in ZITADEL (ZITADEL Manager).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string | list limitations and ordering
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListUserMembershipsBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListUserMembershipsBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get the result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListUserMemberships($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListUserMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| list limitations and ordering |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListUserMembershipsBody**](../Model/ManagementServiceListUserMembershipsBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get the result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListUserMembershipsResponse**](../Model/V1ListUserMembershipsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListUserMetadata()`

```php
managementServiceListUserMetadata($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListUserMetadataResponse
```

Search User Metadata

Get the metadata of a user filtered by your query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListUserMetadataBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListUserMetadataBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListUserMetadata($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListUserMetadataBody**](../Model/ManagementServiceListUserMetadataBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListUserMetadataResponse**](../Model/V1ListUserMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListUsers()`

```php
managementServiceListUsers($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1ListUsersResponse
```

Search Users

Search for users within an organization. By default, we will return users of your organization. Make sure to include a limit and sorting for pagination.  Deprecated: please use user service v2 ListUsers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Managementv1ListUsersRequest(); // \ArthurHlt\Zitadel\Model\Managementv1ListUsersRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListUsers($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceListUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Managementv1ListUsersRequest**](../Model/Managementv1ListUsersRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1ListUsersResponse**](../Model/Managementv1ListUsersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceLockUser()`

```php
managementServiceLockUser($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1LockUserResponse
```

Lock user

The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.),  Deprecated: please use user service v2 LockUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceLockUser($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceLockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1LockUserResponse**](../Model/Managementv1LockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceReactivateUser()`

```php
managementServiceReactivateUser($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1ReactivateUserResponse
```

Reactivate user

Reactivate a user with the state 'deactivated'. The user will be able to log in again afterward. The endpoint returns an error if the user is not in the state 'deactivated'.  Deprecated: please use user service v2 ReactivateUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceReactivateUser($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceReactivateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1ReactivateUserResponse**](../Model/Managementv1ReactivateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanAuthFactorOTP: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanAuthFactorOTPEmail: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanAuthFactorOTPSMS: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanAuthFactorU2F: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanAvatar: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveHumanLinkedIDP()`

```php
managementServiceRemoveHumanLinkedIDP($userId, $idpId, $linkedUserId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveHumanLinkedIDPResponse
```

Remove Social Login

Remove a configured social logins/identity providers of the user (e.g. Google, Microsoft, AzureAD, etc.). The user will not be able to log in with the given provider afterward. Make sure the user does have other possibilities to authenticate.  Deprecated: please use user service v2 RemoveLinkedIDP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$idpId = 'idpId_example'; // string
$linkedUserId = 'linkedUserId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get the result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveHumanLinkedIDP($userId, $idpId, $linkedUserId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanLinkedIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **idpId** | **string**|  |
 **linkedUserId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get the result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveHumanLinkedIDPResponse**](../Model/V1RemoveHumanLinkedIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanPasswordless: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceRemoveHumanPhone: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveMachineKey()`

```php
managementServiceRemoveMachineKey($userId, $keyId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveMachineKeyResponse
```

Delete Key for machine user

Delete a specific key from a user. The user will not be able to authenticate with that key afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$keyId = 'keyId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveMachineKey($userId, $keyId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceRemoveMachineKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **keyId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMachineKeyResponse**](../Model/V1RemoveMachineKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveMachineSecret()`

```php
managementServiceRemoveMachineSecret($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveMachineSecretResponse
```

Delete Secret of Machine User

Delete a secret of a machine user/service account. The user will not be able to authenticate with the secret afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveMachineSecret($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceRemoveMachineSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMachineSecretResponse**](../Model/V1RemoveMachineSecretResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemovePersonalAccessToken()`

```php
managementServiceRemovePersonalAccessToken($userId, $tokenId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemovePersonalAccessTokenResponse
```

Get a Personal-Access-Token (PAT) by ID

Delete a PAT from a user. Afterward, the user will not be able to authenticate with that token anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$tokenId = 'tokenId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a result from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemovePersonalAccessToken($userId, $tokenId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceRemovePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **tokenId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a result from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemovePersonalAccessTokenResponse**](../Model/V1RemovePersonalAccessTokenResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveUser()`

```php
managementServiceRemoveUser($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveUserResponse
```

Delete user

The state of the user will be changed to 'deleted'. The user will not be able to log in anymore. Endpoints requesting this user will return an error 'User not found.  Deprecated: please use user service v2 RemoveUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceRemoveUser($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceRemoveUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveUserResponse**](../Model/V1RemoveUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveUserMetadata()`

```php
managementServiceRemoveUserMetadata($id, $key, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveUserMetadataResponse
```

Delete User Metadata By Key

Remove a metadata object from a user with a specific key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$key = 'key_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveUserMetadata($id, $key, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceRemoveUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **key** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveUserMetadataResponse**](../Model/V1RemoveUserMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceResendHumanEmailVerification: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceResendHumanInitialization: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceResendHumanPhoneVerification: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceSendHumanResetPasswordNotification: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceSendPasswordlessRegistration: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceSetHumanInitialPassword: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceSetHumanPassword: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSetUserMetadata()`

```php
managementServiceSetUserMetadata($id, $key, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SetUserMetadataResponse
```

Set User Metadata

This endpoint either adds or updates a metadata value for the requested key. Make sure the value is base64 encoded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$key = 'key_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceSetUserMetadataBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceSetUserMetadataBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceSetUserMetadata($id, $key, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceSetUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **key** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceSetUserMetadataBody**](../Model/ManagementServiceSetUserMetadataBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetUserMetadataResponse**](../Model/V1SetUserMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUnlockUser()`

```php
managementServiceUnlockUser($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Managementv1UnlockUserResponse
```

Unlock user

Unlock a user with the state 'locked'. The user will be able to log in again afterward. The endpoint returns an error if the user is not in the state 'locked'.  Deprecated: please use user service v2 UnlockUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceUnlockUser($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceUnlockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Managementv1UnlockUserResponse**](../Model/Managementv1UnlockUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceUpdateHumanEmail: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceUpdateHumanPhone: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->managementServiceUpdateHumanProfile: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateMachine()`

```php
managementServiceUpdateMachine($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateMachineResponse
```

Update Machine User

Change a service account/machine user. It is used for accounts with non-interactive authentication possibilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateMachineBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateMachineBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceUpdateMachine($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceUpdateMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateMachineBody**](../Model/ManagementServiceUpdateMachineBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to update a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateMachineResponse**](../Model/V1UpdateMachineResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateUserName()`

```php
managementServiceUpdateUserName($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateUserNameResponse
```

Change user name

Change the username of the user. Be aware that the user has to log in with the newly added username afterward.  Deprecated: please use user service v2 UpdateHumanUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateUserNameBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateUserNameBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization.

try {
    $result = $apiInstance->managementServiceUpdateUserName($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->managementServiceUpdateUserName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateUserNameBody**](../Model/ManagementServiceUpdateUserNameBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get a user from another organization include the header. Make sure the requesting user has permission in the requested organization. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateUserNameResponse**](../Model/V1UpdateUserNameResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
