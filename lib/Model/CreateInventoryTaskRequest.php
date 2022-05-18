<?php
/**
 * CreateInventoryTaskRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Modstore\EbayFeedApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Modstore\EbayFeedApi\Model;

use \ArrayAccess;
use \Modstore\EbayFeedApi\ObjectSerializer;

/**
 * CreateInventoryTaskRequest Class Doc Comment
 *
 * @category Class
 * @package  Modstore\EbayFeedApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateInventoryTaskRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInventoryTaskRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schema_version' => 'string',
        'feed_type' => 'string',
        'filter_criteria' => '\Modstore\EbayFeedApi\Model\InventoryFilterCriteria',
        'inventory_file_template' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'schema_version' => null,
        'feed_type' => null,
        'filter_criteria' => null,
        'inventory_file_template' => null
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
        'schema_version' => 'schemaVersion',
        'feed_type' => 'feedType',
        'filter_criteria' => 'filterCriteria',
        'inventory_file_template' => 'inventoryFileTemplate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schema_version' => 'setSchemaVersion',
        'feed_type' => 'setFeedType',
        'filter_criteria' => 'setFilterCriteria',
        'inventory_file_template' => 'setInventoryFileTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schema_version' => 'getSchemaVersion',
        'feed_type' => 'getFeedType',
        'filter_criteria' => 'getFilterCriteria',
        'inventory_file_template' => 'getInventoryFileTemplate'
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
        $this->container['schema_version'] = $data['schema_version'] ?? null;
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['filter_criteria'] = $data['filter_criteria'] ?? null;
        $this->container['inventory_file_template'] = $data['inventory_file_template'] ?? null;
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
     * Gets schema_version
     *
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string|null $schema_version The schemaVersion/version number of the file format (use the schema version of the API to which you are programming):<ul><li><a href=\"/api-docs/sell/static/lms-migration/lms-to-feed-version-details-schema-version.html\" target=\"_blank\">LMS Version Details / Schema Version</a></li><li><a href=\"/api-docs/sell/static/file-exchange-migration/fx-schema-version.html\" target=\"_blank\">File Exchange Schema Version</a></li></ul>
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets feed_type
     *
     * @return string|null
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type
     *
     * @param string|null $feed_type The feed type associated with the inventory task you are about to create. Use a <strong>feedType</strong> that is available for your API. Presently, only one feed type is available:<ul><li><code>LMS_ACTIVE_INVENTORY_REPORT</code></li></ul><br/><br/>See <a href=\"/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types\" target=\"_blank\">Report download feed types</a> for more information.
     *
     * @return self
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets filter_criteria
     *
     * @return \Modstore\EbayFeedApi\Model\InventoryFilterCriteria|null
     */
    public function getFilterCriteria()
    {
        return $this->container['filter_criteria'];
    }

    /**
     * Sets filter_criteria
     *
     * @param \Modstore\EbayFeedApi\Model\InventoryFilterCriteria|null $filter_criteria filter_criteria
     *
     * @return self
     */
    public function setFilterCriteria($filter_criteria)
    {
        $this->container['filter_criteria'] = $filter_criteria;

        return $this;
    }

    /**
     * Gets inventory_file_template
     *
     * @return string|null
     */
    public function getInventoryFileTemplate()
    {
        return $this->container['inventory_file_template'];
    }

    /**
     * Sets inventory_file_template
     *
     * @param string|null $inventory_file_template The inventory file template used to return specific types of inventory tasks. Presently not applicable for <code>LMS_ACTIVE_INVENTORY_REPORT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:InventoryFileTemplateEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setInventoryFileTemplate($inventory_file_template)
    {
        $this->container['inventory_file_template'] = $inventory_file_template;

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


