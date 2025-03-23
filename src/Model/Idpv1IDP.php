<?php
/**
 * Idpv1IDP
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
 * Idpv1IDP Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Idpv1IDP implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'idpv1IDP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'details' => '\ArthurHlt\Zitadel\Model\V1ObjectDetails',
        'state' => '\ArthurHlt\Zitadel\Model\Idpv1IDPState',
        'name' => 'string',
        'stylingType' => '\ArthurHlt\Zitadel\Model\V1IDPStylingType',
        'owner' => '\ArthurHlt\Zitadel\Model\V1IDPOwnerType',
        'oidcConfig' => '\ArthurHlt\Zitadel\Model\Zitadelidpv1OIDCConfig',
        'jwtConfig' => '\ArthurHlt\Zitadel\Model\Idpv1JWTConfig',
        'autoRegister' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'details' => null,
        'state' => null,
        'name' => null,
        'stylingType' => null,
        'owner' => null,
        'oidcConfig' => null,
        'jwtConfig' => null,
        'autoRegister' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'details' => false,
        'state' => false,
        'name' => false,
        'stylingType' => false,
        'owner' => false,
        'oidcConfig' => false,
        'jwtConfig' => false,
        'autoRegister' => false
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
        'id' => 'id',
        'details' => 'details',
        'state' => 'state',
        'name' => 'name',
        'stylingType' => 'stylingType',
        'owner' => 'owner',
        'oidcConfig' => 'oidcConfig',
        'jwtConfig' => 'jwtConfig',
        'autoRegister' => 'autoRegister'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'details' => 'setDetails',
        'state' => 'setState',
        'name' => 'setName',
        'stylingType' => 'setStylingType',
        'owner' => 'setOwner',
        'oidcConfig' => 'setOidcConfig',
        'jwtConfig' => 'setJwtConfig',
        'autoRegister' => 'setAutoRegister'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'details' => 'getDetails',
        'state' => 'getState',
        'name' => 'getName',
        'stylingType' => 'getStylingType',
        'owner' => 'getOwner',
        'oidcConfig' => 'getOidcConfig',
        'jwtConfig' => 'getJwtConfig',
        'autoRegister' => 'getAutoRegister'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('stylingType', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('oidcConfig', $data ?? [], null);
        $this->setIfExists('jwtConfig', $data ?? [], null);
        $this->setIfExists('autoRegister', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \ArthurHlt\Zitadel\Model\V1ObjectDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \ArthurHlt\Zitadel\Model\V1ObjectDetails|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \ArthurHlt\Zitadel\Model\Idpv1IDPState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \ArthurHlt\Zitadel\Model\Idpv1IDPState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets stylingType
     *
     * @return \ArthurHlt\Zitadel\Model\V1IDPStylingType|null
     */
    public function getStylingType()
    {
        return $this->container['stylingType'];
    }

    /**
     * Sets stylingType
     *
     * @param \ArthurHlt\Zitadel\Model\V1IDPStylingType|null $stylingType stylingType
     *
     * @return self
     */
    public function setStylingType($stylingType)
    {
        if (is_null($stylingType)) {
            throw new \InvalidArgumentException('non-nullable stylingType cannot be null');
        }
        $this->container['stylingType'] = $stylingType;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \ArthurHlt\Zitadel\Model\V1IDPOwnerType|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \ArthurHlt\Zitadel\Model\V1IDPOwnerType|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets oidcConfig
     *
     * @return \ArthurHlt\Zitadel\Model\Zitadelidpv1OIDCConfig|null
     */
    public function getOidcConfig()
    {
        return $this->container['oidcConfig'];
    }

    /**
     * Sets oidcConfig
     *
     * @param \ArthurHlt\Zitadel\Model\Zitadelidpv1OIDCConfig|null $oidcConfig oidcConfig
     *
     * @return self
     */
    public function setOidcConfig($oidcConfig)
    {
        if (is_null($oidcConfig)) {
            throw new \InvalidArgumentException('non-nullable oidcConfig cannot be null');
        }
        $this->container['oidcConfig'] = $oidcConfig;

        return $this;
    }

    /**
     * Gets jwtConfig
     *
     * @return \ArthurHlt\Zitadel\Model\Idpv1JWTConfig|null
     */
    public function getJwtConfig()
    {
        return $this->container['jwtConfig'];
    }

    /**
     * Sets jwtConfig
     *
     * @param \ArthurHlt\Zitadel\Model\Idpv1JWTConfig|null $jwtConfig jwtConfig
     *
     * @return self
     */
    public function setJwtConfig($jwtConfig)
    {
        if (is_null($jwtConfig)) {
            throw new \InvalidArgumentException('non-nullable jwtConfig cannot be null');
        }
        $this->container['jwtConfig'] = $jwtConfig;

        return $this;
    }

    /**
     * Gets autoRegister
     *
     * @return bool|null
     */
    public function getAutoRegister()
    {
        return $this->container['autoRegister'];
    }

    /**
     * Sets autoRegister
     *
     * @param bool|null $autoRegister autoRegister
     *
     * @return self
     */
    public function setAutoRegister($autoRegister)
    {
        if (is_null($autoRegister)) {
            throw new \InvalidArgumentException('non-nullable autoRegister cannot be null');
        }
        $this->container['autoRegister'] = $autoRegister;

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


