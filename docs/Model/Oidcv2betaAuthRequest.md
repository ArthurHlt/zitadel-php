# # Oidcv2betaAuthRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the authorization request | [optional]
**creationDate** | **\DateTime** | Time when the auth request was created | [optional]
**clientId** | **string** | OIDC client ID of the application that created the auth request | [optional]
**scope** | **string[]** | Requested scopes by the application, which the user must consent to. | [optional]
**redirectUri** | **string** | Base URI that points back to the application | [optional]
**prompt** | [**\ArthurHlt\Zitadel\Model\Oidcv2betaPrompt[]**](Oidcv2betaPrompt.md) | Prompts that must be displayed to the user | [optional]
**uiLocales** | **string[]** | End-User&#39;s preferred languages and scripts for the user interface, represented as a list of BCP47 [RFC5646] language tag values, ordered by preference. For instance, the value [fr-CA, fr, en] represents a preference for French as spoken in Canada, then French (without a region designation), followed by English (without a region designation). An error SHOULD NOT result if some or all of the requested locales are not supported. | [optional]
**loginHint** | **string** | Login hint can be set by the application with a user identifier such as an email or phone number. | [optional]
**maxAge** | **string** | Specifies the allowable elapsed time in seconds since the last time the End-User was actively authenticated. If the elapsed time is greater than this value, or the field is present with 0 duration, the user must be re-authenticated. | [optional]
**hintUserId** | **string** | User ID taken from a ID Token Hint if it was present and valid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
