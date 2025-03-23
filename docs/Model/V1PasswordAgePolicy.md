# # V1PasswordAgePolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\ArthurHlt\Zitadel\Model\V1ObjectDetails**](V1ObjectDetails.md) |  | [optional]
**maxAgeDays** | **string** | Amount of days after which a password will expire. The user will be forced to change the password on the following authentication. | [optional]
**expireWarnDays** | **string** | Amount of days after which the user should be notified of the upcoming expiry. ZITADEL will not notify the user. | [optional]
**isDefault** | **bool** | If true, the returned values represent the instance settings, e.g. by an organization without custom settings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
