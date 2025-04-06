# ArthurHlt\Zitadel\ProjectRolesApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceAddProjectRole()**](ProjectRolesApi.md#managementServiceAddProjectRole) | **POST** /projects/{projectId}/roles | Add Project Role
[**managementServiceBulkAddProjectRoles()**](ProjectRolesApi.md#managementServiceBulkAddProjectRoles) | **POST** /projects/{projectId}/roles/_bulk | Bulk Add Project Role
[**managementServiceListProjectRoles()**](ProjectRolesApi.md#managementServiceListProjectRoles) | **POST** /projects/{projectId}/roles/_search | Search Project Roles
[**managementServiceRemoveProjectRole()**](ProjectRolesApi.md#managementServiceRemoveProjectRole) | **DELETE** /projects/{projectId}/roles/{roleKey} | Remove Project Role
[**managementServiceUpdateProjectRole()**](ProjectRolesApi.md#managementServiceUpdateProjectRole) | **PUT** /projects/{projectId}/roles/{roleKey} | Change Project Role


## `managementServiceAddProjectRole()`

```php
managementServiceAddProjectRole($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddProjectRoleResponse
```

Add Project Role

Add a new project role to a project. The key must be unique within the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectRoleBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectRoleBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddProjectRole($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->managementServiceAddProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddProjectRoleBody**](../Model/ManagementServiceAddProjectRoleBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddProjectRoleResponse**](../Model/V1AddProjectRoleResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceBulkAddProjectRoles()`

```php
managementServiceBulkAddProjectRoles($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1BulkAddProjectRolesResponse
```

Bulk Add Project Role

Add a list of roles to a project. The keys must be unique within the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceBulkAddProjectRolesBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceBulkAddProjectRolesBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceBulkAddProjectRoles($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->managementServiceBulkAddProjectRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceBulkAddProjectRolesBody**](../Model/ManagementServiceBulkAddProjectRolesBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1BulkAddProjectRolesResponse**](../Model/V1BulkAddProjectRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectRoles()`

```php
managementServiceListProjectRoles($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectRolesResponse
```

Search Project Roles

Returns all roles of a project matching the search query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListProjectRolesBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListProjectRolesBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectRoles($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->managementServiceListProjectRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListProjectRolesBody**](../Model/ManagementServiceListProjectRolesBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectRolesResponse**](../Model/V1ListProjectRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveProjectRole()`

```php
managementServiceRemoveProjectRole($projectId, $roleKey, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveProjectRoleResponse
```

Remove Project Role

Removes the role from the project and on every resource it has a dependency. This includes project grants and user grants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$roleKey = 'roleKey_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveProjectRole($projectId, $roleKey, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->managementServiceRemoveProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **roleKey** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveProjectRoleResponse**](../Model/V1RemoveProjectRoleResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateProjectRole()`

```php
managementServiceUpdateProjectRole($projectId, $roleKey, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateProjectRoleResponse
```

Change Project Role

Change a project role. The key is not editable. If a key should change, remove the role and create a new one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectRolesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$roleKey = 'roleKey_example'; // string | The key is the only relevant attribute for ZITADEL regarding the authorization checks.
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectRoleBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectRoleBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateProjectRole($projectId, $roleKey, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectRolesApi->managementServiceUpdateProjectRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **roleKey** | **string**| The key is the only relevant attribute for ZITADEL regarding the authorization checks. |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectRoleBody**](../Model/ManagementServiceUpdateProjectRoleBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateProjectRoleResponse**](../Model/V1UpdateProjectRoleResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
