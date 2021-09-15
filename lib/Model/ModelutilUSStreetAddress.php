<?php
/**
 * ModelutilUSStreetAddress
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  GeoCodes
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * geo.codes
 *
 * The alpha version of the https://geo.codes API service. 10,000 free queries per month.
 *
 * The version of the OpenAPI document: 1.0.0-alpha
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeoCodes\Model;

use \ArrayAccess;
use \GeoCodes\ObjectSerializer;

/**
 * ModelutilUSStreetAddress Class Doc Comment
 *
 * @category Class
 * @description The structured street address parsed from the input.
 * @package  GeoCodes
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ModelutilUSStreetAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModelutilUSStreetAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'formatted' => 'string',
        'number' => 'string',
        'postdirectional' => 'string',
        'predirectional' => 'string',
        'street_name' => 'string',
        'type' => 'string',
        'unit_designator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'formatted' => null,
        'number' => null,
        'postdirectional' => null,
        'predirectional' => null,
        'street_name' => null,
        'type' => null,
        'unit_designator' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'formatted' => 'formatted',
        'number' => 'number',
        'postdirectional' => 'postdirectional',
        'predirectional' => 'predirectional',
        'street_name' => 'street_name',
        'type' => 'type',
        'unit_designator' => 'unit_designator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'formatted' => 'setFormatted',
        'number' => 'setNumber',
        'postdirectional' => 'setPostdirectional',
        'predirectional' => 'setPredirectional',
        'street_name' => 'setStreetName',
        'type' => 'setType',
        'unit_designator' => 'setUnitDesignator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'formatted' => 'getFormatted',
        'number' => 'getNumber',
        'postdirectional' => 'getPostdirectional',
        'predirectional' => 'getPredirectional',
        'street_name' => 'getStreetName',
        'type' => 'getType',
        'unit_designator' => 'getUnitDesignator'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['formatted'] = $data['formatted'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['postdirectional'] = $data['postdirectional'] ?? null;
        $this->container['predirectional'] = $data['predirectional'] ?? null;
        $this->container['street_name'] = $data['street_name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['unit_designator'] = $data['unit_designator'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['formatted'] === null) {
            $invalidProperties[] = "'formatted' can't be null";
        }
        if ($this->container['street_name'] === null) {
            $invalidProperties[] = "'street_name' can't be null";
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
     * Gets formatted
     *
     * @return string
     */
    public function getFormatted()
    {
        return $this->container['formatted'];
    }

    /**
     * Sets formatted
     *
     * @param string $formatted The formatted version of the street address.
     *
     * @return self
     */
    public function setFormatted($formatted)
    {
        $this->container['formatted'] = $formatted;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The number of the street address. It is important that this is stored in a string. Many valid house numbers cannot be represented by just a number, in which case the alphanumeric_number field will be populated: Some fake examples include '1/2 Smith Street', '41-13 39th Place', 'E400N200 Pike Street'. Note that the alpha version of the API only includes numeric addresses, but our stable release will handle this
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets postdirectional
     *
     * @return string|null
     */
    public function getPostdirectional()
    {
        return $this->container['postdirectional'];
    }

    /**
     * Sets postdirectional
     *
     * @param string|null $postdirectional A directional (N, E, S, W, etc) that appears after the street name. For example, 'W' is the postdirectional in '1 Main Street W'.
     *
     * @return self
     */
    public function setPostdirectional($postdirectional)
    {
        $this->container['postdirectional'] = $postdirectional;

        return $this;
    }

    /**
     * Gets predirectional
     *
     * @return string|null
     */
    public function getPredirectional()
    {
        return $this->container['predirectional'];
    }

    /**
     * Sets predirectional
     *
     * @param string|null $predirectional A directional (N, E, S, W, etc) that appears before the street name. For example, 'E' is the predirectional in '1 E Main Street'.
     *
     * @return self
     */
    public function setPredirectional($predirectional)
    {
        $this->container['predirectional'] = $predirectional;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name The street name of the address. This omits the road type. So the address '101 Main Street' would have 'Main' in the StreetName field.
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the street: Rd, St, Ave, etc. So the address '101 Main Street' would be 'St'. May be omitted for some roads. For example, 'Broadway' and 'The Embarcadero' are valid road names that do not have road types.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unit_designator
     *
     * @return string|null
     */
    public function getUnitDesignator()
    {
        return $this->container['unit_designator'];
    }

    /**
     * Sets unit_designator
     *
     * @param string|null $unit_designator A unit designator in an address, if one is present. For example, 'Apt 3' is the unit designator in '1 Main Street Apt 3'. This may combine more than one designator into the same field: 'Building 2 Floor 1'.
     *
     * @return self
     */
    public function setUnitDesignator($unit_designator)
    {
        $this->container['unit_designator'] = $unit_designator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

