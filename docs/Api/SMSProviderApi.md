# ArthurHlt\Zitadel\SMSProviderApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceActivateSMSProvider()**](SMSProviderApi.md#adminServiceActivateSMSProvider) | **POST** /sms/{id}/_activate | Activate SMS Provider
[**adminServiceAddSMSProviderHTTP()**](SMSProviderApi.md#adminServiceAddSMSProviderHTTP) | **POST** /sms/http | Add HTTP SMS Provider
[**adminServiceAddSMSProviderTwilio()**](SMSProviderApi.md#adminServiceAddSMSProviderTwilio) | **POST** /sms/twilio | Add Twilio SMS Provider
[**adminServiceDeactivateSMSProvider()**](SMSProviderApi.md#adminServiceDeactivateSMSProvider) | **POST** /sms/{id}/_deactivate | Deactivate SMS Provider
[**adminServiceGetSMSProvider()**](SMSProviderApi.md#adminServiceGetSMSProvider) | **GET** /sms/{id} | Get SMS Provider
[**adminServiceListSMSProviders()**](SMSProviderApi.md#adminServiceListSMSProviders) | **POST** /sms/_search | List SMS Providers
[**adminServiceRemoveSMSProvider()**](SMSProviderApi.md#adminServiceRemoveSMSProvider) | **DELETE** /sms/{id} | Remove SMS Provider
[**adminServiceUpdateSMSProviderHTTP()**](SMSProviderApi.md#adminServiceUpdateSMSProviderHTTP) | **PUT** /sms/http/{id} | Update HTTP SMS Provider
[**adminServiceUpdateSMSProviderTwilio()**](SMSProviderApi.md#adminServiceUpdateSMSProviderTwilio) | **PUT** /sms/twilio/{id} | Update Twilio SMS Provider
[**adminServiceUpdateSMSProviderTwilioToken()**](SMSProviderApi.md#adminServiceUpdateSMSProviderTwilioToken) | **PUT** /sms/twilio/{id}/token | Update Twilio SMS Provider Token


## `adminServiceActivateSMSProvider()`

```php
adminServiceActivateSMSProvider($id, $body): \ArthurHlt\Zitadel\Model\V1ActivateSMSProviderResponse
```

Activate SMS Provider

Activate an SMS provider. After activating a provider, the users will be able to receive SMS notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceActivateSMSProvider($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceActivateSMSProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ActivateSMSProviderResponse**](../Model/V1ActivateSMSProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddSMSProviderHTTP()`

```php
adminServiceAddSMSProviderHTTP($body): \ArthurHlt\Zitadel\Model\V1AddSMSProviderHTTPResponse
```

Add HTTP SMS Provider

Configure a new SMS provider of the type HTTP. A provider has to be activated to be able to send notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddSMSProviderHTTPRequest(); // \ArthurHlt\Zitadel\Model\V1AddSMSProviderHTTPRequest

try {
    $result = $apiInstance->adminServiceAddSMSProviderHTTP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceAddSMSProviderHTTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddSMSProviderHTTPRequest**](../Model/V1AddSMSProviderHTTPRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddSMSProviderHTTPResponse**](../Model/V1AddSMSProviderHTTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddSMSProviderTwilio()`

```php
adminServiceAddSMSProviderTwilio($body): \ArthurHlt\Zitadel\Model\V1AddSMSProviderTwilioResponse
```

Add Twilio SMS Provider

Configure a new SMS provider of the type Twilio. A provider has to be activated to be able to send notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddSMSProviderTwilioRequest(); // \ArthurHlt\Zitadel\Model\V1AddSMSProviderTwilioRequest

try {
    $result = $apiInstance->adminServiceAddSMSProviderTwilio($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceAddSMSProviderTwilio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddSMSProviderTwilioRequest**](../Model/V1AddSMSProviderTwilioRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddSMSProviderTwilioResponse**](../Model/V1AddSMSProviderTwilioResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceDeactivateSMSProvider()`

```php
adminServiceDeactivateSMSProvider($id, $body): \ArthurHlt\Zitadel\Model\V1DeactivateSMSProviderResponse
```

Deactivate SMS Provider

Deactivate an SMS provider. After deactivating the provider, the users will not be able to receive SMS notifications from that provider anymore. If it was the last activated they will not get notifications at all

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceDeactivateSMSProvider($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceDeactivateSMSProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateSMSProviderResponse**](../Model/V1DeactivateSMSProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetSMSProvider()`

```php
adminServiceGetSMSProvider($id): \ArthurHlt\Zitadel\Model\V1GetSMSProviderResponse
```

Get SMS Provider

Get a specific SMS provider by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceGetSMSProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceGetSMSProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetSMSProviderResponse**](../Model/V1GetSMSProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListSMSProviders()`

```php
adminServiceListSMSProviders($body): \ArthurHlt\Zitadel\Model\V1ListSMSProvidersResponse
```

List SMS Providers

Returns a list of configured SMS providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListSMSProvidersRequest(); // \ArthurHlt\Zitadel\Model\V1ListSMSProvidersRequest

try {
    $result = $apiInstance->adminServiceListSMSProviders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceListSMSProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListSMSProvidersRequest**](../Model/V1ListSMSProvidersRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListSMSProvidersResponse**](../Model/V1ListSMSProvidersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveSMSProvider()`

```php
adminServiceRemoveSMSProvider($id): \ArthurHlt\Zitadel\Model\V1RemoveSMSProviderResponse
```

Remove SMS Provider

Delete an SMS provider. If the provider was still active the users will not receive notifications from that provider anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveSMSProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceRemoveSMSProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveSMSProviderResponse**](../Model/V1RemoveSMSProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSMSProviderHTTP()`

```php
adminServiceUpdateSMSProviderHTTP($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateSMSProviderHTTPResponse
```

Update HTTP SMS Provider

Change the configuration of an SMS provider of the type HTTP. A provider has to be activated to be able to send notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderHTTPBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderHTTPBody

try {
    $result = $apiInstance->adminServiceUpdateSMSProviderHTTP($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceUpdateSMSProviderHTTP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderHTTPBody**](../Model/AdminServiceUpdateSMSProviderHTTPBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSMSProviderHTTPResponse**](../Model/V1UpdateSMSProviderHTTPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSMSProviderTwilio()`

```php
adminServiceUpdateSMSProviderTwilio($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateSMSProviderTwilioResponse
```

Update Twilio SMS Provider

Change the configuration of an SMS provider of the type Twilio.  A provider has to be activated to be able to send notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderTwilioBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderTwilioBody

try {
    $result = $apiInstance->adminServiceUpdateSMSProviderTwilio($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceUpdateSMSProviderTwilio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderTwilioBody**](../Model/AdminServiceUpdateSMSProviderTwilioBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSMSProviderTwilioResponse**](../Model/V1UpdateSMSProviderTwilioResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSMSProviderTwilioToken()`

```php
adminServiceUpdateSMSProviderTwilioToken($id, $body): \ArthurHlt\Zitadel\Model\V1UpdateSMSProviderTwilioTokenResponse
```

Update Twilio SMS Provider Token

Change the token of the SMS provider of the type Twilio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SMSProviderApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderTwilioTokenBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderTwilioTokenBody

try {
    $result = $apiInstance->adminServiceUpdateSMSProviderTwilioToken($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSProviderApi->adminServiceUpdateSMSProviderTwilioToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateSMSProviderTwilioTokenBody**](../Model/AdminServiceUpdateSMSProviderTwilioTokenBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSMSProviderTwilioTokenResponse**](../Model/V1UpdateSMSProviderTwilioTokenResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
