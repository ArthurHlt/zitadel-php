# ArthurHlt\Zitadel\SystemServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemServiceAddDomain()**](SystemServiceApi.md#systemServiceAddDomain) | **POST** /instances/{instanceId}/domains | Adds a domain to an instance
[**systemServiceAddInstance()**](SystemServiceApi.md#systemServiceAddInstance) | **POST** /instances | Deprecated: Use CreateInstance instead Creates a new instance with all needed setup data This might take some time
[**systemServiceCreateInstance()**](SystemServiceApi.md#systemServiceCreateInstance) | **POST** /instances/_create | Creates a new instance with all needed setup data This might take some time
[**systemServiceExistsDomain()**](SystemServiceApi.md#systemServiceExistsDomain) | **POST** /domains/{domain}/_exists | Checks if a domain exists
[**systemServiceGetInstance()**](SystemServiceApi.md#systemServiceGetInstance) | **GET** /instances/{instanceId} | Returns the detail of an instance
[**systemServiceListDomains()**](SystemServiceApi.md#systemServiceListDomains) | **POST** /instances/{instanceId}/domains/_search | Returns the custom domains of an instance Checks if a domain exists Deprecated: Use the Admin APIs ListInstanceDomains on the admin API instead
[**systemServiceListIAMMembers()**](SystemServiceApi.md#systemServiceListIAMMembers) | **POST** /instances/{instanceId}/members/_search | Returns all instance members matching the request all queries need to match (ANDed) Deprecated: Use the Admin APIs ListIAMMembers instead
[**systemServiceListInstances()**](SystemServiceApi.md#systemServiceListInstances) | **POST** /instances/_search | Returns a list of ZITADEL instances
[**systemServiceRemoveDomain()**](SystemServiceApi.md#systemServiceRemoveDomain) | **DELETE** /instances/{instanceId}/domains/{domain} | Removes the domain of an instance
[**systemServiceRemoveInstance()**](SystemServiceApi.md#systemServiceRemoveInstance) | **DELETE** /instances/{instanceId} | Removes an instance This might take some time
[**systemServiceSetInstanceFeature()**](SystemServiceApi.md#systemServiceSetInstanceFeature) | **PUT** /instances/{instanceId}/features/{featureId} | Set a feature flag on an instance
[**systemServiceSetPrimaryDomain()**](SystemServiceApi.md#systemServiceSetPrimaryDomain) | **POST** /instances/{instanceId}/domains/_set_primary | Sets the primary domain of an instance
[**systemServiceUpdateInstance()**](SystemServiceApi.md#systemServiceUpdateInstance) | **PUT** /instances/{instanceId} | Updates name of an existing instance


## `systemServiceAddDomain()`

```php
systemServiceAddDomain($instanceId, $body): \ArthurHlt\Zitadel\Model\V1AddDomainResponse
```

Adds a domain to an instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceAddDomainBody(); // \ArthurHlt\Zitadel\Model\SystemServiceAddDomainBody

try {
    $result = $apiInstance->systemServiceAddDomain($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceAddDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceAddDomainBody**](../Model/SystemServiceAddDomainBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddDomainResponse**](../Model/V1AddDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceAddInstance()`

```php
systemServiceAddInstance($body): \ArthurHlt\Zitadel\Model\V1AddInstanceResponse
```

Deprecated: Use CreateInstance instead Creates a new instance with all needed setup data This might take some time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddInstanceRequest(); // \ArthurHlt\Zitadel\Model\V1AddInstanceRequest

try {
    $result = $apiInstance->systemServiceAddInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceAddInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddInstanceRequest**](../Model/V1AddInstanceRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddInstanceResponse**](../Model/V1AddInstanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceCreateInstance()`

```php
systemServiceCreateInstance($body): \ArthurHlt\Zitadel\Model\V1CreateInstanceResponse
```

Creates a new instance with all needed setup data This might take some time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1CreateInstanceRequest(); // \ArthurHlt\Zitadel\Model\V1CreateInstanceRequest

try {
    $result = $apiInstance->systemServiceCreateInstance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceCreateInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1CreateInstanceRequest**](../Model/V1CreateInstanceRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1CreateInstanceResponse**](../Model/V1CreateInstanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceExistsDomain()`

```php
systemServiceExistsDomain($domain, $body): \ArthurHlt\Zitadel\Model\V1ExistsDomainResponse
```

Checks if a domain exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->systemServiceExistsDomain($domain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceExistsDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ExistsDomainResponse**](../Model/V1ExistsDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceGetInstance()`

```php
systemServiceGetInstance($instanceId): \ArthurHlt\Zitadel\Model\V1GetInstanceResponse
```

Returns the detail of an instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string

try {
    $result = $apiInstance->systemServiceGetInstance($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceGetInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetInstanceResponse**](../Model/V1GetInstanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceListDomains()`

```php
systemServiceListDomains($instanceId, $body): \ArthurHlt\Zitadel\Model\V1ListDomainsResponse
```

Returns the custom domains of an instance Checks if a domain exists Deprecated: Use the Admin APIs ListInstanceDomains on the admin API instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string | list limitations and ordering
$body = new \ArthurHlt\Zitadel\Model\SystemServiceListDomainsBody(); // \ArthurHlt\Zitadel\Model\SystemServiceListDomainsBody

try {
    $result = $apiInstance->systemServiceListDomains($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceListDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**| list limitations and ordering |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceListDomainsBody**](../Model/SystemServiceListDomainsBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListDomainsResponse**](../Model/V1ListDomainsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceListIAMMembers()`

```php
systemServiceListIAMMembers($instanceId, $body): \ArthurHlt\Zitadel\Model\Zitadelsystemv1ListIAMMembersResponse
```

Returns all instance members matching the request all queries need to match (ANDed) Deprecated: Use the Admin APIs ListIAMMembers instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1SystemServiceListIAMMembersBody(); // \ArthurHlt\Zitadel\Model\V1SystemServiceListIAMMembersBody

try {
    $result = $apiInstance->systemServiceListIAMMembers($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceListIAMMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1SystemServiceListIAMMembersBody**](../Model/V1SystemServiceListIAMMembersBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelsystemv1ListIAMMembersResponse**](../Model/Zitadelsystemv1ListIAMMembersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceListInstances()`

```php
systemServiceListInstances($body): \ArthurHlt\Zitadel\Model\V1ListInstancesResponse
```

Returns a list of ZITADEL instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListInstancesRequest(); // \ArthurHlt\Zitadel\Model\V1ListInstancesRequest | Search query for lists

try {
    $result = $apiInstance->systemServiceListInstances($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceListInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListInstancesRequest**](../Model/V1ListInstancesRequest.md)| Search query for lists |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListInstancesResponse**](../Model/V1ListInstancesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceRemoveDomain()`

```php
systemServiceRemoveDomain($instanceId, $domain): \ArthurHlt\Zitadel\Model\V1RemoveDomainResponse
```

Removes the domain of an instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->systemServiceRemoveDomain($instanceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceRemoveDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **domain** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveDomainResponse**](../Model/V1RemoveDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceRemoveInstance()`

```php
systemServiceRemoveInstance($instanceId): \ArthurHlt\Zitadel\Model\V1RemoveInstanceResponse
```

Removes an instance This might take some time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string

try {
    $result = $apiInstance->systemServiceRemoveInstance($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceRemoveInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveInstanceResponse**](../Model/V1RemoveInstanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceSetInstanceFeature()`

```php
systemServiceSetInstanceFeature($instanceId, $featureId, $body): \ArthurHlt\Zitadel\Model\V1SetInstanceFeatureResponse
```

Set a feature flag on an instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$featureId = 'featureId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceSetInstanceFeatureBody(); // \ArthurHlt\Zitadel\Model\SystemServiceSetInstanceFeatureBody

try {
    $result = $apiInstance->systemServiceSetInstanceFeature($instanceId, $featureId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceSetInstanceFeature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **featureId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceSetInstanceFeatureBody**](../Model/SystemServiceSetInstanceFeatureBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetInstanceFeatureResponse**](../Model/V1SetInstanceFeatureResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceSetPrimaryDomain()`

```php
systemServiceSetPrimaryDomain($instanceId, $body): \ArthurHlt\Zitadel\Model\V1SetPrimaryDomainResponse
```

Sets the primary domain of an instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceSetPrimaryDomainBody(); // \ArthurHlt\Zitadel\Model\SystemServiceSetPrimaryDomainBody

try {
    $result = $apiInstance->systemServiceSetPrimaryDomain($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceSetPrimaryDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceSetPrimaryDomainBody**](../Model/SystemServiceSetPrimaryDomainBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetPrimaryDomainResponse**](../Model/V1SetPrimaryDomainResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemServiceUpdateInstance()`

```php
systemServiceUpdateInstance($instanceId, $body): \ArthurHlt\Zitadel\Model\V1UpdateInstanceResponse
```

Updates name of an existing instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SystemServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$instanceId = 'instanceId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\SystemServiceUpdateInstanceBody(); // \ArthurHlt\Zitadel\Model\SystemServiceUpdateInstanceBody

try {
    $result = $apiInstance->systemServiceUpdateInstance($instanceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemServiceApi->systemServiceUpdateInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instanceId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\SystemServiceUpdateInstanceBody**](../Model/SystemServiceUpdateInstanceBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateInstanceResponse**](../Model/V1UpdateInstanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
