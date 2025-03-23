# # Userv2HumanUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **string** | Unique identifier of the user. | [optional]
**state** | [**\ArthurHlt\Zitadel\Model\Userv2UserState**](Userv2UserState.md) |  | [optional]
**username** | **string** | Username of the user, which can be globally unique or unique on organization level. | [optional]
**loginNames** | **string[]** | Possible usable login names for the user. | [optional]
**preferredLoginName** | **string** | Preferred login name of the user. | [optional]
**profile** | [**\ArthurHlt\Zitadel\Model\Userv2HumanProfile**](Userv2HumanProfile.md) |  | [optional]
**email** | [**\ArthurHlt\Zitadel\Model\Userv2HumanEmail**](Userv2HumanEmail.md) |  | [optional]
**phone** | [**\ArthurHlt\Zitadel\Model\Userv2HumanPhone**](Userv2HumanPhone.md) |  | [optional]
**passwordChangeRequired** | **bool** | User is required to change the used password on the next login. | [optional]
**passwordChanged** | **\DateTime** | The time the user last changed their password. | [optional]
**mfaInitSkipped** | **\DateTime** | The time the user last skipped MFA initialization. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
