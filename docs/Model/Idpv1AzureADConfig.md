# # Idpv1AzureADConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientId** | **string** | client id of the Azure AD application | [optional]
**tenant** | [**\ArthurHlt\Zitadel\Model\Idpv1AzureADTenant**](Idpv1AzureADTenant.md) |  | [optional]
**emailVerified** | **bool** | Azure AD doesn&#39;t send if the email has been verified. Enable this if the user email should always be added verified in ZITADEL (no verification emails will be sent) | [optional]
**scopes** | **string[]** | the scopes requested by ZITADEL during the request to Azure AD | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
