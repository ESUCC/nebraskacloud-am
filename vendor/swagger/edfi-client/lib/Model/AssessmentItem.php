<?php
/**
 * AssessmentItem
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
 * AssessmentItem Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentItem implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'assessment_reference' => '\Swagger\Client\Model\AssessmentReference',
        'identification_code' => 'string',
        'category_type' => 'string',
        'max_raw_score' => 'int',
        'correct_response' => 'string',
        'expected_time_assessed' => 'string',
        'nomenclature' => 'string',
        'learning_standards' => '\Swagger\Client\Model\AssessmentItemLearningStandard[]',
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
        'assessment_reference' => 'assessmentReference',
        'identification_code' => 'identificationCode',
        'category_type' => 'categoryType',
        'max_raw_score' => 'maxRawScore',
        'correct_response' => 'correctResponse',
        'expected_time_assessed' => 'expectedTimeAssessed',
        'nomenclature' => 'nomenclature',
        'learning_standards' => 'learningStandards',
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
        'assessment_reference' => 'setAssessmentReference',
        'identification_code' => 'setIdentificationCode',
        'category_type' => 'setCategoryType',
        'max_raw_score' => 'setMaxRawScore',
        'correct_response' => 'setCorrectResponse',
        'expected_time_assessed' => 'setExpectedTimeAssessed',
        'nomenclature' => 'setNomenclature',
        'learning_standards' => 'setLearningStandards',
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
        'assessment_reference' => 'getAssessmentReference',
        'identification_code' => 'getIdentificationCode',
        'category_type' => 'getCategoryType',
        'max_raw_score' => 'getMaxRawScore',
        'correct_response' => 'getCorrectResponse',
        'expected_time_assessed' => 'getExpectedTimeAssessed',
        'nomenclature' => 'getNomenclature',
        'learning_standards' => 'getLearningStandards',
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
      * $assessment_reference A reference to the related Assessment resource.
      * @var \Swagger\Client\Model\AssessmentReference
      */
    protected $assessment_reference;
    
    /**
      * $identification_code A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity.
      * @var string
      */
    protected $identification_code;
    
    /**
      * $category_type Category or type of the assessment item.  For example:  Multiple choice  Analytic  Prose  ....
      * @var string
      */
    protected $category_type;
    
    /**
      * $max_raw_score The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
      * @var int
      */
    protected $max_raw_score;
    
    /**
      * $correct_response The correct response for the assessment item.
      * @var string
      */
    protected $correct_response;
    
    /**
      * $expected_time_assessed The duration of time allotted for the AssessmentItem.
      * @var string
      */
    protected $expected_time_assessed;
    
    /**
      * $nomenclature Reflects the common nomenclature for an element.
      * @var string
      */
    protected $nomenclature;
    
    /**
      * $learning_standards An unordered collection of assessmentItemLearningStandards.  Learning Standard tested by this item.
      * @var \Swagger\Client\Model\AssessmentItemLearningStandard[]
      */
    protected $learning_standards;
    
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
            $this->assessment_reference = $data["assessment_reference"];
            $this->identification_code = $data["identification_code"];
            $this->category_type = $data["category_type"];
            $this->max_raw_score = $data["max_raw_score"];
            $this->correct_response = $data["correct_response"];
            $this->expected_time_assessed = $data["expected_time_assessed"];
            $this->nomenclature = $data["nomenclature"];
            $this->learning_standards = $data["learning_standards"];
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
     * Gets assessment_reference
     * @return \Swagger\Client\Model\AssessmentReference
     */
    public function getAssessmentReference()
    {
        return $this->assessment_reference;
    }
  
    /**
     * Sets assessment_reference
     * @param \Swagger\Client\Model\AssessmentReference $assessment_reference A reference to the related Assessment resource.
     * @return $this
     */
    public function setAssessmentReference($assessment_reference)
    {
        
        $this->assessment_reference = $assessment_reference;
        return $this;
    }
    
    /**
     * Gets identification_code
     * @return string
     */
    public function getIdentificationCode()
    {
        return $this->identification_code;
    }
  
    /**
     * Sets identification_code
     * @param string $identification_code A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity.
     * @return $this
     */
    public function setIdentificationCode($identification_code)
    {
        
        $this->identification_code = $identification_code;
        return $this;
    }
    
    /**
     * Gets category_type
     * @return string
     */
    public function getCategoryType()
    {
        return $this->category_type;
    }
  
    /**
     * Sets category_type
     * @param string $category_type Category or type of the assessment item.  For example:  Multiple choice  Analytic  Prose  ....
     * @return $this
     */
    public function setCategoryType($category_type)
    {
        
        $this->category_type = $category_type;
        return $this;
    }
    
    /**
     * Gets max_raw_score
     * @return int
     */
    public function getMaxRawScore()
    {
        return $this->max_raw_score;
    }
  
    /**
     * Sets max_raw_score
     * @param int $max_raw_score The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
     * @return $this
     */
    public function setMaxRawScore($max_raw_score)
    {
        
        $this->max_raw_score = $max_raw_score;
        return $this;
    }
    
    /**
     * Gets correct_response
     * @return string
     */
    public function getCorrectResponse()
    {
        return $this->correct_response;
    }
  
    /**
     * Sets correct_response
     * @param string $correct_response The correct response for the assessment item.
     * @return $this
     */
    public function setCorrectResponse($correct_response)
    {
        
        $this->correct_response = $correct_response;
        return $this;
    }
    
    /**
     * Gets expected_time_assessed
     * @return string
     */
    public function getExpectedTimeAssessed()
    {
        return $this->expected_time_assessed;
    }
  
    /**
     * Sets expected_time_assessed
     * @param string $expected_time_assessed The duration of time allotted for the AssessmentItem.
     * @return $this
     */
    public function setExpectedTimeAssessed($expected_time_assessed)
    {
        
        $this->expected_time_assessed = $expected_time_assessed;
        return $this;
    }
    
    /**
     * Gets nomenclature
     * @return string
     */
    public function getNomenclature()
    {
        return $this->nomenclature;
    }
  
    /**
     * Sets nomenclature
     * @param string $nomenclature Reflects the common nomenclature for an element.
     * @return $this
     */
    public function setNomenclature($nomenclature)
    {
        
        $this->nomenclature = $nomenclature;
        return $this;
    }
    
    /**
     * Gets learning_standards
     * @return \Swagger\Client\Model\AssessmentItemLearningStandard[]
     */
    public function getLearningStandards()
    {
        return $this->learning_standards;
    }
  
    /**
     * Sets learning_standards
     * @param \Swagger\Client\Model\AssessmentItemLearningStandard[] $learning_standards An unordered collection of assessmentItemLearningStandards.  Learning Standard tested by this item.
     * @return $this
     */
    public function setLearningStandards($learning_standards)
    {
        
        $this->learning_standards = $learning_standards;
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
