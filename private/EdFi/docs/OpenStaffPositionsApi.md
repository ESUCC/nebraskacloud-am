# Swagger\Client\OpenStaffPositionsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOpenStaffPositionById**](OpenStaffPositionsApi.md#deleteOpenStaffPositionById) | **DELETE** /openStaffPositions/{id} | Deletes an existing resource using the resource identifier.
[**getOpenStaffPositionByKey**](OpenStaffPositionsApi.md#getOpenStaffPositionByKey) | **GET** /openStaffPositions | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getOpenStaffPositionsById**](OpenStaffPositionsApi.md#getOpenStaffPositionsById) | **GET** /openStaffPositions/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postOpenStaffPositions**](OpenStaffPositionsApi.md#postOpenStaffPositions) | **POST** /openStaffPositions | Creates or updates resources based on the natural key values of the supplied resource.
[**putOpenStaffPosition**](OpenStaffPositionsApi.md#putOpenStaffPosition) | **PUT** /openStaffPositions/{id} | Updates or creates a resource based on the resource identifier.


# **deleteOpenStaffPositionById**
> deleteOpenStaffPositionById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpenStaffPositionsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteOpenStaffPositionById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling OpenStaffPositionsApi->deleteOpenStaffPositionById: ', $e->getMessage(), "\n";
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

# **getOpenStaffPositionByKey**
> \Swagger\Client\Model\OpenStaffPosition getOpenStaffPositionByKey($education_organization_id, $employment_status_descriptor, $staff_classification_descriptor, $requisition_number, $date_posted, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpenStaffPositionsApi();
$education_organization_id = 56; // int | EducationOrganization Identity Column
$employment_status_descriptor = "employment_status_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$staff_classification_descriptor = "staff_classification_descriptor_example"; // string | The position''s title or rank (e.g., Counselor, teacher, etc)
$requisition_number = "requisition_number_example"; // string | The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources.
$date_posted = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Date the OpenStaffPosition was posted.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getOpenStaffPositionByKey($education_organization_id, $employment_status_descriptor, $staff_classification_descriptor, $requisition_number, $date_posted, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenStaffPositionsApi->getOpenStaffPositionByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **employment_status_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **staff_classification_descriptor** | **string**| The position&#39;&#39;s title or rank (e.g., Counselor, teacher, etc) | 
 **requisition_number** | **string**| The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources. | 
 **date_posted** | [**\Swagger\Client\Model\Object**](.md)| Date the OpenStaffPosition was posted. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\OpenStaffPosition**](OpenStaffPosition.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOpenStaffPositionsById**
> \Swagger\Client\Model\OpenStaffPosition getOpenStaffPositionsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpenStaffPositionsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getOpenStaffPositionsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenStaffPositionsApi->getOpenStaffPositionsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\OpenStaffPosition**](OpenStaffPosition.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postOpenStaffPositions**
> postOpenStaffPositions($open_staff_position)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpenStaffPositionsApi();
$open_staff_position = new \Swagger\Client\Model\OpenStaffPosition(); // \Swagger\Client\Model\OpenStaffPosition | The JSON representation of the \"openStaffPosition\" resource to be created or updated.

try { 
    $api_instance->postOpenStaffPositions($open_staff_position);
} catch (Exception $e) {
    echo 'Exception when calling OpenStaffPositionsApi->postOpenStaffPositions: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_staff_position** | [**\Swagger\Client\Model\OpenStaffPosition**](\Swagger\Client\Model\OpenStaffPosition.md)| The JSON representation of the \&quot;openStaffPosition\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putOpenStaffPosition**
> putOpenStaffPosition($id, $open_staff_position, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpenStaffPositionsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$open_staff_position = new \Swagger\Client\Model\OpenStaffPosition(); // \Swagger\Client\Model\OpenStaffPosition | The JSON representation of the \"openStaffPosition\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putOpenStaffPosition($id, $open_staff_position, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling OpenStaffPositionsApi->putOpenStaffPosition: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **open_staff_position** | [**\Swagger\Client\Model\OpenStaffPosition**](\Swagger\Client\Model\OpenStaffPosition.md)| The JSON representation of the \&quot;openStaffPosition\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

