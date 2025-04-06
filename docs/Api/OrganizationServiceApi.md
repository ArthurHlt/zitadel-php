# ArthurHlt\Zitadel\OrganizationServiceApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationServiceAddOrganization()**](OrganizationServiceApi.md#organizationServiceAddOrganization) | **POST** /v2/organizations | Create an Organization
[**organizationServiceAddOrganization_0()**](OrganizationServiceApi.md#organizationServiceAddOrganization_0) | **POST** /v2beta/organizations | Create an Organization
[**organizationServiceListOrganizations()**](OrganizationServiceApi.md#organizationServiceListOrganizations) | **POST** /v2/organizations/_search | Search Organizations


## `organizationServiceAddOrganization()`

```php
organizationServiceAddOrganization($body): \ArthurHlt\Zitadel\Model\Orgv2AddOrganizationResponse
```

Create an Organization

Create a new organization with an administrative user. If no specific roles are sent for the users, they will be granted the role ORG_OWNER.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Orgv2AddOrganizationRequest(); // \ArthurHlt\Zitadel\Model\Orgv2AddOrganizationRequest

try {
    $result = $apiInstance->organizationServiceAddOrganization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationServiceApi->organizationServiceAddOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Orgv2AddOrganizationRequest**](../Model/Orgv2AddOrganizationRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Orgv2AddOrganizationResponse**](../Model/Orgv2AddOrganizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationServiceAddOrganization_0()`

```php
organizationServiceAddOrganization_0($body): \ArthurHlt\Zitadel\Model\Orgv2betaAddOrganizationResponse
```

Create an Organization

Create a new organization with an administrative user. If no specific roles are sent for the users, they will be granted the role ORG_OWNER.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Orgv2betaAddOrganizationRequest(); // \ArthurHlt\Zitadel\Model\Orgv2betaAddOrganizationRequest

try {
    $result = $apiInstance->organizationServiceAddOrganization_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationServiceApi->organizationServiceAddOrganization_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Orgv2betaAddOrganizationRequest**](../Model/Orgv2betaAddOrganizationRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Orgv2betaAddOrganizationResponse**](../Model/Orgv2betaAddOrganizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationServiceListOrganizations()`

```php
organizationServiceListOrganizations($body): \ArthurHlt\Zitadel\Model\V2ListOrganizationsResponse
```

Search Organizations

Search for Organizations. By default, we will return all organization of the instance. Make sure to include a limit and sorting for pagination..

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\OrganizationServiceApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V2ListOrganizationsRequest(); // \ArthurHlt\Zitadel\Model\V2ListOrganizationsRequest

try {
    $result = $apiInstance->organizationServiceListOrganizations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationServiceApi->organizationServiceListOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V2ListOrganizationsRequest**](../Model/V2ListOrganizationsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V2ListOrganizationsResponse**](../Model/V2ListOrganizationsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
