# ArthurHlt\Zitadel\ZITADELActionsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zITADELActionsCreateTarget()**](ZITADELActionsApi.md#zITADELActionsCreateTarget) | **POST** /resources/v3alpha/actions/targets | Create a target
[**zITADELActionsDeleteTarget()**](ZITADELActionsApi.md#zITADELActionsDeleteTarget) | **DELETE** /resources/v3alpha/actions/targets/{id} | Delete a target
[**zITADELActionsGetTarget()**](ZITADELActionsApi.md#zITADELActionsGetTarget) | **GET** /resources/v3alpha/actions/targets/{id} | Target by ID
[**zITADELActionsListExecutionFunctions()**](ZITADELActionsApi.md#zITADELActionsListExecutionFunctions) | **GET** /resources/v3alpha/actions/executions/functions | List all available functions
[**zITADELActionsListExecutionMethods()**](ZITADELActionsApi.md#zITADELActionsListExecutionMethods) | **GET** /resources/v3alpha/actions/executions/methods | List all available methods
[**zITADELActionsListExecutionServices()**](ZITADELActionsApi.md#zITADELActionsListExecutionServices) | **GET** /resources/v3alpha/actions/executions/services | List all available service
[**zITADELActionsPatchTarget()**](ZITADELActionsApi.md#zITADELActionsPatchTarget) | **PATCH** /resources/v3alpha/actions/targets/{id} | Patch a target
[**zITADELActionsSearchExecutions()**](ZITADELActionsApi.md#zITADELActionsSearchExecutions) | **POST** /resources/v3alpha/actions/executions/_search | Search executions
[**zITADELActionsSearchTargets()**](ZITADELActionsApi.md#zITADELActionsSearchTargets) | **POST** /resources/v3alpha/actions/targets/_search | Search targets
[**zITADELActionsSetExecution()**](ZITADELActionsApi.md#zITADELActionsSetExecution) | **PUT** /resources/v3alpha/actions/executions | Sets an execution to call a target or include the targets of another execution.


## `zITADELActionsCreateTarget()`

```php
zITADELActionsCreateTarget($target, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaCreateTargetResponse
```

Create a target

Create a new target, which can be used in executions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$target = new \ArthurHlt\Zitadel\Model\V3alphaTarget(); // \ArthurHlt\Zitadel\Model\V3alphaTarget
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELActionsCreateTarget($target, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsCreateTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target** | [**\ArthurHlt\Zitadel\Model\V3alphaTarget**](../Model/V3alphaTarget.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaCreateTargetResponse**](../Model/V3alphaCreateTargetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsDeleteTarget()`

```php
zITADELActionsDeleteTarget($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaDeleteTargetResponse
```

Delete a target

Delete an existing target. This will remove it from any configured execution as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELActionsDeleteTarget($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsDeleteTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaDeleteTargetResponse**](../Model/V3alphaDeleteTargetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsGetTarget()`

```php
zITADELActionsGetTarget($id, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaGetTargetResponse
```

Target by ID

Returns the target identified by the requested ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELActionsGetTarget($id, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsGetTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaGetTargetResponse**](../Model/V3alphaGetTargetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsListExecutionFunctions()`

```php
zITADELActionsListExecutionFunctions(): \ArthurHlt\Zitadel\Model\V3alphaListExecutionFunctionsResponse
```

List all available functions

List all available functions which can be used as condition for executions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->zITADELActionsListExecutionFunctions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsListExecutionFunctions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaListExecutionFunctionsResponse**](../Model/V3alphaListExecutionFunctionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsListExecutionMethods()`

```php
zITADELActionsListExecutionMethods(): \ArthurHlt\Zitadel\Model\V3alphaListExecutionMethodsResponse
```

List all available methods

List all available methods which can be used as condition for executions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->zITADELActionsListExecutionMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsListExecutionMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaListExecutionMethodsResponse**](../Model/V3alphaListExecutionMethodsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsListExecutionServices()`

```php
zITADELActionsListExecutionServices(): \ArthurHlt\Zitadel\Model\V3alphaListExecutionServicesResponse
```

List all available service

List all available services which can be used as condition for executions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->zITADELActionsListExecutionServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsListExecutionServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaListExecutionServicesResponse**](../Model/V3alphaListExecutionServicesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsPatchTarget()`

```php
zITADELActionsPatchTarget($id, $target, $instanceId, $instanceDomain): \ArthurHlt\Zitadel\Model\V3alphaPatchTargetResponse
```

Patch a target

Patch an existing target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$target = new \ArthurHlt\Zitadel\Model\Actionv3alphaPatchTarget(); // \ArthurHlt\Zitadel\Model\Actionv3alphaPatchTarget
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string

try {
    $result = $apiInstance->zITADELActionsPatchTarget($id, $target, $instanceId, $instanceDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsPatchTarget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **target** | [**\ArthurHlt\Zitadel\Model\Actionv3alphaPatchTarget**](../Model/Actionv3alphaPatchTarget.md)|  |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaPatchTargetResponse**](../Model/V3alphaPatchTargetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsSearchExecutions()`

```php
zITADELActionsSearchExecutions($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn): \ArthurHlt\Zitadel\Model\V3alphaSearchExecutionsResponse
```

Search executions

Search all matching executions. By default all executions of the instance are returned that have at least one execution target. Make sure to include a limit and sorting for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filters = array(new \ArthurHlt\Zitadel\Model\V3alphaExecutionSearchFilter()); // \ArthurHlt\Zitadel\Model\V3alphaExecutionSearchFilter[] | Define the criteria to query for.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error.
$queryDesc = True; // bool | default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results.
$sortingColumn = 'EXECUTION_FIELD_NAME_UNSPECIFIED'; // string | The field the result is sorted by. The default is the creation date. Beware that if you change this, your result pagination might be inconsistent.

try {
    $result = $apiInstance->zITADELActionsSearchExecutions($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsSearchExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | [**\ArthurHlt\Zitadel\Model\V3alphaExecutionSearchFilter[]**](../Model/V3alphaExecutionSearchFilter.md)| Define the criteria to query for. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error. | [optional]
 **queryDesc** | **bool**| default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results. | [optional]
 **sortingColumn** | **string**| The field the result is sorted by. The default is the creation date. Beware that if you change this, your result pagination might be inconsistent. | [optional] [default to &#39;EXECUTION_FIELD_NAME_UNSPECIFIED&#39;]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSearchExecutionsResponse**](../Model/V3alphaSearchExecutionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsSearchTargets()`

```php
zITADELActionsSearchTargets($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn): \ArthurHlt\Zitadel\Model\V3alphaSearchTargetsResponse
```

Search targets

Search all matching targets. By default all targets of the instance are returned. Make sure to include a limit and sorting for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$filters = array(new \ArthurHlt\Zitadel\Model\V3alphaTargetSearchFilter()); // \ArthurHlt\Zitadel\Model\V3alphaTargetSearchFilter[] | Define the criteria to query for.
$instanceId = 'instanceId_example'; // string
$instanceDomain = 'instanceDomain_example'; // string
$queryOffset = 'queryOffset_example'; // string
$queryLimit = 56; // int | Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error.
$queryDesc = True; // bool | default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results.
$sortingColumn = 'TARGET_FIELD_NAME_UNSPECIFIED'; // string | The field the result is sorted by. The default is the creation date. Beware that if you change this, your result pagination might be inconsistent.

try {
    $result = $apiInstance->zITADELActionsSearchTargets($filters, $instanceId, $instanceDomain, $queryOffset, $queryLimit, $queryDesc, $sortingColumn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsSearchTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filters** | [**\ArthurHlt\Zitadel\Model\V3alphaTargetSearchFilter[]**](../Model/V3alphaTargetSearchFilter.md)| Define the criteria to query for. |
 **instanceId** | **string**|  | [optional]
 **instanceDomain** | **string**|  | [optional]
 **queryOffset** | **string**|  | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. If not configured otherwise, the default is 100, the maximum is 1000. If the limit exceeds the maximum, ZITADEL throws an error. | [optional]
 **queryDesc** | **bool**| default is ascending, because together with the creation date sorting column, this returns the most deterministic pagination results. | [optional]
 **sortingColumn** | **string**| The field the result is sorted by. The default is the creation date. Beware that if you change this, your result pagination might be inconsistent. | [optional] [default to &#39;TARGET_FIELD_NAME_UNSPECIFIED&#39;]

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSearchTargetsResponse**](../Model/V3alphaSearchTargetsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zITADELActionsSetExecution()`

```php
zITADELActionsSetExecution($body): \ArthurHlt\Zitadel\Model\V3alphaSetExecutionResponse
```

Sets an execution to call a target or include the targets of another execution.

Setting an empty list of targets will remove all targets from the execution, making it a noop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ZITADELActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V3alphaSetExecutionRequest(); // \ArthurHlt\Zitadel\Model\V3alphaSetExecutionRequest

try {
    $result = $apiInstance->zITADELActionsSetExecution($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZITADELActionsApi->zITADELActionsSetExecution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V3alphaSetExecutionRequest**](../Model/V3alphaSetExecutionRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V3alphaSetExecutionResponse**](../Model/V3alphaSetExecutionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
