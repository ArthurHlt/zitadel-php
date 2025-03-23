# # V1DomainPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\ArthurHlt\Zitadel\Model\V1ObjectDetails**](V1ObjectDetails.md) |  | [optional]
**userLoginMustBeDomain** | **bool** | the username has to end with the domain of its organization | [optional]
**isDefault** | **bool** | defines if the organization&#39;s admin changed the policy | [optional]
**validateOrgDomains** | **bool** | defines if organization domains should be validated org count as validated automatically | [optional]
**smtpSenderAddressMatchesInstanceDomain** | **bool** | defines if the SMTP sender address domain should match an existing domain on the instance | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
