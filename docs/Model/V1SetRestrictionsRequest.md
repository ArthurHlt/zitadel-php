# # V1SetRestrictionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disallowPublicOrgRegistration** | **bool** | defines if ZITADEL should expose the endpoint /ui/login/register/org. If it is true, the org registration endpoint returns the HTTP status 404 on GET requests, and 409 on POST requests. | [optional]
**allowedLanguages** | [**\ArthurHlt\Zitadel\Model\V1SelectLanguages**](V1SelectLanguages.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
