<?php
/**
 * Assessment
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
 * Assessment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Assessment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'assessment_family_reference' => '\Swagger\Client\Model\AssessmentFamilyReference',
        'title' => 'string',
        'assessed_grade_level_descriptor' => 'string',
        'academic_subject_descriptor' => 'string',
        'version' => 'int',
        'category_descriptor' => 'string',
        'lowest_assessed_grade_level_descriptor' => 'string',
        'form' => 'string',
        'revision_date' => '\\DateTime',
        'max_raw_score' => 'int',
        'nomenclature' => 'string',
        'period_descriptor' => 'string',
        'namespace' => 'string',
        'content_standard' => '\Swagger\Client\Model\AssessmentContentStandard',
        'identification_codes' => '\Swagger\Client\Model\AssessmentIdentificationCode[]',
        'languages' => '\Swagger\Client\Model\AssessmentLanguage[]',
        'performance_levels' => '\Swagger\Client\Model\AssessmentPerformanceLevel[]',
        'programs' => '\Swagger\Client\Model\AssessmentProgram[]',
        'scores' => '\Swagger\Client\Model\AssessmentScore[]',
        'sections' => '\Swagger\Client\Model\AssessmentSection[]',
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
        'assessment_family_reference' => 'assessmentFamilyReference',
        'title' => 'title',
        'assessed_grade_level_descriptor' => 'assessedGradeLevelDescriptor',
        'academic_subject_descriptor' => 'academicSubjectDescriptor',
        'version' => 'version',
        'category_descriptor' => 'categoryDescriptor',
        'lowest_assessed_grade_level_descriptor' => 'lowestAssessedGradeLevelDescriptor',
        'form' => 'form',
        'revision_date' => 'revisionDate',
        'max_raw_score' => 'maxRawScore',
        'nomenclature' => 'nomenclature',
        'period_descriptor' => 'periodDescriptor',
        'namespace' => 'namespace',
        'content_standard' => 'contentStandard',
        'identification_codes' => 'identificationCodes',
        'languages' => 'languages',
        'performance_levels' => 'performanceLevels',
        'programs' => 'programs',
        'scores' => 'scores',
        'sections' => 'sections',
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
        'assessment_family_reference' => 'setAssessmentFamilyReference',
        'title' => 'setTitle',
        'assessed_grade_level_descriptor' => 'setAssessedGradeLevelDescriptor',
        'academic_subject_descriptor' => 'setAcademicSubjectDescriptor',
        'version' => 'setVersion',
        'category_descriptor' => 'setCategoryDescriptor',
        'lowest_assessed_grade_level_descriptor' => 'setLowestAssessedGradeLevelDescriptor',
        'form' => 'setForm',
        'revision_date' => 'setRevisionDate',
        'max_raw_score' => 'setMaxRawScore',
        'nomenclature' => 'setNomenclature',
        'period_descriptor' => 'setPeriodDescriptor',
        'namespace' => 'setNamespace',
        'content_standard' => 'setContentStandard',
        'identification_codes' => 'setIdentificationCodes',
        'languages' => 'setLanguages',
        'performance_levels' => 'setPerformanceLevels',
        'programs' => 'setPrograms',
        'scores' => 'setScores',
        'sections' => 'setSections',
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
        'assessment_family_reference' => 'getAssessmentFamilyReference',
        'title' => 'getTitle',
        'assessed_grade_level_descriptor' => 'getAssessedGradeLevelDescriptor',
        'academic_subject_descriptor' => 'getAcademicSubjectDescriptor',
        'version' => 'getVersion',
        'category_descriptor' => 'getCategoryDescriptor',
        'lowest_assessed_grade_level_descriptor' => 'getLowestAssessedGradeLevelDescriptor',
        'form' => 'getForm',
        'revision_date' => 'getRevisionDate',
        'max_raw_score' => 'getMaxRawScore',
        'nomenclature' => 'getNomenclature',
        'period_descriptor' => 'getPeriodDescriptor',
        'namespace' => 'getNamespace',
        'content_standard' => 'getContentStandard',
        'identification_codes' => 'getIdentificationCodes',
        'languages' => 'getLanguages',
        'performance_levels' => 'getPerformanceLevels',
        'programs' => 'getPrograms',
        'scores' => 'getScores',
        'sections' => 'getSections',
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
      * $assessment_family_reference A reference to the related AssessmentFamily resource.
      * @var \Swagger\Client\Model\AssessmentFamilyReference
      */
    protected $assessment_family_reference;
    
    /**
      * $title The title or name of the assessment.  NEDM: Assessment Title
      * @var string
      */
    protected $title;
    
    /**
      * $assessed_grade_level_descriptor The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ...
      * @var string
      */
    protected $assessed_grade_level_descriptor;
    
    /**
      * $academic_subject_descriptor The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject
      * @var string
      */
    protected $academic_subject_descriptor;
    
    /**
      * $version The version identifier for the assessment.
      * @var int
      */
    protected $version;
    
    /**
      * $category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $category_descriptor;
    
    /**
      * $lowest_assessed_grade_level_descriptor If the test assessment spans a range of grades, then this attribute holds the lowest grade assessed.  If only one grade level is assessed, then this attribute is omitted. For example:  Adult  Prekindergarten  First grade  Second grade  ...
      * @var string
      */
    protected $lowest_assessed_grade_level_descriptor;
    
    /**
      * $form Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc.
      * @var string
      */
    protected $form;
    
    /**
      * $revision_date The month, day, and year that the conceptual design for the assessment was most recently revised substantially.
      * @var \\DateTime
      */
    protected $revision_date;
    
    /**
      * $max_raw_score The maximum raw score achievable across all assessment items that are correct and scored at the maximum.
      * @var int
      */
    protected $max_raw_score;
    
    /**
      * $nomenclature Reflects the common nomenclature for an element.
      * @var string
      */
    protected $nomenclature;
    
    /**
      * $period_descriptor The ID of the Assessment Period Descriptor
      * @var string
      */
    protected $period_descriptor;
    
    /**
      * $namespace Namespace for the Assessment.
      * @var string
      */
    protected $namespace;
    
    /**
      * $content_standard An indication as to whether an assessment conforms to a standard.
      * @var \Swagger\Client\Model\AssessmentContentStandard
      */
    protected $content_standard;
    
    /**
      * $identification_codes An unordered collection of assessmentIdentificationCodes.  A unique number or alphanumeric code assigned to an assessment by a school, school system, a state, or other agency or entity.
      * @var \Swagger\Client\Model\AssessmentIdentificationCode[]
      */
    protected $identification_codes;
    
    /**
      * $languages An unordered collection of assessmentLanguages.  An indication of the languages in which the Assessment is designed.
      * @var \Swagger\Client\Model\AssessmentLanguage[]
      */
    protected $languages;
    
    /**
      * $performance_levels An unordered collection of assessmentPerformanceLevels.  Definition of the performance levels and the associated cut scores. Three styles are supported: 1. Specification of performance level by minimum and maximum score 2. Specification of performance level by cut score, using only minimum score 3. Specification of performance level without any mapping to scores .
      * @var \Swagger\Client\Model\AssessmentPerformanceLevel[]
      */
    protected $performance_levels;
    
    /**
      * $programs An unordered collection of assessmentPrograms.  The programs associated with the Assessment.
      * @var \Swagger\Client\Model\AssessmentProgram[]
      */
    protected $programs;
    
    /**
      * $scores An unordered collection of assessmentScores.  Definition of the scores to be expected from this assessment.
      * @var \Swagger\Client\Model\AssessmentScore[]
      */
    protected $scores;
    
    /**
      * $sections An unordered collection of assessmentSections.  The section(s) to which the Assessment is associated.
      * @var \Swagger\Client\Model\AssessmentSection[]
      */
    protected $sections;
    
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
            $this->assessment_family_reference = $data["assessment_family_reference"];
            $this->title = $data["title"];
            $this->assessed_grade_level_descriptor = $data["assessed_grade_level_descriptor"];
            $this->academic_subject_descriptor = $data["academic_subject_descriptor"];
            $this->version = $data["version"];
            $this->category_descriptor = $data["category_descriptor"];
            $this->lowest_assessed_grade_level_descriptor = $data["lowest_assessed_grade_level_descriptor"];
            $this->form = $data["form"];
            $this->revision_date = $data["revision_date"];
            $this->max_raw_score = $data["max_raw_score"];
            $this->nomenclature = $data["nomenclature"];
            $this->period_descriptor = $data["period_descriptor"];
            $this->namespace = $data["namespace"];
            $this->content_standard = $data["content_standard"];
            $this->identification_codes = $data["identification_codes"];
            $this->languages = $data["languages"];
            $this->performance_levels = $data["performance_levels"];
            $this->programs = $data["programs"];
            $this->scores = $data["scores"];
            $this->sections = $data["sections"];
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
     * Gets assessment_family_reference
     * @return \Swagger\Client\Model\AssessmentFamilyReference
     */
    public function getAssessmentFamilyReference()
    {
        return $this->assessment_family_reference;
    }
  
    /**
     * Sets assessment_family_reference
     * @param \Swagger\Client\Model\AssessmentFamilyReference $assessment_family_reference A reference to the related AssessmentFamily resource.
     * @return $this
     */
    public function setAssessmentFamilyReference($assessment_family_reference)
    {
        
        $this->assessment_family_reference = $assessment_family_reference;
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
     * @param string $title The title or name of the assessment.  NEDM: Assessment Title
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    
    /**
     * Gets assessed_grade_level_descriptor
     * @return string
     */
    public function getAssessedGradeLevelDescriptor()
    {
        return $this->assessed_grade_level_descriptor;
    }
  
    /**
     * Sets assessed_grade_level_descriptor
     * @param string $assessed_grade_level_descriptor The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ...
     * @return $this
     */
    public function setAssessedGradeLevelDescriptor($assessed_grade_level_descriptor)
    {
        
        $this->assessed_grade_level_descriptor = $assessed_grade_level_descriptor;
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
     * @param string $academic_subject_descriptor The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject
     * @return $this
     */
    public function setAcademicSubjectDescriptor($academic_subject_descriptor)
    {
        
        $this->academic_subject_descriptor = $academic_subject_descriptor;
        return $this;
    }
    
    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
  
    /**
     * Sets version
     * @param int $version The version identifier for the assessment.
     * @return $this
     */
    public function setVersion($version)
    {
        
        $this->version = $version;
        return $this;
    }
    
    /**
     * Gets category_descriptor
     * @return string
     */
    public function getCategoryDescriptor()
    {
        return $this->category_descriptor;
    }
  
    /**
     * Sets category_descriptor
     * @param string $category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setCategoryDescriptor($category_descriptor)
    {
        
        $this->category_descriptor = $category_descriptor;
        return $this;
    }
    
    /**
     * Gets lowest_assessed_grade_level_descriptor
     * @return string
     */
    public function getLowestAssessedGradeLevelDescriptor()
    {
        return $this->lowest_assessed_grade_level_descriptor;
    }
  
    /**
     * Sets lowest_assessed_grade_level_descriptor
     * @param string $lowest_assessed_grade_level_descriptor If the test assessment spans a range of grades, then this attribute holds the lowest grade assessed.  If only one grade level is assessed, then this attribute is omitted. For example:  Adult  Prekindergarten  First grade  Second grade  ...
     * @return $this
     */
    public function setLowestAssessedGradeLevelDescriptor($lowest_assessed_grade_level_descriptor)
    {
        
        $this->lowest_assessed_grade_level_descriptor = $lowest_assessed_grade_level_descriptor;
        return $this;
    }
    
    /**
     * Gets form
     * @return string
     */
    public function getForm()
    {
        return $this->form;
    }
  
    /**
     * Sets form
     * @param string $form Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc.
     * @return $this
     */
    public function setForm($form)
    {
        
        $this->form = $form;
        return $this;
    }
    
    /**
     * Gets revision_date
     * @return \\DateTime
     */
    public function getRevisionDate()
    {
        return $this->revision_date;
    }
  
    /**
     * Sets revision_date
     * @param \\DateTime $revision_date The month, day, and year that the conceptual design for the assessment was most recently revised substantially.
     * @return $this
     */
    public function setRevisionDate($revision_date)
    {
        
        $this->revision_date = $revision_date;
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
     * Gets period_descriptor
     * @return string
     */
    public function getPeriodDescriptor()
    {
        return $this->period_descriptor;
    }
  
    /**
     * Sets period_descriptor
     * @param string $period_descriptor The ID of the Assessment Period Descriptor
     * @return $this
     */
    public function setPeriodDescriptor($period_descriptor)
    {
        
        $this->period_descriptor = $period_descriptor;
        return $this;
    }
    
    /**
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
  
    /**
     * Sets namespace
     * @param string $namespace Namespace for the Assessment.
     * @return $this
     */
    public function setNamespace($namespace)
    {
        
        $this->namespace = $namespace;
        return $this;
    }
    
    /**
     * Gets content_standard
     * @return \Swagger\Client\Model\AssessmentContentStandard
     */
    public function getContentStandard()
    {
        return $this->content_standard;
    }
  
    /**
     * Sets content_standard
     * @param \Swagger\Client\Model\AssessmentContentStandard $content_standard An indication as to whether an assessment conforms to a standard.
     * @return $this
     */
    public function setContentStandard($content_standard)
    {
        
        $this->content_standard = $content_standard;
        return $this;
    }
    
    /**
     * Gets identification_codes
     * @return \Swagger\Client\Model\AssessmentIdentificationCode[]
     */
    public function getIdentificationCodes()
    {
        return $this->identification_codes;
    }
  
    /**
     * Sets identification_codes
     * @param \Swagger\Client\Model\AssessmentIdentificationCode[] $identification_codes An unordered collection of assessmentIdentificationCodes.  A unique number or alphanumeric code assigned to an assessment by a school, school system, a state, or other agency or entity.
     * @return $this
     */
    public function setIdentificationCodes($identification_codes)
    {
        
        $this->identification_codes = $identification_codes;
        return $this;
    }
    
    /**
     * Gets languages
     * @return \Swagger\Client\Model\AssessmentLanguage[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }
  
    /**
     * Sets languages
     * @param \Swagger\Client\Model\AssessmentLanguage[] $languages An unordered collection of assessmentLanguages.  An indication of the languages in which the Assessment is designed.
     * @return $this
     */
    public function setLanguages($languages)
    {
        
        $this->languages = $languages;
        return $this;
    }
    
    /**
     * Gets performance_levels
     * @return \Swagger\Client\Model\AssessmentPerformanceLevel[]
     */
    public function getPerformanceLevels()
    {
        return $this->performance_levels;
    }
  
    /**
     * Sets performance_levels
     * @param \Swagger\Client\Model\AssessmentPerformanceLevel[] $performance_levels An unordered collection of assessmentPerformanceLevels.  Definition of the performance levels and the associated cut scores. Three styles are supported: 1. Specification of performance level by minimum and maximum score 2. Specification of performance level by cut score, using only minimum score 3. Specification of performance level without any mapping to scores .
     * @return $this
     */
    public function setPerformanceLevels($performance_levels)
    {
        
        $this->performance_levels = $performance_levels;
        return $this;
    }
    
    /**
     * Gets programs
     * @return \Swagger\Client\Model\AssessmentProgram[]
     */
    public function getPrograms()
    {
        return $this->programs;
    }
  
    /**
     * Sets programs
     * @param \Swagger\Client\Model\AssessmentProgram[] $programs An unordered collection of assessmentPrograms.  The programs associated with the Assessment.
     * @return $this
     */
    public function setPrograms($programs)
    {
        
        $this->programs = $programs;
        return $this;
    }
    
    /**
     * Gets scores
     * @return \Swagger\Client\Model\AssessmentScore[]
     */
    public function getScores()
    {
        return $this->scores;
    }
  
    /**
     * Sets scores
     * @param \Swagger\Client\Model\AssessmentScore[] $scores An unordered collection of assessmentScores.  Definition of the scores to be expected from this assessment.
     * @return $this
     */
    public function setScores($scores)
    {
        
        $this->scores = $scores;
        return $this;
    }
    
    /**
     * Gets sections
     * @return \Swagger\Client\Model\AssessmentSection[]
     */
    public function getSections()
    {
        return $this->sections;
    }
  
    /**
     * Sets sections
     * @param \Swagger\Client\Model\AssessmentSection[] $sections An unordered collection of assessmentSections.  The section(s) to which the Assessment is associated.
     * @return $this
     */
    public function setSections($sections)
    {
        
        $this->sections = $sections;
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
