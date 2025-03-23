<?php
/**
 * V1UpdatePasswordComplexityPolicyRequest
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
 * V1UpdatePasswordComplexityPolicyRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1UpdatePasswordComplexityPolicyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1UpdatePasswordComplexityPolicyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'minLength' => 'int',
        'hasUppercase' => 'bool',
        'hasLowercase' => 'bool',
        'hasNumber' => 'bool',
        'hasSymbol' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'minLength' => 'int64',
        'hasUppercase' => null,
        'hasLowercase' => null,
        'hasNumber' => null,
        'hasSymbol' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'minLength' => false,
        'hasUppercase' => false,
        'hasLowercase' => false,
        'hasNumber' => false,
        'hasSymbol' => false
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
        'minLength' => 'minLength',
        'hasUppercase' => 'hasUppercase',
        'hasLowercase' => 'hasLowercase',
        'hasNumber' => 'hasNumber',
        'hasSymbol' => 'hasSymbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minLength' => 'setMinLength',
        'hasUppercase' => 'setHasUppercase',
        'hasLowercase' => 'setHasLowercase',
        'hasNumber' => 'setHasNumber',
        'hasSymbol' => 'setHasSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minLength' => 'getMinLength',
        'hasUppercase' => 'getHasUppercase',
        'hasLowercase' => 'getHasLowercase',
        'hasNumber' => 'getHasNumber',
        'hasSymbol' => 'getHasSymbol'
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
        $this->setIfExists('minLength', $data ?? [], null);
        $this->setIfExists('hasUppercase', $data ?? [], null);
        $this->setIfExists('hasLowercase', $data ?? [], null);
        $this->setIfExists('hasNumber', $data ?? [], null);
        $this->setIfExists('hasSymbol', $data ?? [], null);
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
     * Gets minLength
     *
     * @return int|null
     */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
     * Sets minLength
     *
     * @param int|null $minLength minLength
     *
     * @return self
     */
    public function setMinLength($minLength)
    {
        if (is_null($minLength)) {
            throw new \InvalidArgumentException('non-nullable minLength cannot be null');
        }
        $this->container['minLength'] = $minLength;

        return $this;
    }

    /**
     * Gets hasUppercase
     *
     * @return bool|null
     */
    public function getHasUppercase()
    {
        return $this->container['hasUppercase'];
    }

    /**
     * Sets hasUppercase
     *
     * @param bool|null $hasUppercase Defines if the password MUST contain an upper case letter
     *
     * @return self
     */
    public function setHasUppercase($hasUppercase)
    {
        if (is_null($hasUppercase)) {
            throw new \InvalidArgumentException('non-nullable hasUppercase cannot be null');
        }
        $this->container['hasUppercase'] = $hasUppercase;

        return $this;
    }

    /**
     * Gets hasLowercase
     *
     * @return bool|null
     */
    public function getHasLowercase()
    {
        return $this->container['hasLowercase'];
    }

    /**
     * Sets hasLowercase
     *
     * @param bool|null $hasLowercase Defines if the password MUST contain a lowercase letter
     *
     * @return self
     */
    public function setHasLowercase($hasLowercase)
    {
        if (is_null($hasLowercase)) {
            throw new \InvalidArgumentException('non-nullable hasLowercase cannot be null');
        }
        $this->container['hasLowercase'] = $hasLowercase;

        return $this;
    }

    /**
     * Gets hasNumber
     *
     * @return bool|null
     */
    public function getHasNumber()
    {
        return $this->container['hasNumber'];
    }

    /**
     * Sets hasNumber
     *
     * @param bool|null $hasNumber Defines if the password MUST contain a number
     *
     * @return self
     */
    public function setHasNumber($hasNumber)
    {
        if (is_null($hasNumber)) {
            throw new \InvalidArgumentException('non-nullable hasNumber cannot be null');
        }
        $this->container['hasNumber'] = $hasNumber;

        return $this;
    }

    /**
     * Gets hasSymbol
     *
     * @return bool|null
     */
    public function getHasSymbol()
    {
        return $this->container['hasSymbol'];
    }

    /**
     * Sets hasSymbol
     *
     * @param bool|null $hasSymbol Defines if the password MUST contain a symbol. E.g. \"$\"
     *
     * @return self
     */
    public function setHasSymbol($hasSymbol)
    {
        if (is_null($hasSymbol)) {
            throw new \InvalidArgumentException('non-nullable hasSymbol cannot be null');
        }
        $this->container['hasSymbol'] = $hasSymbol;

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


