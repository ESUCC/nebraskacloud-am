<?php
/**
 * StaffProgramAssociationsApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * StaffProgramAssociationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StaffProgramAssociationsApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.ed-fi.org/api/api/v2.0/2015');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return StaffProgramAssociationsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteStaffProgramAssociationById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStaffProgramAssociationById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteStaffProgramAssociationByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteStaffProgramAssociationByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStaffProgramAssociationByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteStaffProgramAssociationById');
        }
  
        // parse inputs
        $resourcePath = "/staffProgramAssociations/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        // header params
        
        if ($if_match !== null) {
            $headerParams['If-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_match);
        }
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 500:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\WebServiceError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getStaffProgramAssociationByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $program_education_organization_id EducationOrganization Identity Column (required)
     * @param string $program_type Key for Program (required)
     * @param string $staff_unique_id A unique alpha-numeric code assigned to a staff. (required)
     * @param \Swagger\Client\Model\Object $begin_date Start date for the association of staff to this program. (required)
     * @param string $program_name The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StaffProgramAssociation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffProgramAssociationByKey($program_education_organization_id, $program_type, $staff_unique_id, $begin_date, $program_name, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStaffProgramAssociationByKeyWithHttpInfo ($program_education_organization_id, $program_type, $staff_unique_id, $begin_date, $program_name, $if_none_match);
        return $response; 
    }


    /**
     * getStaffProgramAssociationByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $program_education_organization_id EducationOrganization Identity Column (required)
     * @param string $program_type Key for Program (required)
     * @param string $staff_unique_id A unique alpha-numeric code assigned to a staff. (required)
     * @param \Swagger\Client\Model\Object $begin_date Start date for the association of staff to this program. (required)
     * @param string $program_name The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StaffProgramAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffProgramAssociationByKeyWithHttpInfo($program_education_organization_id, $program_type, $staff_unique_id, $begin_date, $program_name, $if_none_match = null)
    {
        
        // verify the required parameter 'program_education_organization_id' is set
        if ($program_education_organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $program_education_organization_id when calling getStaffProgramAssociationByKey');
        }
        // verify the required parameter 'program_type' is set
        if ($program_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $program_type when calling getStaffProgramAssociationByKey');
        }
        // verify the required parameter 'staff_unique_id' is set
        if ($staff_unique_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_unique_id when calling getStaffProgramAssociationByKey');
        }
        // verify the required parameter 'begin_date' is set
        if ($begin_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $begin_date when calling getStaffProgramAssociationByKey');
        }
        // verify the required parameter 'program_name' is set
        if ($program_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $program_name when calling getStaffProgramAssociationByKey');
        }
  
        // parse inputs
        $resourcePath = "/staffProgramAssociations";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($program_education_organization_id !== null) {
            $queryParams['programEducationOrganizationId'] = $this->apiClient->getSerializer()->toQueryValue($program_education_organization_id);
        }// query params
        
        if ($program_type !== null) {
            $queryParams['programType'] = $this->apiClient->getSerializer()->toQueryValue($program_type);
        }// query params
        
        if ($staff_unique_id !== null) {
            $queryParams['staffUniqueId'] = $this->apiClient->getSerializer()->toQueryValue($staff_unique_id);
        }// query params
        
        if ($begin_date !== null) {
            $queryParams['beginDate'] = $this->apiClient->getSerializer()->toQueryValue($begin_date);
        }// query params
        
        if ($program_name !== null) {
            $queryParams['programName'] = $this->apiClient->getSerializer()->toQueryValue($program_name);
        }
        // header params
        
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\StaffProgramAssociation'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StaffProgramAssociation', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StaffProgramAssociation', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 500:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\WebServiceError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getStaffProgramAssociationsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StaffProgramAssociation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffProgramAssociationsById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStaffProgramAssociationsByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getStaffProgramAssociationsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StaffProgramAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffProgramAssociationsByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getStaffProgramAssociationsById');
        }
  
        // parse inputs
        $resourcePath = "/staffProgramAssociations/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        // header params
        
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\StaffProgramAssociation'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StaffProgramAssociation', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StaffProgramAssociation', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 500:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\WebServiceError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * postStaffProgramAssociations
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StaffProgramAssociation $staff_program_association The JSON representation of the \&quot;staffProgramAssociation\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStaffProgramAssociations($staff_program_association)
    {
        list($response, $statusCode, $httpHeader) = $this->postStaffProgramAssociationsWithHttpInfo ($staff_program_association);
        return $response; 
    }


    /**
     * postStaffProgramAssociationsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StaffProgramAssociation $staff_program_association The JSON representation of the \&quot;staffProgramAssociation\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStaffProgramAssociationsWithHttpInfo($staff_program_association)
    {
        
        // verify the required parameter 'staff_program_association' is set
        if ($staff_program_association === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_program_association when calling postStaffProgramAssociations');
        }
  
        // parse inputs
        $resourcePath = "/staffProgramAssociations";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($staff_program_association)) {
            $_tempBody = $staff_program_association;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 500:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\WebServiceError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * putStaffProgramAssociation
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StaffProgramAssociation $staff_program_association The JSON representation of the \&quot;staffProgramAssociation\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStaffProgramAssociation($id, $staff_program_association, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putStaffProgramAssociationWithHttpInfo ($id, $staff_program_association, $if_match);
        return $response; 
    }


    /**
     * putStaffProgramAssociationWithHttpInfo
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StaffProgramAssociation $staff_program_association The JSON representation of the \&quot;staffProgramAssociation\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStaffProgramAssociationWithHttpInfo($id, $staff_program_association, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putStaffProgramAssociation');
        }
        // verify the required parameter 'staff_program_association' is set
        if ($staff_program_association === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_program_association when calling putStaffProgramAssociation');
        }
  
        // parse inputs
        $resourcePath = "/staffProgramAssociations/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        // header params
        
        if ($if_match !== null) {
            $headerParams['If-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_match);
        }
        // path params
        
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($staff_program_association)) {
            $_tempBody = $staff_program_association;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 500:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\WebServiceError', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}