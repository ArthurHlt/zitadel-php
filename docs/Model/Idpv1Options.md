# # Idpv1Options

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isLinkingAllowed** | **bool** | Enable if users should be able to manually link an existing ZITADEL user with an external account. Disable if users should only be allowed to link the proposed account in case of active auto_linking. | [optional]
**isCreationAllowed** | **bool** | Enable if users should be able to manually create a new account in ZITADEL when using an external account. Disable if users should not be able to edit account information when auto_creation is enabled. | [optional]
**isAutoCreation** | **bool** | Enable if a new account in ZITADEL should be created automatically when login with an external account. | [optional]
**isAutoUpdate** | **bool** | Enable if a the ZITADEL account fields should be updated automatically on each login. | [optional]
**autoLinking** | [**\ArthurHlt\Zitadel\Model\Idpv1AutoLinkingOption**](Idpv1AutoLinkingOption.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
