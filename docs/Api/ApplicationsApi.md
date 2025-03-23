# ArthurHlt\Zitadel\ApplicationsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceAddAPIApp()**](ApplicationsApi.md#managementServiceAddAPIApp) | **POST** /projects/{projectId}/apps/api | Create Application (API)
[**managementServiceAddAppKey()**](ApplicationsApi.md#managementServiceAddAppKey) | **POST** /projects/{projectId}/apps/{appId}/keys | Create Application Key
[**managementServiceAddOIDCApp()**](ApplicationsApi.md#managementServiceAddOIDCApp) | **POST** /projects/{projectId}/apps/oidc | Create Application (OIDC)
[**managementServiceAddSAMLApp()**](ApplicationsApi.md#managementServiceAddSAMLApp) | **POST** /projects/{projectId}/apps/saml | Create Application (SAML)
[**managementServiceDeactivateApp()**](ApplicationsApi.md#managementServiceDeactivateApp) | **POST** /projects/{projectId}/apps/{appId}/_deactivate | Deactivate Application
[**managementServiceGetAppByID()**](ApplicationsApi.md#managementServiceGetAppByID) | **GET** /projects/{projectId}/apps/{appId} | Get Application By ID
[**managementServiceGetAppKey()**](ApplicationsApi.md#managementServiceGetAppKey) | **GET** /projects/{projectId}/apps/{appId}/keys/{keyId} | Get Application Key By ID
[**managementServiceListAppChanges()**](ApplicationsApi.md#managementServiceListAppChanges) | **POST** /projects/{projectId}/apps/{appId}/changes/_search | Application History
[**managementServiceListAppKeys()**](ApplicationsApi.md#managementServiceListAppKeys) | **POST** /projects/{projectId}/apps/{appId}/keys/_search | List Application Keys
[**managementServiceListApps()**](ApplicationsApi.md#managementServiceListApps) | **POST** /projects/{projectId}/apps/_search | Search Applications
[**managementServiceReactivateApp()**](ApplicationsApi.md#managementServiceReactivateApp) | **POST** /projects/{projectId}/apps/{appId}/_reactivate | Reactivate Application
[**managementServiceRegenerateAPIClientSecret()**](ApplicationsApi.md#managementServiceRegenerateAPIClientSecret) | **POST** /projects/{projectId}/apps/{appId}/api_config/_generate_client_secret | Generate New API Client Secret
[**managementServiceRegenerateOIDCClientSecret()**](ApplicationsApi.md#managementServiceRegenerateOIDCClientSecret) | **POST** /projects/{projectId}/apps/{appId}/oidc_config/_generate_client_secret | Generate New OIDC Client Secret
[**managementServiceRemoveApp()**](ApplicationsApi.md#managementServiceRemoveApp) | **DELETE** /projects/{projectId}/apps/{appId} | Remove Application
[**managementServiceRemoveAppKey()**](ApplicationsApi.md#managementServiceRemoveAppKey) | **DELETE** /projects/{projectId}/apps/{appId}/keys/{keyId} | Delete Application Key
[**managementServiceUpdateAPIAppConfig()**](ApplicationsApi.md#managementServiceUpdateAPIAppConfig) | **PUT** /projects/{projectId}/apps/{appId}/api_config | Update API Application Config
[**managementServiceUpdateApp()**](ApplicationsApi.md#managementServiceUpdateApp) | **PUT** /projects/{projectId}/apps/{appId} | Update Application
[**managementServiceUpdateOIDCAppConfig()**](ApplicationsApi.md#managementServiceUpdateOIDCAppConfig) | **PUT** /projects/{projectId}/apps/{appId}/oidc_config | Update OIDC Application Config
[**managementServiceUpdateSAMLAppConfig()**](ApplicationsApi.md#managementServiceUpdateSAMLAppConfig) | **PUT** /projects/{projectId}/apps/{appId}/saml_config | Update SAML Application Config


## `managementServiceAddAPIApp()`

```php
managementServiceAddAPIApp($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddAPIAppResponse
```

Create Application (API)

Create a new API client. The client id will be generated and returned in the response. Depending on the chosen configuration also a secret will be generated and returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddAPIAppBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddAPIAppBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddAPIApp($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceAddAPIApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddAPIAppBody**](../Model/ManagementServiceAddAPIAppBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddAPIAppResponse**](../Model/V1AddAPIAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddAppKey()`

```php
managementServiceAddAppKey($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddAppKeyResponse
```

Create Application Key

Create a new application key, they are used for authorizing API Applications. Key details will be returned in the response, make sure to save it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddAppKeyBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddAppKeyBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddAppKey($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceAddAppKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddAppKeyBody**](../Model/ManagementServiceAddAppKeyBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddAppKeyResponse**](../Model/V1AddAppKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddOIDCApp()`

```php
managementServiceAddOIDCApp($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddOIDCAppResponse
```

Create Application (OIDC)

Create a new OIDC client. The client id will be generated and returned in the response. Depending on the chosen configuration also a secret will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddOIDCAppBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddOIDCAppBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddOIDCApp($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceAddOIDCApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddOIDCAppBody**](../Model/ManagementServiceAddOIDCAppBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddOIDCAppResponse**](../Model/V1AddOIDCAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceAddSAMLApp()`

```php
managementServiceAddSAMLApp($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1AddSAMLAppResponse
```

Create Application (SAML)

Create a new SAML client. Returns an entity ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceAddSAMLAppBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceAddSAMLAppBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceAddSAMLApp($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceAddSAMLApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceAddSAMLAppBody**](../Model/ManagementServiceAddSAMLAppBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddSAMLAppResponse**](../Model/V1AddSAMLAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeactivateApp()`

```php
managementServiceDeactivateApp($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1DeactivateAppResponse
```

Deactivate Application

Set the state of an application to deactivated. It is not possible to request tokens for deactivated apps. Request returns an error if the application is already deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeactivateApp($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceDeactivateApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateAppResponse**](../Model/V1DeactivateAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetAppByID()`

```php
managementServiceGetAppByID($projectId, $appId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetAppByIDResponse
```

Get Application By ID

Get an application of any type (OIDC, API, SAML)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetAppByID($projectId, $appId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceGetAppByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetAppByIDResponse**](../Model/V1GetAppByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetAppKey()`

```php
managementServiceGetAppKey($projectId, $appId, $keyId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetAppKeyResponse
```

Get Application Key By ID

Returns an application key. Keys are used for authorizing API Applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$keyId = 'keyId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetAppKey($projectId, $appId, $keyId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceGetAppKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **keyId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetAppKeyResponse**](../Model/V1GetAppKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListAppChanges()`

```php
managementServiceListAppChanges($projectId, $appId, $querySequence, $queryLimit, $queryAsc, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListAppChangesResponse
```

Application History

Returns a list of changes/events that have happened on the application. It's the history of the app. Make sure to send a limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$querySequence = 'querySequence_example'; // string | sequence represents the order of events. It's always counting
$queryLimit = 56; // int | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.
$queryAsc = True; // bool | default is descending
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListAppChanges($projectId, $appId, $querySequence, $queryLimit, $queryAsc, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceListAppChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **querySequence** | **string**| sequence represents the order of events. It&#39;s always counting | [optional]
 **queryLimit** | **int**| Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
 **queryAsc** | **bool**| default is descending | [optional]
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListAppChangesResponse**](../Model/V1ListAppChangesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListAppKeys()`

```php
managementServiceListAppKeys($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListAppKeysResponse
```

List Application Keys

Search application keys. Keys are used for authorizing API Applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListAppKeysBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListAppKeysBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListAppKeys($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceListAppKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListAppKeysBody**](../Model/ManagementServiceListAppKeysBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListAppKeysResponse**](../Model/V1ListAppKeysResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListApps()`

```php
managementServiceListApps($projectId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListAppsResponse
```

Search Applications

Returns all applications within a project, that match the query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceListAppsBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceListAppsBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListApps($projectId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceListApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceListAppsBody**](../Model/ManagementServiceListAppsBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListAppsResponse**](../Model/V1ListAppsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceReactivateApp()`

```php
managementServiceReactivateApp($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ReactivateAppResponse
```

Reactivate Application

Set the state of an application to active. Request returns an error if the application is not deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceReactivateApp($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceReactivateApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateAppResponse**](../Model/V1ReactivateAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRegenerateAPIClientSecret()`

```php
managementServiceRegenerateAPIClientSecret($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RegenerateAPIClientSecretResponse
```

Generate New API Client Secret

Generates a new client secret for the API application, make sure to save the response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRegenerateAPIClientSecret($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceRegenerateAPIClientSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RegenerateAPIClientSecretResponse**](../Model/V1RegenerateAPIClientSecretResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRegenerateOIDCClientSecret()`

```php
managementServiceRegenerateOIDCClientSecret($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RegenerateOIDCClientSecretResponse
```

Generate New OIDC Client Secret

Generates a new client secret for the OIDC application, make sure to save the response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRegenerateOIDCClientSecret($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceRegenerateOIDCClientSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RegenerateOIDCClientSecretResponse**](../Model/V1RegenerateOIDCClientSecretResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveApp()`

```php
managementServiceRemoveApp($projectId, $appId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveAppResponse
```

Remove Application

Remove an application. It is not possible to request tokens for removed apps. Request returns an error if the application is already deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveApp($projectId, $appId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceRemoveApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveAppResponse**](../Model/V1RemoveAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveAppKey()`

```php
managementServiceRemoveAppKey($projectId, $appId, $keyId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1RemoveAppKeyResponse
```

Delete Application Key

Remove an application key. The API application will not be able to authorize with the key anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$keyId = 'keyId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveAppKey($projectId, $appId, $keyId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceRemoveAppKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **keyId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveAppKeyResponse**](../Model/V1RemoveAppKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateAPIAppConfig()`

```php
managementServiceUpdateAPIAppConfig($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateAPIAppConfigResponse
```

Update API Application Config

Update the OIDC-specific configuration of an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateAPIAppConfigBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateAPIAppConfigBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateAPIAppConfig($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceUpdateAPIAppConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateAPIAppConfigBody**](../Model/ManagementServiceUpdateAPIAppConfigBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateAPIAppConfigResponse**](../Model/V1UpdateAPIAppConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateApp()`

```php
managementServiceUpdateApp($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateAppResponse
```

Update Application

Update the basic information of an application. This doesn't include information that are dependent on the application type (OIDC, API, SAML)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateAppBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateAppBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateApp($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceUpdateApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateAppBody**](../Model/ManagementServiceUpdateAppBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateAppResponse**](../Model/V1UpdateAppResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateOIDCAppConfig()`

```php
managementServiceUpdateOIDCAppConfig($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateOIDCAppConfigResponse
```

Update OIDC Application Config

Update the OIDC specific configuration of an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOIDCAppConfigBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOIDCAppConfigBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateOIDCAppConfig($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceUpdateOIDCAppConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateOIDCAppConfigBody**](../Model/ManagementServiceUpdateOIDCAppConfigBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOIDCAppConfigResponse**](../Model/V1UpdateOIDCAppConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateSAMLAppConfig()`

```php
managementServiceUpdateSAMLAppConfig($projectId, $appId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateSAMLAppConfigResponse
```

Update SAML Application Config

Update the SAML specific configuration of an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string
$appId = 'appId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateSAMLAppConfigBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateSAMLAppConfigBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateSAMLAppConfig($projectId, $appId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->managementServiceUpdateSAMLAppConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**|  |
 **appId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateSAMLAppConfigBody**](../Model/ManagementServiceUpdateSAMLAppConfigBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to change/get objects of another organization include the header. Make sure the requesting user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateSAMLAppConfigResponse**](../Model/V1UpdateSAMLAppConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
