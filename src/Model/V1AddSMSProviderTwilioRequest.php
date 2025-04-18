<?php
/**
 * V1AddSMSProviderTwilioRequest
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
 * V1AddSMSProviderTwilioRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1AddSMSProviderTwilioRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1AddSMSProviderTwilioRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sid' => 'string',
        'token' => 'string',
        'senderNumber' => 'string',
        'description' => 'string',
        'verifyServiceSid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sid' => null,
        'token' => null,
        'senderNumber' => null,
        'description' => null,
        'verifyServiceSid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sid' => false,
        'token' => false,
        'senderNumber' => false,
        'description' => false,
        'verifyServiceSid' => false
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
        'sid' => 'sid',
        'token' => 'token',
        'senderNumber' => 'senderNumber',
        'description' => 'description',
        'verifyServiceSid' => 'verifyServiceSid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sid' => 'setSid',
        'token' => 'setToken',
        'senderNumber' => 'setSenderNumber',
        'description' => 'setDescription',
        'verifyServiceSid' => 'setVerifyServiceSid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sid' => 'getSid',
        'token' => 'getToken',
        'senderNumber' => 'getSenderNumber',
        'description' => 'getDescription',
        'verifyServiceSid' => 'getVerifyServiceSid'
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
        $this->setIfExists('sid', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('senderNumber', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('verifyServiceSid', $data ?? [], null);
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

        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
        }
        if ((mb_strlen($this->container['sid']) > 200)) {
            $invalidProperties[] = "invalid value for 'sid', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['sid']) < 1)) {
            $invalidProperties[] = "invalid value for 'sid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ((mb_strlen($this->container['token']) > 200)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['senderNumber']) && (mb_strlen($this->container['senderNumber']) > 200)) {
            $invalidProperties[] = "invalid value for 'senderNumber', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['verifyServiceSid']) && (mb_strlen($this->container['verifyServiceSid']) > 200)) {
            $invalidProperties[] = "invalid value for 'verifyServiceSid', the character length must be smaller than or equal to 200.";
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
     * Gets sid
     *
     * @return string
     */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
     * Sets sid
     *
     * @param string $sid sid
     *
     * @return self
     */
    public function setSid($sid)
    {
        if (is_null($sid)) {
            throw new \InvalidArgumentException('non-nullable sid cannot be null');
        }
        if ((mb_strlen($sid) > 200)) {
            throw new \InvalidArgumentException('invalid length for $sid when calling V1AddSMSProviderTwilioRequest., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($sid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sid when calling V1AddSMSProviderTwilioRequest., must be bigger than or equal to 1.');
        }

        $this->container['sid'] = $sid;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        if ((mb_strlen($token) > 200)) {
            throw new \InvalidArgumentException('invalid length for $token when calling V1AddSMSProviderTwilioRequest., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling V1AddSMSProviderTwilioRequest., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets senderNumber
     *
     * @return string|null
     */
    public function getSenderNumber()
    {
        return $this->container['senderNumber'];
    }

    /**
     * Sets senderNumber
     *
     * @param string|null $senderNumber senderNumber
     *
     * @return self
     */
    public function setSenderNumber($senderNumber)
    {
        if (is_null($senderNumber)) {
            throw new \InvalidArgumentException('non-nullable senderNumber cannot be null');
        }
        if ((mb_strlen($senderNumber) > 200)) {
            throw new \InvalidArgumentException('invalid length for $senderNumber when calling V1AddSMSProviderTwilioRequest., must be smaller than or equal to 200.');
        }

        $this->container['senderNumber'] = $senderNumber;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling V1AddSMSProviderTwilioRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets verifyServiceSid
     *
     * @return string|null
     */
    public function getVerifyServiceSid()
    {
        return $this->container['verifyServiceSid'];
    }

    /**
     * Sets verifyServiceSid
     *
     * @param string|null $verifyServiceSid verifyServiceSid
     *
     * @return self
     */
    public function setVerifyServiceSid($verifyServiceSid)
    {
        if (is_null($verifyServiceSid)) {
            throw new \InvalidArgumentException('non-nullable verifyServiceSid cannot be null');
        }
        if ((mb_strlen($verifyServiceSid) > 200)) {
            throw new \InvalidArgumentException('invalid length for $verifyServiceSid when calling V1AddSMSProviderTwilioRequest., must be smaller than or equal to 200.');
        }

        $this->container['verifyServiceSid'] = $verifyServiceSid;

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


