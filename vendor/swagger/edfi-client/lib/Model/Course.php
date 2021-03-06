<?php
/**
 * Course
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
 * Course Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Course implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'education_organization_reference' => '\Swagger\Client\Model\EducationOrganizationReference',
        'code' => 'string',
        'title' => 'string',
        'number_of_parts' => 'int',
        'academic_subject_descriptor' => 'string',
        'description' => 'string',
        'date_course_adopted' => '\\DateTime',
        'high_school_course_requirement' => 'bool',
        'gpa_applicability_type' => 'string',
        'defined_by_type' => 'string',
        'minimum_available_credit_type' => 'string',
        'minimum_available_credit_conversion' => 'Number',
        'minimum_available_credits' => 'Number',
        'maximum_available_credit_type' => 'string',
        'maximum_available_credit_conversion' => 'Number',
        'maximum_available_credits' => 'Number',
        'career_pathway_type' => 'string',
        'time_required_for_completion' => 'int',
        'competency_levels' => '\Swagger\Client\Model\CourseCompetencyLevel[]',
        'identification_codes' => '\Swagger\Client\Model\CourseIdentificationCode[]',
        'learning_objectives' => '\Swagger\Client\Model\CourseLearningObjective[]',
        'learning_standards' => '\Swagger\Client\Model\CourseLearningStandard[]',
        'level_characteristics' => '\Swagger\Client\Model\CourseLevelCharacteristic[]',
        'offered_grade_levels' => '\Swagger\Client\Model\CourseOfferedGradeLevel[]',
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
        'education_organization_reference' => 'educationOrganizationReference',
        'code' => 'code',
        'title' => 'title',
        'number_of_parts' => 'numberOfParts',
        'academic_subject_descriptor' => 'academicSubjectDescriptor',
        'description' => 'description',
        'date_course_adopted' => 'dateCourseAdopted',
        'high_school_course_requirement' => 'highSchoolCourseRequirement',
        'gpa_applicability_type' => 'gpaApplicabilityType',
        'defined_by_type' => 'definedByType',
        'minimum_available_credit_type' => 'minimumAvailableCreditType',
        'minimum_available_credit_conversion' => 'minimumAvailableCreditConversion',
        'minimum_available_credits' => 'minimumAvailableCredits',
        'maximum_available_credit_type' => 'maximumAvailableCreditType',
        'maximum_available_credit_conversion' => 'maximumAvailableCreditConversion',
        'maximum_available_credits' => 'maximumAvailableCredits',
        'career_pathway_type' => 'careerPathwayType',
        'time_required_for_completion' => 'timeRequiredForCompletion',
        'competency_levels' => 'competencyLevels',
        'identification_codes' => 'identificationCodes',
        'learning_objectives' => 'learningObjectives',
        'learning_standards' => 'learningStandards',
        'level_characteristics' => 'levelCharacteristics',
        'offered_grade_levels' => 'offeredGradeLevels',
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
        'education_organization_reference' => 'setEducationOrganizationReference',
        'code' => 'setCode',
        'title' => 'setTitle',
        'number_of_parts' => 'setNumberOfParts',
        'academic_subject_descriptor' => 'setAcademicSubjectDescriptor',
        'description' => 'setDescription',
        'date_course_adopted' => 'setDateCourseAdopted',
        'high_school_course_requirement' => 'setHighSchoolCourseRequirement',
        'gpa_applicability_type' => 'setGpaApplicabilityType',
        'defined_by_type' => 'setDefinedByType',
        'minimum_available_credit_type' => 'setMinimumAvailableCreditType',
        'minimum_available_credit_conversion' => 'setMinimumAvailableCreditConversion',
        'minimum_available_credits' => 'setMinimumAvailableCredits',
        'maximum_available_credit_type' => 'setMaximumAvailableCreditType',
        'maximum_available_credit_conversion' => 'setMaximumAvailableCreditConversion',
        'maximum_available_credits' => 'setMaximumAvailableCredits',
        'career_pathway_type' => 'setCareerPathwayType',
        'time_required_for_completion' => 'setTimeRequiredForCompletion',
        'competency_levels' => 'setCompetencyLevels',
        'identification_codes' => 'setIdentificationCodes',
        'learning_objectives' => 'setLearningObjectives',
        'learning_standards' => 'setLearningStandards',
        'level_characteristics' => 'setLevelCharacteristics',
        'offered_grade_levels' => 'setOfferedGradeLevels',
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
        'education_organization_reference' => 'getEducationOrganizationReference',
        'code' => 'getCode',
        'title' => 'getTitle',
        'number_of_parts' => 'getNumberOfParts',
        'academic_subject_descriptor' => 'getAcademicSubjectDescriptor',
        'description' => 'getDescription',
        'date_course_adopted' => 'getDateCourseAdopted',
        'high_school_course_requirement' => 'getHighSchoolCourseRequirement',
        'gpa_applicability_type' => 'getGpaApplicabilityType',
        'defined_by_type' => 'getDefinedByType',
        'minimum_available_credit_type' => 'getMinimumAvailableCreditType',
        'minimum_available_credit_conversion' => 'getMinimumAvailableCreditConversion',
        'minimum_available_credits' => 'getMinimumAvailableCredits',
        'maximum_available_credit_type' => 'getMaximumAvailableCreditType',
        'maximum_available_credit_conversion' => 'getMaximumAvailableCreditConversion',
        'maximum_available_credits' => 'getMaximumAvailableCredits',
        'career_pathway_type' => 'getCareerPathwayType',
        'time_required_for_completion' => 'getTimeRequiredForCompletion',
        'competency_levels' => 'getCompetencyLevels',
        'identification_codes' => 'getIdentificationCodes',
        'learning_objectives' => 'getLearningObjectives',
        'learning_standards' => 'getLearningStandards',
        'level_characteristics' => 'getLevelCharacteristics',
        'offered_grade_levels' => 'getOfferedGradeLevels',
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
      * $education_organization_reference A reference to the related EducationOrganization resource.
      * @var \Swagger\Client\Model\EducationOrganizationReference
      */
    protected $education_organization_reference;
    
    /**
      * $code TThe actual code that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
      * @var string
      */
    protected $code;
    
    /**
      * $title The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts).
      * @var string
      */
    protected $title;
    
    /**
      * $number_of_parts The number of parts identified for a course.
      * @var int
      */
    protected $number_of_parts;
    
    /**
      * $academic_subject_descriptor The intended major subject area of the course.  NEDM: Secondary Course Subject Area
      * @var string
      */
    protected $academic_subject_descriptor;
    
    /**
      * $description A description of the content standards and goals covered in the course. Reference may be made to state or national content standards.  NEDM: Course Description
      * @var string
      */
    protected $description;
    
    /**
      * $date_course_adopted Date the course was adopted by the education agency.
      * @var \\DateTime
      */
    protected $date_course_adopted;
    
    /**
      * $high_school_course_requirement An indication that this course may satisfy high school graduation requirements in the course's subject area.
      * @var bool
      */
    protected $high_school_course_requirement;
    
    /**
      * $gpa_applicability_type An indicator of whether or not this course being described is included in the computation of the student's Grade Point Average, and if so, if it weighted differently from regular courses.
      * @var string
      */
    protected $gpa_applicability_type;
    
    /**
      * $defined_by_type Key for CourseDefinedByType.
      * @var string
      */
    protected $defined_by_type;
    
    /**
      * $minimum_available_credit_type Key for Credit
      * @var string
      */
    protected $minimum_available_credit_type;
    
    /**
      * $minimum_available_credit_conversion Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
      * @var Number
      */
    protected $minimum_available_credit_conversion;
    
    /**
      * $minimum_available_credits The minimum amount of credit available to a student who successfully completes the course
      * @var Number
      */
    protected $minimum_available_credits;
    
    /**
      * $maximum_available_credit_type Key for Credit
      * @var string
      */
    protected $maximum_available_credit_type;
    
    /**
      * $maximum_available_credit_conversion Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
      * @var Number
      */
    protected $maximum_available_credit_conversion;
    
    /**
      * $maximum_available_credits The maximum amount of credit available to a student who successfully completes the course
      * @var Number
      */
    protected $maximum_available_credits;
    
    /**
      * $career_pathway_type Key for CareerPathway
      * @var string
      */
    protected $career_pathway_type;
    
    /**
      * $time_required_for_completion The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class.
      * @var int
      */
    protected $time_required_for_completion;
    
    /**
      * $competency_levels An unordered collection of courseCompetencyLevels.  The competency levels defined to rate the student for the course.
      * @var \Swagger\Client\Model\CourseCompetencyLevel[]
      */
    protected $competency_levels;
    
    /**
      * $identification_codes An unordered collection of courseIdentificationCodes.  A standard code that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
      * @var \Swagger\Client\Model\CourseIdentificationCode[]
      */
    protected $identification_codes;
    
    /**
      * $learning_objectives An unordered collection of courseLearningObjectives.  Learning Objectives to be mastered in the course.
      * @var \Swagger\Client\Model\CourseLearningObjective[]
      */
    protected $learning_objectives;
    
    /**
      * $learning_standards An unordered collection of courseLearningStandards.  Learning Standard(s) to be taught by the course.
      * @var \Swagger\Client\Model\CourseLearningStandard[]
      */
    protected $learning_standards;
    
    /**
      * $level_characteristics An unordered collection of courseLevelCharacteristics.  Indication of the nature and difficulty of instruction: Remedial, Basic, Honors, AP, IB, Dual Credit, CTE, etc.
      * @var \Swagger\Client\Model\CourseLevelCharacteristic[]
      */
    protected $level_characteristics;
    
    /**
      * $offered_grade_levels An unordered collection of courseOfferedGradeLevels.  The grade levels in which the course is offered.
      * @var \Swagger\Client\Model\CourseOfferedGradeLevel[]
      */
    protected $offered_grade_levels;
    
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
            $this->education_organization_reference = $data["education_organization_reference"];
            $this->code = $data["code"];
            $this->title = $data["title"];
            $this->number_of_parts = $data["number_of_parts"];
            $this->academic_subject_descriptor = $data["academic_subject_descriptor"];
            $this->description = $data["description"];
            $this->date_course_adopted = $data["date_course_adopted"];
            $this->high_school_course_requirement = $data["high_school_course_requirement"];
            $this->gpa_applicability_type = $data["gpa_applicability_type"];
            $this->defined_by_type = $data["defined_by_type"];
            $this->minimum_available_credit_type = $data["minimum_available_credit_type"];
            $this->minimum_available_credit_conversion = $data["minimum_available_credit_conversion"];
            $this->minimum_available_credits = $data["minimum_available_credits"];
            $this->maximum_available_credit_type = $data["maximum_available_credit_type"];
            $this->maximum_available_credit_conversion = $data["maximum_available_credit_conversion"];
            $this->maximum_available_credits = $data["maximum_available_credits"];
            $this->career_pathway_type = $data["career_pathway_type"];
            $this->time_required_for_completion = $data["time_required_for_completion"];
            $this->competency_levels = $data["competency_levels"];
            $this->identification_codes = $data["identification_codes"];
            $this->learning_objectives = $data["learning_objectives"];
            $this->learning_standards = $data["learning_standards"];
            $this->level_characteristics = $data["level_characteristics"];
            $this->offered_grade_levels = $data["offered_grade_levels"];
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
     * Gets education_organization_reference
     * @return \Swagger\Client\Model\EducationOrganizationReference
     */
    public function getEducationOrganizationReference()
    {
        return $this->education_organization_reference;
    }
  
    /**
     * Sets education_organization_reference
     * @param \Swagger\Client\Model\EducationOrganizationReference $education_organization_reference A reference to the related EducationOrganization resource.
     * @return $this
     */
    public function setEducationOrganizationReference($education_organization_reference)
    {
        
        $this->education_organization_reference = $education_organization_reference;
        return $this;
    }
    
    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param string $code TThe actual code that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
     * @return $this
     */
    public function setCode($code)
    {
        
        $this->code = $code;
        return $this;
    }
    
    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
  
    /**
     * Sets title
     * @param string $title The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts).
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    
    /**
     * Gets number_of_parts
     * @return int
     */
    public function getNumberOfParts()
    {
        return $this->number_of_parts;
    }
  
    /**
     * Sets number_of_parts
     * @param int $number_of_parts The number of parts identified for a course.
     * @return $this
     */
    public function setNumberOfParts($number_of_parts)
    {
        
        $this->number_of_parts = $number_of_parts;
        return $this;
    }
    
    /**
     * Gets academic_subject_descriptor
     * @return string
     */
    public function getAcademicSubjectDescriptor()
    {
        return $this->academic_subject_descriptor;
    }
  
    /**
     * Sets academic_subject_descriptor
     * @param string $academic_subject_descriptor The intended major subject area of the course.  NEDM: Secondary Course Subject Area
     * @return $this
     */
    public function setAcademicSubjectDescriptor($academic_subject_descriptor)
    {
        
        $this->academic_subject_descriptor = $academic_subject_descriptor;
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
     * @param string $description A description of the content standards and goals covered in the course. Reference may be made to state or national content standards.  NEDM: Course Description
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets date_course_adopted
     * @return \\DateTime
     */
    public function getDateCourseAdopted()
    {
        return $this->date_course_adopted;
    }
  
    /**
     * Sets date_course_adopted
     * @param \\DateTime $date_course_adopted Date the course was adopted by the education agency.
     * @return $this
     */
    public function setDateCourseAdopted($date_course_adopted)
    {
        
        $this->date_course_adopted = $date_course_adopted;
        return $this;
    }
    
    /**
     * Gets high_school_course_requirement
     * @return bool
     */
    public function getHighSchoolCourseRequirement()
    {
        return $this->high_school_course_requirement;
    }
  
    /**
     * Sets high_school_course_requirement
     * @param bool $high_school_course_requirement An indication that this course may satisfy high school graduation requirements in the course's subject area.
     * @return $this
     */
    public function setHighSchoolCourseRequirement($high_school_course_requirement)
    {
        
        $this->high_school_course_requirement = $high_school_course_requirement;
        return $this;
    }
    
    /**
     * Gets gpa_applicability_type
     * @return string
     */
    public function getGpaApplicabilityType()
    {
        return $this->gpa_applicability_type;
    }
  
    /**
     * Sets gpa_applicability_type
     * @param string $gpa_applicability_type An indicator of whether or not this course being described is included in the computation of the student's Grade Point Average, and if so, if it weighted differently from regular courses.
     * @return $this
     */
    public function setGpaApplicabilityType($gpa_applicability_type)
    {
        
        $this->gpa_applicability_type = $gpa_applicability_type;
        return $this;
    }
    
    /**
     * Gets defined_by_type
     * @return string
     */
    public function getDefinedByType()
    {
        return $this->defined_by_type;
    }
  
    /**
     * Sets defined_by_type
     * @param string $defined_by_type Key for CourseDefinedByType.
     * @return $this
     */
    public function setDefinedByType($defined_by_type)
    {
        
        $this->defined_by_type = $defined_by_type;
        return $this;
    }
    
    /**
     * Gets minimum_available_credit_type
     * @return string
     */
    public function getMinimumAvailableCreditType()
    {
        return $this->minimum_available_credit_type;
    }
  
    /**
     * Sets minimum_available_credit_type
     * @param string $minimum_available_credit_type Key for Credit
     * @return $this
     */
    public function setMinimumAvailableCreditType($minimum_available_credit_type)
    {
        
        $this->minimum_available_credit_type = $minimum_available_credit_type;
        return $this;
    }
    
    /**
     * Gets minimum_available_credit_conversion
     * @return Number
     */
    public function getMinimumAvailableCreditConversion()
    {
        return $this->minimum_available_credit_conversion;
    }
  
    /**
     * Sets minimum_available_credit_conversion
     * @param Number $minimum_available_credit_conversion Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
     * @return $this
     */
    public function setMinimumAvailableCreditConversion($minimum_available_credit_conversion)
    {
        
        $this->minimum_available_credit_conversion = $minimum_available_credit_conversion;
        return $this;
    }
    
    /**
     * Gets minimum_available_credits
     * @return Number
     */
    public function getMinimumAvailableCredits()
    {
        return $this->minimum_available_credits;
    }
  
    /**
     * Sets minimum_available_credits
     * @param Number $minimum_available_credits The minimum amount of credit available to a student who successfully completes the course
     * @return $this
     */
    public function setMinimumAvailableCredits($minimum_available_credits)
    {
        
        $this->minimum_available_credits = $minimum_available_credits;
        return $this;
    }
    
    /**
     * Gets maximum_available_credit_type
     * @return string
     */
    public function getMaximumAvailableCreditType()
    {
        return $this->maximum_available_credit_type;
    }
  
    /**
     * Sets maximum_available_credit_type
     * @param string $maximum_available_credit_type Key for Credit
     * @return $this
     */
    public function setMaximumAvailableCreditType($maximum_available_credit_type)
    {
        
        $this->maximum_available_credit_type = $maximum_available_credit_type;
        return $this;
    }
    
    /**
     * Gets maximum_available_credit_conversion
     * @return Number
     */
    public function getMaximumAvailableCreditConversion()
    {
        return $this->maximum_available_credit_conversion;
    }
  
    /**
     * Sets maximum_available_credit_conversion
     * @param Number $maximum_available_credit_conversion Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units.
     * @return $this
     */
    public function setMaximumAvailableCreditConversion($maximum_available_credit_conversion)
    {
        
        $this->maximum_available_credit_conversion = $maximum_available_credit_conversion;
        return $this;
    }
    
    /**
     * Gets maximum_available_credits
     * @return Number
     */
    public function getMaximumAvailableCredits()
    {
        return $this->maximum_available_credits;
    }
  
    /**
     * Sets maximum_available_credits
     * @param Number $maximum_available_credits The maximum amount of credit available to a student who successfully completes the course
     * @return $this
     */
    public function setMaximumAvailableCredits($maximum_available_credits)
    {
        
        $this->maximum_available_credits = $maximum_available_credits;
        return $this;
    }
    
    /**
     * Gets career_pathway_type
     * @return string
     */
    public function getCareerPathwayType()
    {
        return $this->career_pathway_type;
    }
  
    /**
     * Sets career_pathway_type
     * @param string $career_pathway_type Key for CareerPathway
     * @return $this
     */
    public function setCareerPathwayType($career_pathway_type)
    {
        
        $this->career_pathway_type = $career_pathway_type;
        return $this;
    }
    
    /**
     * Gets time_required_for_completion
     * @return int
     */
    public function getTimeRequiredForCompletion()
    {
        return $this->time_required_for_completion;
    }
  
    /**
     * Sets time_required_for_completion
     * @param int $time_required_for_completion The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class.
     * @return $this
     */
    public function setTimeRequiredForCompletion($time_required_for_completion)
    {
        
        $this->time_required_for_completion = $time_required_for_completion;
        return $this;
    }
    
    /**
     * Gets competency_levels
     * @return \Swagger\Client\Model\CourseCompetencyLevel[]
     */
    public function getCompetencyLevels()
    {
        return $this->competency_levels;
    }
  
    /**
     * Sets competency_levels
     * @param \Swagger\Client\Model\CourseCompetencyLevel[] $competency_levels An unordered collection of courseCompetencyLevels.  The competency levels defined to rate the student for the course.
     * @return $this
     */
    public function setCompetencyLevels($competency_levels)
    {
        
        $this->competency_levels = $competency_levels;
        return $this;
    }
    
    /**
     * Gets identification_codes
     * @return \Swagger\Client\Model\CourseIdentificationCode[]
     */
    public function getIdentificationCodes()
    {
        return $this->identification_codes;
    }
  
    /**
     * Sets identification_codes
     * @param \Swagger\Client\Model\CourseIdentificationCode[] $identification_codes An unordered collection of courseIdentificationCodes.  A standard code that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
     * @return $this
     */
    public function setIdentificationCodes($identification_codes)
    {
        
        $this->identification_codes = $identification_codes;
        return $this;
    }
    
    /**
     * Gets learning_objectives
     * @return \Swagger\Client\Model\CourseLearningObjective[]
     */
    public function getLearningObjectives()
    {
        return $this->learning_objectives;
    }
  
    /**
     * Sets learning_objectives
     * @param \Swagger\Client\Model\CourseLearningObjective[] $learning_objectives An unordered collection of courseLearningObjectives.  Learning Objectives to be mastered in the course.
     * @return $this
     */
    public function setLearningObjectives($learning_objectives)
    {
        
        $this->learning_objectives = $learning_objectives;
        return $this;
    }
    
    /**
     * Gets learning_standards
     * @return \Swagger\Client\Model\CourseLearningStandard[]
     */
    public function getLearningStandards()
    {
        return $this->learning_standards;
    }
  
    /**
     * Sets learning_standards
     * @param \Swagger\Client\Model\CourseLearningStandard[] $learning_standards An unordered collection of courseLearningStandards.  Learning Standard(s) to be taught by the course.
     * @return $this
     */
    public function setLearningStandards($learning_standards)
    {
        
        $this->learning_standards = $learning_standards;
        return $this;
    }
    
    /**
     * Gets level_characteristics
     * @return \Swagger\Client\Model\CourseLevelCharacteristic[]
     */
    public function getLevelCharacteristics()
    {
        return $this->level_characteristics;
    }
  
    /**
     * Sets level_characteristics
     * @param \Swagger\Client\Model\CourseLevelCharacteristic[] $level_characteristics An unordered collection of courseLevelCharacteristics.  Indication of the nature and difficulty of instruction: Remedial, Basic, Honors, AP, IB, Dual Credit, CTE, etc.
     * @return $this
     */
    public function setLevelCharacteristics($level_characteristics)
    {
        
        $this->level_characteristics = $level_characteristics;
        return $this;
    }
    
    /**
     * Gets offered_grade_levels
     * @return \Swagger\Client\Model\CourseOfferedGradeLevel[]
     */
    public function getOfferedGradeLevels()
    {
        return $this->offered_grade_levels;
    }
  
    /**
     * Sets offered_grade_levels
     * @param \Swagger\Client\Model\CourseOfferedGradeLevel[] $offered_grade_levels An unordered collection of courseOfferedGradeLevels.  The grade levels in which the course is offered.
     * @return $this
     */
    public function setOfferedGradeLevels($offered_grade_levels)
    {
        
        $this->offered_grade_levels = $offered_grade_levels;
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
