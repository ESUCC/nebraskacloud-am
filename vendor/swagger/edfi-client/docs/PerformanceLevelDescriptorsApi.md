# Swagger\Client\PerformanceLevelDescriptorsApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePerformanceLevelDescriptorById**](PerformanceLevelDescriptorsApi.md#deletePerformanceLevelDescriptorById) | **DELETE** /performanceLevelDescriptors/{id} | Deletes an existing resource using the resource identifier.
[**getPerformanceLevelDescriptorByKey**](PerformanceLevelDescriptorsApi.md#getPerformanceLevelDescriptorByKey) | **GET** /performanceLevelDescriptors | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getPerformanceLevelDescriptorsById**](PerformanceLevelDescriptorsApi.md#getPerformanceLevelDescriptorsById) | **GET** /performanceLevelDescriptors/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postPerformanceLevelDescriptors**](PerformanceLevelDescriptorsApi.md#postPerformanceLevelDescriptors) | **POST** /performanceLevelDescriptors | Creates or updates resources based on the natural key values of the supplied resource.
[**putPerformanceLevelDescriptor**](PerformanceLevelDescriptorsApi.md#putPerformanceLevelDescriptor) | **PUT** /performanceLevelDescriptors/{id} | Updates an existing resource based on the resource identifier.


# **deletePerformanceLevelDescriptorById**
> deletePerformanceLevelDescriptorById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PerformanceLevelDescriptorsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deletePerformanceLevelDescriptorById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceLevelDescriptorsApi->deletePerformanceLevelDescriptorById: ', $e->getMessage(), "\n";
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

# **getPerformanceLevelDescriptorByKey**
> \Swagger\Client\Model\PerformanceLevelDescriptor getPerformanceLevelDescriptorByKey($performance_level_descriptor_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PerformanceLevelDescriptorsApi();
$performance_level_descriptor_id = 56; // int | The ID of the Performance Level Descriptor
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getPerformanceLevelDescriptorByKey($performance_level_descriptor_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceLevelDescriptorsApi->getPerformanceLevelDescriptorByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **performance_level_descriptor_id** | [**int**](.md)| The ID of the Performance Level Descriptor | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\PerformanceLevelDescriptor**](PerformanceLevelDescriptor.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPerformanceLevelDescriptorsById**
> \Swagger\Client\Model\PerformanceLevelDescriptor getPerformanceLevelDescriptorsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PerformanceLevelDescriptorsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getPerformanceLevelDescriptorsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceLevelDescriptorsApi->getPerformanceLevelDescriptorsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\PerformanceLevelDescriptor**](PerformanceLevelDescriptor.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postPerformanceLevelDescriptors**
> postPerformanceLevelDescriptors($performance_level_descriptor)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PerformanceLevelDescriptorsApi();
$performance_level_descriptor = new \Swagger\Client\Model\PerformanceLevelDescriptor(); // \Swagger\Client\Model\PerformanceLevelDescriptor | The JSON representation of the \"performanceLevelDescriptor\" resource to be created or updated.

try { 
    $api_instance->postPerformanceLevelDescriptors($performance_level_descriptor);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceLevelDescriptorsApi->postPerformanceLevelDescriptors: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **performance_level_descriptor** | [**\Swagger\Client\Model\PerformanceLevelDescriptor**](\Swagger\Client\Model\PerformanceLevelDescriptor.md)| The JSON representation of the \&quot;performanceLevelDescriptor\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putPerformanceLevelDescriptor**
> putPerformanceLevelDescriptor($id, $performance_level_descriptor, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PerformanceLevelDescriptorsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$performance_level_descriptor = new \Swagger\Client\Model\PerformanceLevelDescriptor(); // \Swagger\Client\Model\PerformanceLevelDescriptor | The JSON representation of the \"performanceLevelDescriptor\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putPerformanceLevelDescriptor($id, $performance_level_descriptor, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceLevelDescriptorsApi->putPerformanceLevelDescriptor: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **performance_level_descriptor** | [**\Swagger\Client\Model\PerformanceLevelDescriptor**](\Swagger\Client\Model\PerformanceLevelDescriptor.md)| The JSON representation of the \&quot;performanceLevelDescriptor\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

