# ArthurHlt\Zitadel\AdminServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceActivateFeatureLoginDefaultOrg()**](AdminServiceApi.md#adminServiceActivateFeatureLoginDefaultOrg) | **PUT** /features/login_default_org | Activates the \&quot;LoginDefaultOrg\&quot; feature by setting the flag to \&quot;true\&quot; This is irreversible! Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set


## `adminServiceActivateFeatureLoginDefaultOrg()`

```php
adminServiceActivateFeatureLoginDefaultOrg(): \ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse
```

Activates the \"LoginDefaultOrg\" feature by setting the flag to \"true\" This is irreversible! Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\AdminServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceActivateFeatureLoginDefaultOrg();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminServiceApi->adminServiceActivateFeatureLoginDefaultOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1ActivateFeatureLoginDefaultOrgResponse**](../Model/V1ActivateFeatureLoginDefaultOrgResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
