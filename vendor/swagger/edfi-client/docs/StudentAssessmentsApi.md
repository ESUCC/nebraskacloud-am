# Swagger\Client\StudentAssessmentsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentAssessmentById**](StudentAssessmentsApi.md#deleteStudentAssessmentById) | **DELETE** /studentAssessments/{id} | Deletes an existing resource using the resource identifier.
[**getStudentAssessmentByKey**](StudentAssessmentsApi.md#getStudentAssessmentByKey) | **GET** /studentAssessments | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStudentAssessmentsById**](StudentAssessmentsApi.md#getStudentAssessmentsById) | **GET** /studentAssessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStudentAssessments**](StudentAssessmentsApi.md#postStudentAssessments) | **POST** /studentAssessments | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentAssessment**](StudentAssessmentsApi.md#putStudentAssessment) | **PUT** /studentAssessments/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStudentAssessmentById**
> deleteStudentAssessmentById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentAssessmentsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentAssessmentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->deleteStudentAssessmentById: ', $e->getMessage(), "\n";
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

# **getStudentAssessmentByKey**
> \Swagger\Client\Model\StudentAssessment getStudentAssessmentByKey($student_unique_id, $assessment_title, $academic_subject_descriptor, $assessed_grade_level_descriptor, $version, $administration_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentAssessmentsApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$assessment_title = "assessment_title_example"; // string | The title or name of the assessment.  NEDM: Assessment Title
$academic_subject_descriptor = "academic_subject_descriptor_example"; // string | The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject
$assessed_grade_level_descriptor = "assessed_grade_level_descriptor_example"; // string | The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ...
$version = 56; // int | The version identifier for the test assessment.  NEDM: Assessment Version
$administration_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The month(s), day(s), and year on which an assessment is administered or first day of administration if over multiple days.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentAssessmentByKey($student_unique_id, $assessment_title, $academic_subject_descriptor, $assessed_grade_level_descriptor, $version, $administration_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->getStudentAssessmentByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **assessment_title** | **string**| The title or name of the assessment.  NEDM: Assessment Title | 
 **academic_subject_descriptor** | **string**| The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject | 
 **assessed_grade_level_descriptor** | **string**| The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ... | 
 **version** | [**int**](.md)| The version identifier for the test assessment.  NEDM: Assessment Version | 
 **administration_date** | [**\Swagger\Client\Model\Object**](.md)| The month(s), day(s), and year on which an assessment is administered or first day of administration if over multiple days. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentAssessment**](StudentAssessment.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentAssessmentsById**
> \Swagger\Client\Model\StudentAssessment getStudentAssessmentsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentAssessmentsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentAssessmentsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->getStudentAssessmentsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentAssessment**](StudentAssessment.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentAssessments**
> postStudentAssessments($student_assessment)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentAssessmentsApi();
$student_assessment = new \Swagger\Client\Model\StudentAssessment(); // \Swagger\Client\Model\StudentAssessment | The JSON representation of the \"studentAssessment\" resource to be created or updated.

try { 
    $api_instance->postStudentAssessments($student_assessment);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->postStudentAssessments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_assessment** | [**\Swagger\Client\Model\StudentAssessment**](\Swagger\Client\Model\StudentAssessment.md)| The JSON representation of the \&quot;studentAssessment\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentAssessment**
> putStudentAssessment($id, $student_assessment, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentAssessmentsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_assessment = new \Swagger\Client\Model\StudentAssessment(); // \Swagger\Client\Model\StudentAssessment | The JSON representation of the \"studentAssessment\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentAssessment($id, $student_assessment, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentAssessmentsApi->putStudentAssessment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_assessment** | [**\Swagger\Client\Model\StudentAssessment**](\Swagger\Client\Model\StudentAssessment.md)| The JSON representation of the \&quot;studentAssessment\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

