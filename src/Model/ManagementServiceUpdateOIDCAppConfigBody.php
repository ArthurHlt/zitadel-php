<?php
/**
 * ManagementServiceUpdateOIDCAppConfigBody
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

use \ArrayAccess;
use \ArthurHlt\Zitadel\ObjectSerializer;

/**
 * ManagementServiceUpdateOIDCAppConfigBody Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagementServiceUpdateOIDCAppConfigBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagementServiceUpdateOIDCAppConfigBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redirectUris' => 'string[]',
        'responseTypes' => '\ArthurHlt\Zitadel\Model\V1OIDCResponseType[]',
        'grantTypes' => '\ArthurHlt\Zitadel\Model\V1OIDCGrantType[]',
        'appType' => '\ArthurHlt\Zitadel\Model\V1OIDCAppType',
        'authMethodType' => '\ArthurHlt\Zitadel\Model\V1OIDCAuthMethodType',
        'postLogoutRedirectUris' => 'string[]',
        'devMode' => 'bool',
        'accessTokenType' => '\ArthurHlt\Zitadel\Model\V1OIDCTokenType',
        'accessTokenRoleAssertion' => 'bool',
        'idTokenRoleAssertion' => 'bool',
        'idTokenUserinfoAssertion' => 'bool',
        'clockSkew' => 'string',
        'additionalOrigins' => 'string[]',
        'skipNativeAppSuccessPage' => 'bool',
        'backChannelLogoutUri' => 'string',
        'loginVersion' => '\ArthurHlt\Zitadel\Model\V1LoginVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redirectUris' => null,
        'responseTypes' => null,
        'grantTypes' => null,
        'appType' => null,
        'authMethodType' => null,
        'postLogoutRedirectUris' => null,
        'devMode' => null,
        'accessTokenType' => null,
        'accessTokenRoleAssertion' => null,
        'idTokenRoleAssertion' => null,
        'idTokenUserinfoAssertion' => null,
        'clockSkew' => null,
        'additionalOrigins' => null,
        'skipNativeAppSuccessPage' => null,
        'backChannelLogoutUri' => null,
        'loginVersion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redirectUris' => false,
        'responseTypes' => false,
        'grantTypes' => false,
        'appType' => false,
        'authMethodType' => false,
        'postLogoutRedirectUris' => false,
        'devMode' => false,
        'accessTokenType' => false,
        'accessTokenRoleAssertion' => false,
        'idTokenRoleAssertion' => false,
        'idTokenUserinfoAssertion' => false,
        'clockSkew' => false,
        'additionalOrigins' => false,
        'skipNativeAppSuccessPage' => false,
        'backChannelLogoutUri' => false,
        'loginVersion' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'redirectUris' => 'redirectUris',
        'responseTypes' => 'responseTypes',
        'grantTypes' => 'grantTypes',
        'appType' => 'appType',
        'authMethodType' => 'authMethodType',
        'postLogoutRedirectUris' => 'postLogoutRedirectUris',
        'devMode' => 'devMode',
        'accessTokenType' => 'accessTokenType',
        'accessTokenRoleAssertion' => 'accessTokenRoleAssertion',
        'idTokenRoleAssertion' => 'idTokenRoleAssertion',
        'idTokenUserinfoAssertion' => 'idTokenUserinfoAssertion',
        'clockSkew' => 'clockSkew',
        'additionalOrigins' => 'additionalOrigins',
        'skipNativeAppSuccessPage' => 'skipNativeAppSuccessPage',
        'backChannelLogoutUri' => 'backChannelLogoutUri',
        'loginVersion' => 'loginVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redirectUris' => 'setRedirectUris',
        'responseTypes' => 'setResponseTypes',
        'grantTypes' => 'setGrantTypes',
        'appType' => 'setAppType',
        'authMethodType' => 'setAuthMethodType',
        'postLogoutRedirectUris' => 'setPostLogoutRedirectUris',
        'devMode' => 'setDevMode',
        'accessTokenType' => 'setAccessTokenType',
        'accessTokenRoleAssertion' => 'setAccessTokenRoleAssertion',
        'idTokenRoleAssertion' => 'setIdTokenRoleAssertion',
        'idTokenUserinfoAssertion' => 'setIdTokenUserinfoAssertion',
        'clockSkew' => 'setClockSkew',
        'additionalOrigins' => 'setAdditionalOrigins',
        'skipNativeAppSuccessPage' => 'setSkipNativeAppSuccessPage',
        'backChannelLogoutUri' => 'setBackChannelLogoutUri',
        'loginVersion' => 'setLoginVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redirectUris' => 'getRedirectUris',
        'responseTypes' => 'getResponseTypes',
        'grantTypes' => 'getGrantTypes',
        'appType' => 'getAppType',
        'authMethodType' => 'getAuthMethodType',
        'postLogoutRedirectUris' => 'getPostLogoutRedirectUris',
        'devMode' => 'getDevMode',
        'accessTokenType' => 'getAccessTokenType',
        'accessTokenRoleAssertion' => 'getAccessTokenRoleAssertion',
        'idTokenRoleAssertion' => 'getIdTokenRoleAssertion',
        'idTokenUserinfoAssertion' => 'getIdTokenUserinfoAssertion',
        'clockSkew' => 'getClockSkew',
        'additionalOrigins' => 'getAdditionalOrigins',
        'skipNativeAppSuccessPage' => 'getSkipNativeAppSuccessPage',
        'backChannelLogoutUri' => 'getBackChannelLogoutUri',
        'loginVersion' => 'getLoginVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('redirectUris', $data ?? [], null);
        $this->setIfExists('responseTypes', $data ?? [], null);
        $this->setIfExists('grantTypes', $data ?? [], null);
        $this->setIfExists('appType', $data ?? [], null);
        $this->setIfExists('authMethodType', $data ?? [], null);
        $this->setIfExists('postLogoutRedirectUris', $data ?? [], null);
        $this->setIfExists('devMode', $data ?? [], null);
        $this->setIfExists('accessTokenType', $data ?? [], null);
        $this->setIfExists('accessTokenRoleAssertion', $data ?? [], null);
        $this->setIfExists('idTokenRoleAssertion', $data ?? [], null);
        $this->setIfExists('idTokenUserinfoAssertion', $data ?? [], null);
        $this->setIfExists('clockSkew', $data ?? [], null);
        $this->setIfExists('additionalOrigins', $data ?? [], null);
        $this->setIfExists('skipNativeAppSuccessPage', $data ?? [], null);
        $this->setIfExists('backChannelLogoutUri', $data ?? [], null);
        $this->setIfExists('loginVersion', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets redirectUris
     *
     * @return string[]|null
     */
    public function getRedirectUris()
    {
        return $this->container['redirectUris'];
    }

    /**
     * Sets redirectUris
     *
     * @param string[]|null $redirectUris Callback URI of the authorization request where the code or tokens will be sent to
     *
     * @return self
     */
    public function setRedirectUris($redirectUris)
    {
        if (is_null($redirectUris)) {
            throw new \InvalidArgumentException('non-nullable redirectUris cannot be null');
        }
        $this->container['redirectUris'] = $redirectUris;

        return $this;
    }

    /**
     * Gets responseTypes
     *
     * @return \ArthurHlt\Zitadel\Model\V1OIDCResponseType[]|null
     */
    public function getResponseTypes()
    {
        return $this->container['responseTypes'];
    }

    /**
     * Sets responseTypes
     *
     * @param \ArthurHlt\Zitadel\Model\V1OIDCResponseType[]|null $responseTypes Determines whether a code, id_token token or just id_token will be returned
     *
     * @return self
     */
    public function setResponseTypes($responseTypes)
    {
        if (is_null($responseTypes)) {
            throw new \InvalidArgumentException('non-nullable responseTypes cannot be null');
        }
        $this->container['responseTypes'] = $responseTypes;

        return $this;
    }

    /**
     * Gets grantTypes
     *
     * @return \ArthurHlt\Zitadel\Model\V1OIDCGrantType[]|null
     */
    public function getGrantTypes()
    {
        return $this->container['grantTypes'];
    }

    /**
     * Sets grantTypes
     *
     * @param \ArthurHlt\Zitadel\Model\V1OIDCGrantType[]|null $grantTypes The flow type the application uses to gain access
     *
     * @return self
     */
    public function setGrantTypes($grantTypes)
    {
        if (is_null($grantTypes)) {
            throw new \InvalidArgumentException('non-nullable grantTypes cannot be null');
        }
        $this->container['grantTypes'] = $grantTypes;

        return $this;
    }

    /**
     * Gets appType
     *
     * @return \ArthurHlt\Zitadel\Model\V1OIDCAppType|null
     */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
     * Sets appType
     *
     * @param \ArthurHlt\Zitadel\Model\V1OIDCAppType|null $appType appType
     *
     * @return self
     */
    public function setAppType($appType)
    {
        if (is_null($appType)) {
            throw new \InvalidArgumentException('non-nullable appType cannot be null');
        }
        $this->container['appType'] = $appType;

        return $this;
    }

    /**
     * Gets authMethodType
     *
     * @return \ArthurHlt\Zitadel\Model\V1OIDCAuthMethodType|null
     */
    public function getAuthMethodType()
    {
        return $this->container['authMethodType'];
    }

    /**
     * Sets authMethodType
     *
     * @param \ArthurHlt\Zitadel\Model\V1OIDCAuthMethodType|null $authMethodType authMethodType
     *
     * @return self
     */
    public function setAuthMethodType($authMethodType)
    {
        if (is_null($authMethodType)) {
            throw new \InvalidArgumentException('non-nullable authMethodType cannot be null');
        }
        $this->container['authMethodType'] = $authMethodType;

        return $this;
    }

    /**
     * Gets postLogoutRedirectUris
     *
     * @return string[]|null
     */
    public function getPostLogoutRedirectUris()
    {
        return $this->container['postLogoutRedirectUris'];
    }

    /**
     * Sets postLogoutRedirectUris
     *
     * @param string[]|null $postLogoutRedirectUris ZITADEL will redirect to this link after a successful logout
     *
     * @return self
     */
    public function setPostLogoutRedirectUris($postLogoutRedirectUris)
    {
        if (is_null($postLogoutRedirectUris)) {
            throw new \InvalidArgumentException('non-nullable postLogoutRedirectUris cannot be null');
        }
        $this->container['postLogoutRedirectUris'] = $postLogoutRedirectUris;

        return $this;
    }

    /**
     * Gets devMode
     *
     * @return bool|null
     */
    public function getDevMode()
    {
        return $this->container['devMode'];
    }

    /**
     * Sets devMode
     *
     * @param bool|null $devMode Used for development, some checks of the OIDC specification will not be checked.
     *
     * @return self
     */
    public function setDevMode($devMode)
    {
        if (is_null($devMode)) {
            throw new \InvalidArgumentException('non-nullable devMode cannot be null');
        }
        $this->container['devMode'] = $devMode;

        return $this;
    }

    /**
     * Gets accessTokenType
     *
     * @return \ArthurHlt\Zitadel\Model\V1OIDCTokenType|null
     */
    public function getAccessTokenType()
    {
        return $this->container['accessTokenType'];
    }

    /**
     * Sets accessTokenType
     *
     * @param \ArthurHlt\Zitadel\Model\V1OIDCTokenType|null $accessTokenType accessTokenType
     *
     * @return self
     */
    public function setAccessTokenType($accessTokenType)
    {
        if (is_null($accessTokenType)) {
            throw new \InvalidArgumentException('non-nullable accessTokenType cannot be null');
        }
        $this->container['accessTokenType'] = $accessTokenType;

        return $this;
    }

    /**
     * Gets accessTokenRoleAssertion
     *
     * @return bool|null
     */
    public function getAccessTokenRoleAssertion()
    {
        return $this->container['accessTokenRoleAssertion'];
    }

    /**
     * Sets accessTokenRoleAssertion
     *
     * @param bool|null $accessTokenRoleAssertion Adds roles to the claims of the access token (only if type == JWT) even if they are not requested by scopes
     *
     * @return self
     */
    public function setAccessTokenRoleAssertion($accessTokenRoleAssertion)
    {
        if (is_null($accessTokenRoleAssertion)) {
            throw new \InvalidArgumentException('non-nullable accessTokenRoleAssertion cannot be null');
        }
        $this->container['accessTokenRoleAssertion'] = $accessTokenRoleAssertion;

        return $this;
    }

    /**
     * Gets idTokenRoleAssertion
     *
     * @return bool|null
     */
    public function getIdTokenRoleAssertion()
    {
        return $this->container['idTokenRoleAssertion'];
    }

    /**
     * Sets idTokenRoleAssertion
     *
     * @param bool|null $idTokenRoleAssertion Adds roles to the claims of the id token even if they are not requested by scopes
     *
     * @return self
     */
    public function setIdTokenRoleAssertion($idTokenRoleAssertion)
    {
        if (is_null($idTokenRoleAssertion)) {
            throw new \InvalidArgumentException('non-nullable idTokenRoleAssertion cannot be null');
        }
        $this->container['idTokenRoleAssertion'] = $idTokenRoleAssertion;

        return $this;
    }

    /**
     * Gets idTokenUserinfoAssertion
     *
     * @return bool|null
     */
    public function getIdTokenUserinfoAssertion()
    {
        return $this->container['idTokenUserinfoAssertion'];
    }

    /**
     * Sets idTokenUserinfoAssertion
     *
     * @param bool|null $idTokenUserinfoAssertion Claims of profile, email, address and phone scopes are added to the id token even if an access token is issued. Attention this violates the OIDC specification
     *
     * @return self
     */
    public function setIdTokenUserinfoAssertion($idTokenUserinfoAssertion)
    {
        if (is_null($idTokenUserinfoAssertion)) {
            throw new \InvalidArgumentException('non-nullable idTokenUserinfoAssertion cannot be null');
        }
        $this->container['idTokenUserinfoAssertion'] = $idTokenUserinfoAssertion;

        return $this;
    }

    /**
     * Gets clockSkew
     *
     * @return string|null
     */
    public function getClockSkew()
    {
        return $this->container['clockSkew'];
    }

    /**
     * Sets clockSkew
     *
     * @param string|null $clockSkew Used to compensate time difference of servers. Duration added to the \"exp\" claim and subtracted from \"iat\", \"auth_time\" and \"nbf\" claims
     *
     * @return self
     */
    public function setClockSkew($clockSkew)
    {
        if (is_null($clockSkew)) {
            throw new \InvalidArgumentException('non-nullable clockSkew cannot be null');
        }
        $this->container['clockSkew'] = $clockSkew;

        return $this;
    }

    /**
     * Gets additionalOrigins
     *
     * @return string[]|null
     */
    public function getAdditionalOrigins()
    {
        return $this->container['additionalOrigins'];
    }

    /**
     * Sets additionalOrigins
     *
     * @param string[]|null $additionalOrigins Additional origins (other than the redirect_uris) from where the API can be used, provided string has to be an origin (scheme://hostname[:port]) without path, query or fragment
     *
     * @return self
     */
    public function setAdditionalOrigins($additionalOrigins)
    {
        if (is_null($additionalOrigins)) {
            throw new \InvalidArgumentException('non-nullable additionalOrigins cannot be null');
        }
        $this->container['additionalOrigins'] = $additionalOrigins;

        return $this;
    }

    /**
     * Gets skipNativeAppSuccessPage
     *
     * @return bool|null
     */
    public function getSkipNativeAppSuccessPage()
    {
        return $this->container['skipNativeAppSuccessPage'];
    }

    /**
     * Sets skipNativeAppSuccessPage
     *
     * @param bool|null $skipNativeAppSuccessPage Skip the successful login page on native apps and directly redirect the user to the callback.
     *
     * @return self
     */
    public function setSkipNativeAppSuccessPage($skipNativeAppSuccessPage)
    {
        if (is_null($skipNativeAppSuccessPage)) {
            throw new \InvalidArgumentException('non-nullable skipNativeAppSuccessPage cannot be null');
        }
        $this->container['skipNativeAppSuccessPage'] = $skipNativeAppSuccessPage;

        return $this;
    }

    /**
     * Gets backChannelLogoutUri
     *
     * @return string|null
     */
    public function getBackChannelLogoutUri()
    {
        return $this->container['backChannelLogoutUri'];
    }

    /**
     * Sets backChannelLogoutUri
     *
     * @param string|null $backChannelLogoutUri ZITADEL will use this URI to notify the application about terminated session according to the OIDC Back-Channel Logout (https://openid.net/specs/openid-connect-backchannel-1_0.html)
     *
     * @return self
     */
    public function setBackChannelLogoutUri($backChannelLogoutUri)
    {
        if (is_null($backChannelLogoutUri)) {
            throw new \InvalidArgumentException('non-nullable backChannelLogoutUri cannot be null');
        }
        $this->container['backChannelLogoutUri'] = $backChannelLogoutUri;

        return $this;
    }

    /**
     * Gets loginVersion
     *
     * @return \ArthurHlt\Zitadel\Model\V1LoginVersion|null
     */
    public function getLoginVersion()
    {
        return $this->container['loginVersion'];
    }

    /**
     * Sets loginVersion
     *
     * @param \ArthurHlt\Zitadel\Model\V1LoginVersion|null $loginVersion loginVersion
     *
     * @return self
     */
    public function setLoginVersion($loginVersion)
    {
        if (is_null($loginVersion)) {
            throw new \InvalidArgumentException('non-nullable loginVersion cannot be null');
        }
        $this->container['loginVersion'] = $loginVersion;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


