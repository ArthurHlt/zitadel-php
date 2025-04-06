# ArthurHlt\Zitadel\NotificationSettingsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddNotificationPolicy()**](NotificationSettingsApi.md#adminServiceAddNotificationPolicy) | **POST** /policies/notification | Add Notification Settings
[**adminServiceGetNotificationPolicy()**](NotificationSettingsApi.md#adminServiceGetNotificationPolicy) | **GET** /policies/notification | Return Notification Settings
[**adminServiceUpdateNotificationPolicy()**](NotificationSettingsApi.md#adminServiceUpdateNotificationPolicy) | **PUT** /policies/notification | Update Notification Settings
[**managementServiceGetDefaultNotificationPolicy()**](NotificationSettingsApi.md#managementServiceGetDefaultNotificationPolicy) | **GET** /policies/default/notification | Get Default Notification Settings
[**managementServiceResetNotificationPolicyToDefault()**](NotificationSettingsApi.md#managementServiceResetNotificationPolicyToDefault) | **DELETE** /policies/notification | Reset Notification Settings to Default


## `adminServiceAddNotificationPolicy()`

```php
adminServiceAddNotificationPolicy($body): \ArthurHlt\Zitadel\Model\V1AddNotificationPolicyResponse
```

Add Notification Settings

Add new notification settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddNotificationPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1AddNotificationPolicyRequest

try {
    $result = $apiInstance->adminServiceAddNotificationPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationSettingsApi->adminServiceAddNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddNotificationPolicyRequest**](../Model/V1AddNotificationPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddNotificationPolicyResponse**](../Model/V1AddNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetNotificationPolicy()`

```php
adminServiceGetNotificationPolicy(): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetNotificationPolicyResponse
```

Return Notification Settings

Return the notification settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetNotificationPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationSettingsApi->adminServiceGetNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetNotificationPolicyResponse**](../Model/Zitadeladminv1GetNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateNotificationPolicy()`

```php
adminServiceUpdateNotificationPolicy($body): \ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyResponse
```

Update Notification Settings

Update the notification settings configured on the instance. It affects all organizations, that do not have a custom setting configured. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyRequest

try {
    $result = $apiInstance->adminServiceUpdateNotificationPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationSettingsApi->adminServiceUpdateNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyRequest**](../Model/V1UpdateNotificationPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateNotificationPolicyResponse**](../Model/V1UpdateNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetDefaultNotificationPolicy()`

```php
managementServiceGetDefaultNotificationPolicy($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetDefaultNotificationPolicyResponse
```

Get Default Notification Settings

Return the default notification settings configured on the instance. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetDefaultNotificationPolicy($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationSettingsApi->managementServiceGetDefaultNotificationPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetDefaultNotificationPolicyResponse**](../Model/V1GetDefaultNotificationPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceResetNotificationPolicyToDefault()`

```php
managementServiceResetNotificationPolicyToDefault($xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ResetNotificationPolicyToDefaultResponse
```

Reset Notification Settings to Default

The settings configured will be removed from the organization. Therefore the settings from the instance will trigger for the users of this organization afterward. The settings specify if notifications should be sent to the users on specific triggers (e.g password changed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\NotificationSettingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceResetNotificationPolicyToDefault($xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationSettingsApi->managementServiceResetNotificationPolicyToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ResetNotificationPolicyToDefaultResponse**](../Model/V1ResetNotificationPolicyToDefaultResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
