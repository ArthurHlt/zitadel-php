<?php
/**
 * Zitadeladminv1AddSAMLProviderRequest
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
 * Zitadeladminv1AddSAMLProviderRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Zitadeladminv1AddSAMLProviderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'zitadeladminv1AddSAMLProviderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'metadataXml' => 'string',
        'metadataUrl' => 'string',
        'binding' => '\ArthurHlt\Zitadel\Model\Idpv1SAMLBinding',
        'withSignedRequest' => 'bool',
        'providerOptions' => '\ArthurHlt\Zitadel\Model\Idpv1Options',
        'nameIdFormat' => '\ArthurHlt\Zitadel\Model\Idpv1SAMLNameIDFormat',
        'transientMappingAttributeName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'metadataXml' => 'byte',
        'metadataUrl' => null,
        'binding' => null,
        'withSignedRequest' => null,
        'providerOptions' => null,
        'nameIdFormat' => null,
        'transientMappingAttributeName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'metadataXml' => false,
        'metadataUrl' => false,
        'binding' => false,
        'withSignedRequest' => false,
        'providerOptions' => false,
        'nameIdFormat' => false,
        'transientMappingAttributeName' => false
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
        'name' => 'name',
        'metadataXml' => 'metadataXml',
        'metadataUrl' => 'metadataUrl',
        'binding' => 'binding',
        'withSignedRequest' => 'withSignedRequest',
        'providerOptions' => 'providerOptions',
        'nameIdFormat' => 'nameIdFormat',
        'transientMappingAttributeName' => 'transientMappingAttributeName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'metadataXml' => 'setMetadataXml',
        'metadataUrl' => 'setMetadataUrl',
        'binding' => 'setBinding',
        'withSignedRequest' => 'setWithSignedRequest',
        'providerOptions' => 'setProviderOptions',
        'nameIdFormat' => 'setNameIdFormat',
        'transientMappingAttributeName' => 'setTransientMappingAttributeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'metadataXml' => 'getMetadataXml',
        'metadataUrl' => 'getMetadataUrl',
        'binding' => 'getBinding',
        'withSignedRequest' => 'getWithSignedRequest',
        'providerOptions' => 'getProviderOptions',
        'nameIdFormat' => 'getNameIdFormat',
        'transientMappingAttributeName' => 'getTransientMappingAttributeName'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('metadataXml', $data ?? [], null);
        $this->setIfExists('metadataUrl', $data ?? [], null);
        $this->setIfExists('binding', $data ?? [], null);
        $this->setIfExists('withSignedRequest', $data ?? [], null);
        $this->setIfExists('providerOptions', $data ?? [], null);
        $this->setIfExists('nameIdFormat', $data ?? [], null);
        $this->setIfExists('transientMappingAttributeName', $data ?? [], null);
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

        if (!is_null($this->container['metadataXml']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['metadataXml'])) {
            $invalidProperties[] = "invalid value for 'metadataXml', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets metadataXml
     *
     * @return string|null
     */
    public function getMetadataXml()
    {
        return $this->container['metadataXml'];
    }

    /**
     * Sets metadataXml
     *
     * @param string|null $metadataXml Metadata of the SAML identity provider.
     *
     * @return self
     */
    public function setMetadataXml($metadataXml)
    {
        if (is_null($metadataXml)) {
            throw new \InvalidArgumentException('non-nullable metadataXml cannot be null');
        }

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", ObjectSerializer::toString($metadataXml)))) {
            throw new \InvalidArgumentException("invalid value for \$metadataXml when calling Zitadeladminv1AddSAMLProviderRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['metadataXml'] = $metadataXml;

        return $this;
    }

    /**
     * Gets metadataUrl
     *
     * @return string|null
     */
    public function getMetadataUrl()
    {
        return $this->container['metadataUrl'];
    }

    /**
     * Sets metadataUrl
     *
     * @param string|null $metadataUrl Url to the metadata of the SAML identity provider.
     *
     * @return self
     */
    public function setMetadataUrl($metadataUrl)
    {
        if (is_null($metadataUrl)) {
            throw new \InvalidArgumentException('non-nullable metadataUrl cannot be null');
        }
        $this->container['metadataUrl'] = $metadataUrl;

        return $this;
    }

    /**
     * Gets binding
     *
     * @return \ArthurHlt\Zitadel\Model\Idpv1SAMLBinding|null
     */
    public function getBinding()
    {
        return $this->container['binding'];
    }

    /**
     * Sets binding
     *
     * @param \ArthurHlt\Zitadel\Model\Idpv1SAMLBinding|null $binding binding
     *
     * @return self
     */
    public function setBinding($binding)
    {
        if (is_null($binding)) {
            throw new \InvalidArgumentException('non-nullable binding cannot be null');
        }
        $this->container['binding'] = $binding;

        return $this;
    }

    /**
     * Gets withSignedRequest
     *
     * @return bool|null
     */
    public function getWithSignedRequest()
    {
        return $this->container['withSignedRequest'];
    }

    /**
     * Sets withSignedRequest
     *
     * @param bool|null $withSignedRequest Boolean which defines if the authentication requests are signed.
     *
     * @return self
     */
    public function setWithSignedRequest($withSignedRequest)
    {
        if (is_null($withSignedRequest)) {
            throw new \InvalidArgumentException('non-nullable withSignedRequest cannot be null');
        }
        $this->container['withSignedRequest'] = $withSignedRequest;

        return $this;
    }

    /**
     * Gets providerOptions
     *
     * @return \ArthurHlt\Zitadel\Model\Idpv1Options|null
     */
    public function getProviderOptions()
    {
        return $this->container['providerOptions'];
    }

    /**
     * Sets providerOptions
     *
     * @param \ArthurHlt\Zitadel\Model\Idpv1Options|null $providerOptions providerOptions
     *
     * @return self
     */
    public function setProviderOptions($providerOptions)
    {
        if (is_null($providerOptions)) {
            throw new \InvalidArgumentException('non-nullable providerOptions cannot be null');
        }
        $this->container['providerOptions'] = $providerOptions;

        return $this;
    }

    /**
     * Gets nameIdFormat
     *
     * @return \ArthurHlt\Zitadel\Model\Idpv1SAMLNameIDFormat|null
     */
    public function getNameIdFormat()
    {
        return $this->container['nameIdFormat'];
    }

    /**
     * Sets nameIdFormat
     *
     * @param \ArthurHlt\Zitadel\Model\Idpv1SAMLNameIDFormat|null $nameIdFormat nameIdFormat
     *
     * @return self
     */
    public function setNameIdFormat($nameIdFormat)
    {
        if (is_null($nameIdFormat)) {
            throw new \InvalidArgumentException('non-nullable nameIdFormat cannot be null');
        }
        $this->container['nameIdFormat'] = $nameIdFormat;

        return $this;
    }

    /**
     * Gets transientMappingAttributeName
     *
     * @return string|null
     */
    public function getTransientMappingAttributeName()
    {
        return $this->container['transientMappingAttributeName'];
    }

    /**
     * Sets transientMappingAttributeName
     *
     * @param string|null $transientMappingAttributeName Optionally specify the name of the attribute, which will be used to map the user in case the nameid-format returned is `urn:oasis:names:tc:SAML:2.0:nameid-format:transient`.
     *
     * @return self
     */
    public function setTransientMappingAttributeName($transientMappingAttributeName)
    {
        if (is_null($transientMappingAttributeName)) {
            throw new \InvalidArgumentException('non-nullable transientMappingAttributeName cannot be null');
        }
        $this->container['transientMappingAttributeName'] = $transientMappingAttributeName;

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


