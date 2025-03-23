<?php
/**
 * Idpv1OAuthConfig
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
 * Idpv1OAuthConfig Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Idpv1OAuthConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'idpv1OAuthConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clientId' => 'string',
        'authorizationEndpoint' => 'string',
        'tokenEndpoint' => 'string',
        'userEndpoint' => 'string',
        'scopes' => 'string[]',
        'idAttribute' => 'string',
        'usePkce' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'clientId' => null,
        'authorizationEndpoint' => null,
        'tokenEndpoint' => null,
        'userEndpoint' => null,
        'scopes' => null,
        'idAttribute' => null,
        'usePkce' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'clientId' => false,
        'authorizationEndpoint' => false,
        'tokenEndpoint' => false,
        'userEndpoint' => false,
        'scopes' => false,
        'idAttribute' => false,
        'usePkce' => false
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
        'clientId' => 'clientId',
        'authorizationEndpoint' => 'authorizationEndpoint',
        'tokenEndpoint' => 'tokenEndpoint',
        'userEndpoint' => 'userEndpoint',
        'scopes' => 'scopes',
        'idAttribute' => 'idAttribute',
        'usePkce' => 'usePkce'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clientId' => 'setClientId',
        'authorizationEndpoint' => 'setAuthorizationEndpoint',
        'tokenEndpoint' => 'setTokenEndpoint',
        'userEndpoint' => 'setUserEndpoint',
        'scopes' => 'setScopes',
        'idAttribute' => 'setIdAttribute',
        'usePkce' => 'setUsePkce'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clientId' => 'getClientId',
        'authorizationEndpoint' => 'getAuthorizationEndpoint',
        'tokenEndpoint' => 'getTokenEndpoint',
        'userEndpoint' => 'getUserEndpoint',
        'scopes' => 'getScopes',
        'idAttribute' => 'getIdAttribute',
        'usePkce' => 'getUsePkce'
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
        $this->setIfExists('clientId', $data ?? [], null);
        $this->setIfExists('authorizationEndpoint', $data ?? [], null);
        $this->setIfExists('tokenEndpoint', $data ?? [], null);
        $this->setIfExists('userEndpoint', $data ?? [], null);
        $this->setIfExists('scopes', $data ?? [], null);
        $this->setIfExists('idAttribute', $data ?? [], null);
        $this->setIfExists('usePkce', $data ?? [], null);
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
     * Gets clientId
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string|null $clientId client id generated by the identity provider
     *
     * @return self
     */
    public function setClientId($clientId)
    {
        if (is_null($clientId)) {
            throw new \InvalidArgumentException('non-nullable clientId cannot be null');
        }
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets authorizationEndpoint
     *
     * @return string|null
     */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorizationEndpoint'];
    }

    /**
     * Sets authorizationEndpoint
     *
     * @param string|null $authorizationEndpoint the endpoint where ZITADEL send the user to authenticate
     *
     * @return self
     */
    public function setAuthorizationEndpoint($authorizationEndpoint)
    {
        if (is_null($authorizationEndpoint)) {
            throw new \InvalidArgumentException('non-nullable authorizationEndpoint cannot be null');
        }
        $this->container['authorizationEndpoint'] = $authorizationEndpoint;

        return $this;
    }

    /**
     * Gets tokenEndpoint
     *
     * @return string|null
     */
    public function getTokenEndpoint()
    {
        return $this->container['tokenEndpoint'];
    }

    /**
     * Sets tokenEndpoint
     *
     * @param string|null $tokenEndpoint the endpoint where ZITADEL can get the token
     *
     * @return self
     */
    public function setTokenEndpoint($tokenEndpoint)
    {
        if (is_null($tokenEndpoint)) {
            throw new \InvalidArgumentException('non-nullable tokenEndpoint cannot be null');
        }
        $this->container['tokenEndpoint'] = $tokenEndpoint;

        return $this;
    }

    /**
     * Gets userEndpoint
     *
     * @return string|null
     */
    public function getUserEndpoint()
    {
        return $this->container['userEndpoint'];
    }

    /**
     * Sets userEndpoint
     *
     * @param string|null $userEndpoint the endpoint where ZITADEL can get the user information
     *
     * @return self
     */
    public function setUserEndpoint($userEndpoint)
    {
        if (is_null($userEndpoint)) {
            throw new \InvalidArgumentException('non-nullable userEndpoint cannot be null');
        }
        $this->container['userEndpoint'] = $userEndpoint;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]|null
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[]|null $scopes the scopes requested by ZITADEL during the request on the identity provider
     *
     * @return self
     */
    public function setScopes($scopes)
    {
        if (is_null($scopes)) {
            throw new \InvalidArgumentException('non-nullable scopes cannot be null');
        }
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets idAttribute
     *
     * @return string|null
     */
    public function getIdAttribute()
    {
        return $this->container['idAttribute'];
    }

    /**
     * Sets idAttribute
     *
     * @param string|null $idAttribute defines how the attribute is called where ZITADEL can get the id of the user
     *
     * @return self
     */
    public function setIdAttribute($idAttribute)
    {
        if (is_null($idAttribute)) {
            throw new \InvalidArgumentException('non-nullable idAttribute cannot be null');
        }
        $this->container['idAttribute'] = $idAttribute;

        return $this;
    }

    /**
     * Gets usePkce
     *
     * @return bool|null
     */
    public function getUsePkce()
    {
        return $this->container['usePkce'];
    }

    /**
     * Sets usePkce
     *
     * @param bool|null $usePkce Defines if the Proof Key for Code Exchange (PKCE) is used for the authorization code flow.
     *
     * @return self
     */
    public function setUsePkce($usePkce)
    {
        if (is_null($usePkce)) {
            throw new \InvalidArgumentException('non-nullable usePkce cannot be null');
        }
        $this->container['usePkce'] = $usePkce;

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


