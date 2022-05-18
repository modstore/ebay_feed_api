<?php
/**
 * UserScheduleResponse
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
 * UserScheduleResponse Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for a paginated result set of available schedules. The response consists of 0 or more sequenced &lt;em&gt; pages&lt;/em&gt; where each page has 0 or more items.
 * @package  Modstore\EbayFeedApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserScheduleResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserScheduleResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule_id' => 'string',
        'creation_date' => 'string',
        'feed_type' => 'string',
        'last_modified_date' => 'string',
        'preferred_trigger_day_of_month' => 'int',
        'preferred_trigger_day_of_week' => 'string',
        'preferred_trigger_hour' => 'string',
        'schedule_end_date' => 'string',
        'schedule_name' => 'string',
        'schedule_start_date' => 'string',
        'schedule_template_id' => 'string',
        'schema_version' => 'string',
        'status' => 'string',
        'status_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'schedule_id' => null,
        'creation_date' => null,
        'feed_type' => null,
        'last_modified_date' => null,
        'preferred_trigger_day_of_month' => 'int32',
        'preferred_trigger_day_of_week' => null,
        'preferred_trigger_hour' => null,
        'schedule_end_date' => null,
        'schedule_name' => null,
        'schedule_start_date' => null,
        'schedule_template_id' => null,
        'schema_version' => null,
        'status' => null,
        'status_reason' => null
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
        'schedule_id' => 'scheduleId',
        'creation_date' => 'creationDate',
        'feed_type' => 'feedType',
        'last_modified_date' => 'lastModifiedDate',
        'preferred_trigger_day_of_month' => 'preferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'preferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'preferredTriggerHour',
        'schedule_end_date' => 'scheduleEndDate',
        'schedule_name' => 'scheduleName',
        'schedule_start_date' => 'scheduleStartDate',
        'schedule_template_id' => 'scheduleTemplateId',
        'schema_version' => 'schemaVersion',
        'status' => 'status',
        'status_reason' => 'statusReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_id' => 'setScheduleId',
        'creation_date' => 'setCreationDate',
        'feed_type' => 'setFeedType',
        'last_modified_date' => 'setLastModifiedDate',
        'preferred_trigger_day_of_month' => 'setPreferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'setPreferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'setPreferredTriggerHour',
        'schedule_end_date' => 'setScheduleEndDate',
        'schedule_name' => 'setScheduleName',
        'schedule_start_date' => 'setScheduleStartDate',
        'schedule_template_id' => 'setScheduleTemplateId',
        'schema_version' => 'setSchemaVersion',
        'status' => 'setStatus',
        'status_reason' => 'setStatusReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_id' => 'getScheduleId',
        'creation_date' => 'getCreationDate',
        'feed_type' => 'getFeedType',
        'last_modified_date' => 'getLastModifiedDate',
        'preferred_trigger_day_of_month' => 'getPreferredTriggerDayOfMonth',
        'preferred_trigger_day_of_week' => 'getPreferredTriggerDayOfWeek',
        'preferred_trigger_hour' => 'getPreferredTriggerHour',
        'schedule_end_date' => 'getScheduleEndDate',
        'schedule_name' => 'getScheduleName',
        'schedule_start_date' => 'getScheduleStartDate',
        'schedule_template_id' => 'getScheduleTemplateId',
        'schema_version' => 'getSchemaVersion',
        'status' => 'getStatus',
        'status_reason' => 'getStatusReason'
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
        $this->container['schedule_id'] = $data['schedule_id'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['last_modified_date'] = $data['last_modified_date'] ?? null;
        $this->container['preferred_trigger_day_of_month'] = $data['preferred_trigger_day_of_month'] ?? null;
        $this->container['preferred_trigger_day_of_week'] = $data['preferred_trigger_day_of_week'] ?? null;
        $this->container['preferred_trigger_hour'] = $data['preferred_trigger_hour'] ?? null;
        $this->container['schedule_end_date'] = $data['schedule_end_date'] ?? null;
        $this->container['schedule_name'] = $data['schedule_name'] ?? null;
        $this->container['schedule_start_date'] = $data['schedule_start_date'] ?? null;
        $this->container['schedule_template_id'] = $data['schedule_template_id'] ?? null;
        $this->container['schema_version'] = $data['schema_version'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_reason'] = $data['status_reason'] ?? null;
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
     * Gets schedule_id
     *
     * @return string|null
     */
    public function getScheduleId()
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     *
     * @param string|null $schedule_id The ID of the schedule. This ID is generated when the schedule was created by the <strong>createSchedule</strong> method.
     *
     * @return self
     */
    public function setScheduleId($schedule_id)
    {
        $this->container['schedule_id'] = $schedule_id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date The creation date of the schedule in hours based on the 24-hour Coordinated Universal Time (UTC) clock.
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

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
     * @param string|null $feed_type The <strong>feedType</strong> associated with the schedule.
     *
     * @return self
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return string|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param string|null $last_modified_date The date the schedule was last modified.
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets preferred_trigger_day_of_month
     *
     * @return int|null
     */
    public function getPreferredTriggerDayOfMonth()
    {
        return $this->container['preferred_trigger_day_of_month'];
    }

    /**
     * Sets preferred_trigger_day_of_month
     *
     * @param int|null $preferred_trigger_day_of_month The preferred day of the month to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for monthly schedules. The last day of the month is used for numbers larger than the number of days in the month.
     *
     * @return self
     */
    public function setPreferredTriggerDayOfMonth($preferred_trigger_day_of_month)
    {
        $this->container['preferred_trigger_day_of_month'] = $preferred_trigger_day_of_month;

        return $this;
    }

    /**
     * Gets preferred_trigger_day_of_week
     *
     * @return string|null
     */
    public function getPreferredTriggerDayOfWeek()
    {
        return $this->container['preferred_trigger_day_of_week'];
    }

    /**
     * Sets preferred_trigger_day_of_week
     *
     * @param string|null $preferred_trigger_day_of_week The preferred day of the week to trigger the schedule. This field can be used with <strong>preferredTriggerHour</strong> for weekly schedules. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:DayOfWeekEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPreferredTriggerDayOfWeek($preferred_trigger_day_of_week)
    {
        $this->container['preferred_trigger_day_of_week'] = $preferred_trigger_day_of_week;

        return $this;
    }

    /**
     * Gets preferred_trigger_hour
     *
     * @return string|null
     */
    public function getPreferredTriggerHour()
    {
        return $this->container['preferred_trigger_hour'];
    }

    /**
     * Sets preferred_trigger_hour
     *
     * @param string|null $preferred_trigger_hour The preferred two-digit hour of the day to trigger the schedule. <br /><br /><b>Format:</b> UTC <code>hhZ</code><br /><br />For example, the following represents 11:00 am UTC:<br /><br /><code>11Z</code><br /><br />
     *
     * @return self
     */
    public function setPreferredTriggerHour($preferred_trigger_hour)
    {
        $this->container['preferred_trigger_hour'] = $preferred_trigger_hour;

        return $this;
    }

    /**
     * Gets schedule_end_date
     *
     * @return string|null
     */
    public function getScheduleEndDate()
    {
        return $this->container['schedule_end_date'];
    }

    /**
     * Sets schedule_end_date
     *
     * @param string|null $schedule_end_date The timestamp on which the report generation (subscription) ends. After this date, the schedule status becomes <code>INACTIVE</code>.
     *
     * @return self
     */
    public function setScheduleEndDate($schedule_end_date)
    {
        $this->container['schedule_end_date'] = $schedule_end_date;

        return $this;
    }

    /**
     * Gets schedule_name
     *
     * @return string|null
     */
    public function getScheduleName()
    {
        return $this->container['schedule_name'];
    }

    /**
     * Sets schedule_name
     *
     * @param string|null $schedule_name The schedule name assigned by the user for the created schedule. Users assign this name for their reference.
     *
     * @return self
     */
    public function setScheduleName($schedule_name)
    {
        $this->container['schedule_name'] = $schedule_name;

        return $this;
    }

    /**
     * Gets schedule_start_date
     *
     * @return string|null
     */
    public function getScheduleStartDate()
    {
        return $this->container['schedule_start_date'];
    }

    /**
     * Sets schedule_start_date
     *
     * @param string|null $schedule_start_date The timestamp that indicates the start of the report generation.
     *
     * @return self
     */
    public function setScheduleStartDate($schedule_start_date)
    {
        $this->container['schedule_start_date'] = $schedule_start_date;

        return $this;
    }

    /**
     * Gets schedule_template_id
     *
     * @return string|null
     */
    public function getScheduleTemplateId()
    {
        return $this->container['schedule_template_id'];
    }

    /**
     * Sets schedule_template_id
     *
     * @param string|null $schedule_template_id The ID of the template used to create this schedule.
     *
     * @return self
     */
    public function setScheduleTemplateId($schedule_template_id)
    {
        $this->container['schedule_template_id'] = $schedule_template_id;

        return $this;
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
     * @param string|null $schema_version The schema version of the feedType for the schedule.
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The enumeration value that indicates the state of the schedule. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string|null
     */
    public function getStatusReason()
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string|null $status_reason The reason the schedule is inactive. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:StatusReasonEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatusReason($status_reason)
    {
        $this->container['status_reason'] = $status_reason;

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


