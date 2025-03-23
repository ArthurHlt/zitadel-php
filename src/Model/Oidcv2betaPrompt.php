<?php
/**
 * Oidcv2betaPrompt
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
 * Oidcv2betaPrompt Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Oidcv2betaPrompt
{
    /**
     * Possible values of this enum
     */
    public const PROMPT_UNSPECIFIED = 'PROMPT_UNSPECIFIED';

    public const PROMPT_NONE = 'PROMPT_NONE';

    public const PROMPT_LOGIN = 'PROMPT_LOGIN';

    public const PROMPT_CONSENT = 'PROMPT_CONSENT';

    public const PROMPT_SELECT_ACCOUNT = 'PROMPT_SELECT_ACCOUNT';

    public const PROMPT_CREATE = 'PROMPT_CREATE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROMPT_UNSPECIFIED,
            self::PROMPT_NONE,
            self::PROMPT_LOGIN,
            self::PROMPT_CONSENT,
            self::PROMPT_SELECT_ACCOUNT,
            self::PROMPT_CREATE
        ];
    }
}


