<?php
/**
 * BellScheduleMeetingTime
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
 * BellScheduleMeetingTime Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BellScheduleMeetingTime implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'class_period_reference' => '\Swagger\Client\Model\ClassPeriodReference',
        'start_time' => 'string',
        'end_time' => 'string',
        'alternate_day_name' => 'string',
        'official_attendance_period' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'class_period_reference' => 'classPeriodReference',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'alternate_day_name' => 'alternateDayName',
        'official_attendance_period' => 'officialAttendancePeriod'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'class_period_reference' => 'setClassPeriodReference',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'alternate_day_name' => 'setAlternateDayName',
        'official_attendance_period' => 'setOfficialAttendancePeriod'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'class_period_reference' => 'getClassPeriodReference',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'alternate_day_name' => 'getAlternateDayName',
        'official_attendance_period' => 'getOfficialAttendancePeriod'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $class_period_reference A reference to the related ClassPeriod resource.
      * @var \Swagger\Client\Model\ClassPeriodReference
      */
    protected $class_period_reference;
    
    /**
      * $start_time An indication of the time of day the class begins.
      * @var string
      */
    protected $start_time;
    
    /**
      * $end_time An indication of the time of day the class ends.
      * @var string
      */
    protected $end_time;
    
    /**
      * $alternate_day_name used for the bell schedule, another name for day (e.g., Blue day, Red day).
      * @var string
      */
    protected $alternate_day_name;
    
    /**
      * $official_attendance_period Indicator of whether this meeting time is used for official daily attendance.
      * @var bool
      */
    protected $official_attendance_period;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->class_period_reference = $data["class_period_reference"];
            $this->start_time = $data["start_time"];
            $this->end_time = $data["end_time"];
            $this->alternate_day_name = $data["alternate_day_name"];
            $this->official_attendance_period = $data["official_attendance_period"];
        }
    }
    
    /**
     * Gets class_period_reference
     * @return \Swagger\Client\Model\ClassPeriodReference
     */
    public function getClassPeriodReference()
    {
        return $this->class_period_reference;
    }
  
    /**
     * Sets class_period_reference
     * @param \Swagger\Client\Model\ClassPeriodReference $class_period_reference A reference to the related ClassPeriod resource.
     * @return $this
     */
    public function setClassPeriodReference($class_period_reference)
    {
        
        $this->class_period_reference = $class_period_reference;
        return $this;
    }
    
    /**
     * Gets start_time
     * @return string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }
  
    /**
     * Sets start_time
     * @param string $start_time An indication of the time of day the class begins.
     * @return $this
     */
    public function setStartTime($start_time)
    {
        
        $this->start_time = $start_time;
        return $this;
    }
    
    /**
     * Gets end_time
     * @return string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }
  
    /**
     * Sets end_time
     * @param string $end_time An indication of the time of day the class ends.
     * @return $this
     */
    public function setEndTime($end_time)
    {
        
        $this->end_time = $end_time;
        return $this;
    }
    
    /**
     * Gets alternate_day_name
     * @return string
     */
    public function getAlternateDayName()
    {
        return $this->alternate_day_name;
    }
  
    /**
     * Sets alternate_day_name
     * @param string $alternate_day_name used for the bell schedule, another name for day (e.g., Blue day, Red day).
     * @return $this
     */
    public function setAlternateDayName($alternate_day_name)
    {
        
        $this->alternate_day_name = $alternate_day_name;
        return $this;
    }
    
    /**
     * Gets official_attendance_period
     * @return bool
     */
    public function getOfficialAttendancePeriod()
    {
        return $this->official_attendance_period;
    }
  
    /**
     * Sets official_attendance_period
     * @param bool $official_attendance_period Indicator of whether this meeting time is used for official daily attendance.
     * @return $this
     */
    public function setOfficialAttendancePeriod($official_attendance_period)
    {
        
        $this->official_attendance_period = $official_attendance_period;
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
