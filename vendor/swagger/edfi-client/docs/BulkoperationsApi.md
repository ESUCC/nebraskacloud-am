# Swagger\Client\BulkoperationsApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](BulkoperationsApi.md#get) | **GET** /bulkOperations/{id} | A summary of what this operation does
[**post**](BulkoperationsApi.md#post) | **POST** /bulkOperations | Create a bulk operation session and retrieve an operation identifier


# **get**
> \Swagger\Client\Model\BulkOperation get($id)

A summary of what this operation does

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BulkoperationsApi();
$id = "id_example"; // string | The operation identifier

try { 
    $result = $api_instance->get($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkoperationsApi->get: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The operation identifier | 

### Return type

[**\Swagger\Client\Model\BulkOperation**](BulkOperation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **post**
> \Swagger\Client\Model\BulkOperation post($body)

Create a bulk operation session and retrieve an operation identifier

This creates a session, during which XML interchange files are uploaded, committed, and processed. An Operation Identifier is returned that will be used for future calls.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BulkoperationsApi();
$body = new \Swagger\Client\Model\BulkOperation(); // \Swagger\Client\Model\BulkOperation | 

try { 
    $result = $api_instance->post($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkoperationsApi->post: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BulkOperation**](\Swagger\Client\Model\BulkOperation.md)|  | 

### Return type

[**\Swagger\Client\Model\BulkOperation**](BulkOperation.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

