# # V2CreateResponseResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\ArthurHlt\Zitadel\Model\Objectv2Details**](Objectv2Details.md) |  | [optional]
**url** | **string** | URL including the Assertion Consumer Service where the user should be redirected or has to call per POST, depending on the binding. Contains details for the application to obtain the response on success, or error details on failure. Note that this field must be treated as credentials, as the contained SAMLResponse or code can be used on behalve of the user. | [optional]
**redirect** | **object** |  | [optional]
**post** | [**\ArthurHlt\Zitadel\Model\V2PostResponse**](V2PostResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
