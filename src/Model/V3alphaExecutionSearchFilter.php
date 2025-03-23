<?php
/**
 * V3alphaExecutionSearchFilter
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
 * V3alphaExecutionSearchFilter Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V3alphaExecutionSearchFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v3alphaExecutionSearchFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inConditionsFilter' => '\ArthurHlt\Zitadel\Model\V3alphaInConditionsFilter',
        'executionTypeFilter' => '\ArthurHlt\Zitadel\Model\V3alphaExecutionTypeFilter',
        'targetFilter' => '\ArthurHlt\Zitadel\Model\V3alphaTargetFilter',
        'includeFilter' => '\ArthurHlt\Zitadel\Model\V3alphaIncludeFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inConditionsFilter' => null,
        'executionTypeFilter' => null,
        'targetFilter' => null,
        'includeFilter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inConditionsFilter' => false,
        'executionTypeFilter' => false,
        'targetFilter' => false,
        'includeFilter' => false
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
        'inConditionsFilter' => 'inConditionsFilter',
        'executionTypeFilter' => 'executionTypeFilter',
        'targetFilter' => 'targetFilter',
        'includeFilter' => 'includeFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inConditionsFilter' => 'setInConditionsFilter',
        'executionTypeFilter' => 'setExecutionTypeFilter',
        'targetFilter' => 'setTargetFilter',
        'includeFilter' => 'setIncludeFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inConditionsFilter' => 'getInConditionsFilter',
        'executionTypeFilter' => 'getExecutionTypeFilter',
        'targetFilter' => 'getTargetFilter',
        'includeFilter' => 'getIncludeFilter'
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
        $this->setIfExists('inConditionsFilter', $data ?? [], null);
        $this->setIfExists('executionTypeFilter', $data ?? [], null);
        $this->setIfExists('targetFilter', $data ?? [], null);
        $this->setIfExists('includeFilter', $data ?? [], null);
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
     * Gets inConditionsFilter
     *
     * @return \ArthurHlt\Zitadel\Model\V3alphaInConditionsFilter|null
     */
    public function getInConditionsFilter()
    {
        return $this->container['inConditionsFilter'];
    }

    /**
     * Sets inConditionsFilter
     *
     * @param \ArthurHlt\Zitadel\Model\V3alphaInConditionsFilter|null $inConditionsFilter inConditionsFilter
     *
     * @return self
     */
    public function setInConditionsFilter($inConditionsFilter)
    {
        if (is_null($inConditionsFilter)) {
            throw new \InvalidArgumentException('non-nullable inConditionsFilter cannot be null');
        }
        $this->container['inConditionsFilter'] = $inConditionsFilter;

        return $this;
    }

    /**
     * Gets executionTypeFilter
     *
     * @return \ArthurHlt\Zitadel\Model\V3alphaExecutionTypeFilter|null
     */
    public function getExecutionTypeFilter()
    {
        return $this->container['executionTypeFilter'];
    }

    /**
     * Sets executionTypeFilter
     *
     * @param \ArthurHlt\Zitadel\Model\V3alphaExecutionTypeFilter|null $executionTypeFilter executionTypeFilter
     *
     * @return self
     */
    public function setExecutionTypeFilter($executionTypeFilter)
    {
        if (is_null($executionTypeFilter)) {
            throw new \InvalidArgumentException('non-nullable executionTypeFilter cannot be null');
        }
        $this->container['executionTypeFilter'] = $executionTypeFilter;

        return $this;
    }

    /**
     * Gets targetFilter
     *
     * @return \ArthurHlt\Zitadel\Model\V3alphaTargetFilter|null
     */
    public function getTargetFilter()
    {
        return $this->container['targetFilter'];
    }

    /**
     * Sets targetFilter
     *
     * @param \ArthurHlt\Zitadel\Model\V3alphaTargetFilter|null $targetFilter targetFilter
     *
     * @return self
     */
    public function setTargetFilter($targetFilter)
    {
        if (is_null($targetFilter)) {
            throw new \InvalidArgumentException('non-nullable targetFilter cannot be null');
        }
        $this->container['targetFilter'] = $targetFilter;

        return $this;
    }

    /**
     * Gets includeFilter
     *
     * @return \ArthurHlt\Zitadel\Model\V3alphaIncludeFilter|null
     */
    public function getIncludeFilter()
    {
        return $this->container['includeFilter'];
    }

    /**
     * Sets includeFilter
     *
     * @param \ArthurHlt\Zitadel\Model\V3alphaIncludeFilter|null $includeFilter includeFilter
     *
     * @return self
     */
    public function setIncludeFilter($includeFilter)
    {
        if (is_null($includeFilter)) {
            throw new \InvalidArgumentException('non-nullable includeFilter cannot be null');
        }
        $this->container['includeFilter'] = $includeFilter;

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


