# # V1Notification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**percent** | **int** | The percentage relative to the quotas amount on which the call_url should be called. | [optional]
**repeat** | **bool** | If true, the call_url is called each time a factor of percentage is reached. | [optional]
**callUrl** | **string** | The URL, which is called with HTTP method POST and a JSON payload with the properties \&quot;unit\&quot;, \&quot;id\&quot; (notification id), \&quot;callURL\&quot;, \&quot;periodStart\&quot;, \&quot;threshold\&quot; and \&quot;usage\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
