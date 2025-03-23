# # Actionv3alphaPatchTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**restWebhook** | [**\ArthurHlt\Zitadel\Model\V3alphaSetRESTWebhook**](V3alphaSetRESTWebhook.md) |  | [optional]
**restCall** | [**\ArthurHlt\Zitadel\Model\V3alphaSetRESTCall**](V3alphaSetRESTCall.md) |  | [optional]
**restAsync** | **object** | Call is executed in parallel to others, ZITADEL does not wait until the call is finished. The state is ignored, call is sent as post. | [optional]
**timeout** | **string** | if the target doesn&#39;t respond before this timeout expires, the the connection is closed and the action fails | [optional]
**endpoint** | **string** |  | [optional]
**expirationSigningKey** | **string** | Regenerate the key used for signing and checking the payload sent to the target. Set the graceful period for the existing key. During that time, the previous signing key and the new one will be used to sign the request to allow you a smooth transition onf your API.  Note that we currently only allow an immediate rotation (\&quot;0s\&quot;) and will support longer expirations in the future. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
