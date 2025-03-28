<?php
/**
 * V1AddInstanceRequest
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
 * V1AddInstanceRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1AddInstanceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1AddInstanceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instanceName' => 'string',
        'firstOrgName' => 'string',
        'customDomain' => 'string',
        'ownerUserName' => 'string',
        'ownerEmail' => '\ArthurHlt\Zitadel\Model\V1AddInstanceRequestEmail',
        'ownerProfile' => '\ArthurHlt\Zitadel\Model\V1AddInstanceRequestProfile',
        'ownerPassword' => '\ArthurHlt\Zitadel\Model\V1AddInstanceRequestPassword',
        'defaultLanguage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'firstOrgName' => null,
        'customDomain' => null,
        'ownerUserName' => null,
        'ownerEmail' => null,
        'ownerProfile' => null,
        'ownerPassword' => null,
        'defaultLanguage' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'instanceName' => false,
        'firstOrgName' => false,
        'customDomain' => false,
        'ownerUserName' => false,
        'ownerEmail' => false,
        'ownerProfile' => false,
        'ownerPassword' => false,
        'defaultLanguage' => false
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
        'instanceName' => 'instanceName',
        'firstOrgName' => 'firstOrgName',
        'customDomain' => 'customDomain',
        'ownerUserName' => 'ownerUserName',
        'ownerEmail' => 'ownerEmail',
        'ownerProfile' => 'ownerProfile',
        'ownerPassword' => 'ownerPassword',
        'defaultLanguage' => 'defaultLanguage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instanceName' => 'setInstanceName',
        'firstOrgName' => 'setFirstOrgName',
        'customDomain' => 'setCustomDomain',
        'ownerUserName' => 'setOwnerUserName',
        'ownerEmail' => 'setOwnerEmail',
        'ownerProfile' => 'setOwnerProfile',
        'ownerPassword' => 'setOwnerPassword',
        'defaultLanguage' => 'setDefaultLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instanceName' => 'getInstanceName',
        'firstOrgName' => 'getFirstOrgName',
        'customDomain' => 'getCustomDomain',
        'ownerUserName' => 'getOwnerUserName',
        'ownerEmail' => 'getOwnerEmail',
        'ownerProfile' => 'getOwnerProfile',
        'ownerPassword' => 'getOwnerPassword',
        'defaultLanguage' => 'getDefaultLanguage'
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
        $this->setIfExists('instanceName', $data ?? [], null);
        $this->setIfExists('firstOrgName', $data ?? [], null);
        $this->setIfExists('customDomain', $data ?? [], null);
        $this->setIfExists('ownerUserName', $data ?? [], null);
        $this->setIfExists('ownerEmail', $data ?? [], null);
        $this->setIfExists('ownerProfile', $data ?? [], null);
        $this->setIfExists('ownerPassword', $data ?? [], null);
        $this->setIfExists('defaultLanguage', $data ?? [], null);
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
     * Gets instanceName
     *
     * @return string|null
     */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
     * Sets instanceName
     *
     * @param string|null $instanceName instanceName
     *
     * @return self
     */
    public function setInstanceName($instanceName)
    {
        if (is_null($instanceName)) {
            throw new \InvalidArgumentException('non-nullable instanceName cannot be null');
        }
        $this->container['instanceName'] = $instanceName;

        return $this;
    }

    /**
     * Gets firstOrgName
     *
     * @return string|null
     */
    public function getFirstOrgName()
    {
        return $this->container['firstOrgName'];
    }

    /**
     * Sets firstOrgName
     *
     * @param string|null $firstOrgName firstOrgName
     *
     * @return self
     */
    public function setFirstOrgName($firstOrgName)
    {
        if (is_null($firstOrgName)) {
            throw new \InvalidArgumentException('non-nullable firstOrgName cannot be null');
        }
        $this->container['firstOrgName'] = $firstOrgName;

        return $this;
    }

    /**
     * Gets customDomain
     *
     * @return string|null
     */
    public function getCustomDomain()
    {
        return $this->container['customDomain'];
    }

    /**
     * Sets customDomain
     *
     * @param string|null $customDomain customDomain
     *
     * @return self
     */
    public function setCustomDomain($customDomain)
    {
        if (is_null($customDomain)) {
            throw new \InvalidArgumentException('non-nullable customDomain cannot be null');
        }
        $this->container['customDomain'] = $customDomain;

        return $this;
    }

    /**
     * Gets ownerUserName
     *
     * @return string|null
     */
    public function getOwnerUserName()
    {
        return $this->container['ownerUserName'];
    }

    /**
     * Sets ownerUserName
     *
     * @param string|null $ownerUserName ownerUserName
     *
     * @return self
     */
    public function setOwnerUserName($ownerUserName)
    {
        if (is_null($ownerUserName)) {
            throw new \InvalidArgumentException('non-nullable ownerUserName cannot be null');
        }
        $this->container['ownerUserName'] = $ownerUserName;

        return $this;
    }

    /**
     * Gets ownerEmail
     *
     * @return \ArthurHlt\Zitadel\Model\V1AddInstanceRequestEmail|null
     */
    public function getOwnerEmail()
    {
        return $this->container['ownerEmail'];
    }

    /**
     * Sets ownerEmail
     *
     * @param \ArthurHlt\Zitadel\Model\V1AddInstanceRequestEmail|null $ownerEmail ownerEmail
     *
     * @return self
     */
    public function setOwnerEmail($ownerEmail)
    {
        if (is_null($ownerEmail)) {
            throw new \InvalidArgumentException('non-nullable ownerEmail cannot be null');
        }
        $this->container['ownerEmail'] = $ownerEmail;

        return $this;
    }

    /**
     * Gets ownerProfile
     *
     * @return \ArthurHlt\Zitadel\Model\V1AddInstanceRequestProfile|null
     */
    public function getOwnerProfile()
    {
        return $this->container['ownerProfile'];
    }

    /**
     * Sets ownerProfile
     *
     * @param \ArthurHlt\Zitadel\Model\V1AddInstanceRequestProfile|null $ownerProfile ownerProfile
     *
     * @return self
     */
    public function setOwnerProfile($ownerProfile)
    {
        if (is_null($ownerProfile)) {
            throw new \InvalidArgumentException('non-nullable ownerProfile cannot be null');
        }
        $this->container['ownerProfile'] = $ownerProfile;

        return $this;
    }

    /**
     * Gets ownerPassword
     *
     * @return \ArthurHlt\Zitadel\Model\V1AddInstanceRequestPassword|null
     */
    public function getOwnerPassword()
    {
        return $this->container['ownerPassword'];
    }

    /**
     * Sets ownerPassword
     *
     * @param \ArthurHlt\Zitadel\Model\V1AddInstanceRequestPassword|null $ownerPassword ownerPassword
     *
     * @return self
     */
    public function setOwnerPassword($ownerPassword)
    {
        if (is_null($ownerPassword)) {
            throw new \InvalidArgumentException('non-nullable ownerPassword cannot be null');
        }
        $this->container['ownerPassword'] = $ownerPassword;

        return $this;
    }

    /**
     * Gets defaultLanguage
     *
     * @return string|null
     */
    public function getDefaultLanguage()
    {
        return $this->container['defaultLanguage'];
    }

    /**
     * Sets defaultLanguage
     *
     * @param string|null $defaultLanguage defaultLanguage
     *
     * @return self
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        if (is_null($defaultLanguage)) {
            throw new \InvalidArgumentException('non-nullable defaultLanguage cannot be null');
        }
        $this->container['defaultLanguage'] = $defaultLanguage;

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


