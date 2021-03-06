<?php
/**
 * CourseOffering
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
 * CourseOffering Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CourseOffering implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'course_reference' => '\Swagger\Client\Model\CourseReference',
        'school_reference' => '\Swagger\Client\Model\SchoolReference',
        'session_reference' => '\Swagger\Client\Model\SessionReference',
        'local_course_code' => 'string',
        'local_course_title' => 'string',
        'instructional_time_planned' => 'int',
        'curriculum_useds' => '\Swagger\Client\Model\CourseOfferingCurriculumUsed[]',
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
        'course_reference' => 'courseReference',
        'school_reference' => 'schoolReference',
        'session_reference' => 'sessionReference',
        'local_course_code' => 'localCourseCode',
        'local_course_title' => 'localCourseTitle',
        'instructional_time_planned' => 'instructionalTimePlanned',
        'curriculum_useds' => 'curriculumUseds',
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
        'course_reference' => 'setCourseReference',
        'school_reference' => 'setSchoolReference',
        'session_reference' => 'setSessionReference',
        'local_course_code' => 'setLocalCourseCode',
        'local_course_title' => 'setLocalCourseTitle',
        'instructional_time_planned' => 'setInstructionalTimePlanned',
        'curriculum_useds' => 'setCurriculumUseds',
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
        'course_reference' => 'getCourseReference',
        'school_reference' => 'getSchoolReference',
        'session_reference' => 'getSessionReference',
        'local_course_code' => 'getLocalCourseCode',
        'local_course_title' => 'getLocalCourseTitle',
        'instructional_time_planned' => 'getInstructionalTimePlanned',
        'curriculum_useds' => 'getCurriculumUseds',
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
      * $course_reference A reference to the related Course resource.
      * @var \Swagger\Client\Model\CourseReference
      */
    protected $course_reference;
    
    /**
      * $school_reference A reference to the related School resource.
      * @var \Swagger\Client\Model\SchoolReference
      */
    protected $school_reference;
    
    /**
      * $session_reference A reference to the related Session resource.
      * @var \Swagger\Client\Model\SessionReference
      */
    protected $session_reference;
    
    /**
      * $local_course_code The local code assigned by the LEA that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
      * @var string
      */
    protected $local_course_code;
    
    /**
      * $local_course_title The descriptive name given to a course of study offered in the school, if different from the CourseTitle.
      * @var string
      */
    protected $local_course_title;
    
    /**
      * $instructional_time_planned The planned total number of clock minutes of instruction for this course offering. Generally, this should be at least as many minutes as is required for completion by the related state- or district-defined course.
      * @var int
      */
    protected $instructional_time_planned;
    
    /**
      * $curriculum_useds An unordered collection of courseOfferingCurriculumUseds.  The type of curriculum used in an early learning classroom or group.
      * @var \Swagger\Client\Model\CourseOfferingCurriculumUsed[]
      */
    protected $curriculum_useds;
    
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
            $this->course_reference = $data["course_reference"];
            $this->school_reference = $data["school_reference"];
            $this->session_reference = $data["session_reference"];
            $this->local_course_code = $data["local_course_code"];
            $this->local_course_title = $data["local_course_title"];
            $this->instructional_time_planned = $data["instructional_time_planned"];
            $this->curriculum_useds = $data["curriculum_useds"];
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
     * Gets course_reference
     * @return \Swagger\Client\Model\CourseReference
     */
    public function getCourseReference()
    {
        return $this->course_reference;
    }
  
    /**
     * Sets course_reference
     * @param \Swagger\Client\Model\CourseReference $course_reference A reference to the related Course resource.
     * @return $this
     */
    public function setCourseReference($course_reference)
    {
        
        $this->course_reference = $course_reference;
        return $this;
    }
    
    /**
     * Gets school_reference
     * @return \Swagger\Client\Model\SchoolReference
     */
    public function getSchoolReference()
    {
        return $this->school_reference;
    }
  
    /**
     * Sets school_reference
     * @param \Swagger\Client\Model\SchoolReference $school_reference A reference to the related School resource.
     * @return $this
     */
    public function setSchoolReference($school_reference)
    {
        
        $this->school_reference = $school_reference;
        return $this;
    }
    
    /**
     * Gets session_reference
     * @return \Swagger\Client\Model\SessionReference
     */
    public function getSessionReference()
    {
        return $this->session_reference;
    }
  
    /**
     * Sets session_reference
     * @param \Swagger\Client\Model\SessionReference $session_reference A reference to the related Session resource.
     * @return $this
     */
    public function setSessionReference($session_reference)
    {
        
        $this->session_reference = $session_reference;
        return $this;
    }
    
    /**
     * Gets local_course_code
     * @return string
     */
    public function getLocalCourseCode()
    {
        return $this->local_course_code;
    }
  
    /**
     * Sets local_course_code
     * @param string $local_course_code The local code assigned by the LEA that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
     * @return $this
     */
    public function setLocalCourseCode($local_course_code)
    {
        
        $this->local_course_code = $local_course_code;
        return $this;
    }
    
    /**
     * Gets local_course_title
     * @return string
     */
    public function getLocalCourseTitle()
    {
        return $this->local_course_title;
    }
  
    /**
     * Sets local_course_title
     * @param string $local_course_title The descriptive name given to a course of study offered in the school, if different from the CourseTitle.
     * @return $this
     */
    public function setLocalCourseTitle($local_course_title)
    {
        
        $this->local_course_title = $local_course_title;
        return $this;
    }
    
    /**
     * Gets instructional_time_planned
     * @return int
     */
    public function getInstructionalTimePlanned()
    {
        return $this->instructional_time_planned;
    }
  
    /**
     * Sets instructional_time_planned
     * @param int $instructional_time_planned The planned total number of clock minutes of instruction for this course offering. Generally, this should be at least as many minutes as is required for completion by the related state- or district-defined course.
     * @return $this
     */
    public function setInstructionalTimePlanned($instructional_time_planned)
    {
        
        $this->instructional_time_planned = $instructional_time_planned;
        return $this;
    }
    
    /**
     * Gets curriculum_useds
     * @return \Swagger\Client\Model\CourseOfferingCurriculumUsed[]
     */
    public function getCurriculumUseds()
    {
        return $this->curriculum_useds;
    }
  
    /**
     * Sets curriculum_useds
     * @param \Swagger\Client\Model\CourseOfferingCurriculumUsed[] $curriculum_useds An unordered collection of courseOfferingCurriculumUseds.  The type of curriculum used in an early learning classroom or group.
     * @return $this
     */
    public function setCurriculumUseds($curriculum_useds)
    {
        
        $this->curriculum_useds = $curriculum_useds;
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
