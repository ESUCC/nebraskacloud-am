<?php
/**
 * AssessmentCategoryType
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
 * AssessmentCategoryType Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AssessmentCategoryType implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        '_etag' => 'string',
        'assessment_category_type_id' => 'int',
        'code_value' => 'string',
        'description' => 'string',
        'id' => 'string',
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
        'assessment_category_type_id' => 'assessmentCategoryTypeId',
        'code_value' => 'codeValue',
        'description' => 'description',
        'id' => 'id',
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
        'assessment_category_type_id' => 'setAssessmentCategoryTypeId',
        'code_value' => 'setCodeValue',
        'description' => 'setDescription',
        'id' => 'setId',
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
        'assessment_category_type_id' => 'getAssessmentCategoryTypeId',
        'code_value' => 'getCodeValue',
        'description' => 'getDescription',
        'id' => 'getId',
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
      * $assessment_category_type_id Key for AssessmentCategoryType
      * @var int
      */
    protected $assessment_category_type_id;
    
    /**
      * $code_value Code for AssessmentCategoryType type.
      * @var string
      */
    protected $code_value;
    
    /**
      * $description The description of the descriptor.
      * @var string
      */
    protected $description;
    
    /**
      * $id The unique identifier of the resource.
      * @var string
      */
    protected $id;
    
    /**
      * $short_description 
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
            $this->assessment_category_type_id = $data["assessment_category_type_id"];
            $this->code_value = $data["code_value"];
            $this->description = $data["description"];
            $this->id = $data["id"];
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
     * Gets assessment_category_type_id
     * @return int
     */
    public function getAssessmentCategoryTypeId()
    {
        return $this->assessment_category_type_id;
    }
  
    /**
     * Sets assessment_category_type_id
     * @param int $assessment_category_type_id Key for AssessmentCategoryType
     * @return $this
     */
    public function setAssessmentCategoryTypeId($assessment_category_type_id)
    {
        
        $this->assessment_category_type_id = $assessment_category_type_id;
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
     * @param string $code_value Code for AssessmentCategoryType type.
     * @return $this
     */
    public function setCodeValue($code_value)
    {
        
        $this->code_value = $code_value;
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
     * Gets short_description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }
  
    /**
     * Sets short_description
     * @param string $short_description 
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
