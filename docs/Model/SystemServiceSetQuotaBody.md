# # SystemServiceSetQuotaBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | [**\ArthurHlt\Zitadel\Model\V1Unit**](V1Unit.md) |  | [optional]
**from** | **\DateTime** | the starting time from which the current quota period is calculated from. This is relevant for querying the current usage. | [optional]
**resetInterval** | **string** | the quota periods duration | [optional]
**amount** | **string** | the quota amount of units | [optional]
**limit** | **bool** | whether ZITADEL should block further usage when the configured amount is used | [optional]
**notifications** | [**\ArthurHlt\Zitadel\Model\V1Notification[]**](V1Notification.md) | the handlers, ZITADEL executes when certain quota percentages are reached | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
