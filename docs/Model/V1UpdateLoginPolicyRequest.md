# # V1UpdateLoginPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowUsernamePassword** | **bool** | defines if a user is allowed to log in with username and password | [optional]
**allowRegister** | **bool** | defines if a person is allowed to register a user on this organization | [optional]
**allowExternalIdp** | **bool** | defines if a user is allowed to add a defined identity provider. E.g. Google auth | [optional]
**forceMfa** | **bool** | defines if a user MUST use a multi-factor to log in | [optional]
**passwordlessType** | [**\ArthurHlt\Zitadel\Model\V1PasswordlessType**](V1PasswordlessType.md) |  | [optional]
**hidePasswordReset** | **bool** | defines if password reset link should be shown in the login screen | [optional]
**ignoreUnknownUsernames** | **bool** | defines if unknown username on login screen directly returns an error or always displays the password screen | [optional]
**defaultRedirectUri** | **string** | defines where the user will be redirected to if the login is started without app context (e.g. from mail) | [optional]
**passwordCheckLifetime** | **string** |  | [optional]
**externalLoginCheckLifetime** | **string** |  | [optional]
**mfaInitSkipLifetime** | **string** |  | [optional]
**secondFactorCheckLifetime** | **string** |  | [optional]
**multiFactorCheckLifetime** | **string** |  | [optional]
**allowDomainDiscovery** | **bool** | If set to true, the suffix (@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success. | [optional]
**disableLoginWithEmail** | **bool** | defines if the user can additionally (to the login name) be identified by their verified email address | [optional]
**disableLoginWithPhone** | **bool** | defines if the user can additionally (to the login name) be identified by their verified phone number | [optional]
**forceMfaLocalOnly** | **bool** | if activated, only local authenticated users are forced to use MFA. Authentication through IDPs won&#39;t prompt a MFA step in the login. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
