<?php
/**
 * GraduationPlanReference
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
 * GraduationPlanReference Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GraduationPlanReference implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type_descriptor' => 'string',
        'education_organization_id' => 'int',
        'graduation_school_year' => 'int',
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
        'type_descriptor' => 'typeDescriptor',
        'education_organization_id' => 'educationOrganizationId',
        'graduation_school_year' => 'graduationSchoolYear',
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
        'type_descriptor' => 'setTypeDescriptor',
        'education_organization_id' => 'setEducationOrganizationId',
        'graduation_school_year' => 'setGraduationSchoolYear',
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
        'type_descriptor' => 'getTypeDescriptor',
        'education_organization_id' => 'getEducationOrganizationId',
        'graduation_school_year' => 'getGraduationSchoolYear',
        'link' => 'getLink'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $type_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $type_descriptor;
    
    /**
      * $education_organization_id EducationOrganization Identity Column
      * @var int
      */
    protected $education_organization_id;
    
    /**
      * $graduation_school_year Key for School
      * @var int
      */
    protected $graduation_school_year;
    
    /**
      * $link Represents a hyperlink to the related graduationPlan resource.
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
            $this->type_descriptor = $data["type_descriptor"];
            $this->education_organization_id = $data["education_organization_id"];
            $this->graduation_school_year = $data["graduation_school_year"];
            $this->link = $data["link"];
        }
    }
    
    /**
     * Gets type_descriptor
     * @return string
     */
    public function getTypeDescriptor()
    {
        return $this->type_descriptor;
    }
  
    /**
     * Sets type_descriptor
     * @param string $type_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setTypeDescriptor($type_descriptor)
    {
        
        $this->type_descriptor = $type_descriptor;
        return $this;
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
     * Gets graduation_school_year
     * @return int
     */
    public function getGraduationSchoolYear()
    {
        return $this->graduation_school_year;
    }
  
    /**
     * Sets graduation_school_year
     * @param int $graduation_school_year Key for School
     * @return $this
     */
    public function setGraduationSchoolYear($graduation_school_year)
    {
        
        $this->graduation_school_year = $graduation_school_year;
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
     * @param \Swagger\Client\Model\Link $link Represents a hyperlink to the related graduationPlan resource.
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
