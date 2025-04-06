# ArthurHlt\Zitadel\PasswordSettingsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetLockoutPolicy()**](PasswordSettingsApi.md#adminServiceGetLockoutPolicy) | **GET** /policies/lockout | Get Password Lockout Settings
[**adminServiceGetPasswordAgePolicy()**](PasswordSettingsApi.md#adminServiceGetPasswordAgePolicy) | **GET** /policies/password/age | Get Password Age Settings
[**adminServiceGetPasswordComplexityPolicy()**](PasswordSettingsApi.md#adminServiceGetPasswordComplexityPolicy) | **GET** /policies/password/complexity | Get Password Complexity Settings
[**adminServiceUpdateLockoutPolicy()**](PasswordSettingsApi.md#adminServiceUpdateLockoutPolicy) | **PUT** /policies/password/lockout | Update Password Lockout Settings
[**adminServiceUpdatePasswordAgePolicy()**](PasswordSettingsApi.md#adminServiceUpdatePasswordAgePolicy) | **PUT** /policies/password/age | Update Password Age Settings
[**adminServiceUpdatePasswordComplexityPolicy()**](PasswordSettingsApi.md#adminServiceUpdatePasswordComplexityPolicy) | **PUT** /policies/password/complexity | Update Password Complexity Settings
[**managementServiceAddCustomLockoutPolicy()**](PasswordSettingsApi.md#managementServiceAddCustomLockoutPolicy) | **POST** /policies/lockout | Add Password Lockout Settings
[**managementServiceAddCustomPasswordAgePolicy()**](PasswordSettingsApi.md#managementServiceAddCustomPasswordAgePolicy) | **POST** /policies/password/age | Add Password Age Settings
[**managementServiceAddCustomPasswordComplexityPolicy()**](PasswordSettingsApi.md#managementServiceAddCustomPasswordComplexityPolicy) | **POST** /policies/password/complexity | Create Password Complexity Settings
[**managementServiceGetDefaultLockoutPolicy()**](PasswordSettingsApi.md#managementServiceGetDefaultLockoutPolicy) | **GET** /policies/default/lockout | Get Default Password Lockout Settings
[**managementServiceGetDefaultPasswordAgePolicy()**](PasswordSettingsApi.md#managementServiceGetDefaultPasswordAgePolicy) | **GET** /policies/default/password/age | Get Default Password Age Settings
[**managementServiceGetDefaultPasswordComplexityPolicy()**](PasswordSettingsApi.md#managementServiceGetDefaultPasswordComplexityPolicy) | **GET** /policies/default/password/complexity | Get Default Password Complexity Settings
[**managementServiceResetLockoutPolicyToDefault()**](PasswordSettingsApi.md#managementServiceResetLockoutPolicyToDefault) | **DELETE** /policies/lockout | Reset Password Lockout Settings to Default
[**managementServiceResetPasswordAgePolicyToDefault()**](PasswordSettingsApi.md#managementServiceResetPasswordAgePolicyToDefault) | **DELETE** /policies/password/age | Reset Password Age Settings to Default
[**managementServiceResetPasswordComplexityPolicyToDefault()**](PasswordSettingsApi.md#managementServiceResetPasswordComplexityPolicyToDefault) | **DELETE** /policies/password/complexity | Reset Password Complexity Settings to Default
[**managementServiceUpdateCustomLockoutPolicy()**](PasswordSettingsApi.md#managementServiceUpdateCustomLockoutPolicy) | **PUT** /policies/lockout | Update Password Lockout Settings


## `adminServiceGetLockoutPolicy()`

```php
adminServiceGetLockoutPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetLockoutPolicyResponse
```

Get Password Lockout Settings

Returns the password lockout settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify when a user should be locked (e.g how many password attempts). The user has to be unlocked by an administrator afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetLockoutPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->adminServiceGetLockoutPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetLockoutPolicyResponse**](../Model/Zitadeladminv1GetLockoutPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetPasswordAgePolicy()`

```php
adminServiceGetPasswordAgePolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetPasswordAgePolicyResponse
```

Get Password Age Settings

Returns the password age settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify the expiry of password, after which a user is forced to change it on the next login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetPasswordAgePolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->adminServiceGetPasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetPasswordAgePolicyResponse**](../Model/Zitadeladminv1GetPasswordAgePolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetPasswordComplexityPolicy()`

```php
adminServiceGetPasswordComplexityPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetPasswordComplexityPolicyResponse
```

Get Password Complexity Settings

Returns the password complexity settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify how a password should look (characters, length, etc.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetPasswordComplexityPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->adminServiceGetPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetPasswordComplexityPolicyResponse**](../Model/Zitadeladminv1GetPasswordComplexityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateLockoutPolicy()`

```php
adminServiceUpdateLockoutPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateLockoutPolicyResponse
```

Update Password Lockout Settings

Update the password lockout settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify when a user should be locked (e.g how many password attempts). The user has to be unlocked by an administrator afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateLockoutPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateLockoutPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateLockoutPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->adminServiceUpdateLockoutPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateLockoutPolicyRequest**](../Model/V1UpdateLockoutPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateLockoutPolicyResponse**](../Model/V1UpdateLockoutPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdatePasswordAgePolicy()`

```php
adminServiceUpdatePasswordAgePolicy($body): \ArthurHlt\Zitadel\Model\V1UpdatePasswordAgePolicyResponse
```

Update Password Age Settings

Updates the default password complexity settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify the expiry of password, after which a user is forced to change it on the next login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdatePasswordAgePolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdatePasswordAgePolicyRequest

try {
    $result = $apiInstance->adminServiceUpdatePasswordAgePolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->adminServiceUpdatePasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdatePasswordAgePolicyRequest**](../Model/V1UpdatePasswordAgePolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdatePasswordAgePolicyResponse**](../Model/V1UpdatePasswordAgePolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdatePasswordComplexityPolicy()`

```php
adminServiceUpdatePasswordComplexityPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdatePasswordComplexityPolicyResponse
```

Update Password Complexity Settings

Updates the default password complexity settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify how a password should look (characters, length, etc.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdatePasswordComplexityPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdatePasswordComplexityPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdatePasswordComplexityPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->adminServiceUpdatePasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdatePasswordComplexityPolicyRequest**](../Model/V1UpdatePasswordComplexityPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdatePasswordComplexityPolicyResponse**](../Model/V1UpdatePasswordComplexityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddCustomLockoutPolicy()`

```php
managementServiceAddCustomLockoutPolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddCustomLockoutPolicyResponse
```

Add Password Lockout Settings

Add new password lockout settings on the organization level. This will overwrite the settings set on the instance for this organization. The settings specify when a user should be locked (e.g how many password attempts). The user has to be unlocked by an administrator afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddCustomLockoutPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddCustomLockoutPolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddCustomLockoutPolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceAddCustomLockoutPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddCustomLockoutPolicyRequest**](../Model/V1AddCustomLockoutPolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomLockoutPolicyResponse**](../Model/V1AddCustomLockoutPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddCustomPasswordAgePolicy()`

```php
managementServiceAddCustomPasswordAgePolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddCustomPasswordAgePolicyResponse
```

Add Password Age Settings

Create new password age settings for the organization. This will overwrite the settings of the instance for this organization. The settings specify the expiry of password, after which a user is forced to change it on the next login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddCustomPasswordAgePolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddCustomPasswordAgePolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddCustomPasswordAgePolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceAddCustomPasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddCustomPasswordAgePolicyRequest**](../Model/V1AddCustomPasswordAgePolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomPasswordAgePolicyResponse**](../Model/V1AddCustomPasswordAgePolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddCustomPasswordComplexityPolicy()`

```php
managementServiceAddCustomPasswordComplexityPolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddCustomPasswordComplexityPolicyResponse
```

Create Password Complexity Settings

Create new password complexity settings for the organization. This will overwrite the settings of the instance for this organization. The settings specify how a password should look (characters, length, etc.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddCustomPasswordComplexityPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddCustomPasswordComplexityPolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddCustomPasswordComplexityPolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceAddCustomPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddCustomPasswordComplexityPolicyRequest**](../Model/V1AddCustomPasswordComplexityPolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomPasswordComplexityPolicyResponse**](../Model/V1AddCustomPasswordComplexityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultLockoutPolicy()`

```php
managementServiceGetDefaultLockoutPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultLockoutPolicyResponse
```

Get Default Password Lockout Settings

Returns the default password lockout settings configured on the instance. The settings specify when a user should be locked (e.g how many password attempts). The user has to be unlocked by an administrator afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultLockoutPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceGetDefaultLockoutPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultLockoutPolicyResponse**](../Model/V1GetDefaultLockoutPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultPasswordAgePolicy()`

```php
managementServiceGetDefaultPasswordAgePolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultPasswordAgePolicyResponse
```

Get Default Password Age Settings

Returns the default password age settings configured on the instance. The settings specify the expiry of password, after which a user is forced to change it on the next login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultPasswordAgePolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceGetDefaultPasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultPasswordAgePolicyResponse**](../Model/V1GetDefaultPasswordAgePolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultPasswordComplexityPolicy()`

```php
managementServiceGetDefaultPasswordComplexityPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultPasswordComplexityPolicyResponse
```

Get Default Password Complexity Settings

Returns the default password complexity settings configured on the instance. The settings specify how a password should look (characters, length, etc.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultPasswordComplexityPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceGetDefaultPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultPasswordComplexityPolicyResponse**](../Model/V1GetDefaultPasswordComplexityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetLockoutPolicyToDefault()`

```php
managementServiceResetLockoutPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetLockoutPolicyToDefaultResponse
```

Reset Password Lockout Settings to Default

Remove the password lockout settings from the organization. The settings configured on the instance will trigger afterward for this organization. The settings specify when a user should be locked (e.g how many password attempts). The user has to be unlocked by an administrator afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetLockoutPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceResetLockoutPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetLockoutPolicyToDefaultResponse**](../Model/V1ResetLockoutPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetPasswordAgePolicyToDefault()`

```php
managementServiceResetPasswordAgePolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetPasswordAgePolicyToDefaultResponse
```

Reset Password Age Settings to Default

Remove the password age settings of the organization and therefore use the default settings on the instance.. The settings specify the expiry of password, after which a user is forced to change it on the next login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetPasswordAgePolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceResetPasswordAgePolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetPasswordAgePolicyToDefaultResponse**](../Model/V1ResetPasswordAgePolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetPasswordComplexityPolicyToDefault()`

```php
managementServiceResetPasswordComplexityPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetPasswordComplexityPolicyToDefaultResponse
```

Reset Password Complexity Settings to Default

Remove the password complexity settings of the organization and therefore use the default settings on the instance. The settings specify how a password should look (characters, length, etc.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetPasswordComplexityPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceResetPasswordComplexityPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetPasswordComplexityPolicyToDefaultResponse**](../Model/V1ResetPasswordComplexityPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateCustomLockoutPolicy()`

```php
managementServiceUpdateCustomLockoutPolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateCustomLockoutPolicyResponse
```

Update Password Lockout Settings

Update the password lockout settings configured on the organization. The settings specify when a user should be locked (e.g how many password attempts). The user has to be unlocked by an administrator afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PasswordSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateCustomLockoutPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateCustomLockoutPolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateCustomLockoutPolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordSettingsApi->managementServiceUpdateCustomLockoutPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateCustomLockoutPolicyRequest**](../Model/V1UpdateCustomLockoutPolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateCustomLockoutPolicyResponse**](../Model/V1UpdateCustomLockoutPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
