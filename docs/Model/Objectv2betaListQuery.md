# # Objectv2betaListQuery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **string** |  | [optional]
**limit** | **int** | Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken. | [optional]
**asc** | **bool** | default is descending | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
