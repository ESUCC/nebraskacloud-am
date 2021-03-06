<?php
/**
 * Intervention
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
 * Intervention Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Intervention implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'education_organization_reference' => '\Swagger\Client\Model\EducationOrganizationReference',
        'identification_code' => 'string',
        'class_type' => 'string',
        'delivery_method_type' => 'string',
        'begin_date' => '\\DateTime',
        'end_date' => '\\DateTime',
        'appropriate_grade_levels' => '\Swagger\Client\Model\InterventionAppropriateGradeLevel[]',
        'appropriate_sexes' => '\Swagger\Client\Model\InterventionAppropriateSex[]',
        'diagnoses' => '\Swagger\Client\Model\InterventionDiagnosis[]',
        'education_contents' => '\Swagger\Client\Model\InterventionEducationContent[]',
        'intervention_prescriptions' => '\Swagger\Client\Model\InterventionInterventionPrescription[]',
        'learning_resource_metadata_ur_is' => '\Swagger\Client\Model\InterventionLearningResourceMetadataURI[]',
        'meeting_times' => '\Swagger\Client\Model\InterventionMeetingTime[]',
        'population_serveds' => '\Swagger\Client\Model\InterventionPopulationServed[]',
        'staffs' => '\Swagger\Client\Model\InterventionStaff[]',
        'uris' => '\Swagger\Client\Model\InterventionURI[]',
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
        'identification_code' => 'identificationCode',
        'class_type' => 'classType',
        'delivery_method_type' => 'deliveryMethodType',
        'begin_date' => 'beginDate',
        'end_date' => 'endDate',
        'appropriate_grade_levels' => 'appropriateGradeLevels',
        'appropriate_sexes' => 'appropriateSexes',
        'diagnoses' => 'diagnoses',
        'education_contents' => 'educationContents',
        'intervention_prescriptions' => 'interventionPrescriptions',
        'learning_resource_metadata_ur_is' => 'learningResourceMetadataURIs',
        'meeting_times' => 'meetingTimes',
        'population_serveds' => 'populationServeds',
        'staffs' => 'staffs',
        'uris' => 'uris',
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
        'identification_code' => 'setIdentificationCode',
        'class_type' => 'setClassType',
        'delivery_method_type' => 'setDeliveryMethodType',
        'begin_date' => 'setBeginDate',
        'end_date' => 'setEndDate',
        'appropriate_grade_levels' => 'setAppropriateGradeLevels',
        'appropriate_sexes' => 'setAppropriateSexes',
        'diagnoses' => 'setDiagnoses',
        'education_contents' => 'setEducationContents',
        'intervention_prescriptions' => 'setInterventionPrescriptions',
        'learning_resource_metadata_ur_is' => 'setLearningResourceMetadataUrIs',
        'meeting_times' => 'setMeetingTimes',
        'population_serveds' => 'setPopulationServeds',
        'staffs' => 'setStaffs',
        'uris' => 'setUris',
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
        'identification_code' => 'getIdentificationCode',
        'class_type' => 'getClassType',
        'delivery_method_type' => 'getDeliveryMethodType',
        'begin_date' => 'getBeginDate',
        'end_date' => 'getEndDate',
        'appropriate_grade_levels' => 'getAppropriateGradeLevels',
        'appropriate_sexes' => 'getAppropriateSexes',
        'diagnoses' => 'getDiagnoses',
        'education_contents' => 'getEducationContents',
        'intervention_prescriptions' => 'getInterventionPrescriptions',
        'learning_resource_metadata_ur_is' => 'getLearningResourceMetadataUrIs',
        'meeting_times' => 'getMeetingTimes',
        'population_serveds' => 'getPopulationServeds',
        'staffs' => 'getStaffs',
        'uris' => 'getUris',
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
      * $identification_code A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $identification_code;
    
    /**
      * $class_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $class_type;
    
    /**
      * $delivery_method_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $delivery_method_type;
    
    /**
      * $begin_date The start date for the intervention implementation.
      * @var \\DateTime
      */
    protected $begin_date;
    
    /**
      * $end_date The end date for the intervention implementation.
      * @var \\DateTime
      */
    protected $end_date;
    
    /**
      * $appropriate_grade_levels An unordered collection of interventionAppropriateGradeLevels.  Grade levels for the intervention.
      * @var \Swagger\Client\Model\InterventionAppropriateGradeLevel[]
      */
    protected $appropriate_grade_levels;
    
    /**
      * $appropriate_sexes An unordered collection of interventionAppropriateSexes.  Gender(s) for which the intervention is appropriate.
      * @var \Swagger\Client\Model\InterventionAppropriateSex[]
      */
    protected $appropriate_sexes;
    
    /**
      * $diagnoses An unordered collection of interventionDiagnoses.  Targeted purpose of the intervention (e.g., attendance issue, dropout risk).
      * @var \Swagger\Client\Model\InterventionDiagnosis[]
      */
    protected $diagnoses;
    
    /**
      * $education_contents An unordered collection of interventionEducationContents.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource.
      * @var \Swagger\Client\Model\InterventionEducationContent[]
      */
    protected $education_contents;
    
    /**
      * $intervention_prescriptions An unordered collection of interventionInterventionPrescriptions.  The reference to the intervention prescription being followed in this intervention implementation.
      * @var \Swagger\Client\Model\InterventionInterventionPrescription[]
      */
    protected $intervention_prescriptions;
    
    /**
      * $learning_resource_metadata_ur_is An unordered collection of interventionLearningResourceMetadataURIs.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource.
      * @var \Swagger\Client\Model\InterventionLearningResourceMetadataURI[]
      */
    protected $learning_resource_metadata_ur_is;
    
    /**
      * $meeting_times An unordered collection of interventionMeetingTimes.  The times at which this intervention is scheduled to meet.
      * @var \Swagger\Client\Model\InterventionMeetingTime[]
      */
    protected $meeting_times;
    
    /**
      * $population_serveds An unordered collection of interventionPopulationServeds.  A subset of students that are the focus of the intervention. 
      * @var \Swagger\Client\Model\InterventionPopulationServed[]
      */
    protected $population_serveds;
    
    /**
      * $staffs An unordered collection of interventionStaffs.  Staff member associated with the intervention.
      * @var \Swagger\Client\Model\InterventionStaff[]
      */
    protected $staffs;
    
    /**
      * $uris An unordered collection of interventionURIs.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource.
      * @var \Swagger\Client\Model\InterventionURI[]
      */
    protected $uris;
    
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
            $this->identification_code = $data["identification_code"];
            $this->class_type = $data["class_type"];
            $this->delivery_method_type = $data["delivery_method_type"];
            $this->begin_date = $data["begin_date"];
            $this->end_date = $data["end_date"];
            $this->appropriate_grade_levels = $data["appropriate_grade_levels"];
            $this->appropriate_sexes = $data["appropriate_sexes"];
            $this->diagnoses = $data["diagnoses"];
            $this->education_contents = $data["education_contents"];
            $this->intervention_prescriptions = $data["intervention_prescriptions"];
            $this->learning_resource_metadata_ur_is = $data["learning_resource_metadata_ur_is"];
            $this->meeting_times = $data["meeting_times"];
            $this->population_serveds = $data["population_serveds"];
            $this->staffs = $data["staffs"];
            $this->uris = $data["uris"];
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
     * Gets identification_code
     * @return string
     */
    public function getIdentificationCode()
    {
        return $this->identification_code;
    }
  
    /**
     * Sets identification_code
     * @param string $identification_code A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setIdentificationCode($identification_code)
    {
        
        $this->identification_code = $identification_code;
        return $this;
    }
    
    /**
     * Gets class_type
     * @return string
     */
    public function getClassType()
    {
        return $this->class_type;
    }
  
    /**
     * Sets class_type
     * @param string $class_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setClassType($class_type)
    {
        
        $this->class_type = $class_type;
        return $this;
    }
    
    /**
     * Gets delivery_method_type
     * @return string
     */
    public function getDeliveryMethodType()
    {
        return $this->delivery_method_type;
    }
  
    /**
     * Sets delivery_method_type
     * @param string $delivery_method_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setDeliveryMethodType($delivery_method_type)
    {
        
        $this->delivery_method_type = $delivery_method_type;
        return $this;
    }
    
    /**
     * Gets begin_date
     * @return \\DateTime
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }
  
    /**
     * Sets begin_date
     * @param \\DateTime $begin_date The start date for the intervention implementation.
     * @return $this
     */
    public function setBeginDate($begin_date)
    {
        
        $this->begin_date = $begin_date;
        return $this;
    }
    
    /**
     * Gets end_date
     * @return \\DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
  
    /**
     * Sets end_date
     * @param \\DateTime $end_date The end date for the intervention implementation.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets appropriate_grade_levels
     * @return \Swagger\Client\Model\InterventionAppropriateGradeLevel[]
     */
    public function getAppropriateGradeLevels()
    {
        return $this->appropriate_grade_levels;
    }
  
    /**
     * Sets appropriate_grade_levels
     * @param \Swagger\Client\Model\InterventionAppropriateGradeLevel[] $appropriate_grade_levels An unordered collection of interventionAppropriateGradeLevels.  Grade levels for the intervention.
     * @return $this
     */
    public function setAppropriateGradeLevels($appropriate_grade_levels)
    {
        
        $this->appropriate_grade_levels = $appropriate_grade_levels;
        return $this;
    }
    
    /**
     * Gets appropriate_sexes
     * @return \Swagger\Client\Model\InterventionAppropriateSex[]
     */
    public function getAppropriateSexes()
    {
        return $this->appropriate_sexes;
    }
  
    /**
     * Sets appropriate_sexes
     * @param \Swagger\Client\Model\InterventionAppropriateSex[] $appropriate_sexes An unordered collection of interventionAppropriateSexes.  Gender(s) for which the intervention is appropriate.
     * @return $this
     */
    public function setAppropriateSexes($appropriate_sexes)
    {
        
        $this->appropriate_sexes = $appropriate_sexes;
        return $this;
    }
    
    /**
     * Gets diagnoses
     * @return \Swagger\Client\Model\InterventionDiagnosis[]
     */
    public function getDiagnoses()
    {
        return $this->diagnoses;
    }
  
    /**
     * Sets diagnoses
     * @param \Swagger\Client\Model\InterventionDiagnosis[] $diagnoses An unordered collection of interventionDiagnoses.  Targeted purpose of the intervention (e.g., attendance issue, dropout risk).
     * @return $this
     */
    public function setDiagnoses($diagnoses)
    {
        
        $this->diagnoses = $diagnoses;
        return $this;
    }
    
    /**
     * Gets education_contents
     * @return \Swagger\Client\Model\InterventionEducationContent[]
     */
    public function getEducationContents()
    {
        return $this->education_contents;
    }
  
    /**
     * Sets education_contents
     * @param \Swagger\Client\Model\InterventionEducationContent[] $education_contents An unordered collection of interventionEducationContents.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource.
     * @return $this
     */
    public function setEducationContents($education_contents)
    {
        
        $this->education_contents = $education_contents;
        return $this;
    }
    
    /**
     * Gets intervention_prescriptions
     * @return \Swagger\Client\Model\InterventionInterventionPrescription[]
     */
    public function getInterventionPrescriptions()
    {
        return $this->intervention_prescriptions;
    }
  
    /**
     * Sets intervention_prescriptions
     * @param \Swagger\Client\Model\InterventionInterventionPrescription[] $intervention_prescriptions An unordered collection of interventionInterventionPrescriptions.  The reference to the intervention prescription being followed in this intervention implementation.
     * @return $this
     */
    public function setInterventionPrescriptions($intervention_prescriptions)
    {
        
        $this->intervention_prescriptions = $intervention_prescriptions;
        return $this;
    }
    
    /**
     * Gets learning_resource_metadata_ur_is
     * @return \Swagger\Client\Model\InterventionLearningResourceMetadataURI[]
     */
    public function getLearningResourceMetadataUrIs()
    {
        return $this->learning_resource_metadata_ur_is;
    }
  
    /**
     * Sets learning_resource_metadata_ur_is
     * @param \Swagger\Client\Model\InterventionLearningResourceMetadataURI[] $learning_resource_metadata_ur_is An unordered collection of interventionLearningResourceMetadataURIs.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource.
     * @return $this
     */
    public function setLearningResourceMetadataUrIs($learning_resource_metadata_ur_is)
    {
        
        $this->learning_resource_metadata_ur_is = $learning_resource_metadata_ur_is;
        return $this;
    }
    
    /**
     * Gets meeting_times
     * @return \Swagger\Client\Model\InterventionMeetingTime[]
     */
    public function getMeetingTimes()
    {
        return $this->meeting_times;
    }
  
    /**
     * Sets meeting_times
     * @param \Swagger\Client\Model\InterventionMeetingTime[] $meeting_times An unordered collection of interventionMeetingTimes.  The times at which this intervention is scheduled to meet.
     * @return $this
     */
    public function setMeetingTimes($meeting_times)
    {
        
        $this->meeting_times = $meeting_times;
        return $this;
    }
    
    /**
     * Gets population_serveds
     * @return \Swagger\Client\Model\InterventionPopulationServed[]
     */
    public function getPopulationServeds()
    {
        return $this->population_serveds;
    }
  
    /**
     * Sets population_serveds
     * @param \Swagger\Client\Model\InterventionPopulationServed[] $population_serveds An unordered collection of interventionPopulationServeds.  A subset of students that are the focus of the intervention. 
     * @return $this
     */
    public function setPopulationServeds($population_serveds)
    {
        
        $this->population_serveds = $population_serveds;
        return $this;
    }
    
    /**
     * Gets staffs
     * @return \Swagger\Client\Model\InterventionStaff[]
     */
    public function getStaffs()
    {
        return $this->staffs;
    }
  
    /**
     * Sets staffs
     * @param \Swagger\Client\Model\InterventionStaff[] $staffs An unordered collection of interventionStaffs.  Staff member associated with the intervention.
     * @return $this
     */
    public function setStaffs($staffs)
    {
        
        $this->staffs = $staffs;
        return $this;
    }
    
    /**
     * Gets uris
     * @return \Swagger\Client\Model\InterventionURI[]
     */
    public function getUris()
    {
        return $this->uris;
    }
  
    /**
     * Sets uris
     * @param \Swagger\Client\Model\InterventionURI[] $uris An unordered collection of interventionURIs.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource.
     * @return $this
     */
    public function setUris($uris)
    {
        
        $this->uris = $uris;
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
