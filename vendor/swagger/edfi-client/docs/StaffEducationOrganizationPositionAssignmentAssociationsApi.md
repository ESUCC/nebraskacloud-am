# Swagger\Client\StaffEducationOrganizationPositionAssignmentAssociationsApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStaffEducationOrganizationPositionAssignmentAssociationById**](StaffEducationOrganizationPositionAssignmentAssociationsApi.md#deleteStaffEducationOrganizationPositionAssignmentAssociationById) | **DELETE** /staffEducationOrganizationPositionAssignmentAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStaffEducationOrganizationPositionAssignmentAssociationByKey**](StaffEducationOrganizationPositionAssignmentAssociationsApi.md#getStaffEducationOrganizationPositionAssignmentAssociationByKey) | **GET** /staffEducationOrganizationPositionAssignmentAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStaffEducationOrganizationPositionAssignmentAssociationsById**](StaffEducationOrganizationPositionAssignmentAssociationsApi.md#getStaffEducationOrganizationPositionAssignmentAssociationsById) | **GET** /staffEducationOrganizationPositionAssignmentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStaffEducationOrganizationPositionAssignmentAssociations**](StaffEducationOrganizationPositionAssignmentAssociationsApi.md#postStaffEducationOrganizationPositionAssignmentAssociations) | **POST** /staffEducationOrganizationPositionAssignmentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStaffEducationOrganizationPositionAssignmentAssociation**](StaffEducationOrganizationPositionAssignmentAssociationsApi.md#putStaffEducationOrganizationPositionAssignmentAssociation) | **PUT** /staffEducationOrganizationPositionAssignmentAssociations/{id} | Updates an existing resource based on the resource identifier.


# **deleteStaffEducationOrganizationPositionAssignmentAssociationById**
> deleteStaffEducationOrganizationPositionAssignmentAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationPositionAssignmentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStaffEducationOrganizationPositionAssignmentAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationPositionAssignmentAssociationsApi->deleteStaffEducationOrganizationPositionAssignmentAssociationById: ', $e->getMessage(), "\n";
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

# **getStaffEducationOrganizationPositionAssignmentAssociationByKey**
> \Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation getStaffEducationOrganizationPositionAssignmentAssociationByKey($staff_unique_id, $education_organization_id, $staff_position_assignment_descriptor, $begin_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationPositionAssignmentAssociationsApi();
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$education_organization_id = 56; // int | EducationOrganization Identity Column
$staff_position_assignment_descriptor = "staff_position_assignment_descriptor_example"; // string | The titles of employment, official status, or rank of education staff.  
$begin_date = new \DateTime(); // \DateTime | Month, day and year of the start or effective date of a staff member''s employment, contract or relationship with the LEA.  
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffEducationOrganizationPositionAssignmentAssociationByKey($staff_unique_id, $education_organization_id, $staff_position_assignment_descriptor, $begin_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationPositionAssignmentAssociationsApi->getStaffEducationOrganizationPositionAssignmentAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **staff_position_assignment_descriptor** | **string**| The titles of employment, official status, or rank of education staff.   | 
 **begin_date** | **\DateTime**| Month, day and year of the start or effective date of a staff member&#39;&#39;s employment, contract or relationship with the LEA.   | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation**](StaffEducationOrganizationPositionAssignmentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStaffEducationOrganizationPositionAssignmentAssociationsById**
> \Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation getStaffEducationOrganizationPositionAssignmentAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationPositionAssignmentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffEducationOrganizationPositionAssignmentAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationPositionAssignmentAssociationsApi->getStaffEducationOrganizationPositionAssignmentAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation**](StaffEducationOrganizationPositionAssignmentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStaffEducationOrganizationPositionAssignmentAssociations**
> postStaffEducationOrganizationPositionAssignmentAssociations($staff_education_organization_position_assignment_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationPositionAssignmentAssociationsApi();
$staff_education_organization_position_assignment_association = new \Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation(); // \Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation | The JSON representation of the \"staffEducationOrganizationPositionAssignmentAssociation\" resource to be created or updated.

try { 
    $api_instance->postStaffEducationOrganizationPositionAssignmentAssociations($staff_education_organization_position_assignment_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationPositionAssignmentAssociationsApi->postStaffEducationOrganizationPositionAssignmentAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_education_organization_position_assignment_association** | [**\Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation**](\Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationPositionAssignmentAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStaffEducationOrganizationPositionAssignmentAssociation**
> putStaffEducationOrganizationPositionAssignmentAssociation($id, $staff_education_organization_position_assignment_association, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationPositionAssignmentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$staff_education_organization_position_assignment_association = new \Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation(); // \Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation | The JSON representation of the \"staffEducationOrganizationPositionAssignmentAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStaffEducationOrganizationPositionAssignmentAssociation($id, $staff_education_organization_position_assignment_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationPositionAssignmentAssociationsApi->putStaffEducationOrganizationPositionAssignmentAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **staff_education_organization_position_assignment_association** | [**\Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation**](\Swagger\Client\Model\StaffEducationOrganizationPositionAssignmentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationPositionAssignmentAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

