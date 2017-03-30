<?php
/**
 * StudentSectionAttendanceEventsApi
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
 * StudentSectionAttendanceEventsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StudentSectionAttendanceEventsApi
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
     * @return StudentSectionAttendanceEventsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * deleteStudentSectionAttendanceEventById
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStudentSectionAttendanceEventById($id, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteStudentSectionAttendanceEventByIdWithHttpInfo ($id, $if_match);
        return $response; 
    }


    /**
     * deleteStudentSectionAttendanceEventByIdWithHttpInfo
     *
     * Deletes an existing resource using the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be deleted. (required)
     * @param string $if_match The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteStudentSectionAttendanceEventByIdWithHttpInfo($id, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteStudentSectionAttendanceEventById');
        }
  
        // parse inputs
        $resourcePath = "/studentSectionAttendanceEvents/{id}";
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
     * getStudentSectionAttendanceEventByKey
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param string $student_unique_id A unique alpha-numeric code assigned to a student. (required)
     * @param string $classroom_identification_code A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. (required)
     * @param int $school_id School identity column (required)
     * @param string $class_period_name An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period (required)
     * @param string $local_course_code The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students. (required)
     * @param int $school_year The identifier for the school year. (required)
     * @param string $term_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $unique_section_code A unique identifier for the section, that is defined for a campus by the classroom, the subjects taught, and the instructors that are assigned.  NEDM: Unique Course Code (required)
     * @param int $sequence_of_course When a section is part of a sequence of parts for a course, the number if the sequence.  If the course has only onle part, the value of this section attribute should be 1. (required)
     * @param \Swagger\Client\Model\Object $event_date Date for this attendance event. (required)
     * @param string $attendance_event_category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentSectionAttendanceEvent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSectionAttendanceEventByKey($student_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $event_date, $attendance_event_category_descriptor, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStudentSectionAttendanceEventByKeyWithHttpInfo ($student_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $event_date, $attendance_event_category_descriptor, $if_none_match);
        return $response; 
    }


    /**
     * getStudentSectionAttendanceEventByKeyWithHttpInfo
     *
     * Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).
     *
     * @param string $student_unique_id A unique alpha-numeric code assigned to a student. (required)
     * @param string $classroom_identification_code A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. (required)
     * @param int $school_id School identity column (required)
     * @param string $class_period_name An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period (required)
     * @param string $local_course_code The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students. (required)
     * @param int $school_year The identifier for the school year. (required)
     * @param string $term_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $unique_section_code A unique identifier for the section, that is defined for a campus by the classroom, the subjects taught, and the instructors that are assigned.  NEDM: Unique Course Code (required)
     * @param int $sequence_of_course When a section is part of a sequence of parts for a course, the number if the sequence.  If the course has only onle part, the value of this section attribute should be 1. (required)
     * @param \Swagger\Client\Model\Object $event_date Date for this attendance event. (required)
     * @param string $attendance_event_category_descriptor A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentSectionAttendanceEvent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSectionAttendanceEventByKeyWithHttpInfo($student_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $event_date, $attendance_event_category_descriptor, $if_none_match = null)
    {
        
        // verify the required parameter 'student_unique_id' is set
        if ($student_unique_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_unique_id when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'classroom_identification_code' is set
        if ($classroom_identification_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $classroom_identification_code when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'school_id' is set
        if ($school_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $school_id when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'class_period_name' is set
        if ($class_period_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $class_period_name when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'local_course_code' is set
        if ($local_course_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $local_course_code when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'school_year' is set
        if ($school_year === null) {
            throw new \InvalidArgumentException('Missing the required parameter $school_year when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'term_descriptor' is set
        if ($term_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $term_descriptor when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'unique_section_code' is set
        if ($unique_section_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $unique_section_code when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'sequence_of_course' is set
        if ($sequence_of_course === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sequence_of_course when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'event_date' is set
        if ($event_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $event_date when calling getStudentSectionAttendanceEventByKey');
        }
        // verify the required parameter 'attendance_event_category_descriptor' is set
        if ($attendance_event_category_descriptor === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attendance_event_category_descriptor when calling getStudentSectionAttendanceEventByKey');
        }
  
        // parse inputs
        $resourcePath = "/studentSectionAttendanceEvents";
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
        
        if ($classroom_identification_code !== null) {
            $queryParams['classroomIdentificationCode'] = $this->apiClient->getSerializer()->toQueryValue($classroom_identification_code);
        }// query params
        
        if ($school_id !== null) {
            $queryParams['schoolId'] = $this->apiClient->getSerializer()->toQueryValue($school_id);
        }// query params
        
        if ($class_period_name !== null) {
            $queryParams['classPeriodName'] = $this->apiClient->getSerializer()->toQueryValue($class_period_name);
        }// query params
        
        if ($local_course_code !== null) {
            $queryParams['localCourseCode'] = $this->apiClient->getSerializer()->toQueryValue($local_course_code);
        }// query params
        
        if ($school_year !== null) {
            $queryParams['schoolYear'] = $this->apiClient->getSerializer()->toQueryValue($school_year);
        }// query params
        
        if ($term_descriptor !== null) {
            $queryParams['termDescriptor'] = $this->apiClient->getSerializer()->toQueryValue($term_descriptor);
        }// query params
        
        if ($unique_section_code !== null) {
            $queryParams['uniqueSectionCode'] = $this->apiClient->getSerializer()->toQueryValue($unique_section_code);
        }// query params
        
        if ($sequence_of_course !== null) {
            $queryParams['sequenceOfCourse'] = $this->apiClient->getSerializer()->toQueryValue($sequence_of_course);
        }// query params
        
        if ($event_date !== null) {
            $queryParams['eventDate'] = $this->apiClient->getSerializer()->toQueryValue($event_date);
        }// query params
        
        if ($attendance_event_category_descriptor !== null) {
            $queryParams['attendanceEventCategoryDescriptor'] = $this->apiClient->getSerializer()->toQueryValue($attendance_event_category_descriptor);
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
                $headerParams, '\Swagger\Client\Model\StudentSectionAttendanceEvent'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentSectionAttendanceEvent', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentSectionAttendanceEvent', $e->getResponseHeaders());
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
     * getStudentSectionAttendanceEventsById
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return \Swagger\Client\Model\StudentSectionAttendanceEvent
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSectionAttendanceEventsById($id, $if_none_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getStudentSectionAttendanceEventsByIdWithHttpInfo ($id, $if_none_match);
        return $response; 
    }


    /**
     * getStudentSectionAttendanceEventsByIdWithHttpInfo
     *
     * Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).
     *
     * @param string $id A resource identifier specifying the resource to be retrieved. (required)
     * @param string $if_none_match The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. (optional)
     * @return Array of \Swagger\Client\Model\StudentSectionAttendanceEvent, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getStudentSectionAttendanceEventsByIdWithHttpInfo($id, $if_none_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getStudentSectionAttendanceEventsById');
        }
  
        // parse inputs
        $resourcePath = "/studentSectionAttendanceEvents/{id}";
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
                $headerParams, '\Swagger\Client\Model\StudentSectionAttendanceEvent'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\StudentSectionAttendanceEvent', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\StudentSectionAttendanceEvent', $e->getResponseHeaders());
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
     * postStudentSectionAttendanceEvents
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StudentSectionAttendanceEvent $student_section_attendance_event The JSON representation of the \&quot;studentSectionAttendanceEvent\&quot; resource to be created or updated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStudentSectionAttendanceEvents($student_section_attendance_event)
    {
        list($response, $statusCode, $httpHeader) = $this->postStudentSectionAttendanceEventsWithHttpInfo ($student_section_attendance_event);
        return $response; 
    }


    /**
     * postStudentSectionAttendanceEventsWithHttpInfo
     *
     * Creates or updates resources based on the natural key values of the supplied resource.
     *
     * @param \Swagger\Client\Model\StudentSectionAttendanceEvent $student_section_attendance_event The JSON representation of the \&quot;studentSectionAttendanceEvent\&quot; resource to be created or updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function postStudentSectionAttendanceEventsWithHttpInfo($student_section_attendance_event)
    {
        
        // verify the required parameter 'student_section_attendance_event' is set
        if ($student_section_attendance_event === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_section_attendance_event when calling postStudentSectionAttendanceEvents');
        }
  
        // parse inputs
        $resourcePath = "/studentSectionAttendanceEvents";
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
        if (isset($student_section_attendance_event)) {
            $_tempBody = $student_section_attendance_event;
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
     * putStudentSectionAttendanceEvent
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StudentSectionAttendanceEvent $student_section_attendance_event The JSON representation of the \&quot;studentSectionAttendanceEvent\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStudentSectionAttendanceEvent($id, $student_section_attendance_event, $if_match = null)
    {
        list($response, $statusCode, $httpHeader) = $this->putStudentSectionAttendanceEventWithHttpInfo ($id, $student_section_attendance_event, $if_match);
        return $response; 
    }


    /**
     * putStudentSectionAttendanceEventWithHttpInfo
     *
     * Updates or creates a resource based on the resource identifier.
     *
     * @param string $id A resource identifier specifying the resource to be updated. (required)
     * @param \Swagger\Client\Model\StudentSectionAttendanceEvent $student_section_attendance_event The JSON representation of the \&quot;studentSectionAttendanceEvent\&quot; resource to be updated. (required)
     * @param string $if_match The ETag header value used to prevent the PUT from updating a resource modified by another consumer. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function putStudentSectionAttendanceEventWithHttpInfo($id, $student_section_attendance_event, $if_match = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putStudentSectionAttendanceEvent');
        }
        // verify the required parameter 'student_section_attendance_event' is set
        if ($student_section_attendance_event === null) {
            throw new \InvalidArgumentException('Missing the required parameter $student_section_attendance_event when calling putStudentSectionAttendanceEvent');
        }
  
        // parse inputs
        $resourcePath = "/studentSectionAttendanceEvents/{id}";
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
        if (isset($student_section_attendance_event)) {
            $_tempBody = $student_section_attendance_event;
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