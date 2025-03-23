# ArthurHlt\Zitadel\ProjectGrantsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceAddProjectGrant()**](ProjectGrantsApi.md#managementServiceAddProjectGrant) | **POST** /projects/{projectId}/grants | Add Project Grant
[**managementServiceAddProjectGrantMember()**](ProjectGrantsApi.md#managementServiceAddProjectGrantMember) | **POST** /projects/{projectId}/grants/{grantId}/members | Add Project Grant Member
[**managementServiceDeactivateProjectGrant()**](ProjectGrantsApi.md#managementServiceDeactivateProjectGrant) | **POST** /projects/{projectId}/grants/{grantId}/_deactivate | Deactivate Project Grant
[**managementServiceListAllProjectGrants()**](ProjectGrantsApi.md#managementServiceListAllProjectGrants) | **POST** /projectgrants/_search | Search Project Grants
[**managementServiceListProjectGrantMemberRoles()**](ProjectGrantsApi.md#managementServiceListProjectGrantMemberRoles) | **POST** /projects/grants/members/roles/_search | List Project Grant Member Roles
[**managementServiceListProjectGrantMembers()**](ProjectGrantsApi.md#managementServiceListProjectGrantMembers) | **POST** /projects/{projectId}/grants/{grantId}/members/_search | List Project Grant Members
[**managementServiceListProjectGrants()**](ProjectGrantsApi.md#managementServiceListProjectGrants) | **POST** /projects/{projectId}/grants/_search | Search Project Grants from Project
[**managementServiceReactivateProjectGrant()**](ProjectGrantsApi.md#managementServiceReactivateProjectGrant) | **POST** /projects/{projectId}/grants/{grantId}/_reactivate | Reactivate Project Grant
[**managementServiceRemoveProjectGrant()**](ProjectGrantsApi.md#managementServiceRemoveProjectGrant) | **DELETE** /projects/{projectId}/grants/{grantId} | Remove Project Grant
[**managementServiceRemoveProjectGrantMember()**](ProjectGrantsApi.md#managementServiceRemoveProjectGrantMember) | **DELETE** /projects/{projectId}/grants/{grantId}/members/{userId} | Remove Project Grant Member
[**managementServiceUpdateProjectGrant()**](ProjectGrantsApi.md#managementServiceUpdateProjectGrant) | **PUT** /projects/{projectId}/grants/{grantId} | Change Project Grant
[**managementServiceUpdateProjectGrantMember()**](ProjectGrantsApi.md#managementServiceUpdateProjectGrantMember) | **PUT** /projects/{projectId}/grants/{grantId}/members/{userId} | Update Project Grant Member


## `managementServiceAddProjectGrant()`

```php
managementServiceAddProjectGrant($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddProjectGrantResponse
```

Add Project Grant

Grant a project to another organization. The project grant will allow the granted organization to access the project and manage the authorizations for its users. Project Grant will be listed in the granted project of the granted organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectGrantBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectGrantBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddProjectGrant($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceAddProjectGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddProjectGrantBody**](../Model/ManagementServiceAddProjectGrantBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddProjectGrantResponse**](../Model/V1AddProjectGrantResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddProjectGrantMember()`

```php
managementServiceAddProjectGrantMember($projectId, $grantId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddProjectGrantMemberResponse
```

Add Project Grant Member

Members are users with permission to administrate ZITADEL on different levels. This request adds a new user to the members list on the project grant level with one or multiple roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectGrantMemberBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectGrantMemberBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddProjectGrantMember($projectId, $grantId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceAddProjectGrantMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddProjectGrantMemberBody**](../Model/ManagementServiceAddProjectGrantMemberBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddProjectGrantMemberResponse**](../Model/V1AddProjectGrantMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeactivateProjectGrant()`

```php
managementServiceDeactivateProjectGrant($projectId, $grantId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1DeactivateProjectGrantResponse
```

Deactivate Project Grant

Set the state of the project grant to deactivated. The grant has to be active to be able to deactivate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeactivateProjectGrant($projectId, $grantId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceDeactivateProjectGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateProjectGrantResponse**](../Model/V1DeactivateProjectGrantResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListAllProjectGrants()`

```php
managementServiceListAllProjectGrants($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListAllProjectGrantsResponse
```

Search Project Grants

Returns a list of project grants. A project grant is when the organization grants its project to another organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListAllProjectGrantsRequest(); // \ArthurHlt\Zitadel\Model\V1ListAllProjectGrantsRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListAllProjectGrants($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceListAllProjectGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListAllProjectGrantsRequest**](../Model/V1ListAllProjectGrantsRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListAllProjectGrantsResponse**](../Model/V1ListAllProjectGrantsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectGrantMemberRoles()`

```php
managementServiceListProjectGrantMemberRoles($queryOffset, $queryLimit, $queryAsc, $result, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectGrantMemberRolesResponse
```

List Project Grant Member Roles

Members are users with permission to administrate ZITADEL on different levels. This request returns all roles possible for a ZITADEL member on the project grant level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$result = array('result_example'); // string[]
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectGrantMemberRoles($queryOffset, $queryLimit, $queryAsc, $result, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceListProjectGrantMemberRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **result** | [**string[]**](../Model/string.md)|  | [optional]
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectGrantMemberRolesResponse**](../Model/V1ListProjectGrantMemberRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectGrantMembers()`

```php
managementServiceListProjectGrantMembers($projectId, $grantId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectGrantMembersResponse
```

List Project Grant Members

Members are users with permission to administrate ZITADEL on different levels. This request returns all users with memberships on the project grant level, matching the search queries. The search queries will be AND linked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListProjectGrantMembersBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListProjectGrantMembersBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectGrantMembers($projectId, $grantId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceListProjectGrantMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListProjectGrantMembersBody**](../Model/ManagementServiceListProjectGrantMembersBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectGrantMembersResponse**](../Model/V1ListProjectGrantMembersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectGrants()`

```php
managementServiceListProjectGrants($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectGrantsResponse
```

Search Project Grants from Project

Returns a list of project grants for a specific project. A project grant is when the organization grants its project to another organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListProjectGrantsBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListProjectGrantsBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectGrants($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceListProjectGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListProjectGrantsBody**](../Model/ManagementServiceListProjectGrantsBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectGrantsResponse**](../Model/V1ListProjectGrantsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceReactivateProjectGrant()`

```php
managementServiceReactivateProjectGrant($projectId, $grantId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ReactivateProjectGrantResponse
```

Reactivate Project Grant

Set the state of the project grant to active. The grant has to be deactivated to be able to reactivate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceReactivateProjectGrant($projectId, $grantId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceReactivateProjectGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateProjectGrantResponse**](../Model/V1ReactivateProjectGrantResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveProjectGrant()`

```php
managementServiceRemoveProjectGrant($projectId, $grantId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveProjectGrantResponse
```

Remove Project Grant

Remove a project grant. All user grants for this project grant will also be removed. A user will not have access to the project afterward (if permissions are checked).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveProjectGrant($projectId, $grantId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceRemoveProjectGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveProjectGrantResponse**](../Model/V1RemoveProjectGrantResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveProjectGrantMember()`

```php
managementServiceRemoveProjectGrantMember($projectId, $grantId, $userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveProjectGrantMemberResponse
```

Remove Project Grant Member

Members are users with permission to administrate ZITADEL on different levels. This request removes a user from the members list on a project grant level. The user can still have roles on another level (iam, organization, project)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveProjectGrantMember($projectId, $grantId, $userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceRemoveProjectGrantMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveProjectGrantMemberResponse**](../Model/V1RemoveProjectGrantMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateProjectGrant()`

```php
managementServiceUpdateProjectGrant($projectId, $grantId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateProjectGrantResponse
```

Change Project Grant

Change the roles of the project that is granted to another organization. The project grant will allow the granted organization to access the project and manage the authorizations for its users. Project Grant will be listed in the granted project of the granted organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectGrantBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectGrantBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateProjectGrant($projectId, $grantId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceUpdateProjectGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectGrantBody**](../Model/ManagementServiceUpdateProjectGrantBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateProjectGrantResponse**](../Model/V1UpdateProjectGrantResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateProjectGrantMember()`

```php
managementServiceUpdateProjectGrantMember($projectId, $grantId, $userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateProjectGrantMemberResponse
```

Update Project Grant Member

Members are users with permission to administrate ZITADEL on different levels. This request changes the roles of an existing member. The whole roles list will be updated. Make sure to include roles that you don't want to change (remove).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectGrantsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectGrantMemberBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectGrantMemberBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateProjectGrantMember($projectId, $grantId, $userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectGrantsApi->managementServiceUpdateProjectGrantMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectGrantMemberBody**](../Model/ManagementServiceUpdateProjectGrantMemberBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateProjectGrantMemberResponse**](../Model/V1UpdateProjectGrantMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
