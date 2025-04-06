# ArthurHlt\Zitadel\SMTPConfigsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceActivateSMTPConfig()**](SMTPConfigsApi.md#adminServiceActivateSMTPConfig) | **POST** /smtp/{id}/_activate | Activate SMTP Provider
[**adminServiceAddSMTPConfig()**](SMTPConfigsApi.md#adminServiceAddSMTPConfig) | **POST** /smtp | Deprecated: Add SMTP Configuration
[**adminServiceDeactivateSMTPConfig()**](SMTPConfigsApi.md#adminServiceDeactivateSMTPConfig) | **POST** /smtp/{id}/_deactivate | Deprecated: Deactivate SMTP Provider
[**adminServiceGetSMTPConfig()**](SMTPConfigsApi.md#adminServiceGetSMTPConfig) | **GET** /smtp | Deprecated: Get active SMTP Configuration
[**adminServiceGetSMTPConfigById()**](SMTPConfigsApi.md#adminServiceGetSMTPConfigById) | **GET** /smtp/{id} | Deprecated: Get SMTP provider configuration by its id
[**adminServiceListSMTPConfigs()**](SMTPConfigsApi.md#adminServiceListSMTPConfigs) | **POST** /smtp/_search | Deprecated: List SMTP Configs
[**adminServiceRemoveSMTPConfig()**](SMTPConfigsApi.md#adminServiceRemoveSMTPConfig) | **DELETE** /smtp/{id} | Deprecated: Remove SMTP Configuration
[**adminServiceTestSMTPConfig()**](SMTPConfigsApi.md#adminServiceTestSMTPConfig) | **POST** /smtp/_test | Deprecated: Test SMTP Provider
[**adminServiceTestSMTPConfigById()**](SMTPConfigsApi.md#adminServiceTestSMTPConfigById) | **POST** /smtp/{id}/_test | Deprecated: Test SMTP Provider
[**adminServiceUpdateSMTPConfig()**](SMTPConfigsApi.md#adminServiceUpdateSMTPConfig) | **PUT** /smtp/{id} | Deprecated: Update SMTP Configuration
[**adminServiceUpdateSMTPConfigPassword()**](SMTPConfigsApi.md#adminServiceUpdateSMTPConfigPassword) | **PUT** /smtp/{id}/password | Deprecated: Update SMTP Password


## `adminServiceActivateSMTPConfig()`

```php
adminServiceActivateSMTPConfig($id, $body): \ArthurHlt\Zitadel\Model\V1ActivateSMTPConfigResponse
```

Activate SMTP Provider

Activate an SMTP provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceActivateSMTPConfig($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceActivateSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ActivateSMTPConfigResponse**](../Model/V1ActivateSMTPConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddSMTPConfig()`

```php
adminServiceAddSMTPConfig($body): \ArthurHlt\Zitadel\Model\V1AddSMTPConfigResponse
```

Deprecated: Add SMTP Configuration

Add a new SMTP configuration if nothing is set yet.  Deprecated: please move to the new endpoint AddEmailProviderSMTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddSMTPConfigRequest(); // \ArthurHlt\Zitadel\Model\V1AddSMTPConfigRequest

try {
    $result = $apiInstance->adminServiceAddSMTPConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceAddSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddSMTPConfigRequest**](../Model/V1AddSMTPConfigRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddSMTPConfigResponse**](../Model/V1AddSMTPConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceDeactivateSMTPConfig()`

```php
adminServiceDeactivateSMTPConfig($id, $body): \ArthurHlt\Zitadel\Model\V1DeactivateSMTPConfigResponse
```

Deprecated: Deactivate SMTP Provider

Deactivate an SMTP provider. After deactivating the provider, the users will not be able to receive SMTP notifications from that provider anymore.  Deprecated: please move to the new endpoint DeactivateEmailProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceDeactivateSMTPConfig($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceDeactivateSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateSMTPConfigResponse**](../Model/V1DeactivateSMTPConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetSMTPConfig()`

```php
adminServiceGetSMTPConfig(): \ArthurHlt\Zitadel\Model\V1GetSMTPConfigResponse
```

Deprecated: Get active SMTP Configuration

Returns the active SMTP configuration from the system. This is used to send E-Mails to the users.  Deprecated: please move to the new endpoint GetEmailProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetSMTPConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceGetSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetSMTPConfigResponse**](../Model/V1GetSMTPConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetSMTPConfigById()`

```php
adminServiceGetSMTPConfigById($id): \ArthurHlt\Zitadel\Model\V1GetSMTPConfigByIdResponse
```

Deprecated: Get SMTP provider configuration by its id

Get a specific SMTP provider configuration by its ID.  Deprecated: please move to the new endpoint GetEmailProviderById.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceGetSMTPConfigById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceGetSMTPConfigById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetSMTPConfigByIdResponse**](../Model/V1GetSMTPConfigByIdResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListSMTPConfigs()`

```php
adminServiceListSMTPConfigs($body): \ArthurHlt\Zitadel\Model\V1ListSMTPConfigsResponse
```

Deprecated: List SMTP Configs

Returns a list of SMTP configurations.  Deprecated: please move to the new endpoint ListEmailProviders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListSMTPConfigsRequest(); // \ArthurHlt\Zitadel\Model\V1ListSMTPConfigsRequest

try {
    $result = $apiInstance->adminServiceListSMTPConfigs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceListSMTPConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListSMTPConfigsRequest**](../Model/V1ListSMTPConfigsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListSMTPConfigsResponse**](../Model/V1ListSMTPConfigsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveSMTPConfig()`

```php
adminServiceRemoveSMTPConfig($id): \ArthurHlt\Zitadel\Model\V1RemoveSMTPConfigResponse
```

Deprecated: Remove SMTP Configuration

Remove the SMTP configuration, be aware that the users will not get an E-Mail if no SMTP is set.  Deprecated: please move to the new endpoint RemoveEmailProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveSMTPConfig($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceRemoveSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveSMTPConfigResponse**](../Model/V1RemoveSMTPConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceTestSMTPConfig()`

```php
adminServiceTestSMTPConfig($body): object
```

Deprecated: Test SMTP Provider

Test an SMTP provider. After testing the provider, the users will receive information about the test results.  Deprecated: please move to the new endpoint TestEmailProviderSMTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1TestSMTPConfigRequest(); // \ArthurHlt\Zitadel\Model\V1TestSMTPConfigRequest

try {
    $result = $apiInstance->adminServiceTestSMTPConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceTestSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1TestSMTPConfigRequest**](../Model/V1TestSMTPConfigRequest.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceTestSMTPConfigById()`

```php
adminServiceTestSMTPConfigById($id, $body): object
```

Deprecated: Test SMTP Provider

Test an SMTP provider identified by its ID. After testing the provider, the users will receive information about the test results.  Deprecated: please move to the new endpoint TestEmailProviderSMTPById.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceTestSMTPConfigByIdBody(); // \ArthurHlt\Zitadel\Model\AdminServiceTestSMTPConfigByIdBody

try {
    $result = $apiInstance->adminServiceTestSMTPConfigById($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceTestSMTPConfigById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceTestSMTPConfigByIdBody**](../Model/AdminServiceTestSMTPConfigByIdBody.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSMTPConfig()`

```php
adminServiceUpdateSMTPConfig($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateSMTPConfigResponse
```

Deprecated: Update SMTP Configuration

Update the SMTP configuration, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured SMTP.  Deprecated: please move to the new endpoint UpdateEmailProviderSMTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMTPConfigBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMTPConfigBody

try {
    $result = $apiInstance->adminServiceUpdateSMTPConfig($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceUpdateSMTPConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateSMTPConfigBody**](../Model/AdminServiceUpdateSMTPConfigBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSMTPConfigResponse**](../Model/V1UpdateSMTPConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSMTPConfigPassword()`

```php
adminServiceUpdateSMTPConfigPassword($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateSMTPConfigPasswordResponse
```

Deprecated: Update SMTP Password

Update the SMTP password that is used for the host, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured SMTP.  Deprecated: please move to the new endpoint UpdateEmailProviderSMTPPassword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMTPConfigsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMTPConfigPasswordBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMTPConfigPasswordBody

try {
    $result = $apiInstance->adminServiceUpdateSMTPConfigPassword($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMTPConfigsApi->adminServiceUpdateSMTPConfigPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateSMTPConfigPasswordBody**](../Model/AdminServiceUpdateSMTPConfigPasswordBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSMTPConfigPasswordResponse**](../Model/V1UpdateSMTPConfigPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
