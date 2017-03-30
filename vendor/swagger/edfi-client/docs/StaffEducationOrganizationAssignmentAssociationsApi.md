# Swagger\Client\StaffEducationOrganizationAssignmentAssociationsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStaffEducationOrganizationAssignmentAssociationById**](StaffEducationOrganizationAssignmentAssociationsApi.md#deleteStaffEducationOrganizationAssignmentAssociationById) | **DELETE** /staffEducationOrganizationAssignmentAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStaffEducationOrganizationAssignmentAssociationByKey**](StaffEducationOrganizationAssignmentAssociationsApi.md#getStaffEducationOrganizationAssignmentAssociationByKey) | **GET** /staffEducationOrganizationAssignmentAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStaffEducationOrganizationAssignmentAssociationsById**](StaffEducationOrganizationAssignmentAssociationsApi.md#getStaffEducationOrganizationAssignmentAssociationsById) | **GET** /staffEducationOrganizationAssignmentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStaffEducationOrganizationAssignmentAssociations**](StaffEducationOrganizationAssignmentAssociationsApi.md#postStaffEducationOrganizationAssignmentAssociations) | **POST** /staffEducationOrganizationAssignmentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStaffEducationOrganizationAssignmentAssociation**](StaffEducationOrganizationAssignmentAssociationsApi.md#putStaffEducationOrganizationAssignmentAssociation) | **PUT** /staffEducationOrganizationAssignmentAssociations/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStaffEducationOrganizationAssignmentAssociationById**
> deleteStaffEducationOrganizationAssignmentAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationAssignmentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStaffEducationOrganizationAssignmentAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->deleteStaffEducationOrganizationAssignmentAssociationById: ', $e->getMessage(), "\n";
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

# **getStaffEducationOrganizationAssignmentAssociationByKey**
> \Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation getStaffEducationOrganizationAssignmentAssociationByKey($staff_unique_id, $education_organization_id, $staff_classification_descriptor, $begin_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationAssignmentAssociationsApi();
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$education_organization_id = 56; // int | EducationOrganization Identity Column
$staff_classification_descriptor = "staff_classification_descriptor_example"; // string | The titles of employment, official status, or rank of education staff.
$begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Month, day, and year of the start or effective date of a staff member's employment, contract, or relationship with the LEA.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffEducationOrganizationAssignmentAssociationByKey($staff_unique_id, $education_organization_id, $staff_classification_descriptor, $begin_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->getStaffEducationOrganizationAssignmentAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **staff_classification_descriptor** | **string**| The titles of employment, official status, or rank of education staff. | 
 **begin_date** | [**\Swagger\Client\Model\Object**](.md)| Month, day, and year of the start or effective date of a staff member&#39;s employment, contract, or relationship with the LEA. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation**](StaffEducationOrganizationAssignmentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStaffEducationOrganizationAssignmentAssociationsById**
> \Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation getStaffEducationOrganizationAssignmentAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationAssignmentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffEducationOrganizationAssignmentAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->getStaffEducationOrganizationAssignmentAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation**](StaffEducationOrganizationAssignmentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStaffEducationOrganizationAssignmentAssociations**
> postStaffEducationOrganizationAssignmentAssociations($staff_education_organization_assignment_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationAssignmentAssociationsApi();
$staff_education_organization_assignment_association = new \Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation(); // \Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation | The JSON representation of the \"staffEducationOrganizationAssignmentAssociation\" resource to be created or updated.

try { 
    $api_instance->postStaffEducationOrganizationAssignmentAssociations($staff_education_organization_assignment_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->postStaffEducationOrganizationAssignmentAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_education_organization_assignment_association** | [**\Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation**](\Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationAssignmentAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStaffEducationOrganizationAssignmentAssociation**
> putStaffEducationOrganizationAssignmentAssociation($id, $staff_education_organization_assignment_association, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationAssignmentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$staff_education_organization_assignment_association = new \Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation(); // \Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation | The JSON representation of the \"staffEducationOrganizationAssignmentAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStaffEducationOrganizationAssignmentAssociation($id, $staff_education_organization_assignment_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationAssignmentAssociationsApi->putStaffEducationOrganizationAssignmentAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **staff_education_organization_assignment_association** | [**\Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation**](\Swagger\Client\Model\StaffEducationOrganizationAssignmentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationAssignmentAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

