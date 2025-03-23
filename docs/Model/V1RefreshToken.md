# # V1RefreshToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**details** | [**\ArthurHlt\Zitadel\Model\V1ObjectDetails**](V1ObjectDetails.md) |  | [optional]
**clientId** | **string** | oauth2/oidc client_id of the authorized application | [optional]
**authTime** | **\DateTime** | \&quot;time when the user authenticated, does not have to be the same time the token was created\&quot; | [optional]
**idleExpiration** | **\DateTime** | \&quot;time the refresh token will expire if not used, the user will have to reauthenticate\&quot; | [optional]
**expiration** | **\DateTime** | \&quot;time the refresh token will expire, the user will have to reauthenticate\&quot; | [optional]
**scopes** | **string[]** | scopes of the initial auth request, access tokens created by this refresh token can have a subset of these scopes | [optional]
**audience** | **string[]** | audience of the initial auth request and of all access tokens created by this refresh token | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
