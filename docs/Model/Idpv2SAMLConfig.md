# # Idpv2SAMLConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadataXml** | **string** | Metadata of the SAML identity provider. | [optional]
**binding** | [**\ArthurHlt\Zitadel\Model\Idpv2SAMLBinding**](Idpv2SAMLBinding.md) |  | [optional]
**withSignedRequest** | **bool** | Boolean which defines if the authentication requests are signed. | [optional]
**nameIdFormat** | [**\ArthurHlt\Zitadel\Model\Idpv2SAMLNameIDFormat**](Idpv2SAMLNameIDFormat.md) |  | [optional]
**transientMappingAttributeName** | **string** | Optional name of the attribute, which will be used to map the user in case the nameid-format returned is &#x60;urn:oasis:names:tc:SAML:2.0:nameid-format:transient&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
