# ArthurHlt\Zitadel\BrandingApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceActivateLabelPolicy()**](BrandingApi.md#adminServiceActivateLabelPolicy) | **POST** /policies/label/_activate | Activate Labeling/Branding Settings
[**adminServiceGetPreviewLabelPolicy()**](BrandingApi.md#adminServiceGetPreviewLabelPolicy) | **GET** /policies/label/_preview | Get Preview Private Labeling/Branding Settings
[**adminServiceRemoveLabelPolicyFont()**](BrandingApi.md#adminServiceRemoveLabelPolicyFont) | **DELETE** /policies/label/font | Remove Font
[**adminServiceRemoveLabelPolicyIcon()**](BrandingApi.md#adminServiceRemoveLabelPolicyIcon) | **DELETE** /policies/label/icon | Remove Icon Light
[**adminServiceRemoveLabelPolicyIconDark()**](BrandingApi.md#adminServiceRemoveLabelPolicyIconDark) | **DELETE** /policies/label/icon_dark | Remove Icon Dark
[**adminServiceRemoveLabelPolicyLogo()**](BrandingApi.md#adminServiceRemoveLabelPolicyLogo) | **DELETE** /policies/label/logo | Remove Logo Light
[**adminServiceRemoveLabelPolicyLogoDark()**](BrandingApi.md#adminServiceRemoveLabelPolicyLogoDark) | **DELETE** /policies/label/logo_dark | Remove Logo Dark
[**adminServiceUpdateLabelPolicy()**](BrandingApi.md#adminServiceUpdateLabelPolicy) | **PUT** /policies/label | Update Labeling/Branding Settings
[**managementServiceAddCustomLabelPolicy()**](BrandingApi.md#managementServiceAddCustomLabelPolicy) | **POST** /policies/label | Create Labeling/Branding Settings
[**managementServiceGetDefaultLabelPolicy()**](BrandingApi.md#managementServiceGetDefaultLabelPolicy) | **GET** /policies/default/label | Get Default Private Labeling/Branding Settings
[**managementServiceResetLabelPolicyToDefault()**](BrandingApi.md#managementServiceResetLabelPolicyToDefault) | **DELETE** /policies/label | Reset Labeling/Branding Settings


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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
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
    echo 'Exception when calling BrandingApi->adminServiceActivateLabelPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetPreviewLabelPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->adminServiceGetPreviewLabelPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyFont();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->adminServiceRemoveLabelPolicyFont: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyIcon();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->adminServiceRemoveLabelPolicyIcon: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyIconDark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->adminServiceRemoveLabelPolicyIconDark: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyLogo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->adminServiceRemoveLabelPolicyLogo: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceRemoveLabelPolicyLogoDark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->adminServiceRemoveLabelPolicyLogoDark: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
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
    echo 'Exception when calling BrandingApi->adminServiceUpdateLabelPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
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
    echo 'Exception when calling BrandingApi->managementServiceAddCustomLabelPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
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
    echo 'Exception when calling BrandingApi->managementServiceGetDefaultLabelPolicy: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new ArthurHlt\Zitadel\Api\BrandingApi(
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
    echo 'Exception when calling BrandingApi->managementServiceResetLabelPolicyToDefault: ', $e->getMessage(), PHP_EOL;
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
