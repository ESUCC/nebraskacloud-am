<?php
/**
 * CompetencyObjective
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
 * CompetencyObjective Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompetencyObjective implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'education_organization_reference' => '\Swagger\Client\Model\EducationOrganizationReference',
        'objective' => 'string',
        'objective_grade_level_descriptor' => 'string',
        'competency_objective_id' => 'string',
        'description' => 'string',
        'success_criteria' => 'string',
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
        'objective' => 'objective',
        'objective_grade_level_descriptor' => 'objectiveGradeLevelDescriptor',
        'competency_objective_id' => 'competencyObjectiveId',
        'description' => 'description',
        'success_criteria' => 'successCriteria',
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
        'objective' => 'setObjective',
        'objective_grade_level_descriptor' => 'setObjectiveGradeLevelDescriptor',
        'competency_objective_id' => 'setCompetencyObjectiveId',
        'description' => 'setDescription',
        'success_criteria' => 'setSuccessCriteria',
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
        'objective' => 'getObjective',
        'objective_grade_level_descriptor' => 'getObjectiveGradeLevelDescriptor',
        'competency_objective_id' => 'getCompetencyObjectiveId',
        'description' => 'getDescription',
        'success_criteria' => 'getSuccessCriteria',
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
      * $objective The designated title of the learning objective.
      * @var string
      */
    protected $objective;
    
    /**
      * $objective_grade_level_descriptor The grade level for which the competency objective is targeted,
      * @var string
      */
    protected $objective_grade_level_descriptor;
    
    /**
      * $competency_objective_id The Identifier for the CompetencyObjective.
      * @var string
      */
    protected $competency_objective_id;
    
    /**
      * $description A detailed description of the entity.
      * @var string
      */
    protected $description;
    
    /**
      * $success_criteria One or more statements that describes the criteria used by teachers and students to check for attainment of a competency objective. This criteria gives clear indications as to the degree to which learning is moving through the Zone or Proximal Development toward independent achievement of the CompetencyObjective.
      * @var string
      */
    protected $success_criteria;
    
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
            $this->objective = $data["objective"];
            $this->objective_grade_level_descriptor = $data["objective_grade_level_descriptor"];
            $this->competency_objective_id = $data["competency_objective_id"];
            $this->description = $data["description"];
            $this->success_criteria = $data["success_criteria"];
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
     * Gets objective
     * @return string
     */
    public function getObjective()
    {
        return $this->objective;
    }
  
    /**
     * Sets objective
     * @param string $objective The designated title of the learning objective.
     * @return $this
     */
    public function setObjective($objective)
    {
        
        $this->objective = $objective;
        return $this;
    }
    
    /**
     * Gets objective_grade_level_descriptor
     * @return string
     */
    public function getObjectiveGradeLevelDescriptor()
    {
        return $this->objective_grade_level_descriptor;
    }
  
    /**
     * Sets objective_grade_level_descriptor
     * @param string $objective_grade_level_descriptor The grade level for which the competency objective is targeted,
     * @return $this
     */
    public function setObjectiveGradeLevelDescriptor($objective_grade_level_descriptor)
    {
        
        $this->objective_grade_level_descriptor = $objective_grade_level_descriptor;
        return $this;
    }
    
    /**
     * Gets competency_objective_id
     * @return string
     */
    public function getCompetencyObjectiveId()
    {
        return $this->competency_objective_id;
    }
  
    /**
     * Sets competency_objective_id
     * @param string $competency_objective_id The Identifier for the CompetencyObjective.
     * @return $this
     */
    public function setCompetencyObjectiveId($competency_objective_id)
    {
        
        $this->competency_objective_id = $competency_objective_id;
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
     * Gets success_criteria
     * @return string
     */
    public function getSuccessCriteria()
    {
        return $this->success_criteria;
    }
  
    /**
     * Sets success_criteria
     * @param string $success_criteria One or more statements that describes the criteria used by teachers and students to check for attainment of a competency objective. This criteria gives clear indications as to the degree to which learning is moving through the Zone or Proximal Development toward independent achievement of the CompetencyObjective.
     * @return $this
     */
    public function setSuccessCriteria($success_criteria)
    {
        
        $this->success_criteria = $success_criteria;
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
