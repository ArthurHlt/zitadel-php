# ArthurHlt\Zitadel\UserSocialLoginApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceListMyLinkedIDPs()**](UserSocialLoginApi.md#authServiceListMyLinkedIDPs) | **POST** /users/me/idps/_search | List Social Logins
[**authServiceRemoveMyLinkedIDP()**](UserSocialLoginApi.md#authServiceRemoveMyLinkedIDP) | **DELETE** /users/me/idps/{idpId}/{linkedUserId} | Remove Social Login


## `authServiceListMyLinkedIDPs()`

```php
authServiceListMyLinkedIDPs($body): \ArthurHlt\Zitadel\Model\V1ListMyLinkedIDPsResponse
```

List Social Logins

Returns a list of all linked identity providers/social logins of the user. (e. Google, Microsoft, AzureAD, etc.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserSocialLoginApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListMyLinkedIDPsRequest(); // \ArthurHlt\Zitadel\Model\V1ListMyLinkedIDPsRequest

try {
    $result = $apiInstance->authServiceListMyLinkedIDPs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSocialLoginApi->authServiceListMyLinkedIDPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListMyLinkedIDPsRequest**](../Model/V1ListMyLinkedIDPsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListMyLinkedIDPsResponse**](../Model/V1ListMyLinkedIDPsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRemoveMyLinkedIDP()`

```php
authServiceRemoveMyLinkedIDP($idpId, $linkedUserId): \ArthurHlt\Zitadel\Model\V1RemoveMyLinkedIDPResponse
```

Remove Social Login

Remove one of the linked social logins/identity providers of the authenticated user (e.g. Google, Microsoft, AzureAD, etc.). The user will not be able to log in with the given provider afterward. Make sure the user does have other possibilities to authenticate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserSocialLoginApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$linkedUserId = 'linkedUserId_example'; // string

try {
    $result = $apiInstance->authServiceRemoveMyLinkedIDP($idpId, $linkedUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSocialLoginApi->authServiceRemoveMyLinkedIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **linkedUserId** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveMyLinkedIDPResponse**](../Model/V1RemoveMyLinkedIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
