# Swagger\Client\PostGraduateActivitiesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePostGraduateActivityById**](PostGraduateActivitiesApi.md#deletePostGraduateActivityById) | **DELETE** /postGraduateActivities/{id} | Deletes an existing resource using the resource identifier.
[**getPostGraduateActivitiesById**](PostGraduateActivitiesApi.md#getPostGraduateActivitiesById) | **GET** /postGraduateActivities/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**getPostGraduateActivityByKey**](PostGraduateActivitiesApi.md#getPostGraduateActivityByKey) | **GET** /postGraduateActivities | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**postPostGraduateActivities**](PostGraduateActivitiesApi.md#postPostGraduateActivities) | **POST** /postGraduateActivities | Creates or updates resources based on the natural key values of the supplied resource.
[**putPostGraduateActivity**](PostGraduateActivitiesApi.md#putPostGraduateActivity) | **PUT** /postGraduateActivities/{id} | Updates an existing resource based on the resource identifier.


# **deletePostGraduateActivityById**
> deletePostGraduateActivityById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostGraduateActivitiesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deletePostGraduateActivityById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PostGraduateActivitiesApi->deletePostGraduateActivityById: ', $e->getMessage(), "\n";
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

# **getPostGraduateActivitiesById**
> \Swagger\Client\Model\PostGraduateActivity getPostGraduateActivitiesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostGraduateActivitiesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getPostGraduateActivitiesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostGraduateActivitiesApi->getPostGraduateActivitiesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\PostGraduateActivity**](PostGraduateActivity.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPostGraduateActivityByKey**
> \Swagger\Client\Model\PostGraduateActivity getPostGraduateActivityByKey($student_unique_id, $school_year, $local_education_agency_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostGraduateActivitiesApi();
$student_unique_id = "student_unique_id_example"; // string | The NDE student identifier (10-digit) for the CTE Post graduate student. This cannot be a student reference since the Post Graduate Activity is reported one year after student's graduation and student will not be in current year student list.
$school_year = 56; // int | The identifier for the school year.
$local_education_agency_id = 56; // int | EducationOrganization Identity for the district that submitted the graduation record for the CE Student graduate.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getPostGraduateActivityByKey($student_unique_id, $school_year, $local_education_agency_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostGraduateActivitiesApi->getPostGraduateActivityByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| The NDE student identifier (10-digit) for the CTE Post graduate student. This cannot be a student reference since the Post Graduate Activity is reported one year after student&#39;s graduation and student will not be in current year student list. | 
 **school_year** | [**int**](.md)| The identifier for the school year. | 
 **local_education_agency_id** | [**int**](.md)| EducationOrganization Identity for the district that submitted the graduation record for the CE Student graduate. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\PostGraduateActivity**](PostGraduateActivity.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postPostGraduateActivities**
> postPostGraduateActivities($post_graduate_activity)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostGraduateActivitiesApi();
$post_graduate_activity = new \Swagger\Client\Model\PostGraduateActivity(); // \Swagger\Client\Model\PostGraduateActivity | The JSON representation of the \"postGraduateActivity\" resource to be created or updated.

try { 
    $api_instance->postPostGraduateActivities($post_graduate_activity);
} catch (Exception $e) {
    echo 'Exception when calling PostGraduateActivitiesApi->postPostGraduateActivities: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_graduate_activity** | [**\Swagger\Client\Model\PostGraduateActivity**](\Swagger\Client\Model\PostGraduateActivity.md)| The JSON representation of the \&quot;postGraduateActivity\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putPostGraduateActivity**
> putPostGraduateActivity($id, $post_graduate_activity, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostGraduateActivitiesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$post_graduate_activity = new \Swagger\Client\Model\PostGraduateActivity(); // \Swagger\Client\Model\PostGraduateActivity | The JSON representation of the \"postGraduateActivity\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putPostGraduateActivity($id, $post_graduate_activity, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling PostGraduateActivitiesApi->putPostGraduateActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **post_graduate_activity** | [**\Swagger\Client\Model\PostGraduateActivity**](\Swagger\Client\Model\PostGraduateActivity.md)| The JSON representation of the \&quot;postGraduateActivity\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

