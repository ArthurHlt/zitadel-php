# ArthurHlt\Zitadel\UserMembershipsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceListMyMemberships()**](UserMembershipsApi.md#authServiceListMyMemberships) | **POST** /memberships/me/_search | List My ZITADEL Manager Roles


## `authServiceListMyMemberships()`

```php
authServiceListMyMemberships($body): \ArthurHlt\Zitadel\Model\V1ListMyMembershipsResponse
```

List My ZITADEL Manager Roles

Show all the management roles my user has in ZITADEL (ZITADEL Manager).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserMembershipsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMyMembershipsRequest(); // \ArthurHlt\Zitadel\Model\V1ListMyMembershipsRequest

try {
    $result = $apiInstance->authServiceListMyMemberships($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserMembershipsApi->authServiceListMyMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMyMembershipsRequest**](../Model/V1ListMyMembershipsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyMembershipsResponse**](../Model/V1ListMyMembershipsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
