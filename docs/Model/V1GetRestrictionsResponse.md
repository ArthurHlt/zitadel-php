# # V1GetRestrictionsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\ArthurHlt\Zitadel\Model\V1ObjectDetails**](V1ObjectDetails.md) |  | [optional]
**disallowPublicOrgRegistration** | **bool** | defines if ZITADEL should expose the endpoint /ui/login/register/org. If it is true, the org registration endpoint returns the HTTP status 404 on GET requests, and 409 on POST requests. | [optional]
**allowedLanguages** | **string[]** | defines the allowed languages. If allowed_languages has one or more entries, only these languages are allowed. If it has no entries, all supported languages are allowed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
