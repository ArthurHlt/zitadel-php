# # Zitadelappv1OIDCConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redirectUris** | **string[]** | Callback URI of the authorization request where the code or tokens will be sent to | [optional]
**responseTypes** | [**\ArthurHlt\Zitadel\Model\V1OIDCResponseType[]**](V1OIDCResponseType.md) | Determines whether a code, id_token token or just id_token will be returned | [optional]
**grantTypes** | [**\ArthurHlt\Zitadel\Model\V1OIDCGrantType[]**](V1OIDCGrantType.md) | The flow type the application uses to gain access | [optional]
**appType** | [**\ArthurHlt\Zitadel\Model\V1OIDCAppType**](V1OIDCAppType.md) |  | [optional]
**clientId** | **string** | generated oauth2/oidc client id | [optional]
**authMethodType** | [**\ArthurHlt\Zitadel\Model\V1OIDCAuthMethodType**](V1OIDCAuthMethodType.md) |  | [optional]
**postLogoutRedirectUris** | **string[]** | ZITADEL will redirect to this link after a successful logout | [optional]
**version** | [**\ArthurHlt\Zitadel\Model\V1OIDCVersion**](V1OIDCVersion.md) |  | [optional]
**noneCompliant** | **bool** | specifies whether the config is OIDC compliant. A production configuration SHOULD be compliant | [optional]
**complianceProblems** | [**\ArthurHlt\Zitadel\Model\V1LocalizedMessage[]**](V1LocalizedMessage.md) | lists the problems for non-compliancy | [optional]
**devMode** | **bool** | used for development | [optional]
**accessTokenType** | [**\ArthurHlt\Zitadel\Model\V1OIDCTokenType**](V1OIDCTokenType.md) |  | [optional]
**accessTokenRoleAssertion** | **bool** | adds roles to the claims of the access token (only if type &#x3D;&#x3D; JWT) even if they are not requested by scopes | [optional]
**idTokenRoleAssertion** | **bool** | adds roles to the claims of the id token even if they are not requested by scopes | [optional]
**idTokenUserinfoAssertion** | **bool** | claims of profile, email, address and phone scopes are added to the id token even if an access token is issued. Attention this violates the OIDC specification | [optional]
**clockSkew** | **string** | Used to compensate time difference of servers. Duration added to the \&quot;exp\&quot; claim and subtracted from \&quot;iat\&quot;, \&quot;auth_time\&quot; and \&quot;nbf\&quot; claims | [optional]
**additionalOrigins** | **string[]** | additional origins (other than the redirect_uris) from where the API can be used | [optional]
**allowedOrigins** | **string[]** | all allowed origins from where the API can be used | [optional]
**skipNativeAppSuccessPage** | **bool** | Skip the successful login page on native apps and directly redirect the user to the callback. | [optional]
**backChannelLogoutUri** | **string** | ZITADEL will use this URI to notify the application about terminated session according to the OIDC Back-Channel Logout (https://openid.net/specs/openid-connect-backchannel-1_0.html) | [optional]
**loginVersion** | [**\ArthurHlt\Zitadel\Model\V1LoginVersion**](V1LoginVersion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
