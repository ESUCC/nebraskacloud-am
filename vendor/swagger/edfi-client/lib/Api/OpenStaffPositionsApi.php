<?php
/**
 * OpenStaffPositionsApi
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
 * OpenStaffPositionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpenStaffPositionsApi
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
     * @return OpenStaffPositionsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteOpenStaffPositionById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteOpenStaffPositionById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteOpenStaffPositionByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteOpenStaffPositionByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteOpenStaffPositionByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteOpenStaffPositionById');
        }
  
        // parse inputs
        $resourcePath = "/openStaffPositions/{id}";
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
     * getOpenStaffPositionByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $education_organization_id EducationOrganization Identity Column (required)
     * @param string $employment_status_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $staff_classification_descriptor The position&#39;&#39;s title or rank (e.g., Counselor, teacher, etc) (required)
     * @param string $requisition_number The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources. (required)
     * @param \Swagger\Client\Model\Object $date_posted Date the OpenStaffPosition was posted. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\OpenStaffPosition
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpenStaffPositionByKey($education_organization_id, $employment_status_descriptor, $staff_classification_descriptor, $requisition_number, $date_posted, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getOpenStaffPositionByKeyWithHttpInfo ($education_organization_id, $employment_status_descriptor, $staff_classification_descriptor, $requisition_number, $date_posted, $if_none_match);
        return $response; 
    }


    /**
     * getOpenStaffPositionByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $education_organization_id EducationOrganization Identity Column (required)
     * @param string $employment_status_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $staff_classification_descriptor The position&#39;&#39;s title or rank (e.g., Counselor, teacher, etc) (required)
     * @param string $requisition_number The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources. (required)
     * @param \Swagger\Client\Model\Object $date_posted Date the OpenStaffPosition was posted. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\OpenStaffPosition, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpenStaffPositionByKeyWithHttpInfo($education_organization_id, $employment_status_descriptor, $staff_classification_descriptor, $requisition_number, $date_posted, $if_none_match = null)
    {
        
        // verify the required parameter 'education_organization_id' is set
        if ($education_organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $education_organization_id when calling getOpenStaffPositionByKey');
        }
        // verify the required parameter 'employment_status_descriptor' is set
        if ($employment_status_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $employment_status_descriptor when calling getOpenStaffPositionByKey');
        }
        // verify the required parameter 'staff_classification_descriptor' is set
        if ($staff_classification_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_classification_descriptor when calling getOpenStaffPositionByKey');
        }
        // verify the required parameter 'requisition_number' is set
        if ($requisition_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $requisition_number when calling getOpenStaffPositionByKey');
        }
        // verify the required parameter 'date_posted' is set
        if ($date_posted === null) {
            throw new \InvalidArgumentException('Missing the required parameter $date_posted when calling getOpenStaffPositionByKey');
        }
  
        // parse inputs
        $resourcePath = "/openStaffPositions";
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
        
        if ($education_organization_id !== null) {
            $queryParams['educationOrganizationId'] = $this->apiClient->getSerializer()->toQueryValue($education_organization_id);
        }// query params
        
        if ($employment_status_descriptor !== null) {
            $queryParams['employmentStatusDescriptor'] = $this->apiClient->getSerializer()->toQueryValue($employment_status_descriptor);
        }// query params
        
        if ($staff_classification_descriptor !== null) {
            $queryParams['staffClassificationDescriptor'] = $this->apiClient->getSerializer()->toQueryValue($staff_classification_descriptor);
        }// query params
        
        if ($requisition_number !== null) {
            $queryParams['requisitionNumber'] = $this->apiClient->getSerializer()->toQueryValue($requisition_number);
        }// query params
        
        if ($date_posted !== null) {
            $queryParams['datePosted'] = $this->apiClient->getSerializer()->toQueryValue($date_posted);
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
                $headerParams, '\Swagger\Client\Model\OpenStaffPosition'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\OpenStaffPosition', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\OpenStaffPosition', $e->getResponseHeaders());
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
     * getOpenStaffPositionsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\OpenStaffPosition
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpenStaffPositionsById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getOpenStaffPositionsByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getOpenStaffPositionsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\OpenStaffPosition, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpenStaffPositionsByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOpenStaffPositionsById');
        }
  
        // parse inputs
        $resourcePath = "/openStaffPositions/{id}";
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
                $headerParams, '\Swagger\Client\Model\OpenStaffPosition'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\OpenStaffPosition', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\OpenStaffPosition', $e->getResponseHeaders());
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
     * postOpenStaffPositions
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\OpenStaffPosition $open_staff_position The JSON representation of the \&quot;openStaffPosition\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postOpenStaffPositions($open_staff_position)
    {
        list($response, $statusCode, $httpHeader) = $this->postOpenStaffPositionsWithHttpInfo ($open_staff_position);
        return $response; 
    }


    /**
     * postOpenStaffPositionsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\OpenStaffPosition $open_staff_position The JSON representation of the \&quot;openStaffPosition\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postOpenStaffPositionsWithHttpInfo($open_staff_position)
    {
        
        // verify the required parameter 'open_staff_position' is set
        if ($open_staff_position === null) {
            throw new \InvalidArgumentException('Missing the required parameter $open_staff_position when calling postOpenStaffPositions');
        }
  
        // parse inputs
        $resourcePath = "/openStaffPositions";
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
        if (isset($open_staff_position)) {
            $_tempBody = $open_staff_position;
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
     * putOpenStaffPosition
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\OpenStaffPosition $open_staff_position The JSON representation of the \&quot;openStaffPosition\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putOpenStaffPosition($id, $open_staff_position, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putOpenStaffPositionWithHttpInfo ($id, $open_staff_position, $if_match);
        return $response; 
    }


    /**
     * putOpenStaffPositionWithHttpInfo
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\OpenStaffPosition $open_staff_position The JSON representation of the \&quot;openStaffPosition\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putOpenStaffPositionWithHttpInfo($id, $open_staff_position, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putOpenStaffPosition');
        }
        // verify the required parameter 'open_staff_position' is set
        if ($open_staff_position === null) {
            throw new \InvalidArgumentException('Missing the required parameter $open_staff_position when calling putOpenStaffPosition');
        }
  
        // parse inputs
        $resourcePath = "/openStaffPositions/{id}";
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
        if (isset($open_staff_position)) {
            $_tempBody = $open_staff_position;
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
