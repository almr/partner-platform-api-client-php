<?php
/**
 * ReturnAnnouncementDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * Supplier API description... <br /><br /> Open [OpenAPI.json](doc.json).
 *
 * OpenAPI spec version: 1.1.7
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Emesa\PartnerPlatform\Model;

use \ArrayAccess;
use \Emesa\PartnerPlatform\ObjectSerializer;

/**
 * ReturnAnnouncementDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnAnnouncementDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReturnAnnouncementDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'market_rma_id' => 'string',
'market_order_id' => 'string',
'track_trace_number' => 'string',
'return_reason' => 'string',
'customer_comment' => 'string',
'created_at' => '\DateTime',
'lines' => '\Emesa\PartnerPlatform\Model\ReturnAnnouncementLineDto[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'market_rma_id' => null,
'market_order_id' => null,
'track_trace_number' => null,
'return_reason' => null,
'customer_comment' => null,
'created_at' => 'date-time',
'lines' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'market_rma_id' => 'marketRmaId',
'market_order_id' => 'marketOrderId',
'track_trace_number' => 'trackTraceNumber',
'return_reason' => 'returnReason',
'customer_comment' => 'customerComment',
'created_at' => 'createdAt',
'lines' => 'lines'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_rma_id' => 'setMarketRmaId',
'market_order_id' => 'setMarketOrderId',
'track_trace_number' => 'setTrackTraceNumber',
'return_reason' => 'setReturnReason',
'customer_comment' => 'setCustomerComment',
'created_at' => 'setCreatedAt',
'lines' => 'setLines'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_rma_id' => 'getMarketRmaId',
'market_order_id' => 'getMarketOrderId',
'track_trace_number' => 'getTrackTraceNumber',
'return_reason' => 'getReturnReason',
'customer_comment' => 'getCustomerComment',
'created_at' => 'getCreatedAt',
'lines' => 'getLines'    ];

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
        return self::$swaggerModelName;
    }

    const RETURN_REASON_RIGHT_OF_WITHDRAWAL = 'RIGHT_OF_WITHDRAWAL';
const RETURN_REASON_PRODUCT_DAMAGED = 'PRODUCT_DAMAGED';
const RETURN_REASON_WRONG_PRODUCT_TYPE = 'WRONG_PRODUCT_TYPE';
const RETURN_REASON_WRONG_PRODUCT = 'WRONG_PRODUCT';
const RETURN_REASON_PRODUCT_INCOMPLETE = 'PRODUCT_INCOMPLETE';
const RETURN_REASON_PRODUCT_RECEIVED_TOO_LATE = 'PRODUCT_RECEIVED_TOO_LATE';
const RETURN_REASON_PRODUCT_DOES_NOT_FIT_DESCRIPTION = 'PRODUCT_DOES_NOT_FIT_DESCRIPTION';
const RETURN_REASON_RETURNED_BY_CARRIER = 'RETURNED_BY_CARRIER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReturnReasonAllowableValues()
    {
        return [
            self::RETURN_REASON_RIGHT_OF_WITHDRAWAL,
self::RETURN_REASON_PRODUCT_DAMAGED,
self::RETURN_REASON_WRONG_PRODUCT_TYPE,
self::RETURN_REASON_WRONG_PRODUCT,
self::RETURN_REASON_PRODUCT_INCOMPLETE,
self::RETURN_REASON_PRODUCT_RECEIVED_TOO_LATE,
self::RETURN_REASON_PRODUCT_DOES_NOT_FIT_DESCRIPTION,
self::RETURN_REASON_RETURNED_BY_CARRIER,        ];
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
        $this->container['market_rma_id'] = isset($data['market_rma_id']) ? $data['market_rma_id'] : null;
        $this->container['market_order_id'] = isset($data['market_order_id']) ? $data['market_order_id'] : null;
        $this->container['track_trace_number'] = isset($data['track_trace_number']) ? $data['track_trace_number'] : null;
        $this->container['return_reason'] = isset($data['return_reason']) ? $data['return_reason'] : null;
        $this->container['customer_comment'] = isset($data['customer_comment']) ? $data['customer_comment'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReturnReasonAllowableValues();
        if (!is_null($this->container['return_reason']) && !in_array($this->container['return_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'return_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
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
     * Gets market_rma_id
     *
     * @return string
     */
    public function getMarketRmaId()
    {
        return $this->container['market_rma_id'];
    }

    /**
     * Sets market_rma_id
     *
     * @param string $market_rma_id market_rma_id
     *
     * @return $this
     */
    public function setMarketRmaId($market_rma_id)
    {
        $this->container['market_rma_id'] = $market_rma_id;

        return $this;
    }

    /**
     * Gets market_order_id
     *
     * @return string
     */
    public function getMarketOrderId()
    {
        return $this->container['market_order_id'];
    }

    /**
     * Sets market_order_id
     *
     * @param string $market_order_id market_order_id
     *
     * @return $this
     */
    public function setMarketOrderId($market_order_id)
    {
        $this->container['market_order_id'] = $market_order_id;

        return $this;
    }

    /**
     * Gets track_trace_number
     *
     * @return string
     */
    public function getTrackTraceNumber()
    {
        return $this->container['track_trace_number'];
    }

    /**
     * Sets track_trace_number
     *
     * @param string $track_trace_number track_trace_number
     *
     * @return $this
     */
    public function setTrackTraceNumber($track_trace_number)
    {
        $this->container['track_trace_number'] = $track_trace_number;

        return $this;
    }

    /**
     * Gets return_reason
     *
     * @return string
     */
    public function getReturnReason()
    {
        return $this->container['return_reason'];
    }

    /**
     * Sets return_reason
     *
     * @param string $return_reason return_reason
     *
     * @return $this
     */
    public function setReturnReason($return_reason)
    {
        $allowedValues = $this->getReturnReasonAllowableValues();
        if (!is_null($return_reason) && !in_array($return_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'return_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['return_reason'] = $return_reason;

        return $this;
    }

    /**
     * Gets customer_comment
     *
     * @return string
     */
    public function getCustomerComment()
    {
        return $this->container['customer_comment'];
    }

    /**
     * Sets customer_comment
     *
     * @param string $customer_comment customer_comment
     *
     * @return $this
     */
    public function setCustomerComment($customer_comment)
    {
        $this->container['customer_comment'] = $customer_comment;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Emesa\PartnerPlatform\Model\ReturnAnnouncementLineDto[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Emesa\PartnerPlatform\Model\ReturnAnnouncementLineDto[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
