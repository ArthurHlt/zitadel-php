# ArthurHlt\Zitadel\DomainSettingsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddCustomDomainPolicy()**](DomainSettingsApi.md#adminServiceAddCustomDomainPolicy) | **POST** /orgs/{orgId}/policies/domain | Set a Domain Settings for an Organization
[**adminServiceAddCustomOrgIAMPolicy()**](DomainSettingsApi.md#adminServiceAddCustomOrgIAMPolicy) | **POST** /orgs/{orgId}/policies/orgiam | Add Custom Org IAM Policy
[**adminServiceGetCustomDomainPolicy()**](DomainSettingsApi.md#adminServiceGetCustomDomainPolicy) | **GET** /orgs/{orgId}/policies/domain | Get Domain Settings for Organization
[**adminServiceGetCustomOrgIAMPolicy()**](DomainSettingsApi.md#adminServiceGetCustomOrgIAMPolicy) | **GET** /orgs/{orgId}/policies/orgiam | Get Org IAM Policy
[**adminServiceGetDomainPolicy()**](DomainSettingsApi.md#adminServiceGetDomainPolicy) | **GET** /policies/domain | Get Domain Settings
[**adminServiceGetOrgIAMPolicy()**](DomainSettingsApi.md#adminServiceGetOrgIAMPolicy) | **GET** /policies/orgiam | Get Org IAM Policy
[**adminServiceResetCustomDomainPolicyToDefault()**](DomainSettingsApi.md#adminServiceResetCustomDomainPolicyToDefault) | **DELETE** /orgs/{orgId}/policies/domain | Reset Domain Settings of Organization
[**adminServiceResetCustomOrgIAMPolicyToDefault()**](DomainSettingsApi.md#adminServiceResetCustomOrgIAMPolicyToDefault) | **DELETE** /orgs/{orgId}/policies/orgiam | Reset Domain Settings of Organization
[**adminServiceUpdateCustomDomainPolicy()**](DomainSettingsApi.md#adminServiceUpdateCustomDomainPolicy) | **PUT** /orgs/{orgId}/policies/domain | Update Domain Settings for Organization
[**adminServiceUpdateCustomOrgIAMPolicy()**](DomainSettingsApi.md#adminServiceUpdateCustomOrgIAMPolicy) | **PUT** /orgs/{orgId}/policies/orgiam | Update Custom Org IAM Policy
[**adminServiceUpdateDomainPolicy()**](DomainSettingsApi.md#adminServiceUpdateDomainPolicy) | **PUT** /policies/domain | Update Domain Settings
[**adminServiceUpdateOrgIAMPolicy()**](DomainSettingsApi.md#adminServiceUpdateOrgIAMPolicy) | **PUT** /policies/orgiam | Update Org IAM Policy


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


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
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
    echo 'Exception when calling DomainSettingsApi->adminServiceAddCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddCustomOrgIAMPolicy()`

```php
adminServiceAddCustomOrgIAMPolicy($orgId, $body): \ArthurHlt\Zitadel\Model\V1AddCustomOrgIAMPolicyResponse
```

Add Custom Org IAM Policy

Use Get Domain Settings for Organization instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceAddCustomOrgIAMPolicyBody(); // \ArthurHlt\Zitadel\Model\AdminServiceAddCustomOrgIAMPolicyBody

try {
    $result = $apiInstance->adminServiceAddCustomOrgIAMPolicy($orgId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceAddCustomOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceAddCustomOrgIAMPolicyBody**](../Model/AdminServiceAddCustomOrgIAMPolicyBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomOrgIAMPolicyResponse**](../Model/V1AddCustomOrgIAMPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
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
    echo 'Exception when calling DomainSettingsApi->adminServiceGetCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetCustomOrgIAMPolicy()`

```php
adminServiceGetCustomOrgIAMPolicy($orgId): \ArthurHlt\Zitadel\Model\V1GetCustomOrgIAMPolicyResponse
```

Get Org IAM Policy

Use GetDomain Settings for Organization instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string

try {
    $result = $apiInstance->adminServiceGetCustomOrgIAMPolicy($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceGetCustomOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetCustomOrgIAMPolicyResponse**](../Model/V1GetCustomOrgIAMPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetDomainPolicy()`

```php
adminServiceGetDomainPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetDomainPolicyResponse
```

Get Domain Settings

Returns the domain settings configured as default on the instance. Domain settings specify how ZITADEL should handle domains, in regards to usernames, emails and validation..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetDomainPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceGetDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetDomainPolicyResponse**](../Model/Zitadeladminv1GetDomainPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetOrgIAMPolicy()`

```php
adminServiceGetOrgIAMPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetOrgIAMPolicyResponse
```

Get Org IAM Policy

Use Get Domain Settings instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetOrgIAMPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceGetOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetOrgIAMPolicyResponse**](../Model/Zitadeladminv1GetOrgIAMPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
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
    echo 'Exception when calling DomainSettingsApi->adminServiceResetCustomDomainPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceResetCustomOrgIAMPolicyToDefault()`

```php
adminServiceResetCustomOrgIAMPolicyToDefault($orgId): \ArthurHlt\Zitadel\Model\V1ResetCustomOrgIAMPolicyToDefaultResponse
```

Reset Domain Settings of Organization

Use Reset Domain Settings of Organization instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string

try {
    $result = $apiInstance->adminServiceResetCustomOrgIAMPolicyToDefault($orgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceResetCustomOrgIAMPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetCustomOrgIAMPolicyToDefaultResponse**](../Model/V1ResetCustomOrgIAMPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
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
    echo 'Exception when calling DomainSettingsApi->adminServiceUpdateCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateCustomOrgIAMPolicy()`

```php
adminServiceUpdateCustomOrgIAMPolicy($orgId, $body): \ArthurHlt\Zitadel\Model\V1UpdateCustomOrgIAMPolicyResponse
```

Update Custom Org IAM Policy

Use Get Domain Settings for Organization instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$orgId = 'orgId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateCustomOrgIAMPolicyBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateCustomOrgIAMPolicyBody

try {
    $result = $apiInstance->adminServiceUpdateCustomOrgIAMPolicy($orgId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceUpdateCustomOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orgId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateCustomOrgIAMPolicyBody**](../Model/AdminServiceUpdateCustomOrgIAMPolicyBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateCustomOrgIAMPolicyResponse**](../Model/V1UpdateCustomOrgIAMPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateDomainPolicy()`

```php
adminServiceUpdateDomainPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateDomainPolicyResponse
```

Update Domain Settings

Update the domain settings configured as default on the instance. Domain settings specify how ZITADEL should handle domains, usernames, emails and validation. It affects all organizations that do not have overwritten settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateDomainPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateDomainPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateDomainPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceUpdateDomainPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateDomainPolicyRequest**](../Model/V1UpdateDomainPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateDomainPolicyResponse**](../Model/V1UpdateDomainPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateOrgIAMPolicy()`

```php
adminServiceUpdateOrgIAMPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateOrgIAMPolicyResponse
```

Update Org IAM Policy

Use Update Domain Settings instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\DomainSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateOrgIAMPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateOrgIAMPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateOrgIAMPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainSettingsApi->adminServiceUpdateOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateOrgIAMPolicyRequest**](../Model/V1UpdateOrgIAMPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOrgIAMPolicyResponse**](../Model/V1UpdateOrgIAMPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
