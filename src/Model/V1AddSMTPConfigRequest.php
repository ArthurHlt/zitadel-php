<?php
/**
 * V1AddSMTPConfigRequest
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
 * V1AddSMTPConfigRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1AddSMTPConfigRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1AddSMTPConfigRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'senderAddress' => 'string',
        'senderName' => 'string',
        'tls' => 'bool',
        'host' => 'string',
        'user' => 'string',
        'password' => 'string',
        'replyToAddress' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'senderAddress' => null,
        'senderName' => null,
        'tls' => null,
        'host' => null,
        'user' => null,
        'password' => null,
        'replyToAddress' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'senderAddress' => false,
        'senderName' => false,
        'tls' => false,
        'host' => false,
        'user' => false,
        'password' => false,
        'replyToAddress' => false,
        'description' => false
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
        'senderAddress' => 'senderAddress',
        'senderName' => 'senderName',
        'tls' => 'tls',
        'host' => 'host',
        'user' => 'user',
        'password' => 'password',
        'replyToAddress' => 'replyToAddress',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'senderAddress' => 'setSenderAddress',
        'senderName' => 'setSenderName',
        'tls' => 'setTls',
        'host' => 'setHost',
        'user' => 'setUser',
        'password' => 'setPassword',
        'replyToAddress' => 'setReplyToAddress',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'senderAddress' => 'getSenderAddress',
        'senderName' => 'getSenderName',
        'tls' => 'getTls',
        'host' => 'getHost',
        'user' => 'getUser',
        'password' => 'getPassword',
        'replyToAddress' => 'getReplyToAddress',
        'description' => 'getDescription'
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
        $this->setIfExists('senderAddress', $data ?? [], null);
        $this->setIfExists('senderName', $data ?? [], null);
        $this->setIfExists('tls', $data ?? [], null);
        $this->setIfExists('host', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('replyToAddress', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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

        if ($this->container['senderAddress'] === null) {
            $invalidProperties[] = "'senderAddress' can't be null";
        }
        if ((mb_strlen($this->container['senderAddress']) > 200)) {
            $invalidProperties[] = "invalid value for 'senderAddress', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['senderAddress']) < 1)) {
            $invalidProperties[] = "invalid value for 'senderAddress', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['senderName'] === null) {
            $invalidProperties[] = "'senderName' can't be null";
        }
        if ((mb_strlen($this->container['senderName']) > 200)) {
            $invalidProperties[] = "invalid value for 'senderName', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['senderName']) < 1)) {
            $invalidProperties[] = "invalid value for 'senderName', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ((mb_strlen($this->container['host']) > 500)) {
            $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 500.";
        }

        if ((mb_strlen($this->container['host']) < 1)) {
            $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['replyToAddress']) && (mb_strlen($this->container['replyToAddress']) > 200)) {
            $invalidProperties[] = "invalid value for 'replyToAddress', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
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
     * Gets senderAddress
     *
     * @return string
     */
    public function getSenderAddress()
    {
        return $this->container['senderAddress'];
    }

    /**
     * Sets senderAddress
     *
     * @param string $senderAddress senderAddress
     *
     * @return self
     */
    public function setSenderAddress($senderAddress)
    {
        if (is_null($senderAddress)) {
            throw new \InvalidArgumentException('non-nullable senderAddress cannot be null');
        }
        if ((mb_strlen($senderAddress) > 200)) {
            throw new \InvalidArgumentException('invalid length for $senderAddress when calling V1AddSMTPConfigRequest., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($senderAddress) < 1)) {
            throw new \InvalidArgumentException('invalid length for $senderAddress when calling V1AddSMTPConfigRequest., must be bigger than or equal to 1.');
        }

        $this->container['senderAddress'] = $senderAddress;

        return $this;
    }

    /**
     * Gets senderName
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['senderName'];
    }

    /**
     * Sets senderName
     *
     * @param string $senderName senderName
     *
     * @return self
     */
    public function setSenderName($senderName)
    {
        if (is_null($senderName)) {
            throw new \InvalidArgumentException('non-nullable senderName cannot be null');
        }
        if ((mb_strlen($senderName) > 200)) {
            throw new \InvalidArgumentException('invalid length for $senderName when calling V1AddSMTPConfigRequest., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($senderName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $senderName when calling V1AddSMTPConfigRequest., must be bigger than or equal to 1.');
        }

        $this->container['senderName'] = $senderName;

        return $this;
    }

    /**
     * Gets tls
     *
     * @return bool|null
     */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
     * Sets tls
     *
     * @param bool|null $tls tls
     *
     * @return self
     */
    public function setTls($tls)
    {
        if (is_null($tls)) {
            throw new \InvalidArgumentException('non-nullable tls cannot be null');
        }
        $this->container['tls'] = $tls;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host Make sure to include the port.
     *
     * @return self
     */
    public function setHost($host)
    {
        if (is_null($host)) {
            throw new \InvalidArgumentException('non-nullable host cannot be null');
        }
        if ((mb_strlen($host) > 500)) {
            throw new \InvalidArgumentException('invalid length for $host when calling V1AddSMTPConfigRequest., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($host) < 1)) {
            throw new \InvalidArgumentException('invalid length for $host when calling V1AddSMTPConfigRequest., must be bigger than or equal to 1.');
        }

        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets replyToAddress
     *
     * @return string|null
     */
    public function getReplyToAddress()
    {
        return $this->container['replyToAddress'];
    }

    /**
     * Sets replyToAddress
     *
     * @param string|null $replyToAddress replyToAddress
     *
     * @return self
     */
    public function setReplyToAddress($replyToAddress)
    {
        if (is_null($replyToAddress)) {
            throw new \InvalidArgumentException('non-nullable replyToAddress cannot be null');
        }
        if ((mb_strlen($replyToAddress) > 200)) {
            throw new \InvalidArgumentException('invalid length for $replyToAddress when calling V1AddSMTPConfigRequest., must be smaller than or equal to 200.');
        }

        $this->container['replyToAddress'] = $replyToAddress;

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
            throw new \InvalidArgumentException('invalid length for $description when calling V1AddSMTPConfigRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

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


