<?php
/**
 * StudentAcademicRecordClassRanking
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
 * StudentAcademicRecordClassRanking Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentAcademicRecordClassRanking implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'class_rank' => 'int',
        'total_number_in_class' => 'int',
        'percentage_ranking' => 'int',
        'class_ranking_date' => '\\DateTime'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'class_rank' => 'classRank',
        'total_number_in_class' => 'totalNumberInClass',
        'percentage_ranking' => 'percentageRanking',
        'class_ranking_date' => 'classRankingDate'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'class_rank' => 'setClassRank',
        'total_number_in_class' => 'setTotalNumberInClass',
        'percentage_ranking' => 'setPercentageRanking',
        'class_ranking_date' => 'setClassRankingDate'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'class_rank' => 'getClassRank',
        'total_number_in_class' => 'getTotalNumberInClass',
        'percentage_ranking' => 'getPercentageRanking',
        'class_ranking_date' => 'getClassRankingDate'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $class_rank The academic rank of a student in relation to his or her graduating class (e.g., 1st, 2nd, 3rd).
      * @var int
      */
    protected $class_rank;
    
    /**
      * $total_number_in_class The total number of students in the student's graduating class.
      * @var int
      */
    protected $total_number_in_class;
    
    /**
      * $percentage_ranking The academic percentage rank of a student in relation to his or her graduating class (e.g., 95%, 80%, 50%).
      * @var int
      */
    protected $percentage_ranking;
    
    /**
      * $class_ranking_date Date class ranking was determined.
      * @var \\DateTime
      */
    protected $class_ranking_date;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->class_rank = $data["class_rank"];
            $this->total_number_in_class = $data["total_number_in_class"];
            $this->percentage_ranking = $data["percentage_ranking"];
            $this->class_ranking_date = $data["class_ranking_date"];
        }
    }
    
    /**
     * Gets class_rank
     * @return int
     */
    public function getClassRank()
    {
        return $this->class_rank;
    }
  
    /**
     * Sets class_rank
     * @param int $class_rank The academic rank of a student in relation to his or her graduating class (e.g., 1st, 2nd, 3rd).
     * @return $this
     */
    public function setClassRank($class_rank)
    {
        
        $this->class_rank = $class_rank;
        return $this;
    }
    
    /**
     * Gets total_number_in_class
     * @return int
     */
    public function getTotalNumberInClass()
    {
        return $this->total_number_in_class;
    }
  
    /**
     * Sets total_number_in_class
     * @param int $total_number_in_class The total number of students in the student's graduating class.
     * @return $this
     */
    public function setTotalNumberInClass($total_number_in_class)
    {
        
        $this->total_number_in_class = $total_number_in_class;
        return $this;
    }
    
    /**
     * Gets percentage_ranking
     * @return int
     */
    public function getPercentageRanking()
    {
        return $this->percentage_ranking;
    }
  
    /**
     * Sets percentage_ranking
     * @param int $percentage_ranking The academic percentage rank of a student in relation to his or her graduating class (e.g., 95%, 80%, 50%).
     * @return $this
     */
    public function setPercentageRanking($percentage_ranking)
    {
        
        $this->percentage_ranking = $percentage_ranking;
        return $this;
    }
    
    /**
     * Gets class_ranking_date
     * @return \\DateTime
     */
    public function getClassRankingDate()
    {
        return $this->class_ranking_date;
    }
  
    /**
     * Sets class_ranking_date
     * @param \\DateTime $class_ranking_date Date class ranking was determined.
     * @return $this
     */
    public function setClassRankingDate($class_ranking_date)
    {
        
        $this->class_ranking_date = $class_ranking_date;
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