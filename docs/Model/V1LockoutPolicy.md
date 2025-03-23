# # V1LockoutPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\ArthurHlt\Zitadel\Model\V1ObjectDetails**](V1ObjectDetails.md) |  | [optional]
**maxPasswordAttempts** | **string** | Maximum password check attempts before the account gets locked. Attempts are reset as soon as the password is entered correctly or the password is reset. If set to 0 the account will never be locked. | [optional]
**maxOtpAttempts** | **string** | Maximum failed attempts for a single OTP type (TOTP, SMS, Email) before the account gets locked. Attempts are reset as soon as the OTP is entered correctly. If set to 0 the account will never be locked. | [optional]
**isDefault** | **bool** | defines if the organization&#39;s admin changed the policy | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
