<?php
/**
 * Zitadeladminv1FailedEvent
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
 * Zitadeladminv1FailedEvent Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Zitadeladminv1FailedEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'zitadeladminv1FailedEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'database' => 'string',
        'viewName' => 'string',
        'failedSequence' => 'string',
        'failureCount' => 'string',
        'errorMessage' => 'string',
        'lastFailed' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'database' => null,
        'viewName' => null,
        'failedSequence' => 'uint64',
        'failureCount' => 'uint64',
        'errorMessage' => null,
        'lastFailed' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'database' => false,
        'viewName' => false,
        'failedSequence' => false,
        'failureCount' => false,
        'errorMessage' => false,
        'lastFailed' => false
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
        'database' => 'database',
        'viewName' => 'viewName',
        'failedSequence' => 'failedSequence',
        'failureCount' => 'failureCount',
        'errorMessage' => 'errorMessage',
        'lastFailed' => 'lastFailed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'database' => 'setDatabase',
        'viewName' => 'setViewName',
        'failedSequence' => 'setFailedSequence',
        'failureCount' => 'setFailureCount',
        'errorMessage' => 'setErrorMessage',
        'lastFailed' => 'setLastFailed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'database' => 'getDatabase',
        'viewName' => 'getViewName',
        'failedSequence' => 'getFailedSequence',
        'failureCount' => 'getFailureCount',
        'errorMessage' => 'getErrorMessage',
        'lastFailed' => 'getLastFailed'
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
        $this->setIfExists('database', $data ?? [], null);
        $this->setIfExists('viewName', $data ?? [], null);
        $this->setIfExists('failedSequence', $data ?? [], null);
        $this->setIfExists('failureCount', $data ?? [], null);
        $this->setIfExists('errorMessage', $data ?? [], null);
        $this->setIfExists('lastFailed', $data ?? [], null);
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
     * Gets database
     *
     * @return string|null
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param string|null $database database
     *
     * @return self
     */
    public function setDatabase($database)
    {
        if (is_null($database)) {
            throw new \InvalidArgumentException('non-nullable database cannot be null');
        }
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets viewName
     *
     * @return string|null
     */
    public function getViewName()
    {
        return $this->container['viewName'];
    }

    /**
     * Sets viewName
     *
     * @param string|null $viewName viewName
     *
     * @return self
     */
    public function setViewName($viewName)
    {
        if (is_null($viewName)) {
            throw new \InvalidArgumentException('non-nullable viewName cannot be null');
        }
        $this->container['viewName'] = $viewName;

        return $this;
    }

    /**
     * Gets failedSequence
     *
     * @return string|null
     */
    public function getFailedSequence()
    {
        return $this->container['failedSequence'];
    }

    /**
     * Sets failedSequence
     *
     * @param string|null $failedSequence failedSequence
     *
     * @return self
     */
    public function setFailedSequence($failedSequence)
    {
        if (is_null($failedSequence)) {
            throw new \InvalidArgumentException('non-nullable failedSequence cannot be null');
        }
        $this->container['failedSequence'] = $failedSequence;

        return $this;
    }

    /**
     * Gets failureCount
     *
     * @return string|null
     */
    public function getFailureCount()
    {
        return $this->container['failureCount'];
    }

    /**
     * Sets failureCount
     *
     * @param string|null $failureCount failureCount
     *
     * @return self
     */
    public function setFailureCount($failureCount)
    {
        if (is_null($failureCount)) {
            throw new \InvalidArgumentException('non-nullable failureCount cannot be null');
        }
        $this->container['failureCount'] = $failureCount;

        return $this;
    }

    /**
     * Gets errorMessage
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
     * Sets errorMessage
     *
     * @param string|null $errorMessage errorMessage
     *
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        if (is_null($errorMessage)) {
            throw new \InvalidArgumentException('non-nullable errorMessage cannot be null');
        }
        $this->container['errorMessage'] = $errorMessage;

        return $this;
    }

    /**
     * Gets lastFailed
     *
     * @return \DateTime|null
     */
    public function getLastFailed()
    {
        return $this->container['lastFailed'];
    }

    /**
     * Sets lastFailed
     *
     * @param \DateTime|null $lastFailed The timestamp the failure last occurred
     *
     * @return self
     */
    public function setLastFailed($lastFailed)
    {
        if (is_null($lastFailed)) {
            throw new \InvalidArgumentException('non-nullable lastFailed cannot be null');
        }
        $this->container['lastFailed'] = $lastFailed;

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


