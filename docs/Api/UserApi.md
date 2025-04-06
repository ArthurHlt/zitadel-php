# ArthurHlt\Zitadel\UserApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyUser()**](UserApi.md#authServiceGetMyUser) | **GET** /users/me | Get my user
[**authServiceListMyUserChanges()**](UserApi.md#authServiceListMyUserChanges) | **POST** /users/me/changes/_search | Get My User History
[**authServiceListMyUserSessions()**](UserApi.md#authServiceListMyUserSessions) | **POST** /users/me/sessions/_search | Get My User Sessions
[**authServiceRemoveMyAvatar()**](UserApi.md#authServiceRemoveMyAvatar) | **DELETE** /users/me/avatar | Remove My Avatar
[**authServiceRemoveMyUser()**](UserApi.md#authServiceRemoveMyUser) | **DELETE** /users/me | Delete my user


## `authServiceGetMyUser()`

```php
authServiceGetMyUser(): \ArthurHlt\Zitadel\Model\V1GetMyUserResponse
```

Get my user

Returns the full user object of the authenticated user including the profile, email, phone, etc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authServiceGetMyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyUserResponse**](../Model/V1GetMyUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyUserChanges()`

```php
authServiceListMyUserChanges($body): \ArthurHlt\Zitadel\Model\V1ListMyUserChangesResponse
```

Get My User History

Returns a list of changes/events that have happened on the authenticated user. It's the history of the user. Make sure to send a limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMyUserChangesRequest(); // \ArthurHlt\Zitadel\Model\V1ListMyUserChangesRequest

try {
    $result = $apiInstance->authServiceListMyUserChanges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authServiceListMyUserChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMyUserChangesRequest**](../Model/V1ListMyUserChangesRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyUserChangesResponse**](../Model/V1ListMyUserChangesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyUserSessions()`

```php
authServiceListMyUserSessions($body): \ArthurHlt\Zitadel\Model\V1ListMyUserSessionsResponse
```

Get My User Sessions

Returns a list of a user session for the user agent of the authenticated user. This can be used to switch accounts in the current application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->authServiceListMyUserSessions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authServiceListMyUserSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyUserSessionsResponse**](../Model/V1ListMyUserSessionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyAvatar()`

```php
authServiceRemoveMyAvatar(): \ArthurHlt\Zitadel\Model\V1RemoveMyAvatarResponse
```

Remove My Avatar

Remove the avatar of the authenticated user. If no avatar is set a shortcut of the name of the user will be presented.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRemoveMyAvatar();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authServiceRemoveMyAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyAvatarResponse**](../Model/V1RemoveMyAvatarResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyUser()`

```php
authServiceRemoveMyUser(): \ArthurHlt\Zitadel\Model\V1RemoveMyUserResponse
```

Delete my user

Deletes the currently authenticated user. All authentication tokens will be removed and the user will not be able to make any request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRemoveMyUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authServiceRemoveMyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyUserResponse**](../Model/V1RemoveMyUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
