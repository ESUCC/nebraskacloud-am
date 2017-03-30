<?php
/**
 * SchoolYearType
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
 * SchoolYearType Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SchoolYearType implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        '_etag' => 'string',
        'current_school_year' => 'bool',
        'id' => 'string',
        'school_year' => 'int',
        'school_year_description' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        '_etag' => '_etag',
        'current_school_year' => 'currentSchoolYear',
        'id' => 'id',
        'school_year' => 'schoolYear',
        'school_year_description' => 'schoolYearDescription'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        '_etag' => 'setEtag',
        'current_school_year' => 'setCurrentSchoolYear',
        'id' => 'setId',
        'school_year' => 'setSchoolYear',
        'school_year_description' => 'setSchoolYearDescription'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        '_etag' => 'getEtag',
        'current_school_year' => 'getCurrentSchoolYear',
        'id' => 'getId',
        'school_year' => 'getSchoolYear',
        'school_year_description' => 'getSchoolYearDescription'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $_etag A unique system-generated value that identifies the version of the resource.
      * @var string
      */
    protected $_etag;
    
    /**
      * $current_school_year Code for SchoolYear type.
      * @var bool
      */
    protected $current_school_year;
    
    /**
      * $id The unique identifier of the resource.
      * @var string
      */
    protected $id;
    
    /**
      * $school_year Key for School
      * @var int
      */
    protected $school_year;
    
    /**
      * $school_year_description Description for SchoolYear type.
      * @var string
      */
    protected $school_year_description;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->_etag = $data["_etag"];
            $this->current_school_year = $data["current_school_year"];
            $this->id = $data["id"];
            $this->school_year = $data["school_year"];
            $this->school_year_description = $data["school_year_description"];
        }
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
     * Gets current_school_year
     * @return bool
     */
    public function getCurrentSchoolYear()
    {
        return $this->current_school_year;
    }
  
    /**
     * Sets current_school_year
     * @param bool $current_school_year Code for SchoolYear type.
     * @return $this
     */
    public function setCurrentSchoolYear($current_school_year)
    {
        
        $this->current_school_year = $current_school_year;
        return $this;
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
     * Gets school_year
     * @return int
     */
    public function getSchoolYear()
    {
        return $this->school_year;
    }
  
    /**
     * Sets school_year
     * @param int $school_year Key for School
     * @return $this
     */
    public function setSchoolYear($school_year)
    {
        
        $this->school_year = $school_year;
        return $this;
    }
    
    /**
     * Gets school_year_description
     * @return string
     */
    public function getSchoolYearDescription()
    {
        return $this->school_year_description;
    }
  
    /**
     * Sets school_year_description
     * @param string $school_year_description Description for SchoolYear type.
     * @return $this
     */
    public function setSchoolYearDescription($school_year_description)
    {
        
        $this->school_year_description = $school_year_description;
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
