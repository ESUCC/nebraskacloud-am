<?php
/**
 * StudentSchoolAssociationsApi
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
 * StudentSchoolAssociationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StudentSchoolAssociationsApi
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
     * @return StudentSchoolAssociationsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }


    /**
     * deleteStudentSchoolAssociationById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStudentSchoolAssociationById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteStudentSchoolAssociationByIdWithHttpInfo ($id, $if_match);
        return $response;
    }


    /**
     * deleteStudentSchoolAssociationByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStudentSchoolAssociationByIdWithHttpInfo($id, $if_match = null)
    {

        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteStudentSchoolAssociationById');
        }

        // parse inputs
        $resourcePath = "/studentSchoolAssociations/{id}";
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
     * getStudentSchoolAssociationByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param string $student_unique_id A unique alpha-numeric code assigned to a student. (required)
     * @param int $school_id School Identity Column (required)
     * @param \Swagger\Client\Model\Object $entry_date The month, day, and year on which an individual enters and begins to receive instructional services in a school. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentSchoolAssociation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSchoolAssociationByKey($student_unique_id, $school_id, $entry_date, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStudentSchoolAssociationByKeyWithHttpInfo ($student_unique_id, $school_id, $entry_date, $if_none_match);
        return $response;
    }


    /**
     * getStudentSchoolAssociationByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param string $student_unique_id A unique alpha-numeric code assigned to a student. (required)
     * @param int $school_id School Identity Column (required)
     * @param \Swagger\Client\Model\Object $entry_date The month, day, and year on which an individual enters and begins to receive instructional services in a school. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentSchoolAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSchoolAssociationByKeyWithHttpInfo($student_unique_id, $school_id, $entry_date, $if_none_match = null)
    {

        // verify the required parameter 'student_unique_id' is set

        // parse inputs
        $resourcePath = "/studentSchoolAssociations";
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

        if ($school_id !== null) {
            $queryParams['schoolId'] = $this->apiClient->getSerializer()->toQueryValue($school_id);
        }// query params

        if ($entry_date !== null) {
            $queryParams['entryDate'] = $this->apiClient->getSerializer()->toQueryValue($entry_date);
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
                $headerParams, '\Swagger\Client\Model\StudentSchoolAssociation'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentSchoolAssociation', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentSchoolAssociation', $e->getResponseHeaders());
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
     * getStudentSchoolAssociations
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentSchoolAssociation[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSchoolAssociations($if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStudentSchoolAssociationsWithHttpInfo ($if_none_match);
        return $response;
    }

    /**
     * getStudentSchoolAssociationsWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentSchoolAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSchoolAssociationsWithHttpInfo($if_none_match = null)
    {

        // parse inputs
        $resourcePath = "/studentSchoolAssociations";
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
                $headerParams, '\Swagger\Client\Model\StudentSchoolAssociation[]'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentSchoolAssociation[]', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentSchoolAssociation[]', $e->getResponseHeaders());
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
     * getStudentSchoolAssociationsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentSchoolAssociation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSchoolAssociationsById($id, $if_none_match = null)
    {
    	list($response, $statusCode, $httpHeader) = $this->getStudentSchoolAssociationsByIdWithHttpInfo ($id, $if_none_match);
    	return $response;
    }


    /**
     * getStudentSchoolAssociationsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentSchoolAssociation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSchoolAssociationsByIdWithHttpInfo($id, $if_none_match = null)
    {

    	// verify the required parameter 'id' is set
    	if ($id === null) {
    		throw new \InvalidArgumentException('Missing the required parameter $id when calling getStudentSchoolAssociationsById');
    	}

    	// parse inputs
    	$resourcePath = "/studentSchoolAssociations/{id}";
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
    			$headerParams, '\Swagger\Client\Model\StudentSchoolAssociation'
    			);

    		if (!$response) {
    			return array(null, $statusCode, $httpHeader);
    		}

    		return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentSchoolAssociation', $httpHeader), $statusCode, $httpHeader);

    	} catch (ApiException $e) {
    		switch ($e->getCode()) {
    			case 200:
    				$data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentSchoolAssociation', $e->getResponseHeaders());
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
     * postStudentSchoolAssociations
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StudentSchoolAssociation $student_school_association The JSON representation of the \&quot;studentSchoolAssociation\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStudentSchoolAssociations($student_school_association)
    {
        list($response, $statusCode, $httpHeader) = $this->postStudentSchoolAssociationsWithHttpInfo ($student_school_association);
        return $response;
    }


    /**
     * postStudentSchoolAssociationsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StudentSchoolAssociation $student_school_association The JSON representation of the \&quot;studentSchoolAssociation\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStudentSchoolAssociationsWithHttpInfo($student_school_association)
    {

        // verify the required parameter 'student_school_association' is set
        if ($student_school_association === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_school_association when calling postStudentSchoolAssociations');
        }

        // parse inputs
        $resourcePath = "/studentSchoolAssociations";
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
        if (isset($student_school_association)) {
            $_tempBody = $student_school_association;
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
     * putStudentSchoolAssociation
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StudentSchoolAssociation $student_school_association The JSON representation of the \&quot;studentSchoolAssociation\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStudentSchoolAssociation($id, $student_school_association, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putStudentSchoolAssociationWithHttpInfo ($id, $student_school_association, $if_match);
        return $response;
    }


    /**
     * putStudentSchoolAssociationWithHttpInfo
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StudentSchoolAssociation $student_school_association The JSON representation of the \&quot;studentSchoolAssociation\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStudentSchoolAssociationWithHttpInfo($id, $student_school_association, $if_match = null)
    {

        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putStudentSchoolAssociation');
        }
        // verify the required parameter 'student_school_association' is set
        if ($student_school_association === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_school_association when calling putStudentSchoolAssociation');
        }

        // parse inputs
        $resourcePath = "/studentSchoolAssociations/{id}";
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
        if (isset($student_school_association)) {
            $_tempBody = $student_school_association;
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
