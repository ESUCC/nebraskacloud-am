<?php
/**
 * IntegratedTechnologyStatusTypesApi
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
 * IntegratedTechnologyStatusTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegratedTechnologyStatusTypesApi
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
     * @return IntegratedTechnologyStatusTypesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteIntegratedTechnologyStatusTypeById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteIntegratedTechnologyStatusTypeById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteIntegratedTechnologyStatusTypeByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteIntegratedTechnologyStatusTypeByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteIntegratedTechnologyStatusTypeByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteIntegratedTechnologyStatusTypeById');
        }
  
        // parse inputs
        $resourcePath = "/integratedTechnologyStatusTypes/{id}";
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
     * getIntegratedTechnologyStatusTypeByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $integrated_technology_status_type_id  (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\IntegratedTechnologyStatusType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIntegratedTechnologyStatusTypeByKey($integrated_technology_status_type_id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getIntegratedTechnologyStatusTypeByKeyWithHttpInfo ($integrated_technology_status_type_id, $if_none_match);
        return $response; 
    }


    /**
     * getIntegratedTechnologyStatusTypeByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param int $integrated_technology_status_type_id  (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\IntegratedTechnologyStatusType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIntegratedTechnologyStatusTypeByKeyWithHttpInfo($integrated_technology_status_type_id, $if_none_match = null)
    {
        
        // verify the required parameter 'integrated_technology_status_type_id' is set
        if ($integrated_technology_status_type_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $integrated_technology_status_type_id when calling getIntegratedTechnologyStatusTypeByKey');
        }
  
        // parse inputs
        $resourcePath = "/integratedTechnologyStatusTypes";
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
        
        if ($integrated_technology_status_type_id !== null) {
            $queryParams['integratedTechnologyStatusTypeId'] = $this->apiClient->getSerializer()->toQueryValue($integrated_technology_status_type_id);
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
                $headerParams, '\Swagger\Client\Model\IntegratedTechnologyStatusType'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\IntegratedTechnologyStatusType', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\IntegratedTechnologyStatusType', $e->getResponseHeaders());
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
     * getIntegratedTechnologyStatusTypesById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\IntegratedTechnologyStatusType
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIntegratedTechnologyStatusTypesById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getIntegratedTechnologyStatusTypesByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getIntegratedTechnologyStatusTypesByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\IntegratedTechnologyStatusType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIntegratedTechnologyStatusTypesByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getIntegratedTechnologyStatusTypesById');
        }
  
        // parse inputs
        $resourcePath = "/integratedTechnologyStatusTypes/{id}";
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
                $headerParams, '\Swagger\Client\Model\IntegratedTechnologyStatusType'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\IntegratedTechnologyStatusType', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\IntegratedTechnologyStatusType', $e->getResponseHeaders());
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
     * postIntegratedTechnologyStatusTypes
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\IntegratedTechnologyStatusType $integrated_technology_status_type The JSON representation of the \&quot;integratedTechnologyStatusType\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postIntegratedTechnologyStatusTypes($integrated_technology_status_type)
    {
        list($response, $statusCode, $httpHeader) = $this->postIntegratedTechnologyStatusTypesWithHttpInfo ($integrated_technology_status_type);
        return $response; 
    }


    /**
     * postIntegratedTechnologyStatusTypesWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\IntegratedTechnologyStatusType $integrated_technology_status_type The JSON representation of the \&quot;integratedTechnologyStatusType\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postIntegratedTechnologyStatusTypesWithHttpInfo($integrated_technology_status_type)
    {
        
        // verify the required parameter 'integrated_technology_status_type' is set
        if ($integrated_technology_status_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $integrated_technology_status_type when calling postIntegratedTechnologyStatusTypes');
        }
  
        // parse inputs
        $resourcePath = "/integratedTechnologyStatusTypes";
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
        if (isset($integrated_technology_status_type)) {
            $_tempBody = $integrated_technology_status_type;
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
     * putIntegratedTechnologyStatusType
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\IntegratedTechnologyStatusType $integrated_technology_status_type The JSON representation of the \&quot;integratedTechnologyStatusType\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putIntegratedTechnologyStatusType($id, $integrated_technology_status_type, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putIntegratedTechnologyStatusTypeWithHttpInfo ($id, $integrated_technology_status_type, $if_match);
        return $response; 
    }


    /**
     * putIntegratedTechnologyStatusTypeWithHttpInfo
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\IntegratedTechnologyStatusType $integrated_technology_status_type The JSON representation of the \&quot;integratedTechnologyStatusType\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putIntegratedTechnologyStatusTypeWithHttpInfo($id, $integrated_technology_status_type, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putIntegratedTechnologyStatusType');
        }
        // verify the required parameter 'integrated_technology_status_type' is set
        if ($integrated_technology_status_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $integrated_technology_status_type when calling putIntegratedTechnologyStatusType');
        }
  
        // parse inputs
        $resourcePath = "/integratedTechnologyStatusTypes/{id}";
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
        if (isset($integrated_technology_status_type)) {
            $_tempBody = $integrated_technology_status_type;
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