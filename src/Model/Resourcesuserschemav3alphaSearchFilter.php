<?php
/**
 * Resourcesuserschemav3alphaSearchFilter
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
 * Resourcesuserschemav3alphaSearchFilter Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Resourcesuserschemav3alphaSearchFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'resourcesuserschemav3alphaSearchFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orFilter' => '\ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaOrFilter',
        'andFilter' => '\ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaAndFilter',
        'notFilter' => '\ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaNotFilter',
        'typeFilter' => '\ArthurHlt\Zitadel\Model\V3alphaTypeFilter',
        'stateFilter' => '\ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaStateFilter',
        'idFilter' => '\ArthurHlt\Zitadel\Model\V3alphaIDFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orFilter' => null,
        'andFilter' => null,
        'notFilter' => null,
        'typeFilter' => null,
        'stateFilter' => null,
        'idFilter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orFilter' => false,
        'andFilter' => false,
        'notFilter' => false,
        'typeFilter' => false,
        'stateFilter' => false,
        'idFilter' => false
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
        'orFilter' => 'orFilter',
        'andFilter' => 'andFilter',
        'notFilter' => 'notFilter',
        'typeFilter' => 'typeFilter',
        'stateFilter' => 'stateFilter',
        'idFilter' => 'idFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orFilter' => 'setOrFilter',
        'andFilter' => 'setAndFilter',
        'notFilter' => 'setNotFilter',
        'typeFilter' => 'setTypeFilter',
        'stateFilter' => 'setStateFilter',
        'idFilter' => 'setIdFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orFilter' => 'getOrFilter',
        'andFilter' => 'getAndFilter',
        'notFilter' => 'getNotFilter',
        'typeFilter' => 'getTypeFilter',
        'stateFilter' => 'getStateFilter',
        'idFilter' => 'getIdFilter'
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
        $this->setIfExists('orFilter', $data ?? [], null);
        $this->setIfExists('andFilter', $data ?? [], null);
        $this->setIfExists('notFilter', $data ?? [], null);
        $this->setIfExists('typeFilter', $data ?? [], null);
        $this->setIfExists('stateFilter', $data ?? [], null);
        $this->setIfExists('idFilter', $data ?? [], null);
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
     * Gets orFilter
     *
     * @return \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaOrFilter|null
     */
    public function getOrFilter()
    {
        return $this->container['orFilter'];
    }

    /**
     * Sets orFilter
     *
     * @param \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaOrFilter|null $orFilter orFilter
     *
     * @return self
     */
    public function setOrFilter($orFilter)
    {
        if (is_null($orFilter)) {
            throw new \InvalidArgumentException('non-nullable orFilter cannot be null');
        }
        $this->container['orFilter'] = $orFilter;

        return $this;
    }

    /**
     * Gets andFilter
     *
     * @return \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaAndFilter|null
     */
    public function getAndFilter()
    {
        return $this->container['andFilter'];
    }

    /**
     * Sets andFilter
     *
     * @param \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaAndFilter|null $andFilter andFilter
     *
     * @return self
     */
    public function setAndFilter($andFilter)
    {
        if (is_null($andFilter)) {
            throw new \InvalidArgumentException('non-nullable andFilter cannot be null');
        }
        $this->container['andFilter'] = $andFilter;

        return $this;
    }

    /**
     * Gets notFilter
     *
     * @return \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaNotFilter|null
     */
    public function getNotFilter()
    {
        return $this->container['notFilter'];
    }

    /**
     * Sets notFilter
     *
     * @param \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaNotFilter|null $notFilter notFilter
     *
     * @return self
     */
    public function setNotFilter($notFilter)
    {
        if (is_null($notFilter)) {
            throw new \InvalidArgumentException('non-nullable notFilter cannot be null');
        }
        $this->container['notFilter'] = $notFilter;

        return $this;
    }

    /**
     * Gets typeFilter
     *
     * @return \ArthurHlt\Zitadel\Model\V3alphaTypeFilter|null
     */
    public function getTypeFilter()
    {
        return $this->container['typeFilter'];
    }

    /**
     * Sets typeFilter
     *
     * @param \ArthurHlt\Zitadel\Model\V3alphaTypeFilter|null $typeFilter typeFilter
     *
     * @return self
     */
    public function setTypeFilter($typeFilter)
    {
        if (is_null($typeFilter)) {
            throw new \InvalidArgumentException('non-nullable typeFilter cannot be null');
        }
        $this->container['typeFilter'] = $typeFilter;

        return $this;
    }

    /**
     * Gets stateFilter
     *
     * @return \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaStateFilter|null
     */
    public function getStateFilter()
    {
        return $this->container['stateFilter'];
    }

    /**
     * Sets stateFilter
     *
     * @param \ArthurHlt\Zitadel\Model\Resourcesuserschemav3alphaStateFilter|null $stateFilter stateFilter
     *
     * @return self
     */
    public function setStateFilter($stateFilter)
    {
        if (is_null($stateFilter)) {
            throw new \InvalidArgumentException('non-nullable stateFilter cannot be null');
        }
        $this->container['stateFilter'] = $stateFilter;

        return $this;
    }

    /**
     * Gets idFilter
     *
     * @return \ArthurHlt\Zitadel\Model\V3alphaIDFilter|null
     */
    public function getIdFilter()
    {
        return $this->container['idFilter'];
    }

    /**
     * Sets idFilter
     *
     * @param \ArthurHlt\Zitadel\Model\V3alphaIDFilter|null $idFilter idFilter
     *
     * @return self
     */
    public function setIdFilter($idFilter)
    {
        if (is_null($idFilter)) {
            throw new \InvalidArgumentException('non-nullable idFilter cannot be null');
        }
        $this->container['idFilter'] = $idFilter;

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


