# Swagger\Client\StaffEducationOrganizationEmploymentAssociationsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStaffEducationOrganizationEmploymentAssociationById**](StaffEducationOrganizationEmploymentAssociationsApi.md#deleteStaffEducationOrganizationEmploymentAssociationById) | **DELETE** /staffEducationOrganizationEmploymentAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStaffEducationOrganizationEmploymentAssociationByKey**](StaffEducationOrganizationEmploymentAssociationsApi.md#getStaffEducationOrganizationEmploymentAssociationByKey) | **GET** /staffEducationOrganizationEmploymentAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStaffEducationOrganizationEmploymentAssociationsById**](StaffEducationOrganizationEmploymentAssociationsApi.md#getStaffEducationOrganizationEmploymentAssociationsById) | **GET** /staffEducationOrganizationEmploymentAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStaffEducationOrganizationEmploymentAssociations**](StaffEducationOrganizationEmploymentAssociationsApi.md#postStaffEducationOrganizationEmploymentAssociations) | **POST** /staffEducationOrganizationEmploymentAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStaffEducationOrganizationEmploymentAssociation**](StaffEducationOrganizationEmploymentAssociationsApi.md#putStaffEducationOrganizationEmploymentAssociation) | **PUT** /staffEducationOrganizationEmploymentAssociations/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStaffEducationOrganizationEmploymentAssociationById**
> deleteStaffEducationOrganizationEmploymentAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationEmploymentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStaffEducationOrganizationEmploymentAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->deleteStaffEducationOrganizationEmploymentAssociationById: ', $e->getMessage(), "\n";
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

# **getStaffEducationOrganizationEmploymentAssociationByKey**
> \Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation getStaffEducationOrganizationEmploymentAssociationByKey($education_organization_id, $staff_unique_id, $employment_status_descriptor, $hire_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationEmploymentAssociationsApi();
$education_organization_id = 56; // int | EducationOrganization Identity Column
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$employment_status_descriptor = "employment_status_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$hire_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The month, day, and year on which an individual was hired for a position.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffEducationOrganizationEmploymentAssociationByKey($education_organization_id, $staff_unique_id, $employment_status_descriptor, $hire_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->getStaffEducationOrganizationEmploymentAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **employment_status_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **hire_date** | [**\Swagger\Client\Model\Object**](.md)| The month, day, and year on which an individual was hired for a position. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation**](StaffEducationOrganizationEmploymentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStaffEducationOrganizationEmploymentAssociationsById**
> \Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation getStaffEducationOrganizationEmploymentAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationEmploymentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffEducationOrganizationEmploymentAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->getStaffEducationOrganizationEmploymentAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation**](StaffEducationOrganizationEmploymentAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStaffEducationOrganizationEmploymentAssociations**
> postStaffEducationOrganizationEmploymentAssociations($staff_education_organization_employment_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationEmploymentAssociationsApi();
$staff_education_organization_employment_association = new \Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation(); // \Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation | The JSON representation of the \"staffEducationOrganizationEmploymentAssociation\" resource to be created or updated.

try { 
    $api_instance->postStaffEducationOrganizationEmploymentAssociations($staff_education_organization_employment_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->postStaffEducationOrganizationEmploymentAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_education_organization_employment_association** | [**\Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation**](\Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationEmploymentAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStaffEducationOrganizationEmploymentAssociation**
> putStaffEducationOrganizationEmploymentAssociation($id, $staff_education_organization_employment_association, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffEducationOrganizationEmploymentAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$staff_education_organization_employment_association = new \Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation(); // \Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation | The JSON representation of the \"staffEducationOrganizationEmploymentAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStaffEducationOrganizationEmploymentAssociation($id, $staff_education_organization_employment_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffEducationOrganizationEmploymentAssociationsApi->putStaffEducationOrganizationEmploymentAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **staff_education_organization_employment_association** | [**\Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation**](\Swagger\Client\Model\StaffEducationOrganizationEmploymentAssociation.md)| The JSON representation of the \&quot;staffEducationOrganizationEmploymentAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

