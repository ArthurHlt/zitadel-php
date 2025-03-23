# # Userv2betaHumanUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **string** | Unique identifier of the user. | [optional]
**state** | [**\ArthurHlt\Zitadel\Model\Userv2betaUserState**](Userv2betaUserState.md) |  | [optional]
**username** | **string** | Username of the user, which can be globally unique or unique on organization level. | [optional]
**loginNames** | **string[]** | Possible usable login names for the user. | [optional]
**preferredLoginName** | **string** | Preferred login name of the user. | [optional]
**profile** | [**\ArthurHlt\Zitadel\Model\Userv2betaHumanProfile**](Userv2betaHumanProfile.md) |  | [optional]
**email** | [**\ArthurHlt\Zitadel\Model\Userv2betaHumanEmail**](Userv2betaHumanEmail.md) |  | [optional]
**phone** | [**\ArthurHlt\Zitadel\Model\Userv2betaHumanPhone**](Userv2betaHumanPhone.md) |  | [optional]
**passwordChangeRequired** | **bool** | User is required to change the used password on the next login. | [optional]
**passwordChanged** | **\DateTime** | The time the user last changed their password. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
