# ArthurHlt\Zitadel\MilestonesApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceListMilestones()**](MilestonesApi.md#adminServiceListMilestones) | **POST** /milestones/_search | Search Milestones


## `adminServiceListMilestones()`

```php
adminServiceListMilestones($body): \ArthurHlt\Zitadel\Model\V1ListMilestonesResponse
```

Search Milestones

Returns a list of reached instance usage milestones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\MilestonesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMilestonesRequest(); // \ArthurHlt\Zitadel\Model\V1ListMilestonesRequest

try {
    $result = $apiInstance->adminServiceListMilestones($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->adminServiceListMilestones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMilestonesRequest**](../Model/V1ListMilestonesRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMilestonesResponse**](../Model/V1ListMilestonesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
