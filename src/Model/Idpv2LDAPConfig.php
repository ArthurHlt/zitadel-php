<?php
/**
 * Idpv2LDAPConfig
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
 * Idpv2LDAPConfig Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Idpv2LDAPConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'idpv2LDAPConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'servers' => 'string[]',
        'startTls' => 'bool',
        'baseDn' => 'string',
        'bindDn' => 'string',
        'userBase' => 'string',
        'userObjectClasses' => 'string[]',
        'userFilters' => 'string[]',
        'timeout' => 'string',
        'attributes' => '\ArthurHlt\Zitadel\Model\Idpv2LDAPAttributes',
        'rootCa' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'servers' => null,
        'startTls' => null,
        'baseDn' => null,
        'bindDn' => null,
        'userBase' => null,
        'userObjectClasses' => null,
        'userFilters' => null,
        'timeout' => null,
        'attributes' => null,
        'rootCa' => 'byte'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'servers' => false,
        'startTls' => false,
        'baseDn' => false,
        'bindDn' => false,
        'userBase' => false,
        'userObjectClasses' => false,
        'userFilters' => false,
        'timeout' => false,
        'attributes' => false,
        'rootCa' => false
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
        'servers' => 'servers',
        'startTls' => 'startTls',
        'baseDn' => 'baseDn',
        'bindDn' => 'bindDn',
        'userBase' => 'userBase',
        'userObjectClasses' => 'userObjectClasses',
        'userFilters' => 'userFilters',
        'timeout' => 'timeout',
        'attributes' => 'attributes',
        'rootCa' => 'rootCa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'servers' => 'setServers',
        'startTls' => 'setStartTls',
        'baseDn' => 'setBaseDn',
        'bindDn' => 'setBindDn',
        'userBase' => 'setUserBase',
        'userObjectClasses' => 'setUserObjectClasses',
        'userFilters' => 'setUserFilters',
        'timeout' => 'setTimeout',
        'attributes' => 'setAttributes',
        'rootCa' => 'setRootCa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'servers' => 'getServers',
        'startTls' => 'getStartTls',
        'baseDn' => 'getBaseDn',
        'bindDn' => 'getBindDn',
        'userBase' => 'getUserBase',
        'userObjectClasses' => 'getUserObjectClasses',
        'userFilters' => 'getUserFilters',
        'timeout' => 'getTimeout',
        'attributes' => 'getAttributes',
        'rootCa' => 'getRootCa'
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
        $this->setIfExists('servers', $data ?? [], null);
        $this->setIfExists('startTls', $data ?? [], null);
        $this->setIfExists('baseDn', $data ?? [], null);
        $this->setIfExists('bindDn', $data ?? [], null);
        $this->setIfExists('userBase', $data ?? [], null);
        $this->setIfExists('userObjectClasses', $data ?? [], null);
        $this->setIfExists('userFilters', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('rootCa', $data ?? [], null);
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

        if (!is_null($this->container['rootCa']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['rootCa'])) {
            $invalidProperties[] = "invalid value for 'rootCa', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets servers
     *
     * @return string[]|null
     */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
     * Sets servers
     *
     * @param string[]|null $servers servers
     *
     * @return self
     */
    public function setServers($servers)
    {
        if (is_null($servers)) {
            throw new \InvalidArgumentException('non-nullable servers cannot be null');
        }
        $this->container['servers'] = $servers;

        return $this;
    }

    /**
     * Gets startTls
     *
     * @return bool|null
     */
    public function getStartTls()
    {
        return $this->container['startTls'];
    }

    /**
     * Sets startTls
     *
     * @param bool|null $startTls startTls
     *
     * @return self
     */
    public function setStartTls($startTls)
    {
        if (is_null($startTls)) {
            throw new \InvalidArgumentException('non-nullable startTls cannot be null');
        }
        $this->container['startTls'] = $startTls;

        return $this;
    }

    /**
     * Gets baseDn
     *
     * @return string|null
     */
    public function getBaseDn()
    {
        return $this->container['baseDn'];
    }

    /**
     * Sets baseDn
     *
     * @param string|null $baseDn baseDn
     *
     * @return self
     */
    public function setBaseDn($baseDn)
    {
        if (is_null($baseDn)) {
            throw new \InvalidArgumentException('non-nullable baseDn cannot be null');
        }
        $this->container['baseDn'] = $baseDn;

        return $this;
    }

    /**
     * Gets bindDn
     *
     * @return string|null
     */
    public function getBindDn()
    {
        return $this->container['bindDn'];
    }

    /**
     * Sets bindDn
     *
     * @param string|null $bindDn bindDn
     *
     * @return self
     */
    public function setBindDn($bindDn)
    {
        if (is_null($bindDn)) {
            throw new \InvalidArgumentException('non-nullable bindDn cannot be null');
        }
        $this->container['bindDn'] = $bindDn;

        return $this;
    }

    /**
     * Gets userBase
     *
     * @return string|null
     */
    public function getUserBase()
    {
        return $this->container['userBase'];
    }

    /**
     * Sets userBase
     *
     * @param string|null $userBase userBase
     *
     * @return self
     */
    public function setUserBase($userBase)
    {
        if (is_null($userBase)) {
            throw new \InvalidArgumentException('non-nullable userBase cannot be null');
        }
        $this->container['userBase'] = $userBase;

        return $this;
    }

    /**
     * Gets userObjectClasses
     *
     * @return string[]|null
     */
    public function getUserObjectClasses()
    {
        return $this->container['userObjectClasses'];
    }

    /**
     * Sets userObjectClasses
     *
     * @param string[]|null $userObjectClasses userObjectClasses
     *
     * @return self
     */
    public function setUserObjectClasses($userObjectClasses)
    {
        if (is_null($userObjectClasses)) {
            throw new \InvalidArgumentException('non-nullable userObjectClasses cannot be null');
        }
        $this->container['userObjectClasses'] = $userObjectClasses;

        return $this;
    }

    /**
     * Gets userFilters
     *
     * @return string[]|null
     */
    public function getUserFilters()
    {
        return $this->container['userFilters'];
    }

    /**
     * Sets userFilters
     *
     * @param string[]|null $userFilters userFilters
     *
     * @return self
     */
    public function setUserFilters($userFilters)
    {
        if (is_null($userFilters)) {
            throw new \InvalidArgumentException('non-nullable userFilters cannot be null');
        }
        $this->container['userFilters'] = $userFilters;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return string|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param string|null $timeout timeout
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        if (is_null($timeout)) {
            throw new \InvalidArgumentException('non-nullable timeout cannot be null');
        }
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \ArthurHlt\Zitadel\Model\Idpv2LDAPAttributes|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \ArthurHlt\Zitadel\Model\Idpv2LDAPAttributes|null $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets rootCa
     *
     * @return string|null
     */
    public function getRootCa()
    {
        return $this->container['rootCa'];
    }

    /**
     * Sets rootCa
     *
     * @param string|null $rootCa rootCa
     *
     * @return self
     */
    public function setRootCa($rootCa)
    {
        if (is_null($rootCa)) {
            throw new \InvalidArgumentException('non-nullable rootCa cannot be null');
        }

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", ObjectSerializer::toString($rootCa)))) {
            throw new \InvalidArgumentException("invalid value for \$rootCa when calling Idpv2LDAPConfig., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['rootCa'] = $rootCa;

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


