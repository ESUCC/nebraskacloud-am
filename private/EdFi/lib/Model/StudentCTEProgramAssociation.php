<?php
/**
 * StudentCTEProgramAssociation
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
 * StudentCTEProgramAssociation Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentCTEProgramAssociation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'education_organization_reference' => '\Swagger\Client\Model\EducationOrganizationReference',
        'program_reference' => '\Swagger\Client\Model\ProgramReference',
        'student_reference' => '\Swagger\Client\Model\StudentReference',
        'begin_date' => '\\DateTime',
        'end_date' => '\\DateTime',
        'reason_exited_descriptor' => 'string',
        'served_outside_of_regular_session' => 'bool',
        'services' => '\Swagger\Client\Model\StudentProgramAssociationService[]',
        'cte_programs' => '\Swagger\Client\Model\StudentCTEProgramAssociationCTEProgram[]',
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
        'program_reference' => 'programReference',
        'student_reference' => 'studentReference',
        'begin_date' => 'beginDate',
        'end_date' => 'endDate',
        'reason_exited_descriptor' => 'reasonExitedDescriptor',
        'served_outside_of_regular_session' => 'servedOutsideOfRegularSession',
        'services' => 'services',
        'cte_programs' => 'ctePrograms',
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
        'program_reference' => 'setProgramReference',
        'student_reference' => 'setStudentReference',
        'begin_date' => 'setBeginDate',
        'end_date' => 'setEndDate',
        'reason_exited_descriptor' => 'setReasonExitedDescriptor',
        'served_outside_of_regular_session' => 'setServedOutsideOfRegularSession',
        'services' => 'setServices',
        'cte_programs' => 'setCtePrograms',
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
        'program_reference' => 'getProgramReference',
        'student_reference' => 'getStudentReference',
        'begin_date' => 'getBeginDate',
        'end_date' => 'getEndDate',
        'reason_exited_descriptor' => 'getReasonExitedDescriptor',
        'served_outside_of_regular_session' => 'getServedOutsideOfRegularSession',
        'services' => 'getServices',
        'cte_programs' => 'getCtePrograms',
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
      * $program_reference A reference to the related Program resource.
      * @var \Swagger\Client\Model\ProgramReference
      */
    protected $program_reference;
    
    /**
      * $student_reference A reference to the related Student resource.
      * @var \Swagger\Client\Model\StudentReference
      */
    protected $student_reference;
    
    /**
      * $begin_date The month, day, and year on which the Student first received services.
      * @var \\DateTime
      */
    protected $begin_date;
    
    /**
      * $end_date The month, day, and year on which the Student exited the Program or stopped receiving services.
      * @var \\DateTime
      */
    protected $end_date;
    
    /**
      * $reason_exited_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $reason_exited_descriptor;
    
    /**
      * $served_outside_of_regular_session Indicates whether the Student received services during the summer session or between sessions.
      * @var bool
      */
    protected $served_outside_of_regular_session;
    
    /**
      * $services An unordered collection of studentProgramAssociationServices.  Indicates the services being provided to the student by the program.
      * @var \Swagger\Client\Model\StudentProgramAssociationService[]
      */
    protected $services;
    
    /**
      * $cte_programs An unordered collection of studentCTEProgramAssociationCTEPrograms.  This association represents the career and technical education (CTE) program that a student participates in. The association is an extension of the StudentProgramAssociation particular for CTE programs.
      * @var \Swagger\Client\Model\StudentCTEProgramAssociationCTEProgram[]
      */
    protected $cte_programs;
    
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
            $this->program_reference = $data["program_reference"];
            $this->student_reference = $data["student_reference"];
            $this->begin_date = $data["begin_date"];
            $this->end_date = $data["end_date"];
            $this->reason_exited_descriptor = $data["reason_exited_descriptor"];
            $this->served_outside_of_regular_session = $data["served_outside_of_regular_session"];
            $this->services = $data["services"];
            $this->cte_programs = $data["cte_programs"];
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
     * Gets program_reference
     * @return \Swagger\Client\Model\ProgramReference
     */
    public function getProgramReference()
    {
        return $this->program_reference;
    }
  
    /**
     * Sets program_reference
     * @param \Swagger\Client\Model\ProgramReference $program_reference A reference to the related Program resource.
     * @return $this
     */
    public function setProgramReference($program_reference)
    {
        
        $this->program_reference = $program_reference;
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
     * Gets begin_date
     * @return \\DateTime
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }
  
    /**
     * Sets begin_date
     * @param \\DateTime $begin_date The month, day, and year on which the Student first received services.
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
     * @param \\DateTime $end_date The month, day, and year on which the Student exited the Program or stopped receiving services.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets reason_exited_descriptor
     * @return string
     */
    public function getReasonExitedDescriptor()
    {
        return $this->reason_exited_descriptor;
    }
  
    /**
     * Sets reason_exited_descriptor
     * @param string $reason_exited_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setReasonExitedDescriptor($reason_exited_descriptor)
    {
        
        $this->reason_exited_descriptor = $reason_exited_descriptor;
        return $this;
    }
    
    /**
     * Gets served_outside_of_regular_session
     * @return bool
     */
    public function getServedOutsideOfRegularSession()
    {
        return $this->served_outside_of_regular_session;
    }
  
    /**
     * Sets served_outside_of_regular_session
     * @param bool $served_outside_of_regular_session Indicates whether the Student received services during the summer session or between sessions.
     * @return $this
     */
    public function setServedOutsideOfRegularSession($served_outside_of_regular_session)
    {
        
        $this->served_outside_of_regular_session = $served_outside_of_regular_session;
        return $this;
    }
    
    /**
     * Gets services
     * @return \Swagger\Client\Model\StudentProgramAssociationService[]
     */
    public function getServices()
    {
        return $this->services;
    }
  
    /**
     * Sets services
     * @param \Swagger\Client\Model\StudentProgramAssociationService[] $services An unordered collection of studentProgramAssociationServices.  Indicates the services being provided to the student by the program.
     * @return $this
     */
    public function setServices($services)
    {
        
        $this->services = $services;
        return $this;
    }
    
    /**
     * Gets cte_programs
     * @return \Swagger\Client\Model\StudentCTEProgramAssociationCTEProgram[]
     */
    public function getCtePrograms()
    {
        return $this->cte_programs;
    }
  
    /**
     * Sets cte_programs
     * @param \Swagger\Client\Model\StudentCTEProgramAssociationCTEProgram[] $cte_programs An unordered collection of studentCTEProgramAssociationCTEPrograms.  This association represents the career and technical education (CTE) program that a student participates in. The association is an extension of the StudentProgramAssociation particular for CTE programs.
     * @return $this
     */
    public function setCtePrograms($cte_programs)
    {
        
        $this->cte_programs = $cte_programs;
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
