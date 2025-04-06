# ArthurHlt\Zitadel\RestrictionsApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceGetAllowedLanguages()**](RestrictionsApi.md#adminServiceGetAllowedLanguages) | **GET** /languages/allowed | Allowed Languages


## `adminServiceGetAllowedLanguages()`

```php
adminServiceGetAllowedLanguages(): \ArthurHlt\Zitadel\Model\V1GetAllowedLanguagesResponse
```

Allowed Languages

If the languages are restricted, only those are returned. Else, all supported languages are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\RestrictionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminServiceGetAllowedLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestrictionsApi->adminServiceGetAllowedLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetAllowedLanguagesResponse**](../Model/V1GetAllowedLanguagesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
