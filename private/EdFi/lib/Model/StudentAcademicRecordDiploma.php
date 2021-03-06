<?php
/**
 * StudentAcademicRecordDiploma
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
 * StudentAcademicRecordDiploma Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudentAcademicRecordDiploma implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'diploma_type' => 'string',
        'diploma_award_date' => '\\DateTime',
        'diploma_level_type' => 'string',
        'cte_completer' => 'bool',
        'diploma_description' => 'string',
        'diploma_award_expires_date' => '\\DateTime',
        'achievement_title' => 'string',
        'achievement_category_descriptor' => 'string',
        'achievement_category_system' => 'string',
        'issuer_name' => 'string',
        'issuer_origin_url' => 'string',
        'criteria' => 'string',
        'criteria_url' => 'string',
        'evidence_statement' => 'string',
        'image_url' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'diploma_type' => 'diplomaType',
        'diploma_award_date' => 'diplomaAwardDate',
        'diploma_level_type' => 'diplomaLevelType',
        'cte_completer' => 'cteCompleter',
        'diploma_description' => 'diplomaDescription',
        'diploma_award_expires_date' => 'diplomaAwardExpiresDate',
        'achievement_title' => 'achievementTitle',
        'achievement_category_descriptor' => 'achievementCategoryDescriptor',
        'achievement_category_system' => 'achievementCategorySystem',
        'issuer_name' => 'issuerName',
        'issuer_origin_url' => 'issuerOriginURL',
        'criteria' => 'criteria',
        'criteria_url' => 'criteriaURL',
        'evidence_statement' => 'evidenceStatement',
        'image_url' => 'imageURL'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'diploma_type' => 'setDiplomaType',
        'diploma_award_date' => 'setDiplomaAwardDate',
        'diploma_level_type' => 'setDiplomaLevelType',
        'cte_completer' => 'setCteCompleter',
        'diploma_description' => 'setDiplomaDescription',
        'diploma_award_expires_date' => 'setDiplomaAwardExpiresDate',
        'achievement_title' => 'setAchievementTitle',
        'achievement_category_descriptor' => 'setAchievementCategoryDescriptor',
        'achievement_category_system' => 'setAchievementCategorySystem',
        'issuer_name' => 'setIssuerName',
        'issuer_origin_url' => 'setIssuerOriginUrl',
        'criteria' => 'setCriteria',
        'criteria_url' => 'setCriteriaUrl',
        'evidence_statement' => 'setEvidenceStatement',
        'image_url' => 'setImageUrl'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'diploma_type' => 'getDiplomaType',
        'diploma_award_date' => 'getDiplomaAwardDate',
        'diploma_level_type' => 'getDiplomaLevelType',
        'cte_completer' => 'getCteCompleter',
        'diploma_description' => 'getDiplomaDescription',
        'diploma_award_expires_date' => 'getDiplomaAwardExpiresDate',
        'achievement_title' => 'getAchievementTitle',
        'achievement_category_descriptor' => 'getAchievementCategoryDescriptor',
        'achievement_category_system' => 'getAchievementCategorySystem',
        'issuer_name' => 'getIssuerName',
        'issuer_origin_url' => 'getIssuerOriginUrl',
        'criteria' => 'getCriteria',
        'criteria_url' => 'getCriteriaUrl',
        'evidence_statement' => 'getEvidenceStatement',
        'image_url' => 'getImageUrl'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $diploma_type The type of diploma/credential that is awarded to a student in recognition of his/her completion of the curricular requirements.
      * @var string
      */
    protected $diploma_type;
    
    /**
      * $diploma_award_date The month, day, and year on which the student met graduation requirements and was awarded a diploma.
      * @var \\DateTime
      */
    protected $diploma_award_date;
    
    /**
      * $diploma_level_type The type of diploma/credential that is awarded to a student in recognition of his/her completion of the curricular requirements.  Minimum high school program  Recommended high school program  Distinguished Achievement Program
      * @var string
      */
    protected $diploma_level_type;
    
    /**
      * $cte_completer Indicated a student who reached a state-defined threshold of vocational education and who attained a high school diploma or its recognized state equivalent or GED.
      * @var bool
      */
    protected $cte_completer;
    
    /**
      * $diploma_description The description of diploma given to the student for accomplishments.
      * @var string
      */
    protected $diploma_description;
    
    /**
      * $diploma_award_expires_date Date on which the award expires.
      * @var \\DateTime
      */
    protected $diploma_award_expires_date;
    
    /**
      * $achievement_title The title assigned to the achievement.
      * @var string
      */
    protected $achievement_title;
    
    /**
      * $achievement_category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $achievement_category_descriptor;
    
    /**
      * $achievement_category_system The system that defines the categories by which an achievement is attributed to the learner.
      * @var string
      */
    protected $achievement_category_system;
    
    /**
      * $issuer_name The name of the agent issuing the award.
      * @var string
      */
    protected $issuer_name;
    
    /**
      * $issuer_origin_url The Uniform Resource Locator (URL) from which the award was issued.
      * @var string
      */
    protected $issuer_origin_url;
    
    /**
      * $criteria The criteria for competency-based completion of the achievement/award.
      * @var string
      */
    protected $criteria;
    
    /**
      * $criteria_url The Uniform Resource Locator (URL) for the unique address of a web page describing the competency-based completion criteria for the achievement/award.
      * @var string
      */
    protected $criteria_url;
    
    /**
      * $evidence_statement A statement or reference describing the evidence that the learner met the criteria for attainment of the achievement.
      * @var string
      */
    protected $evidence_statement;
    
    /**
      * $image_url The Uniform Resource Locator (URL) for the unique address of an image representing an award or badge associated with the achievement.
      * @var string
      */
    protected $image_url;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->diploma_type = $data["diploma_type"];
            $this->diploma_award_date = $data["diploma_award_date"];
            $this->diploma_level_type = $data["diploma_level_type"];
            $this->cte_completer = $data["cte_completer"];
            $this->diploma_description = $data["diploma_description"];
            $this->diploma_award_expires_date = $data["diploma_award_expires_date"];
            $this->achievement_title = $data["achievement_title"];
            $this->achievement_category_descriptor = $data["achievement_category_descriptor"];
            $this->achievement_category_system = $data["achievement_category_system"];
            $this->issuer_name = $data["issuer_name"];
            $this->issuer_origin_url = $data["issuer_origin_url"];
            $this->criteria = $data["criteria"];
            $this->criteria_url = $data["criteria_url"];
            $this->evidence_statement = $data["evidence_statement"];
            $this->image_url = $data["image_url"];
        }
    }
    
    /**
     * Gets diploma_type
     * @return string
     */
    public function getDiplomaType()
    {
        return $this->diploma_type;
    }
  
    /**
     * Sets diploma_type
     * @param string $diploma_type The type of diploma/credential that is awarded to a student in recognition of his/her completion of the curricular requirements.
     * @return $this
     */
    public function setDiplomaType($diploma_type)
    {
        
        $this->diploma_type = $diploma_type;
        return $this;
    }
    
    /**
     * Gets diploma_award_date
     * @return \\DateTime
     */
    public function getDiplomaAwardDate()
    {
        return $this->diploma_award_date;
    }
  
    /**
     * Sets diploma_award_date
     * @param \\DateTime $diploma_award_date The month, day, and year on which the student met graduation requirements and was awarded a diploma.
     * @return $this
     */
    public function setDiplomaAwardDate($diploma_award_date)
    {
        
        $this->diploma_award_date = $diploma_award_date;
        return $this;
    }
    
    /**
     * Gets diploma_level_type
     * @return string
     */
    public function getDiplomaLevelType()
    {
        return $this->diploma_level_type;
    }
  
    /**
     * Sets diploma_level_type
     * @param string $diploma_level_type The type of diploma/credential that is awarded to a student in recognition of his/her completion of the curricular requirements.  Minimum high school program  Recommended high school program  Distinguished Achievement Program
     * @return $this
     */
    public function setDiplomaLevelType($diploma_level_type)
    {
        
        $this->diploma_level_type = $diploma_level_type;
        return $this;
    }
    
    /**
     * Gets cte_completer
     * @return bool
     */
    public function getCteCompleter()
    {
        return $this->cte_completer;
    }
  
    /**
     * Sets cte_completer
     * @param bool $cte_completer Indicated a student who reached a state-defined threshold of vocational education and who attained a high school diploma or its recognized state equivalent or GED.
     * @return $this
     */
    public function setCteCompleter($cte_completer)
    {
        
        $this->cte_completer = $cte_completer;
        return $this;
    }
    
    /**
     * Gets diploma_description
     * @return string
     */
    public function getDiplomaDescription()
    {
        return $this->diploma_description;
    }
  
    /**
     * Sets diploma_description
     * @param string $diploma_description The description of diploma given to the student for accomplishments.
     * @return $this
     */
    public function setDiplomaDescription($diploma_description)
    {
        
        $this->diploma_description = $diploma_description;
        return $this;
    }
    
    /**
     * Gets diploma_award_expires_date
     * @return \\DateTime
     */
    public function getDiplomaAwardExpiresDate()
    {
        return $this->diploma_award_expires_date;
    }
  
    /**
     * Sets diploma_award_expires_date
     * @param \\DateTime $diploma_award_expires_date Date on which the award expires.
     * @return $this
     */
    public function setDiplomaAwardExpiresDate($diploma_award_expires_date)
    {
        
        $this->diploma_award_expires_date = $diploma_award_expires_date;
        return $this;
    }
    
    /**
     * Gets achievement_title
     * @return string
     */
    public function getAchievementTitle()
    {
        return $this->achievement_title;
    }
  
    /**
     * Sets achievement_title
     * @param string $achievement_title The title assigned to the achievement.
     * @return $this
     */
    public function setAchievementTitle($achievement_title)
    {
        
        $this->achievement_title = $achievement_title;
        return $this;
    }
    
    /**
     * Gets achievement_category_descriptor
     * @return string
     */
    public function getAchievementCategoryDescriptor()
    {
        return $this->achievement_category_descriptor;
    }
  
    /**
     * Sets achievement_category_descriptor
     * @param string $achievement_category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setAchievementCategoryDescriptor($achievement_category_descriptor)
    {
        
        $this->achievement_category_descriptor = $achievement_category_descriptor;
        return $this;
    }
    
    /**
     * Gets achievement_category_system
     * @return string
     */
    public function getAchievementCategorySystem()
    {
        return $this->achievement_category_system;
    }
  
    /**
     * Sets achievement_category_system
     * @param string $achievement_category_system The system that defines the categories by which an achievement is attributed to the learner.
     * @return $this
     */
    public function setAchievementCategorySystem($achievement_category_system)
    {
        
        $this->achievement_category_system = $achievement_category_system;
        return $this;
    }
    
    /**
     * Gets issuer_name
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuer_name;
    }
  
    /**
     * Sets issuer_name
     * @param string $issuer_name The name of the agent issuing the award.
     * @return $this
     */
    public function setIssuerName($issuer_name)
    {
        
        $this->issuer_name = $issuer_name;
        return $this;
    }
    
    /**
     * Gets issuer_origin_url
     * @return string
     */
    public function getIssuerOriginUrl()
    {
        return $this->issuer_origin_url;
    }
  
    /**
     * Sets issuer_origin_url
     * @param string $issuer_origin_url The Uniform Resource Locator (URL) from which the award was issued.
     * @return $this
     */
    public function setIssuerOriginUrl($issuer_origin_url)
    {
        
        $this->issuer_origin_url = $issuer_origin_url;
        return $this;
    }
    
    /**
     * Gets criteria
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
  
    /**
     * Sets criteria
     * @param string $criteria The criteria for competency-based completion of the achievement/award.
     * @return $this
     */
    public function setCriteria($criteria)
    {
        
        $this->criteria = $criteria;
        return $this;
    }
    
    /**
     * Gets criteria_url
     * @return string
     */
    public function getCriteriaUrl()
    {
        return $this->criteria_url;
    }
  
    /**
     * Sets criteria_url
     * @param string $criteria_url The Uniform Resource Locator (URL) for the unique address of a web page describing the competency-based completion criteria for the achievement/award.
     * @return $this
     */
    public function setCriteriaUrl($criteria_url)
    {
        
        $this->criteria_url = $criteria_url;
        return $this;
    }
    
    /**
     * Gets evidence_statement
     * @return string
     */
    public function getEvidenceStatement()
    {
        return $this->evidence_statement;
    }
  
    /**
     * Sets evidence_statement
     * @param string $evidence_statement A statement or reference describing the evidence that the learner met the criteria for attainment of the achievement.
     * @return $this
     */
    public function setEvidenceStatement($evidence_statement)
    {
        
        $this->evidence_statement = $evidence_statement;
        return $this;
    }
    
    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }
  
    /**
     * Sets image_url
     * @param string $image_url The Uniform Resource Locator (URL) for the unique address of an image representing an award or badge associated with the achievement.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        
        $this->image_url = $image_url;
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
