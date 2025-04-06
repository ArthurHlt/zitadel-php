# ArthurHlt\Zitadel\InstanceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddInstanceTrustedDomain()**](InstanceApi.md#adminServiceAddInstanceTrustedDomain) | **POST** /trusted_domains | Add an Instance Trusted Domain
[**adminServiceGetMyInstance()**](InstanceApi.md#adminServiceGetMyInstance) | **GET** /instances/me | Get My Instance
[**adminServiceListInstanceDomains()**](InstanceApi.md#adminServiceListInstanceDomains) | **POST** /domains/_search | List Instance Domains
[**adminServiceListInstanceTrustedDomains()**](InstanceApi.md#adminServiceListInstanceTrustedDomains) | **POST** /trusted_domains/_search | List Instance Trusted Domains
[**adminServiceRemoveInstanceTrustedDomain()**](InstanceApi.md#adminServiceRemoveInstanceTrustedDomain) | **DELETE** /trusted_domains/{domain} | Remove an Instance Trusted Domain


## `adminServiceAddInstanceTrustedDomain()`

```php
adminServiceAddInstanceTrustedDomain($body): \ArthurHlt\Zitadel\Model\V1AddInstanceTrustedDomainResponse
```

Add an Instance Trusted Domain

Returns a list of domains that are configured for this ZITADEL instance. These domains are trusted to be used as public hosts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddInstanceTrustedDomainRequest(); // \ArthurHlt\Zitadel\Model\V1AddInstanceTrustedDomainRequest

try {
    $result = $apiInstance->adminServiceAddInstanceTrustedDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->adminServiceAddInstanceTrustedDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddInstanceTrustedDomainRequest**](../Model/V1AddInstanceTrustedDomainRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddInstanceTrustedDomainResponse**](../Model/V1AddInstanceTrustedDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetMyInstance()`

```php
adminServiceGetMyInstance(): \ArthurHlt\Zitadel\Model\V1GetMyInstanceResponse
```

Get My Instance

Returns the details about the current instance such as the name, version, domains, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetMyInstance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->adminServiceGetMyInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyInstanceResponse**](../Model/V1GetMyInstanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListInstanceDomains()`

```php
adminServiceListInstanceDomains($queryOffset, $queryLimit, $queryAsc, $sortingColumn): \ArthurHlt\Zitadel\Model\V1ListInstanceDomainsResponse
```

List Instance Domains

Returns a list of domains that are configured for this ZITADEL instance. These domains are the URLs where ZITADEL is running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$sortingColumn = 'DOMAIN_FIELD_NAME_UNSPECIFIED'; // string | the field the result is sorted

try {
    $result = $apiInstance->adminServiceListInstanceDomains($queryOffset, $queryLimit, $queryAsc, $sortingColumn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->adminServiceListInstanceDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **sortingColumn** | **string**| the field the result is sorted | [optional] [default to &#39;DOMAIN_FIELD_NAME_UNSPECIFIED&#39;]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListInstanceDomainsResponse**](../Model/V1ListInstanceDomainsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListInstanceTrustedDomains()`

```php
adminServiceListInstanceTrustedDomains($queryOffset, $queryLimit, $queryAsc, $sortingColumn): \ArthurHlt\Zitadel\Model\V1ListInstanceTrustedDomainsResponse
```

List Instance Trusted Domains

Returns a list of domains that are configured for this ZITADEL instance. These domains are trusted to be used as public hosts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$sortingColumn = 'DOMAIN_FIELD_NAME_UNSPECIFIED'; // string | the field the result is sorted

try {
    $result = $apiInstance->adminServiceListInstanceTrustedDomains($queryOffset, $queryLimit, $queryAsc, $sortingColumn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->adminServiceListInstanceTrustedDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **sortingColumn** | **string**| the field the result is sorted | [optional] [default to &#39;DOMAIN_FIELD_NAME_UNSPECIFIED&#39;]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListInstanceTrustedDomainsResponse**](../Model/V1ListInstanceTrustedDomainsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveInstanceTrustedDomain()`

```php
adminServiceRemoveInstanceTrustedDomain($domain): \ArthurHlt\Zitadel\Model\V1RemoveInstanceTrustedDomainResponse
```

Remove an Instance Trusted Domain

Returns a list of domains that are configured for this ZITADEL instance. These domains are trusted to be used as public hosts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveInstanceTrustedDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->adminServiceRemoveInstanceTrustedDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveInstanceTrustedDomainResponse**](../Model/V1RemoveInstanceTrustedDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
