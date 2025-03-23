# # Userv3alphaSetPassword

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**password** | **string** | Provide the plain text password. ZITADEL will take care to store it in a secure way (hash). |
**hash** | **string** | Encoded hash of a password in Modular Crypt Format: https://zitadel.com/docs/concepts/architecture/secrets#hashed-secrets. |
**changeRequired** | **bool** | Provide if the user needs to change the password on the next use. | [optional]
**currentPassword** | **string** | Provide the current password to verify you&#39;re allowed to change the password. |
**verificationCode** | **string** | Or provider the verification code generated during password reset request. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
