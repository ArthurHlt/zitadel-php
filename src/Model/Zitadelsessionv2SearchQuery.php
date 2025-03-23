<?php
/**
 * Zitadelsessionv2SearchQuery
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
 * Zitadelsessionv2SearchQuery Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Zitadelsessionv2SearchQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'zitadelsessionv2SearchQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'idsQuery' => '\ArthurHlt\Zitadel\Model\Sessionv2IDsQuery',
        'userIdQuery' => '\ArthurHlt\Zitadel\Model\Sessionv2UserIDQuery',
        'creationDateQuery' => '\ArthurHlt\Zitadel\Model\Sessionv2CreationDateQuery',
        'creatorQuery' => '\ArthurHlt\Zitadel\Model\V2CreatorQuery',
        'userAgentQuery' => '\ArthurHlt\Zitadel\Model\V2UserAgentQuery'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'idsQuery' => null,
        'userIdQuery' => null,
        'creationDateQuery' => null,
        'creatorQuery' => null,
        'userAgentQuery' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'idsQuery' => false,
        'userIdQuery' => false,
        'creationDateQuery' => false,
        'creatorQuery' => false,
        'userAgentQuery' => false
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
        'idsQuery' => 'idsQuery',
        'userIdQuery' => 'userIdQuery',
        'creationDateQuery' => 'creationDateQuery',
        'creatorQuery' => 'creatorQuery',
        'userAgentQuery' => 'userAgentQuery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idsQuery' => 'setIdsQuery',
        'userIdQuery' => 'setUserIdQuery',
        'creationDateQuery' => 'setCreationDateQuery',
        'creatorQuery' => 'setCreatorQuery',
        'userAgentQuery' => 'setUserAgentQuery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idsQuery' => 'getIdsQuery',
        'userIdQuery' => 'getUserIdQuery',
        'creationDateQuery' => 'getCreationDateQuery',
        'creatorQuery' => 'getCreatorQuery',
        'userAgentQuery' => 'getUserAgentQuery'
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
        $this->setIfExists('idsQuery', $data ?? [], null);
        $this->setIfExists('userIdQuery', $data ?? [], null);
        $this->setIfExists('creationDateQuery', $data ?? [], null);
        $this->setIfExists('creatorQuery', $data ?? [], null);
        $this->setIfExists('userAgentQuery', $data ?? [], null);
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
     * Gets idsQuery
     *
     * @return \ArthurHlt\Zitadel\Model\Sessionv2IDsQuery|null
     */
    public function getIdsQuery()
    {
        return $this->container['idsQuery'];
    }

    /**
     * Sets idsQuery
     *
     * @param \ArthurHlt\Zitadel\Model\Sessionv2IDsQuery|null $idsQuery idsQuery
     *
     * @return self
     */
    public function setIdsQuery($idsQuery)
    {
        if (is_null($idsQuery)) {
            throw new \InvalidArgumentException('non-nullable idsQuery cannot be null');
        }
        $this->container['idsQuery'] = $idsQuery;

        return $this;
    }

    /**
     * Gets userIdQuery
     *
     * @return \ArthurHlt\Zitadel\Model\Sessionv2UserIDQuery|null
     */
    public function getUserIdQuery()
    {
        return $this->container['userIdQuery'];
    }

    /**
     * Sets userIdQuery
     *
     * @param \ArthurHlt\Zitadel\Model\Sessionv2UserIDQuery|null $userIdQuery userIdQuery
     *
     * @return self
     */
    public function setUserIdQuery($userIdQuery)
    {
        if (is_null($userIdQuery)) {
            throw new \InvalidArgumentException('non-nullable userIdQuery cannot be null');
        }
        $this->container['userIdQuery'] = $userIdQuery;

        return $this;
    }

    /**
     * Gets creationDateQuery
     *
     * @return \ArthurHlt\Zitadel\Model\Sessionv2CreationDateQuery|null
     */
    public function getCreationDateQuery()
    {
        return $this->container['creationDateQuery'];
    }

    /**
     * Sets creationDateQuery
     *
     * @param \ArthurHlt\Zitadel\Model\Sessionv2CreationDateQuery|null $creationDateQuery creationDateQuery
     *
     * @return self
     */
    public function setCreationDateQuery($creationDateQuery)
    {
        if (is_null($creationDateQuery)) {
            throw new \InvalidArgumentException('non-nullable creationDateQuery cannot be null');
        }
        $this->container['creationDateQuery'] = $creationDateQuery;

        return $this;
    }

    /**
     * Gets creatorQuery
     *
     * @return \ArthurHlt\Zitadel\Model\V2CreatorQuery|null
     */
    public function getCreatorQuery()
    {
        return $this->container['creatorQuery'];
    }

    /**
     * Sets creatorQuery
     *
     * @param \ArthurHlt\Zitadel\Model\V2CreatorQuery|null $creatorQuery creatorQuery
     *
     * @return self
     */
    public function setCreatorQuery($creatorQuery)
    {
        if (is_null($creatorQuery)) {
            throw new \InvalidArgumentException('non-nullable creatorQuery cannot be null');
        }
        $this->container['creatorQuery'] = $creatorQuery;

        return $this;
    }

    /**
     * Gets userAgentQuery
     *
     * @return \ArthurHlt\Zitadel\Model\V2UserAgentQuery|null
     */
    public function getUserAgentQuery()
    {
        return $this->container['userAgentQuery'];
    }

    /**
     * Sets userAgentQuery
     *
     * @param \ArthurHlt\Zitadel\Model\V2UserAgentQuery|null $userAgentQuery userAgentQuery
     *
     * @return self
     */
    public function setUserAgentQuery($userAgentQuery)
    {
        if (is_null($userAgentQuery)) {
            throw new \InvalidArgumentException('non-nullable userAgentQuery cannot be null');
        }
        $this->container['userAgentQuery'] = $userAgentQuery;

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


