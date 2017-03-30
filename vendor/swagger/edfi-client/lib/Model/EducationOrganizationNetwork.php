<?php
/**
 * EducationOrganizationNetwork
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
 * EducationOrganizationNetwork Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EducationOrganizationNetwork implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'education_organization_network_id' => 'int',
        'state_organization_id' => 'string',
        'name_of_institution' => 'string',
        'short_name_of_institution' => 'string',
        'web_site' => 'string',
        'operational_status_type' => 'string',
        'network_purpose_type' => 'string',
        'addresses' => '\Swagger\Client\Model\EducationOrganizationAddress[]',
        'education_organization_categories' => '\Swagger\Client\Model\EducationOrganizationCategory[]',
        'identification_codes' => '\Swagger\Client\Model\EducationOrganizationIdentificationCode[]',
        'institution_telephones' => '\Swagger\Client\Model\EducationOrganizationInstitutionTelephone[]',
        'international_addresses' => '\Swagger\Client\Model\EducationOrganizationInternationalAddress[]',
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
        'education_organization_network_id' => 'educationOrganizationNetworkId',
        'state_organization_id' => 'stateOrganizationId',
        'name_of_institution' => 'nameOfInstitution',
        'short_name_of_institution' => 'shortNameOfInstitution',
        'web_site' => 'webSite',
        'operational_status_type' => 'operationalStatusType',
        'network_purpose_type' => 'networkPurposeType',
        'addresses' => 'addresses',
        'education_organization_categories' => 'educationOrganizationCategories',
        'identification_codes' => 'identificationCodes',
        'institution_telephones' => 'institutionTelephones',
        'international_addresses' => 'internationalAddresses',
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
        'education_organization_network_id' => 'setEducationOrganizationNetworkId',
        'state_organization_id' => 'setStateOrganizationId',
        'name_of_institution' => 'setNameOfInstitution',
        'short_name_of_institution' => 'setShortNameOfInstitution',
        'web_site' => 'setWebSite',
        'operational_status_type' => 'setOperationalStatusType',
        'network_purpose_type' => 'setNetworkPurposeType',
        'addresses' => 'setAddresses',
        'education_organization_categories' => 'setEducationOrganizationCategories',
        'identification_codes' => 'setIdentificationCodes',
        'institution_telephones' => 'setInstitutionTelephones',
        'international_addresses' => 'setInternationalAddresses',
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
        'education_organization_network_id' => 'getEducationOrganizationNetworkId',
        'state_organization_id' => 'getStateOrganizationId',
        'name_of_institution' => 'getNameOfInstitution',
        'short_name_of_institution' => 'getShortNameOfInstitution',
        'web_site' => 'getWebSite',
        'operational_status_type' => 'getOperationalStatusType',
        'network_purpose_type' => 'getNetworkPurposeType',
        'addresses' => 'getAddresses',
        'education_organization_categories' => 'getEducationOrganizationCategories',
        'identification_codes' => 'getIdentificationCodes',
        'institution_telephones' => 'getInstitutionTelephones',
        'international_addresses' => 'getInternationalAddresses',
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
      * $education_organization_network_id A unique number or alphanumeric code assigned to a network of education organizations.
      * @var int
      */
    protected $education_organization_network_id;
    
    /**
      * $state_organization_id The identifier assigned to an education agency by the State Education Agency (SEA).  Also known as the State LEP ID.  NEDM: IdentificationCode, LEA Identifier (State)
      * @var string
      */
    protected $state_organization_id;
    
    /**
      * $name_of_institution The full, legally accepted name of the institution.  NEDM: Name of Institution
      * @var string
      */
    protected $name_of_institution;
    
    /**
      * $short_name_of_institution A short name for the institution.
      * @var string
      */
    protected $short_name_of_institution;
    
    /**
      * $web_site The public web site address (URL) for the educational organization.
      * @var string
      */
    protected $web_site;
    
    /**
      * $operational_status_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $operational_status_type;
    
    /**
      * $network_purpose_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
      * @var string
      */
    protected $network_purpose_type;
    
    /**
      * $addresses An unordered collection of educationOrganizationAddresses.  The set of elements that describes an address, including the street address, city, state and ZIP code.
      * @var \Swagger\Client\Model\EducationOrganizationAddress[]
      */
    protected $addresses;
    
    /**
      * $education_organization_categories An unordered collection of educationOrganizationCategories.  The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state.
      * @var \Swagger\Client\Model\EducationOrganizationCategory[]
      */
    protected $education_organization_categories;
    
    /**
      * $identification_codes An unordered collection of educationOrganizationIdentificationCodes.  A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.
      * @var \Swagger\Client\Model\EducationOrganizationIdentificationCode[]
      */
    protected $identification_codes;
    
    /**
      * $institution_telephones An unordered collection of educationOrganizationInstitutionTelephones.  The 10-digit telephone number, including the area code, for the person.
      * @var \Swagger\Client\Model\EducationOrganizationInstitutionTelephone[]
      */
    protected $institution_telephones;
    
    /**
      * $international_addresses An unordered collection of educationOrganizationInternationalAddresses.  The set of elements that describes an address, including the street address and country for international students.
      * @var \Swagger\Client\Model\EducationOrganizationInternationalAddress[]
      */
    protected $international_addresses;
    
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
            $this->education_organization_network_id = $data["education_organization_network_id"];
            $this->state_organization_id = $data["state_organization_id"];
            $this->name_of_institution = $data["name_of_institution"];
            $this->short_name_of_institution = $data["short_name_of_institution"];
            $this->web_site = $data["web_site"];
            $this->operational_status_type = $data["operational_status_type"];
            $this->network_purpose_type = $data["network_purpose_type"];
            $this->addresses = $data["addresses"];
            $this->education_organization_categories = $data["education_organization_categories"];
            $this->identification_codes = $data["identification_codes"];
            $this->institution_telephones = $data["institution_telephones"];
            $this->international_addresses = $data["international_addresses"];
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
     * Gets education_organization_network_id
     * @return int
     */
    public function getEducationOrganizationNetworkId()
    {
        return $this->education_organization_network_id;
    }
  
    /**
     * Sets education_organization_network_id
     * @param int $education_organization_network_id A unique number or alphanumeric code assigned to a network of education organizations.
     * @return $this
     */
    public function setEducationOrganizationNetworkId($education_organization_network_id)
    {
        
        $this->education_organization_network_id = $education_organization_network_id;
        return $this;
    }
    
    /**
     * Gets state_organization_id
     * @return string
     */
    public function getStateOrganizationId()
    {
        return $this->state_organization_id;
    }
  
    /**
     * Sets state_organization_id
     * @param string $state_organization_id The identifier assigned to an education agency by the State Education Agency (SEA).  Also known as the State LEP ID.  NEDM: IdentificationCode, LEA Identifier (State)
     * @return $this
     */
    public function setStateOrganizationId($state_organization_id)
    {
        
        $this->state_organization_id = $state_organization_id;
        return $this;
    }
    
    /**
     * Gets name_of_institution
     * @return string
     */
    public function getNameOfInstitution()
    {
        return $this->name_of_institution;
    }
  
    /**
     * Sets name_of_institution
     * @param string $name_of_institution The full, legally accepted name of the institution.  NEDM: Name of Institution
     * @return $this
     */
    public function setNameOfInstitution($name_of_institution)
    {
        
        $this->name_of_institution = $name_of_institution;
        return $this;
    }
    
    /**
     * Gets short_name_of_institution
     * @return string
     */
    public function getShortNameOfInstitution()
    {
        return $this->short_name_of_institution;
    }
  
    /**
     * Sets short_name_of_institution
     * @param string $short_name_of_institution A short name for the institution.
     * @return $this
     */
    public function setShortNameOfInstitution($short_name_of_institution)
    {
        
        $this->short_name_of_institution = $short_name_of_institution;
        return $this;
    }
    
    /**
     * Gets web_site
     * @return string
     */
    public function getWebSite()
    {
        return $this->web_site;
    }
  
    /**
     * Sets web_site
     * @param string $web_site The public web site address (URL) for the educational organization.
     * @return $this
     */
    public function setWebSite($web_site)
    {
        
        $this->web_site = $web_site;
        return $this;
    }
    
    /**
     * Gets operational_status_type
     * @return string
     */
    public function getOperationalStatusType()
    {
        return $this->operational_status_type;
    }
  
    /**
     * Sets operational_status_type
     * @param string $operational_status_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setOperationalStatusType($operational_status_type)
    {
        
        $this->operational_status_type = $operational_status_type;
        return $this;
    }
    
    /**
     * Gets network_purpose_type
     * @return string
     */
    public function getNetworkPurposeType()
    {
        return $this->network_purpose_type;
    }
  
    /**
     * Sets network_purpose_type
     * @param string $network_purpose_type A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
     * @return $this
     */
    public function setNetworkPurposeType($network_purpose_type)
    {
        
        $this->network_purpose_type = $network_purpose_type;
        return $this;
    }
    
    /**
     * Gets addresses
     * @return \Swagger\Client\Model\EducationOrganizationAddress[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
  
    /**
     * Sets addresses
     * @param \Swagger\Client\Model\EducationOrganizationAddress[] $addresses An unordered collection of educationOrganizationAddresses.  The set of elements that describes an address, including the street address, city, state and ZIP code.
     * @return $this
     */
    public function setAddresses($addresses)
    {
        
        $this->addresses = $addresses;
        return $this;
    }
    
    /**
     * Gets education_organization_categories
     * @return \Swagger\Client\Model\EducationOrganizationCategory[]
     */
    public function getEducationOrganizationCategories()
    {
        return $this->education_organization_categories;
    }
  
    /**
     * Sets education_organization_categories
     * @param \Swagger\Client\Model\EducationOrganizationCategory[] $education_organization_categories An unordered collection of educationOrganizationCategories.  The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state.
     * @return $this
     */
    public function setEducationOrganizationCategories($education_organization_categories)
    {
        
        $this->education_organization_categories = $education_organization_categories;
        return $this;
    }
    
    /**
     * Gets identification_codes
     * @return \Swagger\Client\Model\EducationOrganizationIdentificationCode[]
     */
    public function getIdentificationCodes()
    {
        return $this->identification_codes;
    }
  
    /**
     * Sets identification_codes
     * @param \Swagger\Client\Model\EducationOrganizationIdentificationCode[] $identification_codes An unordered collection of educationOrganizationIdentificationCodes.  A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity.
     * @return $this
     */
    public function setIdentificationCodes($identification_codes)
    {
        
        $this->identification_codes = $identification_codes;
        return $this;
    }
    
    /**
     * Gets institution_telephones
     * @return \Swagger\Client\Model\EducationOrganizationInstitutionTelephone[]
     */
    public function getInstitutionTelephones()
    {
        return $this->institution_telephones;
    }
  
    /**
     * Sets institution_telephones
     * @param \Swagger\Client\Model\EducationOrganizationInstitutionTelephone[] $institution_telephones An unordered collection of educationOrganizationInstitutionTelephones.  The 10-digit telephone number, including the area code, for the person.
     * @return $this
     */
    public function setInstitutionTelephones($institution_telephones)
    {
        
        $this->institution_telephones = $institution_telephones;
        return $this;
    }
    
    /**
     * Gets international_addresses
     * @return \Swagger\Client\Model\EducationOrganizationInternationalAddress[]
     */
    public function getInternationalAddresses()
    {
        return $this->international_addresses;
    }
  
    /**
     * Sets international_addresses
     * @param \Swagger\Client\Model\EducationOrganizationInternationalAddress[] $international_addresses An unordered collection of educationOrganizationInternationalAddresses.  The set of elements that describes an address, including the street address and country for international students.
     * @return $this
     */
    public function setInternationalAddresses($international_addresses)
    {
        
        $this->international_addresses = $international_addresses;
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
