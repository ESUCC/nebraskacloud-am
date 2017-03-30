# Swagger\Client\StaffSectionAssociationsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStaffSectionAssociationById**](StaffSectionAssociationsApi.md#deleteStaffSectionAssociationById) | **DELETE** /staffSectionAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStaffSectionAssociationByKey**](StaffSectionAssociationsApi.md#getStaffSectionAssociationByKey) | **GET** /staffSectionAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStaffSectionAssociationsById**](StaffSectionAssociationsApi.md#getStaffSectionAssociationsById) | **GET** /staffSectionAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStaffSectionAssociations**](StaffSectionAssociationsApi.md#postStaffSectionAssociations) | **POST** /staffSectionAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStaffSectionAssociation**](StaffSectionAssociationsApi.md#putStaffSectionAssociation) | **PUT** /staffSectionAssociations/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStaffSectionAssociationById**
> deleteStaffSectionAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffSectionAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStaffSectionAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->deleteStaffSectionAssociationById: ', $e->getMessage(), "\n";
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

# **getStaffSectionAssociationByKey**
> \Swagger\Client\Model\StaffSectionAssociation getStaffSectionAssociationByKey($staff_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffSectionAssociationsApi();
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$classroom_identification_code = "classroom_identification_code_example"; // string | A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity.
$school_id = 56; // int | School Identity Column
$class_period_name = "class_period_name_example"; // string | An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period
$local_course_code = "local_course_code_example"; // string | The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
$school_year = 56; // int | The identifier for the school year.
$term_descriptor = "term_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$unique_section_code = "unique_section_code_example"; // string | A unique identifier for the section, that is defined for a campus by the classroom, the subjects taught, and the instructors that are assigned.  NEDM: Unique Course Code
$sequence_of_course = 56; // int | When a section is part of a sequence of parts for a course, the number if the sequence.  If the course has only onle part, the value of this section attribute should be 1.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffSectionAssociationByKey($staff_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->getStaffSectionAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **classroom_identification_code** | **string**| A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. | 
 **school_id** | [**int**](.md)| School Identity Column | 
 **class_period_name** | **string**| An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period | 
 **local_course_code** | **string**| The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | 
 **school_year** | [**int**](.md)| The identifier for the school year. | 
 **term_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **unique_section_code** | **string**| A unique identifier for the section, that is defined for a campus by the classroom, the subjects taught, and the instructors that are assigned.  NEDM: Unique Course Code | 
 **sequence_of_course** | [**int**](.md)| When a section is part of a sequence of parts for a course, the number if the sequence.  If the course has only onle part, the value of this section attribute should be 1. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffSectionAssociation**](StaffSectionAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStaffSectionAssociationsById**
> \Swagger\Client\Model\StaffSectionAssociation getStaffSectionAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffSectionAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffSectionAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->getStaffSectionAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffSectionAssociation**](StaffSectionAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStaffSectionAssociations**
> postStaffSectionAssociations($staff_section_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffSectionAssociationsApi();
$staff_section_association = new \Swagger\Client\Model\StaffSectionAssociation(); // \Swagger\Client\Model\StaffSectionAssociation | The JSON representation of the \"staffSectionAssociation\" resource to be created or updated.

try { 
    $api_instance->postStaffSectionAssociations($staff_section_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->postStaffSectionAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_section_association** | [**\Swagger\Client\Model\StaffSectionAssociation**](\Swagger\Client\Model\StaffSectionAssociation.md)| The JSON representation of the \&quot;staffSectionAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStaffSectionAssociation**
> putStaffSectionAssociation($id, $staff_section_association, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffSectionAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$staff_section_association = new \Swagger\Client\Model\StaffSectionAssociation(); // \Swagger\Client\Model\StaffSectionAssociation | The JSON representation of the \"staffSectionAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStaffSectionAssociation($id, $staff_section_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffSectionAssociationsApi->putStaffSectionAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **staff_section_association** | [**\Swagger\Client\Model\StaffSectionAssociation**](\Swagger\Client\Model\StaffSectionAssociation.md)| The JSON representation of the \&quot;staffSectionAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

