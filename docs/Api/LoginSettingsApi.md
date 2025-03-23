# ArthurHlt\Zitadel\LoginSettingsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddIDPToLoginPolicy()**](LoginSettingsApi.md#adminServiceAddIDPToLoginPolicy) | **POST** /policies/login/idps | Add Linked Identity Provider
[**adminServiceAddMultiFactorToLoginPolicy()**](LoginSettingsApi.md#adminServiceAddMultiFactorToLoginPolicy) | **POST** /policies/login/multi_factors | Add Multi-Factor (MFA)
[**adminServiceAddSecondFactorToLoginPolicy()**](LoginSettingsApi.md#adminServiceAddSecondFactorToLoginPolicy) | **POST** /policies/login/second_factors | Add Second Factor (2FA)
[**adminServiceListLoginPolicyIDPs()**](LoginSettingsApi.md#adminServiceListLoginPolicyIDPs) | **POST** /policies/login/idps/_search | List Linked Identity Providers
[**adminServiceListLoginPolicyMultiFactors()**](LoginSettingsApi.md#adminServiceListLoginPolicyMultiFactors) | **POST** /policies/login/multi_factors/_search | List Multi-factors (MFA)
[**adminServiceListLoginPolicySecondFactors()**](LoginSettingsApi.md#adminServiceListLoginPolicySecondFactors) | **POST** /policies/login/second_factors/_search | List Second Factors (2FA)
[**adminServiceRemoveIDPFromLoginPolicy()**](LoginSettingsApi.md#adminServiceRemoveIDPFromLoginPolicy) | **DELETE** /policies/login/idps/{idpId_1} | Remove Linked Identity Provider
[**adminServiceRemoveMultiFactorFromLoginPolicy()**](LoginSettingsApi.md#adminServiceRemoveMultiFactorFromLoginPolicy) | **DELETE** /policies/login/multi_factors/{type_1} | Remove Multi-factor (MFA)
[**adminServiceRemoveSecondFactorFromLoginPolicy()**](LoginSettingsApi.md#adminServiceRemoveSecondFactorFromLoginPolicy) | **DELETE** /policies/login/second_factors/{type_1} | Remove Second Factor (2FA)
[**adminServiceUpdateLoginPolicy()**](LoginSettingsApi.md#adminServiceUpdateLoginPolicy) | **PUT** /policies/login | Update Login Settings
[**managementServiceAddCustomLoginPolicy()**](LoginSettingsApi.md#managementServiceAddCustomLoginPolicy) | **POST** /policies/login | Create Custom Login Settings
[**managementServiceGetDefaultLoginPolicy()**](LoginSettingsApi.md#managementServiceGetDefaultLoginPolicy) | **GET** /policies/default/login | Get Default Login Settings
[**managementServiceListLoginPolicyMultiFactors()**](LoginSettingsApi.md#managementServiceListLoginPolicyMultiFactors) | **POST** /policies/login/auth_factors/_search | List Multi-factors (MFA)
[**managementServiceRemoveIDPFromLoginPolicy()**](LoginSettingsApi.md#managementServiceRemoveIDPFromLoginPolicy) | **DELETE** /policies/login/idps/{idpId} | Remove Linked Identity Provider
[**managementServiceRemoveMultiFactorFromLoginPolicy()**](LoginSettingsApi.md#managementServiceRemoveMultiFactorFromLoginPolicy) | **DELETE** /policies/login/multi_factors/{type} | Remove Multi-factor (MFA)
[**managementServiceRemoveSecondFactorFromLoginPolicy()**](LoginSettingsApi.md#managementServiceRemoveSecondFactorFromLoginPolicy) | **DELETE** /policies/login/second_factors/{type} | Remove Second Factor (2FA)
[**managementServiceResetLoginPolicyToDefault()**](LoginSettingsApi.md#managementServiceResetLoginPolicyToDefault) | **DELETE** /policies/login | Reset Custom Login Settings to Default


## `adminServiceAddIDPToLoginPolicy()`

```php
adminServiceAddIDPToLoginPolicy($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyResponse
```

Add Linked Identity Provider

Add/link a pre-configured identity provider to the login settings of the instance. This means that it will be shown to the users on the login page. It affects all organizations, without custom login settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyRequest

try {
    $result = $apiInstance->adminServiceAddIDPToLoginPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceAddIDPToLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyRequest**](../Model/Zitadeladminv1AddIDPToLoginPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyResponse**](../Model/Zitadeladminv1AddIDPToLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddMultiFactorToLoginPolicy()`

```php
adminServiceAddMultiFactorToLoginPolicy($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddMultiFactorToLoginPolicyResponse
```

Add Multi-Factor (MFA)

Add a multi-factor (MFA) to the login settings of the instance. It affects all organizations, without custom login settings. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc).  Per definition, it is called multi-factor factor or passwordless as it is used as first and second authentication and a password is not necessary. In the UI we generalize it as passwordless or passkey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddMultiFactorToLoginPolicyRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddMultiFactorToLoginPolicyRequest

try {
    $result = $apiInstance->adminServiceAddMultiFactorToLoginPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceAddMultiFactorToLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddMultiFactorToLoginPolicyRequest**](../Model/Zitadeladminv1AddMultiFactorToLoginPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddMultiFactorToLoginPolicyResponse**](../Model/Zitadeladminv1AddMultiFactorToLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddSecondFactorToLoginPolicy()`

```php
adminServiceAddSecondFactorToLoginPolicy($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddSecondFactorToLoginPolicyResponse
```

Add Second Factor (2FA)

Add a new second factor (2FA) to the login settings of the instance. Users will have the possibility to authenticate with the configured factor afterward. It affects all organizations, without custom login settings. Authentication factors are used as an additional factor to add more security to your users (e.g. Authentication App, FingerPrint, Windows Hello, etc). Per definition, it is called a second factor as it is used as an additional authentication after a password. In the UI we generalize this as multi-factor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddSecondFactorToLoginPolicyRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddSecondFactorToLoginPolicyRequest

try {
    $result = $apiInstance->adminServiceAddSecondFactorToLoginPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceAddSecondFactorToLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddSecondFactorToLoginPolicyRequest**](../Model/Zitadeladminv1AddSecondFactorToLoginPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddSecondFactorToLoginPolicyResponse**](../Model/Zitadeladminv1AddSecondFactorToLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListLoginPolicyIDPs()`

```php
adminServiceListLoginPolicyIDPs($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsResponse
```

List Linked Identity Providers

Returns a list of identity providers that are linked in the login policy. This means, that they are configured for the instance and will be shown to the users. It affects all organizations, without custom login settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsRequest

try {
    $result = $apiInstance->adminServiceListLoginPolicyIDPs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceListLoginPolicyIDPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsRequest**](../Model/Zitadeladminv1ListLoginPolicyIDPsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsResponse**](../Model/Zitadeladminv1ListLoginPolicyIDPsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListLoginPolicyMultiFactors()`

```php
adminServiceListLoginPolicyMultiFactors(): \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyMultiFactorsResponse
```

List Multi-factors (MFA)

Returns a list of multi-factors (MFA) configured on the login settings of the instance. It affects all organizations, without custom login settings. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc).  Per definition, it is called multifactor factor or passwordless as it is used as first and second authentication and a password is not necessary. In the UI we generalize it as passwordless or passkey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListLoginPolicyMultiFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceListLoginPolicyMultiFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyMultiFactorsResponse**](../Model/Zitadeladminv1ListLoginPolicyMultiFactorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListLoginPolicySecondFactors()`

```php
adminServiceListLoginPolicySecondFactors(): \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicySecondFactorsResponse
```

List Second Factors (2FA)

Returns a list of second factors (2FA) configured on the login settings of the instance. It affects all organizations, without custom login settings. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc). Per definition, it is called the second factor as it is used after a password. In the UI we generalize it as multi-factor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListLoginPolicySecondFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceListLoginPolicySecondFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicySecondFactorsResponse**](../Model/Zitadeladminv1ListLoginPolicySecondFactorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveIDPFromLoginPolicy()`

```php
adminServiceRemoveIDPFromLoginPolicy($idpId1): \ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveIDPFromLoginPolicyResponse
```

Remove Linked Identity Provider

Remove an identity provider from the login settings of the instance. This means that it will not be shown to the users on the login page. It affects all organizations, without custom login settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveIDPFromLoginPolicy($idpId1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceRemoveIDPFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveIDPFromLoginPolicyResponse**](../Model/Zitadeladminv1RemoveIDPFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveMultiFactorFromLoginPolicy()`

```php
adminServiceRemoveMultiFactorFromLoginPolicy($type1): \ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveMultiFactorFromLoginPolicyResponse
```

Remove Multi-factor (MFA)

Remove a multi-factor (MFA) from the login settings of the instance. It affects all organizations, without custom login settings. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc).  Per definition, it is called multi-factor factor or passwordless as it is used as first and second authentication and a password is not necessary. In the UI we generalize it as passwordless or passkey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type1 = 'type1_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveMultiFactorFromLoginPolicy($type1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceRemoveMultiFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveMultiFactorFromLoginPolicyResponse**](../Model/Zitadeladminv1RemoveMultiFactorFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveSecondFactorFromLoginPolicy()`

```php
adminServiceRemoveSecondFactorFromLoginPolicy($type1): \ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveSecondFactorFromLoginPolicyResponse
```

Remove Second Factor (2FA)

Remove a configured second factor (2FA) from the login settings of the instance. It affects all organizations, without custom login settings. Users will not be able to authenticate with the configured factor afterward. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc). Per definition, it is called the second factor as it is used after a password. In the UI we generalize it as multi-factor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type1 = 'type1_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveSecondFactorFromLoginPolicy($type1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceRemoveSecondFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveSecondFactorFromLoginPolicyResponse**](../Model/Zitadeladminv1RemoveSecondFactorFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateLoginPolicy()`

```php
adminServiceUpdateLoginPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateLoginPolicyResponse
```

Update Login Settings

Update the default login settings defined on the instance level. It will trigger for all organizations, that don't overwrite the settings. The login policy defines what kind of authentication possibilities the user should have. Generally speaking the behavior of the login and register UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateLoginPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateLoginPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateLoginPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->adminServiceUpdateLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateLoginPolicyRequest**](../Model/V1UpdateLoginPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateLoginPolicyResponse**](../Model/V1UpdateLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddCustomLoginPolicy()`

```php
managementServiceAddCustomLoginPolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddCustomLoginPolicyResponse
```

Create Custom Login Settings

Create login settings for the organization and therefore overwrite the default settings for this organization. The login policy defines what kind of authentication possibilities the user should have. Generally speaking the behavior of the login and register UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddCustomLoginPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddCustomLoginPolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddCustomLoginPolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceAddCustomLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddCustomLoginPolicyRequest**](../Model/V1AddCustomLoginPolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomLoginPolicyResponse**](../Model/V1AddCustomLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultLoginPolicy()`

```php
managementServiceGetDefaultLoginPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultLoginPolicyResponse
```

Get Default Login Settings

Returns the default login settings defined on the instance level. The login policy defines what kind of authentication possibilities the user should have. Generally speaking the behavior of the login and register UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultLoginPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceGetDefaultLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultLoginPolicyResponse**](../Model/V1GetDefaultLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListLoginPolicyMultiFactors()`

```php
managementServiceListLoginPolicyMultiFactors($xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1ListLoginPolicyMultiFactorsResponse
```

List Multi-factors (MFA)

Returns a list of multi-factors (MFA) configured on the login settings of the organization. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc).  Per definition, it is called multifactor factor or passwordless as it is used as first and second authentication and a password is not necessary. In the UI we generalize it as passwordless or passkey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListLoginPolicyMultiFactors($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceListLoginPolicyMultiFactors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1ListLoginPolicyMultiFactorsResponse**](../Model/Zitadelmanagementv1ListLoginPolicyMultiFactorsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveIDPFromLoginPolicy()`

```php
managementServiceRemoveIDPFromLoginPolicy($idpId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveIDPFromLoginPolicyResponse
```

Remove Linked Identity Provider

Remove an identity provider from the login settings of the organization. This means that it will not be shown to the users on the login page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveIDPFromLoginPolicy($idpId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceRemoveIDPFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveIDPFromLoginPolicyResponse**](../Model/Zitadelmanagementv1RemoveIDPFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveMultiFactorFromLoginPolicy()`

```php
managementServiceRemoveMultiFactorFromLoginPolicy($type, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveMultiFactorFromLoginPolicyResponse
```

Remove Multi-factor (MFA)

Remove a multi-factor (MFA) from the login settings of the organization. It affects all organizations, without custom login settings. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc).  Per definition, it is called multi-factor factor or passwordless as it is used as first and second authentication and a password is not necessary. In the UI we generalize it as passwordless or passkey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveMultiFactorFromLoginPolicy($type, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceRemoveMultiFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveMultiFactorFromLoginPolicyResponse**](../Model/Zitadelmanagementv1RemoveMultiFactorFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveSecondFactorFromLoginPolicy()`

```php
managementServiceRemoveSecondFactorFromLoginPolicy($type, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveSecondFactorFromLoginPolicyResponse
```

Remove Second Factor (2FA)

Remove a configured second factor (2FA) from the login settings of the organization. Users will not be able to authenticate with the configured factor afterward. Authentication factors are used as an additional layer of security for your users (e.g. Authentication App, FingerPrint, Windows Hello, etc). Per definition, it is called the second factor as it is used after a password. In the UI we generalize it as multi-factor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveSecondFactorFromLoginPolicy($type, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceRemoveSecondFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveSecondFactorFromLoginPolicyResponse**](../Model/Zitadelmanagementv1RemoveSecondFactorFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetLoginPolicyToDefault()`

```php
managementServiceResetLoginPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetLoginPolicyToDefaultResponse
```

Reset Custom Login Settings to Default

Remove the custom settings from the organization. The default settings of the instance will be triggered afterward. The login policy defines what kind of authentication possibilities the user should have. Generally speaking the behavior of the login and register UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetLoginPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginSettingsApi->managementServiceResetLoginPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetLoginPolicyToDefaultResponse**](../Model/V1ResetLoginPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
