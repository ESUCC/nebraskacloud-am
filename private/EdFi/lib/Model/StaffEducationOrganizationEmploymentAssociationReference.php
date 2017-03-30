<?php
/**
 * StaffEducationOrganizationEmploymentAssociationReference
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
 * StaffEducationOrganizationEmploymentAssociationReference Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StaffEducationOrganizationEmploymentAssociationReference implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'education_organization_id' => 'int',
        'staff_unique_id' => 'string',
        'employment_status_descriptor' => 'string',
        'hire_date' => '\\DateTime',
        'link' => '\Swagger\Client\Model\Link'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'education_organization_id' => 'educationOrganizationId',
        'staff_unique_id' => 'staffUniqueId',
        'employment_status_descriptor' => 'employmentStatusDescriptor',
        'hire_date' => 'hireDate',
        'link' => 'link'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'education_organization_id' => 'setEducationOrganizationId',
        'staff_unique_id' => 'setStaffUniqueId',
        'employment_status_descriptor' => 'setEmploymentStatusDescriptor',
        'hire_date' => 'setHireDate',
        'link' => 'setLink'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'education_organization_id' => 'getEducationOrganizationId',
        'staff_unique_id' => 'getStaffUniqueId',
        'employment_status_descriptor' => 'getEmploymentStatusDescriptor',
        'hire_date' => 'getHireDate',
        'link' => 'getLink'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $education_organization_id EducationOrganization Identity Column
      * @var int
      */
    protected $education_organization_id;
    
    /**
      * $staff_unique_id A unique alpha-numeric code assigned to a staff.
      * @var string
      */
    protected $staff_unique_id;
    
    /**
      * $employment_status_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $employment_status_descriptor;
    
    /**
      * $hire_date The month, day, and year on which an individual was hired for a position.
      * @var \\DateTime
      */
    protected $hire_date;
    
    /**
      * $link Represents a hyperlink to the related staffEducationOrganizationEmploymentAssociation resource.
      * @var \Swagger\Client\Model\Link
      */
    protected $link;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->education_organization_id = $data["education_organization_id"];
            $this->staff_unique_id = $data["staff_unique_id"];
            $this->employment_status_descriptor = $data["employment_status_descriptor"];
            $this->hire_date = $data["hire_date"];
            $this->link = $data["link"];
        }
    }
    
    /**
     * Gets education_organization_id
     * @return int
     */
    public function getEducationOrganizationId()
    {
        return $this->education_organization_id;
    }
  
    /**
     * Sets education_organization_id
     * @param int $education_organization_id EducationOrganization Identity Column
     * @return $this
     */
    public function setEducationOrganizationId($education_organization_id)
    {
        
        $this->education_organization_id = $education_organization_id;
        return $this;
    }
    
    /**
     * Gets staff_unique_id
     * @return string
     */
    public function getStaffUniqueId()
    {
        return $this->staff_unique_id;
    }
  
    /**
     * Sets staff_unique_id
     * @param string $staff_unique_id A unique alpha-numeric code assigned to a staff.
     * @return $this
     */
    public function setStaffUniqueId($staff_unique_id)
    {
        
        $this->staff_unique_id = $staff_unique_id;
        return $this;
    }
    
    /**
     * Gets employment_status_descriptor
     * @return string
     */
    public function getEmploymentStatusDescriptor()
    {
        return $this->employment_status_descriptor;
    }
  
    /**
     * Sets employment_status_descriptor
     * @param string $employment_status_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setEmploymentStatusDescriptor($employment_status_descriptor)
    {
        
        $this->employment_status_descriptor = $employment_status_descriptor;
        return $this;
    }
    
    /**
     * Gets hire_date
     * @return \\DateTime
     */
    public function getHireDate()
    {
        return $this->hire_date;
    }
  
    /**
     * Sets hire_date
     * @param \\DateTime $hire_date The month, day, and year on which an individual was hired for a position.
     * @return $this
     */
    public function setHireDate($hire_date)
    {
        
        $this->hire_date = $hire_date;
        return $this;
    }
    
    /**
     * Gets link
     * @return \Swagger\Client\Model\Link
     */
    public function getLink()
    {
        return $this->link;
    }
  
    /**
     * Sets link
     * @param \Swagger\Client\Model\Link $link Represents a hyperlink to the related staffEducationOrganizationEmploymentAssociation resource.
     * @return $this
     */
    public function setLink($link)
    {
        
        $this->link = $link;
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