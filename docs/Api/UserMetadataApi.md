# ArthurHlt\Zitadel\UserMetadataApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyMetadata()**](UserMetadataApi.md#authServiceGetMyMetadata) | **GET** /users/me/metadata/{key} | Get My User Metadata By Key
[**authServiceListMyMetadata()**](UserMetadataApi.md#authServiceListMyMetadata) | **POST** /users/me/metadata/_search | Get My User Metadata
[**managementServiceBulkRemoveUserMetadata()**](UserMetadataApi.md#managementServiceBulkRemoveUserMetadata) | **DELETE** /users/{id}/metadata/_bulk | Bulk Delete Metadata
[**managementServiceBulkSetUserMetadata()**](UserMetadataApi.md#managementServiceBulkSetUserMetadata) | **POST** /users/{id}/metadata/_bulk | Bulk Set User Metadata
[**managementServiceGetUserMetadata()**](UserMetadataApi.md#managementServiceGetUserMetadata) | **GET** /users/{id}/metadata/{key} | Get User Metadata By Key
[**managementServiceListUserMetadata()**](UserMetadataApi.md#managementServiceListUserMetadata) | **POST** /users/{id}/metadata/_search | Search User Metadata
[**managementServiceRemoveUserMetadata()**](UserMetadataApi.md#managementServiceRemoveUserMetadata) | **DELETE** /users/{id}/metadata/{key} | Delete User Metadata By Key
[**managementServiceSetUserMetadata()**](UserMetadataApi.md#managementServiceSetUserMetadata) | **POST** /users/{id}/metadata/{key} | Set User Metadata


## `authServiceGetMyMetadata()`

```php
authServiceGetMyMetadata($key): \ArthurHlt\Zitadel\Model\V1GetMyMetadataResponse
```

Get My User Metadata By Key

Returns a metadata value by a specific key of the authenticated user. Metadata is a key value list with additional information needed on the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string

try {
    $result = $apiInstance->authServiceGetMyMetadata($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMetadataApi->authServiceGetMyMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyMetadataResponse**](../Model/V1GetMyMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceListMyMetadata()`

```php
authServiceListMyMetadata($body): \ArthurHlt\Zitadel\Model\V1ListMyMetadataResponse
```

Get My User Metadata

Returns a list of metadata of the authenticated user. Metadata is a key value list with additional information needed on the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMyMetadataRequest(); // \ArthurHlt\Zitadel\Model\V1ListMyMetadataRequest

try {
    $result = $apiInstance->authServiceListMyMetadata($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMetadataApi->authServiceListMyMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMyMetadataRequest**](../Model/V1ListMyMetadataRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyMetadataResponse**](../Model/V1ListMyMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
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
    echo 'Exception when calling UserMetadataApi->managementServiceBulkRemoveUserMetadata: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
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
    echo 'Exception when calling UserMetadataApi->managementServiceBulkSetUserMetadata: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
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
    echo 'Exception when calling UserMetadataApi->managementServiceGetUserMetadata: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
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
    echo 'Exception when calling UserMetadataApi->managementServiceListUserMetadata: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
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
    echo 'Exception when calling UserMetadataApi->managementServiceRemoveUserMetadata: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\UserMetadataApi(
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
    echo 'Exception when calling UserMetadataApi->managementServiceSetUserMetadata: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
