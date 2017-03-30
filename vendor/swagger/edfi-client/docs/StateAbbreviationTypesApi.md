# Swagger\Client\StateAbbreviationTypesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStateAbbreviationTypeById**](StateAbbreviationTypesApi.md#deleteStateAbbreviationTypeById) | **DELETE** /stateAbbreviationTypes/{id} | Deletes an existing resource using the resource identifier.
[**getStateAbbreviationTypeByKey**](StateAbbreviationTypesApi.md#getStateAbbreviationTypeByKey) | **GET** /stateAbbreviationTypes | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStateAbbreviationTypesById**](StateAbbreviationTypesApi.md#getStateAbbreviationTypesById) | **GET** /stateAbbreviationTypes/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStateAbbreviationTypes**](StateAbbreviationTypesApi.md#postStateAbbreviationTypes) | **POST** /stateAbbreviationTypes | Creates or updates resources based on the natural key values of the supplied resource.
[**putStateAbbreviationType**](StateAbbreviationTypesApi.md#putStateAbbreviationType) | **PUT** /stateAbbreviationTypes/{id} | Updates an existing resource based on the resource identifier.


# **deleteStateAbbreviationTypeById**
> deleteStateAbbreviationTypeById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StateAbbreviationTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStateAbbreviationTypeById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StateAbbreviationTypesApi->deleteStateAbbreviationTypeById: ', $e->getMessage(), "\n";
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

# **getStateAbbreviationTypeByKey**
> \Swagger\Client\Model\StateAbbreviationType getStateAbbreviationTypeByKey($state_abbreviation_type_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StateAbbreviationTypesApi();
$state_abbreviation_type_id = 56; // int | Key for StateAbbreviationType
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStateAbbreviationTypeByKey($state_abbreviation_type_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateAbbreviationTypesApi->getStateAbbreviationTypeByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state_abbreviation_type_id** | [**int**](.md)| Key for StateAbbreviationType | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StateAbbreviationType**](StateAbbreviationType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStateAbbreviationTypesById**
> \Swagger\Client\Model\StateAbbreviationType getStateAbbreviationTypesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StateAbbreviationTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStateAbbreviationTypesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateAbbreviationTypesApi->getStateAbbreviationTypesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StateAbbreviationType**](StateAbbreviationType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStateAbbreviationTypes**
> postStateAbbreviationTypes($state_abbreviation_type)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StateAbbreviationTypesApi();
$state_abbreviation_type = new \Swagger\Client\Model\StateAbbreviationType(); // \Swagger\Client\Model\StateAbbreviationType | The JSON representation of the \"stateAbbreviationType\" resource to be created or updated.

try { 
    $api_instance->postStateAbbreviationTypes($state_abbreviation_type);
} catch (Exception $e) {
    echo 'Exception when calling StateAbbreviationTypesApi->postStateAbbreviationTypes: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state_abbreviation_type** | [**\Swagger\Client\Model\StateAbbreviationType**](\Swagger\Client\Model\StateAbbreviationType.md)| The JSON representation of the \&quot;stateAbbreviationType\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStateAbbreviationType**
> putStateAbbreviationType($id, $state_abbreviation_type, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StateAbbreviationTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$state_abbreviation_type = new \Swagger\Client\Model\StateAbbreviationType(); // \Swagger\Client\Model\StateAbbreviationType | The JSON representation of the \"stateAbbreviationType\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStateAbbreviationType($id, $state_abbreviation_type, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StateAbbreviationTypesApi->putStateAbbreviationType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **state_abbreviation_type** | [**\Swagger\Client\Model\StateAbbreviationType**](\Swagger\Client\Model\StateAbbreviationType.md)| The JSON representation of the \&quot;stateAbbreviationType\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

