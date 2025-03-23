# # Userv3alphaWebAuthN

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webAuthNId** | **string** | unique identifier of the WebAuthN authenticator. | [optional]
**name** | **string** | Name of the WebAuthN authenticator. This is used for easier identification. | [optional]
**isVerified** | **bool** | State whether the WebAuthN registration has been completed. | [optional]
**userVerified** | **bool** | States if the user has been verified during the registration. Authentication with this device will be considered as multi-factor authentication (MFA) without the need to check a password (typically known as Passkeys). Without user verification it will be a second factor authentication (2FA), typically done after a password check.  More on WebAuthN User Verification: https://www.w3.org/TR/webauthn/#user-verification | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
