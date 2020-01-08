<?php
/**
 * JsonNode
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\OAuth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OAuthService
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\OAuth\Model;

use \ArrayAccess;
use \HubSpot\Client\OAuth\ObjectSerializer;

/**
 * JsonNode Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\OAuth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JsonNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JsonNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'array' => 'bool',
        'null' => 'bool',
        'number' => 'bool',
        'value_node' => 'bool',
        'container_node' => 'bool',
        'missing_node' => 'bool',
        'object' => 'bool',
        'pojo' => 'bool',
        'integral_number' => 'bool',
        'floating_point_number' => 'bool',
        'short' => 'bool',
        'int' => 'bool',
        'long' => 'bool',
        'double' => 'bool',
        'big_decimal' => 'bool',
        'big_integer' => 'bool',
        'textual' => 'bool',
        'boolean' => 'bool',
        'binary' => 'bool',
        'float' => 'bool',
        'node_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'array' => null,
        'null' => null,
        'number' => null,
        'value_node' => null,
        'container_node' => null,
        'missing_node' => null,
        'object' => null,
        'pojo' => null,
        'integral_number' => null,
        'floating_point_number' => null,
        'short' => null,
        'int' => null,
        'long' => null,
        'double' => null,
        'big_decimal' => null,
        'big_integer' => null,
        'textual' => null,
        'boolean' => null,
        'binary' => null,
        'float' => null,
        'node_type' => null
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
        'array' => 'array',
        'null' => 'null',
        'number' => 'number',
        'value_node' => 'valueNode',
        'container_node' => 'containerNode',
        'missing_node' => 'missingNode',
        'object' => 'object',
        'pojo' => 'pojo',
        'integral_number' => 'integralNumber',
        'floating_point_number' => 'floatingPointNumber',
        'short' => 'short',
        'int' => 'int',
        'long' => 'long',
        'double' => 'double',
        'big_decimal' => 'bigDecimal',
        'big_integer' => 'bigInteger',
        'textual' => 'textual',
        'boolean' => 'boolean',
        'binary' => 'binary',
        'float' => 'float',
        'node_type' => 'nodeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'array' => 'setArray',
        'null' => 'setNull',
        'number' => 'setNumber',
        'value_node' => 'setValueNode',
        'container_node' => 'setContainerNode',
        'missing_node' => 'setMissingNode',
        'object' => 'setObject',
        'pojo' => 'setPojo',
        'integral_number' => 'setIntegralNumber',
        'floating_point_number' => 'setFloatingPointNumber',
        'short' => 'setShort',
        'int' => 'setInt',
        'long' => 'setLong',
        'double' => 'setDouble',
        'big_decimal' => 'setBigDecimal',
        'big_integer' => 'setBigInteger',
        'textual' => 'setTextual',
        'boolean' => 'setBoolean',
        'binary' => 'setBinary',
        'float' => 'setFloat',
        'node_type' => 'setNodeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'array' => 'getArray',
        'null' => 'getNull',
        'number' => 'getNumber',
        'value_node' => 'getValueNode',
        'container_node' => 'getContainerNode',
        'missing_node' => 'getMissingNode',
        'object' => 'getObject',
        'pojo' => 'getPojo',
        'integral_number' => 'getIntegralNumber',
        'floating_point_number' => 'getFloatingPointNumber',
        'short' => 'getShort',
        'int' => 'getInt',
        'long' => 'getLong',
        'double' => 'getDouble',
        'big_decimal' => 'getBigDecimal',
        'big_integer' => 'getBigInteger',
        'textual' => 'getTextual',
        'boolean' => 'getBoolean',
        'binary' => 'getBinary',
        'float' => 'getFloat',
        'node_type' => 'getNodeType'
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

    const NODE_TYPE__ARRAY = 'ARRAY';
    const NODE_TYPE_BINARY = 'BINARY';
    const NODE_TYPE_BOOLEAN = 'BOOLEAN';
    const NODE_TYPE_MISSING = 'MISSING';
    const NODE_TYPE_NULL = 'NULL';
    const NODE_TYPE_NUMBER = 'NUMBER';
    const NODE_TYPE_OBJECT = 'OBJECT';
    const NODE_TYPE_POJO = 'POJO';
    const NODE_TYPE_STRING = 'STRING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE__ARRAY,
            self::NODE_TYPE_BINARY,
            self::NODE_TYPE_BOOLEAN,
            self::NODE_TYPE_MISSING,
            self::NODE_TYPE_NULL,
            self::NODE_TYPE_NUMBER,
            self::NODE_TYPE_OBJECT,
            self::NODE_TYPE_POJO,
            self::NODE_TYPE_STRING,
        ];
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
        $this->container['array'] = isset($data['array']) ? $data['array'] : null;
        $this->container['null'] = isset($data['null']) ? $data['null'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['value_node'] = isset($data['value_node']) ? $data['value_node'] : null;
        $this->container['container_node'] = isset($data['container_node']) ? $data['container_node'] : null;
        $this->container['missing_node'] = isset($data['missing_node']) ? $data['missing_node'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['pojo'] = isset($data['pojo']) ? $data['pojo'] : null;
        $this->container['integral_number'] = isset($data['integral_number']) ? $data['integral_number'] : null;
        $this->container['floating_point_number'] = isset($data['floating_point_number']) ? $data['floating_point_number'] : null;
        $this->container['short'] = isset($data['short']) ? $data['short'] : null;
        $this->container['int'] = isset($data['int']) ? $data['int'] : null;
        $this->container['long'] = isset($data['long']) ? $data['long'] : null;
        $this->container['double'] = isset($data['double']) ? $data['double'] : null;
        $this->container['big_decimal'] = isset($data['big_decimal']) ? $data['big_decimal'] : null;
        $this->container['big_integer'] = isset($data['big_integer']) ? $data['big_integer'] : null;
        $this->container['textual'] = isset($data['textual']) ? $data['textual'] : null;
        $this->container['boolean'] = isset($data['boolean']) ? $data['boolean'] : null;
        $this->container['binary'] = isset($data['binary']) ? $data['binary'] : null;
        $this->container['float'] = isset($data['float']) ? $data['float'] : null;
        $this->container['node_type'] = isset($data['node_type']) ? $data['node_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($this->container['node_type']) && !in_array($this->container['node_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'node_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets array
     *
     * @return bool|null
     */
    public function getArray()
    {
        return $this->container['array'];
    }

    /**
     * Sets array
     *
     * @param bool|null $array array
     *
     * @return $this
     */
    public function setArray($array)
    {
        $this->container['array'] = $array;

        return $this;
    }

    /**
     * Gets null
     *
     * @return bool|null
     */
    public function getNull()
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param bool|null $null null
     *
     * @return $this
     */
    public function setNull($null)
    {
        $this->container['null'] = $null;

        return $this;
    }

    /**
     * Gets number
     *
     * @return bool|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param bool|null $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets value_node
     *
     * @return bool|null
     */
    public function getValueNode()
    {
        return $this->container['value_node'];
    }

    /**
     * Sets value_node
     *
     * @param bool|null $value_node value_node
     *
     * @return $this
     */
    public function setValueNode($value_node)
    {
        $this->container['value_node'] = $value_node;

        return $this;
    }

    /**
     * Gets container_node
     *
     * @return bool|null
     */
    public function getContainerNode()
    {
        return $this->container['container_node'];
    }

    /**
     * Sets container_node
     *
     * @param bool|null $container_node container_node
     *
     * @return $this
     */
    public function setContainerNode($container_node)
    {
        $this->container['container_node'] = $container_node;

        return $this;
    }

    /**
     * Gets missing_node
     *
     * @return bool|null
     */
    public function getMissingNode()
    {
        return $this->container['missing_node'];
    }

    /**
     * Sets missing_node
     *
     * @param bool|null $missing_node missing_node
     *
     * @return $this
     */
    public function setMissingNode($missing_node)
    {
        $this->container['missing_node'] = $missing_node;

        return $this;
    }

    /**
     * Gets object
     *
     * @return bool|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param bool|null $object object
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets pojo
     *
     * @return bool|null
     */
    public function getPojo()
    {
        return $this->container['pojo'];
    }

    /**
     * Sets pojo
     *
     * @param bool|null $pojo pojo
     *
     * @return $this
     */
    public function setPojo($pojo)
    {
        $this->container['pojo'] = $pojo;

        return $this;
    }

    /**
     * Gets integral_number
     *
     * @return bool|null
     */
    public function getIntegralNumber()
    {
        return $this->container['integral_number'];
    }

    /**
     * Sets integral_number
     *
     * @param bool|null $integral_number integral_number
     *
     * @return $this
     */
    public function setIntegralNumber($integral_number)
    {
        $this->container['integral_number'] = $integral_number;

        return $this;
    }

    /**
     * Gets floating_point_number
     *
     * @return bool|null
     */
    public function getFloatingPointNumber()
    {
        return $this->container['floating_point_number'];
    }

    /**
     * Sets floating_point_number
     *
     * @param bool|null $floating_point_number floating_point_number
     *
     * @return $this
     */
    public function setFloatingPointNumber($floating_point_number)
    {
        $this->container['floating_point_number'] = $floating_point_number;

        return $this;
    }

    /**
     * Gets short
     *
     * @return bool|null
     */
    public function getShort()
    {
        return $this->container['short'];
    }

    /**
     * Sets short
     *
     * @param bool|null $short short
     *
     * @return $this
     */
    public function setShort($short)
    {
        $this->container['short'] = $short;

        return $this;
    }

    /**
     * Gets int
     *
     * @return bool|null
     */
    public function getInt()
    {
        return $this->container['int'];
    }

    /**
     * Sets int
     *
     * @param bool|null $int int
     *
     * @return $this
     */
    public function setInt($int)
    {
        $this->container['int'] = $int;

        return $this;
    }

    /**
     * Gets long
     *
     * @return bool|null
     */
    public function getLong()
    {
        return $this->container['long'];
    }

    /**
     * Sets long
     *
     * @param bool|null $long long
     *
     * @return $this
     */
    public function setLong($long)
    {
        $this->container['long'] = $long;

        return $this;
    }

    /**
     * Gets double
     *
     * @return bool|null
     */
    public function getDouble()
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param bool|null $double double
     *
     * @return $this
     */
    public function setDouble($double)
    {
        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets big_decimal
     *
     * @return bool|null
     */
    public function getBigDecimal()
    {
        return $this->container['big_decimal'];
    }

    /**
     * Sets big_decimal
     *
     * @param bool|null $big_decimal big_decimal
     *
     * @return $this
     */
    public function setBigDecimal($big_decimal)
    {
        $this->container['big_decimal'] = $big_decimal;

        return $this;
    }

    /**
     * Gets big_integer
     *
     * @return bool|null
     */
    public function getBigInteger()
    {
        return $this->container['big_integer'];
    }

    /**
     * Sets big_integer
     *
     * @param bool|null $big_integer big_integer
     *
     * @return $this
     */
    public function setBigInteger($big_integer)
    {
        $this->container['big_integer'] = $big_integer;

        return $this;
    }

    /**
     * Gets textual
     *
     * @return bool|null
     */
    public function getTextual()
    {
        return $this->container['textual'];
    }

    /**
     * Sets textual
     *
     * @param bool|null $textual textual
     *
     * @return $this
     */
    public function setTextual($textual)
    {
        $this->container['textual'] = $textual;

        return $this;
    }

    /**
     * Gets boolean
     *
     * @return bool|null
     */
    public function getBoolean()
    {
        return $this->container['boolean'];
    }

    /**
     * Sets boolean
     *
     * @param bool|null $boolean boolean
     *
     * @return $this
     */
    public function setBoolean($boolean)
    {
        $this->container['boolean'] = $boolean;

        return $this;
    }

    /**
     * Gets binary
     *
     * @return bool|null
     */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
     * Sets binary
     *
     * @param bool|null $binary binary
     *
     * @return $this
     */
    public function setBinary($binary)
    {
        $this->container['binary'] = $binary;

        return $this;
    }

    /**
     * Gets float
     *
     * @return bool|null
     */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
     * Sets float
     *
     * @param bool|null $float float
     *
     * @return $this
     */
    public function setFloat($float)
    {
        $this->container['float'] = $float;

        return $this;
    }

    /**
     * Gets node_type
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->container['node_type'];
    }

    /**
     * Sets node_type
     *
     * @param string|null $node_type node_type
     *
     * @return $this
     */
    public function setNodeType($node_type)
    {
        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($node_type) && !in_array($node_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'node_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['node_type'] = $node_type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}


