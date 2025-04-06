# ArthurHlt\Zitadel\SettingsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceActivateLabelPolicy()**](SettingsApi.md#adminServiceActivateLabelPolicy) | **POST** /policies/label/_activate | Activate Labeling/Branding Settings
[**adminServiceAddCustomDomainPolicy()**](SettingsApi.md#adminServiceAddCustomDomainPolicy) | **POST** /orgs/{orgId}/policies/domain | Set a Domain Settings for an Organization
[**adminServiceAddCustomOrgIAMPolicy()**](SettingsApi.md#adminServiceAddCustomOrgIAMPolicy) | **POST** /orgs/{orgId}/policies/orgiam | Add Custom Org IAM Policy
[**adminServiceAddIDPToLoginPolicy()**](SettingsApi.md#adminServiceAddIDPToLoginPolicy) | **POST** /policies/login/idps | Add Linked Identity Provider
[**adminServiceAddMultiFactorToLoginPolicy()**](SettingsApi.md#adminServiceAddMultiFactorToLoginPolicy) | **POST** /policies/login/multi_factors | Add Multi-Factor (MFA)
[**adminServiceAddNotificationPolicy()**](SettingsApi.md#adminServiceAddNotificationPolicy) | **POST** /policies/notification | Add Notification Settings
[**adminServiceAddOIDCSettings()**](SettingsApi.md#adminServiceAddOIDCSettings) | **POST** /settings/oidc | Add OIDC Settings
[**adminServiceAddSecondFactorToLoginPolicy()**](SettingsApi.md#adminServiceAddSecondFactorToLoginPolicy) | **POST** /policies/login/second_factors | Add Second Factor (2FA)
[**adminServiceGetCustomDomainPolicy()**](SettingsApi.md#adminServiceGetCustomDomainPolicy) | **GET** /orgs/{orgId}/policies/domain | Get Domain Settings for Organization
[**adminServiceGetCustomOrgIAMPolicy()**](SettingsApi.md#adminServiceGetCustomOrgIAMPolicy) | **GET** /orgs/{orgId}/policies/orgiam | Get Org IAM Policy
[**adminServiceGetDefaultOrg()**](SettingsApi.md#adminServiceGetDefaultOrg) | **GET** /orgs/default | Get Default Organization
[**adminServiceGetDomainPolicy()**](SettingsApi.md#adminServiceGetDomainPolicy) | **GET** /policies/domain | Get Domain Settings
[**adminServiceGetLockoutPolicy()**](SettingsApi.md#adminServiceGetLockoutPolicy) | **GET** /policies/lockout | Get Password Lockout Settings
[**adminServiceGetNotificationPolicy()**](SettingsApi.md#adminServiceGetNotificationPolicy) | **GET** /policies/notification | Return Notification Settings
[**adminServiceGetOIDCSettings()**](SettingsApi.md#adminServiceGetOIDCSettings) | **GET** /settings/oidc | Get OIDC Settings
[**adminServiceGetOrgIAMPolicy()**](SettingsApi.md#adminServiceGetOrgIAMPolicy) | **GET** /policies/orgiam | Get Org IAM Policy
[**adminServiceGetPasswordAgePolicy()**](SettingsApi.md#adminServiceGetPasswordAgePolicy) | **GET** /policies/password/age | Get Password Age Settings
[**adminServiceGetPasswordComplexityPolicy()**](SettingsApi.md#adminServiceGetPasswordComplexityPolicy) | **GET** /policies/password/complexity | Get Password Complexity Settings
[**adminServiceGetPreviewLabelPolicy()**](SettingsApi.md#adminServiceGetPreviewLabelPolicy) | **GET** /policies/label/_preview | Get Preview Private Labeling/Branding Settings
[**adminServiceGetSecurityPolicy()**](SettingsApi.md#adminServiceGetSecurityPolicy) | **GET** /policies/security | Get Security Settings
[**adminServiceListLoginPolicyIDPs()**](SettingsApi.md#adminServiceListLoginPolicyIDPs) | **POST** /policies/login/idps/_search | List Linked Identity Providers
[**adminServiceListLoginPolicyMultiFactors()**](SettingsApi.md#adminServiceListLoginPolicyMultiFactors) | **POST** /policies/login/multi_factors/_search | List Multi-factors (MFA)
[**adminServiceListLoginPolicySecondFactors()**](SettingsApi.md#adminServiceListLoginPolicySecondFactors) | **POST** /policies/login/second_factors/_search | List Second Factors (2FA)
[**adminServiceRemoveIDPFromLoginPolicy()**](SettingsApi.md#adminServiceRemoveIDPFromLoginPolicy) | **DELETE** /policies/login/idps/{idpId_1} | Remove Linked Identity Provider
[**adminServiceRemoveLabelPolicyFont()**](SettingsApi.md#adminServiceRemoveLabelPolicyFont) | **DELETE** /policies/label/font | Remove Font
[**adminServiceRemoveLabelPolicyIcon()**](SettingsApi.md#adminServiceRemoveLabelPolicyIcon) | **DELETE** /policies/label/icon | Remove Icon Light
[**adminServiceRemoveLabelPolicyIconDark()**](SettingsApi.md#adminServiceRemoveLabelPolicyIconDark) | **DELETE** /policies/label/icon_dark | Remove Icon Dark
[**adminServiceRemoveLabelPolicyLogo()**](SettingsApi.md#adminServiceRemoveLabelPolicyLogo) | **DELETE** /policies/label/logo | Remove Logo Light
[**adminServiceRemoveLabelPolicyLogoDark()**](SettingsApi.md#adminServiceRemoveLabelPolicyLogoDark) | **DELETE** /policies/label/logo_dark | Remove Logo Dark
[**adminServiceRemoveMultiFactorFromLoginPolicy()**](SettingsApi.md#adminServiceRemoveMultiFactorFromLoginPolicy) | **DELETE** /policies/login/multi_factors/{type_1} | Remove Multi-factor (MFA)
[**adminServiceRemoveSecondFactorFromLoginPolicy()**](SettingsApi.md#adminServiceRemoveSecondFactorFromLoginPolicy) | **DELETE** /policies/login/second_factors/{type_1} | Remove Second Factor (2FA)
[**adminServiceResetCustomDomainPolicyToDefault()**](SettingsApi.md#adminServiceResetCustomDomainPolicyToDefault) | **DELETE** /orgs/{orgId}/policies/domain | Reset Domain Settings of Organization
[**adminServiceResetCustomOrgIAMPolicyToDefault()**](SettingsApi.md#adminServiceResetCustomOrgIAMPolicyToDefault) | **DELETE** /orgs/{orgId}/policies/orgiam | Reset Domain Settings of Organization
[**adminServiceSetDefaultOrg()**](SettingsApi.md#adminServiceSetDefaultOrg) | **PUT** /orgs/default/{orgId} | Set Default Organization
[**adminServiceSetSecurityPolicy()**](SettingsApi.md#adminServiceSetSecurityPolicy) | **PUT** /policies/security | Set Security Settings
[**adminServiceUpdateCustomDomainPolicy()**](SettingsApi.md#adminServiceUpdateCustomDomainPolicy) | **PUT** /orgs/{orgId}/policies/domain | Update Domain Settings for Organization
[**adminServiceUpdateCustomOrgIAMPolicy()**](SettingsApi.md#adminServiceUpdateCustomOrgIAMPolicy) | **PUT** /orgs/{orgId}/policies/orgiam | Update Custom Org IAM Policy
[**adminServiceUpdateDomainPolicy()**](SettingsApi.md#adminServiceUpdateDomainPolicy) | **PUT** /policies/domain | Update Domain Settings
[**adminServiceUpdateLabelPolicy()**](SettingsApi.md#adminServiceUpdateLabelPolicy) | **PUT** /policies/label | Update Labeling/Branding Settings
[**adminServiceUpdateLockoutPolicy()**](SettingsApi.md#adminServiceUpdateLockoutPolicy) | **PUT** /policies/password/lockout | Update Password Lockout Settings
[**adminServiceUpdateLoginPolicy()**](SettingsApi.md#adminServiceUpdateLoginPolicy) | **PUT** /policies/login | Update Login Settings
[**adminServiceUpdateNotificationPolicy()**](SettingsApi.md#adminServiceUpdateNotificationPolicy) | **PUT** /policies/notification | Update Notification Settings
[**adminServiceUpdateOIDCSettings()**](SettingsApi.md#adminServiceUpdateOIDCSettings) | **PUT** /settings/oidc | Add OIDC Settings
[**adminServiceUpdateOrgIAMPolicy()**](SettingsApi.md#adminServiceUpdateOrgIAMPolicy) | **PUT** /policies/orgiam | Update Org IAM Policy
[**adminServiceUpdatePasswordAgePolicy()**](SettingsApi.md#adminServiceUpdatePasswordAgePolicy) | **PUT** /policies/password/age | Update Password Age Settings
[**adminServiceUpdatePasswordComplexityPolicy()**](SettingsApi.md#adminServiceUpdatePasswordComplexityPolicy) | **PUT** /policies/password/complexity | Update Password Complexity Settings
[**adminServiceUpdatePrivacyPolicy()**](SettingsApi.md#adminServiceUpdatePrivacyPolicy) | **PUT** /policies/privacy | Update Privacy Settings
[**managementServiceAddCustomLabelPolicy()**](SettingsApi.md#managementServiceAddCustomLabelPolicy) | **POST** /policies/label | Create Labeling/Branding Settings
[**managementServiceAddCustomLockoutPolicy()**](SettingsApi.md#managementServiceAddCustomLockoutPolicy) | **POST** /policies/lockout | Add Password Lockout Settings
[**managementServiceAddCustomLoginPolicy()**](SettingsApi.md#managementServiceAddCustomLoginPolicy) | **POST** /policies/login | Create Custom Login Settings
[**managementServiceAddCustomPasswordAgePolicy()**](SettingsApi.md#managementServiceAddCustomPasswordAgePolicy) | **POST** /policies/password/age | Add Password Age Settings
[**managementServiceAddCustomPasswordComplexityPolicy()**](SettingsApi.md#managementServiceAddCustomPasswordComplexityPolicy) | **POST** /policies/password/complexity | Create Password Complexity Settings
[**managementServiceAddCustomPrivacyPolicy()**](SettingsApi.md#managementServiceAddCustomPrivacyPolicy) | **POST** /policies/privacy | Add Privacy Settings
[**managementServiceGetDefaultLabelPolicy()**](SettingsApi.md#managementServiceGetDefaultLabelPolicy) | **GET** /policies/default/label | Get Default Private Labeling/Branding Settings
[**managementServiceGetDefaultLockoutPolicy()**](SettingsApi.md#managementServiceGetDefaultLockoutPolicy) | **GET** /policies/default/lockout | Get Default Password Lockout Settings
[**managementServiceGetDefaultLoginPolicy()**](SettingsApi.md#managementServiceGetDefaultLoginPolicy) | **GET** /policies/default/login | Get Default Login Settings
[**managementServiceGetDefaultNotificationPolicy()**](SettingsApi.md#managementServiceGetDefaultNotificationPolicy) | **GET** /policies/default/notification | Get Default Notification Settings
[**managementServiceGetDefaultPasswordAgePolicy()**](SettingsApi.md#managementServiceGetDefaultPasswordAgePolicy) | **GET** /policies/default/password/age | Get Default Password Age Settings
[**managementServiceGetDefaultPasswordComplexityPolicy()**](SettingsApi.md#managementServiceGetDefaultPasswordComplexityPolicy) | **GET** /policies/default/password/complexity | Get Default Password Complexity Settings
[**managementServiceGetDefaultPrivacyPolicy()**](SettingsApi.md#managementServiceGetDefaultPrivacyPolicy) | **GET** /policies/default/privacy | Get Default Privacy Settings
[**managementServiceListLoginPolicyMultiFactors()**](SettingsApi.md#managementServiceListLoginPolicyMultiFactors) | **POST** /policies/login/auth_factors/_search | List Multi-factors (MFA)
[**managementServiceRemoveIDPFromLoginPolicy()**](SettingsApi.md#managementServiceRemoveIDPFromLoginPolicy) | **DELETE** /policies/login/idps/{idpId} | Remove Linked Identity Provider
[**managementServiceRemoveMultiFactorFromLoginPolicy()**](SettingsApi.md#managementServiceRemoveMultiFactorFromLoginPolicy) | **DELETE** /policies/login/multi_factors/{type} | Remove Multi-factor (MFA)
[**managementServiceRemoveSecondFactorFromLoginPolicy()**](SettingsApi.md#managementServiceRemoveSecondFactorFromLoginPolicy) | **DELETE** /policies/login/second_factors/{type} | Remove Second Factor (2FA)
[**managementServiceResetLabelPolicyToDefault()**](SettingsApi.md#managementServiceResetLabelPolicyToDefault) | **DELETE** /policies/label | Reset Labeling/Branding Settings
[**managementServiceResetLockoutPolicyToDefault()**](SettingsApi.md#managementServiceResetLockoutPolicyToDefault) | **DELETE** /policies/lockout | Reset Password Lockout Settings to Default
[**managementServiceResetLoginPolicyToDefault()**](SettingsApi.md#managementServiceResetLoginPolicyToDefault) | **DELETE** /policies/login | Reset Custom Login Settings to Default
[**managementServiceResetNotificationPolicyToDefault()**](SettingsApi.md#managementServiceResetNotificationPolicyToDefault) | **DELETE** /policies/notification | Reset Notification Settings to Default
[**managementServiceResetPasswordAgePolicyToDefault()**](SettingsApi.md#managementServiceResetPasswordAgePolicyToDefault) | **DELETE** /policies/password/age | Reset Password Age Settings to Default
[**managementServiceResetPasswordComplexityPolicyToDefault()**](SettingsApi.md#managementServiceResetPasswordComplexityPolicyToDefault) | **DELETE** /policies/password/complexity | Reset Password Complexity Settings to Default
[**managementServiceResetPrivacyPolicyToDefault()**](SettingsApi.md#managementServiceResetPrivacyPolicyToDefault) | **DELETE** /policies/privacy | Reset Privacy Settings to Default
[**managementServiceUpdateCustomLockoutPolicy()**](SettingsApi.md#managementServiceUpdateCustomLockoutPolicy) | **PUT** /policies/lockout | Update Password Lockout Settings
[**settingsServiceGetSecuritySettings()**](SettingsApi.md#settingsServiceGetSecuritySettings) | **GET** /v2/settings/security | Get Security Settings
[**settingsServiceSetSecuritySettings()**](SettingsApi.md#settingsServiceSetSecuritySettings) | **PUT** /v2/policies/security | Set Security Settings


## `adminServiceActivateLabelPolicy()`

```php
adminServiceActivateLabelPolicy($body): \ArthurHlt\Zitadel\Model\V1ActivateLabelPolicyResponse
```

Activate Labeling/Branding Settings

Activates the preview private labeling/branding configured on the instance level. It will be shown to the users afterward. It affects all organizations, that don't overwrite the settings. Defines what colors, fonts, and logo should be used for the Login/Register UI, E-Mails and Console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceActivateLabelPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceActivateLabelPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ActivateLabelPolicyResponse**](../Model/V1ActivateLabelPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceAddCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceAddCustomOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceAddIDPToLoginPolicy: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceAddMultiFactorToLoginPolicy: ', $e->getMessage(), PHP_EOL;
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

## `adminServiceAddNotificationPolicy()`

```php
adminServiceAddNotificationPolicy($body): \ArthurHlt\Zitadel\Model\V1AddNotificationPolicyResponse
```

Add Notification Settings

Add new notification settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddNotificationPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddNotificationPolicyRequest

try {
    $result = $apiInstance->adminServiceAddNotificationPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceAddNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddNotificationPolicyRequest**](../Model/V1AddNotificationPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddNotificationPolicyResponse**](../Model/V1AddNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddOIDCSettings()`

```php
adminServiceAddOIDCSettings($body): \ArthurHlt\Zitadel\Model\V1AddOIDCSettingsResponse
```

Add OIDC Settings

Create new OIDC settings. The OIDC Settings define the lifetimes of the different tokens in OIDC. These settings are used for all organizations and clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddOIDCSettingsRequest(); // \ArthurHlt\Zitadel\Model\V1AddOIDCSettingsRequest

try {
    $result = $apiInstance->adminServiceAddOIDCSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceAddOIDCSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddOIDCSettingsRequest**](../Model/V1AddOIDCSettingsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddOIDCSettingsResponse**](../Model/V1AddOIDCSettingsResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceAddSecondFactorToLoginPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceGetCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceGetCustomOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetDefaultOrg();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetDefaultOrg: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetDomainPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetDomainPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetLockoutPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetLockoutPolicy: ', $e->getMessage(), PHP_EOL;
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

## `adminServiceGetNotificationPolicy()`

```php
adminServiceGetNotificationPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetNotificationPolicyResponse
```

Return Notification Settings

Return the notification settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetNotificationPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetNotificationPolicyResponse**](../Model/Zitadeladminv1GetNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetOIDCSettings()`

```php
adminServiceGetOIDCSettings(): \ArthurHlt\Zitadel\Model\V1GetOIDCSettingsResponse
```

Get OIDC Settings

The OIDC Settings define the lifetimes of the different tokens in OIDC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetOIDCSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetOIDCSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetOIDCSettingsResponse**](../Model/V1GetOIDCSettingsResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetOrgIAMPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetPasswordAgePolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetPasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetPasswordComplexityPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
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

## `adminServiceGetPreviewLabelPolicy()`

```php
adminServiceGetPreviewLabelPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetPreviewLabelPolicyResponse
```

Get Preview Private Labeling/Branding Settings

Returns the preview private labeling/branding configured on the instance level. The preview is used to show you how it will look like, and not activate it directly for your users. In the future, it should be possible to send a preview mail and have a look at the preview login. The settings will trigger if the organization has not overwritten the settings or if no specific organization is called on the login UI. Define what colors, fonts, and logo should be used for the Login/Register UI, E-Mails and Console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetPreviewLabelPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetPreviewLabelPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetPreviewLabelPolicyResponse**](../Model/Zitadeladminv1GetPreviewLabelPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetSecurityPolicy()`

```php
adminServiceGetSecurityPolicy(): \ArthurHlt\Zitadel\Model\V1GetSecurityPolicyResponse
```

Get Security Settings

Returns the security settings of the ZITADEL instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetSecurityPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceGetSecurityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetSecurityPolicyResponse**](../Model/V1GetSecurityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceListLoginPolicyIDPs: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListLoginPolicyMultiFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceListLoginPolicyMultiFactors: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceListLoginPolicySecondFactors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceListLoginPolicySecondFactors: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceRemoveIDPFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveLabelPolicyFont()`

```php
adminServiceRemoveLabelPolicyFont(): \ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyFontResponse
```

Remove Font

Removes the font from the configured label policy/branding of the instance. It will only be shown on the preview. Make sure to activate your changes afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyFont();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceRemoveLabelPolicyFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyFontResponse**](../Model/V1RemoveLabelPolicyFontResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveLabelPolicyIcon()`

```php
adminServiceRemoveLabelPolicyIcon(): \ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyIconResponse
```

Remove Icon Light

Removes the icon of the light theme from the configured label policy/branding of the instance. It will only be shown on the preview. Make sure to activate your changes afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyIcon();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceRemoveLabelPolicyIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyIconResponse**](../Model/V1RemoveLabelPolicyIconResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveLabelPolicyIconDark()`

```php
adminServiceRemoveLabelPolicyIconDark(): \ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyIconDarkResponse
```

Remove Icon Dark

Removes the icon of the dark theme from the configured label policy/branding of the instance. It will only be shown on the preview. Make sure to activate your changes afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyIconDark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceRemoveLabelPolicyIconDark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyIconDarkResponse**](../Model/V1RemoveLabelPolicyIconDarkResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveLabelPolicyLogo()`

```php
adminServiceRemoveLabelPolicyLogo(): \ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyLogoResponse
```

Remove Logo Light

Removes the logo of the light theme from the configured label policy/branding of the instance. It will only be shown on the preview. Make sure to activate your changes afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyLogo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceRemoveLabelPolicyLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyLogoResponse**](../Model/V1RemoveLabelPolicyLogoResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveLabelPolicyLogoDark()`

```php
adminServiceRemoveLabelPolicyLogoDark(): \ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyLogoDarkResponse
```

Remove Logo Dark

Removes the logo of the dark theme from the configured label policy/branding of the instance. It will only be shown on the preview. Make sure to activate your changes afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyLogoDark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceRemoveLabelPolicyLogoDark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveLabelPolicyLogoDarkResponse**](../Model/V1RemoveLabelPolicyLogoDarkResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceRemoveMultiFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceRemoveSecondFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceResetCustomDomainPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceResetCustomOrgIAMPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceSetDefaultOrg: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceSetSecurityPolicy()`

```php
adminServiceSetSecurityPolicy($body): \ArthurHlt\Zitadel\Model\V1SetSecurityPolicyResponse
```

Set Security Settings

Set the security settings of the ZITADEL instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1SetSecurityPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1SetSecurityPolicyRequest

try {
    $result = $apiInstance->adminServiceSetSecurityPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceSetSecurityPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1SetSecurityPolicyRequest**](../Model/V1SetSecurityPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetSecurityPolicyResponse**](../Model/V1SetSecurityPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdateCustomDomainPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdateCustomOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdateDomainPolicy: ', $e->getMessage(), PHP_EOL;
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

## `adminServiceUpdateLabelPolicy()`

```php
adminServiceUpdateLabelPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateLabelPolicyResponse
```

Update Labeling/Branding Settings

Update the preview private labeling/branding configured on the instance level. It affects all organizations, that don't overwrite the settings. The preview is used to show you how it will look like, make sure to activate it as soon as you are happy with the configuration. Define what colors, fonts, and logo should be used for the Login/Register UI, E-Mails and Console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateLabelPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateLabelPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateLabelPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceUpdateLabelPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateLabelPolicyRequest**](../Model/V1UpdateLabelPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateLabelPolicyResponse**](../Model/V1UpdateLabelPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdateLockoutPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdateLoginPolicy: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateNotificationPolicy()`

```php
adminServiceUpdateNotificationPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyResponse
```

Update Notification Settings

Update the notification settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateNotificationPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceUpdateNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyRequest**](../Model/V1UpdateNotificationPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyResponse**](../Model/V1UpdateNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateOIDCSettings()`

```php
adminServiceUpdateOIDCSettings($body): \ArthurHlt\Zitadel\Model\V1UpdateOIDCSettingsResponse
```

Add OIDC Settings

Update existing OIDC settings. The OIDC Settings define the lifetimes of the different tokens in OIDC. These settings are used for all organizations and clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateOIDCSettingsRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateOIDCSettingsRequest

try {
    $result = $apiInstance->adminServiceUpdateOIDCSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->adminServiceUpdateOIDCSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateOIDCSettingsRequest**](../Model/V1UpdateOIDCSettingsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOIDCSettingsResponse**](../Model/V1UpdateOIDCSettingsResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdateOrgIAMPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdatePasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdatePasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->adminServiceUpdatePrivacyPolicy: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceAddCustomLabelPolicy()`

```php
managementServiceAddCustomLabelPolicy($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddCustomLabelPolicyResponse
```

Create Labeling/Branding Settings

Create the private labeling/branding configured on the organization. Make sure to activate it so it will be shown to the users. The settings will trigger if the organization has been identified (organization scope, user). Define what colors, fonts, and logo should be used for the Login/Register UI, E-Mails and Console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddCustomLabelPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddCustomLabelPolicyRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddCustomLabelPolicy($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->managementServiceAddCustomLabelPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddCustomLabelPolicyRequest**](../Model/V1AddCustomLabelPolicyRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddCustomLabelPolicyResponse**](../Model/V1AddCustomLabelPolicyResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceAddCustomLockoutPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceAddCustomLoginPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceAddCustomPasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceAddCustomPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceAddCustomPrivacyPolicy: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceGetDefaultLabelPolicy()`

```php
managementServiceGetDefaultLabelPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultLabelPolicyResponse
```

Get Default Private Labeling/Branding Settings

Returns the default private labeling/branding configured on the instance. Defines what colors, fonts, and logo should be used for the Login/Register UI, E-Mails and Console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultLabelPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultLabelPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultLabelPolicyResponse**](../Model/V1GetDefaultLabelPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultLockoutPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultLoginPolicy: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultNotificationPolicy()`

```php
managementServiceGetDefaultNotificationPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultNotificationPolicyResponse
```

Get Default Notification Settings

Return the default notification settings configured on the instance. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultNotificationPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultNotificationPolicyResponse**](../Model/V1GetDefaultNotificationPolicyResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultPasswordAgePolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultPasswordComplexityPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceGetDefaultPrivacyPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceListLoginPolicyMultiFactors: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceRemoveIDPFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceRemoveMultiFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceRemoveSecondFactorFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
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

## `managementServiceResetLabelPolicyToDefault()`

```php
managementServiceResetLabelPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetLabelPolicyToDefaultResponse
```

Reset Labeling/Branding Settings

Removes the label policy/branding of the organization and therefore the default settings from the instance will be shown to the users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetLabelPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->managementServiceResetLabelPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetLabelPolicyToDefaultResponse**](../Model/V1ResetLabelPolicyToDefaultResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceResetLockoutPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceResetLoginPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetNotificationPolicyToDefault()`

```php
managementServiceResetNotificationPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetNotificationPolicyToDefaultResponse
```

Reset Notification Settings to Default

The settings configured will be removed from the organization. Therefore the settings from the instance will trigger for the users of this organization afterward. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetNotificationPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->managementServiceResetNotificationPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetNotificationPolicyToDefaultResponse**](../Model/V1ResetNotificationPolicyToDefaultResponse.md)

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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceResetPasswordAgePolicyToDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceResetPasswordComplexityPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceResetPrivacyPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
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
    echo 'Exception when calling SettingsApi->managementServiceUpdateCustomLockoutPolicy: ', $e->getMessage(), PHP_EOL;
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

## `settingsServiceGetSecuritySettings()`

```php
settingsServiceGetSecuritySettings(): \ArthurHlt\Zitadel\Model\Settingsv2GetSecuritySettingsResponse
```

Get Security Settings

Returns the security settings of the ZITADEL instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsServiceGetSecuritySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsServiceGetSecuritySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetSecuritySettingsResponse**](../Model/Settingsv2GetSecuritySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceSetSecuritySettings()`

```php
settingsServiceSetSecuritySettings($body): \ArthurHlt\Zitadel\Model\Settingsv2SetSecuritySettingsResponse
```

Set Security Settings

Set the security settings of the ZITADEL instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Settingsv2SetSecuritySettingsRequest(); // \ArthurHlt\Zitadel\Model\Settingsv2SetSecuritySettingsRequest

try {
    $result = $apiInstance->settingsServiceSetSecuritySettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsServiceSetSecuritySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Settingsv2SetSecuritySettingsRequest**](../Model/Settingsv2SetSecuritySettingsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2SetSecuritySettingsResponse**](../Model/Settingsv2SetSecuritySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
