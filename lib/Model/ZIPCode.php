<?php
/**
 * ZIPCode
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
 * The alpha version of the [https://geo.codes](https://geo.codes) API service. See API documentation [here](https://geo.codes/docs/api). 10,000 free queries per month.
 *
 * The version of the OpenAPI document: 1.0.0-alpha
 * Contact: help@geo.codes
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
 * ZIPCode Class Doc Comment
 *
 * @category Class
 * @package  GeoCodes
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZIPCode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZIPCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'formatted' => 'string',
        'plus_four' => 'int',
        'zip' => 'int'
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
        'plus_four' => null,
        'zip' => null
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
        'plus_four' => 'plus_four',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'formatted' => 'setFormatted',
        'plus_four' => 'setPlusFour',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'formatted' => 'getFormatted',
        'plus_four' => 'getPlusFour',
        'zip' => 'getZip'
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
        $this->container['plus_four'] = $data['plus_four'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
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
     * @return string|null
     */
    public function getFormatted()
    {
        return $this->container['formatted'];
    }

    /**
     * Sets formatted
     *
     * @param string|null $formatted A string with the formatted version of the ZIP code. This may include the +4 extension if available.
     *
     * @return self
     */
    public function setFormatted($formatted)
    {
        $this->container['formatted'] = $formatted;

        return $this;
    }

    /**
     * Gets plus_four
     *
     * @return int|null
     */
    public function getPlusFour()
    {
        return $this->container['plus_four'];
    }

    /**
     * Sets plus_four
     *
     * @param int|null $plus_four The optional plus-four code, if available. Note that this will omit leading zeroes, so if you need to display the ZIP Code, you need to either pad with zeroes or use the 'formatted' field. Provided as a convenience for developers that need the numeric form.
     *
     * @return self
     */
    public function setPlusFour($plus_four)
    {
        $this->container['plus_four'] = $plus_four;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return int
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param int $zip The main 5-digit ZIP Code. Note that this will omit leading zeroes, so if you need to display the ZIP Code, you need to either pad with zeroes or use the 'formatted' field. Provided as a convenience for developers that need the numeric form.
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

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

