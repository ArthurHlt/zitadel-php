<?php
/**
 * V1ImportDataRequest
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
 * V1ImportDataRequest Class Doc Comment
 *
 * @category Class
 * @package  ArthurHlt\Zitadel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1ImportDataRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'v1ImportDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dataOrgs' => '\ArthurHlt\Zitadel\Model\Zitadeladminv1ImportDataOrg',
        'dataOrgsv1' => '\ArthurHlt\Zitadel\Model\Zitadelv1v1ImportDataOrg',
        'dataOrgsLocal' => '\ArthurHlt\Zitadel\Model\ImportDataRequestLocalInput',
        'dataOrgsv1Local' => '\ArthurHlt\Zitadel\Model\ImportDataRequestLocalInput',
        'dataOrgsS3' => '\ArthurHlt\Zitadel\Model\ImportDataRequestS3Input',
        'dataOrgsv1S3' => '\ArthurHlt\Zitadel\Model\ImportDataRequestS3Input',
        'dataOrgsGcs' => '\ArthurHlt\Zitadel\Model\ImportDataRequestGCSInput',
        'dataOrgsv1Gcs' => '\ArthurHlt\Zitadel\Model\ImportDataRequestGCSInput',
        'timeout' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dataOrgs' => null,
        'dataOrgsv1' => null,
        'dataOrgsLocal' => null,
        'dataOrgsv1Local' => null,
        'dataOrgsS3' => null,
        'dataOrgsv1S3' => null,
        'dataOrgsGcs' => null,
        'dataOrgsv1Gcs' => null,
        'timeout' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dataOrgs' => false,
        'dataOrgsv1' => false,
        'dataOrgsLocal' => false,
        'dataOrgsv1Local' => false,
        'dataOrgsS3' => false,
        'dataOrgsv1S3' => false,
        'dataOrgsGcs' => false,
        'dataOrgsv1Gcs' => false,
        'timeout' => false
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
        'dataOrgs' => 'dataOrgs',
        'dataOrgsv1' => 'dataOrgsv1',
        'dataOrgsLocal' => 'dataOrgsLocal',
        'dataOrgsv1Local' => 'dataOrgsv1Local',
        'dataOrgsS3' => 'dataOrgsS3',
        'dataOrgsv1S3' => 'dataOrgsv1S3',
        'dataOrgsGcs' => 'dataOrgsGcs',
        'dataOrgsv1Gcs' => 'dataOrgsv1Gcs',
        'timeout' => 'timeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataOrgs' => 'setDataOrgs',
        'dataOrgsv1' => 'setDataOrgsv1',
        'dataOrgsLocal' => 'setDataOrgsLocal',
        'dataOrgsv1Local' => 'setDataOrgsv1Local',
        'dataOrgsS3' => 'setDataOrgsS3',
        'dataOrgsv1S3' => 'setDataOrgsv1S3',
        'dataOrgsGcs' => 'setDataOrgsGcs',
        'dataOrgsv1Gcs' => 'setDataOrgsv1Gcs',
        'timeout' => 'setTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataOrgs' => 'getDataOrgs',
        'dataOrgsv1' => 'getDataOrgsv1',
        'dataOrgsLocal' => 'getDataOrgsLocal',
        'dataOrgsv1Local' => 'getDataOrgsv1Local',
        'dataOrgsS3' => 'getDataOrgsS3',
        'dataOrgsv1S3' => 'getDataOrgsv1S3',
        'dataOrgsGcs' => 'getDataOrgsGcs',
        'dataOrgsv1Gcs' => 'getDataOrgsv1Gcs',
        'timeout' => 'getTimeout'
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
        $this->setIfExists('dataOrgs', $data ?? [], null);
        $this->setIfExists('dataOrgsv1', $data ?? [], null);
        $this->setIfExists('dataOrgsLocal', $data ?? [], null);
        $this->setIfExists('dataOrgsv1Local', $data ?? [], null);
        $this->setIfExists('dataOrgsS3', $data ?? [], null);
        $this->setIfExists('dataOrgsv1S3', $data ?? [], null);
        $this->setIfExists('dataOrgsGcs', $data ?? [], null);
        $this->setIfExists('dataOrgsv1Gcs', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
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
     * Gets dataOrgs
     *
     * @return \ArthurHlt\Zitadel\Model\Zitadeladminv1ImportDataOrg|null
     */
    public function getDataOrgs()
    {
        return $this->container['dataOrgs'];
    }

    /**
     * Sets dataOrgs
     *
     * @param \ArthurHlt\Zitadel\Model\Zitadeladminv1ImportDataOrg|null $dataOrgs dataOrgs
     *
     * @return self
     */
    public function setDataOrgs($dataOrgs)
    {
        if (is_null($dataOrgs)) {
            throw new \InvalidArgumentException('non-nullable dataOrgs cannot be null');
        }
        $this->container['dataOrgs'] = $dataOrgs;

        return $this;
    }

    /**
     * Gets dataOrgsv1
     *
     * @return \ArthurHlt\Zitadel\Model\Zitadelv1v1ImportDataOrg|null
     */
    public function getDataOrgsv1()
    {
        return $this->container['dataOrgsv1'];
    }

    /**
     * Sets dataOrgsv1
     *
     * @param \ArthurHlt\Zitadel\Model\Zitadelv1v1ImportDataOrg|null $dataOrgsv1 dataOrgsv1
     *
     * @return self
     */
    public function setDataOrgsv1($dataOrgsv1)
    {
        if (is_null($dataOrgsv1)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsv1 cannot be null');
        }
        $this->container['dataOrgsv1'] = $dataOrgsv1;

        return $this;
    }

    /**
     * Gets dataOrgsLocal
     *
     * @return \ArthurHlt\Zitadel\Model\ImportDataRequestLocalInput|null
     */
    public function getDataOrgsLocal()
    {
        return $this->container['dataOrgsLocal'];
    }

    /**
     * Sets dataOrgsLocal
     *
     * @param \ArthurHlt\Zitadel\Model\ImportDataRequestLocalInput|null $dataOrgsLocal dataOrgsLocal
     *
     * @return self
     */
    public function setDataOrgsLocal($dataOrgsLocal)
    {
        if (is_null($dataOrgsLocal)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsLocal cannot be null');
        }
        $this->container['dataOrgsLocal'] = $dataOrgsLocal;

        return $this;
    }

    /**
     * Gets dataOrgsv1Local
     *
     * @return \ArthurHlt\Zitadel\Model\ImportDataRequestLocalInput|null
     */
    public function getDataOrgsv1Local()
    {
        return $this->container['dataOrgsv1Local'];
    }

    /**
     * Sets dataOrgsv1Local
     *
     * @param \ArthurHlt\Zitadel\Model\ImportDataRequestLocalInput|null $dataOrgsv1Local dataOrgsv1Local
     *
     * @return self
     */
    public function setDataOrgsv1Local($dataOrgsv1Local)
    {
        if (is_null($dataOrgsv1Local)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsv1Local cannot be null');
        }
        $this->container['dataOrgsv1Local'] = $dataOrgsv1Local;

        return $this;
    }

    /**
     * Gets dataOrgsS3
     *
     * @return \ArthurHlt\Zitadel\Model\ImportDataRequestS3Input|null
     */
    public function getDataOrgsS3()
    {
        return $this->container['dataOrgsS3'];
    }

    /**
     * Sets dataOrgsS3
     *
     * @param \ArthurHlt\Zitadel\Model\ImportDataRequestS3Input|null $dataOrgsS3 dataOrgsS3
     *
     * @return self
     */
    public function setDataOrgsS3($dataOrgsS3)
    {
        if (is_null($dataOrgsS3)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsS3 cannot be null');
        }
        $this->container['dataOrgsS3'] = $dataOrgsS3;

        return $this;
    }

    /**
     * Gets dataOrgsv1S3
     *
     * @return \ArthurHlt\Zitadel\Model\ImportDataRequestS3Input|null
     */
    public function getDataOrgsv1S3()
    {
        return $this->container['dataOrgsv1S3'];
    }

    /**
     * Sets dataOrgsv1S3
     *
     * @param \ArthurHlt\Zitadel\Model\ImportDataRequestS3Input|null $dataOrgsv1S3 dataOrgsv1S3
     *
     * @return self
     */
    public function setDataOrgsv1S3($dataOrgsv1S3)
    {
        if (is_null($dataOrgsv1S3)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsv1S3 cannot be null');
        }
        $this->container['dataOrgsv1S3'] = $dataOrgsv1S3;

        return $this;
    }

    /**
     * Gets dataOrgsGcs
     *
     * @return \ArthurHlt\Zitadel\Model\ImportDataRequestGCSInput|null
     */
    public function getDataOrgsGcs()
    {
        return $this->container['dataOrgsGcs'];
    }

    /**
     * Sets dataOrgsGcs
     *
     * @param \ArthurHlt\Zitadel\Model\ImportDataRequestGCSInput|null $dataOrgsGcs dataOrgsGcs
     *
     * @return self
     */
    public function setDataOrgsGcs($dataOrgsGcs)
    {
        if (is_null($dataOrgsGcs)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsGcs cannot be null');
        }
        $this->container['dataOrgsGcs'] = $dataOrgsGcs;

        return $this;
    }

    /**
     * Gets dataOrgsv1Gcs
     *
     * @return \ArthurHlt\Zitadel\Model\ImportDataRequestGCSInput|null
     */
    public function getDataOrgsv1Gcs()
    {
        return $this->container['dataOrgsv1Gcs'];
    }

    /**
     * Sets dataOrgsv1Gcs
     *
     * @param \ArthurHlt\Zitadel\Model\ImportDataRequestGCSInput|null $dataOrgsv1Gcs dataOrgsv1Gcs
     *
     * @return self
     */
    public function setDataOrgsv1Gcs($dataOrgsv1Gcs)
    {
        if (is_null($dataOrgsv1Gcs)) {
            throw new \InvalidArgumentException('non-nullable dataOrgsv1Gcs cannot be null');
        }
        $this->container['dataOrgsv1Gcs'] = $dataOrgsv1Gcs;

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


