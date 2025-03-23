# # Oidcv2betaCreateCallbackResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\ArthurHlt\Zitadel\Model\Objectv2betaDetails**](Objectv2betaDetails.md) |  | [optional]
**callbackUrl** | **string** | Callback URL where the user should be redirected, using a \&quot;302 FOUND\&quot; status. Contains details for the application to obtain the tokens on success, or error details on failure. Note that this field must be treated as credentials, as the contained code can be used to obtain tokens on behalve of the user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
