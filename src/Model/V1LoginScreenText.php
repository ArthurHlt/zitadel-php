<?php
/**
 * V1LoginScreenText
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
 * V1LoginScreenText Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1LoginScreenText implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1LoginScreenText';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'titleLinkingProcess' => 'string',
        'descriptionLinkingProcess' => 'string',
        'userMustBeMemberOfOrg' => 'string',
        'loginNameLabel' => 'string',
        'registerButtonText' => 'string',
        'nextButtonText' => 'string',
        'externalUserDescription' => 'string',
        'userNamePlaceholder' => 'string',
        'loginNamePlaceholder' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'titleLinkingProcess' => null,
        'descriptionLinkingProcess' => null,
        'userMustBeMemberOfOrg' => null,
        'loginNameLabel' => null,
        'registerButtonText' => null,
        'nextButtonText' => null,
        'externalUserDescription' => null,
        'userNamePlaceholder' => null,
        'loginNamePlaceholder' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'description' => false,
        'titleLinkingProcess' => false,
        'descriptionLinkingProcess' => false,
        'userMustBeMemberOfOrg' => false,
        'loginNameLabel' => false,
        'registerButtonText' => false,
        'nextButtonText' => false,
        'externalUserDescription' => false,
        'userNamePlaceholder' => false,
        'loginNamePlaceholder' => false
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
        'title' => 'title',
        'description' => 'description',
        'titleLinkingProcess' => 'titleLinkingProcess',
        'descriptionLinkingProcess' => 'descriptionLinkingProcess',
        'userMustBeMemberOfOrg' => 'userMustBeMemberOfOrg',
        'loginNameLabel' => 'loginNameLabel',
        'registerButtonText' => 'registerButtonText',
        'nextButtonText' => 'nextButtonText',
        'externalUserDescription' => 'externalUserDescription',
        'userNamePlaceholder' => 'userNamePlaceholder',
        'loginNamePlaceholder' => 'loginNamePlaceholder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'titleLinkingProcess' => 'setTitleLinkingProcess',
        'descriptionLinkingProcess' => 'setDescriptionLinkingProcess',
        'userMustBeMemberOfOrg' => 'setUserMustBeMemberOfOrg',
        'loginNameLabel' => 'setLoginNameLabel',
        'registerButtonText' => 'setRegisterButtonText',
        'nextButtonText' => 'setNextButtonText',
        'externalUserDescription' => 'setExternalUserDescription',
        'userNamePlaceholder' => 'setUserNamePlaceholder',
        'loginNamePlaceholder' => 'setLoginNamePlaceholder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'titleLinkingProcess' => 'getTitleLinkingProcess',
        'descriptionLinkingProcess' => 'getDescriptionLinkingProcess',
        'userMustBeMemberOfOrg' => 'getUserMustBeMemberOfOrg',
        'loginNameLabel' => 'getLoginNameLabel',
        'registerButtonText' => 'getRegisterButtonText',
        'nextButtonText' => 'getNextButtonText',
        'externalUserDescription' => 'getExternalUserDescription',
        'userNamePlaceholder' => 'getUserNamePlaceholder',
        'loginNamePlaceholder' => 'getLoginNamePlaceholder'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('titleLinkingProcess', $data ?? [], null);
        $this->setIfExists('descriptionLinkingProcess', $data ?? [], null);
        $this->setIfExists('userMustBeMemberOfOrg', $data ?? [], null);
        $this->setIfExists('loginNameLabel', $data ?? [], null);
        $this->setIfExists('registerButtonText', $data ?? [], null);
        $this->setIfExists('nextButtonText', $data ?? [], null);
        $this->setIfExists('externalUserDescription', $data ?? [], null);
        $this->setIfExists('userNamePlaceholder', $data ?? [], null);
        $this->setIfExists('loginNamePlaceholder', $data ?? [], null);
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets titleLinkingProcess
     *
     * @return string|null
     */
    public function getTitleLinkingProcess()
    {
        return $this->container['titleLinkingProcess'];
    }

    /**
     * Sets titleLinkingProcess
     *
     * @param string|null $titleLinkingProcess titleLinkingProcess
     *
     * @return self
     */
    public function setTitleLinkingProcess($titleLinkingProcess)
    {
        if (is_null($titleLinkingProcess)) {
            throw new \InvalidArgumentException('non-nullable titleLinkingProcess cannot be null');
        }
        $this->container['titleLinkingProcess'] = $titleLinkingProcess;

        return $this;
    }

    /**
     * Gets descriptionLinkingProcess
     *
     * @return string|null
     */
    public function getDescriptionLinkingProcess()
    {
        return $this->container['descriptionLinkingProcess'];
    }

    /**
     * Sets descriptionLinkingProcess
     *
     * @param string|null $descriptionLinkingProcess descriptionLinkingProcess
     *
     * @return self
     */
    public function setDescriptionLinkingProcess($descriptionLinkingProcess)
    {
        if (is_null($descriptionLinkingProcess)) {
            throw new \InvalidArgumentException('non-nullable descriptionLinkingProcess cannot be null');
        }
        $this->container['descriptionLinkingProcess'] = $descriptionLinkingProcess;

        return $this;
    }

    /**
     * Gets userMustBeMemberOfOrg
     *
     * @return string|null
     */
    public function getUserMustBeMemberOfOrg()
    {
        return $this->container['userMustBeMemberOfOrg'];
    }

    /**
     * Sets userMustBeMemberOfOrg
     *
     * @param string|null $userMustBeMemberOfOrg userMustBeMemberOfOrg
     *
     * @return self
     */
    public function setUserMustBeMemberOfOrg($userMustBeMemberOfOrg)
    {
        if (is_null($userMustBeMemberOfOrg)) {
            throw new \InvalidArgumentException('non-nullable userMustBeMemberOfOrg cannot be null');
        }
        $this->container['userMustBeMemberOfOrg'] = $userMustBeMemberOfOrg;

        return $this;
    }

    /**
     * Gets loginNameLabel
     *
     * @return string|null
     */
    public function getLoginNameLabel()
    {
        return $this->container['loginNameLabel'];
    }

    /**
     * Sets loginNameLabel
     *
     * @param string|null $loginNameLabel loginNameLabel
     *
     * @return self
     */
    public function setLoginNameLabel($loginNameLabel)
    {
        if (is_null($loginNameLabel)) {
            throw new \InvalidArgumentException('non-nullable loginNameLabel cannot be null');
        }
        $this->container['loginNameLabel'] = $loginNameLabel;

        return $this;
    }

    /**
     * Gets registerButtonText
     *
     * @return string|null
     */
    public function getRegisterButtonText()
    {
        return $this->container['registerButtonText'];
    }

    /**
     * Sets registerButtonText
     *
     * @param string|null $registerButtonText registerButtonText
     *
     * @return self
     */
    public function setRegisterButtonText($registerButtonText)
    {
        if (is_null($registerButtonText)) {
            throw new \InvalidArgumentException('non-nullable registerButtonText cannot be null');
        }
        $this->container['registerButtonText'] = $registerButtonText;

        return $this;
    }

    /**
     * Gets nextButtonText
     *
     * @return string|null
     */
    public function getNextButtonText()
    {
        return $this->container['nextButtonText'];
    }

    /**
     * Sets nextButtonText
     *
     * @param string|null $nextButtonText nextButtonText
     *
     * @return self
     */
    public function setNextButtonText($nextButtonText)
    {
        if (is_null($nextButtonText)) {
            throw new \InvalidArgumentException('non-nullable nextButtonText cannot be null');
        }
        $this->container['nextButtonText'] = $nextButtonText;

        return $this;
    }

    /**
     * Gets externalUserDescription
     *
     * @return string|null
     */
    public function getExternalUserDescription()
    {
        return $this->container['externalUserDescription'];
    }

    /**
     * Sets externalUserDescription
     *
     * @param string|null $externalUserDescription externalUserDescription
     *
     * @return self
     */
    public function setExternalUserDescription($externalUserDescription)
    {
        if (is_null($externalUserDescription)) {
            throw new \InvalidArgumentException('non-nullable externalUserDescription cannot be null');
        }
        $this->container['externalUserDescription'] = $externalUserDescription;

        return $this;
    }

    /**
     * Gets userNamePlaceholder
     *
     * @return string|null
     */
    public function getUserNamePlaceholder()
    {
        return $this->container['userNamePlaceholder'];
    }

    /**
     * Sets userNamePlaceholder
     *
     * @param string|null $userNamePlaceholder userNamePlaceholder
     *
     * @return self
     */
    public function setUserNamePlaceholder($userNamePlaceholder)
    {
        if (is_null($userNamePlaceholder)) {
            throw new \InvalidArgumentException('non-nullable userNamePlaceholder cannot be null');
        }
        $this->container['userNamePlaceholder'] = $userNamePlaceholder;

        return $this;
    }

    /**
     * Gets loginNamePlaceholder
     *
     * @return string|null
     */
    public function getLoginNamePlaceholder()
    {
        return $this->container['loginNamePlaceholder'];
    }

    /**
     * Sets loginNamePlaceholder
     *
     * @param string|null $loginNamePlaceholder loginNamePlaceholder
     *
     * @return self
     */
    public function setLoginNamePlaceholder($loginNamePlaceholder)
    {
        if (is_null($loginNamePlaceholder)) {
            throw new \InvalidArgumentException('non-nullable loginNamePlaceholder cannot be null');
        }
        $this->container['loginNamePlaceholder'] = $loginNamePlaceholder;

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


