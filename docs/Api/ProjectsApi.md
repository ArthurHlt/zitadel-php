# ArthurHlt\Zitadel\ProjectsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceAddProject()**](ProjectsApi.md#managementServiceAddProject) | **POST** /projects | Create Project
[**managementServiceAddProjectMember()**](ProjectsApi.md#managementServiceAddProjectMember) | **POST** /projects/{projectId}/members | Add Project Member
[**managementServiceDeactivateProject()**](ProjectsApi.md#managementServiceDeactivateProject) | **POST** /projects/{id}/_deactivate | Deactivate Project
[**managementServiceGetGrantedProjectByID()**](ProjectsApi.md#managementServiceGetGrantedProjectByID) | **GET** /granted_projects/{projectId}/grants/{grantId} | Get Granted Project By ID
[**managementServiceGetProjectByID()**](ProjectsApi.md#managementServiceGetProjectByID) | **GET** /projects/{id} | Get Project By ID
[**managementServiceGetProjectGrantByID()**](ProjectsApi.md#managementServiceGetProjectGrantByID) | **GET** /projects/{projectId}/grants/{grantId} | Project Grant By ID
[**managementServiceListGrantedProjectRoles()**](ProjectsApi.md#managementServiceListGrantedProjectRoles) | **GET** /granted_projects/{projectId}/grants/{grantId}/roles/_search | Search Granted Project Roles
[**managementServiceListGrantedProjects()**](ProjectsApi.md#managementServiceListGrantedProjects) | **POST** /granted_projects/_search | Search Granted Project
[**managementServiceListProjectChanges()**](ProjectsApi.md#managementServiceListProjectChanges) | **POST** /projects/{projectId}/changes/_search | Project History
[**managementServiceListProjectGrantChanges()**](ProjectsApi.md#managementServiceListProjectGrantChanges) | **POST** /projects/{projectId}/grants/{grantId}/changes/_search | Project Grant History
[**managementServiceListProjectMemberRoles()**](ProjectsApi.md#managementServiceListProjectMemberRoles) | **POST** /projects/members/roles/_search | List Project Member Roles
[**managementServiceListProjectMembers()**](ProjectsApi.md#managementServiceListProjectMembers) | **POST** /projects/{projectId}/members/_search | List Project Members
[**managementServiceListProjects()**](ProjectsApi.md#managementServiceListProjects) | **POST** /projects/_search | Search Project
[**managementServiceReactivateProject()**](ProjectsApi.md#managementServiceReactivateProject) | **POST** /projects/{id}/_reactivate | Reactivate Project
[**managementServiceRemoveProject()**](ProjectsApi.md#managementServiceRemoveProject) | **DELETE** /projects/{id} | Remove Project
[**managementServiceRemoveProjectMember()**](ProjectsApi.md#managementServiceRemoveProjectMember) | **DELETE** /projects/{projectId}/members/{userId} | Remove Project Member
[**managementServiceUpdateProject()**](ProjectsApi.md#managementServiceUpdateProject) | **PUT** /projects/{id} | Update Project
[**managementServiceUpdateProjectMember()**](ProjectsApi.md#managementServiceUpdateProjectMember) | **PUT** /projects/{projectId}/members/{userId} | Update Project Member


## `managementServiceAddProject()`

```php
managementServiceAddProject($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddProjectResponse
```

Create Project

Create a new project. A Project is a vessel for different applications sharing the same role context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddProjectRequest(); // \ArthurHlt\Zitadel\Model\V1AddProjectRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddProject($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceAddProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddProjectRequest**](../Model/V1AddProjectRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddProjectResponse**](../Model/V1AddProjectResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddProjectMember()`

```php
managementServiceAddProjectMember($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddProjectMemberResponse
```

Add Project Member

Members are users with permission to administrate ZITADEL on different levels. This request adds a new user to the members list on the project level with one or multiple roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectMemberBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddProjectMemberBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddProjectMember($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceAddProjectMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddProjectMemberBody**](../Model/ManagementServiceAddProjectMemberBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddProjectMemberResponse**](../Model/V1AddProjectMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeactivateProject()`

```php
managementServiceDeactivateProject($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1DeactivateProjectResponse
```

Deactivate Project

Set the state of a project to deactivated. Request returns an error if the project is already deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeactivateProject($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceDeactivateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateProjectResponse**](../Model/V1DeactivateProjectResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetGrantedProjectByID()`

```php
managementServiceGetGrantedProjectByID($projectId, $grantId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetGrantedProjectByIDResponse
```

Get Granted Project By ID

Returns a project owned by another organization and granted to my organization. A Project is a vessel for different applications sharing the same role context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetGrantedProjectByID($projectId, $grantId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceGetGrantedProjectByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetGrantedProjectByIDResponse**](../Model/V1GetGrantedProjectByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetProjectByID()`

```php
managementServiceGetProjectByID($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetProjectByIDResponse
```

Get Project By ID

Returns a project owned by the organization (no granted projects). A Project is a vessel for different applications sharing the same role context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetProjectByID($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceGetProjectByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetProjectByIDResponse**](../Model/V1GetProjectByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetProjectGrantByID()`

```php
managementServiceGetProjectGrantByID($projectId, $grantId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetProjectGrantByIDResponse
```

Project Grant By ID

Returns a project grant. A project grant is when the organization grants its project to another organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetProjectGrantByID($projectId, $grantId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceGetProjectGrantByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetProjectGrantByIDResponse**](../Model/V1GetProjectGrantByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListGrantedProjectRoles()`

```php
managementServiceListGrantedProjectRoles($projectId, $grantId, $queryOffset, $queryLimit, $queryAsc, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListGrantedProjectRolesResponse
```

Search Granted Project Roles

Lists the roles a granted projects has. These are the roles, that have been granted by the owner organization to my organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListGrantedProjectRoles($projectId, $grantId, $queryOffset, $queryLimit, $queryAsc, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListGrantedProjectRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListGrantedProjectRolesResponse**](../Model/V1ListGrantedProjectRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListGrantedProjects()`

```php
managementServiceListGrantedProjects($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListGrantedProjectsResponse
```

Search Granted Project

Lists projects my organization got granted from another organization. A Project is a vessel for different applications sharing the same role context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListGrantedProjectsRequest(); // \ArthurHlt\Zitadel\Model\V1ListGrantedProjectsRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListGrantedProjects($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListGrantedProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListGrantedProjectsRequest**](../Model/V1ListGrantedProjectsRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListGrantedProjectsResponse**](../Model/V1ListGrantedProjectsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectChanges()`

```php
managementServiceListProjectChanges($projectId, $querySequence, $queryLimit, $queryAsc, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectChangesResponse
```

Project History

Returns a list of changes/events that have happened on the project. It's the history of the project. Make sure to send a limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$querySequence = 'querySequence_example'; // string | sequence represents the order of events. It's always counting
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectChanges($projectId, $querySequence, $queryLimit, $queryAsc, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListProjectChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **querySequence** | **string**| sequence represents the order of events. It&#39;s always counting | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectChangesResponse**](../Model/V1ListProjectChangesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectGrantChanges()`

```php
managementServiceListProjectGrantChanges($projectId, $grantId, $querySequence, $queryLimit, $queryAsc, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectGrantChangesResponse
```

Project Grant History

Returns a list of changes/events that have happened on the project grant. It's the history of the project. Make sure to send a limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$grantId = 'grantId_example'; // string
$querySequence = 'querySequence_example'; // string | sequence represents the order of events. It's always counting
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectGrantChanges($projectId, $grantId, $querySequence, $queryLimit, $queryAsc, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListProjectGrantChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **grantId** | **string**|  |
 **querySequence** | **string**| sequence represents the order of events. It&#39;s always counting | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectGrantChangesResponse**](../Model/V1ListProjectGrantChangesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectMemberRoles()`

```php
managementServiceListProjectMemberRoles($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectMemberRolesResponse
```

List Project Member Roles

Members are users with permission to administrate ZITADEL on different levels. This request returns all roles possible for a ZITADEL member on the project level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectMemberRoles($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListProjectMemberRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectMemberRolesResponse**](../Model/V1ListProjectMemberRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjectMembers()`

```php
managementServiceListProjectMembers($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectMembersResponse
```

List Project Members

Members are users with permission to administrate ZITADEL on different levels. This request returns all users with memberships on the project level, matching the search queries. The search queries will be AND linked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListProjectMembersBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListProjectMembersBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjectMembers($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListProjectMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListProjectMembersBody**](../Model/ManagementServiceListProjectMembersBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectMembersResponse**](../Model/V1ListProjectMembersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListProjects()`

```php
managementServiceListProjects($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListProjectsResponse
```

Search Project

Lists projects my organization is the owner of (no granted projects). A Project is a vessel for different applications sharing the same role context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListProjectsRequest(); // \ArthurHlt\Zitadel\Model\V1ListProjectsRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListProjects($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceListProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListProjectsRequest**](../Model/V1ListProjectsRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListProjectsResponse**](../Model/V1ListProjectsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceReactivateProject()`

```php
managementServiceReactivateProject($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ReactivateProjectResponse
```

Reactivate Project

Set the state of a project to active. Request returns an error if the project is not deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceReactivateProject($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceReactivateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateProjectResponse**](../Model/V1ReactivateProjectResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveProject()`

```php
managementServiceRemoveProject($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveProjectResponse
```

Remove Project

Project and all its sub-resources like project grants, applications, roles and user grants will be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveProject($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceRemoveProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveProjectResponse**](../Model/V1RemoveProjectResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveProjectMember()`

```php
managementServiceRemoveProjectMember($projectId, $userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveProjectMemberResponse
```

Remove Project Member

Members are users with permission to administrate ZITADEL on different levels. This request removes a user from the members list on an project level. The user can still have roles on another level (iam, organization)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveProjectMember($projectId, $userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceRemoveProjectMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveProjectMemberResponse**](../Model/V1RemoveProjectMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateProject()`

```php
managementServiceUpdateProject($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateProjectResponse
```

Update Project

Update a project and its settings. A Project is a vessel for different applications sharing the same role context.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateProject($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceUpdateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectBody**](../Model/ManagementServiceUpdateProjectBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateProjectResponse**](../Model/V1UpdateProjectResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateProjectMember()`

```php
managementServiceUpdateProjectMember($projectId, $userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateProjectMemberResponse
```

Update Project Member

Members are users with permission to administrate ZITADEL on different levels. This request changes the roles of an existing member. The whole roles list will be updated. Make sure to include roles that you don't want to change (remove).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectMemberBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectMemberBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateProjectMember($projectId, $userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->managementServiceUpdateProjectMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateProjectMemberBody**](../Model/ManagementServiceUpdateProjectMemberBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateProjectMemberResponse**](../Model/V1UpdateProjectMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
