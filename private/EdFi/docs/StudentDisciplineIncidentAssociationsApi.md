# Swagger\Client\StudentDisciplineIncidentAssociationsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentDisciplineIncidentAssociationById**](StudentDisciplineIncidentAssociationsApi.md#deleteStudentDisciplineIncidentAssociationById) | **DELETE** /studentDisciplineIncidentAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStudentDisciplineIncidentAssociationByKey**](StudentDisciplineIncidentAssociationsApi.md#getStudentDisciplineIncidentAssociationByKey) | **GET** /studentDisciplineIncidentAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStudentDisciplineIncidentAssociationsById**](StudentDisciplineIncidentAssociationsApi.md#getStudentDisciplineIncidentAssociationsById) | **GET** /studentDisciplineIncidentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStudentDisciplineIncidentAssociations**](StudentDisciplineIncidentAssociationsApi.md#postStudentDisciplineIncidentAssociations) | **POST** /studentDisciplineIncidentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentDisciplineIncidentAssociation**](StudentDisciplineIncidentAssociationsApi.md#putStudentDisciplineIncidentAssociation) | **PUT** /studentDisciplineIncidentAssociations/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStudentDisciplineIncidentAssociationById**
> deleteStudentDisciplineIncidentAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentDisciplineIncidentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentDisciplineIncidentAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentAssociationsApi->deleteStudentDisciplineIncidentAssociationById: ', $e->getMessage(), "\n";
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

# **getStudentDisciplineIncidentAssociationByKey**
> \Swagger\Client\Model\StudentDisciplineIncidentAssociation getStudentDisciplineIncidentAssociationByKey($student_unique_id, $school_id, $incident_identifier, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentDisciplineIncidentAssociationsApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$school_id = 56; // int | School Identity Column
$incident_identifier = "incident_identifier_example"; // string | A locally assigned unique identifier (within the school or school district) to identify each specific incident or occurrence. The same identifier should be used to document the entire incident even if it included multiple offenses and multiple offenders.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentDisciplineIncidentAssociationByKey($student_unique_id, $school_id, $incident_identifier, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentAssociationsApi->getStudentDisciplineIncidentAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **school_id** | [**int**](.md)| School Identity Column | 
 **incident_identifier** | **string**| A locally assigned unique identifier (within the school or school district) to identify each specific incident or occurrence. The same identifier should be used to document the entire incident even if it included multiple offenses and multiple offenders. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentDisciplineIncidentAssociation**](StudentDisciplineIncidentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentDisciplineIncidentAssociationsById**
> \Swagger\Client\Model\StudentDisciplineIncidentAssociation getStudentDisciplineIncidentAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentDisciplineIncidentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentDisciplineIncidentAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentAssociationsApi->getStudentDisciplineIncidentAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentDisciplineIncidentAssociation**](StudentDisciplineIncidentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentDisciplineIncidentAssociations**
> postStudentDisciplineIncidentAssociations($student_discipline_incident_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentDisciplineIncidentAssociationsApi();
$student_discipline_incident_association = new \Swagger\Client\Model\StudentDisciplineIncidentAssociation(); // \Swagger\Client\Model\StudentDisciplineIncidentAssociation | The JSON representation of the \"studentDisciplineIncidentAssociation\" resource to be created or updated.

try { 
    $api_instance->postStudentDisciplineIncidentAssociations($student_discipline_incident_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentAssociationsApi->postStudentDisciplineIncidentAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_discipline_incident_association** | [**\Swagger\Client\Model\StudentDisciplineIncidentAssociation**](\Swagger\Client\Model\StudentDisciplineIncidentAssociation.md)| The JSON representation of the \&quot;studentDisciplineIncidentAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentDisciplineIncidentAssociation**
> putStudentDisciplineIncidentAssociation($id, $student_discipline_incident_association, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentDisciplineIncidentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_discipline_incident_association = new \Swagger\Client\Model\StudentDisciplineIncidentAssociation(); // \Swagger\Client\Model\StudentDisciplineIncidentAssociation | The JSON representation of the \"studentDisciplineIncidentAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentDisciplineIncidentAssociation($id, $student_discipline_incident_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentDisciplineIncidentAssociationsApi->putStudentDisciplineIncidentAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_discipline_incident_association** | [**\Swagger\Client\Model\StudentDisciplineIncidentAssociation**](\Swagger\Client\Model\StudentDisciplineIncidentAssociation.md)| The JSON representation of the \&quot;studentDisciplineIncidentAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

