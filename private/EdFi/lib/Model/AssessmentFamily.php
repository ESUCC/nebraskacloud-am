<?php
/**
 * AssessmentFamily
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
 * AssessmentFamily Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentFamily implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'parent_assessment_family_reference' => '\Swagger\Client\Model\AssessmentFamilyReference',
        'title' => 'string',
        'assessment_category_descriptor' => 'string',
        'academic_subject_descriptor' => 'string',
        'assessed_grade_level_descriptor' => 'string',
        'lowest_assessed_grade_level_descriptor' => 'string',
        'version' => 'int',
        'revision_date' => '\\DateTime',
        'nomenclature' => 'string',
        'namespace' => 'string',
        'content_standard' => '\Swagger\Client\Model\AssessmentFamilyContentStandard',
        'assessment_periods' => '\Swagger\Client\Model\AssessmentFamilyAssessmentPeriod[]',
        'identification_codes' => '\Swagger\Client\Model\AssessmentFamilyIdentificationCode[]',
        'languages' => '\Swagger\Client\Model\AssessmentFamilyLanguage[]',
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
        'parent_assessment_family_reference' => 'parentAssessmentFamilyReference',
        'title' => 'title',
        'assessment_category_descriptor' => 'assessmentCategoryDescriptor',
        'academic_subject_descriptor' => 'academicSubjectDescriptor',
        'assessed_grade_level_descriptor' => 'assessedGradeLevelDescriptor',
        'lowest_assessed_grade_level_descriptor' => 'lowestAssessedGradeLevelDescriptor',
        'version' => 'version',
        'revision_date' => 'revisionDate',
        'nomenclature' => 'nomenclature',
        'namespace' => 'namespace',
        'content_standard' => 'contentStandard',
        'assessment_periods' => 'assessmentPeriods',
        'identification_codes' => 'identificationCodes',
        'languages' => 'languages',
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
        'parent_assessment_family_reference' => 'setParentAssessmentFamilyReference',
        'title' => 'setTitle',
        'assessment_category_descriptor' => 'setAssessmentCategoryDescriptor',
        'academic_subject_descriptor' => 'setAcademicSubjectDescriptor',
        'assessed_grade_level_descriptor' => 'setAssessedGradeLevelDescriptor',
        'lowest_assessed_grade_level_descriptor' => 'setLowestAssessedGradeLevelDescriptor',
        'version' => 'setVersion',
        'revision_date' => 'setRevisionDate',
        'nomenclature' => 'setNomenclature',
        'namespace' => 'setNamespace',
        'content_standard' => 'setContentStandard',
        'assessment_periods' => 'setAssessmentPeriods',
        'identification_codes' => 'setIdentificationCodes',
        'languages' => 'setLanguages',
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
        'parent_assessment_family_reference' => 'getParentAssessmentFamilyReference',
        'title' => 'getTitle',
        'assessment_category_descriptor' => 'getAssessmentCategoryDescriptor',
        'academic_subject_descriptor' => 'getAcademicSubjectDescriptor',
        'assessed_grade_level_descriptor' => 'getAssessedGradeLevelDescriptor',
        'lowest_assessed_grade_level_descriptor' => 'getLowestAssessedGradeLevelDescriptor',
        'version' => 'getVersion',
        'revision_date' => 'getRevisionDate',
        'nomenclature' => 'getNomenclature',
        'namespace' => 'getNamespace',
        'content_standard' => 'getContentStandard',
        'assessment_periods' => 'getAssessmentPeriods',
        'identification_codes' => 'getIdentificationCodes',
        'languages' => 'getLanguages',
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
      * $parent_assessment_family_reference A reference to the related AssessmentFamily resource.
      * @var \Swagger\Client\Model\AssessmentFamilyReference
      */
    protected $parent_assessment_family_reference;
    
    /**
      * $title The title or name of the assessment family.
      * @var string
      */
    protected $title;
    
    /**
      * $assessment_category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $assessment_category_descriptor;
    
    /**
      * $academic_subject_descriptor Key for AcademicSubject
      * @var string
      */
    protected $academic_subject_descriptor;
    
    /**
      * $assessed_grade_level_descriptor Key for GradeLevel
      * @var string
      */
    protected $assessed_grade_level_descriptor;
    
    /**
      * $lowest_assessed_grade_level_descriptor Key for GradeLevel
      * @var string
      */
    protected $lowest_assessed_grade_level_descriptor;
    
    /**
      * $version The version identifier for the assessment.
      * @var int
      */
    protected $version;
    
    /**
      * $revision_date The month, day, and year that the conceptual design for the AssessmentFamily was most recently revised substantially.
      * @var \\DateTime
      */
    protected $revision_date;
    
    /**
      * $nomenclature Reflects the common nomenclature for an element.
      * @var string
      */
    protected $nomenclature;
    
    /**
      * $namespace Namespace for the Assessments in this AssessmentFamily.
      * @var string
      */
    protected $namespace;
    
    /**
      * $content_standard An indication as to whether an assessment conforms to a standard (e.g., local standard, statewide standard, regional standard, association standard).
      * @var \Swagger\Client\Model\AssessmentFamilyContentStandard
      */
    protected $content_standard;
    
    /**
      * $assessment_periods An unordered collection of assessmentFamilyAssessmentPeriods.  The periods or windows defined in which an assessment is supposed to be administered.
      * @var \Swagger\Client\Model\AssessmentFamilyAssessmentPeriod[]
      */
    protected $assessment_periods;
    
    /**
      * $identification_codes An unordered collection of assessmentFamilyIdentificationCodes.  A unique number or alphanumeric code assigned to an assessment family by a school, school system, a state, or other agency or entity.
      * @var \Swagger\Client\Model\AssessmentFamilyIdentificationCode[]
      */
    protected $identification_codes;
    
    /**
      * $languages An unordered collection of assessmentFamilyLanguages.  An indication of the languages in which the Assessment Family is designed.
      * @var \Swagger\Client\Model\AssessmentFamilyLanguage[]
      */
    protected $languages;
    
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
            $this->parent_assessment_family_reference = $data["parent_assessment_family_reference"];
            $this->title = $data["title"];
            $this->assessment_category_descriptor = $data["assessment_category_descriptor"];
            $this->academic_subject_descriptor = $data["academic_subject_descriptor"];
            $this->assessed_grade_level_descriptor = $data["assessed_grade_level_descriptor"];
            $this->lowest_assessed_grade_level_descriptor = $data["lowest_assessed_grade_level_descriptor"];
            $this->version = $data["version"];
            $this->revision_date = $data["revision_date"];
            $this->nomenclature = $data["nomenclature"];
            $this->namespace = $data["namespace"];
            $this->content_standard = $data["content_standard"];
            $this->assessment_periods = $data["assessment_periods"];
            $this->identification_codes = $data["identification_codes"];
            $this->languages = $data["languages"];
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
     * Gets parent_assessment_family_reference
     * @return \Swagger\Client\Model\AssessmentFamilyReference
     */
    public function getParentAssessmentFamilyReference()
    {
        return $this->parent_assessment_family_reference;
    }
  
    /**
     * Sets parent_assessment_family_reference
     * @param \Swagger\Client\Model\AssessmentFamilyReference $parent_assessment_family_reference A reference to the related AssessmentFamily resource.
     * @return $this
     */
    public function setParentAssessmentFamilyReference($parent_assessment_family_reference)
    {
        
        $this->parent_assessment_family_reference = $parent_assessment_family_reference;
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
     * @param string $title The title or name of the assessment family.
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    
    /**
     * Gets assessment_category_descriptor
     * @return string
     */
    public function getAssessmentCategoryDescriptor()
    {
        return $this->assessment_category_descriptor;
    }
  
    /**
     * Sets assessment_category_descriptor
     * @param string $assessment_category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setAssessmentCategoryDescriptor($assessment_category_descriptor)
    {
        
        $this->assessment_category_descriptor = $assessment_category_descriptor;
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
     * @param string $academic_subject_descriptor Key for AcademicSubject
     * @return $this
     */
    public function setAcademicSubjectDescriptor($academic_subject_descriptor)
    {
        
        $this->academic_subject_descriptor = $academic_subject_descriptor;
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
     * @param string $assessed_grade_level_descriptor Key for GradeLevel
     * @return $this
     */
    public function setAssessedGradeLevelDescriptor($assessed_grade_level_descriptor)
    {
        
        $this->assessed_grade_level_descriptor = $assessed_grade_level_descriptor;
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
     * @param string $lowest_assessed_grade_level_descriptor Key for GradeLevel
     * @return $this
     */
    public function setLowestAssessedGradeLevelDescriptor($lowest_assessed_grade_level_descriptor)
    {
        
        $this->lowest_assessed_grade_level_descriptor = $lowest_assessed_grade_level_descriptor;
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
     * Gets revision_date
     * @return \\DateTime
     */
    public function getRevisionDate()
    {
        return $this->revision_date;
    }
  
    /**
     * Sets revision_date
     * @param \\DateTime $revision_date The month, day, and year that the conceptual design for the AssessmentFamily was most recently revised substantially.
     * @return $this
     */
    public function setRevisionDate($revision_date)
    {
        
        $this->revision_date = $revision_date;
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
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
  
    /**
     * Sets namespace
     * @param string $namespace Namespace for the Assessments in this AssessmentFamily.
     * @return $this
     */
    public function setNamespace($namespace)
    {
        
        $this->namespace = $namespace;
        return $this;
    }
    
    /**
     * Gets content_standard
     * @return \Swagger\Client\Model\AssessmentFamilyContentStandard
     */
    public function getContentStandard()
    {
        return $this->content_standard;
    }
  
    /**
     * Sets content_standard
     * @param \Swagger\Client\Model\AssessmentFamilyContentStandard $content_standard An indication as to whether an assessment conforms to a standard (e.g., local standard, statewide standard, regional standard, association standard).
     * @return $this
     */
    public function setContentStandard($content_standard)
    {
        
        $this->content_standard = $content_standard;
        return $this;
    }
    
    /**
     * Gets assessment_periods
     * @return \Swagger\Client\Model\AssessmentFamilyAssessmentPeriod[]
     */
    public function getAssessmentPeriods()
    {
        return $this->assessment_periods;
    }
  
    /**
     * Sets assessment_periods
     * @param \Swagger\Client\Model\AssessmentFamilyAssessmentPeriod[] $assessment_periods An unordered collection of assessmentFamilyAssessmentPeriods.  The periods or windows defined in which an assessment is supposed to be administered.
     * @return $this
     */
    public function setAssessmentPeriods($assessment_periods)
    {
        
        $this->assessment_periods = $assessment_periods;
        return $this;
    }
    
    /**
     * Gets identification_codes
     * @return \Swagger\Client\Model\AssessmentFamilyIdentificationCode[]
     */
    public function getIdentificationCodes()
    {
        return $this->identification_codes;
    }
  
    /**
     * Sets identification_codes
     * @param \Swagger\Client\Model\AssessmentFamilyIdentificationCode[] $identification_codes An unordered collection of assessmentFamilyIdentificationCodes.  A unique number or alphanumeric code assigned to an assessment family by a school, school system, a state, or other agency or entity.
     * @return $this
     */
    public function setIdentificationCodes($identification_codes)
    {
        
        $this->identification_codes = $identification_codes;
        return $this;
    }
    
    /**
     * Gets languages
     * @return \Swagger\Client\Model\AssessmentFamilyLanguage[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }
  
    /**
     * Sets languages
     * @param \Swagger\Client\Model\AssessmentFamilyLanguage[] $languages An unordered collection of assessmentFamilyLanguages.  An indication of the languages in which the Assessment Family is designed.
     * @return $this
     */
    public function setLanguages($languages)
    {
        
        $this->languages = $languages;
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