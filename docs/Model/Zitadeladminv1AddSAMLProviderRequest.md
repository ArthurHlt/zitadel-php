# # Zitadeladminv1AddSAMLProviderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**metadataXml** | **string** | Metadata of the SAML identity provider. | [optional]
**metadataUrl** | **string** | Url to the metadata of the SAML identity provider. | [optional]
**binding** | [**\ArthurHlt\Zitadel\Model\Idpv1SAMLBinding**](Idpv1SAMLBinding.md) |  | [optional]
**withSignedRequest** | **bool** | Boolean which defines if the authentication requests are signed. | [optional]
**providerOptions** | [**\ArthurHlt\Zitadel\Model\Idpv1Options**](Idpv1Options.md) |  | [optional]
**nameIdFormat** | [**\ArthurHlt\Zitadel\Model\Idpv1SAMLNameIDFormat**](Idpv1SAMLNameIDFormat.md) |  | [optional]
**transientMappingAttributeName** | **string** | Optionally specify the name of the attribute, which will be used to map the user in case the nameid-format returned is &#x60;urn:oasis:names:tc:SAML:2.0:nameid-format:transient&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
