# ArthurHlt\Zitadel\IdentityProvidersApi

All URIs are relative to https://zitadel.cloud/management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminServiceAddAppleProvider()**](IdentityProvidersApi.md#adminServiceAddAppleProvider) | **POST** /idps/apple | Add Apple Identity Provider
[**adminServiceAddAzureADProvider()**](IdentityProvidersApi.md#adminServiceAddAzureADProvider) | **POST** /idps/azure | Add AzureAD Identity Provider
[**adminServiceAddGenericOAuthProvider()**](IdentityProvidersApi.md#adminServiceAddGenericOAuthProvider) | **POST** /idps/oauth | Add Generic OAuth Identity Provider
[**adminServiceAddGenericOIDCProvider()**](IdentityProvidersApi.md#adminServiceAddGenericOIDCProvider) | **POST** /idps/generic_oidc | Add Generic OIDC Identity Provider
[**adminServiceAddGitHubEnterpriseServerProvider()**](IdentityProvidersApi.md#adminServiceAddGitHubEnterpriseServerProvider) | **POST** /idps/github_es | Add GitHub Enterprise Identity Provider
[**adminServiceAddGitHubProvider()**](IdentityProvidersApi.md#adminServiceAddGitHubProvider) | **POST** /idps/github | Add GitHub Identity Provider
[**adminServiceAddGitLabProvider()**](IdentityProvidersApi.md#adminServiceAddGitLabProvider) | **POST** /idps/gitlab | Add GitLab Identity Provider
[**adminServiceAddGitLabSelfHostedProvider()**](IdentityProvidersApi.md#adminServiceAddGitLabSelfHostedProvider) | **POST** /idps/gitlab_self_hosted | Add GitLab Selfhost Identity Provider
[**adminServiceAddGoogleProvider()**](IdentityProvidersApi.md#adminServiceAddGoogleProvider) | **POST** /idps/google | Add Google Identity Provider
[**adminServiceAddIDPToLoginPolicy()**](IdentityProvidersApi.md#adminServiceAddIDPToLoginPolicy) | **POST** /policies/login/idps | Add Linked Identity Provider
[**adminServiceAddJWTIDP()**](IdentityProvidersApi.md#adminServiceAddJWTIDP) | **POST** /idps/jwt | Deprecated: Add JWT Identity Provider (IDP)
[**adminServiceAddJWTProvider()**](IdentityProvidersApi.md#adminServiceAddJWTProvider) | **POST** /idps/generic_jwt | Add JWT Identity Provider
[**adminServiceAddLDAPProvider()**](IdentityProvidersApi.md#adminServiceAddLDAPProvider) | **POST** /idps/ldap | Add LDAP Identity Provider
[**adminServiceAddOIDCIDP()**](IdentityProvidersApi.md#adminServiceAddOIDCIDP) | **POST** /idps/oidc | Deprecated: Add OIDC Identity Provider (IDP)
[**adminServiceAddSAMLProvider()**](IdentityProvidersApi.md#adminServiceAddSAMLProvider) | **POST** /idps/saml | Add SAML Identity Provider
[**adminServiceDeactivateIDP()**](IdentityProvidersApi.md#adminServiceDeactivateIDP) | **POST** /idps/{idpId_1}/_deactivate | Deprecated: Deactivate Identity Provider (IDP)
[**adminServiceDeleteProvider()**](IdentityProvidersApi.md#adminServiceDeleteProvider) | **DELETE** /idps/templates/{id_1} | Delete Identity Provider
[**adminServiceGetIDPByID()**](IdentityProvidersApi.md#adminServiceGetIDPByID) | **GET** /idps/{id_1} | Deprecated: Get Identity Provider (IDP) by ID
[**adminServiceGetProviderByID()**](IdentityProvidersApi.md#adminServiceGetProviderByID) | **GET** /idps/templates/{id_1} | Get Identity Provider By ID
[**adminServiceListIDPs()**](IdentityProvidersApi.md#adminServiceListIDPs) | **POST** /idps/_search | Deprecated: Search Identity Providers (IDP)
[**adminServiceListLoginPolicyIDPs()**](IdentityProvidersApi.md#adminServiceListLoginPolicyIDPs) | **POST** /policies/login/idps/_search | List Linked Identity Providers
[**adminServiceListProviders()**](IdentityProvidersApi.md#adminServiceListProviders) | **POST** /idps/templates/_search | List Identity Providers
[**adminServiceMigrateGenericOIDCProvider()**](IdentityProvidersApi.md#adminServiceMigrateGenericOIDCProvider) | **POST** /idps/generic_oidc/{id_1}/_migrate | Migrate Generic OIDC Identity Provider
[**adminServiceReactivateIDP()**](IdentityProvidersApi.md#adminServiceReactivateIDP) | **POST** /idps/{idpId_1}/_reactivate | Deprecated: Reactivate Identity Provider (IDP)
[**adminServiceRegenerateSAMLProviderCertificate()**](IdentityProvidersApi.md#adminServiceRegenerateSAMLProviderCertificate) | **POST** /idps/saml/{id_1}/_generate_certificate | Regenerate SAML Identity Provider Certificate
[**adminServiceRemoveIDP()**](IdentityProvidersApi.md#adminServiceRemoveIDP) | **DELETE** /idps/{idpId_1} | Deprecated: Remove Identity Provider (IDP)
[**adminServiceRemoveIDPFromLoginPolicy()**](IdentityProvidersApi.md#adminServiceRemoveIDPFromLoginPolicy) | **DELETE** /policies/login/idps/{idpId_1} | Remove Linked Identity Provider
[**adminServiceUpdateAppleProvider()**](IdentityProvidersApi.md#adminServiceUpdateAppleProvider) | **PUT** /idps/apple/{id_1} | Update Apple Identity Provider
[**adminServiceUpdateAzureADProvider()**](IdentityProvidersApi.md#adminServiceUpdateAzureADProvider) | **PUT** /idps/azure/{id_1} | Update AzureAD Identity Provider
[**adminServiceUpdateGenericOAuthProvider()**](IdentityProvidersApi.md#adminServiceUpdateGenericOAuthProvider) | **PUT** /idps/oauth/{id_1} | Update Generic OAuth Identity Provider
[**adminServiceUpdateGenericOIDCProvider()**](IdentityProvidersApi.md#adminServiceUpdateGenericOIDCProvider) | **PUT** /idps/generic_oidc/{id_1} | Update Generic OIDC Identity Provider
[**adminServiceUpdateGitHubEnterpriseServerProvider()**](IdentityProvidersApi.md#adminServiceUpdateGitHubEnterpriseServerProvider) | **PUT** /idps/github_es/{id_1} | Update GitHub Enterprise Identity Provider
[**adminServiceUpdateGitHubProvider()**](IdentityProvidersApi.md#adminServiceUpdateGitHubProvider) | **PUT** /idps/github/{id_1} | Update GitHub Identity Provider
[**adminServiceUpdateGitLabProvider()**](IdentityProvidersApi.md#adminServiceUpdateGitLabProvider) | **POST** /idps/gitlab/{id} | Update GitLab Identity Provider
[**adminServiceUpdateGitLabSelfHostedProvider()**](IdentityProvidersApi.md#adminServiceUpdateGitLabSelfHostedProvider) | **POST** /idps/gitlab_self_hosted/{id} | Update GitLab Selfhost Identity Provider
[**adminServiceUpdateGoogleProvider()**](IdentityProvidersApi.md#adminServiceUpdateGoogleProvider) | **PUT** /idps/google/{id_1} | Update Google Identity Provider
[**adminServiceUpdateIDP()**](IdentityProvidersApi.md#adminServiceUpdateIDP) | **PUT** /idps/{idpId_1} | Deprecated: Update Identity Provider (IDP)
[**adminServiceUpdateIDPJWTConfig()**](IdentityProvidersApi.md#adminServiceUpdateIDPJWTConfig) | **PUT** /idps/{idpId_1}/jwt_config | Deprecated: Update JWT Identity Provider (IDP)
[**adminServiceUpdateIDPOIDCConfig()**](IdentityProvidersApi.md#adminServiceUpdateIDPOIDCConfig) | **PUT** /idps/{idpId_1}/oidc_config | Deprecated: Update OIDC Identity Provider (IDP)
[**adminServiceUpdateJWTProvider()**](IdentityProvidersApi.md#adminServiceUpdateJWTProvider) | **PUT** /idps/generic_jwt/{id_1} | Update JWT Identity Provider
[**adminServiceUpdateLDAPProvider()**](IdentityProvidersApi.md#adminServiceUpdateLDAPProvider) | **PUT** /idps/ldap/{id_1} | Update LDAP Identity Provider
[**adminServiceUpdateSAMLProvider()**](IdentityProvidersApi.md#adminServiceUpdateSAMLProvider) | **PUT** /idps/saml/{id_1} | Update SAML Identity Provider
[**managementServiceDeactivateOrgIDP()**](IdentityProvidersApi.md#managementServiceDeactivateOrgIDP) | **POST** /idps/{idpId}/_deactivate | Deprecated: Deactivate Identity Provider (IDP)
[**managementServiceDeleteProvider()**](IdentityProvidersApi.md#managementServiceDeleteProvider) | **DELETE** /idps/templates/{id} | Delete Identity Provider
[**managementServiceGetOrgIDPByID()**](IdentityProvidersApi.md#managementServiceGetOrgIDPByID) | **GET** /idps/{id} | Deprecated: Get Identity Provider (IDP) by ID
[**managementServiceGetProviderByID()**](IdentityProvidersApi.md#managementServiceGetProviderByID) | **GET** /idps/templates/{id} | Get Identity Provider By ID
[**managementServiceMigrateGenericOIDCProvider()**](IdentityProvidersApi.md#managementServiceMigrateGenericOIDCProvider) | **POST** /idps/generic_oidc/{id}/_migrate | Migrate Generic OIDC Identity Provider
[**managementServiceReactivateOrgIDP()**](IdentityProvidersApi.md#managementServiceReactivateOrgIDP) | **POST** /idps/{idpId}/_reactivate | Reactivate Identity Provider (IDP)
[**managementServiceRegenerateSAMLProviderCertificate()**](IdentityProvidersApi.md#managementServiceRegenerateSAMLProviderCertificate) | **POST** /idps/saml/{id}/_generate_certificate | Regenerate SAML Identity Provider Certificate
[**managementServiceRemoveIDPFromLoginPolicy()**](IdentityProvidersApi.md#managementServiceRemoveIDPFromLoginPolicy) | **DELETE** /policies/login/idps/{idpId} | Remove Linked Identity Provider
[**managementServiceRemoveOrgIDP()**](IdentityProvidersApi.md#managementServiceRemoveOrgIDP) | **DELETE** /idps/{idpId} | Remove Identity Provider (IDP)
[**managementServiceUpdateAppleProvider()**](IdentityProvidersApi.md#managementServiceUpdateAppleProvider) | **PUT** /idps/apple/{id} | Update Apple Identity Provider
[**managementServiceUpdateAzureADProvider()**](IdentityProvidersApi.md#managementServiceUpdateAzureADProvider) | **PUT** /idps/azure/{id} | Update Azure AD Identity Provider
[**managementServiceUpdateGenericOAuthProvider()**](IdentityProvidersApi.md#managementServiceUpdateGenericOAuthProvider) | **PUT** /idps/oauth/{id} | Update Generic OAuth Identity Provider
[**managementServiceUpdateGenericOIDCProvider()**](IdentityProvidersApi.md#managementServiceUpdateGenericOIDCProvider) | **PUT** /idps/generic_oidc/{id} | Update Generic OIDC Identity Provider
[**managementServiceUpdateGitHubEnterpriseServerProvider()**](IdentityProvidersApi.md#managementServiceUpdateGitHubEnterpriseServerProvider) | **PUT** /idps/github_es/{id} | Update GitHub Enterprise Identity Provider
[**managementServiceUpdateGitHubProvider()**](IdentityProvidersApi.md#managementServiceUpdateGitHubProvider) | **PUT** /idps/github/{id} | Update GitHub Identity Provider
[**managementServiceUpdateGitLabProvider()**](IdentityProvidersApi.md#managementServiceUpdateGitLabProvider) | **PUT** /idps/gitlab/{id} | Update GitLab Identity Provider
[**managementServiceUpdateGitLabSelfHostedProvider()**](IdentityProvidersApi.md#managementServiceUpdateGitLabSelfHostedProvider) | **PUT** /idps/gitlab_self_hosted/{id} | Update GitLab Selfhosted Identity Provider
[**managementServiceUpdateGoogleProvider()**](IdentityProvidersApi.md#managementServiceUpdateGoogleProvider) | **PUT** /idps/google/{id} | Update Google Identity Provider
[**managementServiceUpdateJWTProvider()**](IdentityProvidersApi.md#managementServiceUpdateJWTProvider) | **PUT** /idps/generic_jwt/{id} | Update JWT Identity Provider
[**managementServiceUpdateLDAPProvider()**](IdentityProvidersApi.md#managementServiceUpdateLDAPProvider) | **PUT** /idps/ldap/{id} | Update LDAP Identity Provider
[**managementServiceUpdateOrgIDP()**](IdentityProvidersApi.md#managementServiceUpdateOrgIDP) | **PUT** /idps/{idpId} | Deprecated: Update Identity Provider (IDP)
[**managementServiceUpdateOrgIDPJWTConfig()**](IdentityProvidersApi.md#managementServiceUpdateOrgIDPJWTConfig) | **PUT** /idps/{idpId}/jwt_config | Deprecated: Update JWT Identity Provider (IDP)
[**managementServiceUpdateOrgIDPOIDCConfig()**](IdentityProvidersApi.md#managementServiceUpdateOrgIDPOIDCConfig) | **PUT** /idps/{idpId}/oidc_config | Deprecated: Update OIDC Identity Provider (IDP)
[**managementServiceUpdateSAMLProvider()**](IdentityProvidersApi.md#managementServiceUpdateSAMLProvider) | **PUT** /idps/saml/{id} | Update SAML Identity Provider


## `adminServiceAddAppleProvider()`

```php
adminServiceAddAppleProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddAppleProviderResponse
```

Add Apple Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddAppleProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddAppleProviderRequest

try {
    $result = $apiInstance->adminServiceAddAppleProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddAppleProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddAppleProviderRequest**](../Model/Zitadeladminv1AddAppleProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddAppleProviderResponse**](../Model/Zitadeladminv1AddAppleProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddAzureADProvider()`

```php
adminServiceAddAzureADProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddAzureADProviderResponse
```

Add AzureAD Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddAzureADProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddAzureADProviderRequest

try {
    $result = $apiInstance->adminServiceAddAzureADProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddAzureADProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddAzureADProviderRequest**](../Model/Zitadeladminv1AddAzureADProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddAzureADProviderResponse**](../Model/Zitadeladminv1AddAzureADProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGenericOAuthProvider()`

```php
adminServiceAddGenericOAuthProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOAuthProviderResponse
```

Add Generic OAuth Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOAuthProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOAuthProviderRequest

try {
    $result = $apiInstance->adminServiceAddGenericOAuthProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGenericOAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOAuthProviderRequest**](../Model/Zitadeladminv1AddGenericOAuthProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOAuthProviderResponse**](../Model/Zitadeladminv1AddGenericOAuthProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGenericOIDCProvider()`

```php
adminServiceAddGenericOIDCProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOIDCProviderResponse
```

Add Generic OIDC Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOIDCProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOIDCProviderRequest

try {
    $result = $apiInstance->adminServiceAddGenericOIDCProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGenericOIDCProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOIDCProviderRequest**](../Model/Zitadeladminv1AddGenericOIDCProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGenericOIDCProviderResponse**](../Model/Zitadeladminv1AddGenericOIDCProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGitHubEnterpriseServerProvider()`

```php
adminServiceAddGitHubEnterpriseServerProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubEnterpriseServerProviderResponse
```

Add GitHub Enterprise Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubEnterpriseServerProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubEnterpriseServerProviderRequest

try {
    $result = $apiInstance->adminServiceAddGitHubEnterpriseServerProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGitHubEnterpriseServerProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubEnterpriseServerProviderRequest**](../Model/Zitadeladminv1AddGitHubEnterpriseServerProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubEnterpriseServerProviderResponse**](../Model/Zitadeladminv1AddGitHubEnterpriseServerProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGitHubProvider()`

```php
adminServiceAddGitHubProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubProviderResponse
```

Add GitHub Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubProviderRequest

try {
    $result = $apiInstance->adminServiceAddGitHubProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGitHubProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubProviderRequest**](../Model/Zitadeladminv1AddGitHubProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitHubProviderResponse**](../Model/Zitadeladminv1AddGitHubProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGitLabProvider()`

```php
adminServiceAddGitLabProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabProviderResponse
```

Add GitLab Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabProviderRequest

try {
    $result = $apiInstance->adminServiceAddGitLabProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGitLabProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabProviderRequest**](../Model/Zitadeladminv1AddGitLabProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabProviderResponse**](../Model/Zitadeladminv1AddGitLabProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGitLabSelfHostedProvider()`

```php
adminServiceAddGitLabSelfHostedProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabSelfHostedProviderResponse
```

Add GitLab Selfhost Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabSelfHostedProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabSelfHostedProviderRequest

try {
    $result = $apiInstance->adminServiceAddGitLabSelfHostedProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGitLabSelfHostedProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabSelfHostedProviderRequest**](../Model/Zitadeladminv1AddGitLabSelfHostedProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGitLabSelfHostedProviderResponse**](../Model/Zitadeladminv1AddGitLabSelfHostedProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddGoogleProvider()`

```php
adminServiceAddGoogleProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGoogleProviderResponse
```

Add Google Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGoogleProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddGoogleProviderRequest

try {
    $result = $apiInstance->adminServiceAddGoogleProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddGoogleProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGoogleProviderRequest**](../Model/Zitadeladminv1AddGoogleProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddGoogleProviderResponse**](../Model/Zitadeladminv1AddGoogleProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddIDPToLoginPolicy()`

```php
adminServiceAddIDPToLoginPolicy($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyResponse
```

Add Linked Identity Provider

Add/link a pre-configured identity provider to the login settings of the instance. This means that it will be shown to the users on the login page. It affects all organizations, without custom login settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyRequest

try {
    $result = $apiInstance->adminServiceAddIDPToLoginPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddIDPToLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyRequest**](../Model/Zitadeladminv1AddIDPToLoginPolicyRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddIDPToLoginPolicyResponse**](../Model/Zitadeladminv1AddIDPToLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddJWTIDP()`

```php
adminServiceAddJWTIDP($body): \ArthurHlt\Zitadel\Model\V1AddJWTIDPResponse
```

Deprecated: Add JWT Identity Provider (IDP)

Create a new identity provider configuration to enable your users to log in with social/enterprise login. JSON Web Token Identity Provider (JWT IDP) gives you the possibility to use an (existing) JWT as a federated identity. You have to provide an endpoint where ZITADEL can get the existing JWT token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddJWTIDPRequest(); // \ArthurHlt\Zitadel\Model\V1AddJWTIDPRequest

try {
    $result = $apiInstance->adminServiceAddJWTIDP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddJWTIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddJWTIDPRequest**](../Model/V1AddJWTIDPRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddJWTIDPResponse**](../Model/V1AddJWTIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddJWTProvider()`

```php
adminServiceAddJWTProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddJWTProviderResponse
```

Add JWT Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddJWTProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddJWTProviderRequest

try {
    $result = $apiInstance->adminServiceAddJWTProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddJWTProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddJWTProviderRequest**](../Model/Zitadeladminv1AddJWTProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddJWTProviderResponse**](../Model/Zitadeladminv1AddJWTProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddLDAPProvider()`

```php
adminServiceAddLDAPProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddLDAPProviderResponse
```

Add LDAP Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddLDAPProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddLDAPProviderRequest

try {
    $result = $apiInstance->adminServiceAddLDAPProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddLDAPProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddLDAPProviderRequest**](../Model/Zitadeladminv1AddLDAPProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddLDAPProviderResponse**](../Model/Zitadeladminv1AddLDAPProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddOIDCIDP()`

```php
adminServiceAddOIDCIDP($body): \ArthurHlt\Zitadel\Model\V1AddOIDCIDPResponse
```

Deprecated: Add OIDC Identity Provider (IDP)

Create a new identity provider configuration to enable your users to log in with social/enterprise login. The provider has to be OIDC compliant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1AddOIDCIDPRequest(); // \ArthurHlt\Zitadel\Model\V1AddOIDCIDPRequest

try {
    $result = $apiInstance->adminServiceAddOIDCIDP($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddOIDCIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1AddOIDCIDPRequest**](../Model/V1AddOIDCIDPRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1AddOIDCIDPResponse**](../Model/V1AddOIDCIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceAddSAMLProvider()`

```php
adminServiceAddSAMLProvider($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1AddSAMLProviderResponse
```

Add SAML Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1AddSAMLProviderRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1AddSAMLProviderRequest

try {
    $result = $apiInstance->adminServiceAddSAMLProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceAddSAMLProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddSAMLProviderRequest**](../Model/Zitadeladminv1AddSAMLProviderRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1AddSAMLProviderResponse**](../Model/Zitadeladminv1AddSAMLProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceDeactivateIDP()`

```php
adminServiceDeactivateIDP($idpId1): \ArthurHlt\Zitadel\Model\V1DeactivateIDPResponse
```

Deprecated: Deactivate Identity Provider (IDP)

Sets the state of the provider to inactive. It can only be called for the provider with the state active. Users will not be able to log in with the given provider afterward. It might cause troubles if it is the only authentication method of the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string

try {
    $result = $apiInstance->adminServiceDeactivateIDP($idpId1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceDeactivateIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateIDPResponse**](../Model/V1DeactivateIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceDeleteProvider()`

```php
adminServiceDeleteProvider($id1): \ArthurHlt\Zitadel\Model\Zitadeladminv1DeleteProviderResponse
```

Delete Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string

try {
    $result = $apiInstance->adminServiceDeleteProvider($id1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceDeleteProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1DeleteProviderResponse**](../Model/Zitadeladminv1DeleteProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetIDPByID()`

```php
adminServiceGetIDPByID($id1): \ArthurHlt\Zitadel\Model\Adminv1GetIDPByIDResponse
```

Deprecated: Get Identity Provider (IDP) by ID

Returns an identity provider (social/enterprise login) by its ID e.g Google, AzureAD, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string

try {
    $result = $apiInstance->adminServiceGetIDPByID($id1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceGetIDPByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Adminv1GetIDPByIDResponse**](../Model/Adminv1GetIDPByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceGetProviderByID()`

```php
adminServiceGetProviderByID($id1): \ArthurHlt\Zitadel\Model\Zitadeladminv1GetProviderByIDResponse
```

Get Identity Provider By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string

try {
    $result = $apiInstance->adminServiceGetProviderByID($id1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceGetProviderByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1GetProviderByIDResponse**](../Model/Zitadeladminv1GetProviderByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListIDPs()`

```php
adminServiceListIDPs($body): \ArthurHlt\Zitadel\Model\V1ListIDPsResponse
```

Deprecated: Search Identity Providers (IDP)

Returns a list of identity providers (social/enterprise login) configured on an instance level. e.g Google, AzureAD, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\V1ListIDPsRequest(); // \ArthurHlt\Zitadel\Model\V1ListIDPsRequest

try {
    $result = $apiInstance->adminServiceListIDPs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceListIDPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\V1ListIDPsRequest**](../Model/V1ListIDPsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ListIDPsResponse**](../Model/V1ListIDPsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListLoginPolicyIDPs()`

```php
adminServiceListLoginPolicyIDPs($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsResponse
```

List Linked Identity Providers

Returns a list of identity providers that are linked in the login policy. This means, that they are configured for the instance and will be shown to the users. It affects all organizations, without custom login settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsRequest

try {
    $result = $apiInstance->adminServiceListLoginPolicyIDPs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceListLoginPolicyIDPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsRequest**](../Model/Zitadeladminv1ListLoginPolicyIDPsRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListLoginPolicyIDPsResponse**](../Model/Zitadeladminv1ListLoginPolicyIDPsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceListProviders()`

```php
adminServiceListProviders($body): \ArthurHlt\Zitadel\Model\Zitadeladminv1ListProvidersResponse
```

List Identity Providers

Returns a list of identity providers (social/enterprise login) configured on an instance level. e.g Google, AzureAD, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$body = new \ArthurHlt\Zitadel\Model\Zitadeladminv1ListProvidersRequest(); // \ArthurHlt\Zitadel\Model\Zitadeladminv1ListProvidersRequest

try {
    $result = $apiInstance->adminServiceListProviders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceListProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListProvidersRequest**](../Model/Zitadeladminv1ListProvidersRequest.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1ListProvidersResponse**](../Model/Zitadeladminv1ListProvidersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceMigrateGenericOIDCProvider()`

```php
adminServiceMigrateGenericOIDCProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1MigrateGenericOIDCProviderResponse
```

Migrate Generic OIDC Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceMigrateGenericOIDCProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceMigrateGenericOIDCProviderBody

try {
    $result = $apiInstance->adminServiceMigrateGenericOIDCProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceMigrateGenericOIDCProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceMigrateGenericOIDCProviderBody**](../Model/V1AdminServiceMigrateGenericOIDCProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1MigrateGenericOIDCProviderResponse**](../Model/Zitadeladminv1MigrateGenericOIDCProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceReactivateIDP()`

```php
adminServiceReactivateIDP($idpId1): \ArthurHlt\Zitadel\Model\V1ReactivateIDPResponse
```

Deprecated: Reactivate Identity Provider (IDP)

Sets the state of the provider to active. It can only be called for providers with the state inactive. Users will not be able to log in again with the given provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string

try {
    $result = $apiInstance->adminServiceReactivateIDP($idpId1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceReactivateIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateIDPResponse**](../Model/V1ReactivateIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRegenerateSAMLProviderCertificate()`

```php
adminServiceRegenerateSAMLProviderCertificate($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1RegenerateSAMLProviderCertificateResponse
```

Regenerate SAML Identity Provider Certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->adminServiceRegenerateSAMLProviderCertificate($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceRegenerateSAMLProviderCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | **object**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1RegenerateSAMLProviderCertificateResponse**](../Model/Zitadeladminv1RegenerateSAMLProviderCertificateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveIDP()`

```php
adminServiceRemoveIDP($idpId1): \ArthurHlt\Zitadel\Model\V1RemoveIDPResponse
```

Deprecated: Remove Identity Provider (IDP)

Removes the identity provider permanently. All links to the given IDP on users will be deleted as well. They will not be able to log in with the provider afterward. If it is their only authentication possibility it might cause problems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveIDP($idpId1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceRemoveIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1RemoveIDPResponse**](../Model/V1RemoveIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceRemoveIDPFromLoginPolicy()`

```php
adminServiceRemoveIDPFromLoginPolicy($idpId1): \ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveIDPFromLoginPolicyResponse
```

Remove Linked Identity Provider

Remove an identity provider from the login settings of the instance. This means that it will not be shown to the users on the login page. It affects all organizations, without custom login settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string

try {
    $result = $apiInstance->adminServiceRemoveIDPFromLoginPolicy($idpId1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceRemoveIDPFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1RemoveIDPFromLoginPolicyResponse**](../Model/Zitadeladminv1RemoveIDPFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateAppleProvider()`

```php
adminServiceUpdateAppleProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateAppleProviderResponse
```

Update Apple Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateAppleProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateAppleProviderBody

try {
    $result = $apiInstance->adminServiceUpdateAppleProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateAppleProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateAppleProviderBody**](../Model/V1AdminServiceUpdateAppleProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateAppleProviderResponse**](../Model/Zitadeladminv1UpdateAppleProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateAzureADProvider()`

```php
adminServiceUpdateAzureADProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateAzureADProviderResponse
```

Update AzureAD Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateAzureADProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateAzureADProviderBody

try {
    $result = $apiInstance->adminServiceUpdateAzureADProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateAzureADProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateAzureADProviderBody**](../Model/V1AdminServiceUpdateAzureADProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateAzureADProviderResponse**](../Model/Zitadeladminv1UpdateAzureADProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGenericOAuthProvider()`

```php
adminServiceUpdateGenericOAuthProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGenericOAuthProviderResponse
```

Update Generic OAuth Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGenericOAuthProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGenericOAuthProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGenericOAuthProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGenericOAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGenericOAuthProviderBody**](../Model/V1AdminServiceUpdateGenericOAuthProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGenericOAuthProviderResponse**](../Model/Zitadeladminv1UpdateGenericOAuthProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGenericOIDCProvider()`

```php
adminServiceUpdateGenericOIDCProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGenericOIDCProviderResponse
```

Update Generic OIDC Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGenericOIDCProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGenericOIDCProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGenericOIDCProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGenericOIDCProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGenericOIDCProviderBody**](../Model/V1AdminServiceUpdateGenericOIDCProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGenericOIDCProviderResponse**](../Model/Zitadeladminv1UpdateGenericOIDCProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGitHubEnterpriseServerProvider()`

```php
adminServiceUpdateGitHubEnterpriseServerProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitHubEnterpriseServerProviderResponse
```

Update GitHub Enterprise Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitHubEnterpriseServerProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitHubEnterpriseServerProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGitHubEnterpriseServerProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGitHubEnterpriseServerProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitHubEnterpriseServerProviderBody**](../Model/V1AdminServiceUpdateGitHubEnterpriseServerProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitHubEnterpriseServerProviderResponse**](../Model/Zitadeladminv1UpdateGitHubEnterpriseServerProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGitHubProvider()`

```php
adminServiceUpdateGitHubProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitHubProviderResponse
```

Update GitHub Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitHubProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitHubProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGitHubProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGitHubProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitHubProviderBody**](../Model/V1AdminServiceUpdateGitHubProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitHubProviderResponse**](../Model/Zitadeladminv1UpdateGitHubProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGitLabProvider()`

```php
adminServiceUpdateGitLabProvider($id, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitLabProviderResponse
```

Update GitLab Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitLabProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitLabProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGitLabProvider($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGitLabProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitLabProviderBody**](../Model/V1AdminServiceUpdateGitLabProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitLabProviderResponse**](../Model/Zitadeladminv1UpdateGitLabProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGitLabSelfHostedProvider()`

```php
adminServiceUpdateGitLabSelfHostedProvider($id, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitLabSelfHostedProviderResponse
```

Update GitLab Selfhost Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitLabSelfHostedProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitLabSelfHostedProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGitLabSelfHostedProvider($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGitLabSelfHostedProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGitLabSelfHostedProviderBody**](../Model/V1AdminServiceUpdateGitLabSelfHostedProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGitLabSelfHostedProviderResponse**](../Model/Zitadeladminv1UpdateGitLabSelfHostedProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateGoogleProvider()`

```php
adminServiceUpdateGoogleProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGoogleProviderResponse
```

Update Google Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGoogleProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGoogleProviderBody

try {
    $result = $apiInstance->adminServiceUpdateGoogleProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateGoogleProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateGoogleProviderBody**](../Model/V1AdminServiceUpdateGoogleProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateGoogleProviderResponse**](../Model/Zitadeladminv1UpdateGoogleProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateIDP()`

```php
adminServiceUpdateIDP($idpId1, $body): \ArthurHlt\Zitadel\Model\V1UpdateIDPResponse
```

Deprecated: Update Identity Provider (IDP)

Update an existing IDP. All fields are updated. If you do not send a value in a field, it will be empty afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPBody

try {
    $result = $apiInstance->adminServiceUpdateIDP($idpId1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPBody**](../Model/AdminServiceUpdateIDPBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateIDPResponse**](../Model/V1UpdateIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateIDPJWTConfig()`

```php
adminServiceUpdateIDPJWTConfig($idpId1, $body): \ArthurHlt\Zitadel\Model\V1UpdateIDPJWTConfigResponse
```

Deprecated: Update JWT Identity Provider (IDP)

Update the JWT-specific configuration of an identity provider. All fields will be updated. If a field has no value it will be empty afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPJWTConfigBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPJWTConfigBody

try {
    $result = $apiInstance->adminServiceUpdateIDPJWTConfig($idpId1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateIDPJWTConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPJWTConfigBody**](../Model/AdminServiceUpdateIDPJWTConfigBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateIDPJWTConfigResponse**](../Model/V1UpdateIDPJWTConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateIDPOIDCConfig()`

```php
adminServiceUpdateIDPOIDCConfig($idpId1, $body): \ArthurHlt\Zitadel\Model\V1UpdateIDPOIDCConfigResponse
```

Deprecated: Update OIDC Identity Provider (IDP)

Update the OIDC-specific configuration of an identity provider. All fields will be updated. If a field has no value it will be empty afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId1 = 'idpId1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPOIDCConfigBody(); // \ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPOIDCConfigBody

try {
    $result = $apiInstance->adminServiceUpdateIDPOIDCConfig($idpId1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateIDPOIDCConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\AdminServiceUpdateIDPOIDCConfigBody**](../Model/AdminServiceUpdateIDPOIDCConfigBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateIDPOIDCConfigResponse**](../Model/V1UpdateIDPOIDCConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateJWTProvider()`

```php
adminServiceUpdateJWTProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateJWTProviderResponse
```

Update JWT Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateJWTProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateJWTProviderBody

try {
    $result = $apiInstance->adminServiceUpdateJWTProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateJWTProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateJWTProviderBody**](../Model/V1AdminServiceUpdateJWTProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateJWTProviderResponse**](../Model/Zitadeladminv1UpdateJWTProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateLDAPProvider()`

```php
adminServiceUpdateLDAPProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateLDAPProviderResponse
```

Update LDAP Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateLDAPProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateLDAPProviderBody

try {
    $result = $apiInstance->adminServiceUpdateLDAPProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateLDAPProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateLDAPProviderBody**](../Model/V1AdminServiceUpdateLDAPProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateLDAPProviderResponse**](../Model/Zitadeladminv1UpdateLDAPProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceUpdateSAMLProvider()`

```php
adminServiceUpdateSAMLProvider($id1, $body): \ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateSAMLProviderResponse
```

Update SAML Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id1 = 'id1_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateSAMLProviderBody(); // \ArthurHlt\Zitadel\Model\V1AdminServiceUpdateSAMLProviderBody

try {
    $result = $apiInstance->adminServiceUpdateSAMLProvider($id1, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminServiceUpdateSAMLProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id1** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1AdminServiceUpdateSAMLProviderBody**](../Model/V1AdminServiceUpdateSAMLProviderBody.md)|  |

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadeladminv1UpdateSAMLProviderResponse**](../Model/Zitadeladminv1UpdateSAMLProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeactivateOrgIDP()`

```php
managementServiceDeactivateOrgIDP($idpId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1DeactivateOrgIDPResponse
```

Deprecated: Deactivate Identity Provider (IDP)

Sets the state of the provider to inactive. It can only be called for the provider with the state active. Users will not be able to log in with the given provider afterward. It might cause troubles if it is the only authentication method of the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeactivateOrgIDP($idpId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceDeactivateOrgIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1DeactivateOrgIDPResponse**](../Model/V1DeactivateOrgIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceDeleteProvider()`

```php
managementServiceDeleteProvider($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1DeleteProviderResponse
```

Delete Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceDeleteProvider($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceDeleteProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1DeleteProviderResponse**](../Model/Zitadelmanagementv1DeleteProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetOrgIDPByID()`

```php
managementServiceGetOrgIDPByID($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1GetOrgIDPByIDResponse
```

Deprecated: Get Identity Provider (IDP) by ID

Returns an identity provider (social/enterprise login) by its ID e.g Google, AzureAD, etc that is configured on the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetOrgIDPByID($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceGetOrgIDPByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1GetOrgIDPByIDResponse**](../Model/V1GetOrgIDPByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceGetProviderByID()`

```php
managementServiceGetProviderByID($id, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1GetProviderByIDResponse
```

Get Identity Provider By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceGetProviderByID($id, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceGetProviderByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1GetProviderByIDResponse**](../Model/Zitadelmanagementv1GetProviderByIDResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceMigrateGenericOIDCProvider()`

```php
managementServiceMigrateGenericOIDCProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1MigrateGenericOIDCProviderResponse
```

Migrate Generic OIDC Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceMigrateGenericOIDCProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceMigrateGenericOIDCProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceMigrateGenericOIDCProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceMigrateGenericOIDCProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceMigrateGenericOIDCProviderBody**](../Model/V1ManagementServiceMigrateGenericOIDCProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1MigrateGenericOIDCProviderResponse**](../Model/Zitadelmanagementv1MigrateGenericOIDCProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceReactivateOrgIDP()`

```php
managementServiceReactivateOrgIDP($idpId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1ReactivateOrgIDPResponse
```

Reactivate Identity Provider (IDP)

Deprecated: Sets the state of the provider to active. It can only be called for providers with the state inactive. Users will not be able to log in again with the given provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceReactivateOrgIDP($idpId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceReactivateOrgIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1ReactivateOrgIDPResponse**](../Model/V1ReactivateOrgIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRegenerateSAMLProviderCertificate()`

```php
managementServiceRegenerateSAMLProviderCertificate($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1RegenerateSAMLProviderCertificateResponse
```

Regenerate SAML Identity Provider Certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRegenerateSAMLProviderCertificate($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceRegenerateSAMLProviderCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1RegenerateSAMLProviderCertificateResponse**](../Model/Zitadelmanagementv1RegenerateSAMLProviderCertificateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveIDPFromLoginPolicy()`

```php
managementServiceRemoveIDPFromLoginPolicy($idpId, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveIDPFromLoginPolicyResponse
```

Remove Linked Identity Provider

Remove an identity provider from the login settings of the organization. This means that it will not be shown to the users on the login page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveIDPFromLoginPolicy($idpId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceRemoveIDPFromLoginPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1RemoveIDPFromLoginPolicyResponse**](../Model/Zitadelmanagementv1RemoveIDPFromLoginPolicyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceRemoveOrgIDP()`

```php
managementServiceRemoveOrgIDP($idpId, $xZitadelOrgid): object
```

Remove Identity Provider (IDP)

Removes the identity provider permanently. All links to the given IDP on users will be deleted as well. They will not be able to log in with the provider afterward. If it is their only authentication possibility it might cause problems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceRemoveOrgIDP($idpId, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceRemoveOrgIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateAppleProvider()`

```php
managementServiceUpdateAppleProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateAppleProviderResponse
```

Update Apple Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateAppleProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateAppleProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateAppleProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateAppleProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateAppleProviderBody**](../Model/V1ManagementServiceUpdateAppleProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateAppleProviderResponse**](../Model/Zitadelmanagementv1UpdateAppleProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateAzureADProvider()`

```php
managementServiceUpdateAzureADProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateAzureADProviderResponse
```

Update Azure AD Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateAzureADProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateAzureADProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateAzureADProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateAzureADProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateAzureADProviderBody**](../Model/V1ManagementServiceUpdateAzureADProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateAzureADProviderResponse**](../Model/Zitadelmanagementv1UpdateAzureADProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGenericOAuthProvider()`

```php
managementServiceUpdateGenericOAuthProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGenericOAuthProviderResponse
```

Update Generic OAuth Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGenericOAuthProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGenericOAuthProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGenericOAuthProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGenericOAuthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGenericOAuthProviderBody**](../Model/V1ManagementServiceUpdateGenericOAuthProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGenericOAuthProviderResponse**](../Model/Zitadelmanagementv1UpdateGenericOAuthProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGenericOIDCProvider()`

```php
managementServiceUpdateGenericOIDCProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGenericOIDCProviderResponse
```

Update Generic OIDC Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGenericOIDCProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGenericOIDCProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGenericOIDCProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGenericOIDCProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGenericOIDCProviderBody**](../Model/V1ManagementServiceUpdateGenericOIDCProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGenericOIDCProviderResponse**](../Model/Zitadelmanagementv1UpdateGenericOIDCProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGitHubEnterpriseServerProvider()`

```php
managementServiceUpdateGitHubEnterpriseServerProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitHubEnterpriseServerProviderResponse
```

Update GitHub Enterprise Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitHubEnterpriseServerProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitHubEnterpriseServerProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGitHubEnterpriseServerProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGitHubEnterpriseServerProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitHubEnterpriseServerProviderBody**](../Model/V1ManagementServiceUpdateGitHubEnterpriseServerProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitHubEnterpriseServerProviderResponse**](../Model/Zitadelmanagementv1UpdateGitHubEnterpriseServerProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGitHubProvider()`

```php
managementServiceUpdateGitHubProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitHubProviderResponse
```

Update GitHub Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitHubProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitHubProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGitHubProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGitHubProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitHubProviderBody**](../Model/V1ManagementServiceUpdateGitHubProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitHubProviderResponse**](../Model/Zitadelmanagementv1UpdateGitHubProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGitLabProvider()`

```php
managementServiceUpdateGitLabProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitLabProviderResponse
```

Update GitLab Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitLabProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitLabProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGitLabProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGitLabProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitLabProviderBody**](../Model/V1ManagementServiceUpdateGitLabProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitLabProviderResponse**](../Model/Zitadelmanagementv1UpdateGitLabProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGitLabSelfHostedProvider()`

```php
managementServiceUpdateGitLabSelfHostedProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitLabSelfHostedProviderResponse
```

Update GitLab Selfhosted Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitLabSelfHostedProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitLabSelfHostedProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGitLabSelfHostedProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGitLabSelfHostedProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGitLabSelfHostedProviderBody**](../Model/V1ManagementServiceUpdateGitLabSelfHostedProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGitLabSelfHostedProviderResponse**](../Model/Zitadelmanagementv1UpdateGitLabSelfHostedProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateGoogleProvider()`

```php
managementServiceUpdateGoogleProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGoogleProviderResponse
```

Update Google Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGoogleProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGoogleProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateGoogleProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateGoogleProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateGoogleProviderBody**](../Model/V1ManagementServiceUpdateGoogleProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateGoogleProviderResponse**](../Model/Zitadelmanagementv1UpdateGoogleProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateJWTProvider()`

```php
managementServiceUpdateJWTProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateJWTProviderResponse
```

Update JWT Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateJWTProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateJWTProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateJWTProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateJWTProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateJWTProviderBody**](../Model/V1ManagementServiceUpdateJWTProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateJWTProviderResponse**](../Model/Zitadelmanagementv1UpdateJWTProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateLDAPProvider()`

```php
managementServiceUpdateLDAPProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateLDAPProviderResponse
```

Update LDAP Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateLDAPProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateLDAPProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateLDAPProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateLDAPProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateLDAPProviderBody**](../Model/V1ManagementServiceUpdateLDAPProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateLDAPProviderResponse**](../Model/Zitadelmanagementv1UpdateLDAPProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateOrgIDP()`

```php
managementServiceUpdateOrgIDP($idpId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateOrgIDPResponse
```

Deprecated: Update Identity Provider (IDP)

Update an existing IDP. All fields are updated. If you do not send a value in a field, it will be empty afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateOrgIDP($idpId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateOrgIDP: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPBody**](../Model/ManagementServiceUpdateOrgIDPBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOrgIDPResponse**](../Model/V1UpdateOrgIDPResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateOrgIDPJWTConfig()`

```php
managementServiceUpdateOrgIDPJWTConfig($idpId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateOrgIDPJWTConfigResponse
```

Deprecated: Update JWT Identity Provider (IDP)

Update the JWT-specific configuration of an identity provider. All fields will be updated. If a field has no value it will be empty afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPJWTConfigBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPJWTConfigBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateOrgIDPJWTConfig($idpId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateOrgIDPJWTConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPJWTConfigBody**](../Model/ManagementServiceUpdateOrgIDPJWTConfigBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOrgIDPJWTConfigResponse**](../Model/V1UpdateOrgIDPJWTConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateOrgIDPOIDCConfig()`

```php
managementServiceUpdateOrgIDPOIDCConfig($idpId, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\V1UpdateOrgIDPOIDCConfigResponse
```

Deprecated: Update OIDC Identity Provider (IDP)

Update the OIDC-specific configuration of an identity provider. All fields will be updated. If a field has no value it will be empty afterward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$idpId = 'idpId_example'; // string
$body = new \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPOIDCConfigBody(); // \ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPOIDCConfigBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateOrgIDPOIDCConfig($idpId, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateOrgIDPOIDCConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idpId** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\ManagementServiceUpdateOrgIDPOIDCConfigBody**](../Model/ManagementServiceUpdateOrgIDPOIDCConfigBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\V1UpdateOrgIDPOIDCConfigResponse**](../Model/V1UpdateOrgIDPOIDCConfigResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `managementServiceUpdateSAMLProvider()`

```php
managementServiceUpdateSAMLProvider($id, $body, $xZitadelOrgid): \ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateSAMLProviderResponse
```

Update SAML Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateSAMLProviderBody(); // \ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateSAMLProviderBody
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceUpdateSAMLProvider($id, $body, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->managementServiceUpdateSAMLProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\ArthurHlt\Zitadel\Model\V1ManagementServiceUpdateSAMLProviderBody**](../Model/V1ManagementServiceUpdateSAMLProviderBody.md)|  |
 **xZitadelOrgid** | **string**| The default is always the organization of the requesting user. If you like to get/set a result of another organization include the header. Make sure the user has permission to access the requested data. | [optional]

### Return type

[**\ArthurHlt\Zitadel\Model\Zitadelmanagementv1UpdateSAMLProviderResponse**](../Model/Zitadelmanagementv1UpdateSAMLProviderResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/grpc`, `application/grpc-web+proto`
- **Accept**: `application/json`, `application/grpc`, `application/grpc-web+proto`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
