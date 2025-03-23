# # Userv2betaAddHumanUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **string** | optionally set your own id unique for the user. | [optional]
**username** | **string** | optionally set a unique username, if none is provided the email will be used. | [optional]
**organization** | [**\ArthurHlt\Zitadel\Model\Objectv2betaOrganization**](Objectv2betaOrganization.md) |  | [optional]
**profile** | [**\ArthurHlt\Zitadel\Model\Userv2betaSetHumanProfile**](Userv2betaSetHumanProfile.md) |  |
**email** | [**\ArthurHlt\Zitadel\Model\Userv2betaSetHumanEmail**](Userv2betaSetHumanEmail.md) |  |
**phone** | [**\ArthurHlt\Zitadel\Model\Userv2betaSetHumanPhone**](Userv2betaSetHumanPhone.md) |  | [optional]
**metadata** | [**\ArthurHlt\Zitadel\Model\Userv2betaSetMetadataEntry[]**](Userv2betaSetMetadataEntry.md) |  | [optional]
**password** | [**\ArthurHlt\Zitadel\Model\Userv2betaPassword**](Userv2betaPassword.md) |  | [optional]
**hashedPassword** | [**\ArthurHlt\Zitadel\Model\Userv2betaHashedPassword**](Userv2betaHashedPassword.md) |  | [optional]
**idpLinks** | [**\ArthurHlt\Zitadel\Model\Userv2betaIDPLink[]**](Userv2betaIDPLink.md) |  | [optional]
**totpSecret** | **string** | An Implementation of RFC 6238 is used, with HMAC-SHA-1 and time-step of 30 seconds. Currently no other options are supported, and if anything different is used the validation will fail. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
