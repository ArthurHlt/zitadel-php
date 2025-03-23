# ArthurHlt\Zitadel\UserProfileApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceGetMyProfile()**](UserProfileApi.md#authServiceGetMyProfile) | **GET** /users/me/profile | Get My Profile
[**authServiceUpdateMyProfile()**](UserProfileApi.md#authServiceUpdateMyProfile) | **PUT** /users/me/profile | Update My Profile


## `authServiceGetMyProfile()`

```php
authServiceGetMyProfile(): \ArthurHlt\Zitadel\Model\V1GetMyProfileResponse
```

Get My Profile

Returns the profile information of the authenticated user, this includes given name, family name, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceGetMyProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->authServiceGetMyProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetMyProfileResponse**](../Model/V1GetMyProfileResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceUpdateMyProfile()`

```php
authServiceUpdateMyProfile($body): \ArthurHlt\Zitadel\Model\V1UpdateMyProfileResponse
```

Update My Profile

Change the profile information of the authenticated user. This includes information like given name, family name, language, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1UpdateMyProfileRequest(); // \ArthurHlt\Zitadel\Model\V1UpdateMyProfileRequest

try {
    $result = $apiInstance->authServiceUpdateMyProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->authServiceUpdateMyProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1UpdateMyProfileRequest**](../Model/V1UpdateMyProfileRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateMyProfileResponse**](../Model/V1UpdateMyProfileResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
