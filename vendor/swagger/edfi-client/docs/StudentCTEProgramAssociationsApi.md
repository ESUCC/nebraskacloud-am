# Swagger\Client\StudentCTEProgramAssociationsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentCTEProgramAssociationById**](StudentCTEProgramAssociationsApi.md#deleteStudentCTEProgramAssociationById) | **DELETE** /studentCTEProgramAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStudentCTEProgramAssociationByKey**](StudentCTEProgramAssociationsApi.md#getStudentCTEProgramAssociationByKey) | **GET** /studentCTEProgramAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStudentCTEProgramAssociationsById**](StudentCTEProgramAssociationsApi.md#getStudentCTEProgramAssociationsById) | **GET** /studentCTEProgramAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStudentCTEProgramAssociations**](StudentCTEProgramAssociationsApi.md#postStudentCTEProgramAssociations) | **POST** /studentCTEProgramAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentCTEProgramAssociation**](StudentCTEProgramAssociationsApi.md#putStudentCTEProgramAssociation) | **PUT** /studentCTEProgramAssociations/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStudentCTEProgramAssociationById**
> deleteStudentCTEProgramAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCTEProgramAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentCTEProgramAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentCTEProgramAssociationsApi->deleteStudentCTEProgramAssociationById: ', $e->getMessage(), "\n";
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

# **getStudentCTEProgramAssociationByKey**
> \Swagger\Client\Model\StudentCTEProgramAssociation getStudentCTEProgramAssociationByKey($student_unique_id, $education_organization_id, $program_type, $program_name, $program_education_organization_id, $begin_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCTEProgramAssociationsApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$education_organization_id = 56; // int | The education organization where the student is participating in or receiving the program services.
$program_type = "program_type_example"; // string | The program associated with the student.
$program_name = "program_name_example"; // string | The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies.
$program_education_organization_id = 56; // int | The education organization where the student is participating in or receiving the program services.
$begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The month, day, and year on which the Student first received services.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentCTEProgramAssociationByKey($student_unique_id, $education_organization_id, $program_type, $program_name, $program_education_organization_id, $begin_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCTEProgramAssociationsApi->getStudentCTEProgramAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **education_organization_id** | [**int**](.md)| The education organization where the student is participating in or receiving the program services. | 
 **program_type** | **string**| The program associated with the student. | 
 **program_name** | **string**| The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. | 
 **program_education_organization_id** | [**int**](.md)| The education organization where the student is participating in or receiving the program services. | 
 **begin_date** | [**\Swagger\Client\Model\Object**](.md)| The month, day, and year on which the Student first received services. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentCTEProgramAssociation**](StudentCTEProgramAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentCTEProgramAssociationsById**
> \Swagger\Client\Model\StudentCTEProgramAssociation getStudentCTEProgramAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCTEProgramAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentCTEProgramAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentCTEProgramAssociationsApi->getStudentCTEProgramAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentCTEProgramAssociation**](StudentCTEProgramAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentCTEProgramAssociations**
> postStudentCTEProgramAssociations($student_cte_program_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCTEProgramAssociationsApi();
$student_cte_program_association = new \Swagger\Client\Model\StudentCTEProgramAssociation(); // \Swagger\Client\Model\StudentCTEProgramAssociation | The JSON representation of the \"studentCTEProgramAssociation\" resource to be created or updated.

try { 
    $api_instance->postStudentCTEProgramAssociations($student_cte_program_association);
} catch (Exception $e) {
    echo 'Exception when calling StudentCTEProgramAssociationsApi->postStudentCTEProgramAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_cte_program_association** | [**\Swagger\Client\Model\StudentCTEProgramAssociation**](\Swagger\Client\Model\StudentCTEProgramAssociation.md)| The JSON representation of the \&quot;studentCTEProgramAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentCTEProgramAssociation**
> putStudentCTEProgramAssociation($id, $student_cte_program_association, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentCTEProgramAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_cte_program_association = new \Swagger\Client\Model\StudentCTEProgramAssociation(); // \Swagger\Client\Model\StudentCTEProgramAssociation | The JSON representation of the \"studentCTEProgramAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentCTEProgramAssociation($id, $student_cte_program_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentCTEProgramAssociationsApi->putStudentCTEProgramAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_cte_program_association** | [**\Swagger\Client\Model\StudentCTEProgramAssociation**](\Swagger\Client\Model\StudentCTEProgramAssociation.md)| The JSON representation of the \&quot;studentCTEProgramAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

