# # V1AddJWTIDPRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**stylingType** | [**\ArthurHlt\Zitadel\Model\V1IDPStylingType**](V1IDPStylingType.md) |  | [optional]
**jwtEndpoint** | **string** | the endpoint where the jwt can be extracted |
**issuer** | **string** | the issuer of the jwt (for validation) |
**keysEndpoint** | **string** | the endpoint to the key (JWK) which is used to sign the JWT with |
**headerName** | **string** | the name of the header where the JWT is sent in, default is authorization |
**autoRegister** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
