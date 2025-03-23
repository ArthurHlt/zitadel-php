# # V1UpdateLockoutPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**maxPasswordAttempts** | **int** | Maximum password check attempts before the account gets locked. Attempts are reset as soon as the password is entered correctly or the password is reset. | [optional]
**maxOtpAttempts** | **int** | Maximum failed attempts for a single OTP type (TOTP, SMS, Email) before the account gets locked. Attempts are reset as soon as the OTP is entered correctly. If set to 0 the account will never be locked. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
