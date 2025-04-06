# ArthurHlt\Zitadel\ZITADELUserSchemasApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zITADELUserSchemasCreateUserSchema()**](ZITADELUserSchemasApi.md#zITADELUserSchemasCreateUserSchema) | **POST** /resources/v3alpha/user_schemas | Create a user schema
[**zITADELUserSchemasDeactivateUserSchema()**](ZITADELUserSchemasApi.md#zITADELUserSchemasDeactivateUserSchema) | **POST** /resources/v3alpha/user_schemas/{id}/_deactivate | Deactivate a user schema
[**zITADELUserSchemasDeleteUserSchema()**](ZITADELUserSchemasApi.md#zITADELUserSchemasDeleteUserSchema) | **DELETE** /resources/v3alpha/user_schemas/{id} | Delete a user schema
[**zITADELUserSchemasGetUserSchema()**](ZITADELUserSchemasApi.md#zITADELUserSchemasGetUserSchema) | **GET** /resources/v3alpha/user_schemas/{id} | User schema by ID
[**zITADELUserSchemasPatchUserSchema()**](ZITADELUserSchemasApi.md#zITADELUserSchemasPatchUserSchema) | **PATCH** /resources/v3alpha/user_schemas/{id} | Patch a user schema
[**zITADELUserSchemasReactivateUserSchema()**](ZITADELUserSchemasApi.md#zITADELUserSchemasReactivateUserSchema) | **POST** /resources/v3alpha/user_schemas/{id}/_reactivate | Reactivate a user schema
[**zITADELUserSchemasSearchUserSchemas()**](ZITADELUserSchemasApi.md#zITADELUserSchemasSearchUserSchemas) | **POST** /resources/v3alpha/user_schemas/_search | Search user schemas


## `zITADELUserSchemasCreateUserSchema()`

```php
zITADELUserSchemasCreateUserSchema($userSchema, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaCreateUserSchemaResponse
```

Create a user schema

Create the first revision of a new user schema. The schema can then be used on users to store and validate their data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userSchema = new \ArthurHlt\Zitadel\Model\V3alphaUserSchema(); // \ArthurHlt\Zitadel\Model\V3alphaUserSchema
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELUserSchemasCreateUserSchema($userSchema, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasCreateUserSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userSchema** | [**\ArthurHlt\Zitadel\Model\V3alphaUserSchema**](../Model/V3alphaUserSchema.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaCreateUserSchemaResponse**](../Model/V3alphaCreateUserSchemaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUserSchemasDeactivateUserSchema()`

```php
zITADELUserSchemasDeactivateUserSchema($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaDeactivateUserSchemaResponse
```

Deactivate a user schema

Deactivate an existing user schema and change it into a read-only state. Users based on this schema cannot be updated anymore, but are still able to authenticate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the schema.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELUserSchemasDeactivateUserSchema($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasDeactivateUserSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the schema. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaDeactivateUserSchemaResponse**](../Model/V3alphaDeactivateUserSchemaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUserSchemasDeleteUserSchema()`

```php
zITADELUserSchemasDeleteUserSchema($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaDeleteUserSchemaResponse
```

Delete a user schema

Delete an existing user schema. This operation is only allowed if there are no associated users to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the schema.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELUserSchemasDeleteUserSchema($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasDeleteUserSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the schema. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaDeleteUserSchemaResponse**](../Model/V3alphaDeleteUserSchemaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUserSchemasGetUserSchema()`

```php
zITADELUserSchemasGetUserSchema($id): \ArthurHlt\Zitadel\Model\V3alphaGetUserSchemaResponse
```

User schema by ID

Returns the user schema identified by the requested ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the schema.

try {
    $result = $apiInstance->zITADELUserSchemasGetUserSchema($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasGetUserSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the schema. |

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaGetUserSchemaResponse**](../Model/V3alphaGetUserSchemaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUserSchemasPatchUserSchema()`

```php
zITADELUserSchemasPatchUserSchema($id, $userSchema, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaPatchUserSchemaResponse
```

Patch a user schema

Patch an existing user schema to a new revision. Users based on the current revision will not be affected until they are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the schema.
$userSchema = new \ArthurHlt\Zitadel\Model\Userschemav3alphaPatchUserSchema(); // \ArthurHlt\Zitadel\Model\Userschemav3alphaPatchUserSchema
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELUserSchemasPatchUserSchema($id, $userSchema, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasPatchUserSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the schema. |
 **userSchema** | [**\ArthurHlt\Zitadel\Model\Userschemav3alphaPatchUserSchema**](../Model/Userschemav3alphaPatchUserSchema.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaPatchUserSchemaResponse**](../Model/V3alphaPatchUserSchemaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUserSchemasReactivateUserSchema()`

```php
zITADELUserSchemasReactivateUserSchema($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaReactivateUserSchemaResponse
```

Reactivate a user schema

Reactivate an previously deactivated user schema and change it into an active state again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | unique identifier of the schema.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELUserSchemasReactivateUserSchema($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasReactivateUserSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| unique identifier of the schema. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaReactivateUserSchemaResponse**](../Model/V3alphaReactivateUserSchemaResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELUserSchemasSearchUserSchemas()`

```php
zITADELUserSchemasSearchUserSchemas($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn): \ArthurHlt\Zitadel\Model\V3alphaSearchUserSchemasResponse
```

Search user schemas

Search all matching user schemas. By default, we will return all user schema of your instance. Make sure to include a limit and sorting for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELUserSchemasApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filters = array(new \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaSearchFilter()); // \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaSearchFilter[] | Define the criteria to filter for.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error.
$queryDesc = True; // bool | default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results.
$sortingColumn = 'FIELD_NAME_UNSPECIFIED'; // string | The field the result is sorted by. The default is the creation date. Beware that if you change this, your result pagination might be inconsistent.

try {
    $result = $apiInstance->zITADELUserSchemasSearchUserSchemas($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELUserSchemasApi->zITADELUserSchemasSearchUserSchemas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | [**\ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaSearchFilter[]**](../Model/Resourcesuserschemav3alphaSearchFilter.md)| Define the criteria to filter for. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error. | [optional]
 **queryDesc** | **bool**| default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results. | [optional]
 **sortingColumn** | **string**| The field the result is sorted by. The default is the creation date. Beware that if you change this, your result pagination might be inconsistent. | [optional] [default to &#39;FIELD_NAME_UNSPECIFIED&#39;]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSearchUserSchemasResponse**](../Model/V3alphaSearchUserSchemasResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
