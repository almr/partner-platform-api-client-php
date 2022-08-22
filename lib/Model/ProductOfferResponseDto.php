<?php
/**
 * ProductOfferResponseDto
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
 * OpenAPI spec version: 1.1.6
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
 * ProductOfferResponseDto Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductOfferResponseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductOfferResponseDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'offer_state' => '\Emesa\PartnerPlatform\Model\OfferStatusExternal',
'meta_data' => '\Emesa\PartnerPlatform\Model\SupplierProductMetaDataDto',
'target_price_in_cents' => 'int',
'market_shipping_class_id' => 'string',
'target_country_codes' => 'string[]',
'offer_amount' => 'int',
'stock' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'offer_state' => null,
'meta_data' => null,
'target_price_in_cents' => null,
'market_shipping_class_id' => null,
'target_country_codes' => null,
'offer_amount' => null,
'stock' => null    ];

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
        'offer_state' => 'offerState',
'meta_data' => 'metaData',
'target_price_in_cents' => 'targetPriceInCents',
'market_shipping_class_id' => 'marketShippingClassId',
'target_country_codes' => 'targetCountryCodes',
'offer_amount' => 'offerAmount',
'stock' => 'stock'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_state' => 'setOfferState',
'meta_data' => 'setMetaData',
'target_price_in_cents' => 'setTargetPriceInCents',
'market_shipping_class_id' => 'setMarketShippingClassId',
'target_country_codes' => 'setTargetCountryCodes',
'offer_amount' => 'setOfferAmount',
'stock' => 'setStock'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_state' => 'getOfferState',
'meta_data' => 'getMetaData',
'target_price_in_cents' => 'getTargetPriceInCents',
'market_shipping_class_id' => 'getMarketShippingClassId',
'target_country_codes' => 'getTargetCountryCodes',
'offer_amount' => 'getOfferAmount',
'stock' => 'getStock'    ];

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

    const MARKET_SHIPPING_CLASS_ID_S = 'S';
const MARKET_SHIPPING_CLASS_ID_M = 'M';
const MARKET_SHIPPING_CLASS_ID_XL = 'XL';
const MARKET_SHIPPING_CLASS_ID_SPEC_1 = 'SPEC_1';
const MARKET_SHIPPING_CLASS_ID_SPEC_2 = 'SPEC_2';
const MARKET_SHIPPING_CLASS_ID_SPEC_3 = 'SPEC_3';
const TARGET_COUNTRY_CODES_BE = 'BE';
const TARGET_COUNTRY_CODES_DE = 'DE';
const TARGET_COUNTRY_CODES_NL = 'NL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketShippingClassIdAllowableValues()
    {
        return [
            self::MARKET_SHIPPING_CLASS_ID_S,
self::MARKET_SHIPPING_CLASS_ID_M,
self::MARKET_SHIPPING_CLASS_ID_XL,
self::MARKET_SHIPPING_CLASS_ID_SPEC_1,
self::MARKET_SHIPPING_CLASS_ID_SPEC_2,
self::MARKET_SHIPPING_CLASS_ID_SPEC_3,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetCountryCodesAllowableValues()
    {
        return [
            self::TARGET_COUNTRY_CODES_BE,
self::TARGET_COUNTRY_CODES_DE,
self::TARGET_COUNTRY_CODES_NL,        ];
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
        $this->container['offer_state'] = isset($data['offer_state']) ? $data['offer_state'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['target_price_in_cents'] = isset($data['target_price_in_cents']) ? $data['target_price_in_cents'] : null;
        $this->container['market_shipping_class_id'] = isset($data['market_shipping_class_id']) ? $data['market_shipping_class_id'] : null;
        $this->container['target_country_codes'] = isset($data['target_country_codes']) ? $data['target_country_codes'] : null;
        $this->container['offer_amount'] = isset($data['offer_amount']) ? $data['offer_amount'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['offer_state'] === null) {
            $invalidProperties[] = "'offer_state' can't be null";
        }
        if ($this->container['meta_data'] === null) {
            $invalidProperties[] = "'meta_data' can't be null";
        }
        if ($this->container['target_price_in_cents'] === null) {
            $invalidProperties[] = "'target_price_in_cents' can't be null";
        }
        if ($this->container['market_shipping_class_id'] === null) {
            $invalidProperties[] = "'market_shipping_class_id' can't be null";
        }
        $allowedValues = $this->getMarketShippingClassIdAllowableValues();
        if (!is_null($this->container['market_shipping_class_id']) && !in_array($this->container['market_shipping_class_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'market_shipping_class_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['target_country_codes'] === null) {
            $invalidProperties[] = "'target_country_codes' can't be null";
        }
        if ($this->container['offer_amount'] === null) {
            $invalidProperties[] = "'offer_amount' can't be null";
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
     * Gets offer_state
     *
     * @return \Emesa\PartnerPlatform\Model\OfferStatusExternal
     */
    public function getOfferState()
    {
        return $this->container['offer_state'];
    }

    /**
     * Sets offer_state
     *
     * @param \Emesa\PartnerPlatform\Model\OfferStatusExternal $offer_state offer_state
     *
     * @return $this
     */
    public function setOfferState($offer_state)
    {
        $this->container['offer_state'] = $offer_state;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \Emesa\PartnerPlatform\Model\SupplierProductMetaDataDto
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \Emesa\PartnerPlatform\Model\SupplierProductMetaDataDto $meta_data meta_data
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets target_price_in_cents
     *
     * @return int
     */
    public function getTargetPriceInCents()
    {
        return $this->container['target_price_in_cents'];
    }

    /**
     * Sets target_price_in_cents
     *
     * @param int $target_price_in_cents target_price_in_cents
     *
     * @return $this
     */
    public function setTargetPriceInCents($target_price_in_cents)
    {
        $this->container['target_price_in_cents'] = $target_price_in_cents;

        return $this;
    }

    /**
     * Gets market_shipping_class_id
     *
     * @return string
     */
    public function getMarketShippingClassId()
    {
        return $this->container['market_shipping_class_id'];
    }

    /**
     * Sets market_shipping_class_id
     *
     * @param string $market_shipping_class_id market_shipping_class_id
     *
     * @return $this
     */
    public function setMarketShippingClassId($market_shipping_class_id)
    {
        $allowedValues = $this->getMarketShippingClassIdAllowableValues();
        if (!in_array($market_shipping_class_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'market_shipping_class_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['market_shipping_class_id'] = $market_shipping_class_id;

        return $this;
    }

    /**
     * Gets target_country_codes
     *
     * @return string[]
     */
    public function getTargetCountryCodes()
    {
        return $this->container['target_country_codes'];
    }

    /**
     * Sets target_country_codes
     *
     * @param string[] $target_country_codes target_country_codes
     *
     * @return $this
     */
    public function setTargetCountryCodes($target_country_codes)
    {
        $allowedValues = $this->getTargetCountryCodesAllowableValues();
        if (array_diff($target_country_codes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'target_country_codes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['target_country_codes'] = $target_country_codes;

        return $this;
    }

    /**
     * Gets offer_amount
     *
     * @return int
     */
    public function getOfferAmount()
    {
        return $this->container['offer_amount'];
    }

    /**
     * Sets offer_amount
     *
     * @param int $offer_amount offer_amount
     *
     * @return $this
     */
    public function setOfferAmount($offer_amount)
    {
        $this->container['offer_amount'] = $offer_amount;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return int
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int $stock stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

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
