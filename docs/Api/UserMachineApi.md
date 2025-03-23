# ArthurHlt\Zitadel\UserMachineApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceAddMachineKey()**](UserMachineApi.md#managementServiceAddMachineKey) | **POST** /users/{userId}/keys | Create Key for machine user
[**managementServiceAddMachineUser()**](UserMachineApi.md#managementServiceAddMachineUser) | **POST** /users/machine | Create User (Machine)
[**managementServiceAddPersonalAccessToken()**](UserMachineApi.md#managementServiceAddPersonalAccessToken) | **POST** /users/{userId}/pats | Create a Personal-Access-Token (PAT)
[**managementServiceGenerateMachineSecret()**](UserMachineApi.md#managementServiceGenerateMachineSecret) | **PUT** /users/{userId}/secret | Create Secret for Machine User
[**managementServiceGetMachineKeyByIDs()**](UserMachineApi.md#managementServiceGetMachineKeyByIDs) | **GET** /users/{userId}/keys/{keyId} | Get Machine user Key By ID
[**managementServiceGetPersonalAccessTokenByIDs()**](UserMachineApi.md#managementServiceGetPersonalAccessTokenByIDs) | **GET** /users/{userId}/pats/{tokenId} | Get a Personal-Access-Token (PAT) by ID
[**managementServiceListMachineKeys()**](UserMachineApi.md#managementServiceListMachineKeys) | **POST** /users/{userId}/keys/_search | Get Machine user Key By ID
[**managementServiceListPersonalAccessTokens()**](UserMachineApi.md#managementServiceListPersonalAccessTokens) | **POST** /users/{userId}/pats/_search | Get a Personal-Access-Token (PAT) by ID
[**managementServiceRemoveMachineKey()**](UserMachineApi.md#managementServiceRemoveMachineKey) | **DELETE** /users/{userId}/keys/{keyId} | Delete Key for machine user
[**managementServiceRemoveMachineSecret()**](UserMachineApi.md#managementServiceRemoveMachineSecret) | **DELETE** /users/{userId}/secret | Delete Secret of Machine User
[**managementServiceRemovePersonalAccessToken()**](UserMachineApi.md#managementServiceRemovePersonalAccessToken) | **DELETE** /users/{userId}/pats/{tokenId} | Get a Personal-Access-Token (PAT) by ID
[**managementServiceUpdateMachine()**](UserMachineApi.md#managementServiceUpdateMachine) | **PUT** /users/{userId}/machine | Update Machine User


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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceAddMachineKey: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceAddMachineUser: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceAddPersonalAccessToken: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceGenerateMachineSecret: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceGetMachineKeyByIDs: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceGetPersonalAccessTokenByIDs: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceListMachineKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceListPersonalAccessTokens: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceRemoveMachineKey: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceRemoveMachineSecret: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceRemovePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMachineApi(
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
    echo 'Exception when calling UserMachineApi->managementServiceUpdateMachine: ', $e->getMessage(), PHP_EOL;
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
