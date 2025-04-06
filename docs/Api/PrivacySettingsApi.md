# ArthurHlt\Zitadel\PrivacySettingsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceUpdatePrivacyPolicy()**](PrivacySettingsApi.md#adminServiceUpdatePrivacyPolicy) | **PUT** /policies/privacy | Update Privacy Settings
[**managementServiceAddCustomPrivacyPolicy()**](PrivacySettingsApi.md#managementServiceAddCustomPrivacyPolicy) | **POST** /policies/privacy | Add Privacy Settings
[**managementServiceGetDefaultPrivacyPolicy()**](PrivacySettingsApi.md#managementServiceGetDefaultPrivacyPolicy) | **GET** /policies/default/privacy | Get Default Privacy Settings
[**managementServiceResetPrivacyPolicyToDefault()**](PrivacySettingsApi.md#managementServiceResetPrivacyPolicyToDefault) | **DELETE** /policies/privacy | Reset Privacy Settings to Default


## `adminServiceUpdatePrivacyPolicy()`

```php
adminServiceUpdatePrivacyPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdatePrivacyPolicyResponse
```

Update Privacy Settings

Update the privacy settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify the terms and services, privacy policy, etc. A registering user has to accept the configured settings. Variable {{.Lang}} can be set to have different links based on the language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PrivacySettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdatePrivacyPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdatePrivacyPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdatePrivacyPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacySettingsApi->adminServiceUpdatePrivacyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdatePrivacyPolicyRequest**](../Model/V1UpdatePrivacyPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdatePrivacyPolicyResponse**](../Model/V1UpdatePrivacyPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddCustomPrivacyPolicy()`

```php
managementServiceAddCustomPrivacyPolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddCustomPrivacyPolicyResponse
```

Add Privacy Settings

Add a custom privacy policy for the organization. The configuration of the instance will be overwritten. Variable {{.Lang}} can be set to have different links based on the language. Make sure to identify which settings should be triggered by sending the organization scope. The settings specify the terms and services, privacy policy, etc. A registering user has to accept the configured settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PrivacySettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddCustomPrivacyPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddCustomPrivacyPolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddCustomPrivacyPolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacySettingsApi->managementServiceAddCustomPrivacyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddCustomPrivacyPolicyRequest**](../Model/V1AddCustomPrivacyPolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomPrivacyPolicyResponse**](../Model/V1AddCustomPrivacyPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultPrivacyPolicy()`

```php
managementServiceGetDefaultPrivacyPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultPrivacyPolicyResponse
```

Get Default Privacy Settings

Returns the default privacy settings configured on the instance. The settings specify the terms and services, privacy policy, etc. A registering user has to accept the configured settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PrivacySettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultPrivacyPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacySettingsApi->managementServiceGetDefaultPrivacyPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultPrivacyPolicyResponse**](../Model/V1GetDefaultPrivacyPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetPrivacyPolicyToDefault()`

```php
managementServiceResetPrivacyPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetPrivacyPolicyToDefaultResponse
```

Reset Privacy Settings to Default

The settings from the organization will be removed and therefore the default settings configured on the instance will be triggered. The settings specify the terms and services, privacy policy, etc. A registering user has to accept the configured settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\PrivacySettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetPrivacyPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacySettingsApi->managementServiceResetPrivacyPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetPrivacyPolicyToDefaultResponse**](../Model/V1ResetPrivacyPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
