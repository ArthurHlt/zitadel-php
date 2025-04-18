<?php
/**
 * V3alphaWebKeyState
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
 * V3alphaWebKeyState Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class V3alphaWebKeyState
{
    /**
     * Possible values of this enum
     */
    public const STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';

    public const STATE_INITIAL = 'STATE_INITIAL';

    public const STATE_ACTIVE = 'STATE_ACTIVE';

    public const STATE_INACTIVE = 'STATE_INACTIVE';

    public const STATE_REMOVED = 'STATE_REMOVED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STATE_UNSPECIFIED,
            self::STATE_INITIAL,
            self::STATE_ACTIVE,
            self::STATE_INACTIVE,
            self::STATE_REMOVED
        ];
    }
}


