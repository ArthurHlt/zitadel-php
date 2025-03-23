# ArthurHlt\Zitadel\EmailProviderApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceActivateEmailProvider()**](EmailProviderApi.md#adminServiceActivateEmailProvider) | **POST** /email/{id}/_activate | Activate Email Provider
[**adminServiceAddEmailProviderHTTP()**](EmailProviderApi.md#adminServiceAddEmailProviderHTTP) | **POST** /email/http | Add HTTP Email provider
[**adminServiceAddEmailProviderSMTP()**](EmailProviderApi.md#adminServiceAddEmailProviderSMTP) | **POST** /email/smtp | Add SMTP Email provider
[**adminServiceDeactivateEmailProvider()**](EmailProviderApi.md#adminServiceDeactivateEmailProvider) | **POST** /email/{id}/_deactivate | Deactivate Email Provider
[**adminServiceGetEmailProvider()**](EmailProviderApi.md#adminServiceGetEmailProvider) | **GET** /email | Get active Email provider
[**adminServiceGetEmailProviderById()**](EmailProviderApi.md#adminServiceGetEmailProviderById) | **GET** /email/{id} | Get Email provider by its id
[**adminServiceListEmailProviders()**](EmailProviderApi.md#adminServiceListEmailProviders) | **POST** /email/_search | List Email providers
[**adminServiceRemoveEmailProvider()**](EmailProviderApi.md#adminServiceRemoveEmailProvider) | **DELETE** /email/{id} | Remove Email provider
[**adminServiceTestEmailProviderSMTP()**](EmailProviderApi.md#adminServiceTestEmailProviderSMTP) | **POST** /email/smtp/_test | Test SMTP Email Provider
[**adminServiceTestEmailProviderSMTPById()**](EmailProviderApi.md#adminServiceTestEmailProviderSMTPById) | **POST** /email/smtp/{id}/_test | Test SMTP Email Provider
[**adminServiceUpdateEmailProviderHTTP()**](EmailProviderApi.md#adminServiceUpdateEmailProviderHTTP) | **PUT** /email/http/{id} | Update HTTP Email provider
[**adminServiceUpdateEmailProviderSMTP()**](EmailProviderApi.md#adminServiceUpdateEmailProviderSMTP) | **PUT** /email/smtp/{id} | Update SMTP Email provider
[**adminServiceUpdateEmailProviderSMTPPassword()**](EmailProviderApi.md#adminServiceUpdateEmailProviderSMTPPassword) | **PUT** /email/smtp/{id}/password | Update SMTP Password


## `adminServiceActivateEmailProvider()`

```php
adminServiceActivateEmailProvider($id, $body): \ArthurHlt\Zitadel\Model\V1ActivateEmailProviderResponse
```

Activate Email Provider

Activate an Email provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceActivateEmailProvider($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceActivateEmailProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ActivateEmailProviderResponse**](../Model/V1ActivateEmailProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddEmailProviderHTTP()`

```php
adminServiceAddEmailProviderHTTP($body): \ArthurHlt\Zitadel\Model\V1AddEmailProviderHTTPResponse
```

Add HTTP Email provider

Add a new HTTP Email provider if nothing is set yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddEmailProviderHTTPRequest(); // \ArthurHlt\Zitadel\Model\V1AddEmailProviderHTTPRequest

try {
    $result = $apiInstance->adminServiceAddEmailProviderHTTP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceAddEmailProviderHTTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddEmailProviderHTTPRequest**](../Model/V1AddEmailProviderHTTPRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddEmailProviderHTTPResponse**](../Model/V1AddEmailProviderHTTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddEmailProviderSMTP()`

```php
adminServiceAddEmailProviderSMTP($body): \ArthurHlt\Zitadel\Model\V1AddEmailProviderSMTPResponse
```

Add SMTP Email provider

Add a new SMTP Email provider if nothing is set yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddEmailProviderSMTPRequest(); // \ArthurHlt\Zitadel\Model\V1AddEmailProviderSMTPRequest

try {
    $result = $apiInstance->adminServiceAddEmailProviderSMTP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceAddEmailProviderSMTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddEmailProviderSMTPRequest**](../Model/V1AddEmailProviderSMTPRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddEmailProviderSMTPResponse**](../Model/V1AddEmailProviderSMTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceDeactivateEmailProvider()`

```php
adminServiceDeactivateEmailProvider($id, $body): \ArthurHlt\Zitadel\Model\V1DeactivateEmailProviderResponse
```

Deactivate Email Provider

Deactivate an Email provider. After deactivating the provider, the users will not be able to receive Email notifications from that provider anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceDeactivateEmailProvider($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceDeactivateEmailProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateEmailProviderResponse**](../Model/V1DeactivateEmailProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetEmailProvider()`

```php
adminServiceGetEmailProvider(): \ArthurHlt\Zitadel\Model\V1GetEmailProviderResponse
```

Get active Email provider

Returns the active Email provider from the system. This is used to send E-Mails to the users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetEmailProvider();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceGetEmailProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetEmailProviderResponse**](../Model/V1GetEmailProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetEmailProviderById()`

```php
adminServiceGetEmailProviderById($id): \ArthurHlt\Zitadel\Model\V1GetEmailProviderByIdResponse
```

Get Email provider by its id

Get a specific Email provider by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceGetEmailProviderById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceGetEmailProviderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetEmailProviderByIdResponse**](../Model/V1GetEmailProviderByIdResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListEmailProviders()`

```php
adminServiceListEmailProviders($body): \ArthurHlt\Zitadel\Model\V1ListEmailProvidersResponse
```

List Email providers

Returns a list of Email providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListEmailProvidersRequest(); // \ArthurHlt\Zitadel\Model\V1ListEmailProvidersRequest

try {
    $result = $apiInstance->adminServiceListEmailProviders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceListEmailProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListEmailProvidersRequest**](../Model/V1ListEmailProvidersRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListEmailProvidersResponse**](../Model/V1ListEmailProvidersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveEmailProvider()`

```php
adminServiceRemoveEmailProvider($id): \ArthurHlt\Zitadel\Model\V1RemoveEmailProviderResponse
```

Remove Email provider

Remove the Email provider, be aware that the users will not get an E-Mail if no provider is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveEmailProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceRemoveEmailProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveEmailProviderResponse**](../Model/V1RemoveEmailProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceTestEmailProviderSMTP()`

```php
adminServiceTestEmailProviderSMTP($body): object
```

Test SMTP Email Provider

Test an SMTP Email provider. After testing the provider, the users will receive information about the test results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1TestEmailProviderSMTPRequest(); // \ArthurHlt\Zitadel\Model\V1TestEmailProviderSMTPRequest

try {
    $result = $apiInstance->adminServiceTestEmailProviderSMTP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceTestEmailProviderSMTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1TestEmailProviderSMTPRequest**](../Model/V1TestEmailProviderSMTPRequest.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceTestEmailProviderSMTPById()`

```php
adminServiceTestEmailProviderSMTPById($id, $body): object
```

Test SMTP Email Provider

Test an SMTP Email provider identified by its ID. After testing the provider, the users will receive information about the test results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceTestEmailProviderSMTPByIdBody(); // \ArthurHlt\Zitadel\Model\AdminServiceTestEmailProviderSMTPByIdBody

try {
    $result = $apiInstance->adminServiceTestEmailProviderSMTPById($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceTestEmailProviderSMTPById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceTestEmailProviderSMTPByIdBody**](../Model/AdminServiceTestEmailProviderSMTPByIdBody.md)|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateEmailProviderHTTP()`

```php
adminServiceUpdateEmailProviderHTTP($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateEmailProviderHTTPResponse
```

Update HTTP Email provider

Update the HTTP Email provider, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured HTTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderHTTPBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderHTTPBody

try {
    $result = $apiInstance->adminServiceUpdateEmailProviderHTTP($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceUpdateEmailProviderHTTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderHTTPBody**](../Model/AdminServiceUpdateEmailProviderHTTPBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateEmailProviderHTTPResponse**](../Model/V1UpdateEmailProviderHTTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateEmailProviderSMTP()`

```php
adminServiceUpdateEmailProviderSMTP($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateEmailProviderSMTPResponse
```

Update SMTP Email provider

Update the SMTP Email provider, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured SMTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderSMTPBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderSMTPBody

try {
    $result = $apiInstance->adminServiceUpdateEmailProviderSMTP($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceUpdateEmailProviderSMTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderSMTPBody**](../Model/AdminServiceUpdateEmailProviderSMTPBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateEmailProviderSMTPResponse**](../Model/V1UpdateEmailProviderSMTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateEmailProviderSMTPPassword()`

```php
adminServiceUpdateEmailProviderSMTPPassword($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateEmailProviderSMTPPasswordResponse
```

Update SMTP Password

Update the SMTP password that is used for the host, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured SMTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\EmailProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderSMTPPasswordBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderSMTPPasswordBody

try {
    $result = $apiInstance->adminServiceUpdateEmailProviderSMTPPassword($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailProviderApi->adminServiceUpdateEmailProviderSMTPPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateEmailProviderSMTPPasswordBody**](../Model/AdminServiceUpdateEmailProviderSMTPPasswordBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateEmailProviderSMTPPasswordResponse**](../Model/V1UpdateEmailProviderSMTPPasswordResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
