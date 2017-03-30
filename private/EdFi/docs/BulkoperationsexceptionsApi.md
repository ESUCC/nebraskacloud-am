# Swagger\Client\BulkoperationsexceptionsApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](BulkoperationsexceptionsApi.md#get) | **GET** /bulkoperation/{id}/exceptions/{uploadid} | Retrieves collection of exceptions from a bulk operation.


# **get**
> \Swagger\Client\Model\BulkOperationException[] get($id, $uploadid, $offset, $limit)

Retrieves collection of exceptions from a bulk operation.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BulkoperationsexceptionsApi();
$id = "id_example"; // string | id (string): required The unique ID of the operation. This value should be obtained from the operation created via the bulk operations API
$uploadid = "uploadid_example"; // string | uploadId (string): required The unique ID of the in-progress upload on the server. This value should be obtained from the operation created via the bulk operations API
$offset = 56; // int | Indicates how many items should be skipped before returning results.
$limit = 56; // int | Indicates the maximum number of items that should be returned in the results (defaults to 25).

try { 
    $result = $api_instance->get($id, $uploadid, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkoperationsexceptionsApi->get: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id (string): required The unique ID of the operation. This value should be obtained from the operation created via the bulk operations API | 
 **uploadid** | **string**| uploadId (string): required The unique ID of the in-progress upload on the server. This value should be obtained from the operation created via the bulk operations API | 
 **offset** | [**int**](.md)| Indicates how many items should be skipped before returning results. | [optional] 
 **limit** | [**int**](.md)| Indicates the maximum number of items that should be returned in the results (defaults to 25). | [optional] 

### Return type

[**\Swagger\Client\Model\BulkOperationException[]**](BulkOperationException.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

