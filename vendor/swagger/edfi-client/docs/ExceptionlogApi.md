# Swagger\Client\ExceptionlogApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](ExceptionlogApi.md#get) | **GET** /exceptionLog | Returns all the vendors exception log entries


# **get**
> \Swagger\Client\Model\EventLogEntry[] get()

Returns all the vendors exception log entries

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ExceptionlogApi();

try { 
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExceptionlogApi->get: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EventLogEntry[]**](EventLogEntry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

