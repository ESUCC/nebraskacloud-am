<?php
/**
 * ObjectiveAssessment
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
 * ObjectiveAssessment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ObjectiveAssessment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'assessment_reference' => '\Swagger\Client\Model\AssessmentReference',
        'parent_objective_assessment_reference' => '\Swagger\Client\Model\ObjectiveAssessmentReference',
        'identification_code' => 'string',
        'max_raw_score' => 'int',
        'percent_of_assessment' => 'Number',
        'nomenclature' => 'string',
        'description' => 'string',
        'assessment_items' => '\Swagger\Client\Model\ObjectiveAssessmentAssessmentItem[]',
        'learning_objectives' => '\Swagger\Client\Model\ObjectiveAssessmentLearningObjective[]',
        'learning_standards' => '\Swagger\Client\Model\ObjectiveAssessmentLearningStandard[]',
        'performance_levels' => '\Swagger\Client\Model\ObjectiveAssessmentPerformanceLevel[]',
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
        'parent_objective_assessment_reference' => 'parentObjectiveAssessmentReference',
        'identification_code' => 'identificationCode',
        'max_raw_score' => 'maxRawScore',
        'percent_of_assessment' => 'percentOfAssessment',
        'nomenclature' => 'nomenclature',
        'description' => 'description',
        'assessment_items' => 'assessmentItems',
        'learning_objectives' => 'learningObjectives',
        'learning_standards' => 'learningStandards',
        'performance_levels' => 'performanceLevels',
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
        'parent_objective_assessment_reference' => 'setParentObjectiveAssessmentReference',
        'identification_code' => 'setIdentificationCode',
        'max_raw_score' => 'setMaxRawScore',
        'percent_of_assessment' => 'setPercentOfAssessment',
        'nomenclature' => 'setNomenclature',
        'description' => 'setDescription',
        'assessment_items' => 'setAssessmentItems',
        'learning_objectives' => 'setLearningObjectives',
        'learning_standards' => 'setLearningStandards',
        'performance_levels' => 'setPerformanceLevels',
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
        'parent_objective_assessment_reference' => 'getParentObjectiveAssessmentReference',
        'identification_code' => 'getIdentificationCode',
        'max_raw_score' => 'getMaxRawScore',
        'percent_of_assessment' => 'getPercentOfAssessment',
        'nomenclature' => 'getNomenclature',
        'description' => 'getDescription',
        'assessment_items' => 'getAssessmentItems',
        'learning_objectives' => 'getLearningObjectives',
        'learning_standards' => 'getLearningStandards',
        'performance_levels' => 'getPerformanceLevels',
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
      * $parent_objective_assessment_reference A reference to the related ObjectiveAssessment resource.
      * @var \Swagger\Client\Model\ObjectiveAssessmentReference
      */
    protected $parent_objective_assessment_reference;
    
    /**
      * $identification_code A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity.
      * @var string
      */
    protected $identification_code;
    
    /**
      * $max_raw_score The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
      * @var int
      */
    protected $max_raw_score;
    
    /**
      * $percent_of_assessment The percentage of the Assessment that tests this objective.
      * @var Number
      */
    protected $percent_of_assessment;
    
    /**
      * $nomenclature Reflects the common nomenclature for an element.
      * @var string
      */
    protected $nomenclature;
    
    /**
      * $description A detailed description of the entity.
      * @var string
      */
    protected $description;
    
    /**
      * $assessment_items An unordered collection of objectiveAssessmentAssessmentItems.  References individual test items, if appropriate.
      * @var \Swagger\Client\Model\ObjectiveAssessmentAssessmentItem[]
      */
    protected $assessment_items;
    
    /**
      * $learning_objectives An unordered collection of objectiveAssessmentLearningObjectives.  References the Learning Objective(s) the Objective Assessment tests.
      * @var \Swagger\Client\Model\ObjectiveAssessmentLearningObjective[]
      */
    protected $learning_objectives;
    
    /**
      * $learning_standards An unordered collection of objectiveAssessmentLearningStandards.  Learning Standard tested by this objective assessment.
      * @var \Swagger\Client\Model\ObjectiveAssessmentLearningStandard[]
      */
    protected $learning_standards;
    
    /**
      * $performance_levels An unordered collection of objectiveAssessmentPerformanceLevels.  Definition of the performance levels and the associated cut scores. Three styles are supported:  1. Specification of performance level by minimum and maximum score    2. Specification of performance level by cut score, using only minimum score    3. Specification of performance level without any mapping to scores.
      * @var \Swagger\Client\Model\ObjectiveAssessmentPerformanceLevel[]
      */
    protected $performance_levels;
    
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
            $this->parent_objective_assessment_reference = $data["parent_objective_assessment_reference"];
            $this->identification_code = $data["identification_code"];
            $this->max_raw_score = $data["max_raw_score"];
            $this->percent_of_assessment = $data["percent_of_assessment"];
            $this->nomenclature = $data["nomenclature"];
            $this->description = $data["description"];
            $this->assessment_items = $data["assessment_items"];
            $this->learning_objectives = $data["learning_objectives"];
            $this->learning_standards = $data["learning_standards"];
            $this->performance_levels = $data["performance_levels"];
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
     * Gets parent_objective_assessment_reference
     * @return \Swagger\Client\Model\ObjectiveAssessmentReference
     */
    public function getParentObjectiveAssessmentReference()
    {
        return $this->parent_objective_assessment_reference;
    }
  
    /**
     * Sets parent_objective_assessment_reference
     * @param \Swagger\Client\Model\ObjectiveAssessmentReference $parent_objective_assessment_reference A reference to the related ObjectiveAssessment resource.
     * @return $this
     */
    public function setParentObjectiveAssessmentReference($parent_objective_assessment_reference)
    {
        
        $this->parent_objective_assessment_reference = $parent_objective_assessment_reference;
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
     * Gets percent_of_assessment
     * @return Number
     */
    public function getPercentOfAssessment()
    {
        return $this->percent_of_assessment;
    }
  
    /**
     * Sets percent_of_assessment
     * @param Number $percent_of_assessment The percentage of the Assessment that tests this objective.
     * @return $this
     */
    public function setPercentOfAssessment($percent_of_assessment)
    {
        
        $this->percent_of_assessment = $percent_of_assessment;
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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description A detailed description of the entity.
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets assessment_items
     * @return \Swagger\Client\Model\ObjectiveAssessmentAssessmentItem[]
     */
    public function getAssessmentItems()
    {
        return $this->assessment_items;
    }
  
    /**
     * Sets assessment_items
     * @param \Swagger\Client\Model\ObjectiveAssessmentAssessmentItem[] $assessment_items An unordered collection of objectiveAssessmentAssessmentItems.  References individual test items, if appropriate.
     * @return $this
     */
    public function setAssessmentItems($assessment_items)
    {
        
        $this->assessment_items = $assessment_items;
        return $this;
    }
    
    /**
     * Gets learning_objectives
     * @return \Swagger\Client\Model\ObjectiveAssessmentLearningObjective[]
     */
    public function getLearningObjectives()
    {
        return $this->learning_objectives;
    }
  
    /**
     * Sets learning_objectives
     * @param \Swagger\Client\Model\ObjectiveAssessmentLearningObjective[] $learning_objectives An unordered collection of objectiveAssessmentLearningObjectives.  References the Learning Objective(s) the Objective Assessment tests.
     * @return $this
     */
    public function setLearningObjectives($learning_objectives)
    {
        
        $this->learning_objectives = $learning_objectives;
        return $this;
    }
    
    /**
     * Gets learning_standards
     * @return \Swagger\Client\Model\ObjectiveAssessmentLearningStandard[]
     */
    public function getLearningStandards()
    {
        return $this->learning_standards;
    }
  
    /**
     * Sets learning_standards
     * @param \Swagger\Client\Model\ObjectiveAssessmentLearningStandard[] $learning_standards An unordered collection of objectiveAssessmentLearningStandards.  Learning Standard tested by this objective assessment.
     * @return $this
     */
    public function setLearningStandards($learning_standards)
    {
        
        $this->learning_standards = $learning_standards;
        return $this;
    }
    
    /**
     * Gets performance_levels
     * @return \Swagger\Client\Model\ObjectiveAssessmentPerformanceLevel[]
     */
    public function getPerformanceLevels()
    {
        return $this->performance_levels;
    }
  
    /**
     * Sets performance_levels
     * @param \Swagger\Client\Model\ObjectiveAssessmentPerformanceLevel[] $performance_levels An unordered collection of objectiveAssessmentPerformanceLevels.  Definition of the performance levels and the associated cut scores. Three styles are supported:  1. Specification of performance level by minimum and maximum score    2. Specification of performance level by cut score, using only minimum score    3. Specification of performance level without any mapping to scores.
     * @return $this
     */
    public function setPerformanceLevels($performance_levels)
    {
        
        $this->performance_levels = $performance_levels;
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
