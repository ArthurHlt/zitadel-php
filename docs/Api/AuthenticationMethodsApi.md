# ArthurHlt\Zitadel\AuthenticationMethodsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddMultiFactorToLoginPolicy()**](AuthenticationMethodsApi.md#adminServiceAddMultiFactorToLoginPolicy) | **POST** /policies/login/multi_factors | Add Multi-Factor (MFA)
[**adminServiceAddSecondFactorToLoginPolicy()**](AuthenticationMethodsApi.md#adminServiceAddSecondFactorToLoginPolicy) | **POST** /policies/login/second_factors | Add Second Factor (2FA)
[**adminServiceListLoginPolicyMultiFactors()**](AuthenticationMethodsApi.md#adminServiceListLoginPolicyMultiFactors) | **POST** /policies/login/multi_factors/_search | List Multi-factors (MFA)
[**adminServiceListLoginPolicySecondFactors()**](AuthenticationMethodsApi.md#adminServiceListLoginPolicySecondFactors) | **POST** /policies/login/second_factors/_search | List Second Factors (2FA)
[**adminServiceRemoveMultiFactorFromLoginPolicy()**](AuthenticationMethodsApi.md#adminServiceRemoveMultiFactorFromLoginPolicy) | **DELETE** /policies/login/multi_factors/{type_1} | Remove Multi-factor (MFA)
[**adminServiceRemoveSecondFactorFromLoginPolicy()**](AuthenticationMethodsApi.md#adminServiceRemoveSecondFactorFromLoginPolicy) | **DELETE** /policies/login/second_factors/{type_1} | Remove Second Factor (2FA)
[**managementServiceListLoginPolicyMultiFactors()**](AuthenticationMethodsApi.md#managementServiceListLoginPolicyMultiFactors) | **POST** /policies/login/auth_factors/_search | List Multi-factors (MFA)
[**managementServiceRemoveMultiFactorFromLoginPolicy()**](AuthenticationMethodsApi.md#managementServiceRemoveMultiFactorFromLoginPolicy) | **DELETE** /policies/login/multi_factors/{type} | Remove Multi-factor (MFA)
[**managementServiceRemoveSecondFactorFromLoginPolicy()**](AuthenticationMethodsApi.md#managementServiceRemoveSecondFactorFromLoginPolicy) | **DELETE** /policies/login/second_factors/{type} | Remove Second Factor (2FA)


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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->adminServiceAddMultiFactorToLoginPolicy: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->adminServiceAddSecondFactorToLoginPolicy: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListLoginPolicyMultiFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationMethodsApi->adminServiceListLoginPolicyMultiFactors: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListLoginPolicySecondFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationMethodsApi->adminServiceListLoginPolicySecondFactors: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->adminServiceRemoveMultiFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->adminServiceRemoveSecondFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->managementServiceListLoginPolicyMultiFactors: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->managementServiceRemoveMultiFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\AuthenticationMethodsApi(
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
    echo 'Exception when calling AuthenticationMethodsApi->managementServiceRemoveSecondFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
