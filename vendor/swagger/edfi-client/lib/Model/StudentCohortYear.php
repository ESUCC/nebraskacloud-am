<?php
/**
 * StudentCohortYear
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
 * StudentCohortYear Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentCohortYear implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'school_year_type_reference' => '\Swagger\Client\Model\SchoolYearTypeReference',
        'cohort_year_type' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'school_year_type_reference' => 'schoolYearTypeReference',
        'cohort_year_type' => 'cohortYearType'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'school_year_type_reference' => 'setSchoolYearTypeReference',
        'cohort_year_type' => 'setCohortYearType'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'school_year_type_reference' => 'getSchoolYearTypeReference',
        'cohort_year_type' => 'getCohortYearType'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $school_year_type_reference A reference to the related SchoolYearType resource.
      * @var \Swagger\Client\Model\SchoolYearTypeReference
      */
    protected $school_year_type_reference;
    
    /**
      * $cohort_year_type Key for CohortYear
      * @var string
      */
    protected $cohort_year_type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->school_year_type_reference = $data["school_year_type_reference"];
            $this->cohort_year_type = $data["cohort_year_type"];
        }
    }
    
    /**
     * Gets school_year_type_reference
     * @return \Swagger\Client\Model\SchoolYearTypeReference
     */
    public function getSchoolYearTypeReference()
    {
        return $this->school_year_type_reference;
    }
  
    /**
     * Sets school_year_type_reference
     * @param \Swagger\Client\Model\SchoolYearTypeReference $school_year_type_reference A reference to the related SchoolYearType resource.
     * @return $this
     */
    public function setSchoolYearTypeReference($school_year_type_reference)
    {
        
        $this->school_year_type_reference = $school_year_type_reference;
        return $this;
    }
    
    /**
     * Gets cohort_year_type
     * @return string
     */
    public function getCohortYearType()
    {
        return $this->cohort_year_type;
    }
  
    /**
     * Sets cohort_year_type
     * @param string $cohort_year_type Key for CohortYear
     * @return $this
     */
    public function setCohortYearType($cohort_year_type)
    {
        
        $this->cohort_year_type = $cohort_year_type;
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
