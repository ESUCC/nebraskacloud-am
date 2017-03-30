# Swagger\Client\ProgramSponsorTypesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProgramSponsorTypeById**](ProgramSponsorTypesApi.md#deleteProgramSponsorTypeById) | **DELETE** /programSponsorTypes/{id} | Deletes an existing resource using the resource identifier.
[**getProgramSponsorTypeByKey**](ProgramSponsorTypesApi.md#getProgramSponsorTypeByKey) | **GET** /programSponsorTypes | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getProgramSponsorTypesById**](ProgramSponsorTypesApi.md#getProgramSponsorTypesById) | **GET** /programSponsorTypes/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postProgramSponsorTypes**](ProgramSponsorTypesApi.md#postProgramSponsorTypes) | **POST** /programSponsorTypes | Creates or updates resources based on the natural key values of the supplied resource.
[**putProgramSponsorType**](ProgramSponsorTypesApi.md#putProgramSponsorType) | **PUT** /programSponsorTypes/{id} | Updates an existing resource based on the resource identifier.


# **deleteProgramSponsorTypeById**
> deleteProgramSponsorTypeById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProgramSponsorTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteProgramSponsorTypeById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ProgramSponsorTypesApi->deleteProgramSponsorTypeById: ', $e->getMessage(), "\n";
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

# **getProgramSponsorTypeByKey**
> \Swagger\Client\Model\ProgramSponsorType getProgramSponsorTypeByKey($program_sponsor_type_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProgramSponsorTypesApi();
$program_sponsor_type_id = 56; // int | Key for ProgramSponsor
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getProgramSponsorTypeByKey($program_sponsor_type_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramSponsorTypesApi->getProgramSponsorTypeByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_sponsor_type_id** | [**int**](.md)| Key for ProgramSponsor | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ProgramSponsorType**](ProgramSponsorType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getProgramSponsorTypesById**
> \Swagger\Client\Model\ProgramSponsorType getProgramSponsorTypesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProgramSponsorTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getProgramSponsorTypesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramSponsorTypesApi->getProgramSponsorTypesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ProgramSponsorType**](ProgramSponsorType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postProgramSponsorTypes**
> postProgramSponsorTypes($program_sponsor_type)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProgramSponsorTypesApi();
$program_sponsor_type = new \Swagger\Client\Model\ProgramSponsorType(); // \Swagger\Client\Model\ProgramSponsorType | The JSON representation of the \"programSponsorType\" resource to be created or updated.

try { 
    $api_instance->postProgramSponsorTypes($program_sponsor_type);
} catch (Exception $e) {
    echo 'Exception when calling ProgramSponsorTypesApi->postProgramSponsorTypes: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_sponsor_type** | [**\Swagger\Client\Model\ProgramSponsorType**](\Swagger\Client\Model\ProgramSponsorType.md)| The JSON representation of the \&quot;programSponsorType\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putProgramSponsorType**
> putProgramSponsorType($id, $program_sponsor_type, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProgramSponsorTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$program_sponsor_type = new \Swagger\Client\Model\ProgramSponsorType(); // \Swagger\Client\Model\ProgramSponsorType | The JSON representation of the \"programSponsorType\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putProgramSponsorType($id, $program_sponsor_type, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ProgramSponsorTypesApi->putProgramSponsorType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **program_sponsor_type** | [**\Swagger\Client\Model\ProgramSponsorType**](\Swagger\Client\Model\ProgramSponsorType.md)| The JSON representation of the \&quot;programSponsorType\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

