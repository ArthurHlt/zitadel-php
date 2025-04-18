<?php
/**
 * Userv2betaNotificationType
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
 * Userv2betaNotificationType Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Userv2betaNotificationType
{
    /**
     * Possible values of this enum
     */
    public const NOTIFICATION_TYPE_UNSPECIFIED = 'NOTIFICATION_TYPE_Unspecified';

    public const NOTIFICATION_TYPE_EMAIL = 'NOTIFICATION_TYPE_Email';

    public const NOTIFICATION_TYPE_SMS = 'NOTIFICATION_TYPE_SMS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOTIFICATION_TYPE_UNSPECIFIED,
            self::NOTIFICATION_TYPE_EMAIL,
            self::NOTIFICATION_TYPE_SMS
        ];
    }
}


