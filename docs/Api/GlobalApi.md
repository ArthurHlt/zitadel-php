# ArthurHlt\Zitadel\GlobalApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**managementServiceGetUserByLoginNameGlobal()**](GlobalApi.md#managementServiceGetUserByLoginNameGlobal) | **GET** /global/users/_by_login_name | Get User by login name (globally)


## `managementServiceGetUserByLoginNameGlobal()`

```php
managementServiceGetUserByLoginNameGlobal($loginName): \ArthurHlt\Zitadel\Model\V1GetUserByLoginNameGlobalResponse
```

Get User by login name (globally)

Get a user by login name searched over all organizations. The request only returns data if the login name matches exactly.  Deprecated: please use user service v2 ListUsers, with LoginNameQuery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\GlobalApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$loginName = 'loginName_example'; // string

try {
    $result = $apiInstance->managementServiceGetUserByLoginNameGlobal($loginName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalApi->managementServiceGetUserByLoginNameGlobal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loginName** | **string**|  | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetUserByLoginNameGlobalResponse**](../Model/V1GetUserByLoginNameGlobalResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
