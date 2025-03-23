<?php
/**
 * Userv2betaUserState
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
 * Userv2betaUserState Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Userv2betaUserState
{
    /**
     * Possible values of this enum
     */
    public const USER_STATE_UNSPECIFIED = 'USER_STATE_UNSPECIFIED';

    public const USER_STATE_ACTIVE = 'USER_STATE_ACTIVE';

    public const USER_STATE_INACTIVE = 'USER_STATE_INACTIVE';

    public const USER_STATE_DELETED = 'USER_STATE_DELETED';

    public const USER_STATE_LOCKED = 'USER_STATE_LOCKED';

    public const USER_STATE_INITIAL = 'USER_STATE_INITIAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER_STATE_UNSPECIFIED,
            self::USER_STATE_ACTIVE,
            self::USER_STATE_INACTIVE,
            self::USER_STATE_DELETED,
            self::USER_STATE_LOCKED,
            self::USER_STATE_INITIAL
        ];
    }
}


