# # V1AddCustomLoginPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowUsernamePassword** | **bool** |  | [optional]
**allowRegister** | **bool** |  | [optional]
**allowExternalIdp** | **bool** |  | [optional]
**forceMfa** | **bool** |  | [optional]
**passwordlessType** | [**\ArthurHlt\Zitadel\Model\V1PasswordlessType**](V1PasswordlessType.md) |  | [optional]
**hidePasswordReset** | **bool** |  | [optional]
**ignoreUnknownUsernames** | **bool** | defines if unknown username on login screen directly returns an error or always displays the password screen | [optional]
**defaultRedirectUri** | **string** | defines where the user will be redirected to if the login is started without app context (e.g. from mail) | [optional]
**passwordCheckLifetime** | **string** |  | [optional]
**externalLoginCheckLifetime** | **string** |  | [optional]
**mfaInitSkipLifetime** | **string** |  | [optional]
**secondFactorCheckLifetime** | **string** |  | [optional]
**multiFactorCheckLifetime** | **string** |  | [optional]
**secondFactors** | [**\ArthurHlt\Zitadel\Model\Policyv1SecondFactorType[]**](Policyv1SecondFactorType.md) |  | [optional]
**multiFactors** | [**\ArthurHlt\Zitadel\Model\Policyv1MultiFactorType[]**](Policyv1MultiFactorType.md) |  | [optional]
**idps** | [**\ArthurHlt\Zitadel\Model\V1AddCustomLoginPolicyRequestIDP[]**](V1AddCustomLoginPolicyRequestIDP.md) |  | [optional]
**allowDomainDiscovery** | **bool** | If set to true, the suffix (@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success. | [optional]
**disableLoginWithEmail** | **bool** | defines if the user can additionally (to the login name) be identified by their verified email address | [optional]
**disableLoginWithPhone** | **bool** | defines if the user can additionally (to the login name) be identified by their verified phone number | [optional]
**forceMfaLocalOnly** | **bool** | if activated, only local authenticated users are forced to use MFA. Authentication through IDPs won&#39;t prompt a MFA step in the login. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
