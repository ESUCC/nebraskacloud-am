<?php
/**
 * StudentAssessmentStudentObjectiveAssessment
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
 * StudentAssessmentStudentObjectiveAssessment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentAssessmentStudentObjectiveAssessment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'objective_assessment_reference' => '\Swagger\Client\Model\ObjectiveAssessmentReference',
        'performance_levels' => '\Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentPerformanceLevel[]',
        'score_results' => '\Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentScoreResult[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'objective_assessment_reference' => 'objectiveAssessmentReference',
        'performance_levels' => 'performanceLevels',
        'score_results' => 'scoreResults'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'objective_assessment_reference' => 'setObjectiveAssessmentReference',
        'performance_levels' => 'setPerformanceLevels',
        'score_results' => 'setScoreResults'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'objective_assessment_reference' => 'getObjectiveAssessmentReference',
        'performance_levels' => 'getPerformanceLevels',
        'score_results' => 'getScoreResults'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $objective_assessment_reference A reference to the related ObjectiveAssessment resource.
      * @var \Swagger\Client\Model\ObjectiveAssessmentReference
      */
    protected $objective_assessment_reference;
    
    /**
      * $performance_levels An unordered collection of studentAssessmentStudentObjectiveAssessmentPerformanceLevels.  The performance level(s) achieved for the objective assessment.
      * @var \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentPerformanceLevel[]
      */
    protected $performance_levels;
    
    /**
      * $score_results An unordered collection of studentAssessmentStudentObjectiveAssessmentScoreResults.  A meaningful raw score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc.
      * @var \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentScoreResult[]
      */
    protected $score_results;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->objective_assessment_reference = $data["objective_assessment_reference"];
            $this->performance_levels = $data["performance_levels"];
            $this->score_results = $data["score_results"];
        }
    }
    
    /**
     * Gets objective_assessment_reference
     * @return \Swagger\Client\Model\ObjectiveAssessmentReference
     */
    public function getObjectiveAssessmentReference()
    {
        return $this->objective_assessment_reference;
    }
  
    /**
     * Sets objective_assessment_reference
     * @param \Swagger\Client\Model\ObjectiveAssessmentReference $objective_assessment_reference A reference to the related ObjectiveAssessment resource.
     * @return $this
     */
    public function setObjectiveAssessmentReference($objective_assessment_reference)
    {
        
        $this->objective_assessment_reference = $objective_assessment_reference;
        return $this;
    }
    
    /**
     * Gets performance_levels
     * @return \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentPerformanceLevel[]
     */
    public function getPerformanceLevels()
    {
        return $this->performance_levels;
    }
  
    /**
     * Sets performance_levels
     * @param \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentPerformanceLevel[] $performance_levels An unordered collection of studentAssessmentStudentObjectiveAssessmentPerformanceLevels.  The performance level(s) achieved for the objective assessment.
     * @return $this
     */
    public function setPerformanceLevels($performance_levels)
    {
        
        $this->performance_levels = $performance_levels;
        return $this;
    }
    
    /**
     * Gets score_results
     * @return \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentScoreResult[]
     */
    public function getScoreResults()
    {
        return $this->score_results;
    }
  
    /**
     * Sets score_results
     * @param \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessmentScoreResult[] $score_results An unordered collection of studentAssessmentStudentObjectiveAssessmentScoreResults.  A meaningful raw score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc.
     * @return $this
     */
    public function setScoreResults($score_results)
    {
        
        $this->score_results = $score_results;
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