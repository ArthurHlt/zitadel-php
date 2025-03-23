# # V3alphaAuthenticators

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usernames** | [**\ArthurHlt\Zitadel\Model\V3alphaUsername[]**](V3alphaUsername.md) | All of the user&#39;s usernames, which will be used for identification during authentication. | [optional]
**password** | [**\ArthurHlt\Zitadel\Model\Userv3alphaPassword**](Userv3alphaPassword.md) |  | [optional]
**webAuthN** | [**\ArthurHlt\Zitadel\Model\Userv3alphaWebAuthN[]**](Userv3alphaWebAuthN.md) | Meta information about the user&#39;s WebAuthN authenticators. | [optional]
**totps** | [**\ArthurHlt\Zitadel\Model\V3alphaTOTP[]**](V3alphaTOTP.md) | A list of the user&#39;s time-based one-time password (TOTP) authenticators, incl. the name for identification. | [optional]
**otpSms** | [**\ArthurHlt\Zitadel\Model\Userv3alphaOTPSMS[]**](Userv3alphaOTPSMS.md) | A list of the user&#39;s one-time password (OTP) SMS authenticators. | [optional]
**otpEmail** | [**\ArthurHlt\Zitadel\Model\Userv3alphaOTPEmail[]**](Userv3alphaOTPEmail.md) | A list of the user&#39;s one-time password (OTP) Email authenticators. | [optional]
**authenticationKeys** | [**\ArthurHlt\Zitadel\Model\V3alphaAuthenticationKey[]**](V3alphaAuthenticationKey.md) | A list of the user&#39;s authentication keys. They can be used to authenticate e.g. by JWT Profile. | [optional]
**identityProviders** | [**\ArthurHlt\Zitadel\Model\Userv3alphaIdentityProvider[]**](Userv3alphaIdentityProvider.md) | A list of the user&#39;s linked identity providers (IDPs). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
