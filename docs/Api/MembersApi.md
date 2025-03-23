# ArthurHlt\Zitadel\MembersApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddIAMMember()**](MembersApi.md#adminServiceAddIAMMember) | **POST** /members | Add IAM Member
[**adminServiceListIAMMemberRoles()**](MembersApi.md#adminServiceListIAMMemberRoles) | **POST** /members/roles/_search | List IAM Member Roles
[**adminServiceListIAMMembers()**](MembersApi.md#adminServiceListIAMMembers) | **POST** /members/_search | List IAM Members
[**adminServiceRemoveIAMMember()**](MembersApi.md#adminServiceRemoveIAMMember) | **DELETE** /members/{userId} | Remove IAM Member
[**adminServiceUpdateIAMMember()**](MembersApi.md#adminServiceUpdateIAMMember) | **PUT** /members/{userId} | Update IAM Member
[**managementServiceAddOrgMember()**](MembersApi.md#managementServiceAddOrgMember) | **POST** /orgs/me/members | Add Organization Member
[**managementServiceAddProjectGrantMember()**](MembersApi.md#managementServiceAddProjectGrantMember) | **POST** /projects/{projectId}/grants/{grantId}/members | Add Project Grant Member
[**managementServiceAddProjectMember()**](MembersApi.md#managementServiceAddProjectMember) | **POST** /projects/{projectId}/members | Add Project Member
[**managementServiceListOrgMemberRoles()**](MembersApi.md#managementServiceListOrgMemberRoles) | **POST** /orgs/members/roles/_search | List Organization Member Roles
[**managementServiceListOrgMembers()**](MembersApi.md#managementServiceListOrgMembers) | **POST** /orgs/me/members/_search | List Organization Members
[**managementServiceListProjectGrantMemberRoles()**](MembersApi.md#managementServiceListProjectGrantMemberRoles) | **POST** /projects/grants/members/roles/_search | List Project Grant Member Roles
[**managementServiceListProjectGrantMembers()**](MembersApi.md#managementServiceListProjectGrantMembers) | **POST** /projects/{projectId}/grants/{grantId}/members/_search | List Project Grant Members
[**managementServiceListProjectMemberRoles()**](MembersApi.md#managementServiceListProjectMemberRoles) | **POST** /projects/members/roles/_search | List Project Member Roles
[**managementServiceListProjectMembers()**](MembersApi.md#managementServiceListProjectMembers) | **POST** /projects/{projectId}/members/_search | List Project Members
[**managementServiceRemoveOrgMember()**](MembersApi.md#managementServiceRemoveOrgMember) | **DELETE** /orgs/me/members/{userId} | Remove Organization Member
[**managementServiceRemoveProjectGrantMember()**](MembersApi.md#managementServiceRemoveProjectGrantMember) | **DELETE** /projects/{projectId}/grants/{grantId}/members/{userId} | Remove Project Grant Member
[**managementServiceRemoveProjectMember()**](MembersApi.md#managementServiceRemoveProjectMember) | **DELETE** /projects/{projectId}/members/{userId} | Remove Project Member
[**managementServiceUpdateOrgMember()**](MembersApi.md#managementServiceUpdateOrgMember) | **PUT** /orgs/me/members/{userId} | Update Organization Member
[**managementServiceUpdateProjectGrantMember()**](MembersApi.md#managementServiceUpdateProjectGrantMember) | **PUT** /projects/{projectId}/grants/{grantId}/members/{userId} | Update Project Grant Member
[**managementServiceUpdateProjectMember()**](MembersApi.md#managementServiceUpdateProjectMember) | **PUT** /projects/{projectId}/members/{userId} | Update Project Member


## `adminServiceAddIAMMember()`

```php
adminServiceAddIAMMember($body): \ArthurHlt\Zitadel\Model\V1AddIAMMemberResponse
```

Add IAM Member

Members are users with permission to administrate ZITADEL on different levels. This request adds a new user to the members list with one or multiple roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddIAMMemberRequest(); // \ArthurHlt\Zitadel\Model\V1AddIAMMemberRequest

try {
    $result = $apiInstance->adminServiceAddIAMMember($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->adminServiceAddIAMMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddIAMMemberRequest**](../Model/V1AddIAMMemberRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddIAMMemberResponse**](../Model/V1AddIAMMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListIAMMemberRoles()`

```php
adminServiceListIAMMemberRoles(): \ArthurHlt\Zitadel\Model\V1ListIAMMemberRolesResponse
```

List IAM Member Roles

Members are users with permission to administrate ZITADEL on different levels. This request returns all roles possible for a ZITADEL member on the instance level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListIAMMemberRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->adminServiceListIAMMemberRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListIAMMemberRolesResponse**](../Model/V1ListIAMMemberRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListIAMMembers()`

```php
adminServiceListIAMMembers($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1ListIAMMembersResponse
```

List IAM Members

Members are users with permission to administrate ZITADEL on different levels. This request returns all users with memberships on the instance level, matching the search queries. The search queries will be AND linked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1ListIAMMembersRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1ListIAMMembersRequest

try {
    $result = $apiInstance->adminServiceListIAMMembers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->adminServiceListIAMMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListIAMMembersRequest**](../Model/Zitadeladminv1ListIAMMembersRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListIAMMembersResponse**](../Model/Zitadeladminv1ListIAMMembersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveIAMMember()`

```php
adminServiceRemoveIAMMember($userId): \ArthurHlt\Zitadel\Model\V1RemoveIAMMemberResponse
```

Remove IAM Member

Members are users with permission to administrate ZITADEL on different levels. This request removes a user from the members list on an instance level. The user can still have roles on another level (organization, project)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveIAMMember($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->adminServiceRemoveIAMMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveIAMMemberResponse**](../Model/V1RemoveIAMMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateIAMMember()`

```php
adminServiceUpdateIAMMember($userId, $body): \ArthurHlt\Zitadel\Model\V1UpdateIAMMemberResponse
```

Update IAM Member

Members are users with permission to administrate ZITADEL on different levels. This request changes the roles of an existing member. The whole roles list will be updated. Make sure to include roles that you don't want to change (remove).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateIAMMemberBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateIAMMemberBody

try {
    $result = $apiInstance->adminServiceUpdateIAMMember($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->adminServiceUpdateIAMMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateIAMMemberBody**](../Model/AdminServiceUpdateIAMMemberBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateIAMMemberResponse**](../Model/V1UpdateIAMMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddOrgMember()`

```php
managementServiceAddOrgMember($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddOrgMemberResponse
```

Add Organization Member

Members are users with permission to administrate ZITADEL on different levels. This request adds a new user to the members list on the organization level with one or multiple roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddOrgMemberRequest(); // \ArthurHlt\Zitadel\Model\V1AddOrgMemberRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddOrgMember($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->managementServiceAddOrgMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddOrgMemberRequest**](../Model/V1AddOrgMemberRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddOrgMemberResponse**](../Model/V1AddOrgMemberResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceAddProjectGrantMember: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceAddProjectMember: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListOrgMemberRoles()`

```php
managementServiceListOrgMemberRoles($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListOrgMemberRolesResponse
```

List Organization Member Roles

Members are users with permission to administrate ZITADEL on different levels. This request returns all roles possible for a ZITADEL member on the organization level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListOrgMemberRoles($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->managementServiceListOrgMemberRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListOrgMemberRolesResponse**](../Model/V1ListOrgMemberRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListOrgMembers()`

```php
managementServiceListOrgMembers($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListOrgMembersResponse
```

List Organization Members

Members are users with permission to administrate ZITADEL on different levels. This request returns all users with memberships on the organization level, matching the search queries. The search queries will be AND linked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListOrgMembersRequest(); // \ArthurHlt\Zitadel\Model\V1ListOrgMembersRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListOrgMembers($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->managementServiceListOrgMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListOrgMembersRequest**](../Model/V1ListOrgMembersRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListOrgMembersResponse**](../Model/V1ListOrgMembersResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceListProjectGrantMemberRoles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceListProjectGrantMembers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceListProjectMemberRoles: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceListProjectMembers: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveOrgMember()`

```php
managementServiceRemoveOrgMember($userId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveOrgMemberResponse
```

Remove Organization Member

Members are users with permission to administrate ZITADEL on different levels. This request removes a user from the members list on an instance level. The user can still have roles on another level (iam, project)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveOrgMember($userId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->managementServiceRemoveOrgMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveOrgMemberResponse**](../Model/V1RemoveOrgMemberResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceRemoveProjectGrantMember: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceRemoveProjectMember: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateOrgMember()`

```php
managementServiceUpdateOrgMember($userId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateOrgMemberResponse
```

Update Organization Member

Members are users with permission to administrate ZITADEL on different levels. This request changes the roles of an existing member. The whole roles list will be updated. Make sure to include roles that you don't want to change (remove).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$userId = 'userId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgMemberBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgMemberBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateOrgMember($userId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->managementServiceUpdateOrgMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgMemberBody**](../Model/ManagementServiceUpdateOrgMemberBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOrgMemberResponse**](../Model/V1UpdateOrgMemberResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceUpdateProjectGrantMember: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\MembersApi(
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
    echo 'Exception when calling MembersApi->managementServiceUpdateProjectMember: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
