<?php
/**
 * Zitadelorgv1Domain
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
 * Zitadelorgv1Domain Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Zitadelorgv1Domain implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'zitadelorgv1Domain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orgId' => 'string',
        'details' => '\ArthurHlt\Zitadel\Model\V1ObjectDetails',
        'domainName' => 'string',
        'isVerified' => 'bool',
        'isPrimary' => 'bool',
        'validationType' => '\ArthurHlt\Zitadel\Model\V1DomainValidationType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orgId' => null,
        'details' => null,
        'domainName' => null,
        'isVerified' => null,
        'isPrimary' => null,
        'validationType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orgId' => false,
        'details' => false,
        'domainName' => false,
        'isVerified' => false,
        'isPrimary' => false,
        'validationType' => false
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
        'orgId' => 'orgId',
        'details' => 'details',
        'domainName' => 'domainName',
        'isVerified' => 'isVerified',
        'isPrimary' => 'isPrimary',
        'validationType' => 'validationType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orgId' => 'setOrgId',
        'details' => 'setDetails',
        'domainName' => 'setDomainName',
        'isVerified' => 'setIsVerified',
        'isPrimary' => 'setIsPrimary',
        'validationType' => 'setValidationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orgId' => 'getOrgId',
        'details' => 'getDetails',
        'domainName' => 'getDomainName',
        'isVerified' => 'getIsVerified',
        'isPrimary' => 'getIsPrimary',
        'validationType' => 'getValidationType'
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
        $this->setIfExists('orgId', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('domainName', $data ?? [], null);
        $this->setIfExists('isVerified', $data ?? [], null);
        $this->setIfExists('isPrimary', $data ?? [], null);
        $this->setIfExists('validationType', $data ?? [], null);
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
     * Gets orgId
     *
     * @return string|null
     */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
     * Sets orgId
     *
     * @param string|null $orgId orgId
     *
     * @return self
     */
    public function setOrgId($orgId)
    {
        if (is_null($orgId)) {
            throw new \InvalidArgumentException('non-nullable orgId cannot be null');
        }
        $this->container['orgId'] = $orgId;

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
     * Gets domainName
     *
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
     * Sets domainName
     *
     * @param string|null $domainName domainName
     *
     * @return self
     */
    public function setDomainName($domainName)
    {
        if (is_null($domainName)) {
            throw new \InvalidArgumentException('non-nullable domainName cannot be null');
        }
        $this->container['domainName'] = $domainName;

        return $this;
    }

    /**
     * Gets isVerified
     *
     * @return bool|null
     */
    public function getIsVerified()
    {
        return $this->container['isVerified'];
    }

    /**
     * Sets isVerified
     *
     * @param bool|null $isVerified defines if the domain is verified
     *
     * @return self
     */
    public function setIsVerified($isVerified)
    {
        if (is_null($isVerified)) {
            throw new \InvalidArgumentException('non-nullable isVerified cannot be null');
        }
        $this->container['isVerified'] = $isVerified;

        return $this;
    }

    /**
     * Gets isPrimary
     *
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->container['isPrimary'];
    }

    /**
     * Sets isPrimary
     *
     * @param bool|null $isPrimary defines if the domain is the primary domain
     *
     * @return self
     */
    public function setIsPrimary($isPrimary)
    {
        if (is_null($isPrimary)) {
            throw new \InvalidArgumentException('non-nullable isPrimary cannot be null');
        }
        $this->container['isPrimary'] = $isPrimary;

        return $this;
    }

    /**
     * Gets validationType
     *
     * @return \ArthurHlt\Zitadel\Model\V1DomainValidationType|null
     */
    public function getValidationType()
    {
        return $this->container['validationType'];
    }

    /**
     * Sets validationType
     *
     * @param \ArthurHlt\Zitadel\Model\V1DomainValidationType|null $validationType validationType
     *
     * @return self
     */
    public function setValidationType($validationType)
    {
        if (is_null($validationType)) {
            throw new \InvalidArgumentException('non-nullable validationType cannot be null');
        }
        $this->container['validationType'] = $validationType;

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


