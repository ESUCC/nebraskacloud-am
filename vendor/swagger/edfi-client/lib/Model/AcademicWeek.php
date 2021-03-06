<?php
/**
 * AcademicWeek
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
 * AcademicWeek Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AcademicWeek implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'begin_calendar_date_reference' => '\Swagger\Client\Model\CalendarDateReference',
        'end_calendar_date_reference' => '\Swagger\Client\Model\CalendarDateReference',
        'school_reference' => '\Swagger\Client\Model\SchoolReference',
        'week_identifier' => 'string',
        'total_instructional_days' => 'int',
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
        'begin_calendar_date_reference' => 'beginCalendarDateReference',
        'end_calendar_date_reference' => 'endCalendarDateReference',
        'school_reference' => 'schoolReference',
        'week_identifier' => 'weekIdentifier',
        'total_instructional_days' => 'totalInstructionalDays',
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
        'begin_calendar_date_reference' => 'setBeginCalendarDateReference',
        'end_calendar_date_reference' => 'setEndCalendarDateReference',
        'school_reference' => 'setSchoolReference',
        'week_identifier' => 'setWeekIdentifier',
        'total_instructional_days' => 'setTotalInstructionalDays',
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
        'begin_calendar_date_reference' => 'getBeginCalendarDateReference',
        'end_calendar_date_reference' => 'getEndCalendarDateReference',
        'school_reference' => 'getSchoolReference',
        'week_identifier' => 'getWeekIdentifier',
        'total_instructional_days' => 'getTotalInstructionalDays',
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
      * $begin_calendar_date_reference A reference to the related CalendarDate resource.
      * @var \Swagger\Client\Model\CalendarDateReference
      */
    protected $begin_calendar_date_reference;
    
    /**
      * $end_calendar_date_reference A reference to the related CalendarDate resource.
      * @var \Swagger\Client\Model\CalendarDateReference
      */
    protected $end_calendar_date_reference;
    
    /**
      * $school_reference A reference to the related School resource.
      * @var \Swagger\Client\Model\SchoolReference
      */
    protected $school_reference;
    
    /**
      * $week_identifier The school label for the academic week.
      * @var string
      */
    protected $week_identifier;
    
    /**
      * $total_instructional_days The total instructional days during the academic week.
      * @var int
      */
    protected $total_instructional_days;
    
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
            $this->begin_calendar_date_reference = $data["begin_calendar_date_reference"];
            $this->end_calendar_date_reference = $data["end_calendar_date_reference"];
            $this->school_reference = $data["school_reference"];
            $this->week_identifier = $data["week_identifier"];
            $this->total_instructional_days = $data["total_instructional_days"];
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
     * Gets begin_calendar_date_reference
     * @return \Swagger\Client\Model\CalendarDateReference
     */
    public function getBeginCalendarDateReference()
    {
        return $this->begin_calendar_date_reference;
    }
  
    /**
     * Sets begin_calendar_date_reference
     * @param \Swagger\Client\Model\CalendarDateReference $begin_calendar_date_reference A reference to the related CalendarDate resource.
     * @return $this
     */
    public function setBeginCalendarDateReference($begin_calendar_date_reference)
    {
        
        $this->begin_calendar_date_reference = $begin_calendar_date_reference;
        return $this;
    }
    
    /**
     * Gets end_calendar_date_reference
     * @return \Swagger\Client\Model\CalendarDateReference
     */
    public function getEndCalendarDateReference()
    {
        return $this->end_calendar_date_reference;
    }
  
    /**
     * Sets end_calendar_date_reference
     * @param \Swagger\Client\Model\CalendarDateReference $end_calendar_date_reference A reference to the related CalendarDate resource.
     * @return $this
     */
    public function setEndCalendarDateReference($end_calendar_date_reference)
    {
        
        $this->end_calendar_date_reference = $end_calendar_date_reference;
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
     * Gets week_identifier
     * @return string
     */
    public function getWeekIdentifier()
    {
        return $this->week_identifier;
    }
  
    /**
     * Sets week_identifier
     * @param string $week_identifier The school label for the academic week.
     * @return $this
     */
    public function setWeekIdentifier($week_identifier)
    {
        
        $this->week_identifier = $week_identifier;
        return $this;
    }
    
    /**
     * Gets total_instructional_days
     * @return int
     */
    public function getTotalInstructionalDays()
    {
        return $this->total_instructional_days;
    }
  
    /**
     * Sets total_instructional_days
     * @param int $total_instructional_days The total instructional days during the academic week.
     * @return $this
     */
    public function setTotalInstructionalDays($total_instructional_days)
    {
        
        $this->total_instructional_days = $total_instructional_days;
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
