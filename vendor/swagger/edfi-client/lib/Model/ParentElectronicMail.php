<?php
/**
 * ParentElectronicMail
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
 * ParentElectronicMail Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ParentElectronicMail implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'electronic_mail_type' => 'string',
        'electronic_mail_address' => 'string',
        'primary_email_address_indicator' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'electronic_mail_type' => 'electronicMailType',
        'electronic_mail_address' => 'electronicMailAddress',
        'primary_email_address_indicator' => 'primaryEmailAddressIndicator'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'electronic_mail_type' => 'setElectronicMailType',
        'electronic_mail_address' => 'setElectronicMailAddress',
        'primary_email_address_indicator' => 'setPrimaryEmailAddressIndicator'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'electronic_mail_type' => 'getElectronicMailType',
        'electronic_mail_address' => 'getElectronicMailAddress',
        'primary_email_address_indicator' => 'getPrimaryEmailAddressIndicator'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $electronic_mail_type Key for ElectronicMail
      * @var string
      */
    protected $electronic_mail_type;
    
    /**
      * $electronic_mail_address The electronic mail (e-mail) address listed for an individual or organization.
      * @var string
      */
    protected $electronic_mail_address;
    
    /**
      * $primary_email_address_indicator An indication that the electronic mail address should be used as the principal electronic mail address for an individual or organization.
      * @var bool
      */
    protected $primary_email_address_indicator;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->electronic_mail_type = $data["electronic_mail_type"];
            $this->electronic_mail_address = $data["electronic_mail_address"];
            $this->primary_email_address_indicator = $data["primary_email_address_indicator"];
        }
    }
    
    /**
     * Gets electronic_mail_type
     * @return string
     */
    public function getElectronicMailType()
    {
        return $this->electronic_mail_type;
    }
  
    /**
     * Sets electronic_mail_type
     * @param string $electronic_mail_type Key for ElectronicMail
     * @return $this
     */
    public function setElectronicMailType($electronic_mail_type)
    {
        
        $this->electronic_mail_type = $electronic_mail_type;
        return $this;
    }
    
    /**
     * Gets electronic_mail_address
     * @return string
     */
    public function getElectronicMailAddress()
    {
        return $this->electronic_mail_address;
    }
  
    /**
     * Sets electronic_mail_address
     * @param string $electronic_mail_address The electronic mail (e-mail) address listed for an individual or organization.
     * @return $this
     */
    public function setElectronicMailAddress($electronic_mail_address)
    {
        
        $this->electronic_mail_address = $electronic_mail_address;
        return $this;
    }
    
    /**
     * Gets primary_email_address_indicator
     * @return bool
     */
    public function getPrimaryEmailAddressIndicator()
    {
        return $this->primary_email_address_indicator;
    }
  
    /**
     * Sets primary_email_address_indicator
     * @param bool $primary_email_address_indicator An indication that the electronic mail address should be used as the principal electronic mail address for an individual or organization.
     * @return $this
     */
    public function setPrimaryEmailAddressIndicator($primary_email_address_indicator)
    {
        
        $this->primary_email_address_indicator = $primary_email_address_indicator;
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
