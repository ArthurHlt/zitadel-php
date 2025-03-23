# # V1ImportHumanUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userName** | **string** |  |
**profile** | [**\ArthurHlt\Zitadel\Model\V1ImportHumanUserRequestProfile**](V1ImportHumanUserRequestProfile.md) |  |
**email** | [**\ArthurHlt\Zitadel\Model\V1ImportHumanUserRequestEmail**](V1ImportHumanUserRequestEmail.md) |  |
**phone** | [**\ArthurHlt\Zitadel\Model\V1ImportHumanUserRequestPhone**](V1ImportHumanUserRequestPhone.md) |  | [optional]
**password** | **string** |  | [optional]
**hashedPassword** | [**\ArthurHlt\Zitadel\Model\V1ImportHumanUserRequestHashedPassword**](V1ImportHumanUserRequestHashedPassword.md) |  | [optional]
**passwordChangeRequired** | **bool** | If this is set to true, the user has to change the password on the next login. | [optional]
**requestPasswordlessRegistration** | **bool** | If this is set to true, you will get a link for the passwordless/passkey registration in the response. | [optional]
**otpCode** | **string** |  | [optional]
**idps** | [**\ArthurHlt\Zitadel\Model\V1ImportHumanUserRequestIDP[]**](V1ImportHumanUserRequestIDP.md) | To link your user directly with an external identity provider (Identity brokering) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
