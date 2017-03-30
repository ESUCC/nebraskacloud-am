# Swagger\Client\StudentLearningObjectivesApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentLearningObjectiveById**](StudentLearningObjectivesApi.md#deleteStudentLearningObjectiveById) | **DELETE** /studentLearningObjectives/{id} | Deletes an existing resource using the resource identifier.
[**getStudentLearningObjectiveByKey**](StudentLearningObjectivesApi.md#getStudentLearningObjectiveByKey) | **GET** /studentLearningObjectives | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStudentLearningObjectivesById**](StudentLearningObjectivesApi.md#getStudentLearningObjectivesById) | **GET** /studentLearningObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStudentLearningObjectives**](StudentLearningObjectivesApi.md#postStudentLearningObjectives) | **POST** /studentLearningObjectives | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentLearningObjective**](StudentLearningObjectivesApi.md#putStudentLearningObjective) | **PUT** /studentLearningObjectives/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStudentLearningObjectiveById**
> deleteStudentLearningObjectiveById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentLearningObjectivesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentLearningObjectiveById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentLearningObjectivesApi->deleteStudentLearningObjectiveById: ', $e->getMessage(), "\n";
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

# **getStudentLearningObjectiveByKey**
> \Swagger\Client\Model\StudentLearningObjective getStudentLearningObjectiveByKey($student_unique_id, $objective, $academic_subject_descriptor, $objective_grade_level_descriptor, $grading_period_descriptor, $grading_period_begin_date, $school_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentLearningObjectivesApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$objective = "objective_example"; // string | The designated title of the learning objective.
$academic_subject_descriptor = "academic_subject_descriptor_example"; // string | The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.
$objective_grade_level_descriptor = "objective_grade_level_descriptor_example"; // string | The grade level for which the learning objective is targeted,
$grading_period_descriptor = "grading_period_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$grading_period_begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Month, day, and year of the first day of the GradingPeriod.
$school_id = 56; // int | School Identity Column
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentLearningObjectiveByKey($student_unique_id, $objective, $academic_subject_descriptor, $objective_grade_level_descriptor, $grading_period_descriptor, $grading_period_begin_date, $school_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentLearningObjectivesApi->getStudentLearningObjectiveByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **objective** | **string**| The designated title of the learning objective. | 
 **academic_subject_descriptor** | **string**| The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment. | 
 **objective_grade_level_descriptor** | **string**| The grade level for which the learning objective is targeted, | 
 **grading_period_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **grading_period_begin_date** | [**\Swagger\Client\Model\Object**](.md)| Month, day, and year of the first day of the GradingPeriod. | 
 **school_id** | [**int**](.md)| School Identity Column | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentLearningObjective**](StudentLearningObjective.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentLearningObjectivesById**
> \Swagger\Client\Model\StudentLearningObjective getStudentLearningObjectivesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentLearningObjectivesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentLearningObjectivesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentLearningObjectivesApi->getStudentLearningObjectivesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentLearningObjective**](StudentLearningObjective.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentLearningObjectives**
> postStudentLearningObjectives($student_learning_objective)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentLearningObjectivesApi();
$student_learning_objective = new \Swagger\Client\Model\StudentLearningObjective(); // \Swagger\Client\Model\StudentLearningObjective | The JSON representation of the \"studentLearningObjective\" resource to be created or updated.

try { 
    $api_instance->postStudentLearningObjectives($student_learning_objective);
} catch (Exception $e) {
    echo 'Exception when calling StudentLearningObjectivesApi->postStudentLearningObjectives: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_learning_objective** | [**\Swagger\Client\Model\StudentLearningObjective**](\Swagger\Client\Model\StudentLearningObjective.md)| The JSON representation of the \&quot;studentLearningObjective\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentLearningObjective**
> putStudentLearningObjective($id, $student_learning_objective, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentLearningObjectivesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_learning_objective = new \Swagger\Client\Model\StudentLearningObjective(); // \Swagger\Client\Model\StudentLearningObjective | The JSON representation of the \"studentLearningObjective\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentLearningObjective($id, $student_learning_objective, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentLearningObjectivesApi->putStudentLearningObjective: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_learning_objective** | [**\Swagger\Client\Model\StudentLearningObjective**](\Swagger\Client\Model\StudentLearningObjective.md)| The JSON representation of the \&quot;studentLearningObjective\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

