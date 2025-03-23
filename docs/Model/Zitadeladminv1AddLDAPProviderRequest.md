# # Zitadeladminv1AddLDAPProviderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**servers** | **string[]** |  | [optional]
**startTls** | **bool** |  | [optional]
**baseDn** | **string** |  | [optional]
**bindDn** | **string** |  | [optional]
**bindPassword** | **string** |  | [optional]
**userBase** | **string** |  | [optional]
**userObjectClasses** | **string[]** |  | [optional]
**userFilters** | **string[]** |  | [optional]
**timeout** | **string** |  | [optional]
**attributes** | [**\ArthurHlt\Zitadel\Model\Idpv1LDAPAttributes**](Idpv1LDAPAttributes.md) |  | [optional]
**providerOptions** | [**\ArthurHlt\Zitadel\Model\Idpv1Options**](Idpv1Options.md) |  | [optional]
**rootCa** | **string** | Root_ca is for self signing certificates for TLS connections to LDAP servers it is intended to be filled with a .pem file. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
