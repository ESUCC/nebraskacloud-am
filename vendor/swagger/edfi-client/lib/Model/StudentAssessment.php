<?php
/**
 * StudentAssessment
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
 * StudentAssessment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentAssessment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'assessment_reference' => '\Swagger\Client\Model\AssessmentReference',
        'student_reference' => '\Swagger\Client\Model\StudentReference',
        'administration_date' => '\\DateTime',
        'administration_end_date' => '\\DateTime',
        'serial_number' => 'string',
        'administration_language_descriptor' => 'string',
        'administration_environment_type' => 'string',
        'retest_indicator_type' => 'string',
        'reason_not_tested_type' => 'string',
        'when_assessed_grade_level_descriptor' => 'string',
        'event_circumstance_type' => 'string',
        'event_description' => 'string',
        'accommodations' => '\Swagger\Client\Model\StudentAssessmentAccommodation[]',
        'items' => '\Swagger\Client\Model\StudentAssessmentItem[]',
        'performance_levels' => '\Swagger\Client\Model\StudentAssessmentPerformanceLevel[]',
        'score_results' => '\Swagger\Client\Model\StudentAssessmentScoreResult[]',
        'student_objective_assessments' => '\Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessment[]',
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
        'student_reference' => 'studentReference',
        'administration_date' => 'administrationDate',
        'administration_end_date' => 'administrationEndDate',
        'serial_number' => 'serialNumber',
        'administration_language_descriptor' => 'administrationLanguageDescriptor',
        'administration_environment_type' => 'administrationEnvironmentType',
        'retest_indicator_type' => 'retestIndicatorType',
        'reason_not_tested_type' => 'reasonNotTestedType',
        'when_assessed_grade_level_descriptor' => 'whenAssessedGradeLevelDescriptor',
        'event_circumstance_type' => 'eventCircumstanceType',
        'event_description' => 'eventDescription',
        'accommodations' => 'accommodations',
        'items' => 'items',
        'performance_levels' => 'performanceLevels',
        'score_results' => 'scoreResults',
        'student_objective_assessments' => 'studentObjectiveAssessments',
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
        'student_reference' => 'setStudentReference',
        'administration_date' => 'setAdministrationDate',
        'administration_end_date' => 'setAdministrationEndDate',
        'serial_number' => 'setSerialNumber',
        'administration_language_descriptor' => 'setAdministrationLanguageDescriptor',
        'administration_environment_type' => 'setAdministrationEnvironmentType',
        'retest_indicator_type' => 'setRetestIndicatorType',
        'reason_not_tested_type' => 'setReasonNotTestedType',
        'when_assessed_grade_level_descriptor' => 'setWhenAssessedGradeLevelDescriptor',
        'event_circumstance_type' => 'setEventCircumstanceType',
        'event_description' => 'setEventDescription',
        'accommodations' => 'setAccommodations',
        'items' => 'setItems',
        'performance_levels' => 'setPerformanceLevels',
        'score_results' => 'setScoreResults',
        'student_objective_assessments' => 'setStudentObjectiveAssessments',
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
        'student_reference' => 'getStudentReference',
        'administration_date' => 'getAdministrationDate',
        'administration_end_date' => 'getAdministrationEndDate',
        'serial_number' => 'getSerialNumber',
        'administration_language_descriptor' => 'getAdministrationLanguageDescriptor',
        'administration_environment_type' => 'getAdministrationEnvironmentType',
        'retest_indicator_type' => 'getRetestIndicatorType',
        'reason_not_tested_type' => 'getReasonNotTestedType',
        'when_assessed_grade_level_descriptor' => 'getWhenAssessedGradeLevelDescriptor',
        'event_circumstance_type' => 'getEventCircumstanceType',
        'event_description' => 'getEventDescription',
        'accommodations' => 'getAccommodations',
        'items' => 'getItems',
        'performance_levels' => 'getPerformanceLevels',
        'score_results' => 'getScoreResults',
        'student_objective_assessments' => 'getStudentObjectiveAssessments',
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
      * $student_reference A reference to the related Student resource.
      * @var \Swagger\Client\Model\StudentReference
      */
    protected $student_reference;
    
    /**
      * $administration_date The month(s), day(s), and year on which an assessment is administered or first day of administration if over multiple days.
      * @var \\DateTime
      */
    protected $administration_date;
    
    /**
      * $administration_end_date Assessment Administration End Date, if administered over multiple days.
      * @var \\DateTime
      */
    protected $administration_end_date;
    
    /**
      * $serial_number The unique number for the assessment form or answer document.
      * @var string
      */
    protected $serial_number;
    
    /**
      * $administration_language_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $administration_language_descriptor;
    
    /**
      * $administration_environment_type The environment in which the test was administered.  For example:  Electronic  Classroom  Testing Center  ...  ....
      * @var string
      */
    protected $administration_environment_type;
    
    /**
      * $retest_indicator_type Indicator if the test was retaken.  For example:  Primary administration  First retest  Second retest  ...
      * @var string
      */
    protected $retest_indicator_type;
    
    /**
      * $reason_not_tested_type The primary reason student is not tested. For example:  Absent  Refusal by parent  Refusal by student  Medical waiver  Illness  Disruptive behavior  LEP Exempt  ...
      * @var string
      */
    protected $reason_not_tested_type;
    
    /**
      * $when_assessed_grade_level_descriptor The grade level of a student when assessed.
      * @var string
      */
    protected $when_assessed_grade_level_descriptor;
    
    /**
      * $event_circumstance_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $event_circumstance_type;
    
    /**
      * $event_description Describes special events that occur before during or after the assessment session that may impact use of results.
      * @var string
      */
    protected $event_description;
    
    /**
      * $accommodations An unordered collection of studentAssessmentAccommodations.  The specific type of special variation used in how an examination is presented, how it is administered or how the test taker is allowed to respond. This generally refers to changes that do not substantially alter what the examination measures. The proper use of accommodations does not substantially change academic level or performance criteria (e.g., Braille, Enlarged Monitor View, Extra Time, Large Print, Setting, Oral Administration).
      * @var \Swagger\Client\Model\StudentAssessmentAccommodation[]
      */
    protected $accommodations;
    
    /**
      * $items An unordered collection of studentAssessmentItems.  This entity represents the student's response to an assessment item and the item-level scores such as correct, incorrect, or met standard.
      * @var \Swagger\Client\Model\StudentAssessmentItem[]
      */
    protected $items;
    
    /**
      * $performance_levels An unordered collection of studentAssessmentPerformanceLevels.  Indicates the various levels or thresholds for the performance achieved by the student on the assessment.
      * @var \Swagger\Client\Model\StudentAssessmentPerformanceLevel[]
      */
    protected $performance_levels;
    
    /**
      * $score_results An unordered collection of studentAssessmentScoreResults.  A meaningful raw score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc.
      * @var \Swagger\Client\Model\StudentAssessmentScoreResult[]
      */
    protected $score_results;
    
    /**
      * $student_objective_assessments An unordered collection of studentAssessmentStudentObjectiveAssessments.  This entity holds the score and or performance levels earned for an objective assessment by a student.
      * @var \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessment[]
      */
    protected $student_objective_assessments;
    
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
            $this->student_reference = $data["student_reference"];
            $this->administration_date = $data["administration_date"];
            $this->administration_end_date = $data["administration_end_date"];
            $this->serial_number = $data["serial_number"];
            $this->administration_language_descriptor = $data["administration_language_descriptor"];
            $this->administration_environment_type = $data["administration_environment_type"];
            $this->retest_indicator_type = $data["retest_indicator_type"];
            $this->reason_not_tested_type = $data["reason_not_tested_type"];
            $this->when_assessed_grade_level_descriptor = $data["when_assessed_grade_level_descriptor"];
            $this->event_circumstance_type = $data["event_circumstance_type"];
            $this->event_description = $data["event_description"];
            $this->accommodations = $data["accommodations"];
            $this->items = $data["items"];
            $this->performance_levels = $data["performance_levels"];
            $this->score_results = $data["score_results"];
            $this->student_objective_assessments = $data["student_objective_assessments"];
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
     * Gets student_reference
     * @return \Swagger\Client\Model\StudentReference
     */
    public function getStudentReference()
    {
        return $this->student_reference;
    }
  
    /**
     * Sets student_reference
     * @param \Swagger\Client\Model\StudentReference $student_reference A reference to the related Student resource.
     * @return $this
     */
    public function setStudentReference($student_reference)
    {
        
        $this->student_reference = $student_reference;
        return $this;
    }
    
    /**
     * Gets administration_date
     * @return \\DateTime
     */
    public function getAdministrationDate()
    {
        return $this->administration_date;
    }
  
    /**
     * Sets administration_date
     * @param \\DateTime $administration_date The month(s), day(s), and year on which an assessment is administered or first day of administration if over multiple days.
     * @return $this
     */
    public function setAdministrationDate($administration_date)
    {
        
        $this->administration_date = $administration_date;
        return $this;
    }
    
    /**
     * Gets administration_end_date
     * @return \\DateTime
     */
    public function getAdministrationEndDate()
    {
        return $this->administration_end_date;
    }
  
    /**
     * Sets administration_end_date
     * @param \\DateTime $administration_end_date Assessment Administration End Date, if administered over multiple days.
     * @return $this
     */
    public function setAdministrationEndDate($administration_end_date)
    {
        
        $this->administration_end_date = $administration_end_date;
        return $this;
    }
    
    /**
     * Gets serial_number
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }
  
    /**
     * Sets serial_number
     * @param string $serial_number The unique number for the assessment form or answer document.
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        
        $this->serial_number = $serial_number;
        return $this;
    }
    
    /**
     * Gets administration_language_descriptor
     * @return string
     */
    public function getAdministrationLanguageDescriptor()
    {
        return $this->administration_language_descriptor;
    }
  
    /**
     * Sets administration_language_descriptor
     * @param string $administration_language_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setAdministrationLanguageDescriptor($administration_language_descriptor)
    {
        
        $this->administration_language_descriptor = $administration_language_descriptor;
        return $this;
    }
    
    /**
     * Gets administration_environment_type
     * @return string
     */
    public function getAdministrationEnvironmentType()
    {
        return $this->administration_environment_type;
    }
  
    /**
     * Sets administration_environment_type
     * @param string $administration_environment_type The environment in which the test was administered.  For example:  Electronic  Classroom  Testing Center  ...  ....
     * @return $this
     */
    public function setAdministrationEnvironmentType($administration_environment_type)
    {
        
        $this->administration_environment_type = $administration_environment_type;
        return $this;
    }
    
    /**
     * Gets retest_indicator_type
     * @return string
     */
    public function getRetestIndicatorType()
    {
        return $this->retest_indicator_type;
    }
  
    /**
     * Sets retest_indicator_type
     * @param string $retest_indicator_type Indicator if the test was retaken.  For example:  Primary administration  First retest  Second retest  ...
     * @return $this
     */
    public function setRetestIndicatorType($retest_indicator_type)
    {
        
        $this->retest_indicator_type = $retest_indicator_type;
        return $this;
    }
    
    /**
     * Gets reason_not_tested_type
     * @return string
     */
    public function getReasonNotTestedType()
    {
        return $this->reason_not_tested_type;
    }
  
    /**
     * Sets reason_not_tested_type
     * @param string $reason_not_tested_type The primary reason student is not tested. For example:  Absent  Refusal by parent  Refusal by student  Medical waiver  Illness  Disruptive behavior  LEP Exempt  ...
     * @return $this
     */
    public function setReasonNotTestedType($reason_not_tested_type)
    {
        
        $this->reason_not_tested_type = $reason_not_tested_type;
        return $this;
    }
    
    /**
     * Gets when_assessed_grade_level_descriptor
     * @return string
     */
    public function getWhenAssessedGradeLevelDescriptor()
    {
        return $this->when_assessed_grade_level_descriptor;
    }
  
    /**
     * Sets when_assessed_grade_level_descriptor
     * @param string $when_assessed_grade_level_descriptor The grade level of a student when assessed.
     * @return $this
     */
    public function setWhenAssessedGradeLevelDescriptor($when_assessed_grade_level_descriptor)
    {
        
        $this->when_assessed_grade_level_descriptor = $when_assessed_grade_level_descriptor;
        return $this;
    }
    
    /**
     * Gets event_circumstance_type
     * @return string
     */
    public function getEventCircumstanceType()
    {
        return $this->event_circumstance_type;
    }
  
    /**
     * Sets event_circumstance_type
     * @param string $event_circumstance_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setEventCircumstanceType($event_circumstance_type)
    {
        
        $this->event_circumstance_type = $event_circumstance_type;
        return $this;
    }
    
    /**
     * Gets event_description
     * @return string
     */
    public function getEventDescription()
    {
        return $this->event_description;
    }
  
    /**
     * Sets event_description
     * @param string $event_description Describes special events that occur before during or after the assessment session that may impact use of results.
     * @return $this
     */
    public function setEventDescription($event_description)
    {
        
        $this->event_description = $event_description;
        return $this;
    }
    
    /**
     * Gets accommodations
     * @return \Swagger\Client\Model\StudentAssessmentAccommodation[]
     */
    public function getAccommodations()
    {
        return $this->accommodations;
    }
  
    /**
     * Sets accommodations
     * @param \Swagger\Client\Model\StudentAssessmentAccommodation[] $accommodations An unordered collection of studentAssessmentAccommodations.  The specific type of special variation used in how an examination is presented, how it is administered or how the test taker is allowed to respond. This generally refers to changes that do not substantially alter what the examination measures. The proper use of accommodations does not substantially change academic level or performance criteria (e.g., Braille, Enlarged Monitor View, Extra Time, Large Print, Setting, Oral Administration).
     * @return $this
     */
    public function setAccommodations($accommodations)
    {
        
        $this->accommodations = $accommodations;
        return $this;
    }
    
    /**
     * Gets items
     * @return \Swagger\Client\Model\StudentAssessmentItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \Swagger\Client\Model\StudentAssessmentItem[] $items An unordered collection of studentAssessmentItems.  This entity represents the student's response to an assessment item and the item-level scores such as correct, incorrect, or met standard.
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
        return $this;
    }
    
    /**
     * Gets performance_levels
     * @return \Swagger\Client\Model\StudentAssessmentPerformanceLevel[]
     */
    public function getPerformanceLevels()
    {
        return $this->performance_levels;
    }
  
    /**
     * Sets performance_levels
     * @param \Swagger\Client\Model\StudentAssessmentPerformanceLevel[] $performance_levels An unordered collection of studentAssessmentPerformanceLevels.  Indicates the various levels or thresholds for the performance achieved by the student on the assessment.
     * @return $this
     */
    public function setPerformanceLevels($performance_levels)
    {
        
        $this->performance_levels = $performance_levels;
        return $this;
    }
    
    /**
     * Gets score_results
     * @return \Swagger\Client\Model\StudentAssessmentScoreResult[]
     */
    public function getScoreResults()
    {
        return $this->score_results;
    }
  
    /**
     * Sets score_results
     * @param \Swagger\Client\Model\StudentAssessmentScoreResult[] $score_results An unordered collection of studentAssessmentScoreResults.  A meaningful raw score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc.
     * @return $this
     */
    public function setScoreResults($score_results)
    {
        
        $this->score_results = $score_results;
        return $this;
    }
    
    /**
     * Gets student_objective_assessments
     * @return \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessment[]
     */
    public function getStudentObjectiveAssessments()
    {
        return $this->student_objective_assessments;
    }
  
    /**
     * Sets student_objective_assessments
     * @param \Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessment[] $student_objective_assessments An unordered collection of studentAssessmentStudentObjectiveAssessments.  This entity holds the score and or performance levels earned for an objective assessment by a student.
     * @return $this
     */
    public function setStudentObjectiveAssessments($student_objective_assessments)
    {
        
        $this->student_objective_assessments = $student_objective_assessments;
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
