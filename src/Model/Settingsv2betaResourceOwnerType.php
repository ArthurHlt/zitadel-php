<?php
/**
 * Settingsv2betaResourceOwnerType
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
 * Settingsv2betaResourceOwnerType Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Settingsv2betaResourceOwnerType
{
    /**
     * Possible values of this enum
     */
    public const RESOURCE_OWNER_TYPE_UNSPECIFIED = 'RESOURCE_OWNER_TYPE_UNSPECIFIED';

    public const RESOURCE_OWNER_TYPE_INSTANCE = 'RESOURCE_OWNER_TYPE_INSTANCE';

    public const RESOURCE_OWNER_TYPE_ORG = 'RESOURCE_OWNER_TYPE_ORG';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RESOURCE_OWNER_TYPE_UNSPECIFIED,
            self::RESOURCE_OWNER_TYPE_INSTANCE,
            self::RESOURCE_OWNER_TYPE_ORG
        ];
    }
}


