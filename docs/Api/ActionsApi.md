# ArthurHlt\Zitadel\ActionsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceClearFlow()**](ActionsApi.md#managementServiceClearFlow) | **POST** /flows/{type}/_clear | Clear Flow
[**managementServiceCreateAction()**](ActionsApi.md#managementServiceCreateAction) | **POST** /actions | Create Action
[**managementServiceDeactivateAction()**](ActionsApi.md#managementServiceDeactivateAction) | **POST** /actions/{id}/_deactivate | Deactivate Action
[**managementServiceDeleteAction()**](ActionsApi.md#managementServiceDeleteAction) | **DELETE** /actions/{id} | Delete Action
[**managementServiceGetAction()**](ActionsApi.md#managementServiceGetAction) | **GET** /actions/{id} | Get Action By ID
[**managementServiceGetFlow()**](ActionsApi.md#managementServiceGetFlow) | **GET** /flows/{type} | Get Flow
[**managementServiceListActions()**](ActionsApi.md#managementServiceListActions) | **POST** /actions/_search | Search Actions
[**managementServiceListFlowTriggerTypes()**](ActionsApi.md#managementServiceListFlowTriggerTypes) | **POST** /flows/{type}/triggers/_search | List Flow Trigger Types
[**managementServiceListFlowTypes()**](ActionsApi.md#managementServiceListFlowTypes) | **POST** /flows/types/_search | Search Flow Types
[**managementServiceReactivateAction()**](ActionsApi.md#managementServiceReactivateAction) | **POST** /actions/{id}/_reactivate | Reactivate Action
[**managementServiceSetTriggerActions()**](ActionsApi.md#managementServiceSetTriggerActions) | **POST** /flows/{flowType}/trigger/{triggerType} | Set Trigger Actions
[**managementServiceUpdateAction()**](ActionsApi.md#managementServiceUpdateAction) | **PUT** /actions/{id} | Update Action


## `managementServiceClearFlow()`

```php
managementServiceClearFlow($type, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ClearFlowResponse
```

Clear Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | id of the flow
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceClearFlow($type, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceClearFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| id of the flow |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ClearFlowResponse**](../Model/V1ClearFlowResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceCreateAction()`

```php
managementServiceCreateAction($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1CreateActionResponse
```

Create Action

Create a new ZITADEL action. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1CreateActionRequest(); // \ArthurHlt\Zitadel\Model\V1CreateActionRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceCreateAction($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceCreateAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1CreateActionRequest**](../Model/V1CreateActionRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1CreateActionResponse**](../Model/V1CreateActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeactivateAction()`

```php
managementServiceDeactivateAction($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1DeactivateActionResponse
```

Deactivate Action

Deactivate an existing action. The action will not be executed if configured in a flow. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeactivateAction($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceDeactivateAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateActionResponse**](../Model/V1DeactivateActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeleteAction()`

```php
managementServiceDeleteAction($id, $body, $xZitadelOrgid): object
```

Delete Action

Remove an existing action. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeleteAction($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceDeleteAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

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

## `managementServiceGetAction()`

```php
managementServiceGetAction($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetActionResponse
```

Get Action By ID

Returns an action by id. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetAction($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceGetAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetActionResponse**](../Model/V1GetActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetFlow()`

```php
managementServiceGetFlow($type, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetFlowResponse
```

Get Flow

Returns a flow. Flows are the links between an action and a specific point during a user interaction with ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | id of the flow
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetFlow($type, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceGetFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| id of the flow |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetFlowResponse**](../Model/V1GetFlowResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListActions()`

```php
managementServiceListActions($body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListActionsResponse
```

Search Actions

Returns a list of actions matching the query. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListActionsRequest(); // \ArthurHlt\Zitadel\Model\V1ListActionsRequest
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListActions($body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceListActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListActionsRequest**](../Model/V1ListActionsRequest.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListActionsResponse**](../Model/V1ListActionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListFlowTriggerTypes()`

```php
managementServiceListFlowTriggerTypes($type, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListFlowTriggerTypesResponse
```

List Flow Trigger Types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListFlowTriggerTypes($type, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceListFlowTriggerTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListFlowTriggerTypesResponse**](../Model/V1ListFlowTriggerTypesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceListFlowTypes()`

```php
managementServiceListFlowTypes($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ListFlowTypesResponse
```

Search Flow Types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceListFlowTypes($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceListFlowTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListFlowTypesResponse**](../Model/V1ListFlowTypesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceReactivateAction()`

```php
managementServiceReactivateAction($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ReactivateActionResponse
```

Reactivate Action

Reactivate an existing action that is deactivated. The action will be executed again if configured in a flow. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceReactivateAction($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceReactivateAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateActionResponse**](../Model/V1ReactivateActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceSetTriggerActions()`

```php
managementServiceSetTriggerActions($flowType, $triggerType, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1SetTriggerActionsResponse
```

Set Trigger Actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$flowType = 'flowType_example'; // string | id of the flow type. Following flows are currently allowed: - External Authentication: FLOW_TYPE_EXTERNAL_AUTHENTICATION or 1 - Internal Authentication: 3 - Complement Token: 2 - Complement SAML Response: 4
$triggerType = 'triggerType_example'; // string | id of the trigger type. Following triggers are currently allowed: - External Authentication:   - Post Authentication: TRIGGER_TYPE_POST_AUTHENTICATION or 1   - Pre Creation: TRIGGER_TYPE_PRE_CREATION or 2   - Post Creation: TRIGGER_TYPE_POST_CREATION or 3 - Internal Authentication:   - Post Authentication: TRIGGER_TYPE_POST_AUTHENTICATION or 1   - Pre Creation: TRIGGER_TYPE_PRE_CREATION or 2   - Post Creation: TRIGGER_TYPE_POST_CREATION or 3 - Complement Token:   - Pre Userinfo Creation: 4   - Pre Access Token Creation: 5 - Complement SAML Response:   - Pre SAML Response Creation: 6
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceSetTriggerActionsBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceSetTriggerActionsBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceSetTriggerActions($flowType, $triggerType, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceSetTriggerActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowType** | **string**| id of the flow type. Following flows are currently allowed: - External Authentication: FLOW_TYPE_EXTERNAL_AUTHENTICATION or 1 - Internal Authentication: 3 - Complement Token: 2 - Complement SAML Response: 4 |
 **triggerType** | **string**| id of the trigger type. Following triggers are currently allowed: - External Authentication:   - Post Authentication: TRIGGER_TYPE_POST_AUTHENTICATION or 1   - Pre Creation: TRIGGER_TYPE_PRE_CREATION or 2   - Post Creation: TRIGGER_TYPE_POST_CREATION or 3 - Internal Authentication:   - Post Authentication: TRIGGER_TYPE_POST_AUTHENTICATION or 1   - Pre Creation: TRIGGER_TYPE_PRE_CREATION or 2   - Post Creation: TRIGGER_TYPE_POST_CREATION or 3 - Complement Token:   - Pre Userinfo Creation: 4   - Pre Access Token Creation: 5 - Complement SAML Response:   - Pre SAML Response Creation: 6 |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceSetTriggerActionsBody**](../Model/ManagementServiceSetTriggerActionsBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1SetTriggerActionsResponse**](../Model/V1SetTriggerActionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateAction()`

```php
managementServiceUpdateAction($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateActionResponse
```

Update Action

Update an existing ZITADEL action. Actions are custom code written in javascript, that can be run at a specified point/flow/trigger in ZITADEL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateActionBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateActionBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateAction($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceUpdateAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateActionBody**](../Model/ManagementServiceUpdateActionBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateActionResponse**](../Model/V1UpdateActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
