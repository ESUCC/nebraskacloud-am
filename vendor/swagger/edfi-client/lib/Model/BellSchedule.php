<?php
/**
 * BellSchedule
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * BellSchedule Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BellSchedule implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'calendar_date_reference' => '\Swagger\Client\Model\CalendarDateReference',
        'name' => 'string',
        'grade_level_descriptor' => 'string',
        'meeting_times' => '\Swagger\Client\Model\BellScheduleMeetingTime[]',
        '_etag' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'calendar_date_reference' => 'calendarDateReference',
        'name' => 'name',
        'grade_level_descriptor' => 'gradeLevelDescriptor',
        'meeting_times' => 'meetingTimes',
        '_etag' => '_etag'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'calendar_date_reference' => 'setCalendarDateReference',
        'name' => 'setName',
        'grade_level_descriptor' => 'setGradeLevelDescriptor',
        'meeting_times' => 'setMeetingTimes',
        '_etag' => 'setEtag'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'calendar_date_reference' => 'getCalendarDateReference',
        'name' => 'getName',
        'grade_level_descriptor' => 'getGradeLevelDescriptor',
        'meeting_times' => 'getMeetingTimes',
        '_etag' => 'getEtag'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id The unique identifier of the resource.
      * @var string
      */
    protected $id;
    
    /**
      * $calendar_date_reference A reference to the related CalendarDate resource.
      * @var \Swagger\Client\Model\CalendarDateReference
      */
    protected $calendar_date_reference;
    
    /**
      * $name Name or title of the bell schedule.
      * @var string
      */
    protected $name;
    
    /**
      * $grade_level_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $grade_level_descriptor;
    
    /**
      * $meeting_times An unordered collection of bellScheduleMeetingTimes.  
      * @var \Swagger\Client\Model\BellScheduleMeetingTime[]
      */
    protected $meeting_times;
    
    /**
      * $_etag A unique system-generated value that identifies the version of the resource.
      * @var string
      */
    protected $_etag;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->calendar_date_reference = $data["calendar_date_reference"];
            $this->name = $data["name"];
            $this->grade_level_descriptor = $data["grade_level_descriptor"];
            $this->meeting_times = $data["meeting_times"];
            $this->_etag = $data["_etag"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The unique identifier of the resource.
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets calendar_date_reference
     * @return \Swagger\Client\Model\CalendarDateReference
     */
    public function getCalendarDateReference()
    {
        return $this->calendar_date_reference;
    }
  
    /**
     * Sets calendar_date_reference
     * @param \Swagger\Client\Model\CalendarDateReference $calendar_date_reference A reference to the related CalendarDate resource.
     * @return $this
     */
    public function setCalendarDateReference($calendar_date_reference)
    {
        
        $this->calendar_date_reference = $calendar_date_reference;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Name or title of the bell schedule.
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets grade_level_descriptor
     * @return string
     */
    public function getGradeLevelDescriptor()
    {
        return $this->grade_level_descriptor;
    }
  
    /**
     * Sets grade_level_descriptor
     * @param string $grade_level_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setGradeLevelDescriptor($grade_level_descriptor)
    {
        
        $this->grade_level_descriptor = $grade_level_descriptor;
        return $this;
    }
    
    /**
     * Gets meeting_times
     * @return \Swagger\Client\Model\BellScheduleMeetingTime[]
     */
    public function getMeetingTimes()
    {
        return $this->meeting_times;
    }
  
    /**
     * Sets meeting_times
     * @param \Swagger\Client\Model\BellScheduleMeetingTime[] $meeting_times An unordered collection of bellScheduleMeetingTimes.  
     * @return $this
     */
    public function setMeetingTimes($meeting_times)
    {
        
        $this->meeting_times = $meeting_times;
        return $this;
    }
    
    /**
     * Gets _etag
     * @return string
     */
    public function getEtag()
    {
        return $this->_etag;
    }
  
    /**
     * Sets _etag
     * @param string $_etag A unique system-generated value that identifies the version of the resource.
     * @return $this
     */
    public function setEtag($_etag)
    {
        
        $this->_etag = $_etag;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
