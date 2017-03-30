# Swagger\Client\PostSecondaryInstitutionLevelTypesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePostSecondaryInstitutionLevelTypeById**](PostSecondaryInstitutionLevelTypesApi.md#deletePostSecondaryInstitutionLevelTypeById) | **DELETE** /postSecondaryInstitutionLevelTypes/{id} | Deletes an existing resource using the resource identifier.
[**getPostSecondaryInstitutionLevelTypeByKey**](PostSecondaryInstitutionLevelTypesApi.md#getPostSecondaryInstitutionLevelTypeByKey) | **GET** /postSecondaryInstitutionLevelTypes | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getPostSecondaryInstitutionLevelTypesById**](PostSecondaryInstitutionLevelTypesApi.md#getPostSecondaryInstitutionLevelTypesById) | **GET** /postSecondaryInstitutionLevelTypes/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postPostSecondaryInstitutionLevelTypes**](PostSecondaryInstitutionLevelTypesApi.md#postPostSecondaryInstitutionLevelTypes) | **POST** /postSecondaryInstitutionLevelTypes | Creates or updates resources based on the natural key values of the supplied resource.
[**putPostSecondaryInstitutionLevelType**](PostSecondaryInstitutionLevelTypesApi.md#putPostSecondaryInstitutionLevelType) | **PUT** /postSecondaryInstitutionLevelTypes/{id} | Updates an existing resource based on the resource identifier.


# **deletePostSecondaryInstitutionLevelTypeById**
> deletePostSecondaryInstitutionLevelTypeById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostSecondaryInstitutionLevelTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deletePostSecondaryInstitutionLevelTypeById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionLevelTypesApi->deletePostSecondaryInstitutionLevelTypeById: ', $e->getMessage(), "\n";
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

# **getPostSecondaryInstitutionLevelTypeByKey**
> \Swagger\Client\Model\PostSecondaryInstitutionLevelType getPostSecondaryInstitutionLevelTypeByKey($post_secondary_institution_level_type_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostSecondaryInstitutionLevelTypesApi();
$post_secondary_institution_level_type_id = 56; // int | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getPostSecondaryInstitutionLevelTypeByKey($post_secondary_institution_level_type_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionLevelTypesApi->getPostSecondaryInstitutionLevelTypeByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_secondary_institution_level_type_id** | [**int**](.md)| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\PostSecondaryInstitutionLevelType**](PostSecondaryInstitutionLevelType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPostSecondaryInstitutionLevelTypesById**
> \Swagger\Client\Model\PostSecondaryInstitutionLevelType getPostSecondaryInstitutionLevelTypesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostSecondaryInstitutionLevelTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getPostSecondaryInstitutionLevelTypesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionLevelTypesApi->getPostSecondaryInstitutionLevelTypesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\PostSecondaryInstitutionLevelType**](PostSecondaryInstitutionLevelType.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postPostSecondaryInstitutionLevelTypes**
> postPostSecondaryInstitutionLevelTypes($post_secondary_institution_level_type)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostSecondaryInstitutionLevelTypesApi();
$post_secondary_institution_level_type = new \Swagger\Client\Model\PostSecondaryInstitutionLevelType(); // \Swagger\Client\Model\PostSecondaryInstitutionLevelType | The JSON representation of the \"postSecondaryInstitutionLevelType\" resource to be created or updated.

try { 
    $api_instance->postPostSecondaryInstitutionLevelTypes($post_secondary_institution_level_type);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionLevelTypesApi->postPostSecondaryInstitutionLevelTypes: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_secondary_institution_level_type** | [**\Swagger\Client\Model\PostSecondaryInstitutionLevelType**](\Swagger\Client\Model\PostSecondaryInstitutionLevelType.md)| The JSON representation of the \&quot;postSecondaryInstitutionLevelType\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putPostSecondaryInstitutionLevelType**
> putPostSecondaryInstitutionLevelType($id, $post_secondary_institution_level_type, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostSecondaryInstitutionLevelTypesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$post_secondary_institution_level_type = new \Swagger\Client\Model\PostSecondaryInstitutionLevelType(); // \Swagger\Client\Model\PostSecondaryInstitutionLevelType | The JSON representation of the \"postSecondaryInstitutionLevelType\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putPostSecondaryInstitutionLevelType($id, $post_secondary_institution_level_type, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PostSecondaryInstitutionLevelTypesApi->putPostSecondaryInstitutionLevelType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **post_secondary_institution_level_type** | [**\Swagger\Client\Model\PostSecondaryInstitutionLevelType**](\Swagger\Client\Model\PostSecondaryInstitutionLevelType.md)| The JSON representation of the \&quot;postSecondaryInstitutionLevelType\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

