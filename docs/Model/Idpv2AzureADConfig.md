# # Idpv2AzureADConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientId** | **string** |  | [optional]
**tenant** | [**\ArthurHlt\Zitadel\Model\Idpv2AzureADTenant**](Idpv2AzureADTenant.md) |  | [optional]
**emailVerified** | **bool** | Azure AD doesn&#39;t send if the email has been verified. Enable this if the user email should always be added verified in ZITADEL (no verification emails will be sent). | [optional]
**scopes** | **string[]** | The scopes requested by ZITADEL during the request to Azure AD. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
