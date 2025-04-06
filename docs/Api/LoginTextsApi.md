# ArthurHlt\Zitadel\LoginTextsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetCustomLoginTexts()**](LoginTextsApi.md#adminServiceGetCustomLoginTexts) | **GET** /text/login/{language_1} | Get Custom Login Text
[**adminServiceGetDefaultLoginTexts()**](LoginTextsApi.md#adminServiceGetDefaultLoginTexts) | **GET** /text/default/login/{language_1} | Get Default Login Text
[**adminServiceResetCustomLoginTextToDefault()**](LoginTextsApi.md#adminServiceResetCustomLoginTextToDefault) | **DELETE** /text/login/{language_1} | Reset Custom Login Text to Default
[**adminServiceSetCustomLoginText()**](LoginTextsApi.md#adminServiceSetCustomLoginText) | **PUT** /text/login/{language_1} | Set Default Login Text
[**managementServiceGetCustomLoginTexts()**](LoginTextsApi.md#managementServiceGetCustomLoginTexts) | **GET** /text/login/{language} | Get Custom Login Text
[**managementServiceGetDefaultLoginTexts()**](LoginTextsApi.md#managementServiceGetDefaultLoginTexts) | **GET** /text/default/login/{language} | Get Default Login Text
[**managementServiceResetCustomLoginTextToDefault()**](LoginTextsApi.md#managementServiceResetCustomLoginTextToDefault) | **DELETE** /text/login/{language} | Reset Custom Login Text to Default
[**managementServiceSetCustomLoginText()**](LoginTextsApi.md#managementServiceSetCustomLoginText) | **PUT** /text/login/{language} | Set Default Login Text


## `adminServiceGetCustomLoginTexts()`

```php
adminServiceGetCustomLoginTexts($language1): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetCustomLoginTextsResponse
```

Get Custom Login Text

Get the custom texts for the login and register UI of ZITADEL, which is overwritten on the instance as settings/database. The text will be shown to the users of all organizations, that do not have a custom text configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language1 = 'language1_example'; // string

try {
    $result = $apiInstance->adminServiceGetCustomLoginTexts($language1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->adminServiceGetCustomLoginTexts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetCustomLoginTextsResponse**](../Model/Zitadeladminv1GetCustomLoginTextsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetDefaultLoginTexts()`

```php
adminServiceGetDefaultLoginTexts($language1): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetDefaultLoginTextsResponse
```

Get Default Login Text

Get the default texts for the login and register UI of ZITADEL, which are stored as translation files in ZITADEL itself. The text will be shown to the users of all organizations, that do not have a custom text configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language1 = 'language1_example'; // string

try {
    $result = $apiInstance->adminServiceGetDefaultLoginTexts($language1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->adminServiceGetDefaultLoginTexts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetDefaultLoginTextsResponse**](../Model/Zitadeladminv1GetDefaultLoginTextsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceResetCustomLoginTextToDefault()`

```php
adminServiceResetCustomLoginTextToDefault($language1): \ArthurHlt\Zitadel\Model\Zitadeladminv1ResetCustomLoginTextsToDefaultResponse
```

Reset Custom Login Text to Default

Removes the custom texts for the login and register UI of ZITADEL, which is overwritten on the instance and triggers the text from the translation files stored in ZITADEL itself. The text will be shown to the users of all organizations, that do not have a custom text configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language1 = 'language1_example'; // string

try {
    $result = $apiInstance->adminServiceResetCustomLoginTextToDefault($language1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->adminServiceResetCustomLoginTextToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ResetCustomLoginTextsToDefaultResponse**](../Model/Zitadeladminv1ResetCustomLoginTextsToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceSetCustomLoginText()`

```php
adminServiceSetCustomLoginText($language1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1SetCustomLoginTextsResponse
```

Set Default Login Text

Set the custom texts for the login and register UI of ZITADEL, which is overwritten on the instance as settings/database. The text will be shown to the users of all organizations, that do not have a custom text configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language1 = 'language1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceSetCustomLoginTextBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceSetCustomLoginTextBody

try {
    $result = $apiInstance->adminServiceSetCustomLoginText($language1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->adminServiceSetCustomLoginText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceSetCustomLoginTextBody**](../Model/V1AdminServiceSetCustomLoginTextBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1SetCustomLoginTextsResponse**](../Model/Zitadeladminv1SetCustomLoginTextsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetCustomLoginTexts()`

```php
managementServiceGetCustomLoginTexts($language, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1GetCustomLoginTextsResponse
```

Get Custom Login Text

Get the custom texts for the login and register UI of ZITADEL, which are configured on the organization. The text from the organization will trigger as soon as the organization is identified (organization scope or user).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetCustomLoginTexts($language, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->managementServiceGetCustomLoginTexts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1GetCustomLoginTextsResponse**](../Model/Zitadelmanagementv1GetCustomLoginTextsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultLoginTexts()`

```php
managementServiceGetDefaultLoginTexts($language, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1GetDefaultLoginTextsResponse
```

Get Default Login Text

Get the default texts for the login and register UI of ZITADEL, which are configured on the instance or as translation files in ZITADEL itself. The text will be shown to the users of all organizations, that do not have a custom text configured. Or if the organization context is not given.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultLoginTexts($language, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->managementServiceGetDefaultLoginTexts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1GetDefaultLoginTextsResponse**](../Model/Zitadelmanagementv1GetDefaultLoginTextsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetCustomLoginTextToDefault()`

```php
managementServiceResetCustomLoginTextToDefault($language, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1ResetCustomLoginTextsToDefaultResponse
```

Reset Custom Login Text to Default

Removes the custom texts for the login and register UI from the organization and therefore the configuration of the instance or the translation files in ZITADEL itself will trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetCustomLoginTextToDefault($language, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->managementServiceResetCustomLoginTextToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1ResetCustomLoginTextsToDefaultResponse**](../Model/Zitadelmanagementv1ResetCustomLoginTextsToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSetCustomLoginText()`

```php
managementServiceSetCustomLoginText($language, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1SetCustomLoginTextsResponse
```

Set Default Login Text

Set the custom texts for the login and register UI of ZITADEL for the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\LoginTextsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceSetCustomLoginTextBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceSetCustomLoginTextBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceSetCustomLoginText($language, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginTextsApi->managementServiceSetCustomLoginText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceSetCustomLoginTextBody**](../Model/V1ManagementServiceSetCustomLoginTextBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1SetCustomLoginTextsResponse**](../Model/Zitadelmanagementv1SetCustomLoginTextsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
