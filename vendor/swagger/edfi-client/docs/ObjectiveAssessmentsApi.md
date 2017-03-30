# Swagger\Client\ObjectiveAssessmentsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteObjectiveAssessmentById**](ObjectiveAssessmentsApi.md#deleteObjectiveAssessmentById) | **DELETE** /objectiveAssessments/{id} | Deletes an existing resource using the resource identifier.
[**getObjectiveAssessmentByKey**](ObjectiveAssessmentsApi.md#getObjectiveAssessmentByKey) | **GET** /objectiveAssessments | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getObjectiveAssessmentsById**](ObjectiveAssessmentsApi.md#getObjectiveAssessmentsById) | **GET** /objectiveAssessments/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postObjectiveAssessments**](ObjectiveAssessmentsApi.md#postObjectiveAssessments) | **POST** /objectiveAssessments | Creates or updates resources based on the natural key values of the supplied resource.
[**putObjectiveAssessment**](ObjectiveAssessmentsApi.md#putObjectiveAssessment) | **PUT** /objectiveAssessments/{id} | Updates or creates a resource based on the resource identifier.


# **deleteObjectiveAssessmentById**
> deleteObjectiveAssessmentById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ObjectiveAssessmentsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteObjectiveAssessmentById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ObjectiveAssessmentsApi->deleteObjectiveAssessmentById: ', $e->getMessage(), "\n";
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

# **getObjectiveAssessmentByKey**
> \Swagger\Client\Model\ObjectiveAssessment getObjectiveAssessmentByKey($assessment_title, $academic_subject_descriptor, $assessed_grade_level_descriptor, $version, $identification_code, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ObjectiveAssessmentsApi();
$assessment_title = "assessment_title_example"; // string | The title or name of the assessment.  NEDM: Assessment Title
$academic_subject_descriptor = "academic_subject_descriptor_example"; // string | The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject
$assessed_grade_level_descriptor = "assessed_grade_level_descriptor_example"; // string | The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ...
$version = 56; // int | The version identifier for the test assessment.  NEDM: Assessment Version
$identification_code = "identification_code_example"; // string | A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getObjectiveAssessmentByKey($assessment_title, $academic_subject_descriptor, $assessed_grade_level_descriptor, $version, $identification_code, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectiveAssessmentsApi->getObjectiveAssessmentByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_title** | **string**| The title or name of the assessment.  NEDM: Assessment Title | 
 **academic_subject_descriptor** | **string**| The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject | 
 **assessed_grade_level_descriptor** | **string**| The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ... | 
 **version** | [**int**](.md)| The version identifier for the test assessment.  NEDM: Assessment Version | 
 **identification_code** | **string**| A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ObjectiveAssessment**](ObjectiveAssessment.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getObjectiveAssessmentsById**
> \Swagger\Client\Model\ObjectiveAssessment getObjectiveAssessmentsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ObjectiveAssessmentsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getObjectiveAssessmentsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectiveAssessmentsApi->getObjectiveAssessmentsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ObjectiveAssessment**](ObjectiveAssessment.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postObjectiveAssessments**
> postObjectiveAssessments($objective_assessment)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ObjectiveAssessmentsApi();
$objective_assessment = new \Swagger\Client\Model\ObjectiveAssessment(); // \Swagger\Client\Model\ObjectiveAssessment | The JSON representation of the \"objectiveAssessment\" resource to be created or updated.

try { 
    $api_instance->postObjectiveAssessments($objective_assessment);
} catch (Exception $e) {
    echo 'Exception when calling ObjectiveAssessmentsApi->postObjectiveAssessments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **objective_assessment** | [**\Swagger\Client\Model\ObjectiveAssessment**](\Swagger\Client\Model\ObjectiveAssessment.md)| The JSON representation of the \&quot;objectiveAssessment\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putObjectiveAssessment**
> putObjectiveAssessment($id, $objective_assessment, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ObjectiveAssessmentsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$objective_assessment = new \Swagger\Client\Model\ObjectiveAssessment(); // \Swagger\Client\Model\ObjectiveAssessment | The JSON representation of the \"objectiveAssessment\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putObjectiveAssessment($id, $objective_assessment, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ObjectiveAssessmentsApi->putObjectiveAssessment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **objective_assessment** | [**\Swagger\Client\Model\ObjectiveAssessment**](\Swagger\Client\Model\ObjectiveAssessment.md)| The JSON representation of the \&quot;objectiveAssessment\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

