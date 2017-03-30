# Swagger\Client\CourseTranscriptsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCourseTranscriptById**](CourseTranscriptsApi.md#deleteCourseTranscriptById) | **DELETE** /courseTranscripts/{id} | Deletes an existing resource using the resource identifier.
[**getCourseTranscriptByKey**](CourseTranscriptsApi.md#getCourseTranscriptByKey) | **GET** /courseTranscripts | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getCourseTranscriptsById**](CourseTranscriptsApi.md#getCourseTranscriptsById) | **GET** /courseTranscripts/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postCourseTranscripts**](CourseTranscriptsApi.md#postCourseTranscripts) | **POST** /courseTranscripts | Creates or updates resources based on the natural key values of the supplied resource.
[**putCourseTranscript**](CourseTranscriptsApi.md#putCourseTranscript) | **PUT** /courseTranscripts/{id} | Updates or creates a resource based on the resource identifier.


# **deleteCourseTranscriptById**
> deleteCourseTranscriptById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseTranscriptsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteCourseTranscriptById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->deleteCourseTranscriptById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be deleted. | 
 **if_match** | **string**| The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourseTranscriptByKey**
> \Swagger\Client\Model\CourseTranscript getCourseTranscriptByKey($course_attempt_result_type, $student_unique_id, $education_organization_id, $course_education_organization_id, $school_year, $term_descriptor, $course_code, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseTranscriptsApi();
$course_attempt_result_type = "course_attempt_result_type_example"; // string | The result from the student''s attempt to take the course, for example:  Pass  Fail  Incomplete  Withdrawn  Expelled
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$education_organization_id = 56; // int | EducationOrganization Identity Column
$course_education_organization_id = 56; // int | EducationOrganization Identity Column  
$school_year = 56; // int | The identifier for the school year.  
$term_descriptor = "term_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$course_code = "course_code_example"; // string | TThe actual code that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getCourseTranscriptByKey($course_attempt_result_type, $student_unique_id, $education_organization_id, $course_education_organization_id, $school_year, $term_descriptor, $course_code, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->getCourseTranscriptByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_attempt_result_type** | **string**| The result from the student&#39;&#39;s attempt to take the course, for example:  Pass  Fail  Incomplete  Withdrawn  Expelled | 
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **course_education_organization_id** | [**int**](.md)| EducationOrganization Identity Column   | 
 **school_year** | [**int**](.md)| The identifier for the school year.   | 
 **term_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **course_code** | **string**| TThe actual code that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\CourseTranscript**](CourseTranscript.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourseTranscriptsById**
> \Swagger\Client\Model\CourseTranscript getCourseTranscriptsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseTranscriptsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getCourseTranscriptsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->getCourseTranscriptsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\CourseTranscript**](CourseTranscript.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postCourseTranscripts**
> postCourseTranscripts($course_transcript)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseTranscriptsApi();
$course_transcript = new \Swagger\Client\Model\CourseTranscript(); // \Swagger\Client\Model\CourseTranscript | The JSON representation of the \"courseTranscript\" resource to be created or updated.

try { 
    $api_instance->postCourseTranscripts($course_transcript);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->postCourseTranscripts: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_transcript** | [**\Swagger\Client\Model\CourseTranscript**](\Swagger\Client\Model\CourseTranscript.md)| The JSON representation of the \&quot;courseTranscript\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putCourseTranscript**
> putCourseTranscript($id, $course_transcript, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseTranscriptsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$course_transcript = new \Swagger\Client\Model\CourseTranscript(); // \Swagger\Client\Model\CourseTranscript | The JSON representation of the \"courseTranscript\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putCourseTranscript($id, $course_transcript, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CourseTranscriptsApi->putCourseTranscript: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **course_transcript** | [**\Swagger\Client\Model\CourseTranscript**](\Swagger\Client\Model\CourseTranscript.md)| The JSON representation of the \&quot;courseTranscript\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

