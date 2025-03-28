<?php
/**
 * V1RegistrationOrgScreenText
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
 * V1RegistrationOrgScreenText Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1RegistrationOrgScreenText implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1RegistrationOrgScreenText';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'orgnameLabel' => 'string',
        'firstnameLabel' => 'string',
        'lastnameLabel' => 'string',
        'usernameLabel' => 'string',
        'emailLabel' => 'string',
        'passwordLabel' => 'string',
        'passwordConfirmLabel' => 'string',
        'tosAndPrivacyLabel' => 'string',
        'tosConfirm' => 'string',
        'tosLinkText' => 'string',
        'privacyConfirm' => 'string',
        'privacyLinkText' => 'string',
        'saveButtonText' => 'string'
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
        'orgnameLabel' => null,
        'firstnameLabel' => null,
        'lastnameLabel' => null,
        'usernameLabel' => null,
        'emailLabel' => null,
        'passwordLabel' => null,
        'passwordConfirmLabel' => null,
        'tosAndPrivacyLabel' => null,
        'tosConfirm' => null,
        'tosLinkText' => null,
        'privacyConfirm' => null,
        'privacyLinkText' => null,
        'saveButtonText' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'description' => false,
        'orgnameLabel' => false,
        'firstnameLabel' => false,
        'lastnameLabel' => false,
        'usernameLabel' => false,
        'emailLabel' => false,
        'passwordLabel' => false,
        'passwordConfirmLabel' => false,
        'tosAndPrivacyLabel' => false,
        'tosConfirm' => false,
        'tosLinkText' => false,
        'privacyConfirm' => false,
        'privacyLinkText' => false,
        'saveButtonText' => false
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
        'orgnameLabel' => 'orgnameLabel',
        'firstnameLabel' => 'firstnameLabel',
        'lastnameLabel' => 'lastnameLabel',
        'usernameLabel' => 'usernameLabel',
        'emailLabel' => 'emailLabel',
        'passwordLabel' => 'passwordLabel',
        'passwordConfirmLabel' => 'passwordConfirmLabel',
        'tosAndPrivacyLabel' => 'tosAndPrivacyLabel',
        'tosConfirm' => 'tosConfirm',
        'tosLinkText' => 'tosLinkText',
        'privacyConfirm' => 'privacyConfirm',
        'privacyLinkText' => 'privacyLinkText',
        'saveButtonText' => 'saveButtonText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'orgnameLabel' => 'setOrgnameLabel',
        'firstnameLabel' => 'setFirstnameLabel',
        'lastnameLabel' => 'setLastnameLabel',
        'usernameLabel' => 'setUsernameLabel',
        'emailLabel' => 'setEmailLabel',
        'passwordLabel' => 'setPasswordLabel',
        'passwordConfirmLabel' => 'setPasswordConfirmLabel',
        'tosAndPrivacyLabel' => 'setTosAndPrivacyLabel',
        'tosConfirm' => 'setTosConfirm',
        'tosLinkText' => 'setTosLinkText',
        'privacyConfirm' => 'setPrivacyConfirm',
        'privacyLinkText' => 'setPrivacyLinkText',
        'saveButtonText' => 'setSaveButtonText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'orgnameLabel' => 'getOrgnameLabel',
        'firstnameLabel' => 'getFirstnameLabel',
        'lastnameLabel' => 'getLastnameLabel',
        'usernameLabel' => 'getUsernameLabel',
        'emailLabel' => 'getEmailLabel',
        'passwordLabel' => 'getPasswordLabel',
        'passwordConfirmLabel' => 'getPasswordConfirmLabel',
        'tosAndPrivacyLabel' => 'getTosAndPrivacyLabel',
        'tosConfirm' => 'getTosConfirm',
        'tosLinkText' => 'getTosLinkText',
        'privacyConfirm' => 'getPrivacyConfirm',
        'privacyLinkText' => 'getPrivacyLinkText',
        'saveButtonText' => 'getSaveButtonText'
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
        $this->setIfExists('orgnameLabel', $data ?? [], null);
        $this->setIfExists('firstnameLabel', $data ?? [], null);
        $this->setIfExists('lastnameLabel', $data ?? [], null);
        $this->setIfExists('usernameLabel', $data ?? [], null);
        $this->setIfExists('emailLabel', $data ?? [], null);
        $this->setIfExists('passwordLabel', $data ?? [], null);
        $this->setIfExists('passwordConfirmLabel', $data ?? [], null);
        $this->setIfExists('tosAndPrivacyLabel', $data ?? [], null);
        $this->setIfExists('tosConfirm', $data ?? [], null);
        $this->setIfExists('tosLinkText', $data ?? [], null);
        $this->setIfExists('privacyConfirm', $data ?? [], null);
        $this->setIfExists('privacyLinkText', $data ?? [], null);
        $this->setIfExists('saveButtonText', $data ?? [], null);
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
     * Gets orgnameLabel
     *
     * @return string|null
     */
    public function getOrgnameLabel()
    {
        return $this->container['orgnameLabel'];
    }

    /**
     * Sets orgnameLabel
     *
     * @param string|null $orgnameLabel orgnameLabel
     *
     * @return self
     */
    public function setOrgnameLabel($orgnameLabel)
    {
        if (is_null($orgnameLabel)) {
            throw new \InvalidArgumentException('non-nullable orgnameLabel cannot be null');
        }
        $this->container['orgnameLabel'] = $orgnameLabel;

        return $this;
    }

    /**
     * Gets firstnameLabel
     *
     * @return string|null
     */
    public function getFirstnameLabel()
    {
        return $this->container['firstnameLabel'];
    }

    /**
     * Sets firstnameLabel
     *
     * @param string|null $firstnameLabel firstnameLabel
     *
     * @return self
     */
    public function setFirstnameLabel($firstnameLabel)
    {
        if (is_null($firstnameLabel)) {
            throw new \InvalidArgumentException('non-nullable firstnameLabel cannot be null');
        }
        $this->container['firstnameLabel'] = $firstnameLabel;

        return $this;
    }

    /**
     * Gets lastnameLabel
     *
     * @return string|null
     */
    public function getLastnameLabel()
    {
        return $this->container['lastnameLabel'];
    }

    /**
     * Sets lastnameLabel
     *
     * @param string|null $lastnameLabel lastnameLabel
     *
     * @return self
     */
    public function setLastnameLabel($lastnameLabel)
    {
        if (is_null($lastnameLabel)) {
            throw new \InvalidArgumentException('non-nullable lastnameLabel cannot be null');
        }
        $this->container['lastnameLabel'] = $lastnameLabel;

        return $this;
    }

    /**
     * Gets usernameLabel
     *
     * @return string|null
     */
    public function getUsernameLabel()
    {
        return $this->container['usernameLabel'];
    }

    /**
     * Sets usernameLabel
     *
     * @param string|null $usernameLabel usernameLabel
     *
     * @return self
     */
    public function setUsernameLabel($usernameLabel)
    {
        if (is_null($usernameLabel)) {
            throw new \InvalidArgumentException('non-nullable usernameLabel cannot be null');
        }
        $this->container['usernameLabel'] = $usernameLabel;

        return $this;
    }

    /**
     * Gets emailLabel
     *
     * @return string|null
     */
    public function getEmailLabel()
    {
        return $this->container['emailLabel'];
    }

    /**
     * Sets emailLabel
     *
     * @param string|null $emailLabel emailLabel
     *
     * @return self
     */
    public function setEmailLabel($emailLabel)
    {
        if (is_null($emailLabel)) {
            throw new \InvalidArgumentException('non-nullable emailLabel cannot be null');
        }
        $this->container['emailLabel'] = $emailLabel;

        return $this;
    }

    /**
     * Gets passwordLabel
     *
     * @return string|null
     */
    public function getPasswordLabel()
    {
        return $this->container['passwordLabel'];
    }

    /**
     * Sets passwordLabel
     *
     * @param string|null $passwordLabel passwordLabel
     *
     * @return self
     */
    public function setPasswordLabel($passwordLabel)
    {
        if (is_null($passwordLabel)) {
            throw new \InvalidArgumentException('non-nullable passwordLabel cannot be null');
        }
        $this->container['passwordLabel'] = $passwordLabel;

        return $this;
    }

    /**
     * Gets passwordConfirmLabel
     *
     * @return string|null
     */
    public function getPasswordConfirmLabel()
    {
        return $this->container['passwordConfirmLabel'];
    }

    /**
     * Sets passwordConfirmLabel
     *
     * @param string|null $passwordConfirmLabel passwordConfirmLabel
     *
     * @return self
     */
    public function setPasswordConfirmLabel($passwordConfirmLabel)
    {
        if (is_null($passwordConfirmLabel)) {
            throw new \InvalidArgumentException('non-nullable passwordConfirmLabel cannot be null');
        }
        $this->container['passwordConfirmLabel'] = $passwordConfirmLabel;

        return $this;
    }

    /**
     * Gets tosAndPrivacyLabel
     *
     * @return string|null
     */
    public function getTosAndPrivacyLabel()
    {
        return $this->container['tosAndPrivacyLabel'];
    }

    /**
     * Sets tosAndPrivacyLabel
     *
     * @param string|null $tosAndPrivacyLabel tosAndPrivacyLabel
     *
     * @return self
     */
    public function setTosAndPrivacyLabel($tosAndPrivacyLabel)
    {
        if (is_null($tosAndPrivacyLabel)) {
            throw new \InvalidArgumentException('non-nullable tosAndPrivacyLabel cannot be null');
        }
        $this->container['tosAndPrivacyLabel'] = $tosAndPrivacyLabel;

        return $this;
    }

    /**
     * Gets tosConfirm
     *
     * @return string|null
     */
    public function getTosConfirm()
    {
        return $this->container['tosConfirm'];
    }

    /**
     * Sets tosConfirm
     *
     * @param string|null $tosConfirm tosConfirm
     *
     * @return self
     */
    public function setTosConfirm($tosConfirm)
    {
        if (is_null($tosConfirm)) {
            throw new \InvalidArgumentException('non-nullable tosConfirm cannot be null');
        }
        $this->container['tosConfirm'] = $tosConfirm;

        return $this;
    }

    /**
     * Gets tosLinkText
     *
     * @return string|null
     */
    public function getTosLinkText()
    {
        return $this->container['tosLinkText'];
    }

    /**
     * Sets tosLinkText
     *
     * @param string|null $tosLinkText tosLinkText
     *
     * @return self
     */
    public function setTosLinkText($tosLinkText)
    {
        if (is_null($tosLinkText)) {
            throw new \InvalidArgumentException('non-nullable tosLinkText cannot be null');
        }
        $this->container['tosLinkText'] = $tosLinkText;

        return $this;
    }

    /**
     * Gets privacyConfirm
     *
     * @return string|null
     */
    public function getPrivacyConfirm()
    {
        return $this->container['privacyConfirm'];
    }

    /**
     * Sets privacyConfirm
     *
     * @param string|null $privacyConfirm privacyConfirm
     *
     * @return self
     */
    public function setPrivacyConfirm($privacyConfirm)
    {
        if (is_null($privacyConfirm)) {
            throw new \InvalidArgumentException('non-nullable privacyConfirm cannot be null');
        }
        $this->container['privacyConfirm'] = $privacyConfirm;

        return $this;
    }

    /**
     * Gets privacyLinkText
     *
     * @return string|null
     */
    public function getPrivacyLinkText()
    {
        return $this->container['privacyLinkText'];
    }

    /**
     * Sets privacyLinkText
     *
     * @param string|null $privacyLinkText privacyLinkText
     *
     * @return self
     */
    public function setPrivacyLinkText($privacyLinkText)
    {
        if (is_null($privacyLinkText)) {
            throw new \InvalidArgumentException('non-nullable privacyLinkText cannot be null');
        }
        $this->container['privacyLinkText'] = $privacyLinkText;

        return $this;
    }

    /**
     * Gets saveButtonText
     *
     * @return string|null
     */
    public function getSaveButtonText()
    {
        return $this->container['saveButtonText'];
    }

    /**
     * Sets saveButtonText
     *
     * @param string|null $saveButtonText saveButtonText
     *
     * @return self
     */
    public function setSaveButtonText($saveButtonText)
    {
        if (is_null($saveButtonText)) {
            throw new \InvalidArgumentException('non-nullable saveButtonText cannot be null');
        }
        $this->container['saveButtonText'] = $saveButtonText;

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


