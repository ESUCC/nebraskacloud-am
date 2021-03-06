<?php
/**
 * StudentCharacteristic
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
 * StudentCharacteristic Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentCharacteristic implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'descriptor' => 'string',
        'begin_date' => '\\DateTime',
        'end_date' => '\\DateTime',
        'designated_by' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'descriptor' => 'descriptor',
        'begin_date' => 'beginDate',
        'end_date' => 'endDate',
        'designated_by' => 'designatedBy'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'descriptor' => 'setDescriptor',
        'begin_date' => 'setBeginDate',
        'end_date' => 'setEndDate',
        'designated_by' => 'setDesignatedBy'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'descriptor' => 'getDescriptor',
        'begin_date' => 'getBeginDate',
        'end_date' => 'getEndDate',
        'designated_by' => 'getDesignatedBy'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $descriptor The characteristic designated for the student.
      * @var string
      */
    protected $descriptor;
    
    /**
      * $begin_date The date the characteristic was designated.
      * @var \\DateTime
      */
    protected $begin_date;
    
    /**
      * $end_date The date the characteristic was removed.
      * @var \\DateTime
      */
    protected $end_date;
    
    /**
      * $designated_by The person, organization, or department that made a student designation.
      * @var string
      */
    protected $designated_by;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->descriptor = $data["descriptor"];
            $this->begin_date = $data["begin_date"];
            $this->end_date = $data["end_date"];
            $this->designated_by = $data["designated_by"];
        }
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
     * @param string $descriptor The characteristic designated for the student.
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
     * @param \\DateTime $begin_date The date the characteristic was designated.
     * @return $this
     */
    public function setBeginDate($begin_date)
    {
        
        $this->begin_date = $begin_date;
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
     * @param \\DateTime $end_date The date the characteristic was removed.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets designated_by
     * @return string
     */
    public function getDesignatedBy()
    {
        return $this->designated_by;
    }
  
    /**
     * Sets designated_by
     * @param string $designated_by The person, organization, or department that made a student designation.
     * @return $this
     */
    public function setDesignatedBy($designated_by)
    {
        
        $this->designated_by = $designated_by;
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
