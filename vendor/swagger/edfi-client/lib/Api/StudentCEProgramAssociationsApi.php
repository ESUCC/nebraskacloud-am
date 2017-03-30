<?php
/**
 * StudentCEProgramAssociationsApi
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
 * StudentCEProgramAssociationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StudentCEProgramAssociationsApi
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
     * @return StudentCEProgramAssociationsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteStudentCEProgramAssociationById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStudentCEProgramAssociationById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteStudentCEProgramAssociationByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteStudentCEProgramAssociationByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStudentCEProgramAssociationByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteStudentCEProgramAssociationById');
        }
  
        // parse inputs
        $resourcePath = "/studentCEProgramAssociations/{id}";
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
     * getStudentCEProgramAssociationByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param string $student_unique_id A unique alpha-numeric code assigned to a student. (required)
     * @param string $program_type The program associated with the student. (required)
     * @param string $program_name The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. (required)
     * @param int $program_education_organization_id The education organization where the student is participating in or receiving the program services. (required)
     * @param \DateTime $begin_date The month, day, and year on which the student first received services.  NEDM: Beginning Date (required)
     * @param int $education_organization_id The education organization where the student is participating in or receiving the program services. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentCEProgramAssociation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentCEProgramAssociationByKey($student_unique_id, $program_type, $program_name, $program_education_organization_id, $begin_date, $education_organization_id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStudentCEProgramAssociationByKeyWithHttpInfo ($student_unique_id, $program_type, $program_name, $program_education_organization_id, $begin_date, $education_organization_id, $if_none_match);
        return $response; 
    }


    /**
     * getStudentCEProgramAssociationByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param string $student_unique_id A unique alpha-numeric code assigned to a student. (required)
     * @param string $program_type The program associated with the student. (required)
     * @param string $program_name The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. (required)
     * @param int $program_education_organization_id The education organization where the student is participating in or receiving the program services. (required)
     * @param \DateTime $begin_date The month, day, and year on which the student first received services.  NEDM: Beginning Date (required)
     * @param int $education_organization_id The education organization where the student is participating in or receiving the program services. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentCEProgramAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentCEProgramAssociationByKeyWithHttpInfo($student_unique_id, $program_type, $program_name, $program_education_organization_id, $begin_date, $education_organization_id, $if_none_match = null)
    {
        
        // verify the required parameter 'student_unique_id' is set
        if ($student_unique_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_unique_id when calling getStudentCEProgramAssociationByKey');
        }
        // verify the required parameter 'program_type' is set
        if ($program_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $program_type when calling getStudentCEProgramAssociationByKey');
        }
        // verify the required parameter 'program_name' is set
        if ($program_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $program_name when calling getStudentCEProgramAssociationByKey');
        }
        // verify the required parameter 'program_education_organization_id' is set
        if ($program_education_organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $program_education_organization_id when calling getStudentCEProgramAssociationByKey');
        }
        // verify the required parameter 'begin_date' is set
        if ($begin_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $begin_date when calling getStudentCEProgramAssociationByKey');
        }
        // verify the required parameter 'education_organization_id' is set
        if ($education_organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $education_organization_id when calling getStudentCEProgramAssociationByKey');
        }
  
        // parse inputs
        $resourcePath = "/studentCEProgramAssociations";
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
        
        if ($student_unique_id !== null) {
            $queryParams['studentUniqueId'] = $this->apiClient->getSerializer()->toQueryValue($student_unique_id);
        }// query params
        
        if ($program_type !== null) {
            $queryParams['programType'] = $this->apiClient->getSerializer()->toQueryValue($program_type);
        }// query params
        
        if ($program_name !== null) {
            $queryParams['programName'] = $this->apiClient->getSerializer()->toQueryValue($program_name);
        }// query params
        
        if ($program_education_organization_id !== null) {
            $queryParams['programEducationOrganizationId'] = $this->apiClient->getSerializer()->toQueryValue($program_education_organization_id);
        }// query params
        
        if ($begin_date !== null) {
            $queryParams['beginDate'] = $this->apiClient->getSerializer()->toQueryValue($begin_date);
        }// query params
        
        if ($education_organization_id !== null) {
            $queryParams['educationOrganizationId'] = $this->apiClient->getSerializer()->toQueryValue($education_organization_id);
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
                $headerParams, '\Swagger\Client\Model\StudentCEProgramAssociation'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentCEProgramAssociation', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentCEProgramAssociation', $e->getResponseHeaders());
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
     * getStudentCEProgramAssociationsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentCEProgramAssociation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentCEProgramAssociationsById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStudentCEProgramAssociationsByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getStudentCEProgramAssociationsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentCEProgramAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentCEProgramAssociationsByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getStudentCEProgramAssociationsById');
        }
  
        // parse inputs
        $resourcePath = "/studentCEProgramAssociations/{id}";
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
                $headerParams, '\Swagger\Client\Model\StudentCEProgramAssociation'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentCEProgramAssociation', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentCEProgramAssociation', $e->getResponseHeaders());
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
     * postStudentCEProgramAssociations
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StudentCEProgramAssociation $student_ce_program_association The JSON representation of the \&quot;studentCEProgramAssociation\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStudentCEProgramAssociations($student_ce_program_association)
    {
        list($response, $statusCode, $httpHeader) = $this->postStudentCEProgramAssociationsWithHttpInfo ($student_ce_program_association);
        return $response; 
    }


    /**
     * postStudentCEProgramAssociationsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StudentCEProgramAssociation $student_ce_program_association The JSON representation of the \&quot;studentCEProgramAssociation\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStudentCEProgramAssociationsWithHttpInfo($student_ce_program_association)
    {
        
        // verify the required parameter 'student_ce_program_association' is set
        if ($student_ce_program_association === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_ce_program_association when calling postStudentCEProgramAssociations');
        }
  
        // parse inputs
        $resourcePath = "/studentCEProgramAssociations";
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
        if (isset($student_ce_program_association)) {
            $_tempBody = $student_ce_program_association;
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
     * putStudentCEProgramAssociation
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StudentCEProgramAssociation $student_ce_program_association The JSON representation of the \&quot;studentCEProgramAssociation\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStudentCEProgramAssociation($id, $student_ce_program_association, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putStudentCEProgramAssociationWithHttpInfo ($id, $student_ce_program_association, $if_match);
        return $response; 
    }


    /**
     * putStudentCEProgramAssociationWithHttpInfo
     *
     * Updates an existing resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StudentCEProgramAssociation $student_ce_program_association The JSON representation of the \&quot;studentCEProgramAssociation\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStudentCEProgramAssociationWithHttpInfo($id, $student_ce_program_association, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putStudentCEProgramAssociation');
        }
        // verify the required parameter 'student_ce_program_association' is set
        if ($student_ce_program_association === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_ce_program_association when calling putStudentCEProgramAssociation');
        }
  
        // parse inputs
        $resourcePath = "/studentCEProgramAssociations/{id}";
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
        if (isset($student_ce_program_association)) {
            $_tempBody = $student_ce_program_association;
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
