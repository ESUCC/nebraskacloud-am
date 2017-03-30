# Swagger\Client\MagnetSpecialProgramEmphasisSchoolTypesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMagnetSpecialProgramEmphasisSchoolTypeById**](MagnetSpecialProgramEmphasisSchoolTypesApi.md#deleteMagnetSpecialProgramEmphasisSchoolTypeById) | **DELETE** /magnetSpecialProgramEmphasisSchoolTypes/{id} | Deletes an existing resource using the resource identifier.
[**getMagnetSpecialProgramEmphasisSchoolTypeByKey**](MagnetSpecialProgramEmphasisSchoolTypesApi.md#getMagnetSpecialProgramEmphasisSchoolTypeByKey) | **GET** /magnetSpecialProgramEmphasisSchoolTypes | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getMagnetSpecialProgramEmphasisSchoolTypesById**](MagnetSpecialProgramEmphasisSchoolTypesApi.md#getMagnetSpecialProgramEmphasisSchoolTypesById) | **GET** /magnetSpecialProgramEmphasisSchoolTypes/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postMagnetSpecialProgramEmphasisSchoolTypes**](MagnetSpecialProgramEmphasisSchoolTypesApi.md#postMagnetSpecialProgramEmphasisSchoolTypes) | **POST** /magnetSpecialProgramEmphasisSchoolTypes | Creates or updates resources based on the natural key values of the supplied resource.
[**putMagnetSpecialProgramEmphasisSchoolType**](MagnetSpecialProgramEmphasisSchoolTypesApi.md#putMagnetSpecialProgramEmphasisSchoolType) | **PUT** /magnetSpecialProgramEmphasisSchoolTypes/{id} | Updates an existing resource based on the resource identifier.


# **deleteMagnetSpecialProgramEmphasisSchoolTypeById**
> deleteMagnetSpecialProgramEmphasisSchoolTypeById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MagnetSpecialProgramEmphasisSchoolTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteMagnetSpecialProgramEmphasisSchoolTypeById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling MagnetSpecialProgramEmphasisSchoolTypesApi->deleteMagnetSpecialProgramEmphasisSchoolTypeById: ', $e->getMessage(), "\n";
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

# **getMagnetSpecialProgramEmphasisSchoolTypeByKey**
> \Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType getMagnetSpecialProgramEmphasisSchoolTypeByKey($magnet_special_program_emphasis_school_type_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MagnetSpecialProgramEmphasisSchoolTypesApi();
$magnet_special_program_emphasis_school_type_id = 56; // int | Key for MagnetSpecialProgramEmphasisSchool
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getMagnetSpecialProgramEmphasisSchoolTypeByKey($magnet_special_program_emphasis_school_type_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagnetSpecialProgramEmphasisSchoolTypesApi->getMagnetSpecialProgramEmphasisSchoolTypeByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **magnet_special_program_emphasis_school_type_id** | [**int**](.md)| Key for MagnetSpecialProgramEmphasisSchool | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType**](MagnetSpecialProgramEmphasisSchoolType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getMagnetSpecialProgramEmphasisSchoolTypesById**
> \Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType getMagnetSpecialProgramEmphasisSchoolTypesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MagnetSpecialProgramEmphasisSchoolTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getMagnetSpecialProgramEmphasisSchoolTypesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MagnetSpecialProgramEmphasisSchoolTypesApi->getMagnetSpecialProgramEmphasisSchoolTypesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType**](MagnetSpecialProgramEmphasisSchoolType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postMagnetSpecialProgramEmphasisSchoolTypes**
> postMagnetSpecialProgramEmphasisSchoolTypes($magnet_special_program_emphasis_school_type)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MagnetSpecialProgramEmphasisSchoolTypesApi();
$magnet_special_program_emphasis_school_type = new \Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType(); // \Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType | The JSON representation of the \"magnetSpecialProgramEmphasisSchoolType\" resource to be created or updated.

try { 
    $api_instance->postMagnetSpecialProgramEmphasisSchoolTypes($magnet_special_program_emphasis_school_type);
} catch (Exception $e) {
    echo 'Exception when calling MagnetSpecialProgramEmphasisSchoolTypesApi->postMagnetSpecialProgramEmphasisSchoolTypes: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **magnet_special_program_emphasis_school_type** | [**\Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType**](\Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType.md)| The JSON representation of the \&quot;magnetSpecialProgramEmphasisSchoolType\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putMagnetSpecialProgramEmphasisSchoolType**
> putMagnetSpecialProgramEmphasisSchoolType($id, $magnet_special_program_emphasis_school_type, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\MagnetSpecialProgramEmphasisSchoolTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$magnet_special_program_emphasis_school_type = new \Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType(); // \Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType | The JSON representation of the \"magnetSpecialProgramEmphasisSchoolType\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putMagnetSpecialProgramEmphasisSchoolType($id, $magnet_special_program_emphasis_school_type, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling MagnetSpecialProgramEmphasisSchoolTypesApi->putMagnetSpecialProgramEmphasisSchoolType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **magnet_special_program_emphasis_school_type** | [**\Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType**](\Swagger\Client\Model\MagnetSpecialProgramEmphasisSchoolType.md)| The JSON representation of the \&quot;magnetSpecialProgramEmphasisSchoolType\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

