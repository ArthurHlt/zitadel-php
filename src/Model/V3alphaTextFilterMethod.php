<?php
/**
 * V3alphaTextFilterMethod
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
 * V3alphaTextFilterMethod Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class V3alphaTextFilterMethod
{
    /**
     * Possible values of this enum
     */
    public const TEXT_FILTER_METHOD_EQUALS = 'TEXT_FILTER_METHOD_EQUALS';

    public const TEXT_FILTER_METHOD_EQUALS_IGNORE_CASE = 'TEXT_FILTER_METHOD_EQUALS_IGNORE_CASE';

    public const TEXT_FILTER_METHOD_STARTS_WITH = 'TEXT_FILTER_METHOD_STARTS_WITH';

    public const TEXT_FILTER_METHOD_STARTS_WITH_IGNORE_CASE = 'TEXT_FILTER_METHOD_STARTS_WITH_IGNORE_CASE';

    public const TEXT_FILTER_METHOD_CONTAINS = 'TEXT_FILTER_METHOD_CONTAINS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT_FILTER_METHOD_EQUALS,
            self::TEXT_FILTER_METHOD_EQUALS_IGNORE_CASE,
            self::TEXT_FILTER_METHOD_STARTS_WITH,
            self::TEXT_FILTER_METHOD_STARTS_WITH_IGNORE_CASE,
            self::TEXT_FILTER_METHOD_CONTAINS
        ];
    }
}


