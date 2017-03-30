<?php
/**
 * Program
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
 * Program Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Program implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'education_organization_reference' => '\Swagger\Client\Model\EducationOrganizationReference',
        'type' => 'string',
        'name' => 'string',
        'program_id' => 'string',
        'sponsor_type' => 'string',
        'characteristics' => '\Swagger\Client\Model\ProgramCharacteristic[]',
        'learning_objectives' => '\Swagger\Client\Model\ProgramLearningObjective[]',
        'learning_standards' => '\Swagger\Client\Model\ProgramLearningStandard[]',
        'services' => '\Swagger\Client\Model\ProgramService[]',
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
        'type' => 'type',
        'name' => 'name',
        'program_id' => 'programId',
        'sponsor_type' => 'sponsorType',
        'characteristics' => 'characteristics',
        'learning_objectives' => 'learningObjectives',
        'learning_standards' => 'learningStandards',
        'services' => 'services',
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
        'type' => 'setType',
        'name' => 'setName',
        'program_id' => 'setProgramId',
        'sponsor_type' => 'setSponsorType',
        'characteristics' => 'setCharacteristics',
        'learning_objectives' => 'setLearningObjectives',
        'learning_standards' => 'setLearningStandards',
        'services' => 'setServices',
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
        'type' => 'getType',
        'name' => 'getName',
        'program_id' => 'getProgramId',
        'sponsor_type' => 'getSponsorType',
        'characteristics' => 'getCharacteristics',
        'learning_objectives' => 'getLearningObjectives',
        'learning_standards' => 'getLearningStandards',
        'services' => 'getServices',
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
      * $type Key for Program
      * @var string
      */
    protected $type;
    
    /**
      * $name The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies.
      * @var string
      */
    protected $name;
    
    /**
      * $program_id A unique number or alphanumeric code assigned to a program by a school, school system, a state, or other agency or entity.
      * @var string
      */
    protected $program_id;
    
    /**
      * $sponsor_type Key for ProgramSponsor
      * @var string
      */
    protected $sponsor_type;
    
    /**
      * $characteristics An unordered collection of programCharacteristics.  Reflects important characteristics of the Program, such as categories or particular indications.
      * @var \Swagger\Client\Model\ProgramCharacteristic[]
      */
    protected $characteristics;
    
    /**
      * $learning_objectives An unordered collection of programLearningObjectives.  Learning Standard followed by this program.
      * @var \Swagger\Client\Model\ProgramLearningObjective[]
      */
    protected $learning_objectives;
    
    /**
      * $learning_standards An unordered collection of programLearningStandards.  References the Learning Objective(s) the Program is associated with.
      * @var \Swagger\Client\Model\ProgramLearningStandard[]
      */
    protected $learning_standards;
    
    /**
      * $services An unordered collection of programServices.  Defines the services this program provides to students.
      * @var \Swagger\Client\Model\ProgramService[]
      */
    protected $services;
    
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
            $this->type = $data["type"];
            $this->name = $data["name"];
            $this->program_id = $data["program_id"];
            $this->sponsor_type = $data["sponsor_type"];
            $this->characteristics = $data["characteristics"];
            $this->learning_objectives = $data["learning_objectives"];
            $this->learning_standards = $data["learning_standards"];
            $this->services = $data["services"];
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Key for Program
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies.
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets program_id
     * @return string
     */
    public function getProgramId()
    {
        return $this->program_id;
    }
  
    /**
     * Sets program_id
     * @param string $program_id A unique number or alphanumeric code assigned to a program by a school, school system, a state, or other agency or entity.
     * @return $this
     */
    public function setProgramId($program_id)
    {
        
        $this->program_id = $program_id;
        return $this;
    }
    
    /**
     * Gets sponsor_type
     * @return string
     */
    public function getSponsorType()
    {
        return $this->sponsor_type;
    }
  
    /**
     * Sets sponsor_type
     * @param string $sponsor_type Key for ProgramSponsor
     * @return $this
     */
    public function setSponsorType($sponsor_type)
    {
        
        $this->sponsor_type = $sponsor_type;
        return $this;
    }
    
    /**
     * Gets characteristics
     * @return \Swagger\Client\Model\ProgramCharacteristic[]
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }
  
    /**
     * Sets characteristics
     * @param \Swagger\Client\Model\ProgramCharacteristic[] $characteristics An unordered collection of programCharacteristics.  Reflects important characteristics of the Program, such as categories or particular indications.
     * @return $this
     */
    public function setCharacteristics($characteristics)
    {
        
        $this->characteristics = $characteristics;
        return $this;
    }
    
    /**
     * Gets learning_objectives
     * @return \Swagger\Client\Model\ProgramLearningObjective[]
     */
    public function getLearningObjectives()
    {
        return $this->learning_objectives;
    }
  
    /**
     * Sets learning_objectives
     * @param \Swagger\Client\Model\ProgramLearningObjective[] $learning_objectives An unordered collection of programLearningObjectives.  Learning Standard followed by this program.
     * @return $this
     */
    public function setLearningObjectives($learning_objectives)
    {
        
        $this->learning_objectives = $learning_objectives;
        return $this;
    }
    
    /**
     * Gets learning_standards
     * @return \Swagger\Client\Model\ProgramLearningStandard[]
     */
    public function getLearningStandards()
    {
        return $this->learning_standards;
    }
  
    /**
     * Sets learning_standards
     * @param \Swagger\Client\Model\ProgramLearningStandard[] $learning_standards An unordered collection of programLearningStandards.  References the Learning Objective(s) the Program is associated with.
     * @return $this
     */
    public function setLearningStandards($learning_standards)
    {
        
        $this->learning_standards = $learning_standards;
        return $this;
    }
    
    /**
     * Gets services
     * @return \Swagger\Client\Model\ProgramService[]
     */
    public function getServices()
    {
        return $this->services;
    }
  
    /**
     * Sets services
     * @param \Swagger\Client\Model\ProgramService[] $services An unordered collection of programServices.  Defines the services this program provides to students.
     * @return $this
     */
    public function setServices($services)
    {
        
        $this->services = $services;
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
