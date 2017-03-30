# Swagger\Client\StaffCohortAssociationsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStaffCohortAssociationById**](StaffCohortAssociationsApi.md#deleteStaffCohortAssociationById) | **DELETE** /staffCohortAssociations/{id} | Deletes an existing resource using the resource identifier.
[**getStaffCohortAssociationByKey**](StaffCohortAssociationsApi.md#getStaffCohortAssociationByKey) | **GET** /staffCohortAssociations | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStaffCohortAssociationsById**](StaffCohortAssociationsApi.md#getStaffCohortAssociationsById) | **GET** /staffCohortAssociations/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStaffCohortAssociations**](StaffCohortAssociationsApi.md#postStaffCohortAssociations) | **POST** /staffCohortAssociations | Creates or updates resources based on the natural key values of the supplied resource.
[**putStaffCohortAssociation**](StaffCohortAssociationsApi.md#putStaffCohortAssociation) | **PUT** /staffCohortAssociations/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStaffCohortAssociationById**
> deleteStaffCohortAssociationById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffCohortAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStaffCohortAssociationById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffCohortAssociationsApi->deleteStaffCohortAssociationById: ', $e->getMessage(), "\n";
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

# **getStaffCohortAssociationByKey**
> \Swagger\Client\Model\StaffCohortAssociation getStaffCohortAssociationByKey($staff_unique_id, $education_organization_id, $cohort_identifier, $begin_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffCohortAssociationsApi();
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$education_organization_id = 56; // int | EducationOrganization Identity Column
$cohort_identifier = "cohort_identifier_example"; // string | The name or ID for the cohort.
$begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Start date for the association of staff to this cohort.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffCohortAssociationByKey($staff_unique_id, $education_organization_id, $cohort_identifier, $begin_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffCohortAssociationsApi->getStaffCohortAssociationByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **cohort_identifier** | **string**| The name or ID for the cohort. | 
 **begin_date** | [**\Swagger\Client\Model\Object**](.md)| Start date for the association of staff to this cohort. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffCohortAssociation**](StaffCohortAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStaffCohortAssociationsById**
> \Swagger\Client\Model\StaffCohortAssociation getStaffCohortAssociationsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffCohortAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStaffCohortAssociationsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffCohortAssociationsApi->getStaffCohortAssociationsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StaffCohortAssociation**](StaffCohortAssociation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStaffCohortAssociations**
> postStaffCohortAssociations($staff_cohort_association)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffCohortAssociationsApi();
$staff_cohort_association = new \Swagger\Client\Model\StaffCohortAssociation(); // \Swagger\Client\Model\StaffCohortAssociation | The JSON representation of the \"staffCohortAssociation\" resource to be created or updated.

try { 
    $api_instance->postStaffCohortAssociations($staff_cohort_association);
} catch (Exception $e) {
    echo 'Exception when calling StaffCohortAssociationsApi->postStaffCohortAssociations: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_cohort_association** | [**\Swagger\Client\Model\StaffCohortAssociation**](\Swagger\Client\Model\StaffCohortAssociation.md)| The JSON representation of the \&quot;staffCohortAssociation\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStaffCohortAssociation**
> putStaffCohortAssociation($id, $staff_cohort_association, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StaffCohortAssociationsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$staff_cohort_association = new \Swagger\Client\Model\StaffCohortAssociation(); // \Swagger\Client\Model\StaffCohortAssociation | The JSON representation of the \"staffCohortAssociation\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStaffCohortAssociation($id, $staff_cohort_association, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StaffCohortAssociationsApi->putStaffCohortAssociation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **staff_cohort_association** | [**\Swagger\Client\Model\StaffCohortAssociation**](\Swagger\Client\Model\StaffCohortAssociation.md)| The JSON representation of the \&quot;staffCohortAssociation\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

