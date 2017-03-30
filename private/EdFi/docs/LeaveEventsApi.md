# Swagger\Client\LeaveEventsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLeaveEventById**](LeaveEventsApi.md#deleteLeaveEventById) | **DELETE** /leaveEvents/{id} | Deletes an existing resource using the resource identifier.
[**getLeaveEventByKey**](LeaveEventsApi.md#getLeaveEventByKey) | **GET** /leaveEvents | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getLeaveEventsById**](LeaveEventsApi.md#getLeaveEventsById) | **GET** /leaveEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postLeaveEvents**](LeaveEventsApi.md#postLeaveEvents) | **POST** /leaveEvents | Creates or updates resources based on the natural key values of the supplied resource.
[**putLeaveEvent**](LeaveEventsApi.md#putLeaveEvent) | **PUT** /leaveEvents/{id} | Updates or creates a resource based on the resource identifier.


# **deleteLeaveEventById**
> deleteLeaveEventById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeaveEventsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteLeaveEventById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling LeaveEventsApi->deleteLeaveEventById: ', $e->getMessage(), "\n";
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

# **getLeaveEventByKey**
> \Swagger\Client\Model\LeaveEvent getLeaveEventByKey($staff_unique_id, $event_date, $category_type, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeaveEventsApi();
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$event_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Date for this leave event.
$category_type = "category_type_example"; // string | The code describing the type of leave taken, for example:  Sick  Personal  Vacation
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getLeaveEventByKey($staff_unique_id, $event_date, $category_type, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveEventsApi->getLeaveEventByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **event_date** | [**\Swagger\Client\Model\Object**](.md)| Date for this leave event. | 
 **category_type** | **string**| The code describing the type of leave taken, for example:  Sick  Personal  Vacation | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\LeaveEvent**](LeaveEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLeaveEventsById**
> \Swagger\Client\Model\LeaveEvent getLeaveEventsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeaveEventsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getLeaveEventsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveEventsApi->getLeaveEventsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\LeaveEvent**](LeaveEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postLeaveEvents**
> postLeaveEvents($leave_event)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeaveEventsApi();
$leave_event = new \Swagger\Client\Model\LeaveEvent(); // \Swagger\Client\Model\LeaveEvent | The JSON representation of the \"leaveEvent\" resource to be created or updated.

try { 
    $api_instance->postLeaveEvents($leave_event);
} catch (Exception $e) {
    echo 'Exception when calling LeaveEventsApi->postLeaveEvents: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leave_event** | [**\Swagger\Client\Model\LeaveEvent**](\Swagger\Client\Model\LeaveEvent.md)| The JSON representation of the \&quot;leaveEvent\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putLeaveEvent**
> putLeaveEvent($id, $leave_event, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeaveEventsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$leave_event = new \Swagger\Client\Model\LeaveEvent(); // \Swagger\Client\Model\LeaveEvent | The JSON representation of the \"leaveEvent\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putLeaveEvent($id, $leave_event, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling LeaveEventsApi->putLeaveEvent: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **leave_event** | [**\Swagger\Client\Model\LeaveEvent**](\Swagger\Client\Model\LeaveEvent.md)| The JSON representation of the \&quot;leaveEvent\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

