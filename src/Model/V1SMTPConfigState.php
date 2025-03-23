<?php
/**
 * V1SMTPConfigState
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
 * V1SMTPConfigState Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class V1SMTPConfigState
{
    /**
     * Possible values of this enum
     */
    public const SMTP_CONFIG_STATE_UNSPECIFIED = 'SMTP_CONFIG_STATE_UNSPECIFIED';

    public const SMTP_CONFIG_ACTIVE = 'SMTP_CONFIG_ACTIVE';

    public const SMTP_CONFIG_INACTIVE = 'SMTP_CONFIG_INACTIVE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SMTP_CONFIG_STATE_UNSPECIFIED,
            self::SMTP_CONFIG_ACTIVE,
            self::SMTP_CONFIG_INACTIVE
        ];
    }
}


