<?php
/**
 * StaffClassificationDescriptorsApi
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
 * StaffClassificationDescriptorsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StaffClassificationDescriptorsApi
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
            $apiClient->getConfig()->setHost('https://sandbox.nebraskacloud.org/api/api/v1.0/2016');
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
     * @return StaffClassificationDescriptorsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteStaffClassificationDescriptorById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStaffClassificationDescriptorById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteStaffClassificationDescriptorByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteStaffClassificationDescriptorByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStaffClassificationDescriptorByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteStaffClassificationDescriptorById');
        }
  
        // parse inputs
        $resourcePath = "/staffClassificationDescriptors/{id}";
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
     * getStaffClassificationDescriptorByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $staff_classification_descriptor_id A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StaffClassificationDescriptor
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffClassificationDescriptorByKey($staff_classification_descriptor_id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStaffClassificationDescriptorByKeyWithHttpInfo ($staff_classification_descriptor_id, $if_none_match);
        return $response; 
    }


    /**
     * getStaffClassificationDescriptorByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $staff_classification_descriptor_id A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StaffClassificationDescriptor, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffClassificationDescriptorByKeyWithHttpInfo($staff_classification_descriptor_id, $if_none_match = null)
    {
        
        // verify the required parameter 'staff_classification_descriptor_id' is set
        if ($staff_classification_descriptor_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_classification_descriptor_id when calling getStaffClassificationDescriptorByKey');
        }
  
        // parse inputs
        $resourcePath = "/staffClassificationDescriptors";
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
        
        if ($staff_classification_descriptor_id !== null) {
            $queryParams['staffClassificationDescriptorId'] = $this->apiClient->getSerializer()->toQueryValue($staff_classification_descriptor_id);
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
                $headerParams, '\Swagger\Client\Model\StaffClassificationDescriptor'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StaffClassificationDescriptor', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StaffClassificationDescriptor', $e->getResponseHeaders());
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
     * getStaffClassificationDescriptorsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StaffClassificationDescriptor
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffClassificationDescriptorsById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStaffClassificationDescriptorsByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getStaffClassificationDescriptorsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StaffClassificationDescriptor, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStaffClassificationDescriptorsByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getStaffClassificationDescriptorsById');
        }
  
        // parse inputs
        $resourcePath = "/staffClassificationDescriptors/{id}";
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
                $headerParams, '\Swagger\Client\Model\StaffClassificationDescriptor'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StaffClassificationDescriptor', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StaffClassificationDescriptor', $e->getResponseHeaders());
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
     * postStaffClassificationDescriptors
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StaffClassificationDescriptor $staff_classification_descriptor The JSON representation of the \&quot;staffClassificationDescriptor\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStaffClassificationDescriptors($staff_classification_descriptor)
    {
        list($response, $statusCode, $httpHeader) = $this->postStaffClassificationDescriptorsWithHttpInfo ($staff_classification_descriptor);
        return $response; 
    }


    /**
     * postStaffClassificationDescriptorsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StaffClassificationDescriptor $staff_classification_descriptor The JSON representation of the \&quot;staffClassificationDescriptor\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStaffClassificationDescriptorsWithHttpInfo($staff_classification_descriptor)
    {
        
        // verify the required parameter 'staff_classification_descriptor' is set
        if ($staff_classification_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_classification_descriptor when calling postStaffClassificationDescriptors');
        }
  
        // parse inputs
        $resourcePath = "/staffClassificationDescriptors";
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
        if (isset($staff_classification_descriptor)) {
            $_tempBody = $staff_classification_descriptor;
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
     * putStaffClassificationDescriptor
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StaffClassificationDescriptor $staff_classification_descriptor The JSON representation of the \&quot;staffClassificationDescriptor\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStaffClassificationDescriptor($id, $staff_classification_descriptor, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putStaffClassificationDescriptorWithHttpInfo ($id, $staff_classification_descriptor, $if_match);
        return $response; 
    }


    /**
     * putStaffClassificationDescriptorWithHttpInfo
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StaffClassificationDescriptor $staff_classification_descriptor The JSON representation of the \&quot;staffClassificationDescriptor\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStaffClassificationDescriptorWithHttpInfo($id, $staff_classification_descriptor, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putStaffClassificationDescriptor');
        }
        // verify the required parameter 'staff_classification_descriptor' is set
        if ($staff_classification_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $staff_classification_descriptor when calling putStaffClassificationDescriptor');
        }
  
        // parse inputs
        $resourcePath = "/staffClassificationDescriptors/{id}";
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
        if (isset($staff_classification_descriptor)) {
            $_tempBody = $staff_classification_descriptor;
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
