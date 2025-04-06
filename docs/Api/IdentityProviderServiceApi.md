# ArthurHlt\Zitadel\IdentityProviderServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**identityProviderServiceGetIDPByID()**](IdentityProviderServiceApi.md#identityProviderServiceGetIDPByID) | **GET** /v2/idps/{id} | Get identity provider (IdP) by ID


## `identityProviderServiceGetIDPByID()`

```php
identityProviderServiceGetIDPByID($id): \ArthurHlt\Zitadel\Model\Idpv2GetIDPByIDResponse
```

Get identity provider (IdP) by ID

Returns an identity provider (social/enterprise login) by its ID, which can be of the type Google, AzureAD, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProviderServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->identityProviderServiceGetIDPByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderServiceApi->identityProviderServiceGetIDPByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Idpv2GetIDPByIDResponse**](../Model/Idpv2GetIDPByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
