<?php
/**
 * ContinuationOfServicesReasonDescriptorsApi
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
 * ContinuationOfServicesReasonDescriptorsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContinuationOfServicesReasonDescriptorsApi
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
     * @return ContinuationOfServicesReasonDescriptorsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteContinuationOfServicesReasonDescriptorById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteContinuationOfServicesReasonDescriptorById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteContinuationOfServicesReasonDescriptorByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteContinuationOfServicesReasonDescriptorByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteContinuationOfServicesReasonDescriptorByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteContinuationOfServicesReasonDescriptorById');
        }
  
        // parse inputs
        $resourcePath = "/continuationOfServicesReasonDescriptors/{id}";
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
     * getContinuationOfServicesReasonDescriptorByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $continuation_of_services_reason_descriptor_id A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getContinuationOfServicesReasonDescriptorByKey($continuation_of_services_reason_descriptor_id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getContinuationOfServicesReasonDescriptorByKeyWithHttpInfo ($continuation_of_services_reason_descriptor_id, $if_none_match);
        return $response; 
    }


    /**
     * getContinuationOfServicesReasonDescriptorByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $continuation_of_services_reason_descriptor_id A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getContinuationOfServicesReasonDescriptorByKeyWithHttpInfo($continuation_of_services_reason_descriptor_id, $if_none_match = null)
    {
        
        // verify the required parameter 'continuation_of_services_reason_descriptor_id' is set
        if ($continuation_of_services_reason_descriptor_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuation_of_services_reason_descriptor_id when calling getContinuationOfServicesReasonDescriptorByKey');
        }
  
        // parse inputs
        $resourcePath = "/continuationOfServicesReasonDescriptors";
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
        
        if ($continuation_of_services_reason_descriptor_id !== null) {
            $queryParams['continuationOfServicesReasonDescriptorId'] = $this->apiClient->getSerializer()->toQueryValue($continuation_of_services_reason_descriptor_id);
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
                $headerParams, '\Swagger\Client\Model\ContinuationOfServicesReasonDescriptor'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\ContinuationOfServicesReasonDescriptor', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ContinuationOfServicesReasonDescriptor', $e->getResponseHeaders());
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
     * getContinuationOfServicesReasonDescriptorsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getContinuationOfServicesReasonDescriptorsById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getContinuationOfServicesReasonDescriptorsByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getContinuationOfServicesReasonDescriptorsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getContinuationOfServicesReasonDescriptorsByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getContinuationOfServicesReasonDescriptorsById');
        }
  
        // parse inputs
        $resourcePath = "/continuationOfServicesReasonDescriptors/{id}";
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
                $headerParams, '\Swagger\Client\Model\ContinuationOfServicesReasonDescriptor'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\ContinuationOfServicesReasonDescriptor', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ContinuationOfServicesReasonDescriptor', $e->getResponseHeaders());
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
     * postContinuationOfServicesReasonDescriptors
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor $continuation_of_services_reason_descriptor The JSON representation of the \&quot;continuationOfServicesReasonDescriptor\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postContinuationOfServicesReasonDescriptors($continuation_of_services_reason_descriptor)
    {
        list($response, $statusCode, $httpHeader) = $this->postContinuationOfServicesReasonDescriptorsWithHttpInfo ($continuation_of_services_reason_descriptor);
        return $response; 
    }


    /**
     * postContinuationOfServicesReasonDescriptorsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor $continuation_of_services_reason_descriptor The JSON representation of the \&quot;continuationOfServicesReasonDescriptor\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postContinuationOfServicesReasonDescriptorsWithHttpInfo($continuation_of_services_reason_descriptor)
    {
        
        // verify the required parameter 'continuation_of_services_reason_descriptor' is set
        if ($continuation_of_services_reason_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuation_of_services_reason_descriptor when calling postContinuationOfServicesReasonDescriptors');
        }
  
        // parse inputs
        $resourcePath = "/continuationOfServicesReasonDescriptors";
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
        if (isset($continuation_of_services_reason_descriptor)) {
            $_tempBody = $continuation_of_services_reason_descriptor;
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
     * putContinuationOfServicesReasonDescriptor
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor $continuation_of_services_reason_descriptor The JSON representation of the \&quot;continuationOfServicesReasonDescriptor\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putContinuationOfServicesReasonDescriptor($id, $continuation_of_services_reason_descriptor, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putContinuationOfServicesReasonDescriptorWithHttpInfo ($id, $continuation_of_services_reason_descriptor, $if_match);
        return $response; 
    }


    /**
     * putContinuationOfServicesReasonDescriptorWithHttpInfo
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\ContinuationOfServicesReasonDescriptor $continuation_of_services_reason_descriptor The JSON representation of the \&quot;continuationOfServicesReasonDescriptor\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putContinuationOfServicesReasonDescriptorWithHttpInfo($id, $continuation_of_services_reason_descriptor, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putContinuationOfServicesReasonDescriptor');
        }
        // verify the required parameter 'continuation_of_services_reason_descriptor' is set
        if ($continuation_of_services_reason_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $continuation_of_services_reason_descriptor when calling putContinuationOfServicesReasonDescriptor');
        }
  
        // parse inputs
        $resourcePath = "/continuationOfServicesReasonDescriptors/{id}";
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
        if (isset($continuation_of_services_reason_descriptor)) {
            $_tempBody = $continuation_of_services_reason_descriptor;
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
