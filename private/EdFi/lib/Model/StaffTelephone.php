<?php
/**
 * StaffTelephone
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
 * StaffTelephone Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StaffTelephone implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'telephone_number_type' => 'string',
        'order_of_priority' => 'int',
        'text_message_capability_indicator' => 'bool',
        'telephone_number' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'telephone_number_type' => 'telephoneNumberType',
        'order_of_priority' => 'orderOfPriority',
        'text_message_capability_indicator' => 'textMessageCapabilityIndicator',
        'telephone_number' => 'telephoneNumber'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'telephone_number_type' => 'setTelephoneNumberType',
        'order_of_priority' => 'setOrderOfPriority',
        'text_message_capability_indicator' => 'setTextMessageCapabilityIndicator',
        'telephone_number' => 'setTelephoneNumber'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'telephone_number_type' => 'getTelephoneNumberType',
        'order_of_priority' => 'getOrderOfPriority',
        'text_message_capability_indicator' => 'getTextMessageCapabilityIndicator',
        'telephone_number' => 'getTelephoneNumber'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $telephone_number_type Key for TelephoneNumber
      * @var string
      */
    protected $telephone_number_type;
    
    /**
      * $order_of_priority The order of priority assigned to telephone numbers to define which number to attempt first, second, etc.
      * @var int
      */
    protected $order_of_priority;
    
    /**
      * $text_message_capability_indicator An indication that the telephone number is technically capable of sending and receiving Short Message Service (SMS) text messages.
      * @var bool
      */
    protected $text_message_capability_indicator;
    
    /**
      * $telephone_number The telephone number including the area code, and extension, if applicable.
      * @var string
      */
    protected $telephone_number;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->telephone_number_type = $data["telephone_number_type"];
            $this->order_of_priority = $data["order_of_priority"];
            $this->text_message_capability_indicator = $data["text_message_capability_indicator"];
            $this->telephone_number = $data["telephone_number"];
        }
    }
    
    /**
     * Gets telephone_number_type
     * @return string
     */
    public function getTelephoneNumberType()
    {
        return $this->telephone_number_type;
    }
  
    /**
     * Sets telephone_number_type
     * @param string $telephone_number_type Key for TelephoneNumber
     * @return $this
     */
    public function setTelephoneNumberType($telephone_number_type)
    {
        
        $this->telephone_number_type = $telephone_number_type;
        return $this;
    }
    
    /**
     * Gets order_of_priority
     * @return int
     */
    public function getOrderOfPriority()
    {
        return $this->order_of_priority;
    }
  
    /**
     * Sets order_of_priority
     * @param int $order_of_priority The order of priority assigned to telephone numbers to define which number to attempt first, second, etc.
     * @return $this
     */
    public function setOrderOfPriority($order_of_priority)
    {
        
        $this->order_of_priority = $order_of_priority;
        return $this;
    }
    
    /**
     * Gets text_message_capability_indicator
     * @return bool
     */
    public function getTextMessageCapabilityIndicator()
    {
        return $this->text_message_capability_indicator;
    }
  
    /**
     * Sets text_message_capability_indicator
     * @param bool $text_message_capability_indicator An indication that the telephone number is technically capable of sending and receiving Short Message Service (SMS) text messages.
     * @return $this
     */
    public function setTextMessageCapabilityIndicator($text_message_capability_indicator)
    {
        
        $this->text_message_capability_indicator = $text_message_capability_indicator;
        return $this;
    }
    
    /**
     * Gets telephone_number
     * @return string
     */
    public function getTelephoneNumber()
    {
        return $this->telephone_number;
    }
  
    /**
     * Sets telephone_number
     * @param string $telephone_number The telephone number including the area code, and extension, if applicable.
     * @return $this
     */
    public function setTelephoneNumber($telephone_number)
    {
        
        $this->telephone_number = $telephone_number;
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
