<?php
/**
 * StudentInterventionAssociation
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
 * StudentInterventionAssociation Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentInterventionAssociation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'cohort_reference' => '\Swagger\Client\Model\CohortReference',
        'intervention_reference' => '\Swagger\Client\Model\InterventionReference',
        'student_reference' => '\Swagger\Client\Model\StudentReference',
        'diagnostic_statement' => 'string',
        'intervention_effectivenesses' => '\Swagger\Client\Model\StudentInterventionAssociationInterventionEffectiveness[]',
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
        'cohort_reference' => 'cohortReference',
        'intervention_reference' => 'interventionReference',
        'student_reference' => 'studentReference',
        'diagnostic_statement' => 'diagnosticStatement',
        'intervention_effectivenesses' => 'interventionEffectivenesses',
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
        'cohort_reference' => 'setCohortReference',
        'intervention_reference' => 'setInterventionReference',
        'student_reference' => 'setStudentReference',
        'diagnostic_statement' => 'setDiagnosticStatement',
        'intervention_effectivenesses' => 'setInterventionEffectivenesses',
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
        'cohort_reference' => 'getCohortReference',
        'intervention_reference' => 'getInterventionReference',
        'student_reference' => 'getStudentReference',
        'diagnostic_statement' => 'getDiagnosticStatement',
        'intervention_effectivenesses' => 'getInterventionEffectivenesses',
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
      * $cohort_reference A reference to the related Cohort resource.
      * @var \Swagger\Client\Model\CohortReference
      */
    protected $cohort_reference;
    
    /**
      * $intervention_reference A reference to the related Intervention resource.
      * @var \Swagger\Client\Model\InterventionReference
      */
    protected $intervention_reference;
    
    /**
      * $student_reference A reference to the related Student resource.
      * @var \Swagger\Client\Model\StudentReference
      */
    protected $student_reference;
    
    /**
      * $diagnostic_statement A statement provided by the teacher that provides information in addition to the grade or assessment score.
      * @var string
      */
    protected $diagnostic_statement;
    
    /**
      * $intervention_effectivenesses An unordered collection of studentInterventionAssociationInterventionEffectivenesses.  
      * @var \Swagger\Client\Model\StudentInterventionAssociationInterventionEffectiveness[]
      */
    protected $intervention_effectivenesses;
    
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
            $this->cohort_reference = $data["cohort_reference"];
            $this->intervention_reference = $data["intervention_reference"];
            $this->student_reference = $data["student_reference"];
            $this->diagnostic_statement = $data["diagnostic_statement"];
            $this->intervention_effectivenesses = $data["intervention_effectivenesses"];
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
     * Gets cohort_reference
     * @return \Swagger\Client\Model\CohortReference
     */
    public function getCohortReference()
    {
        return $this->cohort_reference;
    }
  
    /**
     * Sets cohort_reference
     * @param \Swagger\Client\Model\CohortReference $cohort_reference A reference to the related Cohort resource.
     * @return $this
     */
    public function setCohortReference($cohort_reference)
    {
        
        $this->cohort_reference = $cohort_reference;
        return $this;
    }
    
    /**
     * Gets intervention_reference
     * @return \Swagger\Client\Model\InterventionReference
     */
    public function getInterventionReference()
    {
        return $this->intervention_reference;
    }
  
    /**
     * Sets intervention_reference
     * @param \Swagger\Client\Model\InterventionReference $intervention_reference A reference to the related Intervention resource.
     * @return $this
     */
    public function setInterventionReference($intervention_reference)
    {
        
        $this->intervention_reference = $intervention_reference;
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
     * Gets diagnostic_statement
     * @return string
     */
    public function getDiagnosticStatement()
    {
        return $this->diagnostic_statement;
    }
  
    /**
     * Sets diagnostic_statement
     * @param string $diagnostic_statement A statement provided by the teacher that provides information in addition to the grade or assessment score.
     * @return $this
     */
    public function setDiagnosticStatement($diagnostic_statement)
    {
        
        $this->diagnostic_statement = $diagnostic_statement;
        return $this;
    }
    
    /**
     * Gets intervention_effectivenesses
     * @return \Swagger\Client\Model\StudentInterventionAssociationInterventionEffectiveness[]
     */
    public function getInterventionEffectivenesses()
    {
        return $this->intervention_effectivenesses;
    }
  
    /**
     * Sets intervention_effectivenesses
     * @param \Swagger\Client\Model\StudentInterventionAssociationInterventionEffectiveness[] $intervention_effectivenesses An unordered collection of studentInterventionAssociationInterventionEffectivenesses.  
     * @return $this
     */
    public function setInterventionEffectivenesses($intervention_effectivenesses)
    {
        
        $this->intervention_effectivenesses = $intervention_effectivenesses;
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
