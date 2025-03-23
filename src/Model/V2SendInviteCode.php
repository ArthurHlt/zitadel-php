<?php
/**
 * V2SendInviteCode
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
 * V2SendInviteCode Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V2SendInviteCode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v2SendInviteCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'urlTemplate' => 'string',
        'applicationName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'urlTemplate' => null,
        'applicationName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'urlTemplate' => false,
        'applicationName' => false
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
        'urlTemplate' => 'urlTemplate',
        'applicationName' => 'applicationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'urlTemplate' => 'setUrlTemplate',
        'applicationName' => 'setApplicationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'urlTemplate' => 'getUrlTemplate',
        'applicationName' => 'getApplicationName'
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
        $this->setIfExists('urlTemplate', $data ?? [], null);
        $this->setIfExists('applicationName', $data ?? [], null);
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

        if (!is_null($this->container['urlTemplate']) && (mb_strlen($this->container['urlTemplate']) > 200)) {
            $invalidProperties[] = "invalid value for 'urlTemplate', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['urlTemplate']) && (mb_strlen($this->container['urlTemplate']) < 1)) {
            $invalidProperties[] = "invalid value for 'urlTemplate', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) > 200)) {
            $invalidProperties[] = "invalid value for 'applicationName', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) < 1)) {
            $invalidProperties[] = "invalid value for 'applicationName', the character length must be bigger than or equal to 1.";
        }

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
     * Gets urlTemplate
     *
     * @return string|null
     */
    public function getUrlTemplate()
    {
        return $this->container['urlTemplate'];
    }

    /**
     * Sets urlTemplate
     *
     * @param string|null $urlTemplate Optionally set a url_template, which will be used in the invite mail sent by ZITADEL to guide the user to your invitation page. If no template is set, the default ZITADEL url will be used.  The following placeholders can be used: UserID, OrgID, Code
     *
     * @return self
     */
    public function setUrlTemplate($urlTemplate)
    {
        if (is_null($urlTemplate)) {
            throw new \InvalidArgumentException('non-nullable urlTemplate cannot be null');
        }
        if ((mb_strlen($urlTemplate) > 200)) {
            throw new \InvalidArgumentException('invalid length for $urlTemplate when calling V2SendInviteCode., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($urlTemplate) < 1)) {
            throw new \InvalidArgumentException('invalid length for $urlTemplate when calling V2SendInviteCode., must be bigger than or equal to 1.');
        }

        $this->container['urlTemplate'] = $urlTemplate;

        return $this;
    }

    /**
     * Gets applicationName
     *
     * @return string|null
     */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
     * Sets applicationName
     *
     * @param string|null $applicationName Optionally set an application name, which will be used in the invite mail sent by ZITADEL. If no application name is set, ZITADEL will be used as default.
     *
     * @return self
     */
    public function setApplicationName($applicationName)
    {
        if (is_null($applicationName)) {
            throw new \InvalidArgumentException('non-nullable applicationName cannot be null');
        }
        if ((mb_strlen($applicationName) > 200)) {
            throw new \InvalidArgumentException('invalid length for $applicationName when calling V2SendInviteCode., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($applicationName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $applicationName when calling V2SendInviteCode., must be bigger than or equal to 1.');
        }

        $this->container['applicationName'] = $applicationName;

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


