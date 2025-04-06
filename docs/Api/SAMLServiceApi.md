# ArthurHlt\Zitadel\SAMLServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sAMLServiceCreateResponse()**](SAMLServiceApi.md#sAMLServiceCreateResponse) | **POST** /v2/saml/saml_requests/{samlRequestId} | Finalize a SAML Request and get the response.
[**sAMLServiceGetSAMLRequest()**](SAMLServiceApi.md#sAMLServiceGetSAMLRequest) | **GET** /v2/saml/saml_requests/{samlRequestId} | Get SAML Request details


## `sAMLServiceCreateResponse()`

```php
sAMLServiceCreateResponse($samlRequestId, $body): \ArthurHlt\Zitadel\Model\V2CreateResponseResponse
```

Finalize a SAML Request and get the response.

Finalize a SAML Request and get the response definition for success or failure. The response must be handled as per the SAML definition to inform the application about the success or failure. On success, the response contains details for the application to obtain the SAMLResponse. This method can only be called once for an SAML request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SAMLServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$samlRequestId = 'samlRequestId_example'; // string | ID of the SAML Request.
$body = new \ArthurHlt\Zitadel\Model\SAMLServiceCreateResponseBody(); // \ArthurHlt\Zitadel\Model\SAMLServiceCreateResponseBody

try {
    $result = $apiInstance->sAMLServiceCreateResponse($samlRequestId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMLServiceApi->sAMLServiceCreateResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **samlRequestId** | **string**| ID of the SAML Request. |
 **body** | [**\ArthurHlt\Zitadel\Model\SAMLServiceCreateResponseBody**](../Model/SAMLServiceCreateResponseBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2CreateResponseResponse**](../Model/V2CreateResponseResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sAMLServiceGetSAMLRequest()`

```php
sAMLServiceGetSAMLRequest($samlRequestId): \ArthurHlt\Zitadel\Model\V2GetSAMLRequestResponse
```

Get SAML Request details

Get SAML Request details by ID. Returns details that are parsed from the application's SAML Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\SAMLServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$samlRequestId = 'samlRequestId_example'; // string | ID of the SAML Request, as obtained from the redirect URL.

try {
    $result = $apiInstance->sAMLServiceGetSAMLRequest($samlRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMLServiceApi->sAMLServiceGetSAMLRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **samlRequestId** | **string**| ID of the SAML Request, as obtained from the redirect URL. |

### Return type

[**\ArthurHlt\Zitadel\Model\V2GetSAMLRequestResponse**](../Model/V2GetSAMLRequestResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
