# ArthurHlt\Zitadel\OrganizationMetadataApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceBulkRemoveOrgMetadata()**](OrganizationMetadataApi.md#managementServiceBulkRemoveOrgMetadata) | **DELETE** /metadata/_bulk | Bulk Delete Metadata
[**managementServiceBulkSetOrgMetadata()**](OrganizationMetadataApi.md#managementServiceBulkSetOrgMetadata) | **POST** /metadata/_bulk | Bulk Set Organization Metadata
[**managementServiceGetOrgMetadata()**](OrganizationMetadataApi.md#managementServiceGetOrgMetadata) | **GET** /metadata/{key} | Get Organization Metadata By Key
[**managementServiceListOrgMetadata()**](OrganizationMetadataApi.md#managementServiceListOrgMetadata) | **POST** /metadata/_search | Search Organization Metadata
[**managementServiceRemoveOrgMetadata()**](OrganizationMetadataApi.md#managementServiceRemoveOrgMetadata) | **DELETE** /metadata/{key} | Delete Organization Metadata By Key
[**managementServiceSetOrgMetadata()**](OrganizationMetadataApi.md#managementServiceSetOrgMetadata) | **POST** /metadata/{key} | Set Organization Metadata


## `managementServiceBulkRemoveOrgMetadata()`

```php
managementServiceBulkRemoveOrgMetadata($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1BulkRemoveOrgMetadataResponse
```

Bulk Delete Metadata

Remove a list of metadata objects from an organization with a list of keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1BulkRemoveOrgMetadataRequest(); // \ArthurHlt\Zitadel\Model\V1BulkRemoveOrgMetadataRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceBulkRemoveOrgMetadata($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationMetadataApi->managementServiceBulkRemoveOrgMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1BulkRemoveOrgMetadataRequest**](../Model/V1BulkRemoveOrgMetadataRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1BulkRemoveOrgMetadataResponse**](../Model/V1BulkRemoveOrgMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceBulkSetOrgMetadata()`

```php
managementServiceBulkSetOrgMetadata($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1BulkSetOrgMetadataResponse
```

Bulk Set Organization Metadata

This endpoint sets a list of metadata to the organization. Make sure the values are base64 encoded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1BulkSetOrgMetadataRequest(); // \ArthurHlt\Zitadel\Model\V1BulkSetOrgMetadataRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceBulkSetOrgMetadata($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationMetadataApi->managementServiceBulkSetOrgMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1BulkSetOrgMetadataRequest**](../Model/V1BulkSetOrgMetadataRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1BulkSetOrgMetadataResponse**](../Model/V1BulkSetOrgMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetOrgMetadata()`

```php
managementServiceGetOrgMetadata($key, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetOrgMetadataResponse
```

Get Organization Metadata By Key

Get a metadata object from an organization by a specific key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetOrgMetadata($key, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationMetadataApi->managementServiceGetOrgMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetOrgMetadataResponse**](../Model/V1GetOrgMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListOrgMetadata()`

```php
managementServiceListOrgMetadata($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListOrgMetadataResponse
```

Search Organization Metadata

Get the metadata of an organization filtered by your query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListOrgMetadataRequest(); // \ArthurHlt\Zitadel\Model\V1ListOrgMetadataRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListOrgMetadata($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationMetadataApi->managementServiceListOrgMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListOrgMetadataRequest**](../Model/V1ListOrgMetadataRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListOrgMetadataResponse**](../Model/V1ListOrgMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveOrgMetadata()`

```php
managementServiceRemoveOrgMetadata($key, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveOrgMetadataResponse
```

Delete Organization Metadata By Key

Remove a metadata object from an organization with a specific key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveOrgMetadata($key, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationMetadataApi->managementServiceRemoveOrgMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveOrgMetadataResponse**](../Model/V1RemoveOrgMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSetOrgMetadata()`

```php
managementServiceSetOrgMetadata($key, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SetOrgMetadataResponse
```

Set Organization Metadata

This endpoint either adds or updates a metadata value for the requested key. Make sure the value is base64 encoded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationMetadataApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceSetOrgMetadataBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceSetOrgMetadataBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceSetOrgMetadata($key, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationMetadataApi->managementServiceSetOrgMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceSetOrgMetadataBody**](../Model/ManagementServiceSetOrgMetadataBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetOrgMetadataResponse**](../Model/V1SetOrgMetadataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
