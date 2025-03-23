# # SystemServiceSetLimitsBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auditLogRetention** | **string** | auditLogRetention limits the number of events that can be queried via the events API by their age. A value of &#39;0s&#39; means that all events are available. If this value is set, it overwrites the system default. | [optional]
**block** | **bool** | if block is true, requests are responded with a resource exhausted error code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
