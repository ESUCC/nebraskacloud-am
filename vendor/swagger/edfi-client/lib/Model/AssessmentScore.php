<?php
/**
 * AssessmentScore
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
 * AssessmentScore Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentScore implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'assessment_reporting_method_type' => 'string',
        'minimum_score' => 'string',
        'maximum_score' => 'string',
        'result_datatype_type' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'assessment_reporting_method_type' => 'assessmentReportingMethodType',
        'minimum_score' => 'minimumScore',
        'maximum_score' => 'maximumScore',
        'result_datatype_type' => 'resultDatatypeType'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'assessment_reporting_method_type' => 'setAssessmentReportingMethodType',
        'minimum_score' => 'setMinimumScore',
        'maximum_score' => 'setMaximumScore',
        'result_datatype_type' => 'setResultDatatypeType'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'assessment_reporting_method_type' => 'getAssessmentReportingMethodType',
        'minimum_score' => 'getMinimumScore',
        'maximum_score' => 'getMaximumScore',
        'result_datatype_type' => 'getResultDatatypeType'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $assessment_reporting_method_type Key for AssessmentReportingMethod
      * @var string
      */
    protected $assessment_reporting_method_type;
    
    /**
      * $minimum_score The minimum score possible on the assessment.
      * @var string
      */
    protected $minimum_score;
    
    /**
      * $maximum_score The maximum score possible on the assessment.
      * @var string
      */
    protected $maximum_score;
    
    /**
      * $result_datatype_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $result_datatype_type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->assessment_reporting_method_type = $data["assessment_reporting_method_type"];
            $this->minimum_score = $data["minimum_score"];
            $this->maximum_score = $data["maximum_score"];
            $this->result_datatype_type = $data["result_datatype_type"];
        }
    }
    
    /**
     * Gets assessment_reporting_method_type
     * @return string
     */
    public function getAssessmentReportingMethodType()
    {
        return $this->assessment_reporting_method_type;
    }
  
    /**
     * Sets assessment_reporting_method_type
     * @param string $assessment_reporting_method_type Key for AssessmentReportingMethod
     * @return $this
     */
    public function setAssessmentReportingMethodType($assessment_reporting_method_type)
    {
        
        $this->assessment_reporting_method_type = $assessment_reporting_method_type;
        return $this;
    }
    
    /**
     * Gets minimum_score
     * @return string
     */
    public function getMinimumScore()
    {
        return $this->minimum_score;
    }
  
    /**
     * Sets minimum_score
     * @param string $minimum_score The minimum score possible on the assessment.
     * @return $this
     */
    public function setMinimumScore($minimum_score)
    {
        
        $this->minimum_score = $minimum_score;
        return $this;
    }
    
    /**
     * Gets maximum_score
     * @return string
     */
    public function getMaximumScore()
    {
        return $this->maximum_score;
    }
  
    /**
     * Sets maximum_score
     * @param string $maximum_score The maximum score possible on the assessment.
     * @return $this
     */
    public function setMaximumScore($maximum_score)
    {
        
        $this->maximum_score = $maximum_score;
        return $this;
    }
    
    /**
     * Gets result_datatype_type
     * @return string
     */
    public function getResultDatatypeType()
    {
        return $this->result_datatype_type;
    }
  
    /**
     * Sets result_datatype_type
     * @param string $result_datatype_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setResultDatatypeType($result_datatype_type)
    {
        
        $this->result_datatype_type = $result_datatype_type;
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
