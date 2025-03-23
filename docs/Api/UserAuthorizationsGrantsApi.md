# ArthurHlt\Zitadel\UserAuthorizationsGrantsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceListMyProjectOrgs()**](UserAuthorizationsGrantsApi.md#authServiceListMyProjectOrgs) | **POST** /global/projectorgs/_search | List My Organizations
[**authServiceListMyProjectPermissions()**](UserAuthorizationsGrantsApi.md#authServiceListMyProjectPermissions) | **POST** /permissions/me/_search | List My Project Roles
[**authServiceListMyUserGrants()**](UserAuthorizationsGrantsApi.md#authServiceListMyUserGrants) | **POST** /usergrants/me/_search | List My Authorizations/Grants
[**authServiceListMyZitadelPermissions()**](UserAuthorizationsGrantsApi.md#authServiceListMyZitadelPermissions) | **POST** /permissions/zitadel/me/_search | List My ZITADEL Permissions


## `authServiceListMyProjectOrgs()`

```php
authServiceListMyProjectOrgs($body): \ArthurHlt\Zitadel\Model\V1ListMyProjectOrgsResponse
```

List My Organizations

Returns a list of the organizations where the authenticated user has any authorizations/user grants. The request is made in the context of the requested project. This request can be used in multi-tenancy applications to show the user a tenant switcher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthorizationsGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMyProjectOrgsRequest(); // \ArthurHlt\Zitadel\Model\V1ListMyProjectOrgsRequest

try {
    $result = $apiInstance->authServiceListMyProjectOrgs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthorizationsGrantsApi->authServiceListMyProjectOrgs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMyProjectOrgsRequest**](../Model/V1ListMyProjectOrgsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyProjectOrgsResponse**](../Model/V1ListMyProjectOrgsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyProjectPermissions()`

```php
authServiceListMyProjectPermissions(): \ArthurHlt\Zitadel\Model\V1ListMyProjectPermissionsResponse
```

List My Project Roles

Returns a list of roles for the authenticated user and for the requesting project (based on the token).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthorizationsGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceListMyProjectPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthorizationsGrantsApi->authServiceListMyProjectPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyProjectPermissionsResponse**](../Model/V1ListMyProjectPermissionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyUserGrants()`

```php
authServiceListMyUserGrants($body): \ArthurHlt\Zitadel\Model\V1ListMyUserGrantsResponse
```

List My Authorizations/Grants

Returns a list of the authorizations/user grants the authenticated user has. User grants consist of an organization, a project and 1-n roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthorizationsGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMyUserGrantsRequest(); // \ArthurHlt\Zitadel\Model\V1ListMyUserGrantsRequest

try {
    $result = $apiInstance->authServiceListMyUserGrants($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthorizationsGrantsApi->authServiceListMyUserGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMyUserGrantsRequest**](../Model/V1ListMyUserGrantsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyUserGrantsResponse**](../Model/V1ListMyUserGrantsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyZitadelPermissions()`

```php
authServiceListMyZitadelPermissions(): \ArthurHlt\Zitadel\Model\V1ListMyZitadelPermissionsResponse
```

List My ZITADEL Permissions

Returns a list of permissions the authenticated user has in ZITADEL based on the manager roles the user has. (e.g: ORG_OWNER = org.read, org.write, ...).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserAuthorizationsGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceListMyZitadelPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAuthorizationsGrantsApi->authServiceListMyZitadelPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyZitadelPermissionsResponse**](../Model/V1ListMyZitadelPermissionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
