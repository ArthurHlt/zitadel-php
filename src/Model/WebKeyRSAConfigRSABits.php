<?php
/**
 * WebKeyRSAConfigRSABits
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
 * WebKeyRSAConfigRSABits Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebKeyRSAConfigRSABits
{
    /**
     * Possible values of this enum
     */
    public const RSA_BITS_UNSPECIFIED = 'RSA_BITS_UNSPECIFIED';

    public const RSA_BITS_2048 = 'RSA_BITS_2048';

    public const RSA_BITS_3072 = 'RSA_BITS_3072';

    public const RSA_BITS_4096 = 'RSA_BITS_4096';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RSA_BITS_UNSPECIFIED,
            self::RSA_BITS_2048,
            self::RSA_BITS_3072,
            self::RSA_BITS_4096
        ];
    }
}


