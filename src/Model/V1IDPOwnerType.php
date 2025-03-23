<?php
/**
 * V1IDPOwnerType
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
 * V1IDPOwnerType Class Doc Comment
 *
 * @category Class
 * @description the owner of the identity provider.   - IDP_OWNER_TYPE_SYSTEM: system is managed by the ZITADEL administrators  - IDP_OWNER_TYPE_ORG: org is managed by de organization administrators
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class V1IDPOwnerType
{
    /**
     * Possible values of this enum
     */
    public const IDP_OWNER_TYPE_UNSPECIFIED = 'IDP_OWNER_TYPE_UNSPECIFIED';

    public const IDP_OWNER_TYPE_SYSTEM = 'IDP_OWNER_TYPE_SYSTEM';

    public const IDP_OWNER_TYPE_ORG = 'IDP_OWNER_TYPE_ORG';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IDP_OWNER_TYPE_UNSPECIFIED,
            self::IDP_OWNER_TYPE_SYSTEM,
            self::IDP_OWNER_TYPE_ORG
        ];
    }
}


