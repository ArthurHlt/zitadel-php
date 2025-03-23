<?php
/**
 * V1AddCustomLabelPolicyRequest
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
 * V1AddCustomLabelPolicyRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1AddCustomLabelPolicyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1AddCustomLabelPolicyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primaryColor' => 'string',
        'hideLoginNameSuffix' => 'bool',
        'warnColor' => 'string',
        'backgroundColor' => 'string',
        'fontColor' => 'string',
        'primaryColorDark' => 'string',
        'backgroundColorDark' => 'string',
        'warnColorDark' => 'string',
        'fontColorDark' => 'string',
        'disableWatermark' => 'bool',
        'themeMode' => '\ArthurHlt\Zitadel\Model\Policyv1ThemeMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primaryColor' => null,
        'hideLoginNameSuffix' => null,
        'warnColor' => null,
        'backgroundColor' => null,
        'fontColor' => null,
        'primaryColorDark' => null,
        'backgroundColorDark' => null,
        'warnColorDark' => null,
        'fontColorDark' => null,
        'disableWatermark' => null,
        'themeMode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'primaryColor' => false,
        'hideLoginNameSuffix' => false,
        'warnColor' => false,
        'backgroundColor' => false,
        'fontColor' => false,
        'primaryColorDark' => false,
        'backgroundColorDark' => false,
        'warnColorDark' => false,
        'fontColorDark' => false,
        'disableWatermark' => false,
        'themeMode' => false
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
        'primaryColor' => 'primaryColor',
        'hideLoginNameSuffix' => 'hideLoginNameSuffix',
        'warnColor' => 'warnColor',
        'backgroundColor' => 'backgroundColor',
        'fontColor' => 'fontColor',
        'primaryColorDark' => 'primaryColorDark',
        'backgroundColorDark' => 'backgroundColorDark',
        'warnColorDark' => 'warnColorDark',
        'fontColorDark' => 'fontColorDark',
        'disableWatermark' => 'disableWatermark',
        'themeMode' => 'themeMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primaryColor' => 'setPrimaryColor',
        'hideLoginNameSuffix' => 'setHideLoginNameSuffix',
        'warnColor' => 'setWarnColor',
        'backgroundColor' => 'setBackgroundColor',
        'fontColor' => 'setFontColor',
        'primaryColorDark' => 'setPrimaryColorDark',
        'backgroundColorDark' => 'setBackgroundColorDark',
        'warnColorDark' => 'setWarnColorDark',
        'fontColorDark' => 'setFontColorDark',
        'disableWatermark' => 'setDisableWatermark',
        'themeMode' => 'setThemeMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primaryColor' => 'getPrimaryColor',
        'hideLoginNameSuffix' => 'getHideLoginNameSuffix',
        'warnColor' => 'getWarnColor',
        'backgroundColor' => 'getBackgroundColor',
        'fontColor' => 'getFontColor',
        'primaryColorDark' => 'getPrimaryColorDark',
        'backgroundColorDark' => 'getBackgroundColorDark',
        'warnColorDark' => 'getWarnColorDark',
        'fontColorDark' => 'getFontColorDark',
        'disableWatermark' => 'getDisableWatermark',
        'themeMode' => 'getThemeMode'
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
        $this->setIfExists('primaryColor', $data ?? [], null);
        $this->setIfExists('hideLoginNameSuffix', $data ?? [], null);
        $this->setIfExists('warnColor', $data ?? [], null);
        $this->setIfExists('backgroundColor', $data ?? [], null);
        $this->setIfExists('fontColor', $data ?? [], null);
        $this->setIfExists('primaryColorDark', $data ?? [], null);
        $this->setIfExists('backgroundColorDark', $data ?? [], null);
        $this->setIfExists('warnColorDark', $data ?? [], null);
        $this->setIfExists('fontColorDark', $data ?? [], null);
        $this->setIfExists('disableWatermark', $data ?? [], null);
        $this->setIfExists('themeMode', $data ?? [], null);
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

        if (!is_null($this->container['primaryColor']) && (mb_strlen($this->container['primaryColor']) > 50)) {
            $invalidProperties[] = "invalid value for 'primaryColor', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['warnColor']) && (mb_strlen($this->container['warnColor']) > 50)) {
            $invalidProperties[] = "invalid value for 'warnColor', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['backgroundColor']) && (mb_strlen($this->container['backgroundColor']) > 50)) {
            $invalidProperties[] = "invalid value for 'backgroundColor', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) > 50)) {
            $invalidProperties[] = "invalid value for 'fontColor', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['primaryColorDark']) && (mb_strlen($this->container['primaryColorDark']) > 50)) {
            $invalidProperties[] = "invalid value for 'primaryColorDark', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['backgroundColorDark']) && (mb_strlen($this->container['backgroundColorDark']) > 50)) {
            $invalidProperties[] = "invalid value for 'backgroundColorDark', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['warnColorDark']) && (mb_strlen($this->container['warnColorDark']) > 50)) {
            $invalidProperties[] = "invalid value for 'warnColorDark', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['fontColorDark']) && (mb_strlen($this->container['fontColorDark']) > 50)) {
            $invalidProperties[] = "invalid value for 'fontColorDark', the character length must be smaller than or equal to 50.";
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
     * Gets primaryColor
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primaryColor'];
    }

    /**
     * Sets primaryColor
     *
     * @param string|null $primaryColor Represents a color scheme
     *
     * @return self
     */
    public function setPrimaryColor($primaryColor)
    {
        if (is_null($primaryColor)) {
            throw new \InvalidArgumentException('non-nullable primaryColor cannot be null');
        }
        if ((mb_strlen($primaryColor) > 50)) {
            throw new \InvalidArgumentException('invalid length for $primaryColor when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['primaryColor'] = $primaryColor;

        return $this;
    }

    /**
     * Gets hideLoginNameSuffix
     *
     * @return bool|null
     */
    public function getHideLoginNameSuffix()
    {
        return $this->container['hideLoginNameSuffix'];
    }

    /**
     * Sets hideLoginNameSuffix
     *
     * @param bool|null $hideLoginNameSuffix hides the org suffix on the login form if the scope \"urn:zitadel:iam:org:domain:primary:{domainname}\" is set
     *
     * @return self
     */
    public function setHideLoginNameSuffix($hideLoginNameSuffix)
    {
        if (is_null($hideLoginNameSuffix)) {
            throw new \InvalidArgumentException('non-nullable hideLoginNameSuffix cannot be null');
        }
        $this->container['hideLoginNameSuffix'] = $hideLoginNameSuffix;

        return $this;
    }

    /**
     * Gets warnColor
     *
     * @return string|null
     */
    public function getWarnColor()
    {
        return $this->container['warnColor'];
    }

    /**
     * Sets warnColor
     *
     * @param string|null $warnColor hex value for warn color
     *
     * @return self
     */
    public function setWarnColor($warnColor)
    {
        if (is_null($warnColor)) {
            throw new \InvalidArgumentException('non-nullable warnColor cannot be null');
        }
        if ((mb_strlen($warnColor) > 50)) {
            throw new \InvalidArgumentException('invalid length for $warnColor when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['warnColor'] = $warnColor;

        return $this;
    }

    /**
     * Gets backgroundColor
     *
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->container['backgroundColor'];
    }

    /**
     * Sets backgroundColor
     *
     * @param string|null $backgroundColor hex value for background color
     *
     * @return self
     */
    public function setBackgroundColor($backgroundColor)
    {
        if (is_null($backgroundColor)) {
            throw new \InvalidArgumentException('non-nullable backgroundColor cannot be null');
        }
        if ((mb_strlen($backgroundColor) > 50)) {
            throw new \InvalidArgumentException('invalid length for $backgroundColor when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['backgroundColor'] = $backgroundColor;

        return $this;
    }

    /**
     * Gets fontColor
     *
     * @return string|null
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
     * Sets fontColor
     *
     * @param string|null $fontColor hex value for font color
     *
     * @return self
     */
    public function setFontColor($fontColor)
    {
        if (is_null($fontColor)) {
            throw new \InvalidArgumentException('non-nullable fontColor cannot be null');
        }
        if ((mb_strlen($fontColor) > 50)) {
            throw new \InvalidArgumentException('invalid length for $fontColor when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /**
     * Gets primaryColorDark
     *
     * @return string|null
     */
    public function getPrimaryColorDark()
    {
        return $this->container['primaryColorDark'];
    }

    /**
     * Sets primaryColorDark
     *
     * @param string|null $primaryColorDark hex value for the primary color dark theme
     *
     * @return self
     */
    public function setPrimaryColorDark($primaryColorDark)
    {
        if (is_null($primaryColorDark)) {
            throw new \InvalidArgumentException('non-nullable primaryColorDark cannot be null');
        }
        if ((mb_strlen($primaryColorDark) > 50)) {
            throw new \InvalidArgumentException('invalid length for $primaryColorDark when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['primaryColorDark'] = $primaryColorDark;

        return $this;
    }

    /**
     * Gets backgroundColorDark
     *
     * @return string|null
     */
    public function getBackgroundColorDark()
    {
        return $this->container['backgroundColorDark'];
    }

    /**
     * Sets backgroundColorDark
     *
     * @param string|null $backgroundColorDark hex value for background color dark theme
     *
     * @return self
     */
    public function setBackgroundColorDark($backgroundColorDark)
    {
        if (is_null($backgroundColorDark)) {
            throw new \InvalidArgumentException('non-nullable backgroundColorDark cannot be null');
        }
        if ((mb_strlen($backgroundColorDark) > 50)) {
            throw new \InvalidArgumentException('invalid length for $backgroundColorDark when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['backgroundColorDark'] = $backgroundColorDark;

        return $this;
    }

    /**
     * Gets warnColorDark
     *
     * @return string|null
     */
    public function getWarnColorDark()
    {
        return $this->container['warnColorDark'];
    }

    /**
     * Sets warnColorDark
     *
     * @param string|null $warnColorDark hex value for warning color dark theme
     *
     * @return self
     */
    public function setWarnColorDark($warnColorDark)
    {
        if (is_null($warnColorDark)) {
            throw new \InvalidArgumentException('non-nullable warnColorDark cannot be null');
        }
        if ((mb_strlen($warnColorDark) > 50)) {
            throw new \InvalidArgumentException('invalid length for $warnColorDark when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['warnColorDark'] = $warnColorDark;

        return $this;
    }

    /**
     * Gets fontColorDark
     *
     * @return string|null
     */
    public function getFontColorDark()
    {
        return $this->container['fontColorDark'];
    }

    /**
     * Sets fontColorDark
     *
     * @param string|null $fontColorDark hex value for font color dark theme
     *
     * @return self
     */
    public function setFontColorDark($fontColorDark)
    {
        if (is_null($fontColorDark)) {
            throw new \InvalidArgumentException('non-nullable fontColorDark cannot be null');
        }
        if ((mb_strlen($fontColorDark) > 50)) {
            throw new \InvalidArgumentException('invalid length for $fontColorDark when calling V1AddCustomLabelPolicyRequest., must be smaller than or equal to 50.');
        }

        $this->container['fontColorDark'] = $fontColorDark;

        return $this;
    }

    /**
     * Gets disableWatermark
     *
     * @return bool|null
     */
    public function getDisableWatermark()
    {
        return $this->container['disableWatermark'];
    }

    /**
     * Sets disableWatermark
     *
     * @param bool|null $disableWatermark disableWatermark
     *
     * @return self
     */
    public function setDisableWatermark($disableWatermark)
    {
        if (is_null($disableWatermark)) {
            throw new \InvalidArgumentException('non-nullable disableWatermark cannot be null');
        }
        $this->container['disableWatermark'] = $disableWatermark;

        return $this;
    }

    /**
     * Gets themeMode
     *
     * @return \ArthurHlt\Zitadel\Model\Policyv1ThemeMode|null
     */
    public function getThemeMode()
    {
        return $this->container['themeMode'];
    }

    /**
     * Sets themeMode
     *
     * @param \ArthurHlt\Zitadel\Model\Policyv1ThemeMode|null $themeMode themeMode
     *
     * @return self
     */
    public function setThemeMode($themeMode)
    {
        if (is_null($themeMode)) {
            throw new \InvalidArgumentException('non-nullable themeMode cannot be null');
        }
        $this->container['themeMode'] = $themeMode;

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


