# # V3alphaTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**restWebhook** | [**\ArthurHlt\Zitadel\Model\V3alphaSetRESTWebhook**](V3alphaSetRESTWebhook.md) |  | [optional]
**restCall** | [**\ArthurHlt\Zitadel\Model\V3alphaSetRESTCall**](V3alphaSetRESTCall.md) |  | [optional]
**restAsync** | **object** | Call is executed in parallel to others, ZITADEL does not wait until the call is finished. The state is ignored, call is sent as post. | [optional]
**timeout** | **string** | if the target doesn&#39;t respond before this timeout expires, the the connection is closed and the action fails | [optional]
**endpoint** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
