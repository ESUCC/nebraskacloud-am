<?php
/**
 * StudentParentAssociation
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
 * StudentParentAssociation Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentParentAssociation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'parent_reference' => '\Swagger\Client\Model\ParentReference',
        'student_reference' => '\Swagger\Client\Model\StudentReference',
        'relation_type' => 'string',
        'primary_contact_status' => 'bool',
        'lives_with' => 'bool',
        'emergency_contact_status' => 'bool',
        'contact_priority' => 'int',
        'contact_restrictions' => 'string',
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
        'parent_reference' => 'parentReference',
        'student_reference' => 'studentReference',
        'relation_type' => 'relationType',
        'primary_contact_status' => 'primaryContactStatus',
        'lives_with' => 'livesWith',
        'emergency_contact_status' => 'emergencyContactStatus',
        'contact_priority' => 'contactPriority',
        'contact_restrictions' => 'contactRestrictions',
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
        'parent_reference' => 'setParentReference',
        'student_reference' => 'setStudentReference',
        'relation_type' => 'setRelationType',
        'primary_contact_status' => 'setPrimaryContactStatus',
        'lives_with' => 'setLivesWith',
        'emergency_contact_status' => 'setEmergencyContactStatus',
        'contact_priority' => 'setContactPriority',
        'contact_restrictions' => 'setContactRestrictions',
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
        'parent_reference' => 'getParentReference',
        'student_reference' => 'getStudentReference',
        'relation_type' => 'getRelationType',
        'primary_contact_status' => 'getPrimaryContactStatus',
        'lives_with' => 'getLivesWith',
        'emergency_contact_status' => 'getEmergencyContactStatus',
        'contact_priority' => 'getContactPriority',
        'contact_restrictions' => 'getContactRestrictions',
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
      * $parent_reference A reference to the related Parent resource.
      * @var \Swagger\Client\Model\ParentReference
      */
    protected $parent_reference;
    
    /**
      * $student_reference A reference to the related Student resource.
      * @var \Swagger\Client\Model\StudentReference
      */
    protected $student_reference;
    
    /**
      * $relation_type The nature of an individual''s relationship to a student; for example:  Father  Mother  Step Father  Step Mother  Foster Father  Foster Mother  Guardian  ...  NEDM: Relationship to Student
      * @var string
      */
    protected $relation_type;
    
    /**
      * $primary_contact_status Indicator of whether the person is a primary parental contact for the Student.
      * @var bool
      */
    protected $primary_contact_status;
    
    /**
      * $lives_with Indicator of whether the Student lives with the associated parent.
      * @var bool
      */
    protected $lives_with;
    
    /**
      * $emergency_contact_status Indicator of whether the person is a designated emergency contact for the Student.
      * @var bool
      */
    protected $emergency_contact_status;
    
    /**
      * $contact_priority The numeric order of the preferred sequence or priority of contact.
      * @var int
      */
    protected $contact_priority;
    
    /**
      * $contact_restrictions Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual).
      * @var string
      */
    protected $contact_restrictions;
    
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
            $this->parent_reference = $data["parent_reference"];
            $this->student_reference = $data["student_reference"];
            $this->relation_type = $data["relation_type"];
            $this->primary_contact_status = $data["primary_contact_status"];
            $this->lives_with = $data["lives_with"];
            $this->emergency_contact_status = $data["emergency_contact_status"];
            $this->contact_priority = $data["contact_priority"];
            $this->contact_restrictions = $data["contact_restrictions"];
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
     * Gets parent_reference
     * @return \Swagger\Client\Model\ParentReference
     */
    public function getParentReference()
    {
        return $this->parent_reference;
    }
  
    /**
     * Sets parent_reference
     * @param \Swagger\Client\Model\ParentReference $parent_reference A reference to the related Parent resource.
     * @return $this
     */
    public function setParentReference($parent_reference)
    {
        
        $this->parent_reference = $parent_reference;
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
     * Gets relation_type
     * @return string
     */
    public function getRelationType()
    {
        return $this->relation_type;
    }
  
    /**
     * Sets relation_type
     * @param string $relation_type The nature of an individual''s relationship to a student; for example:  Father  Mother  Step Father  Step Mother  Foster Father  Foster Mother  Guardian  ...  NEDM: Relationship to Student
     * @return $this
     */
    public function setRelationType($relation_type)
    {
        
        $this->relation_type = $relation_type;
        return $this;
    }
    
    /**
     * Gets primary_contact_status
     * @return bool
     */
    public function getPrimaryContactStatus()
    {
        return $this->primary_contact_status;
    }
  
    /**
     * Sets primary_contact_status
     * @param bool $primary_contact_status Indicator of whether the person is a primary parental contact for the Student.
     * @return $this
     */
    public function setPrimaryContactStatus($primary_contact_status)
    {
        
        $this->primary_contact_status = $primary_contact_status;
        return $this;
    }
    
    /**
     * Gets lives_with
     * @return bool
     */
    public function getLivesWith()
    {
        return $this->lives_with;
    }
  
    /**
     * Sets lives_with
     * @param bool $lives_with Indicator of whether the Student lives with the associated parent.
     * @return $this
     */
    public function setLivesWith($lives_with)
    {
        
        $this->lives_with = $lives_with;
        return $this;
    }
    
    /**
     * Gets emergency_contact_status
     * @return bool
     */
    public function getEmergencyContactStatus()
    {
        return $this->emergency_contact_status;
    }
  
    /**
     * Sets emergency_contact_status
     * @param bool $emergency_contact_status Indicator of whether the person is a designated emergency contact for the Student.
     * @return $this
     */
    public function setEmergencyContactStatus($emergency_contact_status)
    {
        
        $this->emergency_contact_status = $emergency_contact_status;
        return $this;
    }
    
    /**
     * Gets contact_priority
     * @return int
     */
    public function getContactPriority()
    {
        return $this->contact_priority;
    }
  
    /**
     * Sets contact_priority
     * @param int $contact_priority The numeric order of the preferred sequence or priority of contact.
     * @return $this
     */
    public function setContactPriority($contact_priority)
    {
        
        $this->contact_priority = $contact_priority;
        return $this;
    }
    
    /**
     * Gets contact_restrictions
     * @return string
     */
    public function getContactRestrictions()
    {
        return $this->contact_restrictions;
    }
  
    /**
     * Sets contact_restrictions
     * @param string $contact_restrictions Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual).
     * @return $this
     */
    public function setContactRestrictions($contact_restrictions)
    {
        
        $this->contact_restrictions = $contact_restrictions;
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
