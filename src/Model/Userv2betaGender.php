<?php
/**
 * Userv2betaGender
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
 * Userv2betaGender Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Userv2betaGender
{
    /**
     * Possible values of this enum
     */
    public const GENDER_UNSPECIFIED = 'GENDER_UNSPECIFIED';

    public const GENDER_FEMALE = 'GENDER_FEMALE';

    public const GENDER_MALE = 'GENDER_MALE';

    public const GENDER_DIVERSE = 'GENDER_DIVERSE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GENDER_UNSPECIFIED,
            self::GENDER_FEMALE,
            self::GENDER_MALE,
            self::GENDER_DIVERSE
        ];
    }
}


