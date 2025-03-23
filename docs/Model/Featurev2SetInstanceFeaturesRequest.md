# # Featurev2SetInstanceFeaturesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**loginDefaultOrg** | **bool** | The login UI will use the settings of the default org (and not from the instance) if no organization context is set | [optional]
**oidcTriggerIntrospectionProjections** | **bool** | Enable projection triggers during an introspection request. This can act as workaround if there are noticeable consistency issues in the introspection response but can have an impact on performance. We are planning to remove triggers for introspection requests in the future. Please raise an issue if you needed to enable this feature. | [optional]
**oidcLegacyIntrospection** | **bool** | We have recently refactored the introspection endpoint for performance reasons. This feature can be used to rollback to the legacy implementation if unexpected bugs arise. Please raise an issue if you needed to enable this feature. | [optional]
**userSchema** | **bool** | User Schemas allow to manage data schemas of user. If the flag is enabled, you&#39;ll be able to use the new API and its features. Note that it is still in an early stage. | [optional]
**oidcTokenExchange** | **bool** | Enable the experimental &#x60;urn:ietf:params:oauth:grant-type:token-exchange&#x60; grant type for the OIDC token endpoint. Token exchange can be used to request tokens with a lesser scope or impersonate other users. See the security policy to allow impersonation on an instance. | [optional]
**actions** | **bool** | Actions allow to manage data executions and targets. If the flag is enabled, you&#39;ll be able to use the new API and its features. Note that it is still in an early stage. | [optional]
**improvedPerformance** | [**\ArthurHlt\Zitadel\Model\Featurev2ImprovedPerformance[]**](Featurev2ImprovedPerformance.md) | Improves performance of specified execution paths. | [optional]
**webKey** | **bool** | Enable the webkey/v3alpha API. The first time this feature is enabled, web keys are generated and activated. | [optional]
**debugOidcParentError** | **bool** | Return parent errors to OIDC clients for debugging purposes. Parent errors may contain sensitive data or unwanted details about the system status of zitadel. Only enable if really needed. | [optional]
**oidcSingleV1SessionTermination** | **bool** | If the flag is enabled, you&#39;ll be able to terminate a single session from the login UI by providing an id_token with a &#x60;sid&#x60; claim as id_token_hint on the end_session endpoint. Note that currently all sessions from the same user agent (browser) are terminated in the login UI. Sessions managed through the Session API already allow the termination of single sessions. | [optional]
**disableUserTokenEvent** | **bool** | Do not push user token meta-event user.token.v2.added to improve performance on many concurrent single (machine-)user logins | [optional]
**enableBackChannelLogout** | **bool** | If the flag is enabled, you&#39;ll be able to use the OIDC Back-Channel Logout to be notified in your application about terminated user sessions. | [optional]
**loginV2** | [**\ArthurHlt\Zitadel\Model\Featurev2LoginV2**](Featurev2LoginV2.md) |  | [optional]
**permissionCheckV2** | **bool** | Enable a newer, more performant, permission check used for v2 and v3 resource based APIs. | [optional]
**consoleUseV2UserApi** | **bool** | If this is enabled the console web client will use the new User v2 API for certain calls | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
