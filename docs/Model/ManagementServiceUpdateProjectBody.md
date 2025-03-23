# # ManagementServiceUpdateProjectBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**projectRoleAssertion** | **bool** | Enable this setting to have role information included in the user info endpoint. It is also dependent on your application settings to include it in tokens and other types. | [optional]
**projectRoleCheck** | **bool** | When enabled ZITADEL will check if a user has a role of this project assigned when login into an application of this project. | [optional]
**hasProjectCheck** | **bool** | When enabled ZITADEL will check if the organization of the user, that is trying to log in, has a grant to this project. | [optional]
**privateLabelingSetting** | [**\ArthurHlt\Zitadel\Model\V1PrivateLabelingSetting**](V1PrivateLabelingSetting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
