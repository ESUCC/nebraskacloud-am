<?php
/**
 * CompetencyLevelDescriptor
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
 * CompetencyLevelDescriptor Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompetencyLevelDescriptor implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        '_etag' => 'string',
        'code_value' => 'string',
        'competency_level_descriptor_id' => 'int',
        'description' => 'string',
        'effective_begin_date' => '\DateTime',
        'effective_end_date' => '\DateTime',
        'id' => 'string',
        'namespace' => 'string',
        'performance_base_conversion_type' => 'string',
        'prior_descriptor_id' => 'int',
        'short_description' => 'string'
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
        'code_value' => 'codeValue',
        'competency_level_descriptor_id' => 'competencyLevelDescriptorId',
        'description' => 'description',
        'effective_begin_date' => 'effectiveBeginDate',
        'effective_end_date' => 'effectiveEndDate',
        'id' => 'id',
        'namespace' => 'namespace',
        'performance_base_conversion_type' => 'performanceBaseConversionType',
        'prior_descriptor_id' => 'priorDescriptorId',
        'short_description' => 'shortDescription'
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
        'code_value' => 'setCodeValue',
        'competency_level_descriptor_id' => 'setCompetencyLevelDescriptorId',
        'description' => 'setDescription',
        'effective_begin_date' => 'setEffectiveBeginDate',
        'effective_end_date' => 'setEffectiveEndDate',
        'id' => 'setId',
        'namespace' => 'setNamespace',
        'performance_base_conversion_type' => 'setPerformanceBaseConversionType',
        'prior_descriptor_id' => 'setPriorDescriptorId',
        'short_description' => 'setShortDescription'
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
        'code_value' => 'getCodeValue',
        'competency_level_descriptor_id' => 'getCompetencyLevelDescriptorId',
        'description' => 'getDescription',
        'effective_begin_date' => 'getEffectiveBeginDate',
        'effective_end_date' => 'getEffectiveEndDate',
        'id' => 'getId',
        'namespace' => 'getNamespace',
        'performance_base_conversion_type' => 'getPerformanceBaseConversionType',
        'prior_descriptor_id' => 'getPriorDescriptorId',
        'short_description' => 'getShortDescription'
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
      * $code_value A code or abbreviation that is used to refer to the descriptor.
      * @var string
      */
    protected $code_value;
    
    /**
      * $competency_level_descriptor_id The ID of the Competency Level Descriptor
      * @var int
      */
    protected $competency_level_descriptor_id;
    
    /**
      * $description The description of the descriptor.
      * @var string
      */
    protected $description;
    
    /**
      * $effective_begin_date The beginning date of the period when the descriptor is in effect. If omitted, the default is immediate effectiveness.
      * @var \DateTime
      */
    protected $effective_begin_date;
    
    /**
      * $effective_end_date The end date of the period when the descriptor is in effect.
      * @var \DateTime
      */
    protected $effective_end_date;
    
    /**
      * $id The unique identifier of the resource.
      * @var string
      */
    protected $id;
    
    /**
      * $namespace A globally unique namespace that identifies this descriptor set. Author is strongly encouraged to use the Universal Resource Identifier (http, ftp, file, etc.) for the source of the descriptor definition. Best practice is for this source to be the descriptor file itself, so that it can be machine-readable and be fetched in real-time, if necessary.
      * @var string
      */
    protected $namespace;
    
    /**
      * $performance_base_conversion_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $performance_base_conversion_type;
    
    /**
      * $prior_descriptor_id A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var int
      */
    protected $prior_descriptor_id;
    
    /**
      * $short_description A shortened description for the descriptor.
      * @var string
      */
    protected $short_description;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->_etag = $data["_etag"];
            $this->code_value = $data["code_value"];
            $this->competency_level_descriptor_id = $data["competency_level_descriptor_id"];
            $this->description = $data["description"];
            $this->effective_begin_date = $data["effective_begin_date"];
            $this->effective_end_date = $data["effective_end_date"];
            $this->id = $data["id"];
            $this->namespace = $data["namespace"];
            $this->performance_base_conversion_type = $data["performance_base_conversion_type"];
            $this->prior_descriptor_id = $data["prior_descriptor_id"];
            $this->short_description = $data["short_description"];
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
     * Gets code_value
     * @return string
     */
    public function getCodeValue()
    {
        return $this->code_value;
    }
  
    /**
     * Sets code_value
     * @param string $code_value A code or abbreviation that is used to refer to the descriptor.
     * @return $this
     */
    public function setCodeValue($code_value)
    {
        
        $this->code_value = $code_value;
        return $this;
    }
    
    /**
     * Gets competency_level_descriptor_id
     * @return int
     */
    public function getCompetencyLevelDescriptorId()
    {
        return $this->competency_level_descriptor_id;
    }
  
    /**
     * Sets competency_level_descriptor_id
     * @param int $competency_level_descriptor_id The ID of the Competency Level Descriptor
     * @return $this
     */
    public function setCompetencyLevelDescriptorId($competency_level_descriptor_id)
    {
        
        $this->competency_level_descriptor_id = $competency_level_descriptor_id;
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
     * @param string $description The description of the descriptor.
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets effective_begin_date
     * @return \DateTime
     */
    public function getEffectiveBeginDate()
    {
        return $this->effective_begin_date;
    }
  
    /**
     * Sets effective_begin_date
     * @param \DateTime $effective_begin_date The beginning date of the period when the descriptor is in effect. If omitted, the default is immediate effectiveness.
     * @return $this
     */
    public function setEffectiveBeginDate($effective_begin_date)
    {
        
        $this->effective_begin_date = $effective_begin_date;
        return $this;
    }
    
    /**
     * Gets effective_end_date
     * @return \DateTime
     */
    public function getEffectiveEndDate()
    {
        return $this->effective_end_date;
    }
  
    /**
     * Sets effective_end_date
     * @param \DateTime $effective_end_date The end date of the period when the descriptor is in effect.
     * @return $this
     */
    public function setEffectiveEndDate($effective_end_date)
    {
        
        $this->effective_end_date = $effective_end_date;
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
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
  
    /**
     * Sets namespace
     * @param string $namespace A globally unique namespace that identifies this descriptor set. Author is strongly encouraged to use the Universal Resource Identifier (http, ftp, file, etc.) for the source of the descriptor definition. Best practice is for this source to be the descriptor file itself, so that it can be machine-readable and be fetched in real-time, if necessary.
     * @return $this
     */
    public function setNamespace($namespace)
    {
        
        $this->namespace = $namespace;
        return $this;
    }
    
    /**
     * Gets performance_base_conversion_type
     * @return string
     */
    public function getPerformanceBaseConversionType()
    {
        return $this->performance_base_conversion_type;
    }
  
    /**
     * Sets performance_base_conversion_type
     * @param string $performance_base_conversion_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setPerformanceBaseConversionType($performance_base_conversion_type)
    {
        
        $this->performance_base_conversion_type = $performance_base_conversion_type;
        return $this;
    }
    
    /**
     * Gets prior_descriptor_id
     * @return int
     */
    public function getPriorDescriptorId()
    {
        return $this->prior_descriptor_id;
    }
  
    /**
     * Sets prior_descriptor_id
     * @param int $prior_descriptor_id A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setPriorDescriptorId($prior_descriptor_id)
    {
        
        $this->prior_descriptor_id = $prior_descriptor_id;
        return $this;
    }
    
    /**
     * Gets short_description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }
  
    /**
     * Sets short_description
     * @param string $short_description A shortened description for the descriptor.
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        
        $this->short_description = $short_description;
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
