# # V1ListEventsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence** | **string** | Sequence represents the order of events. It&#39;s always counting. If asc is false, the sequence is used as lesser than filter. If asc is true sequence is used as greater than filter. If the sequence is 0 the field is ignored. | [optional]
**limit** | **int** | Maximum amount of events returned. | [optional]
**asc** | **bool** | default is descending sorting order | [optional]
**editorUserId** | **string** |  | [optional]
**eventTypes** | **string[]** | The types are filtered by &#39;or&#39; and must match the type exactly. | [optional]
**aggregateId** | **string** |  | [optional]
**aggregateTypes** | **string[]** |  | [optional]
**resourceOwner** | **string** |  | [optional]
**creationDate** | **\DateTime** | Use from instead. | [optional]
**range** | [**\ArthurHlt\Zitadel\Model\ListEventsRequestcreationDateRange**](ListEventsRequestcreationDateRange.md) |  | [optional]
**from** | **\DateTime** | If asc is false, the events returned are older than the UTC from date. If asc is true, the events returned are younger than from. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
