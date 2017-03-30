# Swagger\Client\StudentCompetencyObjectivesApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentCompetencyObjectiveById**](StudentCompetencyObjectivesApi.md#deleteStudentCompetencyObjectiveById) | **DELETE** /studentCompetencyObjectives/{id} | Deletes an existing resource using the resource identifier.
[**getStudentCompetencyObjectiveByKey**](StudentCompetencyObjectivesApi.md#getStudentCompetencyObjectiveByKey) | **GET** /studentCompetencyObjectives | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStudentCompetencyObjectivesById**](StudentCompetencyObjectivesApi.md#getStudentCompetencyObjectivesById) | **GET** /studentCompetencyObjectives/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStudentCompetencyObjectives**](StudentCompetencyObjectivesApi.md#postStudentCompetencyObjectives) | **POST** /studentCompetencyObjectives | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentCompetencyObjective**](StudentCompetencyObjectivesApi.md#putStudentCompetencyObjective) | **PUT** /studentCompetencyObjectives/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStudentCompetencyObjectiveById**
> deleteStudentCompetencyObjectiveById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCompetencyObjectivesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentCompetencyObjectiveById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->deleteStudentCompetencyObjectiveById: ', $e->getMessage(), "\n";
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

# **getStudentCompetencyObjectiveByKey**
> \Swagger\Client\Model\StudentCompetencyObjective getStudentCompetencyObjectiveByKey($student_unique_id, $objective, $objective_grade_level_descriptor, $objective_education_organization_id, $school_id, $grading_period_descriptor, $grading_period_begin_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCompetencyObjectivesApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$objective = "objective_example"; // string | The designated title of the learning objective.
$objective_grade_level_descriptor = "objective_grade_level_descriptor_example"; // string | The grade level for which the learning objective is targeted,
$objective_education_organization_id = 56; // int | EducationOrganization Identity Column
$school_id = 56; // int | School Identity Column
$grading_period_descriptor = "grading_period_descriptor_example"; // string | The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester)
$grading_period_begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Month, day, and year of the first day of the GradingPeriod.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentCompetencyObjectiveByKey($student_unique_id, $objective, $objective_grade_level_descriptor, $objective_education_organization_id, $school_id, $grading_period_descriptor, $grading_period_begin_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->getStudentCompetencyObjectiveByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **objective** | **string**| The designated title of the learning objective. | 
 **objective_grade_level_descriptor** | **string**| The grade level for which the learning objective is targeted, | 
 **objective_education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **school_id** | [**int**](.md)| School Identity Column | 
 **grading_period_descriptor** | **string**| The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester) | 
 **grading_period_begin_date** | [**\Swagger\Client\Model\Object**](.md)| Month, day, and year of the first day of the GradingPeriod. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentCompetencyObjective**](StudentCompetencyObjective.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentCompetencyObjectivesById**
> \Swagger\Client\Model\StudentCompetencyObjective getStudentCompetencyObjectivesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCompetencyObjectivesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentCompetencyObjectivesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->getStudentCompetencyObjectivesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentCompetencyObjective**](StudentCompetencyObjective.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentCompetencyObjectives**
> postStudentCompetencyObjectives($student_competency_objective)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCompetencyObjectivesApi();
$student_competency_objective = new \Swagger\Client\Model\StudentCompetencyObjective(); // \Swagger\Client\Model\StudentCompetencyObjective | The JSON representation of the \"studentCompetencyObjective\" resource to be created or updated.

try { 
    $api_instance->postStudentCompetencyObjectives($student_competency_objective);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->postStudentCompetencyObjectives: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_competency_objective** | [**\Swagger\Client\Model\StudentCompetencyObjective**](\Swagger\Client\Model\StudentCompetencyObjective.md)| The JSON representation of the \&quot;studentCompetencyObjective\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentCompetencyObjective**
> putStudentCompetencyObjective($id, $student_competency_objective, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCompetencyObjectivesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_competency_objective = new \Swagger\Client\Model\StudentCompetencyObjective(); // \Swagger\Client\Model\StudentCompetencyObjective | The JSON representation of the \"studentCompetencyObjective\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentCompetencyObjective($id, $student_competency_objective, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentCompetencyObjectivesApi->putStudentCompetencyObjective: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_competency_objective** | [**\Swagger\Client\Model\StudentCompetencyObjective**](\Swagger\Client\Model\StudentCompetencyObjective.md)| The JSON representation of the \&quot;studentCompetencyObjective\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

