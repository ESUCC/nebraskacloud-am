<?php
/**
 * CalendarDate
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
 * CalendarDate Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CalendarDate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'school_reference' => '\Swagger\Client\Model\SchoolReference',
        'date' => '\\DateTime',
        'calendar_events' => '\Swagger\Client\Model\CalendarDateCalendarEvent[]',
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
        'school_reference' => 'schoolReference',
        'date' => 'date',
        'calendar_events' => 'calendarEvents',
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
        'school_reference' => 'setSchoolReference',
        'date' => 'setDate',
        'calendar_events' => 'setCalendarEvents',
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
        'school_reference' => 'getSchoolReference',
        'date' => 'getDate',
        'calendar_events' => 'getCalendarEvents',
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
      * $school_reference A reference to the related School resource.
      * @var \Swagger\Client\Model\SchoolReference
      */
    protected $school_reference;
    
    /**
      * $date The month, day, and year of the CalendarDate.
      * @var \\DateTime
      */
    protected $date;
    
    /**
      * $calendar_events An unordered collection of calendarDateCalendarEvents.  
      * @var \Swagger\Client\Model\CalendarDateCalendarEvent[]
      */
    protected $calendar_events;
    
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
            $this->school_reference = $data["school_reference"];
            $this->date = $data["date"];
            $this->calendar_events = $data["calendar_events"];
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
     * Gets school_reference
     * @return \Swagger\Client\Model\SchoolReference
     */
    public function getSchoolReference()
    {
        return $this->school_reference;
    }
  
    /**
     * Sets school_reference
     * @param \Swagger\Client\Model\SchoolReference $school_reference A reference to the related School resource.
     * @return $this
     */
    public function setSchoolReference($school_reference)
    {
        
        $this->school_reference = $school_reference;
        return $this;
    }
    
    /**
     * Gets date
     * @return \\DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
  
    /**
     * Sets date
     * @param \\DateTime $date The month, day, and year of the CalendarDate.
     * @return $this
     */
    public function setDate($date)
    {
        
        $this->date = $date;
        return $this;
    }
    
    /**
     * Gets calendar_events
     * @return \Swagger\Client\Model\CalendarDateCalendarEvent[]
     */
    public function getCalendarEvents()
    {
        return $this->calendar_events;
    }
  
    /**
     * Sets calendar_events
     * @param \Swagger\Client\Model\CalendarDateCalendarEvent[] $calendar_events An unordered collection of calendarDateCalendarEvents.  
     * @return $this
     */
    public function setCalendarEvents($calendar_events)
    {
        
        $this->calendar_events = $calendar_events;
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
