<?php
/**
 * GradingPeriod
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
 * GradingPeriod Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GradingPeriod implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'school_reference' => '\Swagger\Client\Model\SchoolReference',
        'descriptor' => 'string',
        'begin_date' => '\\DateTime',
        'total_instructional_days' => 'int',
        'end_date' => '\\DateTime',
        'period_sequence' => 'int',
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
        'descriptor' => 'descriptor',
        'begin_date' => 'beginDate',
        'total_instructional_days' => 'totalInstructionalDays',
        'end_date' => 'endDate',
        'period_sequence' => 'periodSequence',
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
        'descriptor' => 'setDescriptor',
        'begin_date' => 'setBeginDate',
        'total_instructional_days' => 'setTotalInstructionalDays',
        'end_date' => 'setEndDate',
        'period_sequence' => 'setPeriodSequence',
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
        'descriptor' => 'getDescriptor',
        'begin_date' => 'getBeginDate',
        'total_instructional_days' => 'getTotalInstructionalDays',
        'end_date' => 'getEndDate',
        'period_sequence' => 'getPeriodSequence',
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
      * $descriptor The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester)
      * @var string
      */
    protected $descriptor;
    
    /**
      * $begin_date Month, day, and year of the first day of the GradingPeriod.
      * @var \\DateTime
      */
    protected $begin_date;
    
    /**
      * $total_instructional_days Total days available for educational instruction during the grading period.
      * @var int
      */
    protected $total_instructional_days;
    
    /**
      * $end_date Month, day, and year of the last day of the GradingPeriod.
      * @var \\DateTime
      */
    protected $end_date;
    
    /**
      * $period_sequence The sequential order of this period relative to other periods.
      * @var int
      */
    protected $period_sequence;
    
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
            $this->descriptor = $data["descriptor"];
            $this->begin_date = $data["begin_date"];
            $this->total_instructional_days = $data["total_instructional_days"];
            $this->end_date = $data["end_date"];
            $this->period_sequence = $data["period_sequence"];
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
     * Gets descriptor
     * @return string
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }
  
    /**
     * Sets descriptor
     * @param string $descriptor The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester)
     * @return $this
     */
    public function setDescriptor($descriptor)
    {
        
        $this->descriptor = $descriptor;
        return $this;
    }
    
    /**
     * Gets begin_date
     * @return \\DateTime
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }
  
    /**
     * Sets begin_date
     * @param \\DateTime $begin_date Month, day, and year of the first day of the GradingPeriod.
     * @return $this
     */
    public function setBeginDate($begin_date)
    {
        
        $this->begin_date = $begin_date;
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
     * @param int $total_instructional_days Total days available for educational instruction during the grading period.
     * @return $this
     */
    public function setTotalInstructionalDays($total_instructional_days)
    {
        
        $this->total_instructional_days = $total_instructional_days;
        return $this;
    }
    
    /**
     * Gets end_date
     * @return \\DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
  
    /**
     * Sets end_date
     * @param \\DateTime $end_date Month, day, and year of the last day of the GradingPeriod.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets period_sequence
     * @return int
     */
    public function getPeriodSequence()
    {
        return $this->period_sequence;
    }
  
    /**
     * Sets period_sequence
     * @param int $period_sequence The sequential order of this period relative to other periods.
     * @return $this
     */
    public function setPeriodSequence($period_sequence)
    {
        
        $this->period_sequence = $period_sequence;
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
