# ArthurHlt\Zitadel\SettingsServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingsServiceGetActiveIdentityProviders()**](SettingsServiceApi.md#settingsServiceGetActiveIdentityProviders) | **GET** /v2/settings/login/idps | Get the current active identity providers
[**settingsServiceGetActiveIdentityProviders_0()**](SettingsServiceApi.md#settingsServiceGetActiveIdentityProviders_0) | **GET** /v2beta/settings/login/idps | Get the current active identity providers
[**settingsServiceGetBrandingSettings()**](SettingsServiceApi.md#settingsServiceGetBrandingSettings) | **GET** /v2/settings/branding | Get the current active branding settings
[**settingsServiceGetBrandingSettings_0()**](SettingsServiceApi.md#settingsServiceGetBrandingSettings_0) | **GET** /v2beta/settings/branding | Get the current active branding settings
[**settingsServiceGetDomainSettings()**](SettingsServiceApi.md#settingsServiceGetDomainSettings) | **GET** /v2/settings/domain | Get the domain settings
[**settingsServiceGetDomainSettings_0()**](SettingsServiceApi.md#settingsServiceGetDomainSettings_0) | **GET** /v2beta/settings/domain | Get the domain settings
[**settingsServiceGetGeneralSettings()**](SettingsServiceApi.md#settingsServiceGetGeneralSettings) | **GET** /v2/settings | Get basic information over the instance
[**settingsServiceGetGeneralSettings_0()**](SettingsServiceApi.md#settingsServiceGetGeneralSettings_0) | **GET** /v2beta/settings | Get basic information over the instance
[**settingsServiceGetLegalAndSupportSettings()**](SettingsServiceApi.md#settingsServiceGetLegalAndSupportSettings) | **GET** /v2/settings/legal_support | Get the legal and support settings
[**settingsServiceGetLegalAndSupportSettings_0()**](SettingsServiceApi.md#settingsServiceGetLegalAndSupportSettings_0) | **GET** /v2beta/settings/legal_support | Get the legal and support settings
[**settingsServiceGetLockoutSettings()**](SettingsServiceApi.md#settingsServiceGetLockoutSettings) | **GET** /v2/settings/lockout | Get the lockout settings
[**settingsServiceGetLockoutSettings_0()**](SettingsServiceApi.md#settingsServiceGetLockoutSettings_0) | **GET** /v2beta/settings/lockout | Get the lockout settings
[**settingsServiceGetLoginSettings()**](SettingsServiceApi.md#settingsServiceGetLoginSettings) | **GET** /v2/settings/login | Get the login settings
[**settingsServiceGetLoginSettings_0()**](SettingsServiceApi.md#settingsServiceGetLoginSettings_0) | **GET** /v2beta/settings/login | Get the login settings
[**settingsServiceGetPasswordComplexitySettings()**](SettingsServiceApi.md#settingsServiceGetPasswordComplexitySettings) | **GET** /v2/settings/password/complexity | Get the password complexity settings
[**settingsServiceGetPasswordComplexitySettings_0()**](SettingsServiceApi.md#settingsServiceGetPasswordComplexitySettings_0) | **GET** /v2beta/settings/password/complexity | Get the password complexity settings
[**settingsServiceGetPasswordExpirySettings()**](SettingsServiceApi.md#settingsServiceGetPasswordExpirySettings) | **GET** /v2/settings/password/expiry | Get the password expiry settings
[**settingsServiceGetPasswordExpirySettings_0()**](SettingsServiceApi.md#settingsServiceGetPasswordExpirySettings_0) | **GET** /v2beta/settings/password/expiry | Get the password expiry settings
[**settingsServiceGetSecuritySettings()**](SettingsServiceApi.md#settingsServiceGetSecuritySettings) | **GET** /v2beta/settings/security | Get Security Settings
[**settingsServiceSetSecuritySettings()**](SettingsServiceApi.md#settingsServiceSetSecuritySettings) | **PUT** /v2beta/policies/security | Set Security Settings


## `settingsServiceGetActiveIdentityProviders()`

```php
settingsServiceGetActiveIdentityProviders($ctxOrgId, $ctxInstance, $creationAllowed, $linkingAllowed, $autoCreation, $autoLinking): \ArthurHlt\Zitadel\Model\Settingsv2GetActiveIdentityProvidersResponse
```

Get the current active identity providers

Return the current active identity providers for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool
$creationAllowed = True; // bool
$linkingAllowed = True; // bool
$autoCreation = True; // bool
$autoLinking = True; // bool

try {
    $result = $apiInstance->settingsServiceGetActiveIdentityProviders($ctxOrgId, $ctxInstance, $creationAllowed, $linkingAllowed, $autoCreation, $autoLinking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetActiveIdentityProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]
 **creationAllowed** | **bool**|  | [optional]
 **linkingAllowed** | **bool**|  | [optional]
 **autoCreation** | **bool**|  | [optional]
 **autoLinking** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetActiveIdentityProvidersResponse**](../Model/Settingsv2GetActiveIdentityProvidersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetActiveIdentityProviders_0()`

```php
settingsServiceGetActiveIdentityProviders_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetActiveIdentityProvidersResponse
```

Get the current active identity providers

Return the current active identity providers for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetActiveIdentityProviders_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetActiveIdentityProviders_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetActiveIdentityProvidersResponse**](../Model/Settingsv2betaGetActiveIdentityProvidersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetBrandingSettings()`

```php
settingsServiceGetBrandingSettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetBrandingSettingsResponse
```

Get the current active branding settings

Return the current active branding settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetBrandingSettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetBrandingSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetBrandingSettingsResponse**](../Model/Settingsv2GetBrandingSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetBrandingSettings_0()`

```php
settingsServiceGetBrandingSettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetBrandingSettingsResponse
```

Get the current active branding settings

Return the current active branding settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetBrandingSettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetBrandingSettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetBrandingSettingsResponse**](../Model/Settingsv2betaGetBrandingSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetDomainSettings()`

```php
settingsServiceGetDomainSettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetDomainSettingsResponse
```

Get the domain settings

Return the domain settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetDomainSettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetDomainSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetDomainSettingsResponse**](../Model/Settingsv2GetDomainSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetDomainSettings_0()`

```php
settingsServiceGetDomainSettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetDomainSettingsResponse
```

Get the domain settings

Return the domain settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetDomainSettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetDomainSettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetDomainSettingsResponse**](../Model/Settingsv2betaGetDomainSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetGeneralSettings()`

```php
settingsServiceGetGeneralSettings(): \ArthurHlt\Zitadel\Model\Settingsv2GetGeneralSettingsResponse
```

Get basic information over the instance

Return the basic information of the instance for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsServiceGetGeneralSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetGeneralSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetGeneralSettingsResponse**](../Model/Settingsv2GetGeneralSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetGeneralSettings_0()`

```php
settingsServiceGetGeneralSettings_0(): \ArthurHlt\Zitadel\Model\Settingsv2betaGetGeneralSettingsResponse
```

Get basic information over the instance

Return the basic information of the instance for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsServiceGetGeneralSettings_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetGeneralSettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetGeneralSettingsResponse**](../Model/Settingsv2betaGetGeneralSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetLegalAndSupportSettings()`

```php
settingsServiceGetLegalAndSupportSettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetLegalAndSupportSettingsResponse
```

Get the legal and support settings

Return the legal settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetLegalAndSupportSettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetLegalAndSupportSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetLegalAndSupportSettingsResponse**](../Model/Settingsv2GetLegalAndSupportSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetLegalAndSupportSettings_0()`

```php
settingsServiceGetLegalAndSupportSettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetLegalAndSupportSettingsResponse
```

Get the legal and support settings

Return the legal settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetLegalAndSupportSettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetLegalAndSupportSettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetLegalAndSupportSettingsResponse**](../Model/Settingsv2betaGetLegalAndSupportSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetLockoutSettings()`

```php
settingsServiceGetLockoutSettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetLockoutSettingsResponse
```

Get the lockout settings

Return the lockout settings for the requested context, which define when a user will be locked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetLockoutSettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetLockoutSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetLockoutSettingsResponse**](../Model/Settingsv2GetLockoutSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetLockoutSettings_0()`

```php
settingsServiceGetLockoutSettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetLockoutSettingsResponse
```

Get the lockout settings

Return the lockout settings for the requested context, which define when a user will be locked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetLockoutSettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetLockoutSettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetLockoutSettingsResponse**](../Model/Settingsv2betaGetLockoutSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetLoginSettings()`

```php
settingsServiceGetLoginSettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetLoginSettingsResponse
```

Get the login settings

Return the settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetLoginSettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetLoginSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetLoginSettingsResponse**](../Model/Settingsv2GetLoginSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetLoginSettings_0()`

```php
settingsServiceGetLoginSettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetLoginSettingsResponse
```

Get the login settings

Return the settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetLoginSettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetLoginSettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetLoginSettingsResponse**](../Model/Settingsv2betaGetLoginSettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetPasswordComplexitySettings()`

```php
settingsServiceGetPasswordComplexitySettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetPasswordComplexitySettingsResponse
```

Get the password complexity settings

Return the password complexity settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetPasswordComplexitySettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetPasswordComplexitySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetPasswordComplexitySettingsResponse**](../Model/Settingsv2GetPasswordComplexitySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetPasswordComplexitySettings_0()`

```php
settingsServiceGetPasswordComplexitySettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetPasswordComplexitySettingsResponse
```

Get the password complexity settings

Return the password complexity settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetPasswordComplexitySettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetPasswordComplexitySettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetPasswordComplexitySettingsResponse**](../Model/Settingsv2betaGetPasswordComplexitySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetPasswordExpirySettings()`

```php
settingsServiceGetPasswordExpirySettings($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2GetPasswordExpirySettingsResponse
```

Get the password expiry settings

Return the password expiry settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetPasswordExpirySettings($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetPasswordExpirySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2GetPasswordExpirySettingsResponse**](../Model/Settingsv2GetPasswordExpirySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetPasswordExpirySettings_0()`

```php
settingsServiceGetPasswordExpirySettings_0($ctxOrgId, $ctxInstance): \ArthurHlt\Zitadel\Model\Settingsv2betaGetPasswordExpirySettingsResponse
```

Get the password expiry settings

Return the password expiry settings for the requested context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$ctxOrgId = 'ctxOrgId_example'; // string
$ctxInstance = True; // bool

try {
    $result = $apiInstance->settingsServiceGetPasswordExpirySettings_0($ctxOrgId, $ctxInstance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetPasswordExpirySettings_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctxOrgId** | **string**|  | [optional]
 **ctxInstance** | **bool**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetPasswordExpirySettingsResponse**](../Model/Settingsv2betaGetPasswordExpirySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settingsServiceGetSecuritySettings()`

```php
settingsServiceGetSecuritySettings(): \ArthurHlt\Zitadel\Model\Settingsv2betaGetSecuritySettingsResponse
```

Get Security Settings

Returns the security settings of the ZITADEL instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsServiceGetSecuritySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceGetSecuritySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaGetSecuritySettingsResponse**](../Model/Settingsv2betaGetSecuritySettingsResponse.md)

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
settingsServiceSetSecuritySettings($body): \ArthurHlt\Zitadel\Model\Settingsv2betaSetSecuritySettingsResponse
```

Set Security Settings

Set the security settings of the ZITADEL instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SettingsServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Settingsv2betaSetSecuritySettingsRequest(); // \ArthurHlt\Zitadel\Model\Settingsv2betaSetSecuritySettingsRequest

try {
    $result = $apiInstance->settingsServiceSetSecuritySettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsServiceApi->settingsServiceSetSecuritySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Settingsv2betaSetSecuritySettingsRequest**](../Model/Settingsv2betaSetSecuritySettingsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Settingsv2betaSetSecuritySettingsResponse**](../Model/Settingsv2betaSetSecuritySettingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
