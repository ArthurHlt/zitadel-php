# # Userv2AddHumanUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **string** | optionally set your own id unique for the user. | [optional]
**username** | **string** | optionally set a unique username, if none is provided the email will be used. | [optional]
**organization** | [**\ArthurHlt\Zitadel\Model\Zitadelobjectv2Organization**](Zitadelobjectv2Organization.md) |  | [optional]
**profile** | [**\ArthurHlt\Zitadel\Model\Userv2SetHumanProfile**](Userv2SetHumanProfile.md) |  |
**email** | [**\ArthurHlt\Zitadel\Model\Userv2SetHumanEmail**](Userv2SetHumanEmail.md) |  |
**phone** | [**\ArthurHlt\Zitadel\Model\Userv2SetHumanPhone**](Userv2SetHumanPhone.md) |  | [optional]
**metadata** | [**\ArthurHlt\Zitadel\Model\Userv2SetMetadataEntry[]**](Userv2SetMetadataEntry.md) |  | [optional]
**password** | [**\ArthurHlt\Zitadel\Model\Userv2Password**](Userv2Password.md) |  | [optional]
**hashedPassword** | [**\ArthurHlt\Zitadel\Model\Userv2HashedPassword**](Userv2HashedPassword.md) |  | [optional]
**idpLinks** | [**\ArthurHlt\Zitadel\Model\Userv2IDPLink[]**](Userv2IDPLink.md) |  | [optional]
**totpSecret** | **string** | An Implementation of RFC 6238 is used, with HMAC-SHA-1 and time-step of 30 seconds. Currently no other options are supported, and if anything different is used the validation will fail. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
