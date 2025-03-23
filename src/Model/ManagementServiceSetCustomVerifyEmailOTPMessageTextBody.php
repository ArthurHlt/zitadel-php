<?php
/**
 * ManagementServiceSetCustomVerifyEmailOTPMessageTextBody
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
 * ManagementServiceSetCustomVerifyEmailOTPMessageTextBody Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagementServiceSetCustomVerifyEmailOTPMessageTextBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagementServiceSetCustomVerifyEmailOTPMessageTextBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'preHeader' => 'string',
        'subject' => 'string',
        'greeting' => 'string',
        'text' => 'string',
        'buttonText' => 'string',
        'footerText' => 'string'
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
        'preHeader' => null,
        'subject' => null,
        'greeting' => null,
        'text' => null,
        'buttonText' => null,
        'footerText' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'preHeader' => false,
        'subject' => false,
        'greeting' => false,
        'text' => false,
        'buttonText' => false,
        'footerText' => false
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
        'preHeader' => 'preHeader',
        'subject' => 'subject',
        'greeting' => 'greeting',
        'text' => 'text',
        'buttonText' => 'buttonText',
        'footerText' => 'footerText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'preHeader' => 'setPreHeader',
        'subject' => 'setSubject',
        'greeting' => 'setGreeting',
        'text' => 'setText',
        'buttonText' => 'setButtonText',
        'footerText' => 'setFooterText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'preHeader' => 'getPreHeader',
        'subject' => 'getSubject',
        'greeting' => 'getGreeting',
        'text' => 'getText',
        'buttonText' => 'getButtonText',
        'footerText' => 'getFooterText'
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
        $this->setIfExists('preHeader', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('greeting', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('buttonText', $data ?? [], null);
        $this->setIfExists('footerText', $data ?? [], null);
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

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 500)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['preHeader']) && (mb_strlen($this->container['preHeader']) > 500)) {
            $invalidProperties[] = "invalid value for 'preHeader', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 500)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['greeting']) && (mb_strlen($this->container['greeting']) > 1000)) {
            $invalidProperties[] = "invalid value for 'greeting', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 10000)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['buttonText']) && (mb_strlen($this->container['buttonText']) > 1000)) {
            $invalidProperties[] = "invalid value for 'buttonText', the character length must be smaller than or equal to 1000.";
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
        if ((mb_strlen($title) > 500)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ManagementServiceSetCustomVerifyEmailOTPMessageTextBody., must be smaller than or equal to 500.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets preHeader
     *
     * @return string|null
     */
    public function getPreHeader()
    {
        return $this->container['preHeader'];
    }

    /**
     * Sets preHeader
     *
     * @param string|null $preHeader preHeader
     *
     * @return self
     */
    public function setPreHeader($preHeader)
    {
        if (is_null($preHeader)) {
            throw new \InvalidArgumentException('non-nullable preHeader cannot be null');
        }
        if ((mb_strlen($preHeader) > 500)) {
            throw new \InvalidArgumentException('invalid length for $preHeader when calling ManagementServiceSetCustomVerifyEmailOTPMessageTextBody., must be smaller than or equal to 500.');
        }

        $this->container['preHeader'] = $preHeader;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        if ((mb_strlen($subject) > 500)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling ManagementServiceSetCustomVerifyEmailOTPMessageTextBody., must be smaller than or equal to 500.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets greeting
     *
     * @return string|null
     */
    public function getGreeting()
    {
        return $this->container['greeting'];
    }

    /**
     * Sets greeting
     *
     * @param string|null $greeting greeting
     *
     * @return self
     */
    public function setGreeting($greeting)
    {
        if (is_null($greeting)) {
            throw new \InvalidArgumentException('non-nullable greeting cannot be null');
        }
        if ((mb_strlen($greeting) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $greeting when calling ManagementServiceSetCustomVerifyEmailOTPMessageTextBody., must be smaller than or equal to 1000.');
        }

        $this->container['greeting'] = $greeting;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        if ((mb_strlen($text) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $text when calling ManagementServiceSetCustomVerifyEmailOTPMessageTextBody., must be smaller than or equal to 10000.');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets buttonText
     *
     * @return string|null
     */
    public function getButtonText()
    {
        return $this->container['buttonText'];
    }

    /**
     * Sets buttonText
     *
     * @param string|null $buttonText buttonText
     *
     * @return self
     */
    public function setButtonText($buttonText)
    {
        if (is_null($buttonText)) {
            throw new \InvalidArgumentException('non-nullable buttonText cannot be null');
        }
        if ((mb_strlen($buttonText) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $buttonText when calling ManagementServiceSetCustomVerifyEmailOTPMessageTextBody., must be smaller than or equal to 1000.');
        }

        $this->container['buttonText'] = $buttonText;

        return $this;
    }

    /**
     * Gets footerText
     *
     * @return string|null
     */
    public function getFooterText()
    {
        return $this->container['footerText'];
    }

    /**
     * Sets footerText
     *
     * @param string|null $footerText footerText
     *
     * @return self
     */
    public function setFooterText($footerText)
    {
        if (is_null($footerText)) {
            throw new \InvalidArgumentException('non-nullable footerText cannot be null');
        }
        $this->container['footerText'] = $footerText;

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


