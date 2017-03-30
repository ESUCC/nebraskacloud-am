<?php
/**
 * StaffEducationOrganizationPositionAssignmentAssociation
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
 * StaffEducationOrganizationPositionAssignmentAssociation Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StaffEducationOrganizationPositionAssignmentAssociation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        '_etag' => 'string',
        'begin_date' => '\DateTime',
        'controlling_district_code' => 'string',
        'education_organization_reference' => '\Swagger\Client\Model\EducationOrganizationReference',
        'end_date' => '\DateTime',
        'full_time_equivalency' => 'int',
        'id' => 'string',
        'staff_position_assignment_descriptor' => 'string',
        'staff_reference' => '\Swagger\Client\Model\StaffReference'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        '_etag' => '_etag',
        'begin_date' => 'beginDate',
        'controlling_district_code' => 'controllingDistrictCode',
        'education_organization_reference' => 'educationOrganizationReference',
        'end_date' => 'endDate',
        'full_time_equivalency' => 'fullTimeEquivalency',
        'id' => 'id',
        'staff_position_assignment_descriptor' => 'staffPositionAssignmentDescriptor',
        'staff_reference' => 'staffReference'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        '_etag' => 'setEtag',
        'begin_date' => 'setBeginDate',
        'controlling_district_code' => 'setControllingDistrictCode',
        'education_organization_reference' => 'setEducationOrganizationReference',
        'end_date' => 'setEndDate',
        'full_time_equivalency' => 'setFullTimeEquivalency',
        'id' => 'setId',
        'staff_position_assignment_descriptor' => 'setStaffPositionAssignmentDescriptor',
        'staff_reference' => 'setStaffReference'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        '_etag' => 'getEtag',
        'begin_date' => 'getBeginDate',
        'controlling_district_code' => 'getControllingDistrictCode',
        'education_organization_reference' => 'getEducationOrganizationReference',
        'end_date' => 'getEndDate',
        'full_time_equivalency' => 'getFullTimeEquivalency',
        'id' => 'getId',
        'staff_position_assignment_descriptor' => 'getStaffPositionAssignmentDescriptor',
        'staff_reference' => 'getStaffReference'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $_etag A unique system-generated value that identifies the version of the resource.
      * @var string
      */
    protected $_etag;
    
    /**
      * $begin_date Month, day and year of the start or effective date of a staff member''s employment, contract or relationship with the LEA.  
      * @var \DateTime
      */
    protected $begin_date;
    
    /**
      * $controlling_district_code Staff assigned to serve Districts/Systems/ESUs other than the District/System/ESU that holds the contract. This field will also be used for Educational Service Units to report Staff assigned to Districts/Systems/ESUs.
      * @var string
      */
    protected $controlling_district_code;
    
    /**
      * $education_organization_reference A reference to the related EducationOrganization resource.
      * @var \Swagger\Client\Model\EducationOrganizationReference
      */
    protected $education_organization_reference;
    
    /**
      * $end_date Month, day and year of the end or termination date of a staff member''s employment, contract or relationship with the LEA.  
      * @var \DateTime
      */
    protected $end_date;
    
    /**
      * $full_time_equivalency The value between 1 and 100 that indicates the percentage of the staff member s time that is allocated to the assignment (no decimal). This is an indication of the time a staff member spends in their assignment as it relates to the total time in the workweek defined for that assignment. Full-time FTE is reported as 100.
      * @var int
      */
    protected $full_time_equivalency;
    
    /**
      * $id The unique identifier of the resource.
      * @var string
      */
    protected $id;
    
    /**
      * $staff_position_assignment_descriptor The titles of employment, official status, or rank of education staff.  
      * @var string
      */
    protected $staff_position_assignment_descriptor;
    
    /**
      * $staff_reference A reference to the related Staff resource.
      * @var \Swagger\Client\Model\StaffReference
      */
    protected $staff_reference;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->_etag = $data["_etag"];
            $this->begin_date = $data["begin_date"];
            $this->controlling_district_code = $data["controlling_district_code"];
            $this->education_organization_reference = $data["education_organization_reference"];
            $this->end_date = $data["end_date"];
            $this->full_time_equivalency = $data["full_time_equivalency"];
            $this->id = $data["id"];
            $this->staff_position_assignment_descriptor = $data["staff_position_assignment_descriptor"];
            $this->staff_reference = $data["staff_reference"];
        }
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
     * Gets begin_date
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }
  
    /**
     * Sets begin_date
     * @param \DateTime $begin_date Month, day and year of the start or effective date of a staff member''s employment, contract or relationship with the LEA.  
     * @return $this
     */
    public function setBeginDate($begin_date)
    {
        
        $this->begin_date = $begin_date;
        return $this;
    }
    
    /**
     * Gets controlling_district_code
     * @return string
     */
    public function getControllingDistrictCode()
    {
        return $this->controlling_district_code;
    }
  
    /**
     * Sets controlling_district_code
     * @param string $controlling_district_code Staff assigned to serve Districts/Systems/ESUs other than the District/System/ESU that holds the contract. This field will also be used for Educational Service Units to report Staff assigned to Districts/Systems/ESUs.
     * @return $this
     */
    public function setControllingDistrictCode($controlling_district_code)
    {
        
        $this->controlling_district_code = $controlling_district_code;
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
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }
  
    /**
     * Sets end_date
     * @param \DateTime $end_date Month, day and year of the end or termination date of a staff member''s employment, contract or relationship with the LEA.  
     * @return $this
     */
    public function setEndDate($end_date)
    {
        
        $this->end_date = $end_date;
        return $this;
    }
    
    /**
     * Gets full_time_equivalency
     * @return int
     */
    public function getFullTimeEquivalency()
    {
        return $this->full_time_equivalency;
    }
  
    /**
     * Sets full_time_equivalency
     * @param int $full_time_equivalency The value between 1 and 100 that indicates the percentage of the staff member s time that is allocated to the assignment (no decimal). This is an indication of the time a staff member spends in their assignment as it relates to the total time in the workweek defined for that assignment. Full-time FTE is reported as 100.
     * @return $this
     */
    public function setFullTimeEquivalency($full_time_equivalency)
    {
        
        $this->full_time_equivalency = $full_time_equivalency;
        return $this;
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
     * Gets staff_position_assignment_descriptor
     * @return string
     */
    public function getStaffPositionAssignmentDescriptor()
    {
        return $this->staff_position_assignment_descriptor;
    }
  
    /**
     * Sets staff_position_assignment_descriptor
     * @param string $staff_position_assignment_descriptor The titles of employment, official status, or rank of education staff.  
     * @return $this
     */
    public function setStaffPositionAssignmentDescriptor($staff_position_assignment_descriptor)
    {
        
        $this->staff_position_assignment_descriptor = $staff_position_assignment_descriptor;
        return $this;
    }
    
    /**
     * Gets staff_reference
     * @return \Swagger\Client\Model\StaffReference
     */
    public function getStaffReference()
    {
        return $this->staff_reference;
    }
  
    /**
     * Sets staff_reference
     * @param \Swagger\Client\Model\StaffReference $staff_reference A reference to the related Staff resource.
     * @return $this
     */
    public function setStaffReference($staff_reference)
    {
        
        $this->staff_reference = $staff_reference;
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