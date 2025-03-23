# # V3alphaUsername

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usernameId** | **string** | unique identifier of the username. | [optional]
**username** | **string** | The user&#39;s unique username. It is used for identification during authentication. | [optional]
**isOrganizationSpecific** | **bool** | By default usernames must be unique across all organizations in an instance. This option allow to restrict the uniqueness to the user&#39;s own organization. As a result, this username can only be used if the authentication is limited to the corresponding organization.  This can be useful if you provide multiple usernames for a single user, where one if specific to your organization, e.g.: - gigi-giraffe@zitadel.com (unique across organizations) - gigi-giraffe (unique only inside the ZITADEL organization) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
