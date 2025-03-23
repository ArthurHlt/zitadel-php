# ArthurHlt\Zitadel\OrganizationsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddCustomDomainPolicy()**](OrganizationsApi.md#adminServiceAddCustomDomainPolicy) | **POST** /orgs/{orgId}/policies/domain | Set a Domain Settings for an Organization
[**adminServiceGetCustomDomainPolicy()**](OrganizationsApi.md#adminServiceGetCustomDomainPolicy) | **GET** /orgs/{orgId}/policies/domain | Get Domain Settings for Organization
[**adminServiceGetDefaultOrg()**](OrganizationsApi.md#adminServiceGetDefaultOrg) | **GET** /orgs/default | Get Default Organization
[**adminServiceGetOrgByID()**](OrganizationsApi.md#adminServiceGetOrgByID) | **GET** /orgs/{id} | Get Organization By ID
[**adminServiceIsOrgUnique()**](OrganizationsApi.md#adminServiceIsOrgUnique) | **GET** /orgs/_is_unique | Is Organization Unique
[**adminServiceListOrgs()**](OrganizationsApi.md#adminServiceListOrgs) | **POST** /orgs/_search | Search Organization
[**adminServiceRemoveOrg()**](OrganizationsApi.md#adminServiceRemoveOrg) | **DELETE** /orgs/{orgId} | Remove Organization
[**adminServiceResetCustomDomainPolicyToDefault()**](OrganizationsApi.md#adminServiceResetCustomDomainPolicyToDefault) | **DELETE** /orgs/{orgId}/policies/domain | Reset Domain Settings of Organization
[**adminServiceSetDefaultOrg()**](OrganizationsApi.md#adminServiceSetDefaultOrg) | **PUT** /orgs/default/{orgId} | Set Default Organization
[**adminServiceSetUpOrg()**](OrganizationsApi.md#adminServiceSetUpOrg) | **POST** /orgs/_setup | Setup Organization
[**adminServiceUpdateCustomDomainPolicy()**](OrganizationsApi.md#adminServiceUpdateCustomDomainPolicy) | **PUT** /orgs/{orgId}/policies/domain | Update Domain Settings for Organization
[**managementServiceAddOrg()**](OrganizationsApi.md#managementServiceAddOrg) | **POST** /orgs | Create Organization
[**managementServiceAddOrgDomain()**](OrganizationsApi.md#managementServiceAddOrgDomain) | **POST** /orgs/me/domains | Add Domain
[**managementServiceAddOrgMember()**](OrganizationsApi.md#managementServiceAddOrgMember) | **POST** /orgs/me/members | Add Organization Member
[**managementServiceBulkRemoveOrgMetadata()**](OrganizationsApi.md#managementServiceBulkRemoveOrgMetadata) | **DELETE** /metadata/_bulk | Bulk Delete Metadata
[**managementServiceBulkSetOrgMetadata()**](OrganizationsApi.md#managementServiceBulkSetOrgMetadata) | **POST** /metadata/_bulk | Bulk Set Organization Metadata
[**managementServiceDeactivateOrg()**](OrganizationsApi.md#managementServiceDeactivateOrg) | **POST** /orgs/me/_deactivate | Deactivate Organization
[**managementServiceGenerateOrgDomainValidation()**](OrganizationsApi.md#managementServiceGenerateOrgDomainValidation) | **POST** /orgs/me/domains/{domain}/validation/_generate | Generate Domain Verification
[**managementServiceGetMyOrg()**](OrganizationsApi.md#managementServiceGetMyOrg) | **GET** /orgs/me | Get My Organization
[**managementServiceGetOrgByDomainGlobal()**](OrganizationsApi.md#managementServiceGetOrgByDomainGlobal) | **GET** /global/orgs/_by_domain | Get Organization By Domain
[**managementServiceGetOrgMetadata()**](OrganizationsApi.md#managementServiceGetOrgMetadata) | **GET** /metadata/{key} | Get Organization Metadata By Key
[**managementServiceListOrgChanges()**](OrganizationsApi.md#managementServiceListOrgChanges) | **POST** /orgs/me/changes/_search | Get Organization History
[**managementServiceListOrgDomains()**](OrganizationsApi.md#managementServiceListOrgDomains) | **POST** /orgs/me/domains/_search | Search Domains
[**managementServiceListOrgMemberRoles()**](OrganizationsApi.md#managementServiceListOrgMemberRoles) | **POST** /orgs/members/roles/_search | List Organization Member Roles
[**managementServiceListOrgMembers()**](OrganizationsApi.md#managementServiceListOrgMembers) | **POST** /orgs/me/members/_search | List Organization Members
[**managementServiceListOrgMetadata()**](OrganizationsApi.md#managementServiceListOrgMetadata) | **POST** /metadata/_search | Search Organization Metadata
[**managementServiceReactivateOrg()**](OrganizationsApi.md#managementServiceReactivateOrg) | **POST** /orgs/me/_reactivate | Reactivate Organization
[**managementServiceRemoveOrg()**](OrganizationsApi.md#managementServiceRemoveOrg) | **DELETE** /orgs/me | Delete Organization
[**managementServiceRemoveOrgDomain()**](OrganizationsApi.md#managementServiceRemoveOrgDomain) | **DELETE** /orgs/me/domains/{domain} | Remove Domain
[**managementServiceRemoveOrgMember()**](OrganizationsApi.md#managementServiceRemoveOrgMember) | **DELETE** /orgs/me/members/{userId} | Remove Organization Member
[**managementServiceRemoveOrgMetadata()**](OrganizationsApi.md#managementServiceRemoveOrgMetadata) | **DELETE** /metadata/{key} | Delete Organization Metadata By Key
[**managementServiceSetOrgMetadata()**](OrganizationsApi.md#managementServiceSetOrgMetadata) | **POST** /metadata/{key} | Set Organization Metadata
[**managementServiceSetPrimaryOrgDomain()**](OrganizationsApi.md#managementServiceSetPrimaryOrgDomain) | **POST** /orgs/me/domains/{domain}/_set_primary | Set Primary Domain
[**managementServiceUpdateOrg()**](OrganizationsApi.md#managementServiceUpdateOrg) | **PUT** /orgs/me | Update Organization
[**managementServiceUpdateOrgMember()**](OrganizationsApi.md#managementServiceUpdateOrgMember) | **PUT** /orgs/me/members/{userId} | Update Organization Member
[**managementServiceValidateOrgDomain()**](OrganizationsApi.md#managementServiceValidateOrgDomain) | **POST** /orgs/me/domains/{domain}/validation/_validate | Verify Domain


## `adminServiceAddCustomDomainPolicy()`

```php
adminServiceAddCustomDomainPolicy($orgId, $body): \ArthurHlt\Zitadel\Model\V1AddCustomDomainPolicyResponse
```

Set a Domain Settings for an Organization

Create the domain settings configured on a specific organization. It will overwrite the settings specified on the instance. Domain settings specify how ZITADEL should handle domains, in regards to usernames, emails and validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceAddCustomDomainPolicyBody(); // \ArthurHlt\Zitadel\Model\AdminServiceAddCustomDomainPolicyBody

try {
    $result = $apiInstance->adminServiceAddCustomDomainPolicy($orgId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceAddCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceAddCustomDomainPolicyBody**](../Model/AdminServiceAddCustomDomainPolicyBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomDomainPolicyResponse**](../Model/V1AddCustomDomainPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetCustomDomainPolicy()`

```php
adminServiceGetCustomDomainPolicy($orgId): \ArthurHlt\Zitadel\Model\V1GetCustomDomainPolicyResponse
```

Get Domain Settings for Organization

Get the domain settings configured on a specific organization. If the organization doesn't have a custom setting, the default will be returned. Domain settings specify how ZITADEL should handle domains, in regards to usernames, emails and validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string

try {
    $result = $apiInstance->adminServiceGetCustomDomainPolicy($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceGetCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetCustomDomainPolicyResponse**](../Model/V1GetCustomDomainPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetDefaultOrg()`

```php
adminServiceGetDefaultOrg(): \ArthurHlt\Zitadel\Model\V1GetDefaultOrgResponse
```

Get Default Organization

Get the default organization of the ZITADEL instance. If no specific organization is given on the register form, a user will be registered to the default organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetDefaultOrg();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceGetDefaultOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultOrgResponse**](../Model/V1GetDefaultOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetOrgByID()`

```php
adminServiceGetOrgByID($id): \ArthurHlt\Zitadel\Model\V1GetOrgByIDResponse
```

Get Organization By ID

Returns an organization by its ID. Make sure the user has the permissions to access the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceGetOrgByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceGetOrgByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetOrgByIDResponse**](../Model/V1GetOrgByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceIsOrgUnique()`

```php
adminServiceIsOrgUnique($name, $domain): \ArthurHlt\Zitadel\Model\V1IsOrgUniqueResponse
```

Is Organization Unique

Checks if an organization with the searched parameters already exists or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->adminServiceIsOrgUnique($name, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceIsOrgUnique: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **domain** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1IsOrgUniqueResponse**](../Model/V1IsOrgUniqueResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListOrgs()`

```php
adminServiceListOrgs($body): \ArthurHlt\Zitadel\Model\V1ListOrgsResponse
```

Search Organization

Returns a list of organizations that match the requesting filters. All filters are applied with an AND condition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListOrgsRequest(); // \ArthurHlt\Zitadel\Model\V1ListOrgsRequest | Search query for lists

try {
    $result = $apiInstance->adminServiceListOrgs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceListOrgs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListOrgsRequest**](../Model/V1ListOrgsRequest.md)| Search query for lists |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListOrgsResponse**](../Model/V1ListOrgsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveOrg()`

```php
adminServiceRemoveOrg($orgId): \ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveOrgResponse
```

Remove Organization

Deletes the organization and all its resources (Users, Projects, Grants to and from the org). Users of this organization will not be able to log in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveOrg($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceRemoveOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveOrgResponse**](../Model/Zitadeladminv1RemoveOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceResetCustomDomainPolicyToDefault()`

```php
adminServiceResetCustomDomainPolicyToDefault($orgId): \ArthurHlt\Zitadel\Model\V1ResetCustomDomainPolicyToDefaultResponse
```

Reset Domain Settings of Organization

Resets the domain settings configured on a specific organization to the settings configured on the instance. Domain settings specify how ZITADEL should handle domains, in regards to usernames, emails and validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string

try {
    $result = $apiInstance->adminServiceResetCustomDomainPolicyToDefault($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceResetCustomDomainPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetCustomDomainPolicyToDefaultResponse**](../Model/V1ResetCustomDomainPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceSetDefaultOrg()`

```php
adminServiceSetDefaultOrg($orgId): \ArthurHlt\Zitadel\Model\V1SetDefaultOrgResponse
```

Set Default Organization

Sets the default organization of the ZITADEL instance. If no specific organization is given on the register form, a user will be registered to the default organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string

try {
    $result = $apiInstance->adminServiceSetDefaultOrg($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceSetDefaultOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetDefaultOrgResponse**](../Model/V1SetDefaultOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceSetUpOrg()`

```php
adminServiceSetUpOrg($body): \ArthurHlt\Zitadel\Model\V1SetUpOrgResponse
```

Setup Organization

Create a new organization with an administrative user. If no specific roles are sent for the first user, the user will get the role ORG_OWNER.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1SetUpOrgRequest(); // \ArthurHlt\Zitadel\Model\V1SetUpOrgRequest | Request to set up an organization. User is required

try {
    $result = $apiInstance->adminServiceSetUpOrg($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceSetUpOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1SetUpOrgRequest**](../Model/V1SetUpOrgRequest.md)| Request to set up an organization. User is required |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetUpOrgResponse**](../Model/V1SetUpOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateCustomDomainPolicy()`

```php
adminServiceUpdateCustomDomainPolicy($orgId, $body): \ArthurHlt\Zitadel\Model\V1UpdateCustomDomainPolicyResponse
```

Update Domain Settings for Organization

Update the domain settings configured on a specific organization. It will overwrite the settings specified on the instance. Domain settings specify how ZITADEL should handle domains, in regards to usernames, emails and validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateCustomDomainPolicyBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateCustomDomainPolicyBody

try {
    $result = $apiInstance->adminServiceUpdateCustomDomainPolicy($orgId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminServiceUpdateCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateCustomDomainPolicyBody**](../Model/AdminServiceUpdateCustomDomainPolicyBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateCustomDomainPolicyResponse**](../Model/V1UpdateCustomDomainPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddOrg()`

```php
managementServiceAddOrg($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddOrgResponse
```

Create Organization

Create a new organization. Based on the given name a domain will be generated to be able to identify users within an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddOrgRequest(); // \ArthurHlt\Zitadel\Model\V1AddOrgRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddOrg($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceAddOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddOrgRequest**](../Model/V1AddOrgRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddOrgResponse**](../Model/V1AddOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddOrgDomain()`

```php
managementServiceAddOrgDomain($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddOrgDomainResponse
```

Add Domain

Add a new domain to an organization. The domains are used to identify to which organization a user belongs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddOrgDomainRequest(); // \ArthurHlt\Zitadel\Model\V1AddOrgDomainRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddOrgDomain($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceAddOrgDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddOrgDomainRequest**](../Model/V1AddOrgDomainRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddOrgDomainResponse**](../Model/V1AddOrgDomainResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceAddOrgMember: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceBulkRemoveOrgMetadata: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceBulkSetOrgMetadata: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceDeactivateOrg()`

```php
managementServiceDeactivateOrg($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1DeactivateOrgResponse
```

Deactivate Organization

Sets the state of my organization to deactivated. Users of this organization will not be able to log in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeactivateOrg($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceDeactivateOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateOrgResponse**](../Model/V1DeactivateOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGenerateOrgDomainValidation()`

```php
managementServiceGenerateOrgDomainValidation($domain, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GenerateOrgDomainValidationResponse
```

Generate Domain Verification

Generate a new file to be able to verify your domain with DNS or HTTP challenge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceGenerateOrgDomainValidationBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceGenerateOrgDomainValidationBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGenerateOrgDomainValidation($domain, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceGenerateOrgDomainValidation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceGenerateOrgDomainValidationBody**](../Model/ManagementServiceGenerateOrgDomainValidationBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GenerateOrgDomainValidationResponse**](../Model/V1GenerateOrgDomainValidationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetMyOrg()`

```php
managementServiceGetMyOrg($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetMyOrgResponse
```

Get My Organization

Returns the organization that is sent in the x-zitadel-orgid. If no header is set the organization of the authenticated user will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetMyOrg($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceGetMyOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyOrgResponse**](../Model/V1GetMyOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetOrgByDomainGlobal()`

```php
managementServiceGetOrgByDomainGlobal($domain): \ArthurHlt\Zitadel\Model\V1GetOrgByDomainGlobalResponse
```

Get Organization By Domain

Search an organization by the domain, overall organizations. The domain must match exactly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->managementServiceGetOrgByDomainGlobal($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceGetOrgByDomainGlobal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetOrgByDomainGlobalResponse**](../Model/V1GetOrgByDomainGlobalResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceGetOrgMetadata: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceListOrgChanges()`

```php
managementServiceListOrgChanges($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListOrgChangesResponse
```

Get Organization History

Returns a list of changes/events that have happened in the organization. It's the history of the organization. Make sure to send a limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListOrgChangesRequest(); // \ArthurHlt\Zitadel\Model\V1ListOrgChangesRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListOrgChanges($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceListOrgChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListOrgChangesRequest**](../Model/V1ListOrgChangesRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListOrgChangesResponse**](../Model/V1ListOrgChangesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListOrgDomains()`

```php
managementServiceListOrgDomains($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListOrgDomainsResponse
```

Search Domains

Returns the list of registered domains of an organization. The domains are used to identify to which organization a user belongs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListOrgDomainsRequest(); // \ArthurHlt\Zitadel\Model\V1ListOrgDomainsRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListOrgDomains($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceListOrgDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListOrgDomainsRequest**](../Model/V1ListOrgDomainsRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListOrgDomainsResponse**](../Model/V1ListOrgDomainsResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceListOrgMemberRoles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceListOrgMembers: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceListOrgMetadata: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceReactivateOrg()`

```php
managementServiceReactivateOrg($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ReactivateOrgResponse
```

Reactivate Organization

Set the state of my organization to active. The state of the organization has to be deactivated to perform the request. Users of this organization will be able to log in again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceReactivateOrg($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceReactivateOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateOrgResponse**](../Model/V1ReactivateOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveOrg()`

```php
managementServiceRemoveOrg($xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveOrgResponse
```

Delete Organization

Deletes my organization and all its resources (Users, Projects, Grants to and from the org). Users of this organization will not be able to log in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveOrg($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceRemoveOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveOrgResponse**](../Model/Zitadelmanagementv1RemoveOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveOrgDomain()`

```php
managementServiceRemoveOrgDomain($domain, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveOrgDomainResponse
```

Remove Domain

Delete a new domain from an organization. The domains are used to identify to which organization a user belongs. If the uses use the domain for login, this will not be possible afterwards. They have to use another domain instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveOrgDomain($domain, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceRemoveOrgDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveOrgDomainResponse**](../Model/V1RemoveOrgDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceRemoveOrgMember: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceRemoveOrgMetadata: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceSetOrgMetadata: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceSetPrimaryOrgDomain()`

```php
managementServiceSetPrimaryOrgDomain($domain, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SetPrimaryOrgDomainResponse
```

Set Primary Domain

Set a domain as primary. It has to be verified to be able to be set as primary. The primary domain will be shown as suffix on the usernames as preferred loginname on this organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceSetPrimaryOrgDomain($domain, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceSetPrimaryOrgDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetPrimaryOrgDomainResponse**](../Model/V1SetPrimaryOrgDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateOrg()`

```php
managementServiceUpdateOrg($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateOrgResponse
```

Update Organization

Change the name of the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateOrgRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateOrgRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateOrg($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceUpdateOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateOrgRequest**](../Model/V1UpdateOrgRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOrgResponse**](../Model/V1UpdateOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
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


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
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
    echo 'Exception when calling OrganizationsApi->managementServiceUpdateOrgMember: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceValidateOrgDomain()`

```php
managementServiceValidateOrgDomain($domain, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ValidateOrgDomainResponse
```

Verify Domain

Make sure you have added the required verification to your domain, depending on the method you have chosen (HTTP or DNS challenge). ZITADEL will check it and set the domain as verified if it was successful. A verify domain has to be unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceValidateOrgDomain($domain, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->managementServiceValidateOrgDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ValidateOrgDomainResponse**](../Model/V1ValidateOrgDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
