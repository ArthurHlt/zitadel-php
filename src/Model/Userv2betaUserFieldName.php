<?php
/**
 * Userv2betaUserFieldName
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Management API
 *
 * The management API is as the name states the interface where systems can mutate IAM objects like organizations, projects, clients, users and so on if they have the necessary access rights.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hi@zitadel.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ArthurHlt\Zitadel\Model;
use \ArthurHlt\Zitadel\ObjectSerializer;

/**
 * Userv2betaUserFieldName Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Userv2betaUserFieldName
{
    /**
     * Possible values of this enum
     */
    public const USER_FIELD_NAME_UNSPECIFIED = 'USER_FIELD_NAME_UNSPECIFIED';

    public const USER_FIELD_NAME_USER_NAME = 'USER_FIELD_NAME_USER_NAME';

    public const USER_FIELD_NAME_FIRST_NAME = 'USER_FIELD_NAME_FIRST_NAME';

    public const USER_FIELD_NAME_LAST_NAME = 'USER_FIELD_NAME_LAST_NAME';

    public const USER_FIELD_NAME_NICK_NAME = 'USER_FIELD_NAME_NICK_NAME';

    public const USER_FIELD_NAME_DISPLAY_NAME = 'USER_FIELD_NAME_DISPLAY_NAME';

    public const USER_FIELD_NAME_EMAIL = 'USER_FIELD_NAME_EMAIL';

    public const USER_FIELD_NAME_STATE = 'USER_FIELD_NAME_STATE';

    public const USER_FIELD_NAME_TYPE = 'USER_FIELD_NAME_TYPE';

    public const USER_FIELD_NAME_CREATION_DATE = 'USER_FIELD_NAME_CREATION_DATE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER_FIELD_NAME_UNSPECIFIED,
            self::USER_FIELD_NAME_USER_NAME,
            self::USER_FIELD_NAME_FIRST_NAME,
            self::USER_FIELD_NAME_LAST_NAME,
            self::USER_FIELD_NAME_NICK_NAME,
            self::USER_FIELD_NAME_DISPLAY_NAME,
            self::USER_FIELD_NAME_EMAIL,
            self::USER_FIELD_NAME_STATE,
            self::USER_FIELD_NAME_TYPE,
            self::USER_FIELD_NAME_CREATION_DATE
        ];
    }
}


