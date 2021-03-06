<?php
/**
 * StudentCTEProgramAssociationCTEProgram
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
 * StudentCTEProgramAssociationCTEProgram Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentCTEProgramAssociationCTEProgram implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'career_pathway_type' => 'string',
        'cip_code' => 'string',
        'primary_cte_program_indicator' => 'bool',
        'cte_program_completion_indicator' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'career_pathway_type' => 'careerPathwayType',
        'cip_code' => 'cipCode',
        'primary_cte_program_indicator' => 'primaryCTEProgramIndicator',
        'cte_program_completion_indicator' => 'cteProgramCompletionIndicator'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'career_pathway_type' => 'setCareerPathwayType',
        'cip_code' => 'setCipCode',
        'primary_cte_program_indicator' => 'setPrimaryCteProgramIndicator',
        'cte_program_completion_indicator' => 'setCteProgramCompletionIndicator'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'career_pathway_type' => 'getCareerPathwayType',
        'cip_code' => 'getCipCode',
        'primary_cte_program_indicator' => 'getPrimaryCteProgramIndicator',
        'cte_program_completion_indicator' => 'getCteProgramCompletionIndicator'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $career_pathway_type The career cluster representing the career path of the Vocational/Career Tech concentrator.  NEDM: Career Cluster
      * @var string
      */
    protected $career_pathway_type;
    
    /**
      * $cip_code Number and description of the CIP Code associated with the student's CTE program.
      * @var string
      */
    protected $cip_code;
    
    /**
      * $primary_cte_program_indicator A boolean indicator of whether this CTEProgram, is the student's primary CTEProgram.
      * @var bool
      */
    protected $primary_cte_program_indicator;
    
    /**
      * $cte_program_completion_indicator A boolean indicator of whether the Student has completed the CTEProgram.
      * @var bool
      */
    protected $cte_program_completion_indicator;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->career_pathway_type = $data["career_pathway_type"];
            $this->cip_code = $data["cip_code"];
            $this->primary_cte_program_indicator = $data["primary_cte_program_indicator"];
            $this->cte_program_completion_indicator = $data["cte_program_completion_indicator"];
        }
    }
    
    /**
     * Gets career_pathway_type
     * @return string
     */
    public function getCareerPathwayType()
    {
        return $this->career_pathway_type;
    }
  
    /**
     * Sets career_pathway_type
     * @param string $career_pathway_type The career cluster representing the career path of the Vocational/Career Tech concentrator.  NEDM: Career Cluster
     * @return $this
     */
    public function setCareerPathwayType($career_pathway_type)
    {
        
        $this->career_pathway_type = $career_pathway_type;
        return $this;
    }
    
    /**
     * Gets cip_code
     * @return string
     */
    public function getCipCode()
    {
        return $this->cip_code;
    }
  
    /**
     * Sets cip_code
     * @param string $cip_code Number and description of the CIP Code associated with the student's CTE program.
     * @return $this
     */
    public function setCipCode($cip_code)
    {
        
        $this->cip_code = $cip_code;
        return $this;
    }
    
    /**
     * Gets primary_cte_program_indicator
     * @return bool
     */
    public function getPrimaryCteProgramIndicator()
    {
        return $this->primary_cte_program_indicator;
    }
  
    /**
     * Sets primary_cte_program_indicator
     * @param bool $primary_cte_program_indicator A boolean indicator of whether this CTEProgram, is the student's primary CTEProgram.
     * @return $this
     */
    public function setPrimaryCteProgramIndicator($primary_cte_program_indicator)
    {
        
        $this->primary_cte_program_indicator = $primary_cte_program_indicator;
        return $this;
    }
    
    /**
     * Gets cte_program_completion_indicator
     * @return bool
     */
    public function getCteProgramCompletionIndicator()
    {
        return $this->cte_program_completion_indicator;
    }
  
    /**
     * Sets cte_program_completion_indicator
     * @param bool $cte_program_completion_indicator A boolean indicator of whether the Student has completed the CTEProgram.
     * @return $this
     */
    public function setCteProgramCompletionIndicator($cte_program_completion_indicator)
    {
        
        $this->cte_program_completion_indicator = $cte_program_completion_indicator;
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
