<?php
/**
 * V1InitMFAOTPScreenText
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
 * V1InitMFAOTPScreenText Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1InitMFAOTPScreenText implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1InitMFAOTPScreenText';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'descriptionOtp' => 'string',
        'secretLabel' => 'string',
        'codeLabel' => 'string',
        'nextButtonText' => 'string',
        'cancelButtonText' => 'string'
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
        'descriptionOtp' => null,
        'secretLabel' => null,
        'codeLabel' => null,
        'nextButtonText' => null,
        'cancelButtonText' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'description' => false,
        'descriptionOtp' => false,
        'secretLabel' => false,
        'codeLabel' => false,
        'nextButtonText' => false,
        'cancelButtonText' => false
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
        'descriptionOtp' => 'descriptionOtp',
        'secretLabel' => 'secretLabel',
        'codeLabel' => 'codeLabel',
        'nextButtonText' => 'nextButtonText',
        'cancelButtonText' => 'cancelButtonText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'descriptionOtp' => 'setDescriptionOtp',
        'secretLabel' => 'setSecretLabel',
        'codeLabel' => 'setCodeLabel',
        'nextButtonText' => 'setNextButtonText',
        'cancelButtonText' => 'setCancelButtonText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'descriptionOtp' => 'getDescriptionOtp',
        'secretLabel' => 'getSecretLabel',
        'codeLabel' => 'getCodeLabel',
        'nextButtonText' => 'getNextButtonText',
        'cancelButtonText' => 'getCancelButtonText'
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
        $this->setIfExists('descriptionOtp', $data ?? [], null);
        $this->setIfExists('secretLabel', $data ?? [], null);
        $this->setIfExists('codeLabel', $data ?? [], null);
        $this->setIfExists('nextButtonText', $data ?? [], null);
        $this->setIfExists('cancelButtonText', $data ?? [], null);
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
     * Gets descriptionOtp
     *
     * @return string|null
     */
    public function getDescriptionOtp()
    {
        return $this->container['descriptionOtp'];
    }

    /**
     * Sets descriptionOtp
     *
     * @param string|null $descriptionOtp descriptionOtp
     *
     * @return self
     */
    public function setDescriptionOtp($descriptionOtp)
    {
        if (is_null($descriptionOtp)) {
            throw new \InvalidArgumentException('non-nullable descriptionOtp cannot be null');
        }
        $this->container['descriptionOtp'] = $descriptionOtp;

        return $this;
    }

    /**
     * Gets secretLabel
     *
     * @return string|null
     */
    public function getSecretLabel()
    {
        return $this->container['secretLabel'];
    }

    /**
     * Sets secretLabel
     *
     * @param string|null $secretLabel secretLabel
     *
     * @return self
     */
    public function setSecretLabel($secretLabel)
    {
        if (is_null($secretLabel)) {
            throw new \InvalidArgumentException('non-nullable secretLabel cannot be null');
        }
        $this->container['secretLabel'] = $secretLabel;

        return $this;
    }

    /**
     * Gets codeLabel
     *
     * @return string|null
     */
    public function getCodeLabel()
    {
        return $this->container['codeLabel'];
    }

    /**
     * Sets codeLabel
     *
     * @param string|null $codeLabel codeLabel
     *
     * @return self
     */
    public function setCodeLabel($codeLabel)
    {
        if (is_null($codeLabel)) {
            throw new \InvalidArgumentException('non-nullable codeLabel cannot be null');
        }
        $this->container['codeLabel'] = $codeLabel;

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
     * Gets cancelButtonText
     *
     * @return string|null
     */
    public function getCancelButtonText()
    {
        return $this->container['cancelButtonText'];
    }

    /**
     * Sets cancelButtonText
     *
     * @param string|null $cancelButtonText cancelButtonText
     *
     * @return self
     */
    public function setCancelButtonText($cancelButtonText)
    {
        if (is_null($cancelButtonText)) {
            throw new \InvalidArgumentException('non-nullable cancelButtonText cannot be null');
        }
        $this->container['cancelButtonText'] = $cancelButtonText;

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


