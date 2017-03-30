# Swagger\Client\UploadsApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postChunk**](UploadsApi.md#postChunk) | **POST** /uploads/{uploadid}/chunk | Allows for the upload of files parts of a larger upload file.
[**postCommit**](UploadsApi.md#postCommit) | **POST** /uploads/{uploadid}/commit | Creates a Command to commit the uploaded chunks and validate the file appears composable.


# **postChunk**
> \Swagger\Client\Model\Upload postChunk($upload_id, $offset, $size, $upload)

Allows for the upload of files parts of a larger upload file.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UploadsApi();
$upload_id = "upload_id_example"; // string | uploadId (string): required The unique ID of the in-progress upload on the server. This value should be obtained from the operation created via the bulk operations API
$offset = 789; // int | The byte offset of this chunk, relative to the beginning of the full file. This value will be used along with the total expected file size and the bytes value to validate the action. If the offset + bytes > expected bytes or if the bytes received do not match the bytes expected (for the chunk) a 400 Bad Request response will be sent.
$size = 789; // int | The total bytes for this chunk. This value cannot exceed 157286400. If compression is used this should be compressed bytes and not uncompressed bytes
$upload = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The file upload object

try { 
    $result = $api_instance->postChunk($upload_id, $offset, $size, $upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->postChunk: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **string**| uploadId (string): required The unique ID of the in-progress upload on the server. This value should be obtained from the operation created via the bulk operations API | 
 **offset** | **int**| The byte offset of this chunk, relative to the beginning of the full file. This value will be used along with the total expected file size and the bytes value to validate the action. If the offset + bytes &gt; expected bytes or if the bytes received do not match the bytes expected (for the chunk) a 400 Bad Request response will be sent. | 
 **size** | **int**| The total bytes for this chunk. This value cannot exceed 157286400. If compression is used this should be compressed bytes and not uncompressed bytes | 
 **upload** | [**\Swagger\Client\Model\Object**](.md)| The file upload object | 

### Return type

[**\Swagger\Client\Model\Upload**](Upload.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postCommit**
> \Swagger\Client\Model\Upload postCommit($uploadid, $upload)

Creates a Command to commit the uploaded chunks and validate the file appears composable.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UploadsApi();
$uploadid = "uploadid_example"; // string | The id of the upload to commit to the bulk operation.
$upload = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The file upload object

try { 
    $result = $api_instance->postCommit($uploadid, $upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->postCommit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uploadid** | **string**| The id of the upload to commit to the bulk operation. | 
 **upload** | [**\Swagger\Client\Model\Object**](.md)| The file upload object | 

### Return type

[**\Swagger\Client\Model\Upload**](Upload.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

